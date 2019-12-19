<?php
$pictures = array('tire.png', 'oil.jpg', 'spark_plug.jpg',
    'door.jpg', 'steering_wheel.jpg',
    'thermostat.jpg', 'wiper_blade.jpg',
    'gasket.jpg', 'brake_pad.jpg');

$products = array(array('CAR_TIR', 'Tires', 100,
                        'CAR_OIL', 'Oil', 10,
                        'CAR_SPRK', 'Spark Plugs', 4,
                        ),
                   array('VAN_TIR', 'Tires', 100,
                         'VAN_OIL', 'Oil', 10,
                         'VAN_SPRK', 'Spark Plugs', 4,
                    ),
                   array('BIKE_TIR', 'Tires', 100,
                         'BIKE_OIL', 'Oil', 10,
                         'BIKE_SPRK', 'Spark Plugs', 4,
                    ),
                   array('TRUCK_TIR', 'Tires', 100,
                         'TRUCK_OIL', 'Oil', 10,
                         'TRUCK_SPRK', 'Spark Plugs', 4,
                    ),
                  );


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
</body>
</html>