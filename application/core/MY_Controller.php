<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//define('ACTIVE_SITE', 'default_new');

class MY_controller extends CI_Controller{
    
    public function __construct(){
         parent::__construct();
         //Codeigniter : Write Less Do More
         //    //Seccion seguridad  
         
         if (!isset($_SESSION['login'])){ 
             redirect(base_url('login'), 'refresh');
             exit(0);
             }
             
             function index(){
                 
                 
             }             
    }             
}