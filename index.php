<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-04-13
 * Time: 15:15
 */

require __DIR__ . '/vendor/autoload.php';

$room = new \App\Room\SingleRoom(1408, 99);
$guest = new \App\Guest\Guest('Vardenis', 'Pavardenis');
$startDate = new \App\Room\DateTime('2019-04-20');
$endDate = new \App\Room\DateTime('2019-04-25');
$reservation = new \App\Room\Reservation($startDate, $endDate, $guest);
\App\Room\BookingManager::bookRoom($room, $reservation);




