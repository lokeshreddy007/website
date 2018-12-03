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
class Managementcontrol  extends CI_Controller {

  public function __construct() {
    parent::__construct();
    
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->library('pdf');
    require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';
require 'class.smtp.php';
  }
    public function pdfdetails($customer_id)
	{
		
	
      $html_content = '<h3 align="center">Material Oder Invocies</h3>';
      $this->load->model('Dbmodel');
			$html_content .= $this->Dbmodel->fetchpdf($customer_id);
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
  }
  public function pdfstock()
	{
		
	
      $html_content = '<h3 align="center">Stock List</h3>';
      $this->load->model('Dbmodel');
			$html_content .= $this->Dbmodel->pdfstock();
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
  }
   public function fetchpdfmat()
	{
		
	
      $html_content = '<h3 align="center">Material List</h3>';
      $this->load->model('Dbmodel');
			$html_content .= $this->Dbmodel->fetchpdfmat();
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
  }
  public function fetchpdfven()
	{
		
	
      $html_content = '<h3 align="center">Vendor List</h3>';
      $this->load->model('Dbmodel');
			$html_content .= $this->Dbmodel->fetchpdfven();
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
  }
  public function realesepdf()
	{
      $html_content = '<h3 align="center">Realesed Stock List</h3>';
      $this->load->model('Dbmodel');
			$html_content .= $this->Dbmodel->realesepdf();
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
  }
  public function pdfdetailsprint($customer_id)
	{
		
	
      $html_content = '<h3 align="center">Material Oder Invocies</h3>';
      $this->load->model('Dbmodel');
			$html_content .= $this->Dbmodel->fetchpdf($customer_id);
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>1));
	}
    public function saleslogin()
    {
       
       $this->load->view('Managementloginpage');
      
    }    
    public function sregister()
    {
       
       $this->load->view('Salesregistration');
      
    } 
    public function salesregistration()
    {
       
        $custName= $this->input->post('uname');
        $custEmail=$this->input->post('uemail');
         $pwd=$this->input->post('upwd');
           $mobileNo=$this->input->post('umobile');
          $address =$this->input->post('uadd');
      
              $salesData = array(
                "name" => $custName,
                "email" => $custEmail,
                "mobileno" => $mobileNo,
                "pwd" => $pwd,
                "address" =>   $address 
              
            );
              
            $this->load->model('Dbmodel');
             $this->Dbmodel->saveSalesData($custData);
               $this->session->set_flashdata('status3','Registered Successfully. please login');
            
             redirect(base_url() . 'Managementcontrol/saleslogin');
      /**   } **/
         
         
              
    }
     public function Manager()
    {
    //   if (!$this->session->userdata('Manager'))
		// {
    //   redirect(base_url() . 'UserControl/managerLogin');
		// }
		// else
		// {
      $this->load->view('managerheaderpage');
//      echo $this->session->userdata('Manager');
          $this->load->view('managerhome');
    }
         

    // } 
      public function Saleshome()
    {
    //   if (!$this->session->userdata('sales'))
		// {
    //   redirect(base_url() . 'UserControl/managerLogin');
		// }
		// else
		// {
			$this->load->view('Salesheader');
        $this->load->model('Dbmodel');
       $new = $this->Dbmodel->fetch_newfollow();            
       $old = $this->Dbmodel->displayfollowups();
       $data['viewfollowups']=$new; 
       $data['view']=$old;
       $this->load->view('saleshomepage',$data);
    }
  // }
        
      
    

    public function Enquiryform()
    {
         $this->load->view('Salesheader');  
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->getregisterdata();

       $data['viewfollowups']=$successdata; 
       $this->load->view('Enquiryform',$data); 
 
    }
    public function Enquiryformedit()
    {
         $this->load->view('designerheader');
       
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayfollowups();

       $data['viewfollowups']=$successdata; 
         
       $this->load->view('EnquiryFormedit',$data); 
 
    }
    
    public function Enquiryedit($id)
        {

        $name= $this->input->post('name');
       $mail=$this->input->post('mail');   
       $dat= $this->input->post('dat');            
       $comment=$this->input->post('comment');
        $pname=$this->input->post('pname');        
       $distance=$this->input->post('distance');
        
        $optradio=$this->input->post('optradio');

        $design=$this->input->post('design');
        
        $villa=$this->input->post('villa');

        $phone=$this->input->post('phone');
        
        $aphone=$this->input->post('ap  hone');
        
        $fdat= $this->input->post('fdat');

        $delivery= $this->input->post('delivery');

        $site=$this->input->post('site');
        $img=$this->input->post('img');
         
        $plots= $this->input->post('plots');

        $hdate=$this->input->post('hdate');
        $this->load->model('Dbmodel');

        $this->Dbmodel->updateenqirypageone($name,$mail,$dat,$comment,$pname,$distance,$optradio,$design,$villa,$phone,$aphone,$fdat,$delivery,$site,$img,$plots,$hdate,$id);
        $this->session->set_flashdata('status','Registered Successfull ');
        redirect(base_url() . 'Managementcontrol/designEnquirynextpage?id='.$id);

        }
        public function followeditenquiry()
    {
         $this->load->view('Salesheader');
       
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayfollowups();

       $data['viewfollowups']=$successdata; 
         
       $this->load->view('followeditenquiry',$data); 
 
    }
    public function followeditenquiryf()
    {
   $id=$this->input->post('id');
    $name= $this->input->post('name');
   $mail=$this->input->post('mail');   
   $dat= $this->input->post('dat');    
   
$time = strtotime($dat);
$dat = date('Y-m-d',$time);  
        
   $comment=$this->input->post('comment');
    $pname=$this->input->post('pname');        
   $distance=$this->input->post('distance');
    
    $optradio=$this->input->post('optradio');

    $design=$this->input->post('design');
    
    $villa=$this->input->post('villa');

    $phone=$this->input->post('phone');
    
    $aphone=$this->input->post('ap  hone');
    
    $fdat= $this->input->post('fdat');
    
$time = strtotime($dat);
$fdat = date('Y-m-d',$time);  


    $delivery= $this->input->post('delivery');
    
$time = strtotime($dat);
$delivery = date('Y-m-d',$time);  


    $site=$this->input->post('site');
    $img=$this->input->post('img');
     
    $plots= $this->input->post('plots');

    $hdate=$this->input->post('hdate');
    
$time = strtotime($dat);
$hdate = date('Y-m-d',$time);  

    $this->load->model('Dbmodel');

    $this->Dbmodel->updateenqirypageone($name,$mail,$dat,$comment,$pname,$distance,$optradio,$design,$villa,$phone,$aphone,$fdat,$delivery,$site,$img,$plots,$hdate,$id);
    $this->session->set_flashdata('status','Registered Successfull ');
    redirect(base_url() . 'Managementcontrol/followEnquirynextpage?id='.$id);

    }
    public function Enquiryformview()
    {
         $this->load->view('designerheader');
       
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayfollowups();

       $data['viewfollowups']=$successdata; 
         
       $this->load->view('EnquiryFormview',$data); 
 
    }
    
     public function EnqueryNextPage()
    {
         $this->load->view('Salesheader');
         
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayEnquiryone();
       
      $data['viewfollowups']=$successdata; 

       $this->load->view('Enquirynextpage',$data);
      
    } 
    public function followEnquirynextpage()
    {
         $this->load->view('Salesheader');
         
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayEnquiryone();
       
      $data['viewfollowups']=$successdata; 

       $this->load->view('followEnquirynextpage',$data);
      
    } 
    public function designEnquirynextpage()
    {
         $this->load->view('designerheader');
         
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayEnquiryone();
       
      $data['viewfollowups']=$successdata; 

       $this->load->view('designEnquirynextpage',$data);
      
    } 
    public function designEnquirynextpage2()
    {
         $this->load->view('designerheader');
         
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayEnquiryone();
       
      $data['viewfollowups']=$successdata; 

       $this->load->view('designEnquirynextpage2',$data);
      
    }
  
         public function followup()
    {
       $this->load->view('Salesheader');
        $this->load->model('Dbmodel');

        $success= $this->Dbmodel->displayfollowupsnow();
       $successdata= $this->Dbmodel->displayEnquiryone();
       $button= $this->Dbmodel->oderqua();
       
      $data['button']= $button;
       $data['viewfollowups']=$successdata; 
       $data['view']=$success; 

       $this->load->view('followupform',$data); 
     
    } 
     public function followupdata()
    {
       $this->load->view('Salesheader');
       
        $iduser= $this->input->post('iduser');
        $name= $this->input->post('name');
          
       $mail= $this->input->post('mail');
            
       $sendquatation=$this->input->post('sendquatation');

        $newdata=$this->input->post('newdata');
         
       $newcomment=$this->input->post('newcomment');
       
    $dat=$this->input->post('dat');
    $time = strtotime($dat);
$dat = date('Y-m-d',$time);  
    $phone=$this->input->post('phone');

         
       $comment=$this->input->post('comment');
       
        $this->load->model('Dbmodel');

        $this->Dbmodel->insertfollowupdata($iduser,$name,$mail,$sendquatation,$newdata,$newcomment,$comment,$dat,$phone);
        if ($sendquatation == Yes){
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
          $message="<html><body><span> Hello {$name} the new followup date {$dat} is Comment is {$newcomment}</span></body></html>";
          $this->email->to('
          
          
          reddy160@gmail.com');
          $this->email->from('lokesh.aapto@gmail.com','Quatation value');
          $this->email->subject('Quatation value From LIveinPassion');
          $this->email->message($message);
          //Send email
          $this->email->send();
         
        }
        
        $this->session->set_flashdata('status','UPdated Successfull ');
$this->session->set_flashdata('Created','Details successfully updated');

        redirect(base_url() .'Managementcontrol/Checkfollowuplist');
     
    }     
    
    public function Checkfollowuplist()
    {
       $this->load->view('Salesheader');
       $this->load->model('Dbmodel');
       $new = $this->Dbmodel->fetch_newfollow();            
       $old = $this->Dbmodel->displayfollowups();
       $data['viewfollowups']=$new; 
       $data['view']=$old; 
      
       $this->load->view('followuplist',$data);
    }
 
          public function fetch()
          {
            $output = '';
            $query = '';
            $this->load->model('Dbmodel');
            if($this->input->post('query'))
            {
              $query = $this->input->post('query');
            }
            $new = $this->Dbmodel->fetch_newfollow();            
            $old = $this->Dbmodel->fetch_data($query);
            $data['viewfollowups']=$new; 
            $data['view']=$old; 
            $output .= '
            <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <tr>
                    <th>S.NO </th>
                    <th>ID</th>
                      <th>Name </th>
                      <th>E-Mail</th>
                      <th>Phone</th>
                      
                      <th>Follow up date</th>
                    </tr>
            ';
              $value = array();
              $oldvalue = array();
            if($old->num_rows() > 0)
            {
              
              foreach($new as $items){
                array_push($value, $items->iduser);
              }
              foreach($old as $items){
                array_push($value, $items->idenquirylist);
              }
              $num = 1;
              foreach($old->result() as $row)
              {
                $output .= '
                    <tr>
                    <td>' . $num. '</td>
                    <td><a href="followup?id='.$row->idenquirylist.'">'.$row->idenquirylist.'</a></td>  
                    <td>'.$row->name.'</td>
                      <td>'.$row->mail.'</td>
                      <td>'.$row->phone.'</td>
                      
                      <td>'.$row->fdat.'</td>
                      
                    </tr>
                ';
                $num = $num+1;
              }
            }
            else
            {
              $output .= '<tr>
                      <td colspan="5">No Data Found</td>
                    </tr>';
            }
            $output .= '</table>';
            echo $output;
            count($value);
            // echo $value;
            echo $oldvalue;
          }
     
    
    
    
    
     
          public function todayfollowup()
          {
               $this->load->view('Salesheader');
               $this->load->model('Dbmodel');
                   $new = $this->Dbmodel->fetch_newfollow();            
             $old = $this->Dbmodel->displayfollowups();
             $data['viewfollowups']=$new; 
             $data['view']=$old; 
             $this->load->view('todayfollowuptable',$data);
            
          }
          public function fetch1(){
                  $output = '';
                  $query = '';
                  $this->load->model('Dbmodel');
                  if($this->input->post('query'))
                  {
                    $query = $this->input->post('query');
                  }
                  $data = $this->Dbmodel->fetch_data($query);
                  $output .= '
                  <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                          <tr>
                          <th>S.NO </th>
                          <th>ID</th>
                            <th>Name </th>
                            <th>Mail</th>
                            
                            <th>Phone </th>
                            <th>Date</th>
                          </tr>
                  ';
                  if($data->num_rows() > 0)
                  {
                    $num = 1;
                    foreach($data->result() as $row)
                    {
                    
                         if( $row->fdat == date("Y-m-d")){
                      $output .= '
                          <tr>
                          <td>' . $num. '</td>
                          <td><a href="followup?id='.$row->idenquirylist.'">'.$row->idenquirylist.'</a></td>  
                          <td>'.$row->name.'</td>
                            <td>'.$row->mail.'</td>
                            
                            <td>'.$row->phone.'</td>
                            <td>'.$row->fdat.'</td>
                            
                          </tr>
                      ';
                      $num = $num+1;
                         }
                    }
                  }
                  else
                  {
                    $output .= '<tr>
                            <td colspan="5">No Data Found</td>
                          </tr>';
                  }
                  $output .= '</table>';
                  echo $output;
                } 
                  
      public function Conformorder()
      {
        $this->load->view('Salesheader');   
        $this->load->model('Dbmodel');
        $successdata= $this->Dbmodel->oderstable();
        $success= $this->Dbmodel->installment();
        $data['viewfollowups']=$successdata;
        $data['view']=$success;
        $this->load->view('ConfrimedOrders',$data);
        
      }  

       public function fetchconformoder()
      {
        $output = '';
        $query = '';
        $this->load->model('Dbmodel');
        if($this->input->post('query'))
        {
          $query = $this->input->post('query');
        }
        $data = $this->Dbmodel->fetchconformoder($query);
        $output .= '
        <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <tr>
                <th>S.NO </th>
                <th>ID</th>
                  <th>Name </th>
                  <th>Mail</th>
                  <th>Phone</th>
                  <th>Amount</th>
                  <th>Updated Amount</th>
                
                </tr>
        ';
        if($data->num_rows() > 0)
        {
          $num = 1;
          foreach($data->result() as $row)
          {
            $output .= '
                <tr>
                <td>' . $num. '</td>
                <td><a href="conformcheck?id='.$row->iduser.'">'.$row->iduser.'</a></td>  
                  <td>'.$row->name.'</td>
                  <td>'.$row->mail.'</td>
                  <td>'.$row->number.'</td>
                  <td>'.$row->qua.'</td>
                   <td>'.$row->upqua.'</td>
                  
                  
                </tr>
            ';
            $num = $num+1;
          }
        }
        else
        {
          $output .= '<tr>
                  <td colspan="5">No Data Found</td>
                </tr>';
        }
        $output .= '</table>';
        echo $output;
      }
 

      public function quotation()
      {
         $this->load->view('Salesheader');
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayfollowups(); 
      $success= $this->Dbmodel->getfollowupdataUserId();

       $data['viewfollowups']=$successdata;
        $data['view']=$success;
    
       $this->load->view('Quotationform',$data);
      
    } 
    public function quotationedit()
      {
        $this->load->view('designerheader');
        $this->load->model('Dbmodel');

//       $successdata= $this->Dbmodel->displayfollowups();
      //  $success= $this->Dbmodel->oderstable();


        $success= $this->Dbmodel->getfollowupdataUserId();
      $successdata= $this->Dbmodel->displayEnquiryone();
      $button= $this->Dbmodel->oderstable();
      
     $data['button']= $button;
      $data['viewfollowups']=$successdata; 
      $data['view']=$success; 
       $this->load->view('Quotationformedit',$data);
      
    } 
    
    public function Quotationview()
    {
         $this->load->view('designerheader');
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayfollowups();
        $success= $this->Dbmodel->oderstable();

       $data['viewfollowups']=$successdata;
        $data['viewfollow']=$success;
       $this->load->view('quotationview',$data);
      
    } 
    public function salesQuotationformedit()
    {
      $this->load->view('Salesheader');
      $this->load->model('Dbmodel');

    // $successdata= $this->Dbmodel->displayfollowups();
    //  $success= $this->Dbmodel->oderstable();


    //  $success= $this->Dbmodel->getfollowupdataUserId();
    $successdata= $this->Dbmodel->displayEnquiryone();
    $button= $this->Dbmodel->oderstable();
    
   $data['button']= $button;
    $data['viewfollowups']=$successdata; 
    $data['view']=$success; 
     $this->load->view('salesQuotationformedit',$data);
    
  } 

     
    // public function  updatequatation($id)
    // {
    //     $iduser= $this->input->post('iduser');        
    //   $name= $this->input->post('name');
    //   $mail = $this->input->post('mail');

    //  $number=$this->input->post('phone');
        
    //  $comment= $this->input->post('comment');
          
    //  $qua=$this->input->post('qua');

    //   $newdata=$this->input->post('newdata');
       
    //  $newcomment=$this->input->post('newcomment');
     
     
    //  $this->load->model('Dbmodel');

    //   $this->Dbmodel-> quatationupdate($iduser,$name,$mail,$phone,$comment,$qua,$newdata,$newcomment,$id);       
       
    //     $this->session->set_flashdata('status','Registered Successfull ');

    //     redirect(base_url() .'Managementcontrol/Conformorder');
    // }
    
   
        
    public function incomingpayemt()
    {
         $this->load->view('Collectionheader');
          
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->getconfromoder();

       $data['viewfollowups']=$successdata;
       $this->load->view('incomingpayment',$data);
      
    } 
       public function Createorder()
    {
           $iduser= $this->input->get('id');
           $this->load->view('Salesheader');
          
         $this->load->model('Dbmodel');
        $successdata= $this->Dbmodel->oderstable();
       $success= $this->Dbmodel->displayEnquiryone();
       $datafile= $this->Dbmodel->paymentlistdata($iduser);
       $data['viewname']=$success;
       $data['viewfollowups']=$successdata;
        $data['viewdata']=$datafile;
       $this->load->view('createoder',$data);
      
       
      
    }
    
    
      
       public function PaymentList()
    {
          $iduser= $this->input->get('id');
           $this->load->view('Salesheader');
          
         $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->paymentlistdata($iduser);

       $data['viewfollowups']=$successdata;
       $this->load->view('paymentlist',$data);
      
       
      
    }

    public function  updatequatation()
    {
         $id = intval($_GET['id']);
//        $iduser= $this->input->post('iduser');        
      $name= $this->input->post('name');
      $mail = $this->input->post('mail');

     $number=$this->input->post('phone');
        
     $comment= $this->input->post('comment');
          
     $qua=$this->input->post('qua');

      $newdata=$this->input->post('newdata');
      

$time = strtotime($dat);
$newdata = date('Y-m-d',$time);  
       
     $newcomment=$this->input->post('newcomment'); 
     
     $upqua=$this->input->post('upqua');
    
//    
     
     
     $this->load->model('Dbmodel');

      $this->Dbmodel-> quatationupdate($id,$name,$mail,$number,$comment,$qua,$newdata,$newcomment,$upqua);       
       
        $this->session->set_flashdata('status','Registered Successfull ');

        redirect(base_url() .'Managementcontrol/Conformorder');
//        $this->load->view('linkdesgin',$data);
    }

     public function Linkdesigner()
    {
       $this->load->view('designerheader');
        $this->load->model('Dbmodel');
        // $success= $this->Dbmodel->displayfollowups();
         $successdata= $this->Dbmodel->oderstable();
        //  $design= $this->Dbmodel->displaydesginerwork();
         $data['designwork']=$successdata; 
      //  $data['viewfollowups']=$successdata; 
      //  $data['viewfollow']=$success; 
     
      $this->load->view('linkdesgin',$data);

    } 
    public function Insertdesginer($id)
    {
       $iduser= $this->input->post('iduser');
      $name=$this->input->post('name');  
      $email= $this->input->post('mail');    
      $phone=$this->input->post('number');
       $comment=$this->input->post('comment');
       $qua=$this->input->post('qua');
      $newdata=$this->input->post('newdata');
      $comment=$this->input->post('newcomment');
      $nowwork=$this->input->post('design');
         $this->load->model('Dbmodel');

      $this->Dbmodel->quatationdata($iduser,$name,$email,$phone,$comment,$qua,$newdata,$comment,$nowwork);

       $this->session->set_flashdata('status','Registered Successfull ');
       // echo $iduser;
       // echo $name;
       // echo $email;
       // echo $phone;
       // echo $qua;
       // echo $newdata;
       // echo $comment;
       // echo "<br/>";
       // echo $nowwork;
      $desginname = $_SESSION['Designername'];
// echo $desginname;
         if($this->session->userdata('Manager')) {
             redirect(base_url() .'Managementcontrol/showdesgin');
         } else{
             redirect(base_url() .'Managementcontrol/Designerhome?id=/'.$desginname);

         }
        }


     public function updatedesginer()
     {
        $this->load->view('designerheader');
        $iduser= $this->input->post('iduser');

       $name=$this->input->post('name');
          
       $email= $this->input->post('email');
            
       $phone=$this->input->post('phone');

        $work=$this->input->post('work');
         
       $finalval=$this->input->post('finalval');
       $data=$this->input->post('data');
          $this->load->model('Dbmodel');
       $this->Dbmodel->updatedesginall($iduser,$name,$email,$phone,$work,$finalval,$data);

        $this->session->set_flashdata('status','Registered Successfull ');

        redirect(base_url() .'Managementcontrol/Designerhome');

         }
    
   
    public function InsertEnquiry()
        {
        $name= $this->input->post('name');

       $mail=$this->input->post('mail');
          
       $dat= $this->input->post('dat');
            
       $comment=$this->input->post('comment');

        $pname=$this->input->post('pname');
         
       $distance=$this->input->post('distance');
        
        $optradio=$this->input->post('optradio');

        $design=$this->input->post('design');
        
        $villa=$this->input->post('villa');

        $phone=$this->input->post('phone');
        
        $aphone=$this->input->post('aphone');
        
        $fdat= $this->input->post('fdat');

        $delivery= $this->input->post('delivery');

        $site=$this->input->post('site');

        $img=$this->input->post('img');
         
        $plots= $this->input->post('plots');

        $hdate=$this->input->post('hdate');
        $fileData=array(
           
         'name' =>$name,
         'mail' =>$mail,
       'dat'=>$dat,
            
      'comment'=>$comment,

        'pname'=>$pname,
         
      'distance'=>$distance,
        
        'optradio'=>$optradio,

        'design'=>$design,
        
        'villa'=>$villa,

        'phone'=>$phone,
        
        'aphone'=>$aphone,
        
        'fdat'=>$fdat,

        'delivery'=>$delivery,

        'site'=>$site,

        'img'=>$img,
         
        'plots'=>$plots,

        'hdate'=>$hdate,
           );
       

        $this->session->set_flashdata('status','Registered Successfull ');
        $this->session->set_flashdata('objectInfo',$fileData);
        $data['firstpage']=$fileData;
        $this->load->view('Enquirynextpage',$data);
         }
        public function Enquiryone()
        {
        $name= $this->input->post('name');
       $mail=$this->input->post('mail');   
       $dat= $this->input->post('dat');    
$time = strtotime($dat);
$dat = date('Y-m-d',$time);  
       $comment=$this->input->post('comment');
        $pname=$this->input->post('pname');        
       $distance=$this->input->post('distance');
        
        $optradio=$this->input->post('optradio');

        $design=$this->input->post('design');
        
        $villa=$this->input->post('villa');

        $phone=$this->input->post('num');
        
        $aphone=$this->input->post('aphone');
        
        $fdat= $this->input->post('fdat');
        
$time = strtotime($fdat);
$fdat = date('Y-m-d',$time);  

        $delivery= $this->input->post('delivery');
        $time = strtotime($delivery);
        $delivery = date('Y-m-d',$time);  
        $site=$this->input->post('site');
        $img=$this->input->post('img');
         
        $plots= $this->input->post('plots');

        $hdate=$this->input->post('hdate');
        $time = strtotime($hdate);
        $hdate = date('Y-m-d',$time);  
        $this->load->model('Dbmodel');

        $this->Dbmodel->insertenqirypageone($name,$mail,$dat,$comment,$pname,$distance,$optradio,$design,$villa,$phone,$aphone,$fdat,$delivery,$site,$img,$plots,$hdate);
        $this->session->set_flashdata('status','Registered Successfull ');
        redirect(base_url() . 'Managementcontrol/EnqueryNextPage');

        }
    
    
    public function paymentinsert()

        {
        
         $this->load->view('Salesheader');
         
        $iduser=$this->input->post('iduser');
    
      
       $name=$this->input->post('name');
       $phonenum=$this->input->post('phonenum');
          
       $finalamount=$this->input->post('finalamount');
       
       $balance=$this->input->post('balance');
   $installment=$this->input->post('installment');
    $amountnow=$this->input->post('amountnow');
     $refrenceno=$this->input->post('refrenceno');
       $des=$this->input->post('des');
        $bankname=$this->input->post('bankname');
       $cheque=$this->input->post('cheque'); 

        $paymenttype=$this->input->post('paymenttype');
     $dat=$this->input->post('dat');
     $newdata=$this->input->post('newdate');
     
        $this->load->model('Dbmodel');

        $this->Dbmodel->insertpayment($iduser,$name,$finalamount,$balance,$installment,$amountnow,$refrenceno,$paymenttype,$dat,$cheque,$bankname,$des,$newdata,$phonenum);

        $this->session->set_flashdata('status','Registered Successfull ');

        redirect(base_url() . 'Managementcontrol/Conformorder');

         }
    
      
    
//          
//          public function InsertEnquirypagetwo()
//
//        {
//        
//        $iduser= $this->input->post('iduser');
//        
//        $scope= $this->input->post('scope');
//
//       $flooring=$this->input->post('flooring');
//          
//       $loose= $this->input->post('loose');
//            
//       $metal=$this->input->post('metal');
//
//       $recipient=$this->input->post('material');
//      //  print_r($recipient);
//        //  print_r($message);
//       $message=$this->input->post('quantity');
//      //  print_r($message);
//       //   $FloorMats=$this->input->post('FloorMats');
//
//      //   $Kitchen=$this->input->post('Kitchen');
//         
//      //  $Bathroomfittings=$this->input->post('Bathroomfittings');
//        
//      //   $Wardrobes=$this->input->post('Wardrobes');
//
//      //   $FloorMats=$this->input->post('FloorMats');
//        
//      //   $woodwork=$this->input->post('woodwork');
//
//      //   $pop=$this->input->post('pop');
//        
//      //   $curtains=$this->input->post('curtains');
//        
//      //   $Lightings= $this->input->post('Lightings');
//
//      //   $electrical= $this->input->post('electrical');
//
//      //   $requirements=$this->input->post('requirements');
//        
//      //   $category=$this->input->post('category');
//      //   $recipient= $this->input->post('recipient');
//      //   $message=$this->input->post('message');
//        
////        $addrequirements=$this->input->post('addrequirements');
//
//        $this->load->model('Dbmodel');
//
//        $this->Dbmodel->insertenqirypagetwodata($iduser,$scope,$flooring,$loose,$metal,$recipient,$message);
//
//        $this->session->set_flashdata('status','Registered Successfull ');
//
//        redirect(base_url() . 'Managementcontrol/Saleshome');
//        // $this->load->view('pagedesign'); 
//
//         }
         
//      public function InsertEnquirypagetwo()
//
//        {
//        
//        $iduser= $this->input->post('iduser');
//        
//        $scope= $this->input->post('scope');
//
//       $flooring=$this->input->post('flooring');
//          
//       $loose= $this->input->post('loose');
//            
//       $metal=$this->input->post('metal');
//
//        $Kitchen=$this->input->post('Kitchen');
//         
//       $Bathroomfittings=$this->input->post('Bathroomfittings');
//        
//        $Wardrobes=$this->input->post('Wardrobes');
//
//        $FloorMats=$this->input->post('FloorMats');
//        
//        $woodwork=$this->input->post('woodwork');
//
//        $pop=$this->input->post('pop');
//        
//        $curtains=$this->input->post('curtains');
//        
//        $Lightings= $this->input->post('Lightings');
//
//        $electrical= $this->input->post('electrical');
//
//        $requirements=$this->input->post('requirements');
//        
//        $category=$this->input->post('category');
//        
////        $addrequirements=$this->input->post('addrequirements');
//
//        $this->load->model('Dbmodel');
//
//        $this->Dbmodel->insertenqirypagetwodata($iduser,$scope,$flooring,$loose,$metal,$Kitchen,$Bathroomfittings,$Wardrobes,$FloorMats,$woodwork,$pop,$curtains,$Lightings,$electrical,$requirements,$category);
//
//        $this->session->set_flashdata('status','Registered Successfull ');
//
//        redirect(base_url() . 'Managementcontrol/Saleshome');
//
//         }
//         
 public function InsertEnquirypagetwo()

        {
        
        $iduser= $this->input->post('iduser');
        
        $scope= $this->input->post('scope');

       $flooring=$this->input->post('flooring');
          
       $loose= $this->input->post('loose');
            
       $metal=$this->input->post('metal');


        $material=$this->input->post('material');
        
        $quantity=$this->input->post('quantity');
        
//        $addrequirements=$this->input->post('addrequirements');

        $this->load->model('Dbmodel');

        $this->Dbmodel->insertenqirypagetwodata($iduser,$scope,$flooring,$loose,$metal,$material,$quantity);

        $this->session->set_flashdata('status','Registered Successfull ');

        redirect(base_url() . 'Managementcontrol/Checkfollowuplist');
// $this->load->view('pagedesign',$data); 
         }        
    
        public function Designerhome()
    {
    //   if (!$this->session->userdata('Designerhome'))
		// {
    //   redirect(base_url() . 'UserControl/managerLogin');
		// }
		// else
		// {
      $this->load->view('designerheader');
       
      $this->load->model('Dbmodel');
     $success= $this->Dbmodel->displayfollowups();
      $successdata= $this->Dbmodel->oderstable();
       $design= $this->Dbmodel->displaydesginerwork();
      $data['designwork']=$design; 
    $data['viewfollowups']=$successdata; 
    $data['viewfollow']=$success;


    $this->load->view('pagedesign',$data); 
    // }
      

      
    } 
        
        public function Collectionshome()
    {
    //   if (!$this->session->userdata('Collectionshome'))
		// {
    //   redirect(base_url() . 'UserControl/managerLogin');
		// }
		// else
		// {
      $this->load->view('Collectionheader');
        $this->load->model('Dbmodel');
        $this->load->model('Dbmodel');
            
               $payment= $this->Dbmodel->installment();
               $list= $this->Dbmodel->installmentlist(); 
                 $paymentdue= $this->Dbmodel->payduecol();
                 
                  $duelist= $this->Dbmodel->duelist();
                   $overduelist= $this->Dbmodel->overduelist();
                    $overduelistdue= $this->Dbmodel->overduelistdue();
                     $duelistdue= $this->Dbmodel->duelistdue();
                      $check= $this->Dbmodel->check();
                     
                 
                $data['duelist']=$duelist; 
                 $data['overduelist']=$overduelist; 
                  $data['overduelistdue']=$overduelistdue; 
                   $data['duelistdue']=$duelistdue; 
      $data['check']=$check; 
                 $data['paydue']=$paymentdue; 
               $data['instlist']=$list;  
               $data['view']=$payment; 
               
       $this->load->view('collectionhome',$data);
      
    // }
       
      
    }
    
    public function materialreq()
	{
		
	
      $html_content = '<h3 align="center">Material List</h3>';
      $this->load->model('Dbmodel');
			$html_content .= $this->Dbmodel->materialrequired();
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
  }
        public function showduelist()
    {
       $this->load->view('Collectionheader');
        $this->load->model('Dbmodel');
        $payment= $this->Dbmodel->installment();
               $list= $this->Dbmodel->installmentlist(); 
                 $paymentdue= $this->Dbmodel->payduecol();
                 
                  $duelist= $this->Dbmodel->duelist();
                   $overduelist= $this->Dbmodel->overduelist();
                    $overduelistdue= $this->Dbmodel->overduelistdue();
                     $duelistdue= $this->Dbmodel->duelistdue();
                      $check= $this->Dbmodel->check();
                     
                 
                $data['duelist']=$duelist; 
                 $data['overduelist']=$overduelist; 
                  $data['overduelistdue']=$overduelistdue; 
                   $data['duelistdue']=$duelistdue; 
      $data['check']=$check; 
                 $data['paydue']=$paymentdue; 
               $data['instlist']=$list;  
               $data['view']=$payment; 
       $this->load->view('duelist',$data);
      
    } 
       public function showoverduelist()
    {
      $this->load->view('Collectionheader');
        $this->load->model('Dbmodel');
        $payment= $this->Dbmodel->installment();
               $list= $this->Dbmodel->installmentlist(); 
                 $paymentdue= $this->Dbmodel->payduecol();
                 
                  $duelist= $this->Dbmodel->duelist();
                   $overduelist= $this->Dbmodel->overduelist();
                    $overduelistdue= $this->Dbmodel->overduelistdue();
                     $duelistdue= $this->Dbmodel->duelistdue();
                      $check= $this->Dbmodel->check();
                     
                 
                $data['duelist']=$duelist; 
                 $data['overduelist']=$overduelist; 
                  $data['overduelistdue']=$overduelistdue; 
                   $data['duelistdue']=$duelistdue; 
      $data['check']=$check; 
                 $data['paydue']=$paymentdue; 
               $data['instlist']=$list;  
               $data['view']=$payment; 
       $this->load->view('overduelist',$data);
      
    
      
    } 
    public function Clearlist()
    {
       $this->load->view('Collectionheader');
        $this->load->model('Dbmodel');
        $success= $this->Dbmodel->confromcom();
        $payment= $this->Dbmodel->installment();
               $list= $this->Dbmodel->installmentlist(); 
                 $paymentdue= $this->Dbmodel->payduecol();
                 
                  $duelist= $this->Dbmodel->duelist();
                   $overduelist= $this->Dbmodel->overduelist();
                    $overduelistdue= $this->Dbmodel->overduelistdue();
                     $duelistdue= $this->Dbmodel->duelistdue();
                      $check= $this->Dbmodel->check();
                     
                 
                $data['duelist']=$duelist; 
                 $data['overduelist']=$overduelist; 
                  $data['overduelistdue']=$overduelistdue; 
                   $data['duelistdue']=$duelistdue; 
      $data['check']=$check; 
                 $data['paydue']=$paymentdue; 
               $data['instlist']=$list;  
               $data['view']=$payment; 
        $data['viewfollowups']=$success; 
       $this->load->view('clearlist',$data);
      
    } 
         public function designerupoad()
    {
       $this->load->view('designerheader');
        $this->load->model('Dbmodel');

       $successdata= $this->Dbmodel->displayfollowups();

       $data['viewfollowups']=$successdata; 
       $this->load->view('designerupoad',$data);
      
    } 
     public function viewenquiry()
    {
         $this->load->view('designerheader');
       $this->load->view('viewenquiry');
      
    }
    
    
    public function designdo_uploader()
    {
        
      $this->load->helper(array('form', 'url')); 
          
      $config['upload_path']   = './fileupload/'; 
  
     $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
            $config['max_size']             = 500000;
     $this->load->library('upload',$config);
      $imgtitle= $this->input->post('certificateName');
      $userid= $this->input->post('userid');
       $name= $this->input->post('name');
    $imgdesc=$this->input->post('Desc');
     $error = array('error' => $this->upload->display_errors()); 
                     
     if ( ! $this->upload->do_upload('userfile')) {
       
         var_dump($error);
        $this->load->view('designerhomepage',$error); 
     }
     
    
  
     else { 
        $data = array('upload_data' => $this->upload->data()); 
      $upload_data=  $this->upload->data();
       
        $imgpath="fileupload/".$upload_data['file_name'];
       $fileData=array(
       
     'userid' =>$userid,
     'name' => $name,
    'IMGTITLE' => $imgtitle,
    'IMGDESC' => $imgdesc,
    'IMGPATH'  =>$imgpath,      
       );
         $this->load->model('Dbmodel');
        $this->Dbmodel->insertdesignData($fileData);
        $data['uploadimginfo']=$upload_data;
        $data['fileinfo']=$fileData;
    $this->session->set_flashdata('status','Uploaded Successfully');
         redirect(base_url() . 'Managementcontrol/showfileupload?id='.$userid);
     
    }
  }
      public function showfileupload($image = NULL){
       $this->load->helper('download');
       $userid= $this->input->get('id');
      $this->load->model('Dbmodel');
     $files= $this->Dbmodel->displaydesigndata();
     $data['fileslist']=$files;
     $this->session->set_userdata('userId', $userid);
        $this->load->view('designerheader'); 
        $this->load->view('editdesgin',$data); 

    
    }
    public function productionview($image = NULL){
      $this->load->helper('download');
      $userid= $this->input->get('id');
     $this->load->model('Dbmodel');
    $files= $this->Dbmodel->displaydesigndata();
    $data['fileslist']=$files;
    $this->session->set_userdata('userId', $userid);
       $this->load->view('productionheader'); 
       $this->load->view('productionview',$data); 

   
   }



    //   public function showfileupload($image = NULL){
    //        $this->load->helper('download');
    //        $userid= $this->input->get('id');
    //       $this->load->model('Dbmodel');
    //      $files= $this->Dbmodel->displaydesigndata();
    //      $data['fileslist']=$files;
    //      $this->session->set_userdata('userId', $userid);
    //         $this->load->view('designerheader'); 
    //         $this->load->view('editdesgin',$data); 
    // }
      public function deleteimg($id)
    {

         $this->load->model('Dbmodel');
         $files= $this->Dbmodel->delete_student_id($id);
         $data['fileslist']=$files;
        $userid= $this->session->userdata('userId');
         //   $this->load->view('productionheader');
      // $this->load->view('showfileupload',$data);
           redirect(base_url() . 'Managementcontrol/showfileupload?id='.$userid);
    
    }
        public function Production()
    {
    //   if (!$this->session->userdata('Production'))
		// {
    //   redirect(base_url() . 'UserControl/managerLogin');
		// }
		// else
		// {
      $this->load->view('productionheader');
         $this->load->model('Dbmodel');
       //  $files= $this->Dbmodel->displaydesigndata();
         $files= $this->Dbmodel->prodectiontable();
  //   echo $files;
        // print_r($files);
         $data['fileslist']=$files;
       $this->load->view('productionhome',$data);
      
    // }
      
    }
        public function materialrequired()
    {
         $this->load->view('productionheader');
         $this->load->model('Dbmodel');

        $successdata= $this->Dbmodel->displayfollowups();  
        $data['viewfollowups']=$successdata; 
        $mat= $this->Dbmodel->getmaterial();
         $data['getmat']=$mat; 
        $success= $this->Dbmodel->getmaterialrequired();
        $data['mat']=$success; 
//        $data['viewdata']=$success; 
       $this->load->view('materialrequired',$data);
      
    }
    
    //  public function insertmaterialrequried()

    //     {
    //     $iduser= $this->input->post('iduser');
    //     $name= $this->input->post('name');
    //    $mail=$this->input->post('mail');
    //     $phone=$this->input->post('phone');
    //    $material= $this->input->post('material');
            
    //    $quantity=$this->input->post('quantity');
    //      $dat= $this->input->post('dat');

    //     $this->load->model('Dbmodel');

    //     $this->Dbmodel->inserttmaterialrequried($iduser,$name,$mail,$phone,$material,$quantity,$dat);

    //     $this->session->set_flashdata('status','Registered Successfull ');

    //     redirect(base_url() . 'Managementcontrol/Production');

    //      }
    
    public function insertmaterial()

        {
       
        $material= $this->input->post('material');
       $Quantity=$this->input->post('Quantity');
        $date=$this->input->post('date');
        $this->load->model('Dbmodel');

        $this->Dbmodel->inserttmaterialrequried($material,$Quantity,$date);

        $this->session->set_flashdata('status','Registered Successfull ');

        redirect(base_url() . 'Managementcontrol/Production');

         }
  
        public function Procurement(){

         $this->load->view('procurementheader');  
         $this->load->model('Dbmodel');
       //  $files= $this->Dbmodel->displaydesigndata();
         $files= $this->Dbmodel->DisplayDesignDataByUserId();
  //   echo $files;
        // print_r($files);
         $data['fileslist']=$files;
       $this->load->view('procurementhome',$data);
     
    }
    public function Materialreceived()
    {
         $this->load->view('productionheader');
           $this->load->model('Dbmodel');
          $successdata= $this->Dbmodel->displayfollowups();
       $success= $this->Dbmodel->mtrequired();
       $data['view']=$success; 
        $data['viewfollowups']=$successdata; 
       $this->load->view('materialreceived',$data);
      
    }
    
        public function Procurementhomes()
    {
    //   if (!$this->session->userdata('Procurementhomes'))
		// {
    //   redirect(base_url() . 'UserControl/managerLogin');
		// }
		// else
		// {
      $this->load->view('procurementheader');  
         $this->load->model('Dbmodel');
  
//         $successdata= $this->Dbmodel->Materialrequiredgroup();
         $success= $this->Dbmodel->Materialbyid();
         $check= $this->Dbmodel->displaymaterialreceived();
        $data['success']=$success; 
        $data['check']=$check; 
       $data['viewfollowups']=$successdata; 
       $this->load->view('procurementhome',$data);
      
      
    }
    public function seeproduct($id)
    {
         $this->load->view('procurementheader');
          
         $this->load->model('Dbmodel');
  
         $successdata= $this->Dbmodel->Materialrequiredgroup($id);
         $success= $this->Dbmodel->mt($id);
          $data['view']=$success; 
         $data['viewfollowups']=$successdata; 
       $this->load->view('seeproduct',$data);
      
    }
    
    
   public function Procurementrequriment($material)
    {
         $this->load->view('procurementheader');
         $this->load->model('Dbmodel');
                  $succ= $this->Dbmodel->displaymaterialrequried();

         $successdata= $this->Dbmodel->procurementrequriment($material);
//          $cal= $this->Dbmodel->calstock($material);
         $success= $this->Dbmodel->getstock($material);
         $balstock= $this->Dbmodel->balstock($material);
         $data['balstock']=$balstock; 
         $data['req']=$successdata; 
         $data['stock']=$success; 
          $data['succ']=$succ; 
       $this->load->view('procurementrequriment',$data);
      
    }

    public function uploadstock()
    {
         $this->load->view('procurementheader');
      //  $this->load->view('stockupload');
      $this->load->model('Dbmodel');  
   $getvendor= $this->Dbmodel->getvendor();
      $getmaterial= $this->Dbmodel->getmaterial();
   $data['vendor']=$getvendor; 
    $data['material']=$getmaterial; 
    $this->load->view('stockupload',$data);
   }
    public function stockinsert()
    {
     $Material=$this->input->post('Material');     
     $meas=$this->input->post('meas');
       $unit=$this->input->post('unit');
     $Price=$this->input->post('Price');
    $Tax=$this->input->post('Tax');
    $Address=$this->input->post('Address');
    $Phone=$this->input->post('Phone');
     $Vendor=$this->input->post('Vendor');
      $Email=$this->input->post('Email');
     $Date=$this->input->post('Date'); 
     $time = strtotime($Date);
     $Date = date('Y-m-d',$time); 
      $this->load->model('Dbmodel');

      $this->Dbmodel->insertstock($Material,$meas,$unit,$Price,$Tax,$Address,$Phone,$Vendor,$Email,$Date);

      $this->session->set_flashdata('status','Registered Successfull ');

      redirect(base_url() . 'Managementcontrol/Procurementhomes'); 
    }
    public function productionrequiment()
    {
     $material=$this->input->post('material');     
     $total=$this->input->post('total');
     $stock=$this->input->post('stock');
    $releas=$this->input->post('releas');
    $date=$this->input->post('dat');
    $balance=$this->input->post('balance');
 
     $iduser=$this->input->post('iduser'); 
     $name=$this->input->post('name'); 
     $mail=$this->input->post('mail'); 
     $num=$this->input->post('num'); 

      $this->load->model('Dbmodel');

      $this->Dbmodel->insertproductionreq($material,$total,$stock,$releas,$date,$balance,$iduser,$name,$mail,$num);

      $this->session->set_flashdata('status','Registered Successfull ');

      redirect(base_url() . 'Managementcontrol/Procurementhomes'); 
    }
    
    
       public function Procurementpo()
    {
      $this->load->view('procurementheader');
      $this->load->model('Dbmodel');
         $getvendor= $this->Dbmodel->getvendor();
         $data['vendor']=$getvendor; 

       $this->load->view('po',$data);
       
    }
    public function insertpo()
    {
     $Material=$this->input->post('Material');     
     $Quantity=$this->input->post('Quantity');
     $Price=$this->input->post('Price');
    $Tax=$this->input->post('Tax');
     $Vendor=$this->input->post('Vendor');
     $Payment=$this->input->post('Payment');
    $Reason=$this->input->post('Reason'); 
     $Date=$this->input->post('Date'); 
     $Comments=$this->input->post('Comments');
     $Changed=$this->input->post('Changed');

      $this->load->model('Dbmodel');

      $this->Dbmodel->poinsert($Material,$Quantity,$Price,$Tax,$Vendor,$Payment,$Reason,$Date,$Comments,$Changed);

      $this->session->set_flashdata('status','Registered Successfull ');

      redirect(base_url() . 'Managementcontrol/Procurementhomes'); 
    }
    public function showpo()
    {
         $this->load->view('procurementheader');
         $this->load->model('Dbmodel');
         $successdata= $this->Dbmodel->getpo();
         $data['viewdata']=$successdata; 
       $this->load->view('materialodered',$data);

      
    }
     public function sendmail(){
           $this->load->view('Salesheader');
          $iduser= $this->input->post('iduser');
        $name= $this->input->post('name');
        $mail = $this->input->post('mail');
$email = $mail;
       $phone=$this->input->post('phone');
          
       $comment= $this->input->post('comment');
            
       $qua=$this->input->post('qua');

        $newdata=$this->input->post('newdata');
        $time = strtotime($newdata);
        $newdata = date('Y-m-d',$time);  
        
       $newcomment=$this->input->post('newcomment');
       
        
       $this->load->model('Dbmodel');

        $this->Dbmodel-> updatedesginall($iduser,$name,$mail,$phone,$comment,$qua,$newdata,$newcomment);

    $this->load->library('email');

    //SMTP & mail configuration
   
//    $this->email->initialize($config);
//    $this->email->set_mailtype("html");
//    $this->email->set_newline("\r\n");
//    //Email content
//    $message="<html><body><span>This value is {$field1}is php data {$field7}</span></body></html>";
//    $this->email->to('lokeshreddy160@gmail.com');
//    $this->email->from('lokesh.aapto@gmail.com','Quatation value');
//    $this->email->subject('Quatation value From LIveinPassion');
//    $this->email->message($message);
    //Send email
//    $this->email->send();
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
             $this->session->set_flashdata('user','Quatation has Not sent succussfully sent to Customer');
        }else{
             $this->session->set_flashdata('user','Quatation has sent succussfully sent to Customer');
        }
          $this->session->set_flashdata('status','Send Mail successfully ');

        redirect(base_url() .'Managementcontrol/Conformorder');
     }
     public function designsendmail(){
           $this->load->view('Salesheader');
          $iduser= $this->input->post('iduser');
        $name= $this->input->post('name');
        $mail = $this->input->post('mail');

       $phone=$this->input->post('phone');
          
       $comment= $this->input->post('comment');
            
       $qua=$this->input->post('qua');

        $newdata=$this->input->post('newdata');
         
       $newcomment=$this->input->post('newcomment');
       
        
       $this->load->model('Dbmodel');

        $this->Dbmodel-> updatedesginall($iduser,$name,$mail,$phone,$comment,$qua,$newdata,$newcomment);

    $this->load->library('email');

    //SMTP & mail configuration
    $config = array(
        'protocol'  => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'lokesh.aapto@gmail.com',
        'smtp_pass' => '',
        'mailtype'  => 'html',
        'charset'   => 'utf-8'
    );
    $this->email->initialize($config);
    $this->email->set_mailtype("html");
    $this->email->set_newline("\r\n");
    //Email content
    $message="<html><body><span>This value is {$field1}is php data {$field7}</span></body></html>";
    $this->email->to('lokeshreddy160@gmail.com');
    $this->email->from('lokesh.aapto@gmail.com','Quatation value');
    $this->email->subject('Quatation value From LIveinPassion');
    $this->email->message($message);
    //Send email
    $this->email->send();
          $this->session->set_flashdata('status','Send Mail successfully ');

        redirect(base_url() .'Managementcontrol/Linkdesigner');
     }
     
     public function writedata(){
         $myfile = fopen("quatationlist.txt", "a+");
        $txt = "Lokesh Reddy \n";
        fwrite($myfile, $txt);
          fclose($myfile);

     }

 public function showdata(){
         $myfile = fopen("quatationlist.txt", "a+");
        echo fread($myfile,filesize("quatationlist.txt"));

         fclose($myfile);

 }    
 
        /*  this is basing code for live search using Ajax
        public function indexdata()
          {
            $this->load->view('ajaxsearch');
          }

          public function fetch()
          {
            $output = '';
            $query = '';
            $this->load->model('Dbmodel');
            if($this->input->post('query'))
            {
              $query = $this->input->post('query');
            }
            $data = $this->Dbmodel->fetch_data($query);
            $output .= '
            <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th>name </th>
                      <th>mail</th>
                      <th>comment</th>
                      <th>pname </th>
                      <th>site</th>
                    </tr>
            ';
            if($data->num_rows() > 0)
            {
              foreach($data->result() as $row)
              {
                $output .= '
                    <tr>
                      <td>'.$row->name.'</td>
                      <td>'.$row->mail.'</td>
                      <td>'.$row->comment.'</td>
                      <td>'.$row->pname.'</td>
                      <td>'.$row->site.'</td>
                    </tr>
                ';
              }
            }
            else
            {
              $output .= '<tr>
                      <td colspan="5">No Data Found</td>
                    </tr>';
            }
            $output .= '</table>';
            echo $output;
          }

          "its end hers  "
  */   
  
  public function conformcheck()
    {
       $this->load->view('Salesheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->oderstable();
       $success= $this->Dbmodel->displayEnquiryone();
       $datafile= $this->Dbmodel->paymentlistdata($iduser);
       $data['viewname']=$success;
       $data['viewfollowups']=$successdata;
        $data['viewdata']=$datafile;
      
       $this->load->view('nowcheck',$data);
    }
    public function checkconform()
    {
       $this->load->view('Salesheader');
      //  echo "hello";
        $iduser = $this->input->post('iduser');
        $name = $this->input->post('name');

        $mail = $this->input->post('mail');

        $phone = $this->input->post('number');

        $finalamount = $this->input->post('finalamount');

//        $installment = $this->input->post('installment');
//        $installmentnum = $this->input->post('instabro');
//        $date = $this->input->post('date');
//        $installamount = $this->input->post('amountnow');
//        $description = $this->input->post('desicri');

        $paidamount = $this->input->post('Amountnow');

        $refrenceno = $this->input->post('RefrenceNo');

        $payingdate = $this->input->post('dat');
        
$time = strtotime($payingdate);
$payingdate = date('Y-m-d',$time);  

        $chequenumber = $this->input->post('Cheque');
        $bankname = $this->input->post('bankname');
        $descriptionpaying = $this->input->post('des');
        $paymentmethod = $this->input->post('paymenttype');

       

          $this->load->model('Dbmodel');

          $this->Dbmodel->insertdataoder($iduser,$name,$mail,$phone,$finalamount,$paidamount,$refrenceno,$payingdate,$chequenumber,$bankname,$descriptionpaying,$paymentmethod);       
        
         // array values------

       
      //     $arr = explode(",",$install);

      //     $num =  count($arr);
      // echo $num;

      // for($i=0;$i<=$num;$i++){
      //   echo $arr[$i];
      // }
          // $dat = explode(",",$date);
          // $amo = explode(",",$amountnow);
          // $de = explode(",",$desicri);
          // foreach($arr as $user) {
          //   echo $user ;
          // }
          // foreach($dat as $user) {
          //   echo $user;
          // }
          // foreach($amo as $user) {
          //   echo $user;
          // }
          // foreach($de as $user) {
          //   echo $user;
          // }
          redirect(base_url() .'Managementcontrol/installment?id='.$iduser);
//       $this->load->view('see');
    }
    public function installment()
   {
         $this->load->view('Salesheader');
        $this->load->model('Dbmodel');
       $success= $this->Dbmodel->installment();
       $data['view']=$success;
       $this->load->view('see',$data);
   }
   public function  checkinstallment()
    {
         $this->load->view('Salesheader');
        //  echo "hello";
        $iduser= $this->input->post('iduser');  
          $name= $this->input->post('name');  
            $mail= $this->input->post('mail');  
              $number= $this->input->post('number');  
                $finalamount= $this->input->post('finalamount');  
                  $instabro= $this->input->post('instabro');  
                  $date= $this->input->post('date');  
                  $amountnow= $this->input->post('amountnow');  
                  $desicri= $this->input->post('desicri');  
                   $intnum= $this->input->post('intnum');  
                //  echo $iduser;
                  // echo $name; echo $mail;
                  //  echo $finalamount; echo $number; echo $instabro; echo $date; echo $desicri;
       $this->load->model('Dbmodel');             
   $this->Dbmodel-> insertinstallment($iduser,$name,$mail,$number, $finalamount,$instabro,$date,$amountnow,$desicri,$intnum); 
  //  $this->load->view('invoicepay',$data);

          redirect(base_url() .'Managementcontrol/Invoice?id='.$iduser);
          }
  
          public function Invoice()
          {
               $this->load->view('Salesheader');
               $this->load->model('Dbmodel');
               $payment= $this->Dbmodel->installment();
               $list= $this->Dbmodel->installmentlist(); 
                 $paymentdue= $this->Dbmodel->payduecol();
      
                 $data['paydue']=$paymentdue; 
               $data['instlist']=$list;  
               $data['view']=$payment;       
                     
                $this->load->view('invoicepay',$data);
            
          }  
          public function collectiondue()
    {
           $iduser= $this->input->get('id');
          $this->load->view('Collectionheader');
          
         $this->load->model('Dbmodel');
         $installmentlist= $this->Dbmodel->installmentlist();
           $duefollowup= $this->Dbmodel->duefollowupupaded();
        
         $payment= $this->Dbmodel->installment();
         $data['payment']=$payment; 
          $data['duefollowup']=$duefollowup; 
         $data['install']=$installmentlist; 
          
        
       $this->load->view('collectiondue',$data);
      
       
       }
       public function dueform()
       {
           
              // $this->load->view('Collectionshome');
              $id= $this->input->post('iduser');
              $name= $this->input->post('name');
              $mail= $this->input->post('mail');
              $phone= $this->input->post('phone');
              $finalamount= $this->input->post('finalamount');
              $dat= $this->input->post('dat');
              $amount= $this->input->post('amount');
              $newdata= $this->input->post('new');
              
$time = strtotime($newdata);
$newdata = date('Y-m-d',$time);  

              $newcomment= $this->input->post('newcomment');
               $intnum= $this->input->post('intnum');
             echo $newcomment;
             echo $newdata;
            echo  $intnum;
            $this->load->model('Dbmodel');
            $this->Dbmodel->dueform($id,$name,$mail,$phone,$finalamount,$dat,$amount,$newdata,$newcomment,$intnum);       
            redirect(base_url() .'Managementcontrol/showdueall?id='.$id);
//              $this->load->view('vendorlist');
         
       }
       
       public function Vendorlist()
       {
          $this->load->view('procurementheader');
          $this->load->view('vendorlist');
         
          
          }
          
          public function creatematerial()
       {
          $this->load->view('procurementheader');
          $this->load->model('Dbmodel');
         $getvendor= $this->Dbmodel->getvendor();
         $data['vendor']=$getvendor; 
          $this->load->view('creatematerial',$data);
         
          
          }
          public function collpayment()
    {
               $this->load->view('Collectionheader');
               $this->load->model('Dbmodel');
               $payment= $this->Dbmodel->installment();
               $list= $this->Dbmodel->installmentlist(); 
                $duefollowup= $this->Dbmodel->duefollowup(); 
                $bal= $this->Dbmodel->bal(); 
                 $data['bal']=$bal;     
                 $data['duefollowup']=$duefollowup;       
               $data['view']=$payment;       
               $data['instlist']=$list;       
                $this->load->view('collpayment',$data);

    }
     public function checkduepayment()
    {
       $this->load->view('Salesheader');
    
        $iduser = $this->input->post('iduser');
        $name = $this->input->post('name');

        $mail = $this->input->post('mail');

        $phone = $this->input->post('phone');

        $finalamount = $this->input->post('finalamount');

//        $installment = $this->input->post('installment');
//        $installmentnum = $this->input->post('instabro');
//        $date = $this->input->post('date');
//        $installamount = $this->input->post('amountnow');
        $duedate = $this->input->post('duedate');

        $paidamount = $this->input->post('Amountnow');

        $refrenceno = $this->input->post('RefrenceNo');

        $payingdate = $this->input->post('dat');
        $time = strtotime($dat);
$dat = date('Y-m-d',$time);  
        $chequenumber = $this->input->post('Cheque');
        $bankname = $this->input->post('bankname');
        $descriptionpaying = $this->input->post('des');
        $paymentmethod = $this->input->post('paymenttype');
          $dueamount = $this->input->post('dueamount');
            $intnum = $this->input->post('intnum');
       

          $this->load->model('Dbmodel');

          $this->Dbmodel->insertpayduecollection($iduser,$name,$mail,$phone,$finalamount,$paidamount,$refrenceno,$payingdate,$chequenumber,$bankname,$descriptionpaying,$paymentmethod,$dueamount,$intnum);       
        
         // array values------

       
      //     $arr = explode(",",$install);

      //     $num =  count($arr);
      // echo $num;

      // for($i=0;$i<=$num;$i++){
      //   echo $arr[$i];
      // }
          // $dat = explode(",",$date);
          // $amo = explode(",",$amountnow);
          // $de = explode(",",$desicri);
          // foreach($arr as $user) {
          //   echo $user ;
          // }
          // foreach($dat as $user) {
          //   echo $user;
          // }
          // foreach($amo as $user) {
          //   echo $user;
          // }
          // foreach($de as $user) {
          //   echo $user;
          // }
          redirect(base_url() .'Managementcontrol/dueinstallment?id='.$iduser.'/'.$dueamount.'/'.$duedate);
//       $this->load->view('see');
    }
    public function dueinstallment()
   {
         $this->load->view('Collectionheader');
        $this->load->model('Dbmodel');
       $payment= $this->Dbmodel->installment();
       $paymentdue= $this->Dbmodel->payduecol();
       $list= $this->Dbmodel->installmentlist(); 
               $data['view']=$payment; 
                 $data['paydue']=$paymentdue; 
               $data['instlist']=$list;  
       $this->load->view('dueinstallmentoder',$data);
   }
   public function  duecheckinstallment()
    {
         $this->load->view('Collectionheader');
        //  echo "hello";
        $iduser= $this->input->post('iduser');  
          $name= $this->input->post('name');  
            $mail= $this->input->post('mail');  
              $number= $this->input->post('number');  
                $finalamount= $this->input->post('finalamount');  
                  $instabro= $this->input->post('instabro');  
                  $date= $this->input->post('date');  
                  $amountnow= $this->input->post('amountnow');  
                  $desicri= $this->input->post('desicri');  
                   $intnum= $this->input->post('intnum');  
                    $amount= $this->input->post('amount');  
                   $duedate= $this->input->post('duedate');  
//                  echo $iduser;
//                   echo $name; echo $mail;
//                    echo $finalamount; echo $number; echo $instabro; echo $date; echo $desicri;
       $this->load->model('Dbmodel');             
   $this->Dbmodel-> insertinstallment($iduser,$name,$mail,$number, $finalamount,$instabro,$date,$amountnow,$desicri,$intnum); 
          

          redirect(base_url() .'Managementcontrol/Invoicedue?id='.$iduser.'/'.$amount.'/'.$duedate);
          }


           public function Invoicedue()
          {
               $this->load->view('Collectionheader');
               $this->load->model('Dbmodel');
               $payment= $this->Dbmodel->installment();
               $list= $this->Dbmodel->installmentlist(); 
                 $paymentdue= $this->Dbmodel->payduecol();
      
                 $data['paydue']=$paymentdue; 
               $data['instlist']=$list;  
               $data['view']=$payment;       
                     
                $this->load->view('invociedue',$data);
            
          }  
         
 
 public function cmaterial()
          {
            $this->load->view('procurementheader');
          $name= $this->input->post('name');
        //  $meas=$this->input->post('meas');   
        
         $num= $this->input->post('num');            
         $vname=$this->input->post('vname');
          $phone=$this->input->post('phone');        
         $mail=$this->input->post('mail');
          
          $address=$this->input->post('address');
 $unit=$this->input->post('unit'); 
  $des=$this->input->post('des'); 
          
          $this->load->model('Dbmodel');
//  echo $name;
  // echo $meas;
  echo $num;
//  echo $vname;
  echo $phone;
  echo $mail;
  echo $address;
  echo 'hello world';
//  echo $unit;
//  echo $des;


          $this->Dbmodel->cmaterial($name,$num,$vname,$phone,$mail,$address,$unit,$des);
         redirect(base_url() .'Managementcontrol/Procurementhomes');
//            $this->load->view('materiallist');
//          $this->load->view('overdueform',$data);
          }
public function updatematerial()
          {
            $this->load->view('procurementheader');
             $id= $this->input->post('id');
          $name= $this->input->post('name');
         $meas=$this->input->post('meas');   
        
         $num= $this->input->post('num');            
         $vname=$this->input->post('vname');
          $phone=$this->input->post('phone');        
         $mail=$this->input->post('mail');
          
          $address=$this->input->post('address');
 $unit=$this->input->post('unit'); 
  $des=$this->input->post('des'); 
          
          $this->load->model('Dbmodel');
  
  echo $name;
  echo $meas;
  echo $num;
  echo $vname;
  echo $phone;
  echo $mail;
  echo $address;
  echo $unit;
  echo $des;
echo $id;

          $this->Dbmodel->updatematerial($name,$meas,$num,$vname,$phone,$mail,$address,$unit,$des,$id);
//         redirect(base_url() .'Managementcontrol/Procurementhomes');
            $this->load->view('materiallist');
          }
          public function updatestock()
        {
            $this->load->view('procurementheader');
             $id=$this->input->post('id');   
            
          // $idvregister= $this->input->post('idvregister');
         $Material=$this->input->post('Material');   
         $Quantity= $this->input->post('Quantity');            
         $Price=$this->input->post('Price');
         $Tax=$this->input->post('Tax');

          $Address=$this->input->post('Address');        
         $Phone=$this->input->post('Phone');
         $Vendor=$this->input->post('Vendor');
         $Email=$this->input->post('Email');
          $Date=$this->input->post('Date');
          
          $this->load->model('Dbmodel');
  echo $Material;
  echo $Quantity;
  echo $Price;
  echo $Tax;
  echo $Address;
  echo $Phone;
  echo $Vendor;
  echo $Email;
  echo $Date;
 


          $this->Dbmodel->updatestock($Material,$Quantity,$Price,$Tax,$Address,$Phone,$Vendor,$Email,$Date,$id);
          redirect(base_url() .'Managementcontrol/Procurementhomes');
          //  $this->load->view('materiallist');
          }

          public function updatevendor()
          {
//               $id = intval($_GET['id']);
              $this->load->view('procurementheader');
             $idvregister= $this->input->post('idvregister');
           $idvregister=$this->input->post('id');   
           $id= $this->input->post('id');    
           $name= $this->input->post('name');            
           $mail=$this->input->post('mail');
           $dat=$this->input->post('dat');
  
            $address=$this->input->post('address');        
           $num=$this->input->post('num');
           $aphone=$this->input->post('aphone');
           $hdate=$this->input->post('hdate');
           
//    echo $idvregister;
    
    echo $name;
    echo $mail;
    echo $dat;
    echo $address;
    echo $num;
    echo $aphone;
    echo $hdate;
    $this->load->model('Dbmodel');
    $this->Dbmodel->updatevendor($idvregister,$name,$mail,$dat,$address,$num,$aphone,$hdate,$id);
//            redirect(base_url() .'Managementcontrol/Procurementhomes');
              $this->load->view('materiallist');
            }

          public function vregister()
          {
            $this->load->view('procurementheader');
          // $idvregister= $this->input->post('idvregister');
         $name=$this->input->post('name');   
         $mail= $this->input->post('mail');            
         $dat=$this->input->post('dat');
         $time = strtotime($dat);
          $dat = date('Y-m-d',$time);  

         $address=$this->input->post('address');

          $num=$this->input->post('num');        
         $aphone=$this->input->post('aphone');
          
          $hdate=$this->input->post('mat');

          
          $this->load->model('Dbmodel');
  echo $name;
  echo $mail;
  echo $dat;
  echo $address;
  echo $num;
  echo $aphone;
  echo $hdate;
 


          $this->Dbmodel->vregister($name,$mail,$dat,$address,$num,$aphone,$hdate);
          redirect(base_url() .'Managementcontrol/Procurementhomes');
          
          }

          public function stockupload()
          {
            $this->load->view('procurementheader');
          // $idvregister= $this->input->post('idvregister');
         $Material=$this->input->post('Material');   
         $Quantity= $this->input->post('Quantity');            
         $Price=$this->input->post('Price');
         $Tax=$this->input->post('Tax');

          $Address=$this->input->post('Address');        
         $Phone=$this->input->post('Phone');
         $Vendor=$this->input->post('Vendor');
         $Email=$this->input->post('Email');
          $Date=$this->input->post('Date');
          
          $this->load->model('Dbmodel');
  echo $Material;
  echo $Quantity;
  echo $Price;
  echo $Tax;
  echo $Address;
  echo $Phone;
  echo $Vendor;
  echo $Email;
  echo $Date;
 


          $this->Dbmodel->stockupload($Material,$Quantity,$Price,$Tax,$Address,$Phone,$Vendor,$Email,$Date);
          redirect(base_url() .'Managementcontrol/Procurementhomes');
          // $this->load->view('materiallist');
          }
          // public function overdue()
          // {
          //            $this->load->view('Collectionheader');
          //            $this->load->model('Dbmodel');
          //            $payment= $this->Dbmodel->insertinstallment();
          //            $list= $this->Dbmodel->insertinstallment(); 
          //            $data['view']=$payment;       
          //            $data['instlist']=$install;       
          //             $this->load->view('overdueform',$data);
      
          // }
          public function overdue()
          {
            $this->load->view('Collectionheader');
              $this->load->model('Dbmodel');
              $installment= $this->Dbmodel->installmentlist();
              $pay= $this->Dbmodel->installment();
               $overduelist= $this->Dbmodel->overduelist();
               $duelist= $this->Dbmodel->duelist();
               $data['overduelist']=$overduelist; 
              $data['duelist']=$duelist;
              $data['installment']=$installment;
              $data['pay']=$pay; 
             $this->load->view('overdueform',$data);
            
          } 
          public function overduef()
          {
            $this->load->view('Collectionheader');
          // $idvregister= $this->input->post('idvregister');
         $iduser=$this->input->post('iduser');   
         $name= $this->input->post('name');            
         $mail=$this->input->post('mail');
         $phone=$this->input->post('phone');

          $finalamount=$this->input->post('finalamount');        
         $dat=$this->input->post('dat');
          $amount=$this->input->post('amount');
          $newdata=$this->input->post('num');
          $newcomment=$this->input->post('newcomment');
          $intnum=$this->input->post('intnum');
          $this->load->model('Dbmodel');
  echo $iduser;
  echo $name;
  echo $mail;
  echo $phone;
  echo $finalamount;
  echo $dat;
  echo $amount;
  echo $newdata;
  echo $newcomment;
  echo $intnum;


          $this->Dbmodel->dueform($iduser,$name,$mail,$phone,$finalamount,$dat,$amount,$newdata,$newcomment,$intnum);
          redirect(base_url() .'Managementcontrol/showoverduelist');
          // $this->load->view('overduelist');
          }
      public function showdueall()
          {
          
            $this->load->view('Collectionheader');
              $this->load->model('Dbmodel');
              $installment= $this->Dbmodel->descinst();
              $pay= $this->Dbmodel->installment();
               $overduelist= $this->Dbmodel->overduelist();
               $duelist= $this->Dbmodel->duelist();
                $duedate= $this->Dbmodel->duefollowup();
                 $duedateup= $this->Dbmodel->duedateup();
                  
                $data['duedateup']=$duedateup; 
                $data['duedat']=$duedate; 
               $data['overduelist']=$overduelist; 
              $data['duelist']=$duelist;
              $data['installment']=$installment;
              $data['pay']=$pay; 
               
                 $updue= $this->Dbmodel->updue(); 
                  $data['updue']=$updue; 
                
             
               
                 $payment= $this->Dbmodel->installment();
               $list= $this->Dbmodel->installmentlist(); 
                 $paymentdue= $this->Dbmodel->payduecol();
      
                 $data['paydue']=$paymentdue; 
               $data['instlist']=$list;  
               $data['view']=$payment;
             $this->load->view('showalldue',$data);
            
          } 

          public function showoverdue()
          {
            $this->load->view('Collectionheader');
              $this->load->model('Dbmodel');
               $installment= $this->Dbmodel->installmentlist();
              $pay= $this->Dbmodel->installment();
               $overduelist= $this->Dbmodel->overduelist();
               $duelist= $this->Dbmodel->duelist();
                $duedate= $this->Dbmodel->duefollowup();
                 $duedateup= $this->Dbmodel->duedateup();
                $data['duedateup']=$duedateup; 
                $data['duedat']=$duedate; 
               $data['overduelist']=$overduelist; 
              $data['duelist']=$duelist;
              $data['installment']=$installment;
              $data['pay']=$pay; 
              
       
             $this->load->view('showoverdue',$data);
            
          } 
          public function overduepay()
          {
                     $this->load->view('Collectionheader');
                     $this->load->model('Dbmodel');
                     $payment= $this->Dbmodel->installment();
                     $list= $this->Dbmodel->installmentlist(); 
                     $data['view']=$payment;       
                     $data['instlist']=$list;       
                      $this->load->view('overduepay',$data);
      
          }

          public function overduepaym()
    {
       $this->load->view('Collectionheader');
      
        $iduser = $this->input->post('iduser');
        $name = $this->input->post('name');

        $mail = $this->input->post('mail');

        $phone = $this->input->post('phone');

        $finalamount = $this->input->post('finalamount');
        $amount = $this->input->post('amount');
        $Amountnow = $this->input->post('Amountnow');

        $RefrenceNo = $this->input->post('RefrenceNo');

        $dat = $this->input->post('dat');
        $Cheque = $this->input->post('Cheque');
        $bankname = $this->input->post('bankname');
        $des = $this->input->post('des');
        $paymenttype = $this->input->post('paymenttype');
          $dueamount = $this->input->post('dueamount');

       

          $this->load->model('Dbmodel');

          $this->Dbmodel->overduepay($iduser,$name,$mail,$phone,$finalamount,$amount,$Amountnow,$RefrenceNo,$dat,$Cheque,$bankname,$des,$paymenttype,$dueamount);       
        
          redirect(base_url() .'Managementcontrol/dueinstallment?id='.$iduser);

    }
          
    public function materiallist()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getmaterial();
       $data['material']=$successdata;
       $this->load->view('materiallist',$data);
    }
    public function vendorll()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getvendor();
       $data['vendor']=$successdata;
       $successdata= $this->Dbmodel->getmaterial();
       $data['material']=$successdata;
       $this->load->view('vendorll',$data);
    }
    public function stocklist()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getstockup();
       $allstock= $this->Dbmodel->allstock();
       $rel= $this->Dbmodel->rel();
       $data['allstock']=$allstock;
       $data['rel']=$rel;
       $data['stock']=$successdata;
      
       $this->load->view('stocklist',$data);
    }
    public function materiallistview()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getmaterial();
       $data['material']=$successdata;
       $this->load->view('materiallistview',$data);
    }
    public function materiallistedit()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getmaterial();
       $data['material']=$successdata;
       $this->load->view('materiallistedit',$data);
    }
    public function vendorlistedit()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getvendor();
       $data['vendor']=$successdata;
       $successdata= $this->Dbmodel->getmaterial();
       $data['material']=$successdata;
       $this->load->view('vendorlistedit',$data);
    }
    public function vendorlistview()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getvendor();
       $data['vendor']=$successdata;
       $this->load->view('vendorlistview',$data);
    }
    public function stocklistedit()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getstockup();
       $data['stock']=$successdata;
       $this->load->view('stocklistedit',$data);
    }
    public function stocklistview()
    {
       $this->load->view('procurementheader');
       $this->load->model('Dbmodel');
       $successdata= $this->Dbmodel->getstockup();
       $data['stock']=$successdata;
       $this->load->view('stocklistview',$data);
    }
    public function  materialinsert()
    {
         $this->load->view('Salesheader');
          echo "hello";
        $iduser= $this->input->post('id');  
          $name= $this->input->post('name');  
            $mail= $this->input->post('mail');  
              $number= $this->input->post('phone');  
                $sno= $this->input->post('sno');  
                  $material= $this->input->post('material');  
                  $quantity= $this->input->post('quantity');  
                  $date= $this->input->post('date');  
                                                  
       $this->load->model('Dbmodel');             
   $this->Dbmodel-> insertmaterialreq($iduser,$name,$mail,$number, $sno,$material,$quantity,$date); 
          

            redirect(base_url() .'Managementcontrol/materialrequired?id='.$iduser);

  
      
        }
        function getnowdata()
	{
		$this->load->view('live');
	}

