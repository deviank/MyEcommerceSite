<html>
<body>
<h2>We currently only deliver within a 1000km radius</h2>
<table border="0" cellpadding="3">
    <tr>
        <td bgcolor="#CCCCCC" align="center">Distance</td>
        <td bgcolor="#CCCCCC" align="center">Cost</td>
    </tr>
    <?php

    $distance = 50;
    while ($distance <= 1000) {
        echo "<tr>
        <td align=\"right\">".$distance."</td>
        <td align=\"right\">".($distance / 10)."</td>
        </tr>\n";

        $distance += 50;
    }

    ?>
</table>
</body>
</html>

