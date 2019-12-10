<?php
$pictures = array('tire.png', 'oil.jpg', 'spark_plug.jpg',
    'door.jpg', 'steering_wheel.jpg',
    'thermostat.jpg', 'wiper_blade.jpg',
    'gasket.jpg', 'brake_pad.jpg');

shuffle($pictures);
?>
<html>
<head>
    <title>Devian's E Retailers</title>
</head>
<body>

<h1>Devian's Auto Parts</h1>
<div align="center">
    <table width = 100%>
        <tr>

            <?php
            foreach ($pictures as $picture) {
                echo "<td align=\"center\"><img src=\"http://localhost/MyEcommerceSite/images/";
                echo $picture;
                echo "\"/></td>";
                ;
            }
            ?>
        </tr>
    </table>
</div>

<?php
$products = array(array('Code' => 'TIR',
                        'Description' => 'Tires',
                        'Price' => 100),
                  array('Code' => 'OIL',
                        'Description' => 'Oil',
                        'Price' => 10),
                  array('Code' => 'SPK',
                        'Description' => 'Spark Plugs',
                        'Price' => 4));
?>
</body>
</html>