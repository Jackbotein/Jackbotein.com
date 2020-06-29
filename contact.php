<?php
if (isset($_POST['submit'])) {
  $name = $_POST['Your name'];
  $email = $_POST['Email'];
  $message = $_POST['Message'];

  $mailTo = "Jackbotein@gmail.com";
  $headers = "Od: ".$email;
  $txt = "Otrzymałeś maila od ".$name.". \n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.php?mailsend");
}
?>
