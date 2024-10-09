<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Data Form</title>
</head>
<body>
    <h1>Post Data Form</h1>
    <form action="/postdata" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
