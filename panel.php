<?php

session_start();
if(isset($_SESSION['uname'])){
    echo "<h2>Welcome to Product Page</h2>";
    echo "<br><a href='validate.php'<input type=button name=back value=back></a>";

}
else{
    echo "<script>location.href='index.php'</script>";
}