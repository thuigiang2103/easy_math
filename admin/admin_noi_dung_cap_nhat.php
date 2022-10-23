<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Easy-Math</title>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="../css/admin_style.css">
  <link rel="stylesheet" type="text/scss" href="../css/admin_style.scss">
</head>

<body id="page-top">
  <?php 
    // Kết nối đến CSDL
    require('../config.php');



  ;?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark  " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center ">
        <div class="sidebar-brand-text mx-3">Easy-Math</div>
      </div>

    <?php 

    $sql1="SELECT * FROM tbl_chuong_trinh where th_id like 'LOP12' ORDER BY ct_chuong ASC";

    $chuong=mysqli_query($con, $sql1);
      while($row1 = mysqli_fetch_array($chuong))
      {
        ;?> 
        <div class="sidebar-heading"><?php echo $row1["ct_ten_chuong"] ;?></div> 
 
      <?php 
      
          // Truy vấn đến bảng dữ liệu
    $sql="SELECT * FROM chi_tiet_chuong_trinh  WHERE chi_tiet_id like'L12%' ORDER BY chi_tiet_id ASC";

    // Thực hiện truy vấn đến bảng dữ liệu
    $bai_giang=mysqli_query($con, $sql);

    $i=0;
    while ($row = mysqli_fetch_array($bai_giang)) {
      $i++;
    ;?>
      <li class="nav-item ">
        <div class="nav-link collapsed" data-toggle="collapse" data-target="#collapsebai<?php echo $i?>" aria-expanded="true" aria-controls="collapsebai<?php echo $i; ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span><?php echo $row["chi_tiet_ten_bai"];  ?></span>
        </div>
        <div id="collapsebai<?php echo $i;  ?>" class="collapse" aria-labelledby="headingbai<?php echo $i;  ?>" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="admin_noi_dung_cap_nhat.php?id=<?php echo $row["chi_tiet_id"];?>">Cập nhật</a>
            <a class="collapse-item" href="xoa_bai_giang_thuc_hien.php?id=<?php echo $row["chi_tiet_id"];?>">Xóa</a>
          </div>
        </div>
      </li>
    <?php } ?>
           <hr class="sidebar-divider">
    <?php 
    }
    ;?>


    

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4  shadow">
          <div style="text-align: center; font-weight: bolder;color: black;">NỘI DUNG KHÓA HỌC </div>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="row">

            <div class="col-lg-12">

              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">THÔNG TIN BÀI GIẢNG</h6>
                </div>
                <div class="card-body">
            
                  <!-- Circle Buttons (Default) -->
                  <div class="mb-2">
                  </div>            
                    <form action="../admin/admin_them_bai_giang_thuc_hien.php">
                        <label for="fname">Tên bài</label><br>
                       <p> <input type="text" id="chi_tiet_ten_bai" name="tenbai" style="width:95%; height: 30px" value="<?php echo $row["chi_tiet_ten_bai"] ;?>"></p>
                        
                        <label for="lname">Video bài giảng</label><br>
                        <p><input type="text" id="chi_tiet_video_bai" name="video" style="width:95%; height: 30px" value="<?php echo $row["chi_tiet_video_bai"] ;?>"></p>
                        
                        <label for="fname">File BTVN</label><br>
                        <p><input type="text" id="chi_tiet_bai_tap" name="BTVN" style="width:95%; height: 30px" value="<?php echo $row["chi_tiet_bai_tap"] ;?>"></p>

                         <label for="fname">File lời giải BTVN</label><br>
                       <p> <input type="text" id="chi_tiet_dap_an" name="giai_BTVN" style="width:95%; height: 30px" value="<?php echo $row["chi_tiet_dap_an"] ;?> "></p>
                        
                        
                         <p style="text-align: center;"><button type="submit">Lưu</button></p>
                    </form> 
                 
                 
              </div>

             

            </div>

            

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery.min.js"></script>
  <script src="../vendor/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/admin.js"></script>

</body>

</html>
