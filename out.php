<?php

session_start();
session_destroy();
header("location:ui_login.php");