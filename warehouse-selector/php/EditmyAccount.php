<?php 
    if(isset($_POST['edit']))
    {
        $ID = $_SESSION['WS_ID'];

        $empName = $_POST['empName'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];

        //Update Query
        $personalInfo = "UPDATE employee_information
                        SET Employee_Name = '$empName', Contact_Number = '$contact', 
                        Address = '$address', Birth_Date = '$birthdate', Email_Address = '$email'
                        WHERE Employee_ID = '$ID'
                        ";

        $username = $_POST['username'];
        $password = $_POST['password'];
        //Update Query
        $accountInfo = "UPDATE users SET Username = '$username', Password = '$password'
                        WHERE Employee_ID = '$ID'";

            if(mysqli_query($conn, $personalInfo) && mysqli_query($conn, $accountInfo))
            {
                header('Location:my-account.php');
            }
    }
?>