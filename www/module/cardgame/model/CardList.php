<?php

declare(strict_types=1);

namespace cgpt\module\cardgame\model;

use cgpt\module\cardgame\model\Card;

/**
 * Typesafe version of a Card array.
 */
class CardList
{
    public function add(Card $card): void
    {
        // TODO:
        throw new \Exception('Not implemented');
    }

    public function find(int $index): ?Card
    {
        // TODO:
        throw new \Exception('Not implemented');
    }

    public function get(int $index): Card
    {
        // TODO:
        throw new \Exception('Not implemented');
    }
}
