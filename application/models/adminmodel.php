<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class adminmodel extends CI_Model{
    public $variable;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        // $this->db->select('*');
    }


    public function insertMember($firstname, $lastname, $phone,$email, $diachi,$noidung)
    {
        $object = array('firstname'=>$firstname, 'lastname'=>$lastname, 'phone'=>$phone, 'email'=>$email, 'diachi'=>$diachi, 'noidung'=>$noidung);
        $this->db->insert('users', $object);
        echo 'Đặt hàng thành công';       
        $data['id'] = $this->m->getdathang();
        // print_r($data);
        $this->load->view('blog/full',$data);
      
    }

 
    
    public function checkemail($email)
    {
        $this->db->where('email',$email);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
            return true;
        }
        else{ 
            return false;
        } 
    }     
    public function getdathang()
    {
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
            return $query->result();
    } 
    else {
        return false;
    }
    }
    public function submit(){
        $field = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this -> input ->post('lastname'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'diachi' => $this->input->post('diachi'),
            'noidung' => $this->input->post('noidung'),
        );
        $this->db->insert('users', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        }
        else{
            return false;
        }
        }

        public function getedit($id){
            $this->db->where('id', $id);
            $query = $this->db->get('users');
            if ($query->num_rows() > 0){
                return $query->row();
            }
            else{
                return false;
            }
        }
        public function Update(){
            $id = $this->input->post('hidden_edit');
            $field = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this -> input ->post('lastname'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'diachi' => $this->input->post('diachi'),
                'noidung' => $this->input->post('noidung'),
            );
            $this->db->where('id', $id);
            $this->db->Update('users', $field);
            if($this->db-> affected_rows() > 0){
            return true;

            }
            else {
            return false;
        }
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('users');
        if ($this->db->affected_rows() > 0){
            return true;
        }
        
    
    else {
        return false;
    }
    }

}
