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
        
        <?php include "header.php";?>
      
        <!-- Section-->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Create your account</h2>

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

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for='confirmPassword'>Confirm Password:</label>
                                    <input type='password' name='pw' id='cpw' class="form-control form-control-lg" required placeholder="Confirm Password"/>
                                    <span class="error" id="errorCpw" style="color:red"></span>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit" onclick="insertPerson()">Register</button>

                            </div>

                            <div>
                                <p class="mb-0">Have an account? <a href="login.php" class="text-white-50 fw-bold">Sign In</a></p>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <?php include "footer.php" ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->

        <script src="../js/changeLang.js"></script>
        <script src="../js/validateRegistration.js"></script>

        <script>
            function insertPerson() {
                if(validateUser()) {
                    const formData = new FormData();
                    formData.append('email', document.querySelector('#email').value);
                    formData.append('pw', document.querySelector('#pw').value);
                    fetch('../../model/user/insert.php', {
                        method: 'POST',
                        header: {
                            'Content-Type': 'application/json'
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                    })
                    .catch((error) => {
                        console.error("Error: ", error);
                    })
                }
            }
            

        </script>
    </body>
</html>
