<html lang="en">

<head>
<title>DELETE</title>
    <link rel="stylesheet" href="./style.css" type="text/css"/>
</head>
<body>
    <?php
        $mysqli = new mysqli("db", "user", "password", "appDB");
        $result = $mysqli->query("DELETE FROM clients WHERE phone='24680'");
    ?>
    <script>
        window.location.replace("/");
    </script>
</body>

</html>
