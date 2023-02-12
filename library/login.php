

<?php


include('header2.php'); 

if($_POST)
{

	

    include 'config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sUser=mysqli_real_escape_string($conn,$username);
    $sPass=mysqli_real_escape_string($conn,$password);
    $query="SELECT * From auth where username='$sUser' and password='$sPass'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['anything']='something';
        header('location:index.php');
    }
    
}

?>



<form class="form2" method="POST">
Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <input class="btn brand" value="Login" type="submit">

</form>

