<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet"/>
    <title>Lettre de Motivation - <?php echo $_POST["company"] ?></title>
</head>
<body>
<header>

</header>
<main>
    <div id="letter">
        <div id="header">
            <div id="sender">
                <?php
                $mail = $_POST["email"];

                echo "
                <p>{$_POST["name"]}</p>
                <p>{$_POST["address-sender"]}</p>
                <p>{$_POST["code-sender"]} {$_POST["city-sender"]}</p>
                <p><a href='mailto:$mail'>$mail</a></p>
                <p>{$_POST["phone"]}</p>
                ";
                ?>
            </div>
            <div id="recipient">
                <?php
                require_once File::buildPath([
                    "util",
                    "Utils.php"
                ]);
                date_default_timezone_set("Europe/Paris");
                $company = strtoupper($_POST["company"]);
                $date = explode("-", gmdate("d-m-Y"));
                $day = $date[0];
                $month = Utils ::getMonthByNumber($date[1]);
                $year = $date[2];

                echo "
                <p><b>$company</b></p>
                <p>{$_POST["address"]}</p>
                <p>{$_POST["code"]} {$_POST["city"]}</p>
                <p>{$_POST["city"]} le $day $month $year</p>
                ";
                ?>
            </div>
        </div>
        <div id="subject">
            <?php
            echo "<p><u>Objet : {$_POST["subject"]}</u></p>";
            ?>
        </div>
        <div id="core">
            <?php
            require_once File::buildPath([
                "util",
                "Utils.php"
            ]);
            $content = Utils::readFileContent("resources/{$_POST["core"]}");
            foreach($content as $item) {
                echo "<p>$item.</p><br>";
            }
            ?>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>