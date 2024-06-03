

<!DOCTYPE html>
<html>
<head>
    <title>Snapmail </title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333333;
        }

        input[type="email"],
        textarea,
        input[type="file"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        button {
           
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Envoyer un message via SNAPMAIL</h1>
    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif
    <form action="/" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo">
        <br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>