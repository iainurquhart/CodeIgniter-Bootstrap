<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $title = 'CodeIgnited Bootstrap :: ';
	public $logged_in = FALSE;
	public $is_admin = FALSE;
	public $scripts = array();
	public $styles = array();
	public $show_toolbar = TRUE;
	public $active_top_nav = '';
	public $show_footer = TRUE;
	public $meta_description = 'Default Meta Data here.';
	public $body_class = 'page';

    function __construct()
    {
        parent::__construct();

        $this->load->library('ion_auth');
        if($this->ion_auth->logged_in()) $this->logged_in = TRUE;
        if($this->ion_auth->is_admin()) $this->is_admin = TRUE;
    }

    function _output($content)
    {
        // Load the base template with output content available as $content

        if(!$this->show_toolbar) $this->body_class .= ' no_toolbar';
        if(!$this->show_footer) $this->body_class .= ' no_footer';
        
        $data['content'] = &$content;
        echo($this->load->view('base', $data, true));
    }

}