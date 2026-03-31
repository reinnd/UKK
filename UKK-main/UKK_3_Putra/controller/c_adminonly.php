<?php

if ($_SESSION['role'] !== 'admin') {
    die("ACCESS DENIED!");
}
?>