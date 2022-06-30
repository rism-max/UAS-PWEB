<?php
    require_once 'koneksiakad.php';

    Function bacaSemuaTiket(){
        return bacaTiket("select * from tabel_tiket");
    }
    
    Function bacaTiket($sql){
        $data = array();
        $koneksi = koneksiTiket();
        $hasil = mysqli_query($koneksi, $sql);
        // jika tidak ada record, hasil berupa null
        if (mysqli_num_rows($hasil) == 0) {
                mysqli_close($koneksi);
                return null;
        }
        $i=0;
        while($baris = mysqli_fetch_assoc($hasil)){
            $data[$i]['kode_tiket']= $baris['kode_tiket'];
            $data[$i]['nama_loket'] = $baris['nama_loket'];
            $data[$i]['tujuan'] = $baris['tujuan'];
            $data[$i]['waktu_berangkat']= $baris['waktu_berangkat'];
            $data[$i]['waktu_tiba'] = $baris['waktu_tiba'];
            $data[$i]['keterangan'] = $baris['keterangan'];
            $i++;
        }
        mysqli_close($koneksi);
        return $data;
    }

    function tambahBeli($nama_penumpang, $kode_tiket, $cara_bayar){
        $koneksi = koneksiTiket();
        $sql	= "insert into tabel_beli values(
            '$nama_penumpang', '$kode_tiket', '$cara_bayar')";
        $hasil = 0;
        if(mysqli_query($koneksi,	$sql))
        $hasil = 1;
        mysqli_close($koneksi);
        return $hasil;
        }

        // menghapus 1 record berdasar field kunci kode
    function hapusMk($kode){
        $koneksi = koneksiTugas();
        $sql = "delete from matakuliah where kode='$kode'";
        if (!mysqli_query($koneksi, $sql)){
        die('Error: ' . mysqli_error());
        }
        $hasil = mysqli_affected_rows($koneksi);
        mysqli_close($koneksi);
        return $hasil;
        }
    
    // mencari data berdasar nim
    // jika ada, hasil array dengan indeks berupa nama field
    // jika tidak ada hasil berupa nilai null
    function cariMk($kode){
        $koneksi = koneksiTugas();
        $sql = "select * from matakuliah where kode='$kode'";
        $hasil = mysqli_query($koneksi, $sql);
        if(mysqli_num_rows($hasil)>0){
        $baris=mysqli_fetch_assoc($hasil);
        $data['kode']=$baris['kode'];
        $data['nama'] = $baris['nama'];
        $data['sks'] = $baris['sks'];
        mysqli_close($koneksi);
        return $data;
        }else{
        mysqli_close($koneksi);
        return null;
        }
     }
    function cariMkDarikode($kode){
			return bacaMk("select*from matakuliah where kode = '$kode'");
	}
    function ubahMk($kode, $nama, $sks){
        $koneksi = koneksiTugas();
        $sql = "UPDATE matakuliah
        SET kode ='$kode',
        nama = '$nama',
        sks = '$sks'
        WHERE kode='$kode'";
        if (mysqli_query($koneksi, $sql)) {
        $hasil = true;
        } else {
        $hasil = "Error mengubah record: " . mysqli_error($koneksi);
        }
        mysqli_close($koneksi);
        return $hasil;
        }
?>                   