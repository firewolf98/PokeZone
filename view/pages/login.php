<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign Up | PokeZone</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/header.css" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>
    <body>

        <?php include "header.php" ?>

        <!-- Section-->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your email and password!</p>

                                <form method="POST" action="../../model/user/login.php">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="email">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" required placeholder="Email"/>
                                        <span class="error" id='errorEmail' style="color:red"></span>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="pw">Password:</label>
                                        <input type="password" name="pw" id="pw" class="form-control form-control-lg" required placeholder="Password"/>
                                        <span class="error" id="errorPw" style="color:red"></span>
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                </form>

                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="registration.php" class="text-white-50 fw-bold">Sign Up</a></p>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <?php include "footer.php" ?>

        <script src="../js/changeLang.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->

        

        
    </body>
</html>