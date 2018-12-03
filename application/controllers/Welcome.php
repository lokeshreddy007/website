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
            
                $this->load->view('UserHeader');
                 $this->load->model('Dbmodel');
               $sliderdata=  $this->Dbmodel->displaySliders();
               $whatData=$this->Dbmodel->displayWhatWeDoList();
               $processData=$this->Dbmodel->displayProcessList();
               $projData=$this->Dbmodel->displayProjectsList();
               $data['whatWeDoList'] =$whatData;
               $data['sliderlist']=$sliderdata;
               $data['processlist']=$processData;
               $data['projectsList']=$projData;
		$this->load->view('welcome_message',$data);
                $this->load->view('UserFooter');
	}
	public function privacypolicy(){
	 $this->load->view('UserHeader');
	 $this->load->view('privacypolicy');
	  $this->load->view('UserFooter');
	
	}
}
