<?php
$files=$_FILES['foto'];
$files_name=$files['name'];
$files_type=$files['type'];
$files_size=$files['size'];
$files_temp=$files['tmp_name'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

echo"Nama file : $files_name<br>";
echo"Type file : $files_type<br>";
echo"File lokasi : $files_temp<br>";
echo"Ukuran File :$files_size<hr>";
echo"Nama : $nama<br>";
echo"Alamat : $alamat<br>";

#Pengecekan Ukuran
if($files_size>1000000){
	echo"<hr>File Terlalu besar, max 1000000 byte";
}
else{
#Memilih folder sesuai type file pdf,image
if(!empty($files_type)){
	switch ($files_type) {
	  case "image/jpg" :
	  		copy($files['tmp_name'],"image/$files_name");
	   			$namafile_baru=date('dmyhis').".jpg";
	   			if(file_exists("image/$namafile_baru")){
		   			unlink("image/$namafile_baru");
	   			}
            	rename("image/$files_name","image/$namafile_baru");
	  		break; 
		case "image/jpeg" :
	  		copy($files['tmp_name'],"image/$files_name");
	   			$namafile_baru=date('dmyhis').".jpeg";
	   			if(file_exists("image/$namafile_baru")){
		   			unlink("image/$namafile_baru");
	   			}
            	rename("image/$files_name","image/$namafile_baru");
	  		break; 
		case "image/png" :
	  		copy($files['tmp_name'],"image/$files_name");
	   			$namafile_baru=date('dmyhis').".png";
	   			if(file_exists("image/$namafile_baru")){
		   			unlink("image/$namafile_baru");
	   			}
            	rename("image/$files_name","image/$namafile_baru");
	  		break; 	
		default:
		$ket="Type File tidak tersedia";
	}
}
}
if(empty($ket)){
	echo"<img src=image/$namafile_baru width=200 height=300>";
}

?>
