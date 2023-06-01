<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'wms';

    $conn = new mysqli($servername, $username, $password, $dbname);
        
        if($conn->connect_error)
        {
            die("Connection Failed " .$conn->connect_error);
        }
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["asd"])){ 
    $status = 'error'; 
    if(!empty($_FILES["file"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["file"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['file']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = mysqli_query($conn, "INSERT into inventory_product_lists 
                (Product_Image) VALUES ('$imgContent')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 

?>
<form method="POST" enctype="multipart/form-data">
<input type="file" name="file" id="file">
<input type="submit" name="asd" />
</form>

<?php 
$select = mysqli_query($conn, "SELECT * FROM inventory_product_lists");
$rows = mysqli_fetch_assoc($select);

echo'<img src="data:image/jpeg;base64,'.base64_encode($rows['Product_Image']).'" style = "border-radius:80px; height:600px; width:600px; margin-top:2px; margin-right:10px;"/>'
?>