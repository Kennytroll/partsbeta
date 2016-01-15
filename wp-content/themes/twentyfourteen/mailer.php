<html>
<?php
require_once 'swift/lib/swift_required.php';



if (isset($_POST["email"])) {
    $fromemail = $_POST["email"];    
}else{  
   $fromemail = "Parts Databse" ;
}

if (isset($_POST["drawing"])) {
    $drawreq = $_POST["drawing"];    
}else{  
   $drawreq = "Drawing Request" ;
}

if (isset($_POST["comments"])) {
    $bodyglove = $_POST["comments"];    
}else{  
   $bodyglove = "No additional Information Provided" ;
}



$pEmailGmail = 'filledkenny@gmail.com';
$pPasswordGmail = 'zergrush';
$pFromName = $fromemail; //display name

$pTo = 'skilledkenny@gmail.com'; //destination email
$pSubjetc = $drawreq; //the subjetc 
$pBody = $bodyglove; //body html

$transport = Swift_SmtpTransport::newInstance('smtp.googlemail.com', 465, 'ssl')
            ->setUsername($pEmailGmail)
            ->setPassword($pPasswordGmail);

$mMailer = Swift_Mailer::newInstance($transport);

$mEmail = Swift_Message::newInstance();
$mEmail->setSubject($pSubjetc);
$mEmail->setTo($pTo);
$mEmail->setFrom(array($pEmailGmail => $pFromName));
$mEmail->setBody($pBody, 'text/html'); //body html

if($mMailer->send($mEmail) == 1){
    echo 'send ok';
    print_r($_REQUEST);
    var_dump($GLOBALS);
}
else {
    echo 'send error';
}
?>

</html>