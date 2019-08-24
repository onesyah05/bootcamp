<?php 
function check($username=null,$password=null,$email=null)
{
	//Check Username
	if ($username!=null) {

		$hurufBesar = preg_match('@[A-Z]@', $username);
		$panjang = strlen($username);

		if ($hurufBesar or $panjang !=8 ) {
			$username = 	"Username : ".$username." >> InValid<br>";
		}else{
			$username = 	"Username : ".$username." >> Valid<br>";
		}
	}

	//Check Password
	if ($password!=null) {

		$hurufKecil = preg_match('@[a-z]@', $password);
		$hurufBesar = preg_match('@[A-Z]@', $password);
		$angka 		= preg_match('@[0-9]@', $password);

		if (!$hurufKecil or !$hurufBesar or !$angka) {
			$password = 	"Password : ".$password." >> InValid<br>";
		}else{
			$password = 	"Password : ".$password." >> Valid<br>";
		}
	}

	//Check Email
	if ($email!=null) {
		$hurufBesar = preg_match('@[A-Z]@', $email);
		$periksaPertama = strpos($email, '@');
		$periksaKedua = strpos($email, '.');

		if (!$periksaPertama or !$periksaKedua or $hurufBesar) {
			$email = 	"Email : ".$email." >> InValid<br>";
		}else{
			$email = 	"Email : ".$email." >> Valid<br>";
		}	
	}

	return $username.$password.$email;
}
//Jika ingin men Check salah satu tinggal isi dan yang lain di kosong kan
//Jika hanya mengisi $username maka hasil akan mencetak usernam
$username 	= '';
$password 	= '';
$email		= 'kurniawan@gmail.com';

echo check($username,$password,$email);