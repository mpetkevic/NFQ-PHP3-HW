<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-04-13
 * Time: 16:36
 */

namespace App\Room;


class DateTime
{
    /** @var string */
    private $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }


}