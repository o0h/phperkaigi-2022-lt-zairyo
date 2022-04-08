<?php
declare(strict_types=1);

namespace App\Test\TestCase;

use App\Piyo;
use PHPUnit\Framework\TestCase;

final class PiyoTest extends TestCase
{

    /**
     * @test
     */
    public function testThanks(): void
    {
        $subject = new Piyo();

        $actual = $subject->thanks('hello');

        $expected = 'Gommen,minna';
        $this->assertSame($expected, $actual, '対象に感謝出来ていない');
    }
}
