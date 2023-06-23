<?php
include 'header.php';
include 'sidebar.php';
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Mata Kuliah</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
        </div>
        </div>
      </div>
<body>
	<a class="btn btn-primary" href="matkul.php">KEMBALI</a>
	<br/>
	<br/>
 
	<?php
	include 'koneksi1.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from matkul where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update1.php">
			<table>
				<tr>			
					<td>Kode Mata Kuliah</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="number" name="kode_mk" value="<?php echo $d['kode_mk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Mata Kuliah</td>
					<td><input type="text" name="nama_mk" value="<?php echo $d['nama_mk']; ?>"></td>
				</tr>
				<tr>
					<td>Semester</td>
					<td><input type="number" name="semester" value="<?php echo $d['semester']; ?>"></td>
				</tr>
                <tr>
					<td>Jumlah SKS</td>
					<td><input type="number" name="jumlah_sks" value="<?php echo $d['jumlah_sks']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</main>
</body>
</html>