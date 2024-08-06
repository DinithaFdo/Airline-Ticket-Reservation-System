<?php
session_start();
session_unset();
session_destroy();
echo '<script>window.alert("You have been logged out from the system."); window.location.href = "../index.php?logout=success";</script>';
exit();
?>
