<?php
session_start();
session_destroy();
echo '<script> window.location = "ingreso"</script>';
#header("location:ingreso");
