<?php

namespace spec;

use player;
use TennisGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisGameSpec extends ObjectBehavior
{

    protected $player1;
    protected $player2;

    function let() {

        $this->player1 = new player(0,'Maria');
        $this->player1 = new player(0,'Pepe');
        $this->beConstructedWith($this->player1, $this->player2);

    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TennisGame::class);
    }

    function it_score_0_iguals(){

        $this->score()->shouldReturn('0 iguals');

    }

    function it_score_15_0(){
        $this->player1->winPoint();
        $this->score()->shouldReturn('15 - 0');
    }

    function it_score_15_15(){
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->score()->shouldReturn('15 iguals');
    }















}
