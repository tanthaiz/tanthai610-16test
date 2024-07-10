<html>
 <head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-Test</title>
 </head>
 <body>
 <table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ห้อง</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>แทนไทน</td>";
            echo "<td>จันทรขจร</td>";
            echo "<td>6/10</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
 </body>
</html>