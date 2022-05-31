<?php
session_start();

// destroy the session
session_destroy();
header('Location: /PHPRevise2022/13_sessions.php');
