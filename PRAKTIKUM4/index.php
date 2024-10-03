<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum 4</title>
</head>
<body>
    <h1>konsep pewarisan</h1>
    <div class="">
        <?php 
        require_once "orangbiasa.php";
        require_once "oranginggris.php";
        require_once "mahasiswa.php";

        $adhitya = new orangbiasa();
        $adhitya->setnama("adhitya apriliandi");
        $adhitya->ucapsalam();

        echo "<br>";

        $andi = new oranginggris();
        $andi->setnama("andi pranata");
        $andi->ucapsalam();

        echo "<br>";

        $mahasiswa = new mahasiswa ();
        $mahasiswa->setnama('adhitya apriliandi');
        $mahasiswa->setNim("701230023");

        $nilaimahasiswa = new nilai ();
        $nilaimahasiswa->settugas(80);
        $nilaimahasiswa->setuts(85);
        $nilaimahasiswa->setuas(79);

        $mahasiswa->setNilai($nilaimahasiswa);

        $mahasiswa->ucapsalam();
        $mahasiswa->tampilkandata();

        ?>

    </div>
</body>
</html>