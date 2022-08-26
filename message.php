<!doctype html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>Thank you!</title>
        <style>
            #container{width: 75%; margin: auto; border: 3px outset; padding: 10px; border-radius:20px; background-color:wheat;}
            a{text-decoration:none;}
        </style>
    </head>
<body>
    
        <p style="text-align:center">Thank you for contacting me, I'll reply soon</p>
        <div id="container">
    <ul>
        <li><b>Your name:</b> <?php echo $_POST["name"] ?></li>
        <li><b>Email:</b> <?php echo $_POST["email"] ?></li>
        <li><b>Your message:</b> <?php echo $_POST["message"] ?></li>
    </ul>
    </div>
    <p style="text-align:center;"><a href="index.html">Back to home page</a></p>
</body>
</htmml>