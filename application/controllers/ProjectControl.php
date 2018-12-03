<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjectControl
 *
 * @author Pavithra
 */
class ProjectControl extends CI_Controller  {
    
    
    public function hello()
    {
            echo "hello";
		
              
    }
     
    
    public function ongoingproject()
    {
            $this->load->view('UserHeader');
            $this->load->model('Dbmodel');
            $pType='OP';
                $projList= $this->Dbmodel->displayProjectListByType($pType);
                $data['projList']=$projList;
		$this->load->view('ongoinprojectpage',$data);
                
                $this->load->view('UserFooter');
    }
    
    public function finishedproject()
    {
            $this->load->view('UserHeader');
             $this->load->model('Dbmodel');
            $pType='FP';
                $projList= $this->Dbmodel->displayProjectListByType($pType);
                $data['projList']=$projList;
		$this->load->view('finishedprojectpage',$data);
                $this->load->view('UserFooter');
    }
    
    public function upcomingproject()
    {
           $this->load->view('UserHeader');
            $this->load->model('Dbmodel');
            $pType='UP';
                $projList= $this->Dbmodel->displayProjectListByType($pType);
                $data['projList']=$projList;
		$this->load->view('upcomingprojectpage',$data);
                $this->load->view('UserFooter');
    }
    
    public function contactus()
    {
            $this->load->view('UserHeader');
		$this->load->view('contactpage');
                $this->load->view('UserFooter');
    }
    
    public function aboutus()
    {
          $this->load->view('UserHeader');
		$this->load->view('aboutuspage');
                $this->load->view('UserFooter');
    }
    public function showSliders()
    {
        
          $this->load->model('Dbmodel');
         $sliders= $this->Dbmodel->displaySliders();
         $data['sliderlist']=$sliders;
            $this->load->view('managerHeader'); 
            $this->load->view('SlidersList',$data); 
    }
    
    public function whatWeDoList()
    {
         $this->load->view('managerHeader'); 
           $this->load->model('Dbmodel');
         $slidersdata= $this->Dbmodel->displayWhatWeDoList();
         $data['sliderslist']=$slidersdata;
         $this->load->view('WhatWeDoList',$data); 
    }
    
    public function showProjectsList()
    {
         $this->load->view('managerHeader');
         $this->load->model('Dbmodel');
          $projectssdata= $this->Dbmodel->displayProjectsList();
         $data['projectslist']=$projectssdata;
         $this->load->view('ProjectsList',$data); 
    }
    
    public function ourProcessList()
    {
        $this->load->view('managerHeader'); 
         $this->load->model('Dbmodel');
        $processList =$this->Dbmodel->displayProcessList();
        
        $data['processdata']=$processList ;
         $this->load->view('OurProcessList',$data); 
    }
   
