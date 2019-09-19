<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel= "stylesheet"  href="/assets/css/bootstrap.min.css">
    <title>pusing!</title>
  </head>
  <body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">FORMULIR PPDB</a>
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
    </form>
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
                   <th><td><label for="">nama</label>
                     <input type="text" class="form-control" name="a"></th></td>
                 </div>
                       <div class="form-group">
                        <label for="">alamat</label>
                          <textarea name="b" class="form-control" rows="3"></textarea>
                     </div>
                         <div class="form-group">
                         <label>Jenis kelamin:</label>
                         <label> <input type="radio" name="jk" value="laki-laki" /> Laki-laki</label>
                         <label><input type="radio" name="jk" value="perempuan" /> Perempuan</label>
            </div>

                     <div class="form-group">
                        <label for="">asal sekolah</label>
                          <input type="text" name="c" class="form-control" rows="3">
            </div>
                    


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

                         <div class="form-group">
                           <button type="submit" class="btn btn-info" name="simpan">simpan</button>
                             <button type="reset" class="btn btn-danger" name="reset">reset</button><br><br>
            </div> 
                    </form>
                     <?php
                          if (isset($_POST['simpan'])){
                          $a = $_POST ['a'];
                          $b = $_POST ['b'];
                          $c = $_POST ['jk'];
                          $d = $_POST ['c'];
                          $e = $_POST ['bi'];
                          $f = $_POST ['matematika'];
                          $g = $_POST ['ipa'];
                          $h = $_POST ['inggris'];

                      
                            $rt = ($e+$f+$g+$h)/4;
                          
                        if($rt > 65){
                            $ket = "diterima";
                        }else{
                            $ket = "tidak diterima";
                        }
                      }
                    ?>

                       <!-- end isi -->
                   </div>
               </div>
          </div> 
    </div> <div class="row">
     <div class ="col-md-12" style="background:#FFCCF8">
         <center><h2 style="color:white">hasilformulir</h2></center>
         <div class="table-responsive">
         <table class="table">
         <tr>
           <th>nama</th>
           <th>alamat</th>
           <th>jenis kelamin</th>
           <th>asal sekolah</th>
           <th>b indo</th>
           <th>matematika</th>
           <th>ipa</th>
           <th>inggris</th>
           <th>rata rata</th>
           <th>keterangan</th>
           </tr>
           <tr>
            <td><?php echo $a ?></td>
            <td><?php echo $b ?></td>
            <td><?php echo $c ?></td>
            <td><?php echo $d ?></td>
            <td><?php echo $e ?></td>
            <td><?php echo $f ?></td>
            <td><?php echo $g ?></td>
            <td><?php echo $h ?></td>
            <td><?php echo $rt ?></td>
            <td><?php echo $ket ?></td>
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









<?php
    // Menampilkan input dari form

	if(isset($_GET['submit'])){
		$a = $_GET['a'];
		$b = $_GET['b'];
		$jk = $_GET['jk'];
		$c = $_GET['c'];
        $d = $_GET['d'];
        $e = $_GET['e'];
        $f = $_GET['f'];
        $g= $_GET['g'];
        $h = $_GET['h'];
        $i = $_GET['i'];
		echo "Nama : $a <br>";
		echo "alamat : $b <br>";
        echo "jenis kelamin : $jk <br>";
		echo "tanggal pembelian : $c <br>";
        echo "jumlah buku : $d <br>";
        echo "kode buku : $e <br>";
		echo "judul buku : $f <br>";
		echo "pengarang : $g <br>";
		echo "jenis: $h <br>";
		echo "harga : $i <br>";
        
	}