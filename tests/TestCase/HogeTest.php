<?php
declare(strict_types=1);

namespace App\Test\TestCase;

use PHPUnit\Framework\TestCase;

final class HogeTest extends TestCase
{

    /**
     * @test
     */
    public function hoge(): void
    {
        $this->assertCount(3, [1, 2], 'なんかへんだよ！');

        $this->assertTrue(true);

        $this->assertInfinite('', '無限');
    }

    /**
     * @test
     */
    public function fuga(): void
    {
        $this->assertInstanceOf(\Error::class, new \stdClass());
    }
}
