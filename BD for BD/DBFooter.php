<?php
error_reporting(0);
if($_GET['LogOut']){
    $_SESSION = array();
    unset($_COOKIE[session_name()]);
    session_destroy();
    echo "<script>window.location.href='http://178.35.152.24/123.php'</script>";


}
?>
