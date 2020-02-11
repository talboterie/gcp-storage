<?php

declare(strict_types=1);

namespace Talboterie\GoogleCloudStorage\Tests;

use PHPUnit\Framework\TestCase;
use Talboterie\GoogleCloudStorage\Skeleton;

class SkeletonTest extends TestCase
{
    /** @test */
    public function itReturnAPhrase(): void
    {
        $skeleton = new Skeleton;
        $string = 'Hello Talboterie';

        $this->assertEquals($string, $skeleton->echoPhrase($string));
    }
}
