<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ayam Goreng Drakor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="body-bg">
        <?php include 'header.php'; ?>
        <div class="main-content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                        <?php if(!isset($_GET['menu'])){ ?>
                            <div class="col-md-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-center">Silahkan Pilih Menu</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5 mb-3">
                                <a href="index.php?menu=feedback">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-thumb-up"></i> Data Feedback</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <a href="index.php?menu=info">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="fa fa-shopping-cart"></i> Info Promo & Produk</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <a href="index.php?menu=eskalasi">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-email"></i> Eskalasi Reminder</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="index.php?menu=customer">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="fa fa-user"></i> Customer</div>    
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-6 my-3">
                                <a href="index.php?menu=service">
                                <div class="card">
                                    <div class="seo-fact bg-primary">
                                        <div class="p-4 justify-content-between align-items-center">
                                            <div class="seofct-icon">
                                                <i class="fa fa-book text-center"></i> Menu
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-6 my-3">
                                <a href="index.php?menu=allorders">
                                <div class="card">
                                    <div class="seo-fact bg-secondary">
                                        <div class="p-4 justify-content-between align-items-center">
                                            <div class="seofct-icon">
                                                <i class="fa fa-industry text-center"></i> All Orders
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-12 my-3">
                                <a href="index.php?menu=peminat">
                                <div class="card">
                                    <div class="seo-fact bg-white">
                                        <div class="p-4 justify-content-between align-items-center">
                                            <div class="seofct-icon text-center text-dark">
                                                <i class="fa fa-user text-center"></i> Data Peminat
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <?php } ?>


                            <?php if(isset($_GET['menu'])){
                                if($_GET['menu'] == "feedback"){
                                    include 'feedback.php';
                                }
                                else if($_GET['menu'] == "info"){
                                    include 'info.php';
                                }
                                else if($_GET['menu'] == "eskalasi"){
                                    include 'eskalasi.php';
                                }
                                else if($_GET['menu'] == "customer"){
                                    include 'customer.php';
                                }
                                else if($_GET['menu'] == "service"){
                                    include 'service.php';
                                }
                                else if($_GET['menu'] == "allorders"){
                                    include 'allorders.php';
                                }
                                else if($_GET['menu'] == "peminat"){
                                    include 'peminat.php';
                                }
                                else{
                                    echo "Menu not found";
                                }
                            } ?>

                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h3 class="text-center mb-3">Info CRM</h3>
                                <table class="table">
                                    <th>Username</th>
                                    <td>: <?= $_SESSION['username'] ?>
                                    <tr>
                                    <th>Email</th>
                                    <td>: <?= $_SESSION['email'] ?>
                                    <tr>
                                    <th>Date Registered</th>
                                    <td>: <?= $_SESSION['date_registered'] ?>
                                    <tr>
                                    <th>Role</th>
                                    <td>: <?= $_SESSION['role'] ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/line-chart.js"></script>
    <script src="../assets/js/pie-chart.js"></script>
    <script src="../assets/js/bar-chart.js"></script>
    <script src="../assets/js/maps.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable1').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable2').DataTable();
        });
        $(document).ready(function() {
            $('#dataTable3').DataTable();
        });
    </script>

    <script src="../assets/datatables/jquery.dataTables.js"></script>
    <script src="../assets/datatables/dataTables.bootstrap4.min.js"></script>

</body>

</html>
