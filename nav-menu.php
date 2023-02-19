<?php
require_once "header.php";
$a_id = $_SESSION['a_id'];
$page_name = "Dashboard";

if (!isset($_SESSION['a_id'])) {
    header("location:login.php");
}

$sql_admin = "SELECT * FROM `admin_table` WHERE `admin_id` = '$a_id'";
$result_admin = mysqli_query($connect, $sql_admin);
$info_admin = mysqli_fetch_assoc($result_admin);

if(isset($_POST['submit-nav'])){
    $nav_title = $_POST['nav-title'];
    $nav_link = $_POST['nav-link'];

    $sql_new_nav = "INSERT INTO `nav_menu`(`nav_menu_name`, `nav_menu_link`) VALUES ('$nav_title','$nav_link')";
    $result_new_nav = mysqli_query($connect, $sql_new_nav);

    if($result_new_nav){
        ?>
            <script>
                alert('New Nav Menu Inserted Successfully!');
            </script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astanga : <?php echo $page_name ?></title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
        <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
        <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
            <img class="rounded-pill img-fluid" width="65" src="https://media.istockphoto.com/id/1311285048/vector/avatar-m.jpg?s=612x612&w=0&k=20&c=pZcHWIXApiqHoMZ9ray_V6gaEwjqv5zXrNdqJkGfXbQ=" alt="">
            <div class="ms-2">
                <h5 class="fs-6 mb-0">
                    <a class="text-decoration-none" href="#"><?php echo $info_admin['admin_name'] ?></a>
                </h5>
                <p class="mt-1 mb-0">username : <?php echo $info_admin['admin_username'] ?></p>
            </div>
        </div>

        <!-- <div class="search position-relative text-center px-4 py-3 mt-2">
            <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Search here">
            <i class="fa fa-search position-absolute d-block fs-6"></i>
        </div> -->

        <ul class="categories list-unstyled">
            <li class="">
                <i class="uil-estate fa-fw"></i><a href="#"> Dashboard</a>
            </li>
            <li class="">
                <i class="uil-folder"></i><a href="nav-menu.php"> Nav Menu</a>
            </li>
            <li class="has-dropdown">
                <i class="uil-calendar-alt"></i><a href="#"> Calender</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-envelope-download fa-fw"></i><a href="#"> Mailbox</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-shopping-cart-alt"></i><a href="#"> Ecommerce</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-bag"></i><a href="#"> Projects</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="">
                <i class="uil-setting"></i><a href="#"> Settings</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-chart-pie-alt"></i><a href="#"> Components</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-panel-add"></i><a href="#"> Charts</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="">
                <i class="uil-map-marker"></i><a href="#"> Maps</a>
            </li>
        </ul>
    </aside>

    <section id="wrapper">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid mx-2">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="uil-bars text-white"></i>
                    </button>
                    <a class="navbar-brand" href="#">Astanga</a>
                </div>
                <div class="collapse navbar-collapse" id="toggle-navbar">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link mt-2" href="logout.php"><i class="nav-link fa-solid fa-right-from-bracket"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i data-show="show-side-navigation1" class="uil-bars show-side-btn"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="p-4">
            <div class="welcome">
                <div class="content rounded-3 p-3">
                    <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Nav-Menu Title</label>
                            <input class="form-control" type="text" name="nav-title" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">Nav-Menu Link</label>
                            <input class="form-control" type="text" name="nav-link" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">Save Nav Menu</label><br>
                            <button class="btn btn-primary" type="submit" name="submit-nav">Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>


        <div class="p-4">
            <div class="welcome">
                <div class="content rounded-3 p-3">

                dfkbrifbrtigbhit4hbih54tiv
                efbgihrtubht5b
                </div>
            </div>

        </div>
    </section>
</body>

</html>

<script src="js/admin.js"></script>