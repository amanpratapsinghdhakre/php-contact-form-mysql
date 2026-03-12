<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Contact Us</h1>
    <p>Send us a message and we will get back to you.</p>

    <form action="contact.php" method="POST">

        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" required>
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-group">
            <label>Message</label>
            <textarea name="message" required></textarea>
        </div>

        <button type="submit">Send Message</button>

    </form>

</div>

</body>
</html>