<?php
// Your Telegram Bot Token
$botToken = "7821779346:AAFpshRN2vtdb72hlpbWrUftBkTNj2HzAyc";
// Your Telegram Chat ID
$chatId = "2142287302";

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Format the message for Telegram
$telegramMessage = "New Contact Form Submission:\n\n" .
                   "Name: $name\n" .
                   "Email: $email\n" .
                   "Subject: $subject\n" .
                   "Message: $message";

// Send the message to Telegram
$telegramUrl = "https://api.telegram.org/bot$botToken/sendMessage";
$response = file_get_contents($telegramUrl . "?chat_id=" . $chatId . "&text=" . urlencode($telegramMessage));

// Redirect or show a success message
if ($response) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message.";
}
?>
