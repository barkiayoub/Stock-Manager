<?php require_once("proClass.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Layout</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/css/quill.snow.css" rel="stylesheet">
    <link href="assets/css/quill.bubble.css" rel="stylesheet">
    <link href="assets/css/remixicon.css" rel="stylesheet">
    <link href="assets/css/simple-datatables.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between"> <a href="index.html" class="logo d-flex align-items-center"> <img src="#" alt=""> <span class="d-none d-lg-block">Stock
                    Manager</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query" placeholder="Search" title="Enter search keyword"> <button type="submit" title="Search"><i class="bi bi-search"></i></button></form>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-box-arrow-right"></i> <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li> <a class="dropdown-item d-flex align-items-center" href="logout.php"> <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <a class="nav-link collapsed" href="dashboard.html"> <i class="bi bi-grid"></i>
                    <span>Dashboard</span> </a></li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" href="categories.php"> <i class="bi bi-menu-button-wide"></i><span>Categories</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="products.php"> <i class="bi bi-circle"></i><span>Show Product</span> </a></li>
                    <li> <a href="addproform.html"> <i class="bi bi-circle"></i><span>Add a Product</span> </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="#"> <i class="bi bi-circle"></i><span>Show Orders</span> </a></li>
                    <li> <a href="#"> <i class="bi bi-circle"></i><span>Add an Order</span> </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>Clients</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="#"> <i class="bi bi-circle"></i><span>Show clients</span> </a></li>
                    <li> <a href="#"> <i class="bi bi-circle"></i><span>Add a client</span> </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Distributor</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="#"> <i class="bi bi-circle"></i><span>Show Distributors</span> </a></li>
                    <li> <a href="#"> <i class="bi bi-circle"></i><span>Add a Distributor</span> </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-gem"></i><span>Suplies</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="#"> <i class="bi bi-circle"></i><span>Show Supplies</span> </a></li>
                    <li> <a href="#"> <i class="bi bi-circle"></i><span>Add Supply</span> </a></li>
                </ul>
            </li>

        </ul>
    </aside>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Products</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item"></li>
                    <!-- <li class="breadcrumb-item active">Blank</li> -->
                </ol>
            </nav>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Products Table</h5>
                    <a href="addproform.html"> <button class="btn btn-primary">New Product</button></a>

                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">ref</th>
                                <th scope="col">Image</th>
                                <th scope="col">libelle</th>
                                <th scope="col">Price per unit</th>
                                <th scope="col">Selling Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Modify</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $lst = Produit::listeDesPro();
                            foreach ($lst as $pro) {
                            ?>
                                <tr>
                                    <td><?= $pro->id ?></td>
                                    <td><?= $pro->refp ?></td>
                                    <td><?= $pro->image ?></td>
                                    <td><?= $pro->libelle ?></td>
                                    <td><?= $pro->prixu ?></td>
                                    <td><?= $pro->prixv ?></td>
                                    <td><?= $pro->stock ?></td>
                                    <td><a href="dashboard.html">Modify</a></td>
                                    <td><a href="dashboard.html">Delete</a></td>


                                    <!-- <td>
                                        <a href="#">
                                            <i class="far fas fa-edit modifier"></i>
                                        </a>

                                        <i class="far fas fa-trash supprimer"></i>
                                    </td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <section class="section">
                <div class="row">

                </div>
            </section>
    </main>
    <!-- <footer id="footer" class="footer">
      <div class="copyright"> &copy; Copyright <strong><span>Compnay Name</span></strong>. All Rights Reserved</div>
      <div class="credits"> with love <a href="https://freeetemplates.com/">FreeeTemplates</a></div>
   </footer> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/echarts.min.js"></script>
    <script src="assets/js/quill.min.js"></script>
    <script src="assets/js/simple-datatables.js"></script>
    <script src="assets/js/tinymce.min.js"></script>
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>