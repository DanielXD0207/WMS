<div class="row manageAccountHead">
    <div class="col-4" id="accountList"><a href="#" id="listaccount">Account List</a></div>
    <div class="col-4" id="addAccount"><a href="#" id="addacc">Add Account</a></div>
    <div class="col-4" id="archivedAccount"><a href="#" id="archived">Archived Accounts</a></div>
</div>

<!--ACCOUNT LIST-->
<div class="accountList">
    <table class="table table-sm table-bordered">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Employee ID</th>
            <th>Date Added</th>
            <th>User Type</th>
            <th>Employee Name</th>
            <th>Birth Date</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php 
            foreach($empInfo as $info):
                foreach($userInfo as $user):
                    $infoID = $info['Employee_ID'];
                    $userID = $user['Employee_ID'];
                    if($userID === $infoID){
        ?>
        <tr>
            <td><?php echo $user['Username']; ?></td>
            <td><?php echo str_repeat("*", strlen($user['Password']));?></td>
            <td><?php echo $user['Employee_ID']; ?></td>
            <td><?php echo date("F j Y", strtotime($user['Date_Added'])); ?></td>
            <td><?php echo $user['User_Type']; ?></td>
            <td><?php echo $info['Employee_Name']; ?></td>
            <td><?php echo date("F j Y", strtotime($info['Birth_Date'])); ?></td>
            <td><?php echo $info['Contact_Number']; ?></td>
            <td><?php echo $info['Address']; ?></td>
            <td><?php echo $info['Email_Address']; ?></td>
            <td>
                <a href="#edit_<?php echo $user['Employee_ID']; ?>" data-toggle="modal" class="btn btn-success edit">
                    <i class="bi bi-pencil-square"></i> 
                    Edit
				</a>
                <a href="#archive_<?php echo $user['Employee_ID']; ?>" data-toggle="modal" class="btn btn-danger archive">  
                    <i class="bi bi-archive"></i>
                    Archive  
				</a>           
            </td>

            <?php include('messagebox/accountList-message.php');?>
        </tr>
        <?php 
                    }
            endforeach; 
            endforeach;    
        ?>
    </table>
</div>

<!--ADD ACCOUNT-->
<form action="php/addAccount.php" method="POST">
    <div class="addAccount">
        <!--Personal Information-->
        <div class="userinfo">
            <h3>Personal Information</h3>
                <table>
                    <!--Employee Name-->
                    <tr>
                        <td><p>Employee Name</p></td>
                        <td><p style="font-weight:bold;"><input type="text" class="form-control" name="empName" required/></td>
                    </tr>
                    <!--Contact Number-->
                    <tr>
                        <td><p>Contact Number</p></td>
                        <td><p style="font-weight:bold;"><input type="text" class="form-control" name="contact" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" required /></td>
                    </tr>
                    <!--Address-->
                    <tr>
                        <td><p>Address</p></td>
                        <td><p style="font-weight:bold;"><textarea name="address" class="form-control" required></textarea></td>
                    </tr>
                    <!--Birth Date-->
                    <tr>
                        <td><p>Birth Date</p></td>
                        <td><p style="font-weight:bold;"><input type="date" class="form-control" name="birthdate" required/></td>
                    </tr>
                    <!--Email Address-->
                    <tr>
                        <td><p>Email Address</p></td>
                        <td><p style="font-weight:bold;"><input type="email" class="form-control" oninput="populateUser();" onkeypress="populateUser();" id="email" name="email" required/></td>
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
                        <td><input type="text" class="form-control" name="empID" required/></td>
                    </tr>
                    <!--Username-->
                    <tr>
                        <td><p>Username</p></td>
                        <td><input type="text" class="form-control" id="user" name="username" onkeydown = "return false" /></td>
                    </tr>
                    <!--Password-->
                    <tr>
                        <td><p>Password</p></td>
                        <td><input type="password" id="pass" class="form-control" name="password" required/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="check" onClick="showPass()" />Show Password</td>
                    </tr>
                    
                    <!--User Type-->
                    <tr>
                        <td><p>User Type</p></td>
                        <td>
                            <select name="userType" class="form-control" style="text-align:center;" required>
                                <option value=''>Select User Type</option>
                                <option value="Admin">Admin</option>
                                <option value="Warehouse Selector">Warehouse Selector</option>
                                <option value="Supply Clerk">Supply Clerk</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div>
                    <a href="#add_" class="btn btn-success add" data-toggle="modal">Add</a>
                </div>                        
        </div>
        <!--Edit-->
        <?php include('messagebox/addaccount-message.php');?>
    </div>
</form>


<!--ARCHIVED LIST-->
<div class="archivedList table">
    <table class="table table-sm table-bordered">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Employee ID</th>
            <th>Date Added</th>
            <th>User Type</th>
            <th>Employee Name</th>
            <th>Birth Date</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Email</th>
            <th>Date Archived</th>
        </tr>
        <?php 
            foreach($archivedAccount as $archived):
        ?>
        <tr>
            <td><?php echo $archived['Username']; ?></td>
            <td><?php echo $archived['Password']; ?></td>
            <td><?php echo $archived['Employee_ID']; ?></td>
            <td><?php echo date("F j Y", strtotime($archived['Date_Added'])); ?></td>
            <td><?php echo $archived['User_Type']; ?></td>
            <td><?php echo $archived['Employee_Name']; ?></td>
            <td><?php echo date("F j Y", strtotime($archived['Birth_Date'])); ?></td>
            <td><?php echo $archived['Contact_Number']; ?></td>
            <td><?php echo $archived['Address']; ?></td>
            <td><?php echo $archived['Email_Address']; ?></td>
            <td><?php echo date("F j Y", strtotime($archived['Date_Archived'])); ?></td>
        </tr>
        <?php endforeach;?>

    </table>
</div>

<script>
    function populateUser(e) {
        var textbox1 = document.getElementById('email');
        var textbox2 = document.getElementById('user');

        textbox2.value = textbox1.value;

        return false; // Prevent form auto submittal
    }
    
</script>