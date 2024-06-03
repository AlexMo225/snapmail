

<!DOCTYPE html>
<html>
<head>
    <title>Message Ephemère </title>
</head>
<body>
    <h1>Message éphémère</h1>
    @if ($message)
        <p>{{ $message->message }}</p>
        @if ($photoPath)
            <p>Une pièce jointe au Snap mail:</p>
            <img src="{{ asset('storage/' . $photoPath) }}" alt="Photo">
        @endif
    @else
        <p>Le message n'existe pas ou a été supprimé.</p>
    @endif
</body>
</html>