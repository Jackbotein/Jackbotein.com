<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "lipiec002@wp.pl";
  $headers = "Od: ".$email;
  $txt = "Otrzymałeś maila od ".$name.". \n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
?>
