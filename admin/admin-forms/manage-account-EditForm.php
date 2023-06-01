<div class="myAccount">
    <!--Personal Information-->
    <div class="userinfo">
        <h3>Personal Information</h3>
            <table>
                <!--Employee Name-->
                <tr>
                    <td><p>Employee Name</p></td>
                    <td><input type="text" class="form-control" name="empName" value="<?php echo $row1['Employee_Name'];?>" readonly/></td>
                </tr>
                <!--Contact Number-->
                <tr>
                    <td><p>Contact Number</p></td>
                    <td><input type="text" class="form-control" name="contact" value="<?php echo $row1['Contact_Number'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" required /></td>
                </tr>
                <!--Address-->
                <tr>
                    <td><p>Address</p></td>
                    <td><textarea name="address" class="form-control" required> <?php echo $row1['Address'];?> </textarea></td>
                </tr>
                <!--Birth Date-->
                <tr>
                    <td><p>Birth Date</p></td>
                    <td><input type="date" class="form-control" value="<?php echo $row1['Birth_Date'];?>" name="birthdate" required/></td>
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
                    <td>
                        <input type="hidden" name="empID" class="form-control" value="<?php echo $ID; ?>" />
                        <p style="font-weight:bold;"> <?php echo $ID; ?> </p> 
                       
                    </td>
                </tr>
                <!--Username-->
                <tr>
                    <td><p>Username</p></td>
                    <td><input type="text" class="form-control" name="username" value="<?php echo $row2['Username']; ?>" readonly/></td>
                </tr>
                <!--Password-->
                <tr>
                    <td><p>Password</p></td>
                    <td><input class="form-control" type="password" name="password" id="pass" value="<?php echo $row2['Password']; ?>" required /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="check" onClick = "showPass()" />Show Password</td>
                </tr>
                <!--User Type-->
                <tr>
                    <td><p>User Type</p></td>
                    <td class="usertype"><?php echo $row2['User_Type']; ?></td>
                </tr>
            </table>
        <div class="buttons">
            <a href = "manage-account.php" class="btn btn-secondary">Cancel</a>
            <a href= "#edit_" class="btn btn-success" data-toggle="modal">Edit</a>
        </div>  
        <?php include('messagebox/editAccount-message.php');?>     
    </div>
    <!--Button-->

</div>