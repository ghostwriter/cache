<?php

declare(strict_types=1);

namespace Ghostwriter\Cache\Exception;

use Ghostwriter\Cache\Interface\CacheExceptionInterface;
use LogicException;

final class ShouldNotHappenException extends LogicException implements CacheExceptionInterface {}
