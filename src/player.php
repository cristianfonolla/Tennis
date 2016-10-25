<?php

/**
 * Created by PhpStorm.
 * User: cristian
 * Date: 25/10/16
 * Time: 16:40
 */
class player
{

    protected $code = [

        0 => "0",
        1 => "15",
        2 => "30",
        3 => "40"

    ];


    protected $score;

    protected $name;

    public function __construct($score,$name)
    {
        $this->score = $score;
        $this->name = $name;
    }

    public function winPoint()
    {

        $this->score+=1;

    }

    public function score()
    {
        return $this->code[$this->score];
    }


}