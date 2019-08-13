<?php
$servername="localhost";
$username="root";
$password="";
$dbname="justsend";

$db=mysqli_connect($servername,$username,$password,$dbname);

function codegeneration()
{
    $codegenerate = 'cdefghijklmnopqrstuvwxyz';
    $a= substr(str_shuffle($codegenerate), 0, 5);
    return $a;
}
    
   
if(isset($_POST['submit'])){
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Subject=$_POST['subject'];
    $Message=$_POST['msg'];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $code=codegeneration();

    $upload="INSERT INTO messages(name,email,subject,msg,image,code) VALUES('$Name','$Email','$Subject','$Message','$image','$code')";
    if(mysqli_query($db,$upload)){
        header('location:code.php?code='.$code);
    }
        //$_SESSION['msg']="Done sucessfully";
    //header('location:readmsg.php');//rediect to index page after insertion
}
?>


