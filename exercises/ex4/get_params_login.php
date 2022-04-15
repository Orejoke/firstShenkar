<!doctype html>
<html>
    <head>
</head>
<body>
    <section>
        Welcome
        <?php
            $username = $_GET["reg_in"];
            $password = $_GET["reg_pass"];

            if($username == "" && $password == "")
                echo "<h2>Good morning " .$username . "</h2>";
            else
                echo "<h2>Who are you? you can't get in </h2>";
            ?>
    </section>
</body>
</html>