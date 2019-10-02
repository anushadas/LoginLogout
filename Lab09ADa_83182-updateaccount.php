<?php

//Require
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserDAO.class.php");
require_once("inc/Utility/Page.class.php");

session_start();

if(isset($_POST['logoutBtn']))
{
    header('Location:Lab09ADa_83182-logout.php');
}
//Verify the Login
$stat = LoginManager::verifyLogin();
if($stat)
{
    //Initialize the user DAO
    UserDAO::init();
    //Get the current User thats logged in from the session
    $u=$_SESSION['loggedin'];
    Page::header();
    Page::showUserDetails($u);
    Page::footer();
}
else
{
    header('Location:Lab09ADa_83182-login.php');
}
?>