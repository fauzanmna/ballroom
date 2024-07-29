<?php
include ('conn.php');
if (isset($_GET['h'])) {
	$query = mysql_query("delete from room where id_room = '$_GET[h]'");
	if ($query) {
		echo "<script>alert('HAPUS ROOM BERHASIL');</script>";
		echo "<script>window.location='index.php?p=room'</script>";
	} else {
		echo "<script>alert('HAPUS ROOM GAGAL');</script>";
		echo "<script>window.location='index.php?p=room'</script>";
	}  
}
if (isset($_POST['enroom'])) {
	$target_dir = "image/room/";
	$nama_file = basename($_FILES["efroom"]["name"]);
	$str       = 'abcdefghijklmnopqrstuvwxyz123456789';
	$shuffled  = str_shuffle($str);
	$data_1    = substr($shuffled , -5); 
	$data_2    = substr($shuffled , 0,5); 
	$newname   = md5($data_1.$data_2);
	$file_name = $newname.$nama_file;
	$target_file = empty($nama_file)? '' : $target_dir . $file_name;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
	if (isset($_POST["submit"])) {
		$check = getimagesize($_FILES["efroom"]["tmp_name"]);
		if($check !== false) {
			echo "<script>alert('File is an image - " . $check["mime"] . ".');</script>";
			echo "<script>window.location='index.php?p=room'</script>";
			$uploadOk = 1;
		} else {
			echo "<script>alert('File is not an image.');</script>";
			echo "<script>window.location='index.php?p=room'</script>";
			$uploadOk = 0;
		}
	}
  // Check if file already exists
	if (file_exists($target_file)) {
		echo "<script>alert('Sorry, file already exists.');</script>";
		echo "<script>window.location='index.php?p=room'</script>";
		$uploadOk = 0;
	}
  // Check file size
	if ($_FILES["efroom"]["size"] > 500000) {
		echo "<script>alert('Sorry, your file is too large.');</script>";
		echo "<script>window.location='index.php?p=room'</script>";
		$uploadOk = 0;
	}
  // Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" && !empty($imageFileType) ) {
		echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
	echo "<script>window.location='index.php?p=room'</script>";
	$uploadOk = 0;
}
  // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "<script>alert('Sorry, your file was not uploaded.');</script>";
	echo "<script>window.location='index.php?p=room'</script>";
  // if everything is ok, try to upload file
} else {
	if (empty($_FILES["efroom"]["name"])){
		$sql= "update room set nama_room = '$_POST[enroom]', kapasitas_room='$_POST[ekroom]', detail_room = '$_POST[edroom]' where id_room = '$_POST[eid]'";
		$ins= mysql_query($sql);
		if ($ins) {
			move_uploaded_file($_FILES["efroom"]["tmp_name"], $target_file);
			echo "<script>alert('EDIT ROOM BERHASIL');</script>";
			echo "<script>window.location='index.php?p=room'</script>";
		} else {
			echo "<script>alert('EDIT ROOM GAGAL');</script>";
			echo "<script>window.location='index.php?p=room'</script>";
		}
	} else {
		$sql= "update room set nama_room = '$_POST[enroom]', detail_room = '$_POST[edroom]', kapasitas_room='$_POST[ekroom]', gambar = '$target_file' where id_room = '$_POST[eid]'";
		$ins= mysql_query($sql);
		if ($ins) {
			move_uploaded_file($_FILES["efroom"]["tmp_name"], $target_file);
			echo "<script>alert('EDIT ROOM BERHASIL');</script>";
			echo "<script>window.location='index.php?p=room'</script>";
		} else {
			echo "<script>alert('EDIT ROOM GAGAL');</script>";
			echo "<script>window.location='index.php?p=room'</script>";
		}
	}
}
}
if (isset($_POST['nroom'])) {
	$target_dir = "image/room/";
	$nama_file = basename($_FILES["froom"]["name"]);
	$str       = 'abcdefghijklmnopqrstuvwxyz123456789';
	$shuffled  = str_shuffle($str);
	$data_1    = substr($shuffled , -5); 
	$data_2    = substr($shuffled , 0,5); 
	$newname   = md5($data_1.$data_2);
	$file_name = $newname.$nama_file;
	$target_file = empty($nama_file)? '' : $target_dir . $file_name;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
	if (isset($_POST["submit"])) {
		$check = getimagesize($_FILES["froom"]["tmp_name"]);
		if($check !== false) {
			echo "<script>alert('File is an image - " . $check["mime"] . ".');</script>";
			echo "<script>window.location='index.php?p=room'</script>";
			$uploadOk = 1;
		} else {
			echo "<script>alert('File is not an image.');</script>";
			echo "<script>window.location='index.php?p=room'</script>";
			$uploadOk = 0;
		}
	}
  // Check if file already exists
	if (file_exists($target_file)) {
		echo "<script>alert('Sorry, file already exists.');</script>";
		echo "<script>window.location='index.php?p=room'</script>";
		$uploadOk = 0;
	}
  // Check file size
	if ($_FILES["froom"]["size"] > 5000000) {
		echo "<script>alert('Sorry, your file is too large.');</script>";
		echo "<script>window.location='index.php?p=room'</script>";
		$uploadOk = 0;
	}
  // Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" && !empty($imageFileType) ) {
		echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
	echo "<script>window.location='index.php?p=room'</script>";
	$uploadOk = 0;
}
  // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "<script>alert('Sorry, your file was not uploaded.');</script>";
	echo "<script>window.location='index.php?p=room'</script>";
  // if everything is ok, try to upload file
} else {
	$sql= "insert into room values('default', '$_POST[nroom]', '$_POST[droom]', '$_POST[kroom]', '$target_file')";
	$ins= mysql_query($sql);
	if ($ins) {
		move_uploaded_file($_FILES["froom"]["tmp_name"], $target_file);
		echo "<script>alert('INPUT ROOM BERHASIL');</script>";
		echo "<script>window.location='index.php?p=room'</script>";
	} else {
		echo "<script>alert('INPUT ROOM GAGAL');</script>";
		echo "<script>window.location='index.php?p=room'</script>";
	}
}
}
if (isset($_POST['room_list'])) {
	$t = explode(" - ", $_POST['datepicker']);
	$a = date("Y-m-d H:i", strtotime(str_replace("/", "-", $t[0])));
	$b = date("Y-m-d H:i", strtotime(str_replace("/", "-", $t[1])));
	$sql = mysql_query("select * from booking_room where id_room = '$_POST[room_list]' and (tgl_booking between '$a' and '$b') or id_room = '$_POST[room_list]' and (tgl_selesai between '$a' and '$b')");
	$res = mysql_num_rows($sql);
	if ($res > 0){
		echo json_encode("no");
	} else {
		$sql2 = mysql_query("select * from room where id_room = '$_POST[room_list]'");
		$dat = mysql_fetch_assoc($sql2);
		echo json_encode($dat);
	}
}
if (isset($_POST['bnama'])) {
	$t = explode(" - ", $_POST['bdate']);
	$a = date("Y-m-d H:i", strtotime(str_replace("/", "-", $t[0])));
	$b = date("Y-m-d H:i", strtotime(str_replace("/", "-", $t[1])));
	$sql = mysql_query("insert into booking_room values('DEFAULT', '$_POST[bid_room]', '$_POST[bnama]', '$_POST[bno_telp]', '$a' , '$b' ,'$_POST[bunit_kerja]', '$_POST[bagenda_rapat]' , '0')");
	if ($sql) {
		echo "ok";
	} else {
		echo "no";
	}
}
if (isset($_POST['idhapusbook'])) {
	$sql = mysql_query("delete from booking_room where id_booking = '$_POST[idhapusbook]'");
	if ($sql) {
		echo "oke";
	} else {
		echo "no";
	}
}
if (isset($_POST['konfirmasi'])) {
	$sql = mysql_query("update booking_room set status_room = '1' where id_booking = '$_POST[konfirmasi]'");
	if ($sql) {
		echo "oke";
	} else {
		echo "no";
	}
	
}
if (isset($_POST['cek_in'])) {
	$sql = mysql_query("update booking_room set status_room = '2' where id_booking = '$_POST[cek_in]'");
	if ($sql) {
		echo "oke";
	} else {
		echo "no";
	}
}
if (isset($_POST['cek_out'])) {
	$sql = mysql_query("update booking_room set status_room = '3' where id_booking = '$_POST[cek_out]'");
	if ($sql) {
		echo "oke";
	} else {
		echo "no";
	}
}
if (isset($_POST['edbook'])) {
	$sql = mysql_query("select * from booking_room b join room r on b.id_room = r.id_room where b.id_booking = '$_POST[edbook]'");
	$row = mysql_fetch_assoc($sql);
	echo json_encode($row);
}
?>