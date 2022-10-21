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
  <link rel="stylesheet" type="text/css" href="./css/admin_style.css">
</head>
<div class="a">
  <p style="font-weight: bolder;">địt mẹ chó mẩu</p>
</div>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3">Easy-Math</div>
      </div>

    
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <div class="nav-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Bài 1</span>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
        
            <a class="collapse-item" href="cap_nhat_bai_giang.php">Cập nhật</a>
            <a class="collapse-item" href="xoa_bai_giang_thuc_hien.php">Xóa</a>
          </div>
        </div>
      </li>

         <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <div class="nav-link collapsed" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-cog"></i>
          <span>Bài 2</span>
        </div>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

   
     <li class="nav-item">
        <div class="nav-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          <i class="fas fa-fw fa-cog"></i>
          <span>Bài 3</span>
        </div>
        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

    

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

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
                    <form action="/action_page.php">
                        <label for="fname">Tên bài</label><br>
                        <input type="text" id="chi_tiet_ten_bai" name="tenbai" style="width:95%; height: 30px" value=""><br>
                        <label for="lname">Video bài giảng</label><br>
                        <input type="text" id="chi_tiet_video_bai" name="video" style="width:95%; height: 30px" value=""><br><br>
                       
                        <label for="myfile">File BTVN</label><br>
                        <input type="file" id="myfile" name="myfile"><br><br>
                         <label for="myfile">File Lời giải BTVN</label><br>
                        <input type="file" id="myfile" name="myfile"><br><br>
                        
                        
                         <input type="submit" value="Lưu"><br><br>
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

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
