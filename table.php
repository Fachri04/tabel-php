<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nilai</th>
            <th>Perkalian</th>
        </tr>
        <?php
            $hasil = 0;
            for($i = 0;$i <= 10; $i+=2){
                if($hasil <= 100){
                    $hasil = $i * $i;
                    echo "<tr>";
                    echo "<td>".$i."x".$i."</td>";
                    echo "<td>$hasil</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>