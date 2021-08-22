<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>

            <!-- <th>Year</th>
                <th>Value at<br>beginning</th>
                <th>Annual<br>Depreciation</th>
                <th>Accumulated<br>Depreciation</th>
                <th>Value at<br>end</th> -->
                <th>Akhir Tahun</th>
                <th>Tahun</th>
                <!-- <th>Nilai<br>Residu</th> -->
                <th>Nilai<br>Buku Akhir</th>
                <!-- <th>Nilai<br>Awal</th> -->
                <th>Penyusutan<br></th>
                <th>Akumulasi<br>Penyusutan</th>
                <th>Nilai<br>Akhir</th>
            </tr>
            <?php

            //Declaration of variables
            $harga = $_GET["harga"];
            $residu = $_GET["residu"];
            $tanggal = strtotime($_GET["tgl"]);
            $akumulasiPenyusutan = 0;

            //Calculations, Loops and Printing
            for ($tahun = 1; $tahun <= $tanggal; $tahun++) {
                $penyusutanPerthn = ($harga - $residu) / $tanggal;
                $akumulasiPenyusutan+=$penyusutanPerthn;
                $nilaiAwal=$harga-$akumulasiPenyusutan;
                $nilaiAkhir = $nilaiAwal - $penyusutanPerthn;
                if ($tahun % 2 == 0)
                    echo "<tr>
                    <td>$tanggal</td>
                    <td>$tahun</td>
                    <td>$nilaiAwal</td>
                    <td>$penyusutanPerthn</td>
                    <td>$akumulasiPenyusutan</td>
                    <td>$nilaiAkhir</td>
                    </tr>";
                else
                    echo "<tr style='background-color:lightgrey'>
                    <td>$tanggal</td>
                    <td>$tahun</td>
                    <td>$nilaiAwal</td>
                    <td>$penyusutanPerthn</td>
                    <td>$akumulasiPenyusutan</td>
                    <td>$nilaiAkhir</td>
                    </tr>";
            }
            ?>
        </table>
    </body>
</html>