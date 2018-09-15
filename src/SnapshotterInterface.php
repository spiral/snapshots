<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Spiral\Snapshots;

interface SnapshotterInterface
{
    /**
     * Register exception and return snapshot instance to represent error.
     *
     * @param \Throwable $e
     * @return SnapshotInterface
     */
    public function register(\Throwable $e): SnapshotInterface;
}