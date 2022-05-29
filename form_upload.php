<?php
echo"<h1 Align=center>Input Data</h1>";
echo"<form method='POST' enctype='multipart/form-data' action='tfoto.php'>
	<table border=1>
	<tr>
	<td>Nama</td>
	<td><input type=text name=nama></td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td><input type=text name=alamat></td>
	</tr>
	<tr>
	<td>Foto</td>
	<td><input type=file name=foto></td>
	</tr>
    <tr>
	<td></td>
	<td><input type='submit' value='Submit' name='B1'></td>
	</tr>
</table>	
</form>";
?>
