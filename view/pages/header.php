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
        $login_path = "";
        $signup_path = "";
        $help_path = "";
        $about_path = "";
        $news_path = "";
        $partners_path = "";
        $background_path = "";
        if(file_exists('index.php')){
            $index_path = 'index.php';
            $login_path = "view/pages/login.php";
            $signup_path = "view/pages/registration.php";
            $help_path = "view/pages/help.php";
            $about_path = "view/pages/about.php";
            $news_path = "view/pages/news.php";
            $partners_path = "view/pages/partners.php";
            $background_path = "assets/background.png";
        }else {
            $index_path = '../../index.php';
            $login_path = "login.php";
            $signup_path = "registration.php";
            $help_path = "help.php";
            $about_path = "about.php";
            $news_path = "news.php";
            $partners_path = "partners.php";
            $background_path = "../../assets/background.png";
        }
    ?>

    <style>
        section {
            background-image: url(<?php echo $background_path?>);
        }

        .card-img-top{
            background-color: lavender;
        }

        .card{
            background-color: antiquewhite
        }

        #types{
            background-color: lightsalmon;
        }

        .text-container {
            color:black;
            font-weight: bold;
            background:antiquewhite;
            border-radius: 20px;
            padding: 0 10px;
            font-size: large;
        }

        #last-pokemon-container {
            border-radius: 20px;
            border-style: solid;
            border-width: 1px;
        }
    </style>

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
                <a href=<?php echo $index_path ?> class="nav-link"><?php echo $home?></a>
            </li>
            <li class="nav-item mx-3">
                <a href=<?php echo $help_path ?> class="nav-link"><?php echo $help?></a>
            </li>
            <li class="nav-item mx-3">
                <a href=<?php echo $about_path ?> class="nav-link" ><?php echo $about?></a>
            </li>
            <li class="nav-item mx-3">
                <a href=<?php echo $login_path ?> class="nav-link"><?php echo $signin?></a>
            </li>
            <li class="nav-item mx-3">
            
                    <form class="d-flex" action=<?php echo $signup_path ?>>
                        <button class="btn btn-outline-dark" type="submit">
                            <?php echo $signup?>
                        </button>
                    </form>
            </li>

            <li class="nav-item mx-3">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href=<?php echo $index_path ?>><i class="bi bi-house-door-fill"></i> <?php echo $home?></a></li>
                    <!--<li><a class="dropdown-item" href="#"><i class="bi bi-moon-fill"></i> <?php //echo $dmode?></a></li>-->
                    <li><a class="dropdown-item" href=<?php echo $news_path ?>><i class="bi bi-file-text-fill"></i> <?php echo $news?></a></li>
                    <li><a class="dropdown-item" href=<?php echo $partners_path ?>><i class="bi bi-diamond-fill"></i> <?php echo $partners?></a></li>
                    <li><a class="dropdown-item" href=<?php echo $login_path ?>><i class="bi bi-person-circle"></i> <?php echo $signin?></a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#languageModal"><img src=<?php echo "https://img.icons8.com/color/48/null/" . $flag . "-circular.png"?> width="16" height="16"/> <?php echo $languages?></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- Header-->
<header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white"  >
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
</header>

<!-- The Modal -->
<div class="modal" id="languageModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title"><?php echo $languages . ":"?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <ul style="list-style-type: none">
            <li><a class="dropdown-item" id="en" onclick="changeLanguage(this.id)"><img src=<?php echo "https://img.icons8.com/color/48/null/great-britain-circular.png"?> width="16" height="16"/> English (UK)</a></li>
            <li><a class="dropdown-item" id="it" onclick="changeLanguage(this.id)"><img src=<?php echo "https://img.icons8.com/color/48/null/italy-circular.png"?> width="16" height="16"/> Italiano (IT)</a></li>
            <li><a class="dropdown-item" id="fr" onclick="changeLanguage(this.id)"><img src=<?php echo "https://img.icons8.com/color/48/null/spain-circular.png"?> width="16" height="16"/> Espanol (ES)</a></li>
            <li><a class="dropdown-item" id="fr" onclick="changeLanguage(this.id)"><img src=<?php echo "https://img.icons8.com/color/48/null/france-circular.png"?> width="16" height="16"/> Francais (FR)</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>