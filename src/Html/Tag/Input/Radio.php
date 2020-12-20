<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Html\Tag\Input;

/**
 * Class Radio
 *
 * @package Phalcon\Html\Tag\Input
 *
 * @property string $type
 */
class Radio extends Checkbox
{
    /**
     * @var string
     */
    protected string $type = 'radio';
}
