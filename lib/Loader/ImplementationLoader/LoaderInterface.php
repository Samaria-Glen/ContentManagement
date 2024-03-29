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

namespace Pimcore\Loader\ImplementationLoader;

/**
 * @internal
 */
interface LoaderInterface
{
    /**
     * Checks if implementation is supported
     *
     *
     */
    public function supports(string $name): bool;

    /**
     * Builds an implementation instance
     *
     *
     */
    public function build(string $name, array $params = []): mixed;
}
