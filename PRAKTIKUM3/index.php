<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <div class="fs-45">
        <?php 
        include "visibility.php";
        $visibility = new visibility ();
        $visibility->tampilkandata();

        echo "<br>";
        echo "akses di luar kelas <br>";
        echo "public:" . $visibility->public . '<br>';
        //echo "private" . $visibilty->private . '<br>';
        //echo "protected" . $visibility->protected . '<br>';
        echo "<br> <br>";
        echo "<h2>konsep pewarian </h2>";

        include "mahasiswa.php";

        $mahasiswa = new mahasiswa("adhitya");
        $mahasiswa-> ucapkansalam();


        $mahasiswainggris = new mahasiswaasing("andi");
        $mahasiswainggris->ucapkansalam(); 
    ?>
    </div>
</body>
</html>