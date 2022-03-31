<?php
declare(strict_types=1);

namespace App;

class Piyo
{
    public function thanks(string $to = 'phperkaigi'): string
    {
        return 'Arigato for' . $to;
    }

}