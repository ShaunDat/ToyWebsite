<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
    $connect = mysqli_connect('localhost','root','','Websitemusic');
    if (!$connect){
    echo "ket noi that bai";
              }
    if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
        $UserID=$_GET['id'];
        $sql = "DELETE FROM `user` WHERE UserID='$UserID'";
        // DELETE FROM `song` WHERE `song`.`SongID` = 3
        if ($connect->query($sql) === TRUE) {
            echo "Deleted successfully!";
            echo"<script>window.open('FormUser.php','_self')</script>";
            } 
            else {
            echo "Error updating record: " . $connect->error;
            }
              $connect->close();
            }
    ?>
</body>
</html>