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
//print_r($_POST);
if(isset($_POST) && isset($_POST['getstatus']) && $_POST['getstatus'] == 'Get Status'){
  // Action - status - sample code      
    extract($_POST);
    $action = 'status'; 
    //$paymentid = '';//HDFC Payment id
    $accountid = '25999';//HDFC Accout id
    $secretkey = '9e6a4a28f8619ec32c2c563183502866';//HDFC secret key
    //$transactionid = "";//HDFC Transaction id
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
    //print_r($response);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Berhampur Municipal Corporation</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/smc.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style>
  h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100; margin-bottom:0.1em}
    h2.co    { font-family:Arial,sans-serif; font-size:24pt; color:#FFFFFF; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3       { font-family:Arial,sans-serif; font-size:16pt; color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    body     { font-family:Verdana,Arial,sans-serif; font-size:11px; color:#08185A;}
  th     { font-size:12px;background:#015289;color:#FFFFFF;font-weight:bold;height:30px;}
  td     { font-size:12px;background:#DDE8F3}
  .pageTitle { font-size:24px;}
</style>
</head>
<body>
<noscript>
<style type="text/css">.content,#content,.wrapper,#footer-fullwidth{display:none;}</style>
<h1 align="center">Alert : Javascript is disabled. To View this Website, Please Enable Your Browser's Javascript...</h1>
<meta HTTP-EQUIV="REFRESH" content="0; url=<?=$_SERVER['HTTP_X_FORWARDED_HOST']?>/bmc/404.php"> 
</noscript>
<style id="antiClickjack">body{display:none !important;}</style> 
    <script type="text/javascript"> 
    if (self === top) { 
      var antiClickjack = document.getElementById("antiClickjack"); 
      antiClickjack.parentNode.removeChild(antiClickjack); 
    } else { 
      top.location = self.location; 
    }
    
  </script>

<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/0429E51F-54C1-2D47-86CD-689B46033D5B/main.js" charset="UTF-8"></script><script type="text/javascript">
function noCache()
  {
  var a=navigator.onLine;
    if(a){
  }else{
    //alert('Sorry...This content can not be accessed ..!');
    window.location='http://odishapolice.gov.in/errorpage.html';
  } 
}
</script>
<!-- <div class="topHeader">
  <div class="containerWrap">
    <a href="#"><i class="fa fa-sign-in fa-fw"></i> Login</a>
  </div>
</div> -->
<script type="text/javascript">
      $(document).ready(function(){
        $("input").attr('autocomplete', 'off');
        $('input, textarea').bind("cut copy paste",function(e) {
             e.preventDefault();
         });
      })
    </script>
<style type="text/css">
  .loginbtn{

  }
  .loginbtn a{
    color: #fff;
      padding: 0 20px;
      position: relative;
      top: 12px;
  }
  .loginbtn a:hover{
    color: #fff;
      text-decoration: none;
  }
</style>
<div class="headerSection">
  <div class="containerWrap">
      <div class="row">
          <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
              <a href="<?=$_SERVER['HTTP_X_FORWARDED_HOST']?>/bmc/index.php"><img src="images/logo.png" class="img-responsive" alt=""></a>
            </div>
          
          <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
              <a href="<?=$_SERVER['HTTP_X_FORWARDED_HOST']?>/bmc/index.php"><img src="images/cm.png" class="img-responsive pull-right" alt="" style="margin-top:15px"></a>
              <a href="<?=$_SERVER['HTTP_X_FORWARDED_HOST']?>/bmc/index.php"><img src="images/logo2.png" class="img-responsive pull-right" alt=""></a>
              <a href="<?=$_SERVER['HTTP_X_FORWARDED_HOST']?>/bmc/index.php"><img src="images/logo1.png" class="img-responsive pull-right" alt=""></a>
            </div>
      </div>
  </div>
</div>

<center>
<table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'><h2 class='co'></h2></th></tr></table>
<form class="form-inline form-bg" role="form" method="post">
        <table width="600" cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th colspan="4">Enter Transaction Details</th>
        </tr>
     
        <tr>
            <td class="fieldName" width="50%">Transaction Id</td>
            <td class="fieldName" align="left" width="50%"><input type="text" name="transactionid" value="<?php echo isset($transactionid) && $transactionid!=''?$transactionid:'';?>"></td>
            <td class="fieldName" width="50%">Payment Id</td>
            <td class="fieldName" align="left" width="50%"><input type="text" name="paymentid" value="<?php echo isset($paymentid) && $paymentid!=''?$paymentid:'';?>"></td>
        </tr>
        <tr>
            <td colspan="4" align="center"><input type="submit" value="Get Status" name="getstatus"></td>
        </tr>
  </table>
  </form>
  </center>

  <center>
<?php if(isset($response)){?>     
  <center><h3>API Response</H3></center>
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
  <?php }?>
</center>
<!-- <table width='100%' cellpadding='0' cellspacing="0" >
<tr>
<th width='90%'>&nbsp;</th>
</tr>
</table> -->
</body>
</html>


