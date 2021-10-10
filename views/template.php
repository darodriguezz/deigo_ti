<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DEIGO TI</title>

  <!-- Custom fonts for this template-->
  <link href="views/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="views/css/sb-admin-2.min.css" rel="stylesheet"views/>


  <!-- Custom styles for this page -->
  <link href="views/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <!-- Sidebar -->
    <?php include "views/modulos/NavLateral.php";?>
    <!-- End of Sidebar -->

    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
             


      <!-- Barra de navegación superior -->         
          <?php include "views/modulos/NavSuperior.php";?>       
      <!-- End of Topbar -->      


        <?php 

        $list = new inicio();
        $list -> enlaceListaController();

        ?>


      <!-- Footer -->
         <?php include "views/modulos/Footer.php";?>
      <!-- End of Footer -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->




  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include "views/modulos/Logout.php";?>
  <!-- End of Logout Modal-->
  
  
  <!-- Bootstrap Script-->
  <?php include "views/modulos/Script.php";?>

</body>

</html>
