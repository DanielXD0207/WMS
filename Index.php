<?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wms";

    $conn = new mysqli($host, $username, $password, $dbname);
        
        if($conn->connect_error)
        {
            die("Connection Failed " .$conn->connect_error);
        }

    // Getting IP Address 
    function getIpAddr(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
        }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
        $ipAddr=$_SERVER['REMOTE_ADDR'];
        }
        return $ipAddr;
    }
?>
<?php 
 session_start();
    if(isset($_POST['login']))
    {
        $errorMsg = "";
        $time = time()-15;
        $ipaddress = getIpAddr();
      
        $query = mysqli_query($conn,"SELECT count(*) as total_count from loginlogs where TryTime > $time 
            and IpAddress = '$ipaddress'");
      
        $check_login_row = mysqli_fetch_assoc($query);
        $total_count = $check_login_row['total_count'];

        if ($total_count == 3) 
        {
            //Checking if the attempt 3, or youcan set the no of attempt her. For now we taking only 3 fail attempted
            $errorMsg = "Too many failed login attempts. Please login after 3 minutes";         
         }
        else
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
            $result = mysqli_query($conn, $sql);
                
            if(mysqli_num_rows($result) > 0 )
            {
                while($rows = mysqli_fetch_assoc($result))
                {
                    $ID = $rows['Employee_ID'];
                    $userType = $rows['User_Type'];

                    if($userType === 'Admin' || $userType === 'admin')
                    {
                        $_SESSION['Admin_ID'] = $ID;
                        $_SESSION['username'] = $username;
                        header('Location:admin/my-account.php');
                    }
                    elseif($userType === 'Warehouse Selector' || $userType === 'warehouse selector')
                    {
                                $_SESSION['WS_ID'] = $ID;
                                $_SESSION['username'] = $username;
                                header('Location:warehouse-selector/my-account.php');
                    }
                    elseif($userType === 'Supply Clerk' || $userType === 'supply clerk')   
                    {
                        $_SESSION['SC_ID'] = $ID;
                        $_SESSION['username'] = $username;
                        header('Location:supply-clerk/my-account.php');
                    }
                }
                
            }
            else
            {
                $total_count++;
                $rem_attm = 3-$total_count;
                    
                if($rem_attm == 0)
                {
                    $errorMsg = "Too many failed login attempts. Please login after 5 minutes";
                }
                else
                {
                    $errorMsg = "Username or Password Incorrect. Please enter valid login details. $rem_attm attempt/s remaining";
                }
                $tryTime = time();
                mysqli_query($conn, "INSERT INTO loginlogs (IpAddress, TryTime) VALUES ('$ipaddress', '$tryTime')");
            }
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <!--Website Icon-->
    <link rel="icon" href="images/bmwt-icon.png" type="image/icon" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Font-Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css" type="text/css" />
</head>
<body>
    <div class="container-sm">
        <div class="loginbox">
            <img src="images/loginpath1.png" class="loginpath" />
            <div class="row">
                <!--Images and Logo-->
                <div class="col">
                    <ul>
                        <li><img src="images/bmwt.png" class="bmwt" /></li>
                        <li><p class="white">Warehouse Management System</p></li>
                    </ul>  
                    <p class="title white">nutri milk</p>
                    <img src="images/login.png" class="loginimg" />
                </div>
                <!--Login Form-->
                <div class="col">
                    <?php if(isset($errorMsg))
                    { 
                        echo '<p class="error-msg">'.$errorMsg.'</p>';   
                    }  
                    ?>
                     
                    <form name ="loginform" method="POST">
                        <label>Username</label>
                        <i><img src="images/myaccount.png" /></i>
                        <input type="text" name="username" required/>
                        <label>Password</label>
                        <i><img src="images/passkey.png" /></i>
                        <i class="far fa-eye" id="showPass"></i>
                        <input type="password" name="password" id="pass" required/>
                        <input type="submit" name="login" value="Login" />
                    </form>
                </div>
            </div>
        </div>
    </div>   
<script type="text/javascript">
    const showPass = document.querySelector('#showPass');
    const password = document.querySelector('#pass');

    showPass.addEventListener('click', function (e) 
    {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
</body>
</html>