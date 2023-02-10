
<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['Email'];
$subject= $_POST['Subject'];
$comment= $_POST['Comment'];
$to = "smartmeptraining@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject =" . $subject;\r\n comment =" . $comment;
$headers = "https://smartmep.github.io/MEP/" . "\r\n" .
"CC: nayakrakesh868@gmail.com";
if($Email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index1.html");
?>
