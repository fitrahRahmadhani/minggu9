<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $_SESSION["makananfav"] = "Rujak";
        $_SESSION["minumanfav"] = "Es Teler";
        echo "Session telah diset";
    ?>
</body>
</html>