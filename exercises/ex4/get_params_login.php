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
            $age = $_GET["age"];

            if($username == "" && $password == "" && $age == "")
                echo "<h2>Good morning " .$username + .$age ."</h2>";
            else
                echo "<h2>Who are you? you can't get in </h2>";
            ?>
    </section>
</body>
</html>