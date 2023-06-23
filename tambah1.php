<?php
include 'header.php';
include 'sidebar.php';
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Mata Kuliah</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
        </div>
        </div>
      </div>
<body>
	<a class="btn btn-primary" href="matkul.php">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambah_aksi1.php">
		<table>
			<tr>			
				<td>Kode Mata Kuliah</td>
				<td><input type="number" name="kode_mk"></td>
			</tr>
			<tr>
				<td>Nama Mata Kuliah</td>
				<td><input type="text" name="nama_mk"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="number" name="semester"></td>
			</tr>
            <tr>
				<td>Jumlah SKS</td>
				<td><input type="number" name="jumlah_sks"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</main>
</html>