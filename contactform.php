<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['comment'];

    $mailto = "paniaguasanchezadrian@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received and email from ".$name.".\n\n".$message;

    mail($mailto, $text, $message, $headers);
    header("Location: index.html?mailsend");
}