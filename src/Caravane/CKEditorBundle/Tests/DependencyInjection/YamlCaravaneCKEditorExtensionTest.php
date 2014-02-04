<?php

/*
 * This file is part of the Caravane CKEditor package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Caravane\CKEditorBundle\Tests\DependencyInjection;

use Symfony\Component\Config\FileLocator,
    Symfony\Component\DependencyInjection\ContainerBuilder,
    Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Yaml Caravane CKEditor extension test.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class YamlCaravaneCKEditorExtensionTest extends AbstractCaravaneCKEditorExtensionTest
{
    /**
     * {@inheritdoc}
     */
    protected function loadConfiguration(ContainerBuilder $container, $configuration)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Fixtures/config/yaml/'));
        $loader->load($configuration.'.yml');
    }
}
