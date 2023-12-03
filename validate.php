<?php

function validateLogin($username, $password) {
    // Gantilah logika validasi sesuai kebutuhan
    $validUsername = "admin";
    $validPassword = "admin";

    if ($username === $validUsername && $password === $validPassword) {
        return true;
    } else {
        return false;
    }
}
?>
