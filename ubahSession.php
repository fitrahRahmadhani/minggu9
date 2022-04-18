<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $_SESSION["makananfav"] = "Sate Padang";
        echo "Session makananfav telah diubah";
    ?>
</body>
</html>