   public function do_uploader()
        {
            
            
            $this->load->helper(array('form', 'url')); 
          
          $config['upload_path']   = './img_uploads/'; 
      
         $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 4000;
         $this->load->library('upload',$config);
          $imgtitle= $this->input->post('certificateName');
        $imgdesc=$this->input->post('Desc');
         $error = array('error' => $this->upload->display_errors()); 
                         
         if ( ! $this->upload->do_upload('userfile')) {
           
             var_dump($error);
            $this->load->view('uploadform',$error); 
         }
         
        
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
          $upload_data=  $this->upload->data();
           
            $imgpath="img_uploads/".$upload_data['file_name'];
           $fileData=array(
        'IMGTITLE' => $imgtitle,
        'IMGDESC' => $imgdesc,
        'IMGPATH'  =>$imgpath,
                
           );
             $this->load->model('Dbmodel');
            $this->Dbmodel->insertimageData($fileData);
            $data['uploadimginfo']=$upload_data;
            $data['fileinfo']=$fileData;
        $this->session->set_flashdata('status','Uploaded Successfully');
             redirect(base_url() . 'ProjectControl/showSliders');
         }   
        }
        
        public function deleteImageSlider()
        {
             $imageId=$this->input->get('imageId');
             $fileName=$this->input->get('fileName');
              $this->load->model('Dbmodel');
              $imageinfo=$this->Dbmodel->getImageSliderId($imageId);
             if($this->Dbmodel->deleteSliderById($imageId,$fileName))
             {
               $imagepath ='./'.$imageinfo[0]->IMGPATH;
               
                // unlink('filepath');
                 unlink($imagepath);
                 $this->session->set_flashdata('status','Deleted Successfully');
             redirect(base_url() . 'ProjectControl/showSliders');
             }
             else
             {
                 $this->session->set_flashdata('status','Failure in Deletion');
             redirect(base_url() . 'ProjectControl/showSliders');
             }
        }
        
        public function whatWeDoUploader()
        {
             $this->load->helper(array('form', 'url')); 
               $config['upload_path']   = './img_uploads/'; 
      
         $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 2000;
         $this->load->library('upload',$config);
          $imgtitle= $this->input->post('certificateName');
        $imgdesc=$this->input->post('Desc');
         $error = array('error' => $this->upload->display_errors()); 
                         
         if ( ! $this->upload->do_upload('userfile')) {
           
             var_dump($error);
            $this->load->view('uploadform',$error); 
         }
         
        
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
          $upload_data=  $this->upload->data();
           
            $imgpath="img_uploads/".$upload_data['file_name'];
           $fileData=array(
        'IMGTITLE' => $imgtitle,
        'IMGDESC' => $imgdesc,
        'IMGPATH'  =>$imgpath,
                
           );
             $this->load->model('Dbmodel');
            $this->Dbmodel->insertWhatWeDoData($fileData);
            $data['uploadimginfo']=$upload_data;
            $data['fileinfo']=$fileData;
        $this->session->set_flashdata('status','Uploaded Successfully');
             redirect(base_url() . 'ProjectControl/whatWeDoList');
         }   
        }
        
        public function deleteWhatWeDo()
        {
              $imageId=$this->input->get('imageId');
             $fileName=$this->input->get('fileName');
              $this->load->model('Dbmodel');
              $imageinfo=$this->Dbmodel->getwhatwedoById($imageId);
             if($this->Dbmodel->deletewhatwedobyid($imageId,$fileName))
             {
               $imagepath ='./'.$imageinfo[0]->IMGPATH;
                unlink($imagepath);
               $this->session->set_flashdata('status','Deleted Successfully');
             redirect(base_url() . 'ProjectControl/whatWeDoList');
             }
             else
             {
                 $this->session->set_flashdata('status','Failure in Deletion');
             redirect(base_url() . 'ProjectControl/whatWeDoList');
             }
        }
        
        public function ProjectUploader()
        {
             $this->load->helper(array('form', 'url')); 
               $config['upload_path']   = './img_uploads/'; 
      
         $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 2000;
         $this->load->library('upload',$config);
          $imgtitle= $this->input->post('certificateName');
          $typeofProject=$this->input->post('typeofProject');
          $itemtype=$this->input->post('itemtype');
        $imgdesc=$this->input->post('Desc');
         $error = array('error' => $this->upload->display_errors()); 
                         
         if ( ! $this->upload->do_upload('userfile')) {
           
             var_dump($error);
            $this->load->view('uploadform',$error); 
         }
         
        
			
         else { 
            $data = array('upload_data' => $this->upload->data()); 
          $upload_data=  $this->upload->data();
           
            $imgpath="img_uploads/".$upload_data['file_name'];
           $fileData=array(
        'IMGTITLE' => $imgtitle,
        'IMGDESC' => $imgdesc,
        'IMGPATH'  =>$imgpath,
         'PRJTYPE' => $typeofProject,
          'ITEMTYPE' => $itemtype   
                
           );
             $this->load->model('Dbmodel');
            $this->Dbmodel->insertProjectData($fileData);
            $data['uploadimginfo']=$upload_data;
            $data['fileinfo']=$fileData;
        $this->session->set_flashdata('status','Uploaded Successfully');
             redirect(base_url() . 'ProjectControl/showProjectsList');
         }   
        }
        
        public function ViewProjectsListByType()
        {
          $typeofProject=$this->input->post('typeofProject');
          
          $this->load->model('Dbmodel');
          $projList= $this->Dbmodel->displayProjectListByType($typeofProject);
          $data['projList']=$projList;
           $this->load->view('managerHeader'); 
         $this->load->view('OurProjectsListByType',$data); 
        }
        
        public function deleteProjectById()
        {
             $imageId=$this->input->get('imageId');
             $fileName=$this->input->get('fileName');
              $this->load->model('Dbmodel');
               $imageinfo=$this->Dbmodel->getProjectById($imageId);
             if($this->Dbmodel->deleteProjectById($imageId,$fileName))
             {
              $imagepath ='./'.$imageinfo[0]->IMGPATH;
               
                // unlink('filepath');
                 unlink($imagepath);
               $this->session->set_flashdata('status','Deleted Successfully');
             redirect(base_url() . 'ProjectControl/showProjectsList');
             }
             else
             {
                 $this->session->set_flashdata('status','Failure in Deletion');
             redirect(base_url() . 'ProjectControl/showProjectsList');
             }
        }
        
        public function doUploadProcess()
        {
            $name=$this->input->post('name');
            $Desc=$this->input->post('Desc');
              $processData=array(
        'name' => $name,
        'Description' => $Desc,
        
           );
               $this->load->model('Dbmodel');
               $this->Dbmodel->insertProcessData($processData);
               $this->session->set_flashdata('status','Uploaded Successfully');
             redirect(base_url() . 'ProjectControl/ourProcessList');
               
        }  
        
        public function deleteProcessId()
        {
            $pid=$this->input->get('pid');
            $this->load->model('Dbmodel');
             if($this->Dbmodel->deleteProcessById($pid))
             {
               $this->session->set_flashdata('status','Deleted Successfully');
             redirect(base_url() . 'ProjectControl/ourProcessList');
             }
             else
             {
                 $this->session->set_flashdata('status','Failure in Deletion');
             redirect(base_url() . 'ProjectControl/ourProcessList');
             }
        }
        public function showQuotationForm()
        {
        
        
        
            $this->load->view('managerHeader');
	
		   
           $this->load->model('Dbmodel');
         $quatationdata= $this->Dbmodel->displayquotation();
         $data['quationlist']=$quatationdata;
         $this->load->view('empInvoice',$data);
	
	      
        }
        
        public function SaveInvoiceForm()
        {
              $uname=$this->input->post('uname');
              $umobile=$this->input->post('umobile');
              $uinvoice=$this->input->post('uinvoice');
              $pamt=$this->input->post('pamt');
              $date=$this->input->post('date');
              $refno=$this->input->post('refno');
              $balnce=$this->input->post('balnce');
                 $this->load->model('Dbmodel');
                  $empInvoiceInfo=array(
        'name' => $uname,
        'mobileno' => $umobile,
        'invoiceamount'  =>$uinvoice,
         'paidamt' => $pamt,
          'date' => $date,
            'referenceno' => $refno,            
            'balance' => $balnce,  
          
           );
                 $this->Dbmodel->saveEmpInvoiceData($empInvoiceInfo);
                  $this->session->set_flashdata('quotationstatus','Successfully Quotation submitted ');
                 
              redirect(base_url() . 'ProjectControl/showQuotationForm');
            
              
            $this->load->view('managerHeader'); 
                $this->load->view('mamagerHome'); 
        }
        
        public  function showManagerHome()
        {
            $this->load->view('managerHeader'); 
                $this->load->view('mamagerHome');   
        }
     
        
    
}
