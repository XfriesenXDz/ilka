<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Pushbullet API endpoint and access token
    $api_endpoint = "https://api.pushbullet.com/v2/pushes";
    $access_token = "o.ZXTXQxLgVkxkm0u0XIMQhao9XgAK7BVz"; // Replace with your Pushbullet access token

    // Create a message
    $message_data = array(
        "type" => "note",
        "title" => "New Contact Form Submission",
        "body" => "Username: $username\nEmail: $email\nMessage: $message"
    );

    // Send the message using cURL
    $ch = curl_init($api_endpoint);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Access-Token: $access_token",
        "Content-Type: application/json"
    ));
    curl_exec($ch);
    curl_close($ch);

    // Redirect the user to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>
