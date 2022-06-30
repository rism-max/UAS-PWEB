<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="prosestambahmk.php" method="POST">
        <div >
        <h1 class="heading">
            <span>b</span>
            <span>e</span>
            <span>l</span>
            <span>i</span>
            <span class="space"></span>
            <span>t</span>
            <span>i</span>
            <span>k</span>
            <span>e</span>
            <span>t</span>
        </h1>
            <table class="tambah-tiket" border="1">
            <tr>
                <td ><label>Nama Penumpang:</label></td>               
            </tr>
            <tr>
                <td ><input class="input" type="text" name="nama_penumpang" placeholder="Nama Penumpang..." /></td>
            </tr>
            <tr>
                <td ><label>Kode tiket</label></td>
            </tr>
            <tr>
                <td ><input class="input" type="text" name="kode_tiket" placeholder="Kode Tiket..." /></td>
            </tr>
            <tr>
                <td><label>Metode Pembayaran</label></td>
            </tr>
            <tr>
                <td><label><input type="radio" name="cara_bayar" value="Cash" /> Cash</label></td>
            </tr>
            <tr>
                
                <td><label><input type="radio" name="cara_bayar" value="Transfer" /> Transfer</label></td>
                
            </tr>
            <tr class="button" align="center">
                <td colspan="2"><input  type="submit" name="submit" value="Tambahkan" />
                <a href='beli.php'>Batal</a></td>
            </tr>
            </table>
        </div>
    </form>
</body>
</html>