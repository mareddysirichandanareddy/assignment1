<?php
 
    include("database.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    $passwordsecured = md5($password);
    if($firstname=="" || $lastname=="" ||   $email=="" || $password=="" ||  $rpassword=="" || $username==""){
        echo "Some fields are empty. Please enter all fields.";
    }else if($password != $rpassword ){
         echo "Password and confirm password not matched. :/";
    }else if($firstname !="" && $lastname!="" &&   $email!="" && $password!="" &&  $rpassword!=""){
        echo "good";
    }else{
        echo "Something went wrong.Please try again.";
    }
    
$sql = "INSERT INTO `login`(`sno`, `username`, `firstname`, `lastname`, `email`, `password`, `status`) VALUES (NULL,'".$username."','".$firstname."','".$lastname."','".$email."','".$passwordsecured."',1)"; 
 

if ($conn->query($sql) === TRUE) {
    header("Location: registration.php?status=success"); /* Redirect browser */ 
    exit();
} else {
     header("Location: registration.php?status=failed"); /* Redirect browser */ 
     exit();
}

$conn->close();
?>
 
