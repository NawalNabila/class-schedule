<?php

include "koneksi.php";

$id = $_GET['id_mk'];

$sql = "select * from matakuliah where id_mk ='$id'";
$row = mysql_query($sql);
$result = mysql_fetch_array($row);

echo"
<form method='POST' action='savemk.php'>
	<table>
		
        <tr> 
			<td>Kode MK</td>
			<td>:</td>
			<td><input type='text' size='20' name='kode' value=$result[id_mk] required></input></td>
		</tr>
		<tr> 
			<td>Nama MK</td>
			<td>:</td>
			<td><input type='text' size='20' name='nama' value=$result[nama_mk] required></input></td>
		</tr>
		<tr> 
			<td>SKS</td>
			<td>:</td>
			<td><input type='text' size='20' name='sks' value=$result[sks] required></input></td>
		</tr>
		<tr> 
			<td>Semester</td>
			<td>:</td>
			<td><input type='text' name='sem' value=$result[sem] required></input></td>
		</tr>
        <tr> 
			<td>Nama Dosen</td>
			<td>:</td>
			<td><input type='text' size='20' name='dos' value=$result[dosen] required></input></td>
		</tr>
		<tr> 
			<td></td>
			<td></td>
			<td><input type=submit></input></td>
		</tr>
	</table>
</form>";

?>