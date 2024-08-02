<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cors {
    public function allow() {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
    }
}
?>
