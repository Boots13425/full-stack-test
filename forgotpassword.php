<?php
include'database.php';
include'loginprocess.php';

// Check if email exists
$email = $_POST['email'];
$sql = "SELECT * FROM student WHERE email='$email'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // Generate  a random reset token
    $token = bin2hex(random_bytes(32));

    // Update the user's token in the database
    $sql = "UPDATE student SET reset_token='$token' WHERE email='$email'";
    mysqli_query($con, $sql);

    // Send a reset link to the user's email
    $to = $email;
    $subject = "Password Reset Link";
    $message = "Click the following link to reset your password: http://groupon.com/reset_password.php?token=$token";
    $headers = "From: Your Website <noreply@groupon.com>";
    mail($to, $subject, $message, $headers);

    echo "A reset link has been sent to your email.";
} else {
    echo "Email not found.";
}

mysqli_close($con);
?>