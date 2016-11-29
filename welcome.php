<html>
<body>

<?php
    if (isset($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "$email is a valid email address.<br/><br/>"; 
        } else {
            echo "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
        }
    }
?>
</body>
</html>