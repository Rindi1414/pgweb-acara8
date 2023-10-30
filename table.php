<!DOCTYPE html>
<html>
<head>
    <title>Tabel Example</title>
</head>
    <head border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Longitude</th>
            <th>Latitude</th>
        </tr>
    </head>
    <body>
        <?php
        // Data untuk tabel
        $data = array(
            array(1,"A", 110.1, -7.1),
            array(2,"B", 110.2, -7.2),

        );
        //Loop melalui data untuk mengisi tabel
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>