<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    //menghapus semua variabel session
    session_unset();
    //menghapus session
    session_destroy();
    echo "Session telah dihapus";
    ?>
</body>
</html>