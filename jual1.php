<!DOCTYPE html>
<head>
<title>Daftar Barang</title>
</head>

<body>
<?php
include "menubarang.php";
?>
<table width="519" border="1">
  <caption align="top">
    Daftar Barang
  </caption>
  <tr>
    <th width="100" name="a" scope="col">judul</th>
    <th width="100" name="b"scope="col">Kode Buku </th>
    <th width="100" name="c"scope="col">pengarang</th> </th>
    <th width="100" name="d"scope="col">jenis buku</th>
    <th width="100" name="e"scope="col">harga buku</th>
  </tr> 
<?php
//siapkan query untuk mengmbil semua data barang yang ada
include "koneksi.php";
$sql = "SELECT * FROM barang";
$kueri = mysql_query($sql);
//karena datanya lebih dari 1 record maka gunakan while
//semua data disimpan dalam array
//loopnr untuk menampilkan data barang
$no = 1;
while($data = mysql_fetch_array($kueri)){
    ?>
    <tr>
        <td><?php echo $no?></td>
        <td><?php //tampilin data dari database
        //$data adalah nama array yg kita buat
        // kodebarang adalah nama field yang ada di tabel
        echo $data['']?></td>
        <td><?php echo $data['a']?></td>
        <td><?php echo $data['b'];?></td>
        <td><?php echo $data['c']?></td>
        <td><?php echo $data['d']?></td>
        <td><?php echo $data['e']?></td>
        <td><!-- buat link untuk edit dan delete dan berikan parameter dgn nama "kode"--><a href="editbarang.php?kode=<?php echo $data['kodebarang']?>">Edit</a> </td><td><a href="deletebarang.php?kode=<?php echo $data['kodebarang']?>">Delete</a></td>
    </tr>
    <?php
$no++;}
?>
</table>
</body>
</html>



      <div class="form">
                        <label for="">judul buku </label>
                          <input type="text" name="e" class="form-control" rows="3"></input>
                     </div>

  <div class="form">
                        <label for="">kode buku</label>
                          <input type="text" name="f" class="form-control" rows="3"></input>
                     </div>

                      <div class="form">
                        <label for="">pengarang</label>
                          <input type="text" name="g" class="form-control" rows="3"></input>
                     </div>

                       <div class="form">
                        <label for="">jenis buku</label>
                          <input type="text" name="h" class="form-control" rows="3"></input>
                     </div>

                       <div class="form">
                        <label for="">harga buku</label>
                          <input type="text" name="i" class="form-control" rows="3"></input>
                     </div><br>
                       <div class="form-group">
                           <button type="submit" class="btn btn-info" name="simpan">proses</button>
                             <button type="reset" class="btn btn-danger" name="reset">reset</button>
                        </div> 
              
                        <?php
                          if (isset($_POST['simpan'])){
                          $a = $_POST ['a'];
                          $b = $_POST ['b'];
                          $jk = $_POST ['jk'];
                          $c = $_POST ['c'];
                          $d = $_POST ['d'];
                          $e = $_POST ['e'];
                          $f = $_POST ['f'];
                          $g = $_POST ['g'];
                          $h = $_POST ['h'];
                          $i = $_POST ['i'];
                          }