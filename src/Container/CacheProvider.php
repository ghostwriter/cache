<?php

declare(strict_types=1);

namespace Ghostwriter\Cache\Container;


/**
 * @see CacheProviderTest
 */
final class CacheProvider extends AbstractProvider
{
    /**
     * [alias => service].
     *
     * @var array<class-string,class-string>
     */
    public const array ALIAS = [
    ];

    /**
     * [concrete => [abstract => implementation]].
     *
     * @var array<class-string,array<class-string,class-string>>
     */
    public const array BIND = [];

    /**
     * [service => [extension, ...]].
     *
     * @var array<class-string,list<class-string<ExtensionInterface>>>
     */
    public const array EXTEND = [];

    /**
     * [service => factory].
     *
     * @var array<class-string,class-string<FactoryInterface>>
     */
    public const array FACTORY = [];
}
