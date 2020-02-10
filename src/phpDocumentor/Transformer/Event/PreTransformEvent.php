<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 */

namespace phpDocumentor\Transformer\Event;

use phpDocumentor\Descriptor\ProjectDescriptor;
use phpDocumentor\Event\EventAbstract;

/**
 * Event that happens prior to the execution of all transformations.
 */
final class PreTransformEvent extends EventAbstract
{
    /** @var ProjectDescriptor|null */
    private $project;

    /**
     * Creates a new instance of a derived object and return that.
     *
     * Used as convenience method for fluent interfaces.
     */
    public static function createInstance(object $subject) : EventAbstract
    {
        return new static($subject);
    }

    /**
     * Returns the descriptor describing the project.
     */
    public function getProject() : ?ProjectDescriptor
    {
        return $this->project;
    }

    /**
     * Returns the descriptor describing the project.
     *
     * @return $this
     */
    public function setProject(ProjectDescriptor $project)
    {
        $this->project = $project;

        return $this;
    }
}
