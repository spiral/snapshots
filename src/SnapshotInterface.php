<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Spiral\Snapshots;

interface SnapshotInterface
{
    /**
     * Get unique exception id.
     *
     * @return string
     */
    public function getID(): string;

    /**
     * Associated exception.
     *
     * @return \Throwable
     */
    public function getException(): \Throwable;

    /**
     * Formatted exception message.
     *
     * @return string
     */
    public function getMessage(): string;

    /**
     * Get exception description in simple array form (must be
     * json friendly).
     *
     * @return array
     */
    public function describe(): array;
}