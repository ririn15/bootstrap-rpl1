<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel= "stylesheet"  href="/assets/css/bootstrap.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">ririn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="latihan 1">latihan 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latihan 2">latihan 2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">ririn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="latihan 1">latihan 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latihan 2">latihan 2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       
  </div>
</nav>

  <!-- end header -->

    <!-- content -->
    <div class ="container">
    <div class="row" style="padding:20px">
       <div class="col-md-12">
          <div class="card">
             <div class="card-header">formulir</div>
                 <div class="card-body">
                 <!-- isi  di sini jow -->
                 <form action="" method="POST">
                  <div class ="form-group">
                   <label for="">nama</label>
                     <input type="text" class="form-control" name="nama">
                 </div>
                       <div class="form-group">
                        <label for="">alamat</label>
                          <textarea name="alamat" class="form-control" rows="3"></textarea>
                     </div>
                         <div class="form-group">
                           <button type="submit" class="btn btn-info" name="simpan">simpan</button>
                             <button type="reset" class="btn btn-danger" name="reset">reset</button>
                        </div> 
                    </form>
                       <?php
                          if (isset($_POST['simpan'])){
                          $a = $_POST ['nama'];
                          $b = $_POST ['alamat'];

                        
                        }
                        ?>
                       <!-- end isi -->
                   </div>
               </div>
          </div> 
    </div>
 <div class="row">
     <div class ="col-md-12" style="background:#FFCCF8">
         <center><h2 style="color:white">hasilformulir</h2></center>
         <div class="table-responsive">
         <table class="table">
         <tr>
           <th>nama</th>
           <th>alamat</th>
           </tr>
           <tr>
            <td><?php echo $a ?></td>
            <td><?php echo $b ?></td>
            </tr>
            </table>
             </div>
          </div>
        </div>
    <!-- end content -->

    <!-- footer -->
    <!-- end footer -->

    <!-- js first, then popper,and the last bootstrap JS -->
   <script src="/assets/js/jquery.min.js"></script>
   <script src= "/assets/js/bootstrap.bundle.js"></script>
   <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <!-- end js -->
  </body>

  
</html>












         <div class="form-group">
                        <label for="">bhs indonesia</label>
                          <input type="text" name="bi" class="form-control" rows="3">
            </div>
                    
                     <div class="form-group">
                        <label for="">matematika</label>
                          <input type="text" name="matematika" class="form-control" rows="3">
            </div>
                     
                     <div class="form-group">
                        <label for="">ipa</label>
                          <input type="text" name="ipa" class="form-control" rows="3">
            </div>
                    
                     <div class="form-group">
                        <label for="">bhs inggris</label>
                          <input type="text" name="inggris" class="form-control" rows="3">
     </div>



















  <div class="row">
         <div class ="col-md-12">
         <center><h2 style="color:white">hasilformulir</h2></center>
         <div class="table-responsive">
         <table class="table">
         <tr>
           <th>b indo</th>
           <th>matematika</th>
           <th>ipa</th>
           <th>inggris</th>
           <th>rata-rata</th>
           </tr>
           <tr>
            <td><?php echo $a ?></td>
            <td><?php echo $b ?></td>
            </tr>
            </table>












                 <?php
                          if (isset($_POST['simpan'])){
                          $a = $_POST ['nama'];
                          $b = $_POST ['alamat'];
                          $c = $_POST ['jenis kelamin'];
                          $d = $_POST ['asal sekolah'];
                          $e = $_POST ['b indo'];
                          $f = $_POST ['matematika'];
                          $g = $_POST ['ipa'];
                          $h = $_POST ['b inggris'];

                      
                            $rt = ($e+$f+$g+$h)/4;
                          
                        if($rt > 65){
                            $ket = "diterima";
                        }else{
                            $ket = "tidak diterima";
                        }
                        echo "ratarata : $e+$f+$g+$h/4";





















                             
                     <div class="form-group">
                     <label for="">rata-rata</label>
                       <input type="text" name="rt" class="form-control" rows="3">
         </div>
                 



       
                 
                  <div class="form-group">
                     <label for="">keterangan</label>
                       <input type="text" name="ket" class="form-control" rows="3"><br>
                      
