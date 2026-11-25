<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassLike\AddVoidReturnTypeWhereNoReturnRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedCallRector;
use Rector\TypeDeclaration\Rector\Closure\AddClosureVoidReturnTypeWhereNoReturnRector;
use Rector\TypeDeclaration\Rector\Closure\ClosureReturnTypeRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/public',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    // uncomment to reach your current PHP version
    // ->withPhpSets()
    // ->withTypeCoverageLevel(4)
    ->withDeadCodeLevel(1)
    ->withCodeQualityLevel(1)
    ->withRules([
        AddClosureVoidReturnTypeWhereNoReturnRector::class,
        AddReturnTypeDeclarationRector::class,
        AddVoidReturnTypeWhereNoReturnRector::class,
        ClosureReturnTypeRector::class,
        ReturnTypeFromStrictTypedCallRector::class,
    ]);
