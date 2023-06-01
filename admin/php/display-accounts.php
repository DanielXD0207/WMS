<?php 
    //Queries for Display
    $result = mysqli_query($conn, "SELECT * FROM employee_information WHERE Employee_ID != '$ID'");
    $empInfo = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $result2 = mysqli_query($conn, "SELECT * FROM users WHERE Employee_ID != '$ID'");
    $userInfo = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    $result3 = mysqli_query($conn, "SELECT * FROM archived_accounts");
    $archivedAccount = mysqli_fetch_all($result3, MYSQLI_ASSOC);

?>