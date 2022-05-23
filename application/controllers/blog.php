<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	 function index()
	{
		
       $this->load->view('blog/index' );
	   
	  

	}
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('email');
        $this->load->model('adminmodel');
        $this->load->model('adminmodel','m');
       
    }
	public function dathang()
    {
        $this->load->view('blog/index');
        
    }
    public function getdathang()
    {
		// var_dump('firstname');die
			// var_dump($this->input->get());die;
			if(!count($this->input->post())){
			$data['id'] = $this->m->getdathang();
			$this->load->view('blog/full',$data);
			return;
		}
        $firstname = $this->input->post('firstname');    /// nạp dữ liệu
        $lastname = $this->input->POST('lastname');
        $phone = $this->input->POST('phone');
        $email = $this->input->POST('email');
        $diachi = $this->input->POST('diachi');
        $noidung = $this->input->POST('noidung');
        $checkemail =$this->adminmodel->checkemail($email);


        if(!$checkemail ){
            $this->load->model('adminmodel');
            $this->adminmodel->insertMember($firstname, $lastname, $phone,$email, $diachi,$noidung);
            
			
        }
        else {
            echo 'Trùng email';
			$data['id'] = $this->m->getdathang();
        // print_r($data);
        // redirect(base_url('blog/getdathang'));
		$this->load->view('blog/full',$data);
		
        }
		
    }
    function email($email) {
        $this->adminmodel->checkemail($email);
      }
	  public function add(){
        $this->load->view('blog/add');
    }
    public function submit(){
        $result = $this->m->submit();
        if($result){
            $this->session->set_flashdata('success','Đặt Hàng Thành Công');
            
        }
        else{
            $this->session->set_flashdata('error', 'Đặt Hàng Thất Bại');
        }
        redirect(base_url('blog/getdathang'));
    }
    public function edit($id){
        $data ['blog'] = $this->m->getedit($id);
        $this->load->view('blog/edit', $data);
    }
    public function Update(){
        $result = $this->m->Update();
        if($result){
            $this->session->set_flashdata('success','Update Thành Công');
        }
        else{
            $this->session->set_flashdata('error', 'Update Thất Bại');
        }
        redirect(base_url('blog/getdathang'));
		
    }
    public function delete($id){
        $result = $this->m->delete($id);
        if($result){
            $this->session->set_flashdata('success','Delete Thành Công');
        }
        else{
            $this->session->set_flashdata('error', 'Update Thất Bại');
        }
        redirect(base_url('blog/getdathang'));
    }
    
}
