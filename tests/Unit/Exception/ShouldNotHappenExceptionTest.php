<?php

declare(strict_types=1);

namespace Tests\Unit\Exception;

use Exception;
use Ghostwriter\Cache\Exception\ShouldNotHappenException;
use Ghostwriter\Cache\Interface\CacheExceptionInterface;
use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use LogicException;
use PHPUnit\Framework\Attributes\CoversClass;
use Psr\Cache\CacheException;
use Stringable;
use Tests\Unit\AbstractTestCase;
use Throwable;

#[CoversClass(ShouldNotHappenException::class)]
final class ShouldNotHappenExceptionTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testExtendsException(): void
    {
        self::assertClassExtendsClass(ShouldNotHappenException::class, Exception::class);
    }

    /** @throws Throwable */
    public function testExtendsLogicException(): void
    {
        self::assertClassExtendsClass(ShouldNotHappenException::class, LogicException::class);
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterCacheInterfaceCacheExceptionInterface(): void
    {
        self::assertClassImplementsInterface(ShouldNotHappenException::class, CacheExceptionInterface::class);
    }

    /** @throws Throwable */
    public function testImplementsPsrCacheCacheException(): void
    {
        self::assertClassImplementsInterface(ShouldNotHappenException::class, CacheException::class);
    }

    /** @throws Throwable */
    public function testImplementsPsrSimpleCacheCacheException(): void
    {
        self::assertClassImplementsInterface(ShouldNotHappenException::class, \Psr\SimpleCache\CacheException::class);
    }

    /** @throws Throwable */
    public function testImplementsStringable(): void
    {
        self::assertClassImplementsInterface(ShouldNotHappenException::class, Stringable::class);
    }

    /** @throws Throwable */
    public function testImplementsThrowable(): void
    {
        self::assertClassImplementsInterface(ShouldNotHappenException::class, Throwable::class);
    }
}
