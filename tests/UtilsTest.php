<?php
require('./utils.php');

use PHPUnit\Framework\TestCase;
use General\Utils;

class UtilsTest extends TestCase {

    public function testGeneratedNumberIsGreaterThanEqualMin() {
        $result = Utils::getSecureRandom(10, 14);
        $this->assertGreaterThanOrEqual(10, $result);
    }

    public function testGeneratedNumberIsLessThanOrEqualMax() {
        $result = Utils::getSecureRandom(10, 14);
        $this->assertLessThanOrEqual(14, $result);
    }

    public function testGeneratedNumberIsInteger() {
        $result = Utils::getSecureRandom(10, 140);
        $this->assertIsInt($result);
    }

    public function testRandomness() {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = Utils::getSecureRandom(10, 140);
        }
        $uniqueResults = array_unique($results);
        $this->assertGreaterThan(1, count($uniqueResults), "Random function returned too few unique results.");
    }
}
