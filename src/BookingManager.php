<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-04-13
 * Time: 16:46
 */

namespace App\Room;


class BookingManager
{

    public static function bookRoom($room,$reservation)
    {

//        $a = new Room();
//        $a->setReservations($reservation,$room);
//        var_dump($reservation->getStartDate()->getDate());
//        die;
//
        echo 'Room <strong>' . $room->getRoomNumber() . '</strong> succesfully booked for <strong>'. $reservation->getGuest()->getName(). ' ' . $reservation->getGuest()->getSurname(). '</strong> from <time>'. $reservation->getStartDate()->getDate().'</time> to <time>' . $reservation->getEndDate()->getDate() . ' </time>!';
    }
}