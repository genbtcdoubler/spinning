<?php
@system("clear");
@system("figlet Hackerobenz");
date_default_timezone_set('Asia/Manila');
$b="\033[1;35m";
$red="\033[1;31m";
$green="\033[1;32m";
$puti="\033[1;37m";
$orange="\033[1;36m";
print "
[35m<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>[32m
$b|  HACKING - TOOLS : [31m GHANA$b        |
[35m<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>[32m
     CHANNEL        :[34m HACKER OBENZ
[32m
     YOUTUBE        :[34m SUBSCRIBE TO MY CHANNEL
[32m
     WARNING        :[31m NOT FOR SALE[32m
[32m
     CREATOR        :[31m HACKER OBENZ[32m
[32m<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>[32m
        [36m HACK SCRIPT STARTING......[326m
[34m*********************************************[32m

";




while (true){
    
$url="https://bitcoinsp.in/ajax/getCoin";

$req="sd=20&google-response-token=&g-recaptcha-response=03AGdBq27NyI_1ocIzS2TZrPfE4QIQUzXNdp9rhW6JVQXW-zJFxdqQ0_neyK3rXv2Hfb4ptg8fZc75fc3wGQpoM9oc4HTqaNKS9-2h2420Ysz2Ep816qOB4SCi9nvMWON-D8sv4PRwoaZz8OL93yf17if_X1DQbOx75F3CrxwdmTpiQiUtsrCKpQKQYi0e61eNtEygf_pPDr2eCsRWAx5T1bzZGjHuU00WlKO-Wktck_YRbGGovxxTiH-5EaXxEiyQyJTh_nWzgJM-QuN5vENtkyykwh3TDFod7Sdpp8Lcyckb27Y3h68-ChW34N5OjPU878dgWyQyS1enzcLIw2PnaDxZqLm2p2xBS0xQYkDY-nYV32s4S39gtNh98Rr47fBcIL4AedqTDkdVgXp04ivFbIbukRZBmvyyA6RujxURx39EWCNIJuusdbkMtB8OZIRkrwIuVSxdb8O6raKvSGMl-9-yrB5XWUtnhQ&captcha-letra=
";

$hacker=curl_init();
curl_setopt_array($hacker, array(
	CURLOPT_PORT =>"443",
CURLOPT_URL => "$url",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => $req,
));
	
	
$obenz = curl_exec($hacker);
curl_close($hacker);
$js = json_decode($obenz,true);
echo "alert alert-success : ".$js["alert alert-success"]."Congratulations".$js["Congratulations"]."\n";
sleep(5);
}
?>
