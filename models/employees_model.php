<?php
class Employees_model extends CI_Model {

    var $EmployeesName  = '';
    var $Description = '';
    

    function __construct()
    {        
        parent::__construct();
    }
    
    function get_employees()
    {
        $query = $this->db->get('employees');
        return $query->result();
    }

    function insert_entry()
    {
        $this->EmployeesName  = $this->input->post('nm_cat'); 
        $this->Description   = $this->input->post('deskripsi');         
        $this->db->insert('employees', $this);
    }

    function update_entry()
    {
        $this->EmployeesName  = $this->input->post('nm_cat'); 
        $this->Description   = $this->input->post('deskripsi'); 
        
        $this->db->update('employees', $this, array('EmployeeID' => $_POST['id']));
    }
}