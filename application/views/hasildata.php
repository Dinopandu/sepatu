<html>
<head>
<title>Tampil Data pembeli</title>
</head>

<body>
<center>
<table>
<tr>
<th colspan="3">
Tampil Data pembeli
</th>
</tr>
<tr>
<td colspan="3">
<hr>
</td>
</tr>
<tr>
<th>Nama pembeli</th>
<th>:</th>
<td>
<?= $nama; ?>
</td>
</tr>
<tr>
<td>No telp</td>
<td>:</td>
<td>
<?= $telp; ?>
</td>
</tr>
<tr>
<td>Merk sepatu</td>
<td>:</td>
<td>
<?= $merk; ?>
</td>
</tr>
<tr>
<td>Ukuran sepatu</td>
<td>:</td>
<td>
<?= $ukuran; ?>
</td>
</tr>
<tr>
<td>Harga</td>
<td>:</td>
<td>
<?= $harga; ?>
</td>
</tr>
<tr>
<td colspan="3" align="center">
<a href="<?= base_url('sepatu');?>">Kembali</a>
</td>
</tr>
</table>
</center>
</body>
</html>
