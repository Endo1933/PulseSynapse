<?php
/**
 * Tests for PulseSynapse
 */

use PHPUnit\Framework\TestCase;
use Pulsesynapse\Pulsesynapse;

class PulsesynapseTest extends TestCase {
    private Pulsesynapse $instance;

    protected function setUp(): void {
        $this->instance = new Pulsesynapse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pulsesynapse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
