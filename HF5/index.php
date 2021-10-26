<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h3>Online conference registration</h3>

        <form method="post" enctype="multipart/form-data" action="index.php">
            <label for="fname"> First name:
                <input type="text" name="firstName">
            </label>
            <br><br>
            <label for="lname"> Last name:
                <input type="text" name="lastName">
            </label>
            <br><br>
            <label for="email"> E-mail:
                <input type="text" name="email">
            </label>
            <br><br>
            <label for="attend"> I will attend:<br>
                <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
                <input type="checkbox" name="attend[]" value="Event2">Event2<br>
                <input type="checkbox" name="attend[]" value="Event3">Event2<br>
                <input type="checkbox" name="attend[]" value="Event4">Event3<br>
            </label>
            <br><br>
            <label for="tshirt"> What's your T-Shirt size?<br>
                <select name="tshirt">
                    <option value="P">Please select</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </label>
            <br><br>
            <label for="abstract"> Upload your abstract<br>
                <input type="file" name="abstract"/>
            </label>
            <br><br>
            <input type="checkbox" name="terms">I agree to terms & conditions.<br>
            <br><br>
            <input type="submit" name="submit" value="Send registration"/>
        </form>
        <?php
        if (isset($_POST["submit"])) {

            print "Nev: " . $_POST["firstName"] . " " . $_POST["lastName"];
            print "<br><br>";
            print "E-mail: " . $_POST["email"];
            print "<br><br>";


            $attend = $_POST['attend'];
            if (empty($attend)) {
                echo("You didn't select any events.");
            } else {
                echo "Events:";
                for ($i = 0; $i < count($attend); $i++) {
                    echo($attend[$i] . " ");
                }
                echo "<br>";
            }




            echo "Tshirt size: " . $_POST['tshirt'] . "<br>";

            if ($_FILES["abstract"]["type"] != "application/pdf") {
                die("Csak PDF fajl!");
            }


            if ($_FILES["abstract"]["error"] != 0) {
                die("Hiba a feltöltés során");
            }


            if ($_FILES["abstract"]["size"] > 1024 * 1024 * 3) {
                die("Túl nagy méretű fájl");
            }

            if ($_POST["terms"] == "on") {
                echo "You accepted the Terms.";
            } else {
                echo "You must accept the terms!";
            }
        }
        ?>

    </body>
</html>
