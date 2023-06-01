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
date_default_timezone_set('Asia/Manila');
    if(isset($_GET['id']))
    {
            $empID = $_GET['id'];

            $select = mysqli_query($conn, "SELECT * FROM employee_information WHERE Employee_ID = '$empID'");
            $select2 = mysqli_query($conn, "SELECT * FROM users WHERE Employee_ID = '$empID'");
            $rows = mysqli_fetch_assoc($select); $dateNow = date("Y/m/d");
            $row = mysqli_fetch_assoc($select2);

            $empName = $rows['Employee_Name'];
            $contact = $rows['Contact_Number'];
            $address = $rows['Address'];
            $birth = $rows['Birth_Date'];
            $emailAdd = $rows['Email_Address'];
            
            $username = $row['Username'];
            $password = $row['Password'];
            $userType = $row['User_Type'];
            $dateAdded = $row['Date_Added'];

            //Queries
            $delete = "DELETE FROM employee_information WHERE Employee_ID = '$empID'";
            $delete2 = "DELETE FROM users WHERE Employee_ID = '$empID'";
            $archived = "INSERT INTO archived_accounts (Employee_ID, Username, Password, Date_Added, User_Type, Date_Archived,
                        Employee_Name, Contact_Number, Address, Birth_Date, Email_Address)
                        VALUES ('$empID', '$username', '$password', '$dateAdded', '$userType', '$dateNow', '$empName', '$contact',
                        '$address', '$birth', '$emailAdd')";
                        
                if(mysqli_query($conn, $delete) && mysqli_query($conn, $delete2) && mysqli_query($conn, $archived))
                {
                    header('Location:../manage-account.php');
                }
                else
                {
                    header('Location:../manage-account.php');
                }
    }
?>