<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */
declare(strict_types=1);

namespace Spiral\Snapshots\Tests;

use PHPUnit\Framework\TestCase;
use Spiral\Snapshots\Snapshot;

class SnapshotTest extends TestCase
{
    public function testSnapshot()
    {
        $e = new \Error("message");
        $s = new Snapshot("id", $e);

        $this->assertSame("id", $s->getID());
        $this->assertSame($e, $s->getException());

        $this->assertContains("Error", $s->getMessage());
        $this->assertContains("message", $s->getMessage());
        $this->assertContains(__FILE__, $s->getMessage());
        $this->assertContains("19", $s->getMessage());

        $description = $s->describe();
        $this->assertContains("Error", $description['error']);
        $this->assertContains("message", $description['error']);
        $this->assertContains(__FILE__, $description['error']);
        $this->assertContains("19", $description['error']);

        $this->assertSame(__FILE__, $description['location']['file']);
        $this->assertSame(19, $description['location']['line']);
    }
}
