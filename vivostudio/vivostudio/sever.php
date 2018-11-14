<?php
session_start();

$errors= array();
$firstname="";
$lastname="";
$username="";
$email="";

$db=mysqli_connect('localhost','root','','studio');



if (isset($_POST['register1']))
{
    $firstname= ($_POST['firstname']);
    $lastname=  ($_POST['lastname']);
    $username= ($_POST['username']);
    $email= ($_POST['email']);
    $password1= ($_POST['password1']);
    $password2= ($_POST['password2']);


    if(empty($firstname))
    {
        array_push($errors,"First Name is required");
    }
    if(empty($lastname))
    {
        array_push($errors,"Last Name is required");
    }
    if(empty($username))
    {
        array_push($errors,"User Name is required");
    }
    if(empty($email))
    {
        array_push($errors,"Email is required");
    }
    if(empty($password1))
    {
        array_push($errors,"Password is required");
    }
    if($password1 != $password2)
    {
        array_push($errors,"Password does not match");
    }


    if(count($errors) == 0)
    {
        $password=md5($password1);
        $sql="INSERT INTO reg (firstname, lastname, username, email, password1) VALUES ('$firstname','$lastname','$username','$email','$password1')";
        mysqli_query($db, $sql);
        
        $_SESSION['username']=$username;
        $_SESSION['success']= "Logged in";
        header('location:reg_done.php');
        
    }

    

}



if (isset($_POST['login']))
{
	$email= ($_POST['email']);
    $password= ($_POST['password1']);


if(empty($email))
{
	array_push($errors, "Email is required");
}

if(empty($password))
{
	array_push($errors, "Password is required");
}
if (count($errors)==0){
	$password1= md5($password);
	$query="SELECT* FROM reg WHERE email='$email' AND password1='$password'";
	$result = mysqli_query($db, $query);
	
	if(mysqli_num_rows($result)==1){
		
		            
		            $_SESSION['email']=$email;
					$_SESSION['success']= "Logged in";
					header('location:Myaccount.php');e
					
		}else{
			array_push($errors,"wrong username/password");
		
}
}
	}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['email']);
	header('location:index.php');
}

?>