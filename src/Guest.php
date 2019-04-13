<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-04-13
 * Time: 16:33
 */

namespace App\Guest;


class Guest
{
    /** @var string */
    private $name;

    /** @var string */
    private $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }




}