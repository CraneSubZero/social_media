<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
         <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>Fast Food Chain</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                       
                        <div>
                            
                        </div>
                    </div>
                  
                </div>
                 <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Fast Food Chains</a>
                        <div class="dropdown-menu bg-transparent border-0">
                           <a href="chains.php" class="dropdown-item">Chains</a>
                            <a href="products.php" class="dropdown-item">Product</a>
                            <a href="locations.php" class="dropdown-item">Locations</a>
                        </div>
                    </div>
                    <a href="users.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Users</a>
                    <a href="table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="sales.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Sales</a>
                  
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
           <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
               
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                       
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        
                            
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
                           
                        </div>
                    </div>
                   <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                           <i class="ri-admin-line"></i>
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="edit_user.php" class="dropdown-item">My Profile</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


             <!-- Button Start -->
            <br>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Jollibee</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2">Burger</button>
                                <button type="button" class="btn btn-secondary m-2">Chicken</button>
                                <button type="button" class="btn btn-success m-2">Fries and Sides</button>
                                <button type="button" class="btn btn-danger m-2">Drinks</button>
                                <button type="button" class="btn btn-warning m-2">Breakfast</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Chowking</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2">Noodles</button>
                                <button type="button" class="btn btn-secondary m-2">Rice Meals</button>
                                <button type="button" class="btn btn-success m-2">Dim Sum</button>
                                <button type="button" class="btn btn-danger m-2">Soup</button>
                                <button type="button" class="btn btn-warning m-2">Beverages</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">McDonald's</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2">Happy Meals</button>
                                <button type="button" class="btn btn-secondary m-2">Value Meals</button>
                                <button type="button" class="btn btn-success m-2">Chicken</button>
                                <button type="button" class="btn btn-danger m-2">Fries</button>
                                <button type="button" class="btn btn-warning m-2">Desserts</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Greenwich</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2">Pizza</button>
                                <button type="button" class="btn btn-secondary m-2">Pasta</button>
                                <button type="button" class="btn btn-success m-2">Appetizers</button>
                                <button type="button" class="btn btn-danger m-2">Drinks</button>
                                <button type="button" class="btn btn-warning m-2">Solo Meals</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Kentucky Fried Chicken (KFC)</h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2">Chicken</button>
                                <button type="button" class="btn btn-secondary m-2">Sides</button>
                                <button type="button" class="btn btn-success m-2">Meals</button>
                                <button type="button" class="btn btn-danger m-2">Drinks</button>
                                <button type="button" class="btn btn-warning m-2">Desserts</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Mang Inasal </h6>
                            <div class="m-n2">
                                <button type="button" class="btn btn-primary m-2">Chicken Inasal</button>
                                <button type="button" class="btn btn-secondary m-2">Barbeque</button>
                                <button type="button" class="btn btn-success m-2">Desserts</button>
                                <button type="button" class="btn btn-danger m-2">Sisig</button>
                                <button type="button" class="btn btn-warning m-2">Drinks</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Yellow Cab</h6>
                            <div class="m-n2">
                               <button type="button" class="btn btn-primary m-2">Pizza</button>
                                <button type="button" class="btn btn-secondary m-2">Pasta</button>
                                <button type="button" class="btn btn-success m-2">Appetizers</button>
                                <button type="button" class="btn btn-danger m-2">Drinks</button>
                                <button type="button" class="btn btn-warning m-2">Desserts</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Burger King</h6>
                            <div class="m-n2">
                               <button type="button" class="btn btn-primary m-2">Burger</button>
                                <button type="button" class="btn btn-secondary m-2">Nuggets</button>
                                <button type="button" class="btn btn-success m-2">Fries</button>
                                <button type="button" class="btn btn-danger m-2">Drinks</button>
                                <button type="button" class="btn btn-warning m-2">Veggies</button>
                            </div>
                        </div>
                    </div>
                    
                        
                </div>
            </div>
            <!-- Button End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Fast Food Chain</a>, All Right Reserved.
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>