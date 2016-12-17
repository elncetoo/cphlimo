<?php
require 'assets/inc/Database.class.php';
require 'assets/inc/Newsletter.class.php';

if (!empty($_POST)) {
    $email = $_POST['signup-email'];

    Newsletter::register($email);
}