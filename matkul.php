<?php
include 'header.php';
include 'sidebar.php';
?>

	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-conten-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Mata Kuliah</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group me-2">
			</div>
			</div>
		</div>

		<a class="btn btn-success" href="tambah1.php">Tambah Mata Kuliah</a>

		<div class="table-responsive small">
		<table class="table table-striped table-sm">
		<br>
		<tr>
            <th>NO</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Semester</th>
			<th>Jumlah SKS</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi1.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from matkul");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_mk']; ?></td>
				<td><?php echo $d['nama_mk']; ?></td>
				<td><?php echo $d['semester']; ?></td>
                <td><?php echo $d['jumlah_sks']; ?></td>
				<td>
					<a class="btn btn-warning" href="edit1.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a class="btn btn-danger" href="hapus1.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
</html>