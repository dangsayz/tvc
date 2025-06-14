<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"] ?? '');
    $email = htmlspecialchars($_POST["email"] ?? '');
    $message = htmlspecialchars($_POST["message"] ?? '');

    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
?>
    <h1>Contact Us</h1>
    <form method="post">
        <label>Name:</label><br/>
        <input type="text" name="name"><br/><br/>
        <label>Email:</label><br/>
        <input type="email" name="email"><br/><br/>
        <label>Message:</label><br/>
        <textarea name="message"></textarea><br/><br/>
        <button type="submit">Send</button>
    </form>
<?php
}
?>