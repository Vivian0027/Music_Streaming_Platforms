<?php

$baseUrl = 'http://' . $_SERVER['HTTP_HOST'];
header('Location: ' . $baseUrl . '/app/views/home.html');
exit;

