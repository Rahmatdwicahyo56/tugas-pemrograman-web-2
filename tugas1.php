<?php
function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
    }
    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

for ($i = 1; $i <= 19; $i++) {
    if ($i % 2 == 0) {
        $category = "genap";
        if (is_prime($i)) {
            $category .= " sekaligus bilangan prima";
        }
    } else {
        if (is_prime($i)) {
            $category = "ganjil sekaligus bilangan prima";
        } else {
            $category = "ganjil";
        }
    }
    echo "Angka $i adalah bilangan $category<br>";
}
?>