<?php
if(isset($_POST['submit'])){
$to = "realtymedia93@gmail.com";
$subject = "M3M The Line";
$message = "<p><br> M3M Google Leads <br>
<b>Name :</b>".$_POST['name']."<br><b>Email :</b>".$_POST['email']."<br><b>Contact :</b>".$_POST['mobile']."<br><b>City :</b>".$_POST['city']."<br><b>Query :</b>".$_POST['query']."</p>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Google Lead <lead@pcmapl.in/>' . "\r\n";
mail($to, $subject, $message, $headers);
echo '<script>window.location="thankyou.php"</script>';
}
?>