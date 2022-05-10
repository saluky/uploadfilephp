<?php
#Target filenya ke tfiles.php
#The _FILES array contains following properties −
/*
$_FILES['file']['name'] - The original name of the file to be uploaded.
$_FILES['file']['type'] - The mime type of the file.
$_FILES['file']['size'] - The size, in bytes, of the uploaded file.
$_FILES['file']['tmp_name'] - The temporary filename of the file in which the uploaded file was stored on the server.
*/
$files=$_FILES['files'];
$files_name=$files['name'];
$files_type=$files['type'];
$files_size=$files['size'];
echo"Nama file : $files_name<br>";
echo"Type file : $files_type<br>";
echo"Ukuran File :$files_size";
#Pengecekan Ukuran
if($files_size>100000){
	echo"<hr>File Terlalu besar, max 100000 byte";
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
			
		case "application/pdf" :
	  		copy($files['tmp_name'],"pdf/$files_name");
	   			$namafile_baru=date('dmyhis').".pdf";
	   			if(file_exists("pdf/$namafile_baru")){
		   			unlink("pdf/$namafile_baru");
	   			}
            	rename("pdf/$files_name","pdf/$namafile_baru");
	  		break; 
		default:
		echo"Type File tidak tersedia";
	}
}
}
?>
