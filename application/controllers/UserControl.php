<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserControl
 *
 * @author Pavithra
 */
include_once (dirname(__FILE__) . "/Managementcontrol.php");
class UserControl  extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->library('form_validation');
     require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';
require 'class.smtp.php';
     
    }

    public function employeeLogin()
    {
       
       $this->load->view('employeeLoginPage');
      
        
    }
    public function managerLogin()
    {
        $this->load->view('loginheader');
         $this->load->view('managerLoginPage');  
    }
//    public function adminlogin()
//    {
//         $this->load->view('adminlogin');  
//    }
    
    public function resetpassword(){
        $this->load->view('loginheader');
        $this->load->view('restpass');
    }
    
    public function restpassadmin(){
        $name = $this->input->post('name');
        $email = $this->input->post('mail');
        $this->load->model('Dbmodel');
          $managerData=$this->Dbmodel->code($name,$email);
          if(empty($managerData))
          {
            echo "inside not value";
           $this->session->set_flashdata('error','Please enter  Valid username and Mail ');
             redirect(base_url() . 'UserControl/resetpassword');    
          }
          else{
            $output =  $this->Dbmodel->adminLogin();
            $data['viewdata']=$output; 
            foreach($data['viewdata'] as $item){
                                     
              if( $item->name ==$name  && $item->mail ==$email){
                  $pass = $item->code;
                  $name = $item->name;
                  $email=$item->mail;
                  
                 $this->load->library('email');

          //SMTP & mail configuration
          $config = array(
              'protocol'  => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'lokesh.aapto@gmail.com',
              'smtp_pass' => 'worknowsee123*%@',
              'mailtype'  => 'html',
              'charset'   => 'utf-8'
          );
          $this->email->initialize($config);
          $this->email->set_mailtype("html");
          $this->email->set_newline("\r\n");
          //Email content
          $message="<html><body><span> Hello {$name} the Password is  {$pass}</span></body></html>";
          $this->email->to('{$email}');
          $this->email->from('lokesh.aapto@gmail.com','Password');
          $this->email->subject('Your Password');
          $this->email->message($message);
          //Send email
        
          
       $mail = new PHPMailer;
       $mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->Host='smtp.gmail.com';
        $mail->port = 465;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='lokesh.aapto@gmail.com';
        $mail->Password='worknowsee123*%@';
        $mail->setFrom('lokesh.aapto@gmail.com','Aapto');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject='PHP Mailer Subject';
        $mail->Body  = "<html><body><span>Hello {$name} your password to your account is  {$pass}</span></body></html>";

       if(!$mail->send()){
             $this->session->set_flashdata('user','Password has Not sent succussfully sent to your Gmail Account');
        }else{
             $this->session->set_flashdata('user','Password has been succussfully sent to your GmailAccount');
        }

              redirect(base_url() . 'UserControl/adminlogin'); 
              
                
              }
        
    }
          }
    }
    public function customerRegistration()
    {
       
        $custName= $this->input->post('uname');
        $custEmail=$this->input->post('uemail');
         $mobileNo=$this->input->post('umobile');
           $mobileNo=$this->input->post('umobile');
          $message =$this->input->post('message');
        /** $custPass=$this->input->post('upwd');
         $confirmPass=$this->input->post('cpassword');
         
         if($custPass!=$confirmPass)
         {
              $this->session->set_flashdata('status','Password & Confirm password are not matching');
           redirect(base_url() . 'UserControl/employeeLogin');
         }
         else
         { **/
              $custData = array(
                "name" => $custName,
                "email" => $custEmail,
                "mobileno" => $mobileNo,
                "pwd" => $mobileNo,
                "confirmpassword" => $mobileNo,
                "message" =>   $message 
              
            );
              
            $this->load->model('Dbmodel');
             $this->Dbmodel->saveCustomerData($custData);
               $this->session->set_flashdata('status3','Registered Successfully. please login');
             redirect(base_url() . 'UserControl/employeeLogin');
      /**   } **/
         
         
              
    }
    
    public function CustomerLoginCheck()
    {
        
       $umobile= $this->input->post('umobile');
        $uupwd=$this->input->post('uupwd'); 
        if(($umobile!="") && ($uupwd!="")){
        $this->load->model('Dbmodel');
        $userdata=$this->Dbmodel->canCustomerLogin($umobile,$uupwd);
        $data['userinfo']=$userdata;
       
        if(empty($userdata))
        {
           $this->session->set_flashdata('userlogin','Please Login with Valid username and password ');
             redirect(base_url() . 'UserControl/employeeLogin');  
        }
        
       
  
        else
        {
            
            $data['invoiceInfo']=$this->Dbmodel->getEmpInvoiceInfoByMob($umobile);
          $this->load->view('customerHome',$data); 
          
          
        }
    }
    }
    
     public function termsandconditions()
    {
       $this->load->view('term&condition'); 
    }
    
    
    public function loginCheckManager()
    {
      $this->load->library('../controllers/Managementcontrol');
        $email= $this->input->post('email');
        $pass=$this->input->post('pass'); 
        // echo $email;
        // echo $pass;
          $this->load->model('Dbmodel');
          $managerData=$this->Dbmodel->canManagerLogin($email,$pass);
          if(empty($managerData))
          {
            echo "inside not value";
             $this->session->set_flashdata('managerlogin','Please Login with Valid username and password ');
             redirect(base_url() . 'UserControl/managerLogin');    
          }
          else{
            $output =  $this->Dbmodel->getregisterdata();
            $data['viewdata']=$output; 
            foreach($data['viewdata'] as $item){
                                     
              if( $item->role == "Sales"  && $item->mail ==$email && $item->pass ==$pass){
                
                $this->session->set_userdata('sales','1');
                $this->session->set_userdata('Salesname',$item->fname);
              redirect(base_url() . 'Managementcontrol/Saleshome'); 
                
              }elseif ($item->role == "Collections" && $item->mail ==$email && $item->pass ==$pass) {
                $this->session->set_userdata('Collectionshome','2');
                   $this->session->set_userdata('Collectionname',$item->fname);
                redirect(base_url() . 'Managementcontrol/Collectionshome'); 

            }elseif ($item->role == "Design" && $item->mail ==$email && $item->pass ==$pass) {

              $this->session->set_userdata('Designerhome',$email);
               $this->session->set_userdata('Designername',$item->fname);
              redirect(base_url() . 'Managementcontrol/Designerhome?id=/'.$item->fname);

          }elseif ($item->role == "Production" && $item->mail ==$email && $item->pass ==$pass) {

            $this->session->set_userdata('Production','4');
            $this->session->set_userdata('Productionname',$item->fname);
            redirect(base_url() . 'Managementcontrol/Production'); 

        }elseif ($item->role == "Procurement" && $item->mail ==$email && $item->pass ==$pass) {
            
          $this->session->set_userdata('Procurementhomes','5');
          $this->session->set_userdata('Procurementhomesname',$item->fname);  
          redirect(base_url() . 'Managementcontrol/Procurementhomes'); 

      }elseif ($item->role == "Manager" && $item->mail ==$email && $item->pass ==$pass) {
        $this->session->set_userdata('Manager','6');
        $this->session->set_userdata('Managername',$item->fname);
        redirect(base_url() . 'Managementcontrol/Manager'); 
    }
              
         
          }
        //  $data['managerInfo']= $managerData;
                
        // $this->load->view('managerHeader',$data); 
        // $this->load->view('mamagerHome',$data);  
     
    }
  }
    
    //  public function userLogout()
    // {
    //     $this->session->set_flashdata('userlogin','Successfully Logged out ');
    //     redirect(base_url() . 'UserControl/employeeLogin');  
    // }
    public function userLogout()
    {
      $this->session->unset_userdata('sales');
      $this->session->unset_userdata('Designerhome');
       $this->session->unset_userdata('Salesname');
        $this->session->unset_userdata('Designername');
         $this->session->unset_userdata('Collectionname');
         $this->session->unset_userdata('Procurementhomesname');
         $this->session->unset_userdata('Managername');
          $this->session->unset_userdata('Productionnamename');  
      $this->session->unset_userdata('Collectionshome');
      $this->session->unset_userdata('Production');
      $this->session->unset_userdata('Procurementhomes');
      $this->session->unset_userdata('Manager');
      $this->session->set_flashdata('userlogin','Successfully Logged out ');
        redirect(base_url() . 'UserControl/managerLogin');  
    }
    
    public function employeeregister()
    {
        $this->load->view('loginheader');
      $this->load->model('Dbmodel');
      $output = $this->Dbmodel->adminLogin();
      $emp = $this->Dbmodel->getregisterdata();
      $data['emp'] = $emp;
      $data['output'] = $output;
      $this->load->view('register',$data); 
    }
    public function updateemp()
    {
      $this->load->model('Dbmodel');
      $output = $this->Dbmodel->adminLogin();
      $emp = $this->Dbmodel->getregisterdata();
      $data['emp'] = $emp;
      $data['output'] = $output;
      $this->load->view('updatedemp',$data); 
    }
    
    public function insertregister()
    {
      // $this->load->library('session');
        $fname= $this->input->post('fname');

       $sname=$this->input->post('sname');

       $pass=$this->input->post('passwordone');

       $spass=$this->input->post('passwordtwo');
          
       $mail= $this->input->post('mail');
       
        $name=$this->input->post('name');
            
       $code=$this->input->post('code');

        $phone=$this->input->post('phone');
        
                $aphone=$this->input->post('aphone');

        $age=$this->input->post('age');
        
          $dat=$this->input->post('dat');

        $qua=$this->input->post('qua');

        $gender=$this->input->post('gender');

        $role=$this->input->post('role');
        
        $address=$this->input->post('address');
         
        $this->load->model('Dbmodel');

      //  $output =  $this->Dbmodel->getcode($code);
      //   if(empty($output))
      //     {
      //      $this->session->userdata('item','error bro!!'); 
      //        redirect(base_url() . 'UserControl/employeeregister');    
      //     }
      //     else{
        echo $fname;
        echo $sname;
        echo $pass;
        echo $spass;
        echo $mail;
        echo $name;
        echo $code;
        echo $phone;
        echo $aphone;
        echo $age;
        echo $dat;
        echo $qua;
        echo $gender;
        echo $role;
        echo $address;
        // echo $name;
        // echo $name;
        // echo $name;
        // echo $name;
        // echo $name;
            $this->Dbmodel->registerdata($fname,$sname,$pass,$spass,$mail,$name,$code,$phone,$aphone,$age,$dat,$qua,$gender,$role,$address);
//            $this->load->view('term&condition');
 $this->session->set_flashdata('Created','Account has been Created');
             redirect(base_url() .'UserControl/employeeregister');
                
          // }

        
        
    }
     public function updateregister()
    {
         
      // $this->load->library('session');
         $id = $this->input->post('id');
        $fname= $this->input->post('fname');

       $sname=$this->input->post('sname');

       $pass=$this->input->post('passwordone');

       $spass=$this->input->post('passwordtwo');
          
       $mail= $this->input->post('mail');
       
        $name=$this->input->post('name');
            
       $code=$this->input->post('code');

        $phone=$this->input->post('phone');
        
                $aphone=$this->input->post('aphone');

        $age=$this->input->post('age');
        
          $dat=$this->input->post('dat');

        $qua=$this->input->post('qua');

        $gender=$this->input->post('gender');

        $role=$this->input->post('role');
        
        $address=$this->input->post('address');
         
        $this->load->model('Dbmodel');

      //  $output =  $this->Dbmodel->getcode($code);
      //   if(empty($output))
      //     {
      //      $this->session->userdata('item','error bro!!'); 
      //        redirect(base_url() . 'UserControl/employeeregister');    
      //     }
      //     else{
        echo $id;
        echo $fname;
        echo $sname;
        echo $pass;
        echo $spass;
        echo $mail;
        echo $name;
        echo $code;
        echo $phone;
        echo $aphone;
        echo $age;
        echo $dat;
        echo $qua;
        echo $gender;
        echo $role;
        echo $address;
        // echo $name;
        // echo $name;
        // echo $name;
        // echo $name;
        // echo $name;
            $this->Dbmodel->updateempdata($fname,$sname,$pass,$spass,$mail,$name,$code,$phone,$aphone,$age,$dat,$qua,$gender,$role,$address,$id);
//            $this->load->view('term&condition');
             redirect(base_url() .'UserControl/displayemp');
                
          // }

        
        
    }
    
    public function createmanagercode() 
{
        $this->load->view('loginheader');
    $this->load->view('createmanagercode');
    
}
    public function displayemp(){
          $this->load->view('loginheader');
      $this->load->model('Dbmodel');
      $output = $this->Dbmodel->getregisterdata();
      $data['output'] = $output;
        $this->load->view('displayemp',$data);
        
    }
    
     public function deleteemp()
    {
     $id = intval($_GET['id']);

         $this->load->model('Dbmodel');
         $files= $this->Dbmodel->deleteemp($id);
           redirect(base_url() . 'UserControl/displayemp');
    
    }

    public function loginCheckAdmin(){
      
      $name= $this->input->post('name');
      $code=$this->input->post('code'); 
      $this->load->model('Dbmodel');
      $managerData=$this->Dbmodel->managercode($name,$code);
      if(empty($managerData)){
        echo "inside not value";
        $this->session->set_flashdata('managerlogin','Please Login with Valid username and password ');
        redirect(base_url() . 'UserControl/adminlogin');  
      }
      else{
        $output =  $this->Dbmodel->adminLogin();
        $data['viewdata']=$output; 
        foreach($data['viewdata'] as $item){
                                 
          if($item->name ==$name && $item->code ==$code){
            
            $this->session->set_userdata('sales','1');
          redirect(base_url() . 'UserControl/createmanagercode'); 
            
          }
        }
      }
    }
    public function adminlogin()
    {
            $this->load->view('loginheader');
         $this->load->view('adminlogin');  
    }
public function insertcode()
    {
      $name = $this->input->post('name');
      $mail= $this->input->post('mail');
      $num = $this->input->post('num');
      $code = $this->input->post('code');
      $codebro=$this->input->post("codebro");
      $dat = $this->input->post("dat");
      
$time = strtotime($dat);
$dat = date('Y-m-d',$time); 
      $this->load->model('Dbmodel');
      $this->Dbmodel->insertc($name,$mail,$num,$code,$codebro,$dat);
      redirect(base_url() . 'UserControl/managerLogin');   
   
    }

}

