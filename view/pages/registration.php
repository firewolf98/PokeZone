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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>
    <body>
        <?php include "header.php" ?>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Create your account</h5>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center" >
                                    <label for='email'>Email:</label>
                                    <input type='email' name='email' id='email' required placeholder="Email"/>
                                    <span class="error" id='errorEmail' style="color:red"></span><br>
                                    <label for='password'>Password:</label>
                                    <input type='password' name='pw' id='pw' required placeholder="Password"/>
                                    <span class="error" id="errorPw" style="color:red"></span><br>
                                    <label for='confirmPassword'>Confirm Password:</label>
                                    <input type='password' name='pw' id='cpw' required placeholder="Confirm Password"/>
                                    <span class="error" id="errorCpw" style="color:red"></span><br><br>
                                    <input type='submit' class="btn btn-outline-dark mt-auto" value="Register" onclick="insertPerson()">
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
