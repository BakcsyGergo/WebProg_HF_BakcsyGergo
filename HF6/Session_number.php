<?php
session_start();
if(!isset($_SESSION['the_number']))
{
    $_SESSION['the_number'] = rand(1, 10);
}
$rand = $_SESSION['the_number'];
$guess = isset($_POST['guess']) ? $_POST['guess'] : false;
?>
<html>
<body>
<form action = "" method = "post">
    Enter a number(1-10): 
        <input type = "text" name = "guess" /><br>
        <button type = "submit">Submit</button><br>
</form>
        <?php
if ($guess != false)
{
    print "The number you guessed: $guess <br />";
    if ($guess == $rand)
    {
        print "You are correct <br />"; 
        unset($_SESSION['the_number']); 
    }
    else if ($guess > $rand)
    {
        print "You are too high. <br />";
        }
    else if ($guess < $rand)
        {
        print "You are too low. <br />";
        }
}
?>
</body>
</html>