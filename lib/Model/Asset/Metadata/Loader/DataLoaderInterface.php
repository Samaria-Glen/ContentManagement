<?php

declare(strict_types = 1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Model\Asset\Metadata\Loader;

use Pimcore\Loader\ImplementationLoader\LoaderInterface;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\DataDefinitionInterface;

interface DataLoaderInterface extends LoaderInterface
{
    /**
     * Builds a asset metadata data instance
     *
     *
     */
    public function build(string $name, array $params = []): DataDefinitionInterface;
}
