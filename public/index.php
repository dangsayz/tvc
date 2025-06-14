<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Safely get POST data
    $name = htmlspecialchars($_POST["name"] ?? '');
    $email = htmlspecialchars($_POST["email"] ?? '');
    $message = htmlspecialchars($_POST["message"] ?? '');

    echo "<h2>Thank you, $name!</h2>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong><br/>" . nl2br($message) . "</p>";
    echo "<br><a href='/'>Back to form</a>";
} else {
?>
    <h1>Contact Us</h1>
    <form method="post">
        <label>Name:</label><br/>
        <input type="text" name="name" required><br/><br/>

        <label>Email:</label><br/>
        <input type="email" name="email" required><br/><br/>

        <label>Message:</label><br/>
        <textarea name="message" rows="5" cols="40" required></textarea><br/><br/>

        <button type="submit">Send</button>
    </form>
<?php
}
?>