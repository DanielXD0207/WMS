<div class="myAccount">
    <!--Personal Information-->
    <div class="userinfo">
        <h3>Personal Information</h3>
        <table>
            <!--Employee Name-->
            <tr>
                <td><p>Employee Name</p></td>
                <td><input type="text" name="empName" class="form-control" value="<?php echo $row1['Employee_Name'];?>" readonly/></td>
            </tr>
            <!--Contact Number-->
            <tr>
                <td><p>Contact Number</p></td>
                <td><input type="text" name="contact" class="form-control" value="<?php echo $row1['Contact_Number'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" required /></td>
            </tr>
            <!--Address-->
            <tr>
                <td><p>Address</p></td>
                <td><textarea name="address" class="form-control" required><?php echo $row1['Address'];?></textarea></td>
            </tr>
            <!--Birth Date-->
            <tr>
                <td><p>Birth Date</p></td>
                <td><input type="date" class="form-control" name="birthdate" value="<?php echo $row1['Birth_Date'];?>" readonly/></td>
            </tr>
            <!--Email Address-->
            <tr>
                <td><p>Email Address</p></td>
                <td><input type="email" class="form-control" name="email" value="<?php echo $row1['Email_Address'];?>" readonly/></td>
            </tr>
        </table>
    </div>
    <!--Account Information-->
    <div class="accountInfo">
        <h3>Account Information</h3>
        <table>
            <!--Employee ID-->
            <tr>
                <td><p>Employee_ID</p></td>
                <td class="empID"><?php echo $ID; ?> </td>
            </tr>
            <!--Username-->
            <tr>
                <td><p>Username</p></td>
                <td><input type="text" class="form-control" name="username" value="<?php echo $row2['Username'];?>" readonly /></td>
            </tr>
            <!--Password-->
            <tr>
                <td><p>Password</p></td>
                <td><input type="password" class="form-control" id="pass" name="password" value="<?php echo $row2['Password'];?>" required/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="check" onClick="showPass()" />Show Password</td>
            </tr>
            <!--User Type-->
            <tr>
                <td><p>User Type</p></td>
                <td class="usertype"><?php echo $row2['User_Type'];?></td>
            </tr>
        </table>
        <!--Edit Button-->
        <div class="buttons">
            <a href="#save_<?php echo $ID; ?>" data-toggle="modal" class="btn btn-success">Save</a>
            <a href = "my-account.php" class="btn btn-danger">Cancel</a>
        </div>          
    </div>

    <?php include('messagebox/saveaccount-message.php');?>
</div>