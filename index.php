<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome PHP fans</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <?php

                $name = $_GET ['name']; //echo out of the name of the user in the URL

                $welcome_script = "Welcome, $name to my PHP site running on Cloudflare Tunnels";
                echo $welcome_script; 
            ?>
        </h1>
        <h2>Lavarel coming soon.....</h2>
</header>

</body>

</html>