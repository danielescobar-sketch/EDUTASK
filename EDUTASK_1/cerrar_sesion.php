<?php
session_start();

session_unset();
session_destroy();

header("Location: /EDUTASK_1/index.php");
exit();
