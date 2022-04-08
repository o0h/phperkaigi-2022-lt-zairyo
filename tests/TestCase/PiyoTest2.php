<?php
declare(strict_types=1);

namespace App\Test\TestCase;

use App\Piyo;
use PHPUnit\Framework\TestCase;

final class PiyoTest2 extends TestCase
{

    /**
     * @test
     */
    public function testThanks(): void
    {
        $this->assertCount(3, [1, 2], 'なんかへんだよ！');

        $this->assertTrue(true);

        $this->assertInfinite('', '無限');
    }
}
