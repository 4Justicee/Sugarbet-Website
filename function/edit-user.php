<?php


require_once('session.php');
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);

if (!preg_match('/^[0-9]{9,15}+$/', $no_hp)) {
	header('location:' . $urldomain . '/profil?notif=5');
	exit();
} else {
	//ubah nama
	$query1 = mysqli_query($conn, "UPDATE `tb_user` SET `full_name` ='$full_name' WHERE cuid = '$userID'") or die(mysqli_error($conn));

	/*ubah email
	$cekEmail = mysqli_query($conn,"SELECT * FROM `tb_user` WHERE email = '$email'") or die (mysqli_error($conn));
	$qq = mysqli_num_rows($cekEmail);
	$emailsekarang = $qq['email'];
	if($email != $emailsekarang){
		if($qq > 0){
			header('location:'.$urldomain.'/profil?notif=2');
		} else {
			$query2 = mysqli_query($conn,"UPDATE `tb_user` SET `email` ='$email' WHERE cuid = '$userID'") or die(mysqli_error($conn));
		}
	}
	*/

	//ubah no hp
	$cekHp = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE no_hp = '$no_hp'") or die(mysqli_error($conn));
	$qqq = mysqli_num_rows($cekHp);
	$no_hpsekarang = $qq['email'];
	if ($no_hp != $no_hpsekarang) {
		if ($qqq > 0) {
			header('location:' . $urldomain . '/profil?notif=3');
		} else {
			$query3 = mysqli_query($conn, "UPDATE `tb_user` SET `no_hp` = '$no_hp' WHERE cuid = '$userID'") or die(mysqli_error($conn));
		}
	}
}
