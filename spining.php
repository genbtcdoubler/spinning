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
$__cfduid = "d509fd6511394e7d96d85ee39ec51d7451615053241";
$PHPSESSID = "6lqkt9lv2gn8dms50gbvufiair";
$bitmedia_fid = "eyJmaWQiOiJjOWEyZDg1MDEzMWFlYjM3MWUwMzdiYmMwNDk3YmViYiIsImZpZG5vdWEiOiI1ZWVlZDlkNDcwYjI4MzI3YzcyYjQxMzkzZTFkY2E5YyJ9";
$spin_id = "110932";
$_coinzilla_fp_ = "%7B%22backed%22%3A%5B%7B%22cap%22%3A2%2C%22lastCall%22%3A1615053363748%7D%5D%7D";





while (true){
    

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
echo "alert alert-success : ".$js["alert alert-success"]."Congratulations You Have Earned 30 satoshi".$js["Congratulations You Have Earned 30 satoshi"]."\n";
sleep(5);
}
?>
