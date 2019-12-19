<?php
$pictures = array('tire.png', 'oil.jpg', 'spark_plug.jpg',
    'door.jpg', 'steering_wheel.jpg',
    'thermostat.jpg', 'wiper_blade.jpg',
    'gasket.jpg', 'brake_pad.jpg');

$categories = array(array(array('CAR_TIR', 'Tires', 100),
                          array('CAR_OIL', 'Oil', 10),
                          array('CAR_SPRK', 'Spark Plugs', 4)
                        ),
                    array(array('VAN_TIR', 'Tires', 100),
                          array( 'VAN_OIL', 'Oil', 10),
                          array('VAN_SPRK', 'Spark Plugs', 4),
                    ),
                    array(array('BIKE_TIR', 'Tires', 100),
                          array('BIKE_OIL', 'Oil', 10),
                          array('BIKE_SPRK', 'Spark Plugs', 4)
                    ),
                    array(array('TRUCK_TIR', 'Tires', 100),
                          array('TRUCK_OIL', 'Oil', 10),
                          array('TRUCK_SPRK', 'Spark Plugs', 4)
                    ),
                  );

for($layer = 0; $layer < 4; $layer++){
    echo "Layer $layer<br />";
    for($row = 0; $row < 3; $row++){
        for($column = 0; $column < 3; $column++){
            echo '|' . $categories[$layer][$row][$column];
        }
        echo '<br />';
    }
}

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