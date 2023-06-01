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
?>

<?php 
    if(isset($_POST['addAccount']))
    {
        $empName = $_POST['empName'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $empID = $_POST['empID'];
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $userType = $_POST['userType'];
        $dateAdded = date("Y/m/d");

        $check1 = "SELECT * FROM users WHERE Employee_ID = '$empID'";
        $check2 = "SELECT * FROM employee_information WHERE Employee_ID = '$empID'";

        //Queries

        $insertInfo = "INSERT INTO employee_information (Employee_ID, Employee_Name, Contact_Number, Address, Birth_Date, Email_Address)
                        VALUES ('$empID', '$empName', '$contact', '$address', '$birthdate', '$email')";
                        
        $insertAccount = "INSERT INTO users (Employee_ID, Username, Password, User_Type, Date_Added)
                        VALUES ('$empID', '$userName', '$password', '$userType', '$dateAdded')";

            if(mysqli_query($conn, $insertInfo) && mysqli_query($conn, $insertAccount))
            {
                header('Location:../manage-account.php');
            }
            else
            {
                echo '<script>alert("Failed Adding");
                        window.location.href = "../manage-account.php";
                      </script>';
            }          
    }

?>