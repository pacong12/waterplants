<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MONITORING</title>
        <link rel="stylesheet" href="./assets/icons/css/font-awesome.min.css">
        <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
        <script type="text/javascript" src="assets/js/mdb.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/jquery-latest.js"></script>
        <!-- Custom fonts for this template-->
        <link href="assets/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="assets/template/css/sb-admin-2.min.css" rel="stylesheet">
        <!-- setting data yang akan diminta -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->   
    <div id="wrapper" style ="width : auto">

        <!-- Sidebar -->
        <?php include "layout/sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
                  
            <!-- Main Content -->
            <div id="content" >
                <?php include "layout/topbar.php"; ?>
                <?php include "layout/isiTabel.php";?>
            </div>      
            <!-- End of Main Content -->

            <!-- Footer -->
                <?php include "layout/footer.php";?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <!-- <script src="assets/template/vendor/jquery/jquery.min.js"></script> -->
    <script src="assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/template/js/sb-admin-2.min.js"></script>
    <script src="assets/template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/template/js/demo/datatables-demo.js"></script>
</body>

</html>