<?php
ini_set('display_errors',1);
 function curlPost($URL,$data)
       {
              $ch = curl_init();              
              curl_setopt($ch, CURLOPT_URL, $URL);
              curl_setopt($ch, CURLOPT_HEADER, 0);
              curl_setopt($ch, CURLOPT_POST, 1);
              curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                
              curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);          
              $output = curl_exec($ch);                                           
              curl_close($ch);              
              return $output;

       }
       
function xmlObject2Array($xml)  
   {  
        $xmlObject = simplexml_load_string($xml);
        $xmlArray  = json_decode(json_encode($xmlObject),1);
        return $xmlArray;
    }

// Action - status - sample code      
$action = 'status'; 
$paymentid = '';//HDFC Payment id
$accountid = '';//HDFC Accout id
$secretkey = '';//HDFC secret key
$transactionid = "";//HDFC Transaction id
$fields = array(
    'Action' => 'status',
    'AccountID' => '',
	'SecretKey'=>'',
	'TransactionID'=>'',
	'PaymentID'=>''
);
$files = array(
    array(
        'name' => 'uimg',
        'type' => 'image/jpeg',
        'file' => './profile.jpg',
    )
);
$url='https://api.secure.ebs.in/api/1_0';
$data = "Action=".$action."&TransactionID=".$transactionid."&AccountID=".$accountid."&SecretKey=".$secretkey."&PaymentID=".$paymentid;
$xmlResponse   =   curlPost('https://api.secure.ebs.in/api/1_0',$data);	
//$xmlResponse = http_post_fields($url, $data, $files);
$responseArr   =   xmlObject2Array($xmlResponse) ;   
$response      =   $responseArr['@attributes'];
print_r($response);
?>
<HTML>
<HEAD>
<TITLE>HDFC- Payment Page</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<style>
	h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100; margin-bottom:0.1em}
    h2.co    { font-family:Arial,sans-serif; font-size:24pt; color:#FFFFFF; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3       { font-family:Arial,sans-serif; font-size:16pt; color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    body     { font-family:Verdana,Arial,sans-serif; font-size:11px; color:#08185A;}
	th 		 { font-size:12px;background:#015289;color:#FFFFFF;font-weight:bold;height:30px;}
	td 		 { font-size:12px;background:#DDE8F3}
	.pageTitle { font-size:24px;}
</style>
</HEAD>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 bgcolor="#ECF1F7">
<center>
   <table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'><h2 class='co'>&nbsp;API sample - Action: status</h2></th></tr></table>
     
	<center><h3>Response</H3></center>
    <table width="600" cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th colspan="2">Transaction Details</th>
        </tr>
<?php
		foreach( $response as $key => $value) {
?>			
        <tr>
            <td class="fieldName" width="50%"><?php echo $key; ?></td>
            <td class="fieldName" align="left" width="50%"><?php echo $value; ?></td>
        </tr>
<?php
		}
?>		
	</table>
</center>
<table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'>&nbsp;</th></tr></table>
</body>
</html>


