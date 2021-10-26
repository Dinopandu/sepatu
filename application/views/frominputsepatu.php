<html>
<head>
<title>Form Input pembelian</title>
</head>

<body>
    <?php echo validation_errors(); ?>
<center>
<form action="<?= base_url('sepatu/cetak'); ?>" method="post">
<table>
<tr>
<th colspan="3">
Form Input pembelian sepatu
</th>
</tr>

<tr>
<td colspan="3">
<hr>
</td>
</tr>

<tr>
<th>Nama pembeli </th>
<th>:</th>
<td>
<input type="text" name="nama" id="nama" value="<?php echo set_value('nama');?>">
</td>
<td><?php=form_error('nama');?></td>
</tr>
<tr>
<th>No Telp</th>
<td>:</td>
<td>
<input type="text" name="telp" id="telp" value="<?php echo set_value('telp');?>">
</td>
<td><?php=form_error('telp');?></td>
</tr>
<tr>
<th>Merk sepatu</th>
<td>:</td>
<td>
<select name="merk" id="merk">
<option value="">Pilih Merk</option>
<option value="Nike">Nike </option>
<option value="Adidas">Adidas </option>
<option value="Kickers">Kickers </option>
<option value="Eiger">Eiger </option>
<option value="Bucherri">Bucherri </option>
</select>
</td>
<td><?php=form_error('merk');?></td>
</tr>
<tr>
<th>Ukuran Sepatu</th>
<td>:</td>
<td>
<select name="ukuran" id="ukuran">
<option value="">Pilih Ukuran</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
</select>
</td>
<td><?php=form_error('ukuran');?></td>
</tr>

<tr>
<td colspan="3" align="center">
<input type="submit" value="Submit">
</td>
</tr>
</table>
</form>
</center>
</body>
</html>
