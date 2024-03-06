<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form</title>
</head>

<body>
    <form action="post_data.php" method="POST">
        <div>
            <span>Name</span>
            <input type="text" name="name" id="name" placeholder="name">
        </div>
        <div>
            <span>Number</span>
            <input type="number" name="phone" id="phone" placeholder="number">
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>
</body>

</html>
