<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employees extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('Employees_model','datamodel');     
    }
	   
	public function index()
	{
		$data['title']='List Of Employees';	
		$data['array_employees'] = $this->datamodel->get_employees();
													//parameter 1 nama file 'categories'
		$this->mytemplate->loadBackend('employees',$data);
	}
	
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

