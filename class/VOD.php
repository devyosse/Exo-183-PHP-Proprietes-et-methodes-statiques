<?php

class VOD
{
    public  $film = ["World War Z", "Terminator Renaissance", "Rocky", "Le Fondateur", "Avatar"];
    public int $rate = 7;
    private static int $subscribers = 1;

    /**
     * @return string[]
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * @param string[] $film
     */
    public function setFilm($film)
    {
        $this->film = $film;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return int
     */
    public function getSubscribers()
    {
        return self::$subscribers;
    }

    /**
     * @param int $subscribers
     */

    public function setSubscribers(int $subscribers)
    {
        return self::$subscribers = $subscribers;
    }

    public static function addSub() {
        return self::$subscribers;
    }
}


