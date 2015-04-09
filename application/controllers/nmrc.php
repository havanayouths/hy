<?php if (!defined('BASEPATH')) die();
class Nmrc extends Main_Controller {
    public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
	}
    public function index(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('index');
   }
   
   public function uimodals(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('uimodals');
   }
   public function tester() {
       $this->load->helper('date');
       $time = now();
       echo $time;
   }
   public function signin_validation(){
           $this->load->library('form_validation');
           $this->load->library('session');
           $this->form_validation->set_rules('username','Username','required|trim|xxs_clean|callback_validate_credentials');           
           $this->form_validation->set_rules('password','Password','required|md5|trim');
            
        if ($this->form_validation->run()){
                $username = $this->input->post('username');
                
                $id_of_user = $this->crud->get_new_user_id($username);
                $userid = $id_of_user['id'];
                //get role
                    $rowarray = $this->crud->get_role($userid);
                    $role = $rowarray['role'];
                    
                    //create session variables
                    $data = array(
                        'username' => $this->input->post('username'),
                        'logged_in' => 1,
                        'role' => $role
                    );
                    
                    //set the session
                    $this->session->set_userdata($data);
                    
                    //redirect user to appropriate page 
                    if($role == 'employer'){
                         redirect('rprofile');
                         
                    } elseif ($role == 'youth') {
                         redirect('yprofile');
                    }
                    else {
                         redirect('aprofile');
                    }
                
            } else {
                $this->load->helper('form');
                $this->load->view('signin'); 
                }
        } 
        
        
   public function signup_validation() {
       $this->load->library('form_validation');
       $this->load->helper('date');
        //runnning backend form validation to sanitize the data
        $this->form_validation->set_rules('email','Email','trim|xxs_clean|is_unique[contact.email]');
        $this->form_validation->set_rules('password','Password','trim');
        $this->form_validation->set_rules('role','Role','trim|xxs_clean');
        $this->form_validation->set_rules('firstname','Firstname','trim|xxs_clean');
        $this->form_validation->set_rules('lastname','Lastname','trim|xxs_clean');
        $this->form_validation->set_rules('username','Username','trim|xxs_clean|is_unique[user.username]'); 
        $this->form_validation->set_rules('number','Number','trim|xxs_clean');
            //if validation runs successfully insert the data
            if ($this->form_validation->run()){
                    $this->load->model('crud');
                    $signupdata = array(
                                    'last_modified' => now(),
                                    'firstname' => $this->input->post('firstname'),
                                    'lastname' => $this->input->post('lastname'),
                                    'username' => $this->input->post('username'),
                                    'password' => $this->input->post('password'),
                                    'role' => $this->input->post('role')
                    );
                    
                    $this->crud->add_users($signupdata);
                    
                    //getting current id of recently inserted user
                    $username = $this->input->post('username');
                    
                    //using the posted username to compare the latest of the one in the DB as 
                    //its a unique one so that i can get that users id which will be added in the contact table crud is 
                    //model name, get_new_user_id is funtion name in that model and im passing the username value and i store the returned row of that function 
                    //in $id_of_added_user and will get the id value only and and store to $userid which will be used as foreign key in contact table
                    $id_of_added_user = $this->crud->get_new_user_id($username);
                    $userid = $id_of_added_user['id'];
                    
                    $signupdatacontact = array(
                                    'mobile_phone' => $this->input->post('number'),
                                    'email' => $this->input->post('email'),
                                    'userid' => $userid,
                    );
                    
                    // invoking add_userscontact() method to add the user
                    $this->crud->add_userscontact($signupdatacontact);
                    
                    $dataid = array(
                                    'userid' => $userid,
                    );
                    if($this->input->post('role')=="youth"){
                       $this->crud->add_addresss($dataid);
                    }
                    
                    // now im setting up session data
                    $data = array(
                        'username' => $this->input->post('username'),
                        'logged_in' => 1,
                        'role' => $this->input->post('role')
                    );
                    $this->session->set_userdata($data);
                    
                    //get role
                    $rowarray = $this->crud->get_role($userid);
                    $role = $rowarray['role'];
                    
                    if($role == 'employer'){
                         redirect('rprofile');
                         
                    } elseif ($role == 'youth') {
                         redirect('yprofile');
                    }
                    else {
                         redirect('aprofile');
                    }
                    
            }
            else {
                redirect();
            }
   }
   
    public function validate_credentials(){
            $this->load->library('form_validation');
            $this->load->model('crud');
            if($this->crud->can_log_in()){
               return true;
            } else {
                
                $this->form_validation->set_message('validate_credentials','incorrect username/password');
                return false;
            }
    }  
    
    //function to delete a specific row in table
    public function delete(){
       $this->load->model('crud');
       $table = $this->uri->segment(3); 
       $this->crud->delete_row($table);
        redirect('yprofile');
   }
    
   //youth profile function , loads the required libraries , and view, gets data from db and passes it to view
    public function yprofile(){
        //loading required libraries and model
        $this->load->library('facebook');
        $this->load->library('session');
        $this->load->model('crud');
        
        //check to see if user is logged in else redirect to restricted page
            if($this->session->userdata('logged_in')){
            
                if($this->session->userdata('role') == "youth"){                  
                    // var_dump($this->session->all_userdata());
                     $cellphone = $this->session->userdata('cellphone');
                
                     $data['user'] = $this->crud->get_user($cellphone);
                     $userid = $data['user']->id;
                     $data['contact'] = $this->crud->get_usercontacts($userid);
                     $data['skills'] = $this->crud->get_skills($userid);
                     $data['address'] = $this->crud->get_address($userid);
                     $data['img'] = $this->crud->get_proimg($userid);
                     //$img = $data['img'];
                    // var_dump($img);
                     $this->load->helper('form');
                     $this->load->helper('url');
                     $this->load->view('yprofile',$data);
                }
                else {
                redirect('restricted'); 
                }
            } else {
                redirect('restricted');
            }
    }
    
    public function rprofile(){
    //loading required libraries and model
        $this->load->library('facebook');
        $this->load->library('session');
        $this->load->model('crud');
        
        //check to see if user is logged in else redirect to restricted page
            if($this->session->userdata('logged_in')){
            
                    if($this->session->userdata('role') == "employer"){            
                    // var_dump($this->session->all_userdata());
                     $username = $this->session->userdata('username');

                     $data['user'] = $this->crud->get_user($username);
                     $userid = $data['user']->id;
                     $data['contact'] = $this->crud->get_usercontacts($userid);
                    // echo $data['contact']->id;
                     $this->load->helper('form');
                     $this->load->helper('url');
                     $this->load->view('rprofile',$data);
                     }
                else {
                redirect('restricted'); 
                }
            } else {
                redirect('restricted');
            } 
    }
    
  
   
    public function header(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('include/header',$data);
    }
   
    public function signin(){
      $this->load->library('facebook');
      $user = $this->facebook->getUser();
      if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }
      if ($user) {
            $data['logout_url'] = site_url('logout'); // Logs off application
            $data['logout_url'] = $this->facebook->getLogoutUrl();// Logs off FB!
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('yprofile'), 
                'scope' => array("email") // permissions here
            ));
        }
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('signin',$data);
   }
   
    public function signup(){
      $this->load->library('facebook');
      $user = $this->facebook->getUser();
      if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }
      if ($user) {
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('yprofile'), 
                'scope' => array("email") // permissions here
            ));
        }
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('signup',$data);
   }
   
   public function fbsignupa(){
       $this->load->view('fbsignupform');
   }
   
   public function fbsignin(){
       $this->load->library('facebook');
           $user = $this->facebook->getUser();
            if ($user) {
                  try {
                      $datas['user_profile'] = $this->facebook->api('/me');
                  } catch (FacebookApiException $e) {
                      $user = null;
                  }
                  echo $e;
                 echo var_dump($datas);
        }else { $this->facebook->destroySession();}
        
                        //--------------------------------------------------------------------------------------//
                                        //getting current id of user loging in using their fb id
                                        //$fbid = $data['user_profile']['id'];
                                        //$id_of_login_user = $this->crud->get_new_user_fbid($fbid);
                                       // $userid = $id_of_login_user['id'];
                        //--------------------------------------------------------------------------------------//
     //   if($this->crud->get_userbyfb()){
       //     echo "yes";
        //}
        //else { echo "sorry we caint help";}
   }
   
   public function fbsignup(){
       //loading my models
       $this->load->helper('file');
       $this->load->library('facebook');
       $this->load->library('form_validation');
       $this->load->helper('date');
       //--------------------------------------------------------------------------------------//
        //runnning backend form validation to sanitize the data 
       $this->form_validation->set_rules('number','Number','trim|xxs_clean|is_unique[user.cellphone]');
       $this->form_validation->set_rules('password','Password','trim');
       $this->form_validation->set_rules('role','Role','trim|xxs_clean');
      
       if ($this->form_validation->run()){
                    $this->load->model('crud');
                        //--------------------------------------------------------------------------------------//
                        //getting facebook user access tokens and their profile details so i store those in the database 
                            $user = $this->facebook->getUser();
                            if ($user) {
                                 try {
                                     $token = $this->facebook->getAccessToken();
                                     $data['user_profile'] = $this->facebook->api('/me');
                                 } catch (FacebookApiException $e) {
                                     $user = null; }
                                 $token = $this->facebook->getAccessToken();
                             }   else { $this->facebook->destroySession();}

                             //get profile details of user from fb        
                             $fbid = $data['user_profile']['id'];
                             $firstname = $data['user_profile']['first_name'];
                             $lastname = $data['user_profile']['last_name'];
                             $gender = $data['user_profile']['gender'];
                             $email = $data['user_profile']['email'];
                        //--------------------------------------------------------------------------------------//
                            //--------------------------------------------------------------------------------------//
                            $signupdata = array(
                                            'last_modified' => now(),
                                            'firstname' => $firstname,
                                            'lastname' => $lastname,
                                            'fbid' => $fbid,
                                            'gender' => $gender,
                                            'cellphone' => $this->input->post('number'),
                                            'password' => $this->input->post('password'),
                                            'role' => $this->input->post('role')
                            );
                            //adding sign up to database 
                            $this->crud->add_users($signupdata);
                            //--------------------------------------------------------------------------------------//
                                            //getting current id of recently inserted user
                                            $number = $this->input->post('number');
                                            $id_of_added_user = $this->crud->get_new_user_id($number);
                                            $userid = $id_of_added_user['id'];
                            //--------------------------------------------------------------------------------------//
                            //inserting init data in contacts table
                            $signupdatacontact = array(
                                            'telephone' => $this->input->post('number'),
                                            'email' => $email,
                                            'userid' => $userid,
                            );
                             // invoking add_userscontact() method to add the user
                            $this->crud->add_userscontact($signupdatacontact);
                    //--------------------------------------------------------------------------------------//
                            //initialising the address table for a registering user
                            $dataid = array(
                                            'userid' => $userid,
                            );
                           // if($this->input->post('role')=="youth"){
                               $this->crud->add_addresss($dataid);
                          //  }
                    //--------------------------------------------------------------------------------------//
                            // adding image of user to database so when the log in next time it will automaticly pull from the db
                            $pic = file_get_contents("https://graph.facebook.com/".$userid."/picture?type=large");
                            $file = "images". DIRECTORY_SEPARATOR . $lastname.".jpg"; 
                            $fp = fopen($file, "w");
                            fwrite($fp, $pic);
                            fclose($fp);

                                $path= base_url().$file;
                                $title = $firstname.".jpg";  
                                $dataimg = array(
                                            'path' => $path,
                                            'title' => $title,
                                            'userid' => $userid,
                                );
                                $this->crud->insertprofileimg($dataimg);
                    //-------------------------------------------------------------------------------------//
                            // now im setting up session data
                    $data = array(
                        'mobile_phone' => $this->input->post('number'),
                        'logged_in' => 1,
                        'role' => $this->input->post('role')
                    );
                    $this->session->set_userdata($data);
                    
                    //get role
                    $rowarray = $this->crud->get_role($userid);
                    $role = $rowarray['role'];
                    
                    if($role == 'employer'){
                         redirect('rprofile');
                         
                    } elseif ($role == 'youth') {
                         redirect('yprofile');
                    }
                    else {
                         redirect('aprofile');
                    }
       }
       else {
           redirect();
       }
   }
   
    public function login(){
                $this->load->helper('file');
		$this->load->library('facebook'); // Automatically picks appId and secret from config
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => 'APP_ID',
        //    'secret' => 'SECRET',
        //    ));
	$user = $this->facebook->getUser();
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null; }
            $token = $this->facebook->getAccessToken();
        }   else { $this->facebook->destroySession();}

        if ($user) {
            $data['logout_url'] = site_url('logout'); // Logs off application
          //  $data['logout_url'] = $this->facebook->getLogoutUrl();// Logs off FB!
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('login'), 
                'scope' => array("email") // permissions here
            ));
        }
         $perm = $data['user_profile'];
        $picc = $data['user_profile']['id'];
        // $pic = file_get_contents("https://graph.facebook.com/".$picc."/picture?type=large");
         $file = "images". DIRECTORY_SEPARATOR . "sam.jpg"; 
         //$fp = fopen($file, "w");
        // fwrite($fp, $pic);
        // fclose($fp);
         var_dump($picc);
         //$this->load->view('login',$data);
	}
   
    public function test(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('test');
        }
    
    public function calendar(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('calendar');
    }
        
    public function statistics(){
     
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('statistics');
    }
    public function notifications(){
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('notifications');
    }
    
    public function youthsearch(){
      $this->load->model('crud');
      $data['users'] = $this->crud->get_users(); 
      
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->view('youthsearch',$data);
    }

    public function aprofile(){
    //loading required libraries and model
        $this->load->library('facebook');
        $this->load->library('session');
        $this->load->model('crud');
        
        //check to see if user is logged in else redirect to restricted page
            if($this->session->userdata('logged_in')){
            
                    if($this->session->userdata('role') == "admin"){            
                    // var_dump($this->session->all_userdata());
                     $username = $this->session->userdata('username');

                     $data['user'] = $this->crud->get_user($username);
                     $userid = $data['user']->id;
                     $data['contact'] = $this->crud->get_usercontacts($userid);
                    // echo $data['contact']->id;
                     $this->load->helper('form');
                     $this->load->helper('url');
                     $this->load->view('aprofile',$data);
                     }
                else {
                redirect('restricted'); 
                }
            } else {
                redirect('restricted');
            }    
    }

    public function fblogout(){
        $this->load->library('facebook');
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        redirect('signin');
    }
    public function restricted(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->view('restricted');
    }
    
    public function error(){
        $this->load->library('facebook');
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        redirect('signin');
    }
    
    public function createcontacts(){
       $this->load->model('crud');
       $id = $this->input->post('id');
      
       $data = array(
           'mobile_phone' => $this->input->post('mobile'),
           'telephone' => $this->input->post('tel'),
           'fax' => $this->input->post('fax'),
           'email' => $this->input->post('email'),);
       $this->crud->add_contactsinfo($data,$id);    
       redirect('yprofile');
   } 
   
   public function createperson(){
       $this->load->model('crud');
       $id = $this->input->post('id');
      
       $data = array(
           'firstname' => $this->input->post('firstname'),
           'lastname' => $this->input->post('lastname'),
           'username' => $this->input->post('username'),
           'password' => $this->input->post('password'),
           'gender' => $this->input->post('gender'),
           'birth_date' => $this->input->post('birth_date'),);
      
       $this->crud->add_personinfo($data,$id);    
       redirect('yprofile');
   } 
   
   public function createaddress(){
       $this->load->model('crud');
       $id = $this->input->post('id');
      
       $data = array(
           'erf' => $this->input->post('erf'),
           'street' => $this->input->post('street'),
           'suburb' => $this->input->post('suburb'),
           'city' => $this->input->post('city'),
           'region' => $this->input->post('region'),);
      
       $this->crud->add_address($data,$id);    
       redirect('yprofile');
   } 
   
   public function uploadimg() {
      $this->load->helper('download');
      $this->load->helper('array');
      $this->load->helper('directory');
      $this->load->helper('url');
       $config['upload_path']= "./images/";
       $config['allowed_types']='*';
       $this->load->library('upload',$config);
       
       if( !$this->upload->do_upload()){
           $error = array('error' =>  $this->upload->display_errors());
           
           echo 'couldnt upload';
           
       } else {
           $file = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image']	= './images/'.$file['file_name'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
              //  $config['width']	= 1023;
              //  $config['height']	= 326;
                $this->load->library('image_lib', $config); 
             
                
           $path= base_url().'/images/'.$file['file_name'];
           $title = $file['file_name'];
         
           
           $this->crud->insertprofileimg($path,$title);
           redirect('yprofile');
          // var_dump($file);
       }
   } 
   
   public function createskills(){
       $this->load->model('crud');
      
       $data = array(
           'userid' => $this->input->post('userid'),
           'skill' => $this->input->post('skill'),
           'rating' => $this->input->post('rating'),);
       
       $this->crud->add_skills($data);    
       redirect('yprofile');
   } 
    
    public function logout(){
        $this->session->sess_destroy();
        $this->load->library('facebook');
        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
        redirect('index.php');
    }
    
    
       
}
/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
