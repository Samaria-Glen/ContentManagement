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
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Model\Document\Tag\Loader;

use Pimcore\Model\Document\Editable\Loader\PrefixLoader as EditablePrefixLoader;

@trigger_error(sprintf('Class "%s" is deprecated since v6.8 and will be removed in Pimcore 10. Use "%s" instead.', PrefixLoader::class, EditablePrefixLoader::class), E_USER_DEPRECATED);

class_exists(EditablePrefixLoader::class);

if (false) {
    /**
     * @deprecated use \Pimcore\Model\Document\Editable\Loader\PrefixLoader instead.
     */
    class PrefixLoader extends EditablePrefixLoader
    {
    }
}