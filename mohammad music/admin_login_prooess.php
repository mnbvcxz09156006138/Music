<?php
$username =$_POST["username"];
$pessword = $_POST["pessword"];
if ($username =="mohammad" && $pessword ="09156006138")
{
    $_SESSION["login_status"] = true;
 header("Location: admin_dashboard.php");
}
else
{
    header("Location:admin_login.php");

}

?>