<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		//--- valiables passed to views:
		
		//HEAD
		$header_vars['page_title'] = 'YouTube Api';
		$header_vars['head_css'] = '
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

		<link rel="stylesheet" href="css/custom.css">
		';
		
		
		//MAIN PAGE
		$main_vars['h1'] = 'YouTube Api';
		$main_vars['h5'] = 'Watch your favorite videos';
		$main_vars['searchyoutube'] = 'Search YouTube videos';
		$main_vars['maxResults'] = 10;
		
		
		//FOOTER
		$footer_vars['GOOGLE_API_KEY'] = 'AIzaSyDZBKclHQpYNX6lObQPChY7BHWh0j6aqUU';
		
		
		// --- end variables
		
		
				
		//call views
		$this->load->view('header',$header_vars);
		$this->load->view('index',$main_vars);
		$this->load->view('footer',$footer_vars);
		
	}
}
