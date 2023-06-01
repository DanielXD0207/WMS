<div class="myAccount">
        <!--Personal Information-->
        <div class="userinfo">
            <h3>Personal Information</h3>
            <table>
                <!--Employee Name-->
                <tr>
                    <td><p>Employee Name</p></td>
                    <td><p style="font-weight:bold;"><?php echo $rows['Employee_Name'];?></p></td>
                </tr>
                <!--Contact Number-->
                <tr>
                    <td><p>Contact Number</p></td>
                    <td><p style="font-weight:bold;"><?php echo $rows['Contact_Number'];?></p></td>
                </tr>
                <!--Address-->
                <tr>
                    <td><p>Address</p></td>
                    <td><p style="font-weight:bold;"><?php echo $rows['Address'];?></p></td>
                </tr>
                <!--Birth Date-->
                <tr>
                    <td><p>Birth Date</p></td>
                    <td><p style="font-weight:bold;"><?php echo date("F j Y", strtotime($rows['Birth_Date']));?></p></td>
                </tr>
                <!--Email Address-->
                <tr>
                    <td><p>Email Address</p></td>
                    <td><p style="font-weight:bold;"><?php echo $rows['Email_Address'];?></p></td>
                </tr>
            </table>
        </div>
        <!--Account Information-->
        <div class="accountInfo">
            <h3>Account Information</h3>
            <table>
                <tr>
                    <td><p>Employee_ID</p></td>
                    <td><p style="font-weight:bold;"><?php echo $row['Employee_ID'];?></p></td>
                </tr>
                <tr>
                    <td><p>Username</p></td>
                    <td><p style="font-weight:bold;"><?php echo $row['Username'];?></p></td>
                </tr>
                <tr>
                    <td><p>Password</p></td>
                    <td><p style="font-weight:bold;"><?php echo str_repeat("*", strlen($row['Password']));?></p></td>
                </tr>
                <tr>
                    <td><p>User Type</p></td>
                    <td><p style="font-weight:bold;"><?php echo $row['User_Type'];?></p></td>
                </tr>
            </table>
            <!--Edit Button  
            <div class="buttons">
                <a href="my-account-Edit.php" class="btn btn-primary"> Edit</a>
            </div>--> 
        </div>       
</div>