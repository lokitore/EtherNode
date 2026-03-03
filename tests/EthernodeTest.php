<?php
/**
 * Tests for EtherNode
 */

use PHPUnit\Framework\TestCase;
use Ethernode\Ethernode;

class EthernodeTest extends TestCase {
    private Ethernode $instance;

    protected function setUp(): void {
        $this->instance = new Ethernode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ethernode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
