<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Firesaiyagin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="process.php" method="POST" id="my_form">
        <label>
            <i data-feather="hash"></i>
            <input name="contents" id="contents" autocomplete="off" type="text" placeholder="type here & enter/send"
                spellcheck="false">
        </label>
            <button id="post_Button" type="submit" onclick="sendMessage();"></button>
    </form>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="main.js"></script>
</body>

</html>