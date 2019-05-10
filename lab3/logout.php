<?php
include_once('template.php');
$_SESSION = array();
session_destroy();
header("Location:index.php");
?>
</body>
</html>
