<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        form {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px; /* Increased border radius */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 12px; /* Increased border radius */
            box-sizing: border-box;
            transition: border-color 0.3s; /* Smooth transition */
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 12px; /* Increased border radius */
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s; /* Smooth transition */
        }
        button:hover {
            background-color: #45a049;
        }
        p {
            margin: 0;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .success {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Contact Us</h1>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/contacts">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>
            @error('message')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Send</button>
    </form>
</body>
</html>
