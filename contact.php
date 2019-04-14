<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

     $mailto = "mn.nahid0011@gmail.com";
     $headers = "From:  ".$mailFrom;
     $txt = "You have received an email form ".$name.".\n\n".$message;
     
      mail($mailTO, $subject, $txt, $headers);
      header("Location: index.php?mailsend");
}