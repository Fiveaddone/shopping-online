<?php
session_start();
session_destroy();
echo "<script>alert('退出成功！');</script>";
echo "<script>window.location.href='../smarty/mainFace.php';</script>";
?>