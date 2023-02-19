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
            <img class="rounded-pill img-fluid" width="65" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="">
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
            <li class="" onclick="navMenu()">
                <i class="uil-folder"></i><a href=""> Nav Menu</a>
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
                    <h1 class="fs-3">Welcome to Dashboard</h1>
                    <p class="mb-0">Hello Jone Doe, welcome to your awesome dashboard!</p>
                </div>
            </div>

            <section class="statistics mt-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                            <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
                            <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">1,245</h3> <span class="d-block ms-2">Emails</span>
                                </div>
                                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                            <i class="uil-file fs-2 text-center bg-danger rounded-circle"></i>
                            <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">34</h3> <span class="d-block ms-2">Projects</span>
                                </div>
                                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box d-flex rounded-2 align-items-center p-3">
                            <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
                            <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h3 class="mb-0">5,245</h3> <span class="d-block ms-2">Users</span>
                                </div>
                                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="charts mt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="chart-container rounded-2 p-3">
                            <h3 class="fs-6 mb-3">Chart title number one</h3>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chart-container rounded-2 p-3">
                            <h3 class="fs-6 mb-3">Chart title number two</h3>
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
            </section>

            <section class="admins mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <!-- <h4>Admins:</h4> -->
                            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                <div class="img">
                                    <img class="img-fluid rounded-pill" width="75" height="75" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance" alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                <div class="img">
                                    <img class="img-fluid rounded-pill" width="75" height="75" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907137/small/1501685404/enhance" alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                            <div class="admin d-flex align-items-center rounded-2 p-3">
                                <div class="img">
                                    <img class="img-fluid rounded-pill" width="75" height="75" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907019/small/1501685403/enhance" alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <!-- <h4>Moderators:</h4> -->
                            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                <div class="img">
                                    <img class="img-fluid rounded-pill" width="75" height="75" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907114/small/1501685404/enhance" alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                <div class="img">
                                    <img class="img-fluid rounded-pill" width="75" height="75" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907086/small/1501685404/enhance" alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                            <div class="admin d-flex align-items-center rounded-2 p-3">
                                <div class="img">
                                    <img class="img-fluid rounded-pill" width="75" height="75" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="statis mt-4 text-center">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="box bg-primary p-3">
                            <i class="uil-eye"></i>
                            <h3>5,154</h3>
                            <p class="lead">Page views</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="box bg-danger p-3">
                            <i class="uil-user"></i>
                            <h3>245</h3>
                            <p class="lead">User registered</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="box bg-warning p-3">
                            <i class="uil-shopping-cart"></i>
                            <h3>5,154</h3>
                            <p class="lead">Product sales</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="box bg-success p-3">
                            <i class="uil-feedback"></i>
                            <h3>5,154</h3>
                            <p class="lead">Transactions</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="charts mt-4">
                <div class="chart-container p-3">
                    <h3 class="fs-6 mb-3">Chart title number three</h3>
                    <div style="height: 300px">
                        <canvas id="chart3" width="100%"></canvas>
                    </div>
                </div>
            </section>
        </div>
    </section>


</body>

</html>

<script src="js/admin.js"></script>

<script>
    function navMenu(){
        window.location.href="nav-menu.php";
    }
</script>