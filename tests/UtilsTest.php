<?php
require('./utils.php');
use PHPUnit\Framework\TestCase;
class UtilsTest extends TestCase {
   
    public function testGeneratedNumberIsGreaterThanEqualMin(){
        $secureRandom = new Utils();
        $result = $secureRandom->getSecureRandom(10,14);
       // $result = randresult > min
        $this->assertGreaterThanOrEqual(10,$result);
    }

    public function testGeneratedNumberIsLessThanMax(){
        // check wether the intered security issue is strong  or not 
        $secureRandom = new Utils();
        $result = $secureRandom->getSecureRandom(10,14);
        $this->assertLessThanOrEqual(14,$result);

    }

   
    public function testStrongRandomNumber(){
        // check wether the intered security issue is strong  or not
        $secureRandom = new Utils();
        $result = $secureRandom->getSecureRandom(10,140);
        $this->assertIsInt($result);

    }
}