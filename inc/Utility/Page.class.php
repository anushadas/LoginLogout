<?php

class Page  {
    public static $title = "Lab 09 - SWh_56789";
    
    static function header() { ?>

        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title><?php echo self::$title; ?></title>
            <!-- <meta http-equiv="refresh" content="3"> -->

        </head>
        <body>
        <div class="container">
            <h1><?php echo self::$title; ?></h1>

           
    <?php }

    static function footer()    { ?>
        </div>
            <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
            </html>
    <?php }

    static function showUserDetails(User $u) { ?>
    <p>User Name : <?php echo $u->getUserName();?></p>
    <p>First Name : <?php echo $u->getFirstName();?></p>
    <p>Last Name : <?php echo $u->getLastName();?></p>
    <p>Email Address : <?php echo $u->getEmail();?></p>
    <p>Phone Number : <?php echo $u->getPhone();?></p>
    <p>Gender : <?php echo $u->getGender();?></p>
    <p>Age : <?php echo $u->getAge();?></p>
    <form method="post" action="">
    <div class="form-group row">
        <div class="col-sm-5">
        <button type="submit" class="btn btn-primary" name="logoutBtn">Log Out</button>
        </div>
    </div>
    <form>

   
<?php }

    static function showLogin() { ?>
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
   <form method="post" action="" class="form-signin"> 
    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Username</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Password</label>
        <div class="col-sm-5">
        <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-5">
        <button type="submit" class="btn btn-primary" name="loginBtn">Log in</button>
        </div>
    </div>
   </form> 
    <?php }

    static function thankyou()
    {
        if(isset($_SESSION['loggedin']))
        {
            $u = $_SESSION['loggedin'];
        }
       if(!empty($u))
       {
        ?>
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Logout succesful</h4>
        <p><?php echo $u->getUsername(). ' has been succesfully logged out of Lab09_ADa_83182'; ?></p>
        </div>
        <?php
       }
       else
       {
        header('Location:Lab09ADa_83182-login.php');
       }
    }

}