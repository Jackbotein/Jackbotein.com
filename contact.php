<?php
if (isset($_POST['submit entry'])) {
  $name = $_POST['name entry'];
  $email = $_POST['email entry'];
  $message = $_POST['message entry'];

  $mailTo = "Jackbotein@gmail.com";
  $headers = "Od: ".$email;
  $txt = "Otrzymałeś maila od ".$name.". \n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.php?mailsend");
}
?>
