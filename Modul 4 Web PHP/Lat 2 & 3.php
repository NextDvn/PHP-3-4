<?php
    function luas_lingkaran ($jari) {
        return 3.14 * $jari * $jari;
    }
    //pemanggilan fungsi

    $r = 10;
    echo "Luas lingkaran dengan jari-jari $r = ";
    echo luas_lingkaran($r);
?>

<?php
    function head() {
        echo '
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/font-awesome.css"> ';
    }
    //pemanggilan fungsi

    echo luas_lingkaran($r);
?>