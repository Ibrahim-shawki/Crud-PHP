<?php require '../config.php';?>
<?php

  if(isset($_SESSION['admin_name'])){
    header("location:".BURLA.'index.php');
  }

?>
<?php require BL.'functions/validate.php';?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Dashboard | Login</title>
  </head>
  <body>


  <div class="container">
         <?php

            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                if(checkEmpty($email) && checkEmpty($password))
                {
                    if(validEmail($email)){

                        $check = getRow('admins','admin_email',$email);
                        $check_password = password_verify($password,$check['admin_password']);
                        if($check_password){
                            $_SESSION['admin_name'] = $check['admin_name'];
                            $_SESSION['admin_email'] = $check['admin_email'];
                            $_SESSION['admin_id'] = $check['admin_id'];

                            header('location:'.BURLA.'index.php');
                            die();
                        }
                        else{
                            $error_message = "Data Not Correct";
                            
                            
                        }

                    }else{
                        $error_message = "Please Type Correct email";
                    }
                }else{
                    
                    $error_message= "PLease Fill All Filds";
                }
            }






        ?>

    <form form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
         <section class="vh-100 gradient-custom">
             <div class="container py-5 h-100">
                 <?php require BL.'functions/messages.php'; ?>
                 <div class="row d-flex justify-content-center align-items-center h-100">
                     <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                                    <label>Password</label>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Login</button>


                                </div>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </section>
    </form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>




  </body>
</html>