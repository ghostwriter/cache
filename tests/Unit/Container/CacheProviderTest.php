<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Ghostwriter\Cache\Container\CacheProvider;
use Ghostwriter\Container\Interface\Service\ProviderInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;
use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;
use Throwable;

#[CoversClass(CacheProvider::class)]
final class CacheProviderTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testExtendsGhostwriterContainerServiceProviderAbstractProvider(): void
    {
        self::assertClassExtendsClass(CacheProvider::class, AbstractProvider::class);
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterContainerInterfaceServiceProviderInterface(): void
    {
        self::assertClassImplementsInterface(CacheProvider::class, ProviderInterface::class);
    }
}
