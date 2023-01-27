<?php
    $lang="en";
    if(isset($_COOKIE['lang'])) {
        $lang=$_COOKIE['lang'];
    }
    $lang_path = "";
    if(file_exists("../lang/" . $lang . '.php')){
        $lang_path = "../lang/" . $lang . '.php';
    }else {
        $lang_path = "view/lang/" . $lang . ".php";
    }
    include($lang_path);
?>

<!-- Navbar -->
<div class="navbar navbar-light bg-light navbar-expand-md px-3">

    <?php
        $index_path = '';
        if(file_exists('index.php')){
            $index_path = 'index.php';
        }else {
            $index_path = '../../index.php';
        }
    ?>

    <a href=<?php echo $index_path ?> class="navbar-brand">
        <img src="/static_files/images/logos/logo_1.png" alt="" ezimgfmt="rs rscb1 src ng ngcb1" width="200px" height="50px">
    </a>
    <div class="input-group w-50 dark">
        <span class="btn btn-outline-dark input-group-text" id="basic-addon1">
            <i class="bi bi-caret-down"></i>  
        </span>
        <input type="text" class="form-control" placeholder=<?php echo $search?> aria-label="Input group example" aria-describedby="basic-addon1"> 
        <span class="btn btn-outline-dark input-group-text" id="basic-addon1">
            <i class="bi bi-search"></i>  
        </span>
    </div>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="menu">
        <ul class="navbar-nav ms-auto" style="list-style:none">
            <li class="nav-item mx-3">
                <a href="#" class="nav-link"><?php echo $home?></a>
            </li>
            <li class="nav-item mx-3">
                <a href="#" class="nav-link"><?php echo $help?></a>
            </li>
            <li class="nav-item mx-3">
                <a href="#" class="nav-link"><?php echo $about?></a>
            </li>
            <li class="nav-item mx-3">
                <a href="model/user/logout.php" class="nav-link"><?php echo $signout?></a>
            </li>
            <li class="nav-item mx-3">
            
                    <form class="d-flex" action="view/pages/registration.php">
                        <button class="btn btn-outline-dark" type="submit">
                        <?php echo $signup?>
                        </button>
                    </form>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link">
                    <i class="bi bi-three-dots-vertical"></i>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Header-->
<header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>