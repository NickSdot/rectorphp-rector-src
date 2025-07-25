<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\FuncCall\SortNamedParamRector;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withRules([SortNamedParamRector::class]);
