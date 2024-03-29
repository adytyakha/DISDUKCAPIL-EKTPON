<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Ktp Online</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                     <li >
                        <a href="ktp.php"><i class="menu-icon fa ti-id-badge"></i>KTP </a>
                    </li>
                    <li class="menu-title">AKUN</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> <i class="menu-icon fa fa-user" ></i>USER</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-users active" ></i><a href="akun.php">DATA USER</a></li>
                          

                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>DAFTAR E-KTP</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-credit-card"></i><a href="ektp.php">DATA E-KTP</a></li>
                         
                        </ul>
                    </li>
                 
                    <li class="menu-title">HISTORI</li><!-- /.menu-title -->

                     <li class>
                        <a href="histori.php"><i class="menu-icon fa fa-history"></i>HISTORI </a>
                    </li>
                     <li class>
                        <a href="index.html"><i class="menu-icon fa fa-sign-out"></i>KELUAR </a>
                    </li>

                  
                
                  

                   
                  
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo12.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                          

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
      

         <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">AKUN</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="content">
            <div class="animated fadeIn">
                <div class="row">


                  <div class="box-body table-responsive">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data E-KTP</strong>
                            </div>

                            <div class="card-body">

                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                                    <th>ID</th>
                                            <th class="text-center">NIK</th>
                                            <th class="text-center">KK</th>
                                            <th class="text-center">Nama lengkap</th>
                                            <th class="text-center">TTL</th>
                                            <th class="text-center">Tempat Lahir</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">ID Akun</th>
                                            <th class="text-center">Aksi</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
    require 'setting/database.php';
    $query = mysqli_query($koneksi, "SELECT * FROM dataektp WHERE status='0' ");
                        while($array = mysqli_fetch_array($query)){
                          echo '

                                   
                                        <tr>
                                            
                                            <td> <span class="name">'.$array['id'].'</span> </td>
                                            <td>  <span class="name">'.$array['nik'].'</span> </td>
                                            <td> <span class="name">'.$array['kk'].'</span> </td>
                                            <td> <span class="name">'.$array['nama_lengkap'].'</span> </td>
                                             <td> <span class="name">'.$array['ttl'].'</span> </td>
                                               <td> <span class="name">'.$array['tmp_lahir'].'</span> </td>
                                                 <td> <span class="name">'.$array['jk'].'</span> </td>
                                                   <td> <span class="name">'.$array['alamat'].'</span> </td>
                                                 <td> <span class="name">'.$array['id_akun'].'</span> </td>
                                                   

 <td>
                                           

                                                  

                                                

                                              <span><a class="btn btn-success btn-sm" onclick="return confirm(`Apakah Anda ingin Verifikasi Id = '.$array['id'].' ?`)"href="setting/verifikasi.php?id='.$array['id'].'" ><i  class="fa  fa-sign-in"></i></a></span>

                                                 <span><a class="btn btn-danger btn-sm" onclick="return confirm(`Apakah Anda ingin Menghapus Id = '.$array['id'].' ?`)"href="setting/hapusektp.php?id='.$array['id'].'" ><i  class="fa  fa-trash-o"></i></a></span>
                                       



                                               
                                            </td>

                                        

                                        </tr>
                                   
                                    ' ; } ?>
                                    
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
                <!-- Orders -->
 <a href="delete.php?id=<?=$row['id']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">[Hapus]</a>
   

            <!-- /#add-category -->
          
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 E-Ktp Online
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://adytya_kha.com">adytya_kha</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>

    <script src="assets/js/init/datatables-init.js"></script>

    <!--Local Stuff-->
   <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
</body>
</html>
