<html>
    <body>
    <?php
include_once("config.php");
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($mysqli,$_POST['name']);
$age=mysqli_real_escape_string($mysqli,$_POST['age']);
$email=mysqli_real_escape_string($mysqli,$_POST['email']);
if(empty($name)){
    echo"<font color='red'>Name field is empty.</font>
    <br/>";  
}
if(empty($age)){
    echo"<font color='red'>age field is empty.</font>
    <br/>";  
}
if(empty($email)){
    echo"<font color='red'>email field is empty.</font>
    <br/>";  
}
}else{ 
    $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email)
    VALUES('$name','$age','$email')");
if (!$result)die("insertion failed: ".mysqli_error($mysqli));
echo"<font color='green'>Data added successfully.";
echo"<br/><a href='index.php'>View result</a>";
 
}
?>
</body>
</html>