<!-- nilaimahasiswa.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 4px;
        }
    </style>
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h2>Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Total Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "nilai.php";

            // Data Mahasiswa
            $mhs1 = new nilai();
            $mhs1->settugas(90);
            $mhs1->setUts(78);
            $mhs1->setUas(95);

            $mhs2 = new nilai();
            $mhs2->settugas(90);
            $mhs2->setUts(80);
            $mhs2->setUas(89);

            $mhs3 = new nilai();
            $mhs3->settugas(90);
            $mhs3->setUts(70);
            $mhs3->setUas(98);

            // Menampilkan data Mahasiswa
            echo "<tr>
                <td>1</td>
                <td>Andi</td>
                <td>" . $mhs1->gettugas() . "</td>
                <td>" . $mhs1->getuts() . "</td>
                <td>" . $mhs1->getuas() . "</td>
                <td>" . $mhs1->getTotalnilai() . "</td>
            </tr>";

            echo "<tr>
                <td>2</td>
                <td>Joko</td>
                <td>" . $mhs2->gettugas() . "</td>
                <td>" . $mhs2->getuts() . "</td>
                <td>" . $mhs2->getuas() . "</td>
                <td>" . $mhs2->getTotalnilai() . "</td>
            </tr>";

            echo "<tr>
                <td>3</td>
                <td>April</td>
                <td>" . $mhs3->gettugas() . "</td>
                <td>" . $mhs3->getuts() . "</td>
                <td>" . $mhs3->getuas() . "</td>
                <td>" . $mhs3->getTotalnilai() . "</td>
            </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>
