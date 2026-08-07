<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $room = htmlspecialchars($_POST['room']);
    $checkin = htmlspecialchars($_POST['checkin']);
    $checkout = htmlspecialchars($_POST['checkout']);
    $guests = htmlspecialchars($_POST['guests']);
    $message = htmlspecialchars($_POST['message']);

    $to = "mastersilver@gmail.com";

    $subject = "New Hotel Booking";

    $body = "
    New Booking Details:

    Full Name: $name
    Email: $email
    Phone: $phone
    Room Type: $room
    Check In: $checkin
    Check Out: $checkout
    Guests: $guests

    Message:
    $message
    ";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){

        echo "
        <script>
            alert('Booking Submitted Successfully');
            window.location.href='index.html';
        </script>
        ";

    } else {

        echo "
        <script>
            alert('Booking Failed');
            window.location.href='index.html';
        </script>
        ";
    }
}

?>