<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $to = $data['email'];
    $subject = "Auric Web Request Received";
    $message = "Hello " . $data['name'] . ",\n\nWe have received your request. We'll get back to you soon!";
    $headers = "From: mineblade3535@gmail.com";
    mail($to, $subject, $message, $headers);
}
?
