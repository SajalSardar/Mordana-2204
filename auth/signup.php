<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

        

        <!-- Perfect Scrollbar -->
        <link type="text/css" href="http://localhost/Moderna/admin/css/perfect-scrollbar.css" rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css" href="http://localhost/Moderna/admin/css/app.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css" href="http://localhost/Moderna/admin/css/vendor-material-icons.css" rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"  href="http://localhost/Moderna/admin/css/vendor-fontawesome-free.css" rel="stylesheet">

       

    </head>

    <body class="layout-login-centered-boxed">

    
        <div class="layout-login-centered-boxed__form card">


        <?php 
    session_start();
        if(isset($_SESSION['error'])){
            foreach($_SESSION['error'] as $error){
                ?>
                <div class="alert alert-danger"><?=$error?></div>
                <?php 
            }
        }

        unset($_SESSION['error']);
    ?>

            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
                <a href="index.html"
                   class="navbar-brand flex-column mb-2 align-items-center mr-0"
                   style="min-width: 0">
                    <img class="navbar-brand-icon mr-0 mb-2"
                         src="assets/images/stack-logo-blue.svg"
                         width="25"
                         alt="FlowDash">
                    <span>FlowDash</span>
                </a>
                <p class="m-0">Create an account with FlowDash</p>
            </div>

            <a href=""
               class="btn btn-light btn-block">
                <span class="fab fa-google mr-2"></span>
                Continue with Google
            </a>

            <div class="page-separator">
                <div class="page-separator__text">or</div>
            </div>

            <form action="signuppost.php" method="POST">
                <div class="form-group">
                    <label class="text-label"
                           for="name_2">Name:</label>
                    <div class="input-group input-group-merge">
                        <input id="name_2"
                               type="text"
                               class="form-control form-control-prepended"
                               placeholder="Enter Your Name" name="name">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label"
                           for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email_2"
                               type="email"
                               class="form-control form-control-prepended"
                               placeholder="john@doe.com" name="email">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label"
                           for="password_2">Password:</label>
                    <div class="input-group input-group-merge">
                        <input id="password_2"
                               type="password"
                               class="form-control form-control-prepended"
                               placeholder="Enter your password" name="password">
                        
                    </div>
                </div>
                
                <div class="form-group text-center">
                    <button class="btn btn-primary mb-2"
                            type="submit" name="submit">Create Account</button><br>
                    <a class="text-body text-underline"
                       href="login.php">Have an account? Login</a>
                </div>
            </form>
        </div>

    </body>

</html>