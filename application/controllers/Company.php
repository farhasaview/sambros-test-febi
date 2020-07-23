<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller {
  public function __construct() {
	parent::__construct();
        $this->load->model('ModelCompany');
  	}

	public function index()

	{
		$data['content']='Company/template/wilujeung';
		$this->load->view('Company/template/body', $data);
	}

  public function allCompany() {
    $data['all']=$this->ModelCompany->allCompany();
    $data['content']='company/company/list';
    $this->load->view('company/template/body', $data);
  }

  public function addCompany() {
    $company_id = "cmpy".uniqid();
    $name = $this->input->post('name');
    $phone = $this->input->post('phone');
    $address = $this->input->post('address');
    $logo = $this->uploadkeun("logo", "images", date("d-m-Y")."lg".time());
    $status = 1;
    
    $data = [
        'company_id' => $company_id,
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'logo' => $logo,
        'status' => $status
      ];
    if (!empty($_POST)) {
      $this->ModelCompany->insertData("company_tbl", $data);
      $this->session->set_flashdata('pangbeja', '<div class="alert alert-success alert-dismissible">
                                  Added Company Successfully
                                  </div>');
      redirect(base_url('Company/allCompany'));
    }
    if(empty($_POST)){
      $data['title'] = "Add Company";
      $data['content']='Company/company/form_add';
      $this->load->view('Company/template/body', $data);
    }

  }

  public function deleteCompany($id) {
    $d = $this->ModelCompany->deleteData("company_tbl", "status", "company_id", $id);
    $this->session->set_flashdata('pangbeja', '<div class="alert alert-info alert-dismissible">
                                  Deleted Company Successfully
                                  </div>');
    redirect(base_url('Company/allCompany'));
  }

  public function editCompany($id) {
    $data['company'] = $this->ModelCompany->findData("company_tbl", "company_id", $id);
    $data['title'] = "Edit Company";
    $data['content']='Company/company/form_edit';
    $this->load->view('Company/template/body', $data);
  }

  public function aksiEditCompany($id) {
    $name = $this->input->post('name');
    $phone = $this->input->post('phone');
    $address = $this->input->post('address');
    $logo = $this->uploadkeun("logo", "images", date("d-m-Y")."lg".time());
    $status = 1;

    if(trim($logo) == ""){
      $data = [
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'status' => $status
      ];
    }else{
      $data = [
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'logo' => $logo,
        'status' => $status
      ];
    }
      $this->ModelCompany->updateData("company_tbl", $data, "company_id", $id);
      $this->session->set_flashdata('pangbeja', '<div class="alert alert-success alert-dismissible">
                                  Updated Company Successfully
                                  </div>');
    redirect(base_url('Company/allCompany'));
  }

  public function uploadkeun($fileApa, $folder, $ngaranFileDirobahJadi) {
    $config['upload_path'] = './penyimpanan_file/' . $folder . '/';
    $config['allowed_types'] = 'jpg|jpeg|png|pdf';
    $config['max_size'] = '10024'; //10 MB
    $new_name = $ngaranFileDirobahJadi;
    $config['file_name'] = $new_name;
    $this->load->library('upload', $config);
    // menginisialisasi
    $this->upload->initialize($config);
    if (!$this->upload->do_upload($fileApa)) {
      return array('error' => $this->upload->display_errors());
    } else {
      $gbr = $this->upload->data();
      //Compress Image
      $config['image_library']='gd2';
      $config['source_image']=$config['upload_path'].$gbr['file_name'];
      $config['create_thumb']= FALSE;
      $config['maintain_ratio']= FALSE;
      $config['quality']= '50%';
      $config['width']= 500;
      $config['height']= 250;
      $config['new_image']= $config['upload_path'].$gbr['file_name'];
      $this->load->library('image_lib', $config);
      $this->image_lib->resize();
      return $gbr['file_name'];
    }

  }

########################################################################################################  

  public function allPicWhere($id) {
    $data['pasCompId'] = $id;
    $data['all']=$this->ModelCompany->allPicWhere("pic_tbl", "company_id", $id);
    $data['content']='company/pic/list';
    $this->load->view('company/template/body', $data);
  }

  public function addPic($comp_id) {
    $pic_id = $this->input->post('pic_id');
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $address = $this->input->post('address');
    $company_id = $comp_id;
    $status = 1;
    
    $data = [
        'pic_id' => $pic_id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'company_id' => $company_id,
        'status' => $status
      ];
    if (!empty($_POST)) {
      $this->ModelCompany->insertData("pic_tbl", $data);
      $this->session->set_flashdata('pangbeja', '<div class="alert alert-success alert-dismissible">
                                  Added PIC Successfully
                                  </div>');
      redirect(base_url('company/allPicWhere/'.$comp_id));
    }
    if(empty($_POST)){
      $data['pasCompId'] = $comp_id;
      $data['title'] = "Add PIC";
      $data['content']='Company/pic/form_add';
      $this->load->view('Company/template/body', $data);
    }
  }

  public function deletePic($id) {
    $d = $this->ModelCompany->deleteData("pic_tbl", "status", "pic_id", $id);
    $this->session->set_flashdata('pangbeja', '<div class="alert alert-info alert-dismissible">
                                  Deleted PIC Successfully
                                  </div>');
    redirect($_SERVER['HTTP_REFERER'],'refresh');
  }

  public function editPic($id) {
    $data['pic'] = $this->ModelCompany->findData("pic_tbl", "pic_id", $id);
    $data['title'] = "Edit PIC";
    $data['content']='Company/pic/form_edit';
    $this->load->view('Company/template/body', $data);
  }

  public function aksiEditPic($id) {
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $address = $this->input->post('address');
    $company_id = $this->input->post('company_id');
    $status = 1;

    $data = [
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'address' => $address,
      'company_id' => $company_id,
      'status' => $status
    ];
    $this->ModelCompany->updateData("pic_tbl", $data, "pic_id", $id);
    $this->session->set_flashdata('pangbeja', '<div class="alert alert-success alert-dismissible">
                                  Updated PIC Successfully
                                  </div>');
    redirect(base_url("company/allPicWhere/".$company_id));
  }

}