<?php
//Require Files
require_once("inc/config.inc.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserDAO.class.php");
require_once("inc/Utility/Page.class.php");

//Check if the form was posted
if(isset($_POST['loginBtn']))
{
     //Initialize the DAO
     UserDAO::init();

     //Get the current user 
     $authUser = UserDAO::getUser($_POST['username']);
    
    //Check the DAO returned an object of type user
    if($authUser instanceof User)
    {
        if(!empty($authUser))
        {
            //Check the password
        if ($authUser->verifyPassword($_POST['password']))  {
            //Start the session
            session_start();
            //Set the user to logged in
            $_SESSION['loggedin'] = $authUser;
            //Send the user to the user managment page Lab09SHi_56789-updateaccount.php
            header('Location:Lab09ADa_83182-updateaccount.php');
        }
    
        }
    }
}
//Set the age Title
Page::$title = "Lab09_ADa-83182";
Page::header();
Page::showLogin();
Page::footer();


?>