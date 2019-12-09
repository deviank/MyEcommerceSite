<?php
$pictures = array('tire.png', 'oil.jpg', 'spark_plug.jpg',
    'door.jpg', 'steering_wheel.jpg',
    'thermostat.jpg', 'wiper_blade.jpg',
    'gasket.jpg', 'brake_pad.jpg');

shuffle($pictures);
?>
<html>
<head>
    <title>Devian's Auto Parts</title>
</head>
<body>

<h1>Devian's Auto Parts</h1>
<div align="center">
    <table width = 100%>
        <tr>

            <?php
            for ($i = 0; $i < 6; $i++) {
                echo "<td align=\"center\"><img src=\"";
                echo $pictures[$i];
                echo "\"/></td>";
            }
            ?>
        </tr>
    </table>
</div>
</body>
</html>
