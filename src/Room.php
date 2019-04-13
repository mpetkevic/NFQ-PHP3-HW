<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-04-13
 * Time: 15:34
 */

namespace App\Room;

interface ReservableInterface
{
//    public function addReservation($reservation)
//    {
//
//    }
//
//    public function removeReservation($reservation)
//    {
//
//    }
}

class Room implements ReservableInterface
{
    /** @var int */
    private $bedCount;

    /** @var string */
    private $roomType;

    /** @var bool */
    private $balcony;

    /** @var array */
    private $extras;

    /** @var bool */
    private $restroom;

    /** @var int */
    private $price;

    /** @var array */
    private $reservations;

    /**
     * @return int
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    /**
     * @param int $bedCount
     */
    public function setBedCount(int $bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return string
     */
    public function getRoomType(): string
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType(string $roomType): void
    {
        $this->roomType = $roomType;
    }

    /**
     * @return bool
     */
    public function isBalcony(): bool
    {
        return $this->balcony;
    }

    /**
     * @param bool $balcony
     */
    public function setBalcony(bool $balcony): void
    {
        $this->balcony = $balcony;
    }

    /**
     * @return array
     */
    public function getExtras(): array
    {
        return $this->extras;
    }

    /**
     * @param array $extras
     */
    public function setExtras(array $extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return bool
     */
    public function isRestroom(): bool
    {
        return $this->restroom;
    }

    /**
     * @param bool $restroom
     */
    public function setRestroom(bool $restroom): void
    {
        $this->restroom = $restroom;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @param array $reservations
     */
    public function setReservations(array $reservations): void
    {
        $this->reservations = $reservations;
    }



}

class SingleRoom extends Room
{
    /** @var int */
    private $roomNumber;

    /** @var int */
    private $price;

    public function __construct(int $roomNumber, int $price)
    {
        $this->roomNumber = $roomNumber;
        $this->price = $price;
        $this->setBedCount(1);
        $this->setBalcony(false);
        $this->setRoomType('Single room');
        $this->setRestroom(true);
        $this->setPrice($this->price);
        $this->setExtras(array('Tv', 'Air-Conditioner'));
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }



}