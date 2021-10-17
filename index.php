<?php
    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Truck.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO 1 - Cars</title>
</head>
<body>
    <?php

    $bicycle = new Bicycle('red', 1, 2);
    echo $bicycle->forward();
    var_dump($bicycle);

    $car = new Car('green', 4, 'electric');
    echo $car->forward();
    var_dump($car);

    $truck = new Truck(100, 'red', 2, 'electric');
    echo $truck->forward();
    echo $truck->setLoading(0);
    echo '<p>My truck is <span style="color:' . $truck->getColor() . ';"><strong>' . $truck->getColor() . '</strong></span>, has <strong>' . $truck->getNbSeats() . '</strong> seats and uses <strong>' . $truck->getEnergy() . '</strong> as energy. Its storage capacity is <strong>' . $truck->getStorage() . 'L</strong> and my truck\'s energy<strong>' . $truck->filledOrNot() . ' (' . $truck->getLoading() . '/' . $truck->getLoadingMax() . ')</strong>.';

    $truckOfMum = new Truck(30, 'purple', 2, 'electric');
    echo $truckOfMum->setLoading(450);
    echo '<p>My dad\'s truck is <span style="color:' . $truckOfMum->getColor() . ';"><strong>' . $truckOfMum->getColor() . '</strong></span>, has <strong>' . $truckOfMum->getNbSeats() . '</strong> seats and uses <strong>' . $truckOfMum->getEnergy() . '</strong> as energy. Its storage capacity is <strong>' . $truckOfMum->getStorage() . 'L</strong> and its energy<strong>' . $truckOfMum->filledOrNot() . ' (' . $truckOfMum->getLoading() . '/' . $truckOfMum->getLoadingMax() . ')</strong>.';

    $truckOfDad = new Truck(50, 'blue', 2, 'fuel');
    echo $truckOfDad->setLoading(1000);
    echo '<p>My dad\'s truck is <span style="color:' . $truckOfDad->getColor() . ';"><strong>' . $truckOfDad->getColor() . '</strong></span>, has <strong>' . $truckOfDad->getNbSeats() . '</strong> seats and uses <strong>' . $truckOfDad->getEnergy() . '</strong> as energy. Its storage capacity is <strong>' . $truckOfDad->getStorage() . 'L</strong> and its energy<strong>' . $truckOfDad->filledOrNot() . ' (' . $truckOfDad->getLoading() . '/' . $truckOfDad->getLoadingMax() . ')</strong>.';

    ?>
</body>
</html>
