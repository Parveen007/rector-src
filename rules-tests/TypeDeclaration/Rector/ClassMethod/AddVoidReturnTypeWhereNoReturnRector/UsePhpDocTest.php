<?php

declare(strict_types=1);

namespace Rector\Tests\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class UsePhpDocTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/FixtureUsePhpDoc');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/phpdoc_void.php';
    }
}
