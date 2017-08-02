<?php
class test extends CI_Controller {
    
    public function index() {
        $this->load->view('test');
        echo "Hello World!";
    }
    
    public function hello() {
        echo "This is hello function.";
    } 
}
?>