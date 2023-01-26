<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <?php
                    $index_path = '';
                    if(file_exists('index.php')){
                        $index_path = 'index.php';
                    }else {
                        $index_path = '../../index.php';
                    }
                ?>
                <a class="navbar-brand" href=<?php echo $index_path ?>>Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Help</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <input type="text" name="search" id="search" placeholder="Search..." style="margin:0px 100px">
                    <a href="login.php" style="padding-right:20px">Sign in</a>
                    <form class="d-flex" action="view/pages/registration.php">
                        <button class="btn btn-outline-dark" type="submit">
                            Sign Up
                        </button>
                    </form>
                    <button type="submit" class="fa fa-search" style="margin:0px 10px">
						<span class="glyphicon glyphicon-search"></span> Cerca
					</button>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>