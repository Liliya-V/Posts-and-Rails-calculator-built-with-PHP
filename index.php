<?php

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Posts and Rails</title>
    </head>
    <body>
        <form  action="fencelenght.php" method="POST">
            <label>Amount of railings:</label>
            <input type="number" step="1" name="setrails" required>
            <br><br>
            <label>Amount of posts:</label>
            <input type="number" step="1" name="setposts" required>
            <br><br>
            <input type="submit" value="Calculate fence length">
        </form>
        <form  action="postrails.php" method="POST">
            <br><br><br>
            <label for="image">Length of a fence (meters):</label>
            <input type="number" step="0.1" name="setfence" required>
            <br><br><br>
            <input type="submit" value="Calculate posts&rails">
        </form>
    </body>
</html>