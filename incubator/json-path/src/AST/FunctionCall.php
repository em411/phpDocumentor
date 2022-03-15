<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link https://phpdoc.org
 */

namespace phpDocumentor\JsonPath\AST;

use phpDocumentor\JsonPath\Executor;

final class FunctionCall implements QueryNode
{
    private string $name;

    /** @var QueryNode[] */
    private array $arguments;

    public function __construct(string $name, QueryNode ...$arguments)
    {
        $this->name = $name;
        $this->arguments = $arguments;
    }

    /** @inheritDoc */
    public function visit(Executor $param, $currentObject, $root)
    {
        return $param->evaluateFunctionCall($root, $currentObject, $this->name, ...$this->arguments);
    }
}
