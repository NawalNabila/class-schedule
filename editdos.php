<?php

include "koneksi.php";

$id = $_GET['id_dosen'];

$sql = "select * from dosen where id_dosen ='$id'";
$row = mysql_query($sql);
$result = mysql_fetch_array($row);

echo"
<form method='POST' action='savedos.php'>
	<table>
		
        <tr> 
			<td>NIP</td>
			<td>:</td>
			<td><input type='text' size='20' name='kode' value=$result[id_dosen] required></input></td>
		</tr>
		<tr> 
			<td>Nama Dosen</td>
			<td>:</td>
			<td><input type='text' size='20' name='nama' value=$result[nama_dosen] required></input></td>
		</tr>
		<tr> 
			<td>Email</td>
			<td>:</td>
			<td><input type='text' size='20' name='mail' value=$result[email] required></input></td>
		</tr>
		<tr> 
			<td>Kantor</td>
			<td>:</td>
			<td><input type='text' name='kantor' value=$result[kantor] required></input></td>
		</tr>
        <tr> 
			<td>Mata Kuliah</td>
			<td>:</td>
			<td><input type='text' size='20' name='mk' value=$result[mk] required></input></td>
		</tr>
		<tr> 
			<td></td>
			<td></td>
			<td><input type=submit></input></td>
		</tr>
	</table>
</form>";

?>