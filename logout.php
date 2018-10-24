<?php
session_start();
session_destroy();
header('Location: ..\agri\alert.html');
exit;
?>