function fetchven()
 {
  $output = '';
  $query = '';
  $this->load->model('Dbmodel');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->Dbmodel->fetchven($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Customer Name</th>
       <th>Address</th>
       <th>City</th>
       <th>Postal Code</th>
       <th>Country</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->name.'</td>
       <td>'.$row->mail.'</td>
       <td>'.$row->comment.'</td>
       <td>'.$row->pname.'</td>
       <td>'.$row->design.'</td>
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 public function realeasedstock()
 {
    $this->load->view('procurementheader');
    $this->load->model('Dbmodel');
    $successdata= $this->Dbmodel->realeased();
    $data['real']=$successdata;
    $this->load->view('realeasedstock',$data);
 }
 
 public function procinvoice()
 {
      $this->load->view('procurementheader');
      $this->load->model('Dbmodel');
      $payment= $this->Dbmodel->installment();
      $list= $this->Dbmodel->installmentlist(); 
        $paymentdue= $this->Dbmodel->payduecol();

        $data['paydue']=$paymentdue; 
      $data['instlist']=$list;  
      $data['view']=$payment;       
            
       $this->load->view('procinvoice',$data);
   
 }  
 public function showdesgin(){
           $this->load->view('designerheader');
           $this->load->model('Dbmodel');
     $success= $this->Dbmodel->displayfollowups();
      $successdata= $this->Dbmodel->oderstable();
       $design= $this->Dbmodel->displaydesginerwork();
      $data['designwork']=$design; 
    $data['viewfollowups']=$successdata; 
    $data['viewfollow']=$success;
            $this->load->view('showdesginer',$data);


 }
 
}

