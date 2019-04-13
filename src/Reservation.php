<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-04-13
 * Time: 16:39
 */

namespace App\Room;


use App\Guest\Guest;

class Reservation
{
    /** @var DateTime */
    private $startDate;

    /** @var DateTime */
    private $endDate;

    /** @var Guest */
    private $guest;


    public function __construct($startDate,$endDate,$guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }


    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }


    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }



}