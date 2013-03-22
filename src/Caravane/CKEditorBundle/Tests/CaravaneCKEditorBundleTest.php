<?php

/*
 * This file is part of the Caravane CKEditor package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Caravane\CKEditorBundle\Tests;

use Caravane\CKEditorBundle\CaravaneCKEditorBundle;

/**
 * Caravane CKEditor bundle test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class CaravaneCKEditorBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testBundle()
    {
        $bundle = new CaravaneCKEditorBundle();

        $this->assertInstanceOf('Symfony\Component\HttpKernel\Bundle\Bundle', $bundle);
    }
}
