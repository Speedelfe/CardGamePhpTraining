<?php

declare(strict_types=1);

namespace cgpt\module\maumau\handler;

use cgpt\general\Handler;

class AboutHandler implements Handler
{
    public function handle()
    {
        echo "About!";
    }
}
