<?php

declare(strict_types=1);

namespace cgpt\tests\module\cardgame\model;

use cgpt\module\cardgame\model\Card;
use cgpt\module\cardgame\model\CardList;

use PHPUnit\Framework\TestCase;

class CardListTest extends TestCase
{
    public function testAdd(): void
    {
        $card1 = new Card();
        $card2 = new Card();
        $card3 = new Card();

        $cardlist = new CardList();

        $cardlist->add($card1);
        $cardlist->add($card2);
        $cardlist->add($card3);

        $this->assertSame($card1, $cardlist->find(0));
        $this->assertSame($card2, $cardlist->find(1));
        $this->assertSame($card3, $cardlist->find(2));
    }
}
