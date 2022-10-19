<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Mvc\Model\MetaData\Strategy;

use Phalcon\Mvc\ModelInterface;
use Phalcon\Di\DiInterface;

interface StrategyInterface
{
    /**
     * Read the model's column map, this can't be inferred
     *
     * @todo Not implemented
     *
     * @param ModelInterface $model
     * @param DiInterface    $container
     *
     * @return array
     */
    public function getColumnMaps(
        ModelInterface $model,
        DiInterface $container
    ): array;

    /**
     * The meta-data is obtained by reading the column descriptions from the
     * database information schema
     *
     * @param ModelInterface $model
     * @param DiInterface    $container
     *
     * @return array
     */
    public function getMetaData(
        ModelInterface $model,
        DiInterface $container
    ): array;
}
