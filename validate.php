<?php

$uname="ignacio";
$pwd="ignacio";

session_start();

if(isset($_SESSION['uname'])){

    echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
    echo "<a href='panel.php'>Product</a><br>";
    echo "<br><a href='close_session.php'><input type=button value=logout name=logout></a>";

}
else{
    if($_POST['uname']==$uname && $_POST['pwd'] == $pwd){
        $_SESSION['uname']=$uname;
        echo "<script>location.href='validate.php'</script>";
    }
    else{
        echo "<script>alert('username or password incorrect!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}