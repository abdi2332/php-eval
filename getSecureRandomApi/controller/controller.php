<?php
require('./models/utils.php');
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  

class APIController {
    public $max;
    public $min;
    public $util;
    
   
    public function getSecureRandomData(){
        // Takes raw data from postman request
        $json = file_get_contents('php://input');

        // Converts it into a PHP object
        $data = json_decode($json);     
        
       //create instances of util class
        $this->util = new Utils();
       
        return $this->util->getSecureRandom($data->min,$data->max);
        
        
    }
}

?>