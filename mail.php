<?php
  if (!empty($_POST)) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      
      $toEmail = 'nelson-matos@hotmail.com';
      $emailSubject = $subject;

      $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

      $bodyParagraphs = ["Nome: {$name}", "Email: {$email}", "Mensagem:", $message];

      $body = join(PHP_EOL, $bodyParagraphs);

      mail($toEmail, $emailSubject, $body, $headers);
  }
?>