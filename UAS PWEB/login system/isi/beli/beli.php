<?php
	include('crudmk.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beli tiket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="heading">
        <span>d</span>
        <span>a</span>
        <span>f</span>
        <span>t</span>
        <span>a</span>
        <span>r</span>
        <span class="space"></span>
        <span>t</span>
        <span>i</span>
        <span>k</span>
        <span>e</span>
        <span>t</span>
    </h1>
		<?php
			$data = bacaSemuaTiket();
			if($data == null){
				echo "Tidak ada data tiket";
			}else{
		?>
		<table>
			<tr>
				<th>Kode Tiket</th>
				<th>Nama Loket</th>
				<th>Tujuan</th>
                <th>Waktu Keberangkatan</th>
				<th>Waktu Tiba</th>
				<th>Keterangan</th>
			</tr>
		<?php 
			foreach($data as $tk){
				$kode_tiket = $tk['kode_tiket'];
				$nama_loket = $tk['nama_loket'];
				$tujuan = $tk['tujuan'];
                $waktu_berangkat = $tk['waktu_berangkat'];
				$waktu_tiba = $tk['waktu_tiba'];
				$keterangan = $tk['keterangan'];
			echo "
					<tr>
						<td>$kode_tiket</td>
						<td>$nama_loket</td>
						<td>$tujuan</td>
                        <td>$waktu_berangkat</td>
						<td>$waktu_tiba</td>
						<td>$keterangan</td>
					</tr>
				";
			}
			echo '</table>';
			}
		?>
	
	<br>
	<a href="tambahmk.php" class="tambah">PESAN TIKET</a>
	<a href="../index.php" class="home">HOME</a>
</body>
</html>