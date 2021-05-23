<?php

if (isset($_POST['submit'])) {

    $no_wa = $_POST['no_wa'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    header("location: https://api.whatsapp.com/send?phone=$no_wa&text=Name%20:%20$name%0AEmail%20:%20$email%0AMessage%20:%20$message");
}