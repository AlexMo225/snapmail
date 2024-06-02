<!-- resources/views/emails/notification.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>SnapMessage</title>
</head>
<body>
    <p>Vous avez reçu un nouveau SNAPMAIL </p>
    <a href="{{ url('/message/' . $token) }}">Clique Ici</a>
</body>
</html>