<?php
if(isset($_POST['submit'])) {
    $to = "sayeed.como@gmail.com"; // Change this to your email address
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your message has been sent successfully.');</script>";
        echo "<script>window.location.href = 'index.html';</script>"; // Redirect back to the HTML form
    } else {
        $errorMessage = error_get_last()['message'];
        echo "<script>alert('Failed to send message. Error: ".$errorMessage." Please try again.');</script>";
        echo "<script>window.location.href = 'index.html';</script>"; // Redirect back to the HTML form
    }
}
?>
