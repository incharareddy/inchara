<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $comments = htmlspecialchars($_POST["comments"]);

    echo "<h1>Form Submission Details</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Comments:</strong> $comments</p>";
}
?>
