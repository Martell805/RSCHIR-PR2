<html lang="en">

<head>
<title>INSERT</title>
    <link rel="stylesheet" href="./style.css" type="text/css"/>
</head>
<body>
    <?php
        $mysqli = new mysqli("db", "user", "password", "appDB");
        $result = $mysqli->query("INSERT INTO clients (name, surname, phone) VALUES ('New', 'Client', '13579')");
    ?>
    <script>
        window.location.replace("/");
    </script>
</body>

</html>
