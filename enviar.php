<?php
include('header.php');

$my_mail = 'rodrigoluisguzman@gmail.com';

$name = $_POST['name'];
$to = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$body = "name " . $name . "\r\n" . "to " . $to . "\r\n" . "subject " . $subject . "\r\n" . "message " . $message;

mail($my_mail, "probando el envio de mail", $body);
?>
<div class="container">
    <div class="alert alert-primary mt-5" role="alert">
        The email message was sent. <a href="index.php" class="alert-link">Volver</a>
    </div>
</div>

<?php include('footer.php'); ?>

</body>

</html>