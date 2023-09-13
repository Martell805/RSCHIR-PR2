<html lang="en">

<head>
<title>UPDATE</title>
    <link rel="stylesheet" href="./style.css" type="text/css"/>
</head>
<body>
    <?php
        $mysqli = new mysqli("db", "user", "password", "appDB");
        $result = $mysqli->query("UPDATE clients SET phone='24680' WHERE phone='13579'");
    ?>

    <script>
        window.location.replace("/");
    </script>
</body>

</html>
