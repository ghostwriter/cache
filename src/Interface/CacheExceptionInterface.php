<?php

declare(strict_types=1);

namespace Ghostwriter\Cache\Interface;

use Psr\Cache\CacheException as PsrCacheException;
use Psr\SimpleCache\CacheException as PsrSimpleCacheException;
use Throwable;

interface CacheExceptionInterface extends PsrCacheException, PsrSimpleCacheException, Throwable {}
