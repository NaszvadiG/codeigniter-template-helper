<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of pagina
 *
 * @author Barbieri
 */
class Sample extends CI_Controller {

    public function __construct() {
        parent::__construct();
        init_template();
    }

    public function index() {
        set_parameter('name', 'CodeIgniter');
        set_parameter('title', 'Home');
        set_parameter('message', 'Simple template helper CodeIgniter');
        load_page('home');
    }
 

}
