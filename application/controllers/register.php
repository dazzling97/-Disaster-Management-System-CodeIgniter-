<?php

/**
* 
*/
class register extends CI_Controller{
	
	public function registermanager()
	{
	         $this->form_validation->set_rules('fullname', 'Name', 'required');
             $this->form_validation->set_rules('nic', 'NIC', 'required|min_length[10]|max_length[10]');
             $this->form_validation->set_rules('email', 'email', 'required');
             $this->form_validation->set_rules('telephone', 'Telephone', 'required|min_length[10]|max_length[100]');
             $this->form_validation->set_rules('password', 'password', 'required');


              


              	 $this->load->model('model_register');

                    $data = array(

                            'Name' => $this->input->post("fullname"),
                            'NIC' => $this->input->post("nic"),
                            'Telephone' => $this->input->post("telephone"),
                            'Email' => $this->input->post("email"),
                            'Password' => $this->input->post("password"),

                    );

                   
                    
                  
        

                 if($this->input->post("submit")){
                 $this->model_register->managerreg($data);
                 redirect(base_url()."Welcome/adminview");
             }
             if($this->input->post("delete")){
                 $this->model_register->managerdelete($data,$this->input->post("id"));
                 redirect(base_url()."Welcome/adminview");
             }
             if($this->input->post("update")){
                 $this->model_register->managerupdate($data,$this->input->post("id"));
                 redirect(base_url()."Welcome/adminview");
             }
               
             

	}

  public function registeruser()
  {
           $this->form_validation->set_rules('fullname', 'Name', 'required');
             $this->form_validation->set_rules('nic', 'NIC', 'required|min_length[10]|max_length[10]');
             $this->form_validation->set_rules('email', 'email', 'required');
             $this->form_validation->set_rules('telephone', 'Telephone', 'required|min_length[10]|max_length[100]');
             $this->form_validation->set_rules('password', 'password', 'required');


              


                 $this->load->model('model_register');

                    $data = array(

                            'Name' => $this->input->post("fullname"),
                            'NIC' => $this->input->post("nic"),
                            'Telephone' => $this->input->post("telephone"),
                            'Email' => $this->input->post("email"),
                            'Password' => $this->input->post("password"),
                            'Location' => $this->input->post("location"),
                            'Designation' => $this->input->post("designation"),

                    );

                   
                    
                  if($this->input->post("submit")){
                 $this->model_register->userreg($data);
                 redirect(base_url()."Welcome/adminview");
             }
             if($this->input->post("delete")){
                 $this->model_register->userdelete($data,$this->input->post("id"));
                 redirect(base_url()."Welcome/adminview");
             }
             if($this->input->post("update")){
                 $this->model_register->userupdate($data,$this->input->post("id"));
                 redirect(base_url()."Welcome/adminview");
             }
               
             

  }
  public function report()
  {
           

              


                 $this->load->model('model_register');

                    $data = array(

                            'User_ID' => $this->input->post("User_ID"),
                            'Date_Time' => $this->input->post("Date_Time"),
                            'Type' => $this->input->post("Type"),
                            'Location' => $this->input->post("Location"),
                            'Gross_Damage' => $this->input->post("Gross_Damage"),
                            'Number_of_death' => $this->input->post("Number_of_death"),
                            'lat' => $this->input->post("lat"),
                            'lon' => $this->input->post("lon"),
                            

                    );

                   
                    
                  
                 $this->model_register->report($data);
                 redirect(base_url()."Welcome/userview");
               
             

  }
  public function action()
  {
           

              


                 $this->load->model('model_register');

                    $data = array(

                            'ID' => $this->input->post("ID"),
                            'User_ID' => $this->input->post("User_ID"),
                            'Date_Time' => $this->input->post("Date_Time"),
                            'Type' => $this->input->post("Type"),
                            'Location' => $this->input->post("Location"),
                            'Gross_Damage' => $this->input->post("Gross_Damage"),
                            'Number_of_death' => $this->input->post("Number_of_death"),
                            'Approved_By' => $this->input->post("Approved_By"),
                            'lat' => $this->input->post("lat"),
                            'lot' => $this->input->post("lot"),
                            

                    );

                   
                    
                  
                 $this->model_register->action($data,$this->input->post("ID"));
                 redirect(base_url()."Welcome/mannagerview");
               
             

  }
  public function reject()
  {
           

              


                 $this->load->model('model_register');

                    $data = array(

                            'ID' => $this->input->post("ID"),
                            'User_ID' => $this->input->post("User_ID"),
                            'Date_Time' => $this->input->post("Date_Time"),
                            'Type' => $this->input->post("Type"),
                            'Location' => $this->input->post("Location"),
                            'Gross_Damage' => $this->input->post("Gross_Damage"),
                            'Number_of_death' => $this->input->post("Number_of_death"),
                            'Rejected_By' => $this->input->post("Rejected_By"),
                            'Comments' => $this->input->post("Comments"),
                            'lat' => $this->input->post("lat"),
                            'lot' => $this->input->post("lot"),
                            

                    );

                   
                    
                  
                 $this->model_register->reject($data,$this->input->post("ID"));
                 redirect(base_url()."Welcome/mannagerview");
               
             

  }




}

?>