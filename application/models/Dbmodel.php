  <?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbmodel
 *
 * @author Pavithra
 */
class Dbmodel  extends CI_Model{
    //put your code here
    
    public function saveCustomerData($data)
            
    {
         $this->db->insert("customerregister",$data);
    }
    
    public function canCustomerLogin($custMob,$custPass)
            
    {
        $this->db->where('mobileno',$custMob);
		$this->db->where('pwd',$custPass);
		$query=$this->db->get('customerregister');
                return $query->result();
    }
    
    public function canManagerLogin($email,$pass)
            
    {
                $this->db->where('mail',$email);
		        $this->db->where('pass',$pass);
                $query=$this->db->get('register');
                return $query->result();
                
    }public function code($name,$email){
        $this->db->where('name',$name);
        $this->db->where('mail',$email);
        $query = $this->db->get('code');
        return $query->result();
    }
    public function getcode($code)
            
    {
                $this->db->where('code',$code);
                $query=$this->db->get('code');
                return $query->result();
                
    }
    
    
     public function insertimageData($imginfo)
             
    {
       $this->db->insert("imageslider",$imginfo);
  
    }
    
    public function displaySliders()
            
    {
         $query=$this->db->get('imageslider');
		return $query->result();
                
    }
    
   
    
    public function deleteSliderById($sliderId,$slidername)
            
    {
        //echo "slider id ".$sliderId." slider name ".$slidername;
       $this->db->where('imgid', $sliderId);
        $this->db->where('IMGTITLE', $slidername);
    return $this->db->delete('imageslider'); 
    
    }
    
      public function getImageSliderId($sliderId)
              
    {
          
        $this->db->where('imgid', $sliderId);
        $query=$this->db->get('imageslider');
		return $query->result();  
                
    }
    
    public function insertWhatWeDoData($whatwedoinfo)
            
    {
        
          $this->db->insert("whatwedo",$whatwedoinfo);
          
    }
    
    public function displayWhatWeDoList()       
    {
           $query=$this->db->get('whatwedo');
		return $query->result();  
    }
//    public function adminLogin()       
//    {
//           $query=$this->db->get('code');
//		return $query->result();  
//    }
    
    public function  updateenqirypageone($name,$mail,$dat,$comment,$pname,$distance,$optradio,$design,$villa,$phone,$aphone,$fdat,$delivery,$site,$img,$plots,$hdate,$id)
     {           
            $sql="UPDATE  enquiryone SET `name`='$name',`mail`='$mail',`dat`='$dat',`comment`='$comment',`pname`='$pname',`distance`='$distance',`optradio`='$optradio',`design`='design',`villa`='$villa',`phone`='$phone',`aphone`='$aphone',`fdat`='$fdat',`delivery`='$delivery',`site`='$site',`img`='$img',`plots`='$plots',`hdate`='$hdate' WHERE `idenquirylist`=$id";
             $this->db->query($sql);

    }
    public function  quatationdata($iduser,$name,$mail,$phone,$comment,$qua,$newdata,$newcomment,$work)
    {
        echo $iduser;
       $sql="UPDATE  quotationtable SET `iduser`='$iduser',`name`='$name',`mail`='$mail',`number`='$phone',`comment`='$comment',`qua`='$qua',`newdata`='$newdata',`newcomment`='$newcomment',`work`='$work' WHERE `iduser`= $iduser";
            $this->db->query($sql);

   }
    //     public function  quatationupdate($iduser,$name,$mail,$phone,$comment,$qua,$newdata,$newcomment,$id)
    //  {
             
    //          $sql=" UPDATE  quotationtable SET `iduser`='$iduser',`name`='$name',`mail`='$mail',`number`='$phone',`comment`='$comment',`qua`='$qua',`newdata`='$newdata',`newcomment`='$newcomment'  WHERE `iduser`= $id";
            
    //          $this->db->query($sql);

    // } public function  quatationupdate($iduser,$name,$mail,$phone,$comment,$qua,$newdata,$newcomment,$id)
    //  {
             
    //          $sql=" UPDATE  quotationtable SET `iduser`='$iduser',`name`='$name',`mail`='$mail',`number`='$phone',`comment`='$comment',`qua`='$qua',`newdata`='$newdata',`newcomment`='$newcomment'  WHERE `iduser`= $id";
            
    //          $this->db->query($sql);

    // }
     public function inserttmaterialrecieved($iduser,$name,$mail,$phone,$material,$quantity,$dat)
     {
            $sql="insert into materialrequired(`iduser`,`name`,`mail`,`phone`,`material`,`quantity`,`dat`)VALUES ('$iduser','$name','$mail','$phone','$material','$quantity','$dat')";
             
             $this->db->query($sql);

    }
    public function inserttmaterialrequried($material,$Quantity,$date)  
     {
            $sql="insert into materialrequired(`material`,`Quantity`,`date`)VALUES ('$material','$Quantity','$date')";
             
             $this->db->query($sql);

    }
        public function displaymaterialrequried()
            
    {
        $query=$this->db->get('materialrequired');
		return $query->result();
    }
      public function displaymaterialrecieved()
            
    {
        $query=$this->db->get('materialrecived');
		return $query->result();
    }
    
    public function deletewhatwedobyid($sliderId,$slidername)
            
    {
        $this->db->where('imgid', $sliderId);
        $this->db->where('IMGTITLE', $slidername);
    return $this->db->delete('whatwedo'); 
    
    }
    
     public function getwhatwedoById($sliderId)
             
    {
        $this->db->where('imgid', $sliderId);
        $query=$this->db->get('whatwedo');
		return $query->result();  
    }
    
    
    public function displayProjectsList()
            
    {
        $query=$this->db->get('project');
		return $query->result();
    }
    
    public function insertProjectData($projData)
            
    {
        $this->db->insert("project",$projData);  
    }
    
    public function displayProjectListByType($projtype)
    
    {
        
         $this->db->where('PRJTYPE', $projtype);
            $query=$this->db->get('project');
                return $query->result();
    }
    
    public function deleteProjectById($sliderId,$slidername)
            
    {
        $this->db->where('idproject', $sliderId);
        $this->db->where('IMGTITLE', $slidername);
        return $this->db->delete('project');  
    }
    
     public function getProjectById($sliderId)
             
    {
        $this->db->where('idproject', $sliderId);
        $query=$this->db->get('project');
		return $query->result();  
                
    }
    
    public function displayProcessList()
            
    {
              $query=$this->db->get('ourprocess');
		return $query->result(); 
    }
    
    public function insertProcessData($processData)
            
    {
        $this->db->insert("ourprocess",$processData);   
    }
    
    public function deleteProcessById($processId)
            
    {
        $this->db->where('id', $processId);
      
        return $this->db->delete('ourprocess');  
    }
    
    public function getEmpInvoiceInfoByMob($mobInfo)
   
    {
           $this->db->where('mobileno', $mobInfo);
      
       $query=$this->db->get('empinvoice');
                return $query->result();
    }
    
    public function saveEmpInvoiceData($invoiceInfo)
            
    {
          $this->db->insert("empinvoice",$invoiceInfo);   
    }
    
     public function saveSalesData($invoiceInfo)
             
    {
          $this->db->insert("empinvoice",$invoiceInfo);   
    }
//    public function  insertenqiry($name,$phn,$Email,$Aphn,$date,$fdate,$msg,$pname,$Edel,$dis,$web,$squat,$designer,$cvilla,$nvilla,$hdate,$scope,$flring,$loose,$metal,$kit,$bthrmft,$wrdrb,$hddate,$flrmts,$wdwrk,$pop,$curt,$ltg,$elect,$req)
//    {
//          $sql="insert into enquirylist(`name`,`phn`,`email`,`aphone`,`date`,`fdate`,`msg`,`pname`,`edate`,`dis`,`web`,`squatation`,`designer`,`cvilla`,`nvilla`,`hdate`,`scope`,`flooring`,`loose`,`metal`,`kit`,`bathroom`,`wardrobes`,`handover`,`floormat`,`woodwork`,`pop`,`curtains`,`lighting`,`electrical`,`requirement`)VALUES ('$name','$phn','$Email','$Aphn','$date','$fdate','$msg','$pname','$Edel','$dis','$web','$squat','$designer','$cvilla','$nvilla','$hdate','$scope','$flring','$loose','$metal','$kit','$bthrmft','$wrdrb','$hddate','$flrmts','$wdwrk','$pop','$curt','$ltg','$elect','$req')";
//                $this->db->query($sql);
//
//    }
         public function  insertdesgin($iduser,$name,$email,$phone,$work,$finalval,$data)
     {
         
             $sql="insert into desginerwork(`iduser`,`name`,`email`,`phone`,`work`,`finalval`,`data`)VALUES ('$iduser','$name','$email','$phone','$work','$finalval','$data')";
                $this->db->query($sql);

    }
    // public function updatedesginall($iduser,$name,$email,$phone,$comment,$qua,$newdata,$comment,$nowwork)
    //  {
    //     $sql=" UPDATE  quotationtable SET `iduser`='$iduser',`name`='$name',`mail`='$email',`number`='$phone',`comment`='$comment',`qua`='$qua',`newdata`='$newdata',`newcomment`='$comment',`work`='$nowwork' WHERE `userid`=$iduser";
    //             $this->db->query($sql);
    // }
    public function updatedesginall($iduser,$name,$email,$phone,$comment,$qua,$newdata,$newcomment,$nowwork)
    {
           $sql="insert into quotationtable(`iduser`,`name`,`mail`,`number`,`comment`,`qua`,`newdata`,`newcomment`,`work`)VALUES ('$iduser','$name','$email','$phone','$comment','$qua','$newdata','$newcomment','$nowwork')";
            
            $this->db->query($sql);
    }
     public function  insertenqirypageone($name,$mail,$dat,$comment,$pname,$distance,$optradio,$design,$villa,$phone,$aphone,$fdat,$delivery,$site,$img,$plots,$hdate)
     {
             $sql="insert into enquiryone(`name`,`mail`,`dat`,`comment`,`pname`,`distance`,`optradio`,`design`,`villa`,`phone`,`aphone`,`fdat`,`delivery`,`site`,`img`,`plots`,`hdate`)VALUES ('$name','$mail','$dat','$comment','$pname','$distance','$optradio','$design','$villa','$phone','$aphone','$fdat','$delivery','$site','$img','$plots','$hdate')";
                $this->db->query($sql);

    }
    
         public function insertpayment($iduser,$name,$finalamount,$balance,$installment,$amountnow,$refrenceno,$paymenttype,$dat,$cheque,$bankname,$des,$newdate,$phonenum)
     {
           
             $sql="insert into confromoder(`iduser`,`name`,`finalamount`,`balance`,`installment`,`amountnow`,`refrenceno`,`paymenttype`,`date`,`cheque`,`bankname`,`des`,`newdate`,`phonenum`)VALUES ('$iduser','$name','$finalamount','$balance','$installment','$amountnow','$refrenceno','$paymenttype','$dat','$cheque','$bankname','$des','$newdate','$phonenum')";
             $this->db->query($sql);
              

    }

//    public function  insertenqirypagetwodata($iduser,$scope,$flooring,$loose,$metal,$recipient,$message)
//     {
//        
//            //    print_r($recipient);
//
//        //  print_r($message);
//        //  var_dump($recipient);
//        //  var_dump($message);
//        $num = count($message);
//        // echo $num;
//         echo "worlds";
//        for($i=0;$i<$num;$i++){       
//            $rec = $recipient[$i];
//            $mess = $message[$i];   
//            // echo $rec;
//            // echo  $mess;
//            // echo "<br/>";
//             $sql="insert into enquirytwo(`iduser`,`scope`,`flooing`,`loose`,`metal`,`material`,`quantity`)VALUES ('$iduser','$scope','$flooring','$loose','$metal','$rec','$mess')";
//                $this->db->query($sql);
//        }
//
//    }
//    public function  insertenqirypagetwodata($iduser,$scope,$flooring,$loose,$metal,$recipient,$message)
//     {
//        
//            //    print_r($recipient);
//
//        //  print_r($message);
//        //  var_dump($recipient);
//        //  var_dump($message);
//        $num = count($message);
//        // echo $num;
//       
//        for($i=0;$i<$num;$i++){       
//            $rec = $recipient[$i];
//            $mess = $message[$i];   
//            // echo $rec;
//            // echo  $mess;
//            // echo "<br/>";
//             $sql="insert into enquirytwo(`iduser`,`scope`,`flooring`,`loose`,`metal`,`material`,`quantity`)VALUES ('$iduser','$scope','$flooring','$loose','$metal','$rec','$mess')";
//                $this->db->query($sql);
//        }
//
//    }
//  public function  insertenqirypagetwodata($iduser,$scope,$flooring,$loose,$metal,$Kitchen,$Bathroomfittings,$Wardrobes,$FloorMats,$woodwork,$pop,$curtains,$Lightings,$electrical,$requirements,$category)
//     {
//             $sql="insert into enquirytwo(`iduser`,`scope`,`flooring`,`loose`,`metal`,`Kitchen`,`Bathroomfittings`,`Wardrobes`,`FloorMats`,`woodwork`,`pop`,`curtains`,`Lightings`,`electrical`,`requirements`,`category`)VALUES ('$iduser','$scope','$flooring','$loose','$metal','$Kitchen','$Bathroomfittings','$Wardrobes','$FloorMats','$woodwork','$pop','$curtains','$Lightings','$electrical','$requirements','$category')";
//                $this->db->query($sql);
//
//    }
    public function  insertenqirypagetwodata($iduser,$scope,$flooring,$loose,$metal,$material,$quantity)
     {
        $arr = explode(",",$material);
        $install = explode(",",$quantity);
        print_r($arr);
         $num = count($arr);
          for($i=0;$i<$num;$i++){       
          $rec = $arr[$i];
           $mess = $install[$i];   
             $sql="insert into enquirytwo(`iduser`,`scope`,`flooring`,`loose`,`metal`,`material`,`quantity`)VALUES ('$iduser','$scope','$flooring','$loose','$metal','$rec','$mess')";  
             $this->db->query($sql);

    }
     }

     public function  insertenqirynextpage($name,$mail,$dat,$comment,$pname,$distance,$optradio,$design,$villa,$phone,$aphone,$fdat,$delivery,$site,$img,$plots,$hdate,$scope,$flooring,$loose,$metal,$Kitchen,$Bathroomfittings,$Wardrobes,$FloorMats,$woodwork,$pop,$curtains,$Lightings,$electrical,$requirements,$category)
     {
             $sql="insert into enquirylist(`name`,`mail`,`dat`,`comment`,`pname`,`distance`,`optradio`,`design`,`villa`,`phone`,`aphone`,`fdat`,`delivery`,`site`,`img`,`plots`,`hdate`,`scope`,`flooring`,`loose`,`metal`,`Kitchen`,`Bathroomfittings`,`Wardrobes`,`FloorMats`,`woodwork`,`pop`,`curtains`,`Lightings`,`electrical`,`requirements`,`category`)VALUES ('$name','$mail','$dat','$comment','$pname','$distance','$optradio','$design','$villa','$phone','$aphone','$fdat','$delivery','$site','$img','$plots','$hdate','$scope','$flooring','$loose','$metal','$Kitchen','$Bathroomfittings','$Wardrobes','$FloorMats','$woodwork','$pop','$curtains','$Lightings','$electrical','$requirements','$category')";
                $this->db->query($sql);

    }
     public function  insertfollowupdata($iduser,$name,$mail,$sendquatation,$newdata,$newcomment,$comment,$dat,$phone)
     {
             $sql="insert into followupform(`iduser`,`name`,`mail`,`sendquatation`,`newdata`,`newcomment`,`comment`,`dat`,`phone`)VALUES ('$iduser','$name','$mail','$sendquatation','$newdata','$newcomment','$comment','$dat','$phone')";
                $this->db->query($sql);

    }
    
    public function paymentlistdata($iduser)
    {
          $this->db->where('iduser', $iduser);
          $query=$this->db->get('confromoder');
               return $query->result();  
    }

    // public function insertdataoder($iduser,$name,$mail,$phone,$finalamount,$installment,$installmentnum, $date,$installamount,$description,$paidamount,$refrenceno,$payingdate,$chequenumber,$bankname,$descriptionpaying,$paymentmethod)

    // {
    //     $arr = explode(",",$install);
    //     $dat = explode(",",$date);
    //     $installamount = explode(",",$amountnow);
    //     $de = explode(",",$desicri);
    //     $num =  count($arr);
    // for($i=0;$i<=$num;$i++){
    //     $installmentnum= $arr[$i];
    //     $date= $dat[$i];
    //     $amountnow= $amo[$i];
    //     $description= $de[$i];
    //     $sql="insert into conformtablenow(`iduser`,`name`,`mail`,`phone`,`finalamount`,`installment`,`installmentnum`,`date`,`installamount`,`description`,`paidamount`,`refrenceno`,`payingdate`,`chequenumber`,`bankname`,`descriptionpaying`,`paymentmethod`)VALUES ('$iduser','$name','$mail','$phone','$finalamount','$installment','$installmentnum','$date','$installamount','$description','$paidamount','$refrenceno','$payingdate','$chequenumber','$bankname','$descriptionpaying','$paymentmethod')";
        
    //     $this->db->query($sql);

    // }
    // }
    public function getconfromoder()
	{
        $sql="SELECT * FROM `confromoder` WHERE idconfromoder in (SELECT MAX(idconfromoder) FROM confromoder GROUP BY iduser) AND balance <> 0 ";
          return $this->db->query($sql)->result();
		
    }
    public function confrom()
    {
        $sql="select * from confromoder group by iduser";
          return $this->db->query($sql)->result();
    }

    public function confromcom()
    {
        $sql="SELECT * FROM `confromoder` WHERE balance =0 ";
          return $this->db->query($sql)->result();
    }
    
     public function displayEnquiry()
    {
           $query=$this->db->get('enquirylist');
	   return $query->result();  
    }
        
     public function displayEnquiryone()
    {
           $query=$this->db->get('enquiryone');
	   return $query->result();  
    }
     public function insertdesignData($fileData)
             
    {
       $this->db->insert("fileupload",$fileData);
  
   
    }
      public function displaydesigndata()
    {
           $query=$this->db->get('fileupload');
	   return $query->result();  
    }
    public function DisplayDesignDataByUserId()
    {
         $sql="select * from fileupload group by userid";
               return $this->db->query($sql)->result();
    }
    
     public function getfollowupdataUserId()
    {
       $query=$this->db->get('followupform');
	   return $query->result();
    }
    
    
     public function displayfollowups()
    {
        $query=$this->db->get('enquiryone');
	   return $query->result();  
    }
     function displayfollow($nowdate){
    $this->db->where('design', $nowdate);
    $this->db->delete('enquiryone');
    }
    public function displayfollowupsnow()
    {
              
        
        $sql = " SELECT * FROM followupform order by idfollowupform desc";
        return $this->db->query($sql)->result();
	  
    }
     public function oderqua()
    {
          $sql = " SELECT * FROM quotationtable order by idquatation desc";
         return $this->db->query($sql)->result();
	   
    }
     public function displayfollowupstable()
    {
           $query=$this->db->get('enquirylist');
	   return $query->result();  
    }

      public function saleshomepage()
    {
           $query=$this->db->get('saleshomepage');
	   return $query->result();  
    }
  public function oderstable()
    {
        $query=$this->db->get('quotationtable');
	   return $query->result();  
    }

    public function prodectiontable()
    {       
       
            $sql = "SELECT * FROM `quotationtable` WHERE work = 'Completed' ";
            return $this->db->query($sql)->result();
         
    }

     public function displaydesginerwork()
    {
           $query=$this->db->get('desginerwork');
	   return $query->result();  
    }
   function delete_student_id($id){
    $this->db->where('id', $id);
    $this->db->delete('fileupload');
    }
    
     function deleteemp($id){
    $this->db->where('id', $id);
    $this->db->delete('register');
    }
    
    public function get_autocomplete($search_data)
    {
            $this->db->select('name, id');
            $this->db->like('name', $search_data);

            return $this->db->get('fruits', 10)->result();
    }
    
 
    public function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("enquiryone");
		if($query != '')
		{
			$this->db->like('name', $query);
			$this->db->or_like('mail', $query);
			$this->db->or_like('comment', $query);
			$this->db->or_like('pname', $query);
            $this->db->or_like('site', $query);
            $this->db->or_like('phone', $query);
		}
		$this->db->order_by('idenquirylist', 'ASC');
		return $this->db->get();
    }
    
    public function fetch_newfollow()  
{
  $sql="SELECT * FROM  followupform where idfollowupform in (select max(idfollowupform) from followupform group by iduser)";  
     return $this->db->query($sql)->result();

}
    public function fetchconformoder($query)
	{
		$this->db->select("*");
		$this->db->from("quotationtable");
		if($query != '')
		{
			$this->db->like('iduser', $query);
			$this->db->or_like('name', $query);
			$this->db->or_like('mail', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('qua', $query);
            // $this->db->or_like('site', $query);
            // $this->db->or_like('phone', $query);
		}
		$this->db->order_by('iduser', 'ASC');
		return $this->db->get();
	}




    public function  registerdata($fname,$sname,$pass,$spass,$mail,$name,$code,$phone,$aphone,$age,$dat,$qua,$gender,$role,$address)
    {
            $sql="insert into register(`fname`,`sname`,`pass`,`spass`,`mail`,`name`,`code`,`phone`,`aphone`,`age`,`dat`,`qua`,`gender`,`role`,`address`)VALUES ('$fname','$sname','$pass','$spass','$mail','$name','$code','$phone','$aphone','$age','$dat','$qua','$gender','$role','$address')";
               $this->db->query($sql);

   }
    public function  updateempdata($fname,$sname,$pass,$spass,$mail,$name,$code,$phone,$aphone,$age,$dat,$qua,$gender,$role,$address,$id)
    {
//            $sql="insert into register(`fname`,`sname`,`pass`,`spass`,`mail`,`name`,`code`,`phone`,`aphone`,`age`,`dat`,`qua`,`gender`,`role`,`address`)VALUES ('$fname','$sname','$pass','$spass','$mail','$name','$code','$phone','$aphone','$age','$dat','$qua','$gender','$role','$address')";
//               $this->db->query($sql);
        $sql="UPDATE  register SET `fname`='$fname',`sname`='$sname',`pass`='$pass',`spass`='$spass',`name`='$name',`code`='$code',`phone`='$phone',`aphone`='$aphone',`age`='$age',`dat`='$dat',`qua`='$qua',`gender`='$gender',`role`='$role',`address`='$address',`gender`='$gender' WHERE `id`= $id";
            $this->db->query($sql);

   }
    
   public function  getregisterdata()
   {
    $query=$this->db->get('register');
    return $query->result();

  }


  public function File_upload($data){
     $qry =  $this->db->insert('file',$data);
     if($qry){
         echo "file is uploaded";
     }else{
         echo "not uploaded ";
     }
  }

  public function procurementrequriment($material)  
  {
    $sql="SELECT sum(Quantity) as so ,material,date from materialrequired WHERE material = '$material'";  
       return $this->db->query($sql)->result();

}
public function getstock($material)  
{
  $sql="SELECT sum(meas) as soo ,Material from stockup WHERE Material = '$material'";  
     return $this->db->query($sql)->result();

}

public function insertstock($Material,$meas,$unit,$Price,$Tax,$Address,$Phone,$Vendor,$Email,$Date)
    {
            $sql="insert into stockup(`Material`,`meas`,`unit`,`Price`,`Tax`,`Address`,`Phone`,`Vendor`,`Email`,`Date`)VALUES ('$Material','$meas','$unit','$Price','$Tax','$Address','$Phone','$Vendor','$Email','$Date')";
               $this->db->query($sql);

   }
   public function insertproductionreq($material,$total,$stock,$releas,$date,$balance,$iduser,$name,$mail,$num)
    {
            $sql="insert into procurement(`material`,`total`,`stock`,`releas`,`date`,`balance`,`iduser`,`name`,`mail`,`num`)VALUES ('$material','$total','$stock','$releas','$date','$balance','$iduser','$name','$mail','$num')";
               $this->db->query($sql);

   }
//    public function calstock($material)
// {
//   $sql="SELECT sum(Quantity) as stocknum ,material from stockupload WHERE material = '$material'";  
//      return $this->db->query($sql)->result();

// }

public function balstock($material)
{
    $sql ="SELECT sum(stock) as soo ,sum(releas) as rel, material from procurement WHERE material = '$material'";
     return $this->db->query($sql)->result();

}
public function displaymaterialreceived()
{
    $query=$this->db->get('procurement');
    return $query->result();
}
public function poinsert($Material,$Quantity,$Price,$Tax,$Vendor,$Payment,$Reason,$Date,$Comments,$Changed)
    {
            $sql="insert into po (`Material`,`Quantity`,`Price`,`Tax`,`Vendor`,`Payment`,`Reason`,`Date`,`Comments`,`Changed`)VALUES ('$Material','$Quantity','$Price','$Tax','$Vendor','$Payment','$Reason','$Date','$Comments','$Changed')";
               $this->db->query($sql);

   }
   public function  getpo()
   {
    $query=$this->db->get('po');
    return $query->result();

  }
  public function  Materialrequiredgroup($id)
   {
//    $sql="SELECT sum(Quantity) as Quantity, material from materialrequired group by material  ";
    $sql="SELECT sum(Quantity) as Quantity, material from materialrequired where iduser = '$id' group by material";
    return $this->db->query($sql)->result();
  }

  public function  Materialbyid()
   {
    $sql="SELECT * FROM materialrequired group by iduser ";
    return $this->db->query($sql)->result();
  }

  function fetchpdf($customer_id)
	{
		$this->db->where('id', $customer_id);
		$data = $this->db->get('po');
		$output = '<table width="100%" cellspacing="5" cellpadding="5">';
		foreach($data->result() as $row)
		{
			$output .= '
            <tr>
        
				<td width="15%">
					<p><b>id : </b>'.$row->id.'</p>
					<p><b>Material : </b>'.$row->Material.'</p>
					<p><b>Quantity : </b>'.$row->Quantity.'</p>
					<p><b>Price : </b>'.$row->Price.'</p>
                    <p><b>Tax : </b> '.$row->Tax.' </p>
                   <p><b>Vendor : </b>'.$row->Vendor.'</p></td>
                   <td width="15%">	<p><b>Payment : </b>'.$row->Payment.'</p>
                    <p><b>Reason : </b>'.$row->Reason.'</p>
                    <p><b>Date : </b>'.$row->Date.'</p>
					<p><b>Comments : </b>'.$row->Comments.'</p>
					<p><b>Changed : </b>'.$row->Changed.'</p>
				</td>
			</tr>
			';
		}
		$output .= '
		<tr>
		</tr>
		';
		$output .= '</table>';
		return $output;
    }
    function fetchpdfmat()
	{
		
		$data = $this->db->get('materialcreate');
		$output = '<table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
        <tr>
            <th>ID</th>     
            <th>Material</th>
            <th>Units</th>
            <th>Description</th>
              <th>Vendor ID</th>
                <th>Vendor Name</th>
                  <th>Vendor Email</th>
           
            <th>Vendor Number</th>
           
            <th>Address</th>
        </tr> 
         <tbody>';
		foreach($data->result() as $row)
		{
			$output .= '
            
        <tr>
            
				td><?php echo $item->name; ?></td>
          <td>'.$row->idmt.'</td>
           <td>'.$row->name.'</td>
           <td>'.$row->unit.'</td>
           <td>'.$row->des.'</td>
           <td>'.$row->num.'</td>
           <td>'.$row->vname.'</td>
           <td>'.$row->phone.'</td>
           <td>'.$row->mail.'</td>
           <td>'.$row->address.'</td>
       
          
			</tr>
			';
		}
		$output .= '
		<tr>
		</tr>
		';
		$output .= '</table>';
		return $output;
    }
    function fetchpdfven()
	{
		$num = 1;
		$data = $this->db->get('vregister');
		$output = '<table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
        <tr>
           
            <th>Vendor ID</th>
            <th>Vendor Name</th>
            <th>Vendor Email</th>
              <th>Vendor Number</th>
            
        </tr> 
         <tbody>';
		foreach($data->result() as $row)
		{
			$output .= '
            
        <tr>
            
                td><?php echo $item->name; ?></td>
                

          <td>'.$row->idvregister.'</td>
           <td>'.$row->name.'</td>
           <td>'.$row->mail.'</td>
           <td>'.$row->num.'</td>
        
			</tr>
			';
		}
		$output .= '
		<tr>
		</tr>
		';
		$output .= '</table>';
		return $output;
    }
    function pdfstock()
	{
		$num = 1;
		$data = $this->db->get('stockup');
		$output = '<table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
        <tr>
           
            <th>ID</th>
            <th>Material Name</th>
            <th>Quantity</th>
              <th>Price</th>
              <th>Tax</th>
              <th>Phone Number</th>
              <th>Vendor Name</th>
              <th>Email</th>
            
        </tr> 
         <tbody>';
		foreach($data->result() as $row)
		{
			$output .= '
            
        <tr>
            
             
                

          <td>'.$row->idstockup.'</td>
           <td>'.$row->Material.'</td>
           <td>'.$row->Quantity.'</td>
           <td>'.$row->Price.'</td>
           <td>'.$row->Tax.'</td>
          
           <td>'.$row->Phone.'</td>
           <td>'.$row->Vendor.'</td>
           <td>'.$row->Email.'</td>
          
        
			</tr>
			';
		}
		$output .= '
		<tr>
		</tr>
		';
		$output .= '</table>';
		return $output;
    }
    function realesepdf()
	{
		
		$data = $this->db->get('procurement');
		$output = '<table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
        <tr>
            <th>ID</th>     
            <th>Material</th>
            <th>Total Stock</th>
            <th>Realesed Stock</th>
              <th>Realesed Date</th>
                <th>Vendor ID</th>
                  <th>Vendor Name</th>
                  <th>Vendor Email</th>
             <th> Vendor Number</th>
        
        </tr> 
         <tbody>';
		foreach($data->result() as $row)
		{
			$output .= '
            
        <tr>
            
				td><?php echo $item->name; ?></td>
          <td>'.$row->id.'</td>
           <td>'.$row->material.'</td>
           <td>'.$row->total.'</td>
           <td>'.$row->releas.'</td>
           <td>'.$row->date.'</td>
           <td>'.$row->iduser.'</td>
           <td>'.$row->name.'</td>
           <td>'.$row->mail.'</td>
           <td>'.$row->num.'</td>
       
          
			</tr>
			';
		}
		$output .= '
		<tr>
		</tr>
		';
		$output .= '</table>';
		return $output;
    }
    public function insertdataoder($iduser,$name,$mail,$phone,$finalamount,$paidamount,$refrenceno,$payingdate,$chequenumber,$bankname,$descriptionpaying,$paymentmethod)
    {
        
        $sql="insert into conformtablenow(`iduser`,`name`,`mail`,`phone`,`finalamount`,`paidamount`,`refrenceno`,`payingdate`,`chequenumber`,`bankname`,`descriptionpaying`,`paymentmethod`)VALUES ('$iduser','$name','$mail','$phone','$finalamount','$paidamount','$refrenceno','$payingdate','$chequenumber','$bankname','$descriptionpaying','$paymentmethod')";
        $this->db->query($sql);
    }
//     public function insertpayduecollection($iduser,$name,$mail,$phone,$finalamount,$paidamount,$refrenceno,$payingdate,$chequenumber,$bankname,$descriptionpaying,$paymentmethod)
//    {
//        
//        $sql="insert into installconfromoder(`iduser`,`name`,`mail`,`phone`,`finalamount`,`paidamount`,`refrenceno`,`payingdate`,`chequenumber`,`bankname`,`descriptionpaying`,`paymentmethod`)VALUES ('$iduser','$name','$mail','$phone','$finalamount','$paidamount','$refrenceno','$payingdate','$chequenumber','$bankname','$descriptionpaying','$paymentmethod')";
//        $this->db->query($sql);
//    }
    
    public function dueform($id,$name,$mail,$phone,$finalamount,$dat,$amount,$newdata,$newcomment,$intnum)
    {
       $sql="insert into dueform(`iduser`,`name`,`mail`,`phone`,`finalamount`,`dat`,`amount`,`newdata`,`newcomment`,`intnum`)VALUES ('$id','$name','$mail','$phone','$finalamount','$dat','$amount','$newdata','$newcomment','$intnum')";
        $this->db->query($sql);
    }
    public function installment()
            
    {
         $query=$this->db->get('conformtablenow');
		return $query->result();
                
    }
    public function installmentlist()
            
    {
       
         $query=$this->db->get('confromchecknow');
		return $query->result();
                
    }
     public function descinst()
            
    {
        
         $sql = "SELECT * FROM confromchecknow ORDER BY dat desc";
     return $this->db->query($sql)->result();
                
    }

    public function  quatationupdate($id,$name,$mail,$phone,$comment,$qua,$newdata,$newcomment,$upqua)
     {
             
             $sql=" UPDATE  quotationtable SET `iduser`='$id',`name`='$name',`mail`='$mail',`number`='$phone',`comment`='$comment',`qua`='$qua',`newdata`='$newdata',`newcomment`='$newcomment',`upqua`='$upqua'   WHERE `iduser`= $id";
            
             $this->db->query($sql);

    }
   
    
    
    public function insertinstallment($iduser,$name,$mail,$number,$finalamount,$instabro,$date,$amountnow,$desicri,$intnum)
    {
        $arr = explode(",",$date);
        $install = explode(",",$instabro);
        $amo = explode(",",$amountnow);
        $de = explode(",",$desicri);
        $num =  count($arr) -1;
//        echo $num;
        for($i=0;$i<=$num;$i++){
//            echo $arr[$i];
            $installementno = $install[$i];
            $date = $arr[$i];
            
$time = strtotime($date);
$date = date('Y-m-d',$time);  

            // $date = new DateTime($date);
            // $date =   $date->format('d-m-Y');
            $amount = $amo[$i];
            $des = $de[$i];
            // echo $installementno;
            //  echo" </br>";
            // echo $date;
            //  echo" </br>";
            // echo $des;
            //  echo" </br>";
            // echo $amount;
        //    echo" </br>";
          $sql="insert into confromchecknow(`iduser`,`name`,`email`,`phoneno`,`finalv`,`installementno`,`dat`,`amount`,`des`,`mainint`)VALUES ('$iduser','$name','$mail','$number','$finalamount','$installementno','$date','$amount','$des','$intnum')";
          $this->db->query($sql);
        }

//       for($i=0;$i<=$num;$i++){
//         $date =  $arr[$i];
//         $instabro =  $install[$i];
//         $amountnow =  $amo[$i];
//         $desicri =  $de[$i];
//         $sql="insert into confromchecknow(`iduser`,`name`,`email`,`number`,`finalamount`,`instabro`,`date`,`amountnow`,`desicri`)VALUES (`$iduser`,`$name`,`$mail`,`$number`,`$finalamount`,`$instabro`,`$date`,`$amountnow`,`$desicri`)";
//               $this->db->query($sql);
//       }
     }
public function insertmaterialreq($iduser,$name,$mail,$number, $sno,$material,$quantity,$date)
    {
        $arr = explode(",",$date);
        $install = explode(",",$sno);
        $amo = explode(",",$quantity);
        $de = explode(",",$material);
        $num =  count($arr) -1;
       
        for($i=0;$i<=$num;$i++){       
            $sno = $install[$i];
            $date = $arr[$i];   
            $quantity = $amo[$i];
            $material = $de[$i];
           
          $sql="insert into materialrequired(`iduser`,`name`,`mail`,`phone`,`sno`,`material`,`Quantity`,`date`)VALUES ('$iduser','$name','$mail','$number','$sno','$material','$quantity','$date')";
          $this->db->query($sql);
        }

//       for($i=0;$i<=$num;$i++){
//         $date =  $arr[$i];
//         $instabro =  $install[$i];
//         $amountnow =  $amo[$i];
//         $desicri =  $de[$i];
//         $sql="insert into confromchecknow(`iduser`,`name`,`email`,`number`,`finalamount`,`instabro`,`date`,`amountnow`,`desicri`)VALUES (`$iduser`,`$name`,`$mail`,`$number`,`$finalamount`,`$instabro`,`$date`,`$amountnow`,`$desicri`)";
//               $this->db->query($sql);
//       }
     }
     public function duefollowup()
            
    {
         $query=$this->db->get('dueform');
		return $query->result();
                
    }
    public function duefollowupupaded()
            
    {
        $sql = "SELECT * from dueform order by id desc";
     return $this->db->query($sql)->result();
//         $query=$this->db->get('dueform');
//		return $query->result();
                
    }
    
     public function getmaterial()
            
    {
         $query=$this->db->get('materialcreate');
		return $query->result();
                
    }
    public function getvendor()
            
    {
         $query=$this->db->get('vregister');
		return $query->result();
                
    }
    public function getstockup()
            
    {
         $query=$this->db->get('stockup');
		return $query->result();
                
    }
     public function payduecol()
            
    {
         $query=$this->db->get('payduecol');
		return $query->result();
                
    }
    public function getmaterialrequired()
            
    {
         $query=$this->db->get('materialrequired');
		return $query->result();
                
    }
    public function realeased()
            
    {
         $query=$this->db->get('procurement');
		return $query->result();
                
    }


     public function collpayment($iduser,$name,$mail,$phone,$finalamount,$paidamount,$refrenceno,$payingdate,$chequenumber,$bankname,$descriptionpaying,$paymentmethod)
    {
        
        $sql="insert into conformtablenow(`iduser`,`name`,`mail`,`phone`,`finalamount`,`paidamount`,`refrenceno`,`payingdate`,`chequenumber`,`bankname`,`descriptionpaying`,`paymentmethod`)VALUES ('$iduser','$name','$mail','$phone','$finalamount','$paidamount','$refrenceno','$payingdate','$chequenumber','$bankname','$descriptionpaying','$paymentmethod')";
        $this->db->query($sql);
    }
    public function insertpayduecollection($iduser,$name,$mail,$phone,$finalamount,$paidamount,$refrenceno,$payingdate,$chequenumber,$bankname,$descriptionpaying,$paymentmethod,$dueamount,$intnum)
    {
        
        $sql="insert into payduecol(`iduser`,`name`,`mail`,`phone`,`finalamount`,`paidamount`,`refrenceno`,`payingdate`,`chequenumber`,`bankname`,`descriptionpaying`,`paymentmethod`,`dueamount`,`intnum`)VALUES ('$iduser','$name','$mail','$phone','$finalamount','$paidamount','$refrenceno','$payingdate','$chequenumber','$bankname','$descriptionpaying','$paymentmethod','$dueamount','$intnum')";
        $this->db->query($sql);
    }
    public function cmaterial($name,$num,$vname,$phone,$mail,$address,$unit,$des)
    {
    $sql="insert into materialcreate(`name`,`num`,`vname`,`phone`,`mail`,`address`,`unit`,`des`)VALUES ('$name','$num','$vname','$phone','$mail','$address','$unit','$des')";

//            $sql="insert into materialcreate(`name`,`meas`,`num`,`vname`,`phone`,`mail`,`address`,`unit`,`des`)VALUES ('$name','$meas','$unit',$num','$vname','$phone','$mail','$address','$unit','$des')";
               $this->db->query($sql);

   }
    public function updatematerial($name,$meas,$num,$vname,$phone,$mail,$address,$unit,$des,$id)
     {
             
             $sql=" UPDATE  materialcreate SET `name`='$name',`num`='$num',`vname`='$vname',`phone`='$phone',`mail`='$mail',`address`='$address',`unit`='$unit',`des`='$des'  WHERE `idmt`= $id";
           
             $this->db->query($sql);

    }
    public function updatestock($Material,$Quantity,$Price,$Tax,$Address,$Phone,$Vendor,$Email,$Date,$id)
      {      
            $sql=" UPDATE  stockup SET `Material`='$Material',`Quantity`='$Quantity',`Price`='$Price',`Tax`='$Tax',`Address`='$Address',`Phone`='$Phone',`Vendor`='$Vendor',`Email`='$Email',`Date`='$Date'  WHERE `idstockup`= $id";
           
            $this->db->query($sql);

   }
   public function updatevendor($idvregister,$name,$mail,$dat,$address,$num,$aphone,$hdate,$id)
      {      
            $sql=" UPDATE  vregister SET `idvregister`='$idvregister',`name`='$name',`mail`='$mail',`dat`='$dat',`address`='$address',`num`='$num',`aphone`='$aphone',`hdate`='$hdate'  WHERE `idvregister`= $id";
           
            $this->db->query($sql);

   }
    public function stockupload($name,$meas,$num,$vname,$phone,$mail,$address,$unit,$des,$id)
     {
             
             $sql=" UPDATE  materialcreate SET `name`='$name',`meas`='$meas',`num`='$num',`vname`='$vname',`phone`='$phone',`mail`='$mail',`address`='$address',`unit`='$unit',`des`='$des'  WHERE `idmt`= $id";
            
             $this->db->query($sql);

    }
   public function  vregister($name,$mail,$dat,$address,$num,$aphone,$hdate)
    {
            $sql="insert into vregister(`name`,`mail`,`dat`,`address`,`num`,`aphone`,`hdate`)VALUES ('$name','$mail','$dat','$address','$num','$aphone','$hdate')";
               $this->db->query($sql);

   }
   public function  stockup($Material,$Quantity,$Price,$Tax,$Address,$Phone,$Vendor,$Email,$Date)
   {
           $sql="insert into stockup(`Material`,`Quantity`,`Price`,`Tax`,`Address`,`Phone`,`Vendor`,`Email`,`Date`)VALUES ('$Material','$Quantity','$Price','$Tax','$Address','$Phone','$Vendor','$Email','$Date')";
              $this->db->query($sql);

  }
   public function  overdue($iduser,$name,$mail,$phone,$finalamount,$dat,$amount,$newdata,$newcomment,$intnum)
   {
           $sql="insert into overdue(`iduser`,`name`,`mail`,`phone`,`finalamount`,`dat`,`amount`,`newdata`,`newcomment`,`intnum`)VALUES ('$iduser','$name','$mail','$phone','$finalamount','$dat','$amount','$newdata','$newcomment','$intnum')";
              $this->db->query($sql);

  }
  public function overduepay($iduser,$name,$mail,$phone,$finalamount,$amount,$Amountnow,$RefrenceNo,$dat,$Cheque,$bankname,$des,$paymenttype,$dueamount)
    {
        
        $sql="insert into overduepay(`iduser`,`name`,`mail`,`phone`,`finalamount`,`amount`,`Amountnow`,`RefrenceNo`,`dat`,`Cheque`,`bankname`,`des`,`paymenttype`,`dueamount`)VALUES ('$iduser','$name','$mail','$phone','$finalamount','$amount','$Amountnow','$RefrenceNo','$dat','$Cheque','$bankname','$des','$paymenttype','$dueamount')";
        $this->db->query($sql);
    }
  
  public function  overduelist()
   {
    $sql="SELECT * FROM confromchecknow where dat < current_date()  ";
    return $this->db->query($sql)->result();
  }
   public function  duelist()    
   {
    $sql="SELECT * FROM confromchecknow where dat >= current_date()  ";
    return $this->db->query($sql)->result();
  }
  public function  overduelistdue()
   {
    $sql="SELECT * FROM dueform where dat < current_date()  ";
    return $this->db->query($sql)->result();
  }
   public function  duelistdue()
   {
    $sql="SELECT * FROM dueform where dat >= current_date()  ";
    return $this->db->query($sql)->result();
  }
  public function  duedateup()
   {
       $id = intval($_GET['id']);
      
    $sql="select max(id) as hello from dueform where iduser = '$id' group by intnum";
    return $this->db->query($sql)->result();
  }
  public function  mtrequired()
   {
       $id = intval($_GET['id']);
      
//    $sql="select max(id) as hello from dueform where iduser = '$id' group by intnum";
    $sql="SELECT sum(releas) as Quantity, material,date from procurement where iduser = '$id' group by material";
    return $this->db->query($sql)->result();
  }
   public function  mt($id)
   {
      
      
//    $sql="select max(id) as hello from dueform where iduser = '$id' group by intnum";
    $sql="SELECT sum(releas) as Quantity, material,date from procurement where iduser = '$id' group by material";
    return $this->db->query($sql)->result();
  }
   public function  check()
   {
      
      
//    $sql="select max(id) as hello from dueform where iduser = '$id' group by intnum";
    $sql="SELECT sum(paidamount)as sanm,iduser FROM payduecol group by iduser;";
    return $this->db->query($sql)->result();
  }
  
  
  public function  bal()
   {
         $id = intval($_GET['id']);
//         echo "hello";
//         echo $id;
      
//    $sql="select max(id) as hello from dueform where iduser = '$id' group by intnum";
    $sql="SELECT sum(paidamount) as Quantity, phone from payduecol where iduser = '$id' group by iduser";
//    SELECT sum(paidamount) as Quantity, phone from payduecol where iduser = 10 group by iduser;
    return $this->db->query($sql)->result();
  }
   public function rel()
   {

    $sql="SELECT sum(releas) as rel, stock,name,material from procurement  group by material;";

    return $this->db->query($sql)->result();
  }
  public function allstock()
   {

    $sql="SELECT sum(meas) as Quantity, Vendor,Price,Tax,Address,Phone,Email,material from stockup  group by material;";

    return $this->db->query($sql)->result();
  }

  function fetchven($query)
  {
   $this->db->select("*");
   $this->db->from('enquiryone');
   if($query != '')
   {
    $this->db->like('name', $query);
    $this->db->or_like('mail', $query);
    $this->db->or_like('comment', $query);
    $this->db->or_like('pname', $query);
    $this->db->or_like('design', $query);
   }
   $this->db->order_by('idenquirylist', 'DESC');
   return $this->db->get();
  }
  function updue(){
       $id = intval($_GET['id']);
      
     $sql= "select max(id) as hello,intnum as num,iduser from dueform where iduser = '$id'group by intnum;";
      return $this->db->query($sql)->result();
  }
  function materialrequired()
	{
		
		$data = $this->db->get('materialrequired');
		$output = '<table class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
        <tr>
            <th>S.No</th>     
            <th>Material</th>
            <th>Quantity</th>
            <th>Date</th>
            
        </tr> 
         <tbody>';
		foreach($data->result() as $row)
		{
			$output .= '
            
        <tr>
            
				td><?php echo $item->name; ?></td>
          <td>'.$row->idnew_table.'</td>
           <td>'.$row->material.'</td>
           <td>'.$row->Quantity.'</td>
           <td>'.$row->date.'</td>
       
          
			</tr>
			';
		}
		$output .= '
		<tr>
		</tr>
		';
		$output .= '</table>';
		return $output;
    }
public function insertcode()
    {
      $name = $this->input->post('name');
      $mail= $this->input->post('mail');
      $num = $this->input->post('num');
      $code = $this->input->post('code');
      $codebro=$this->input->post("codebro");
      $dat = $this->input->post("dat");
      $this->load->model('Dbmodel');
      $this->Dbmodel->insertc($name,$mail,$num,$code,$codebro,$dat);
      redirect(base_url() . 'UserControl/managerLogin');   
   
    }
     public function adminLogin()
            
    {

                $query=$this->db->get('code');
                
                return $query->result();
                
    }
    public function  insertc($name,$mail,$num,$code,$codebro,$dat)
    {
            $sql="insert into code(`name`,`mail`,`num`,`code`,`codebro`,`dat`)VALUES ('$name','$mail','$num','$code','$codebro','$dat')";
               $this->db->query($sql);

   }
   public function  managercode($name,$code)
            
    {
                $this->db->where('name',$name);
                $this->db->where('code',$code);
                $query=$this->db->get('code');
                return $query->result();
                
    }

}
     
    

// SELECT * FROM livpassuser.followupform where idfollowupform = (select max(idfollowupform) from lokesh.followupform);

// SELECT * FROM livpassuser.followupform where idfollowupform = (select max(idfollowupform) from livpassuser.followupform group by iduser);
//SELECT * FROM livpassuser.dueform where dat > current_date();
//SELECT * FROM lokesh.dueform where dat > current_date();
//SELECT * FROM livpassuser.confromchecknow where dat < current_date();  overdue
//SELECT * FROM livpassuser.confromchecknow where dat > current_date();  duelist
// SELECT * FROM livpassuser.dueform where amount = 500 and  id in (select max(id) from livpassuser.dueform group by iduser);
// for due table update 
// select max(id) from livpassuser.dueform where iduser = 16 group by intnum;
// 
// select sum(Quantity) as Quantity, material from materialrequired where iduser = 1 group by material; for procurement
// 
// SELECT sum(Quantity) as Quantity, material from materialrequired where iduser = 1 group by material; for for seeproduct 
// data due data
// SELECT * FROM livpassuser.dueform where iduser = 16 group by intnum;
// 
// 
// SELECT sum(paidamount) as Quantity, phone from payduecol where iduser = 10 group by iduser;
// 
// for balance in paycol
// SELECT sum(releas) as Quantity, material from procurement where iduser = '$id' group by material; "maeterial required

// select max(id),name,mail,dat,newcomment from livpassuser.dueform group by intnum; slect updated col due
//SELECT * FROM lokesh.dueform where iduser = (select max(id) from livpassuser.dueform group by intnum);


// SELECT * FROM livpassuser.followupform where idfollowupform in (select max(idfollowupform) from lokesh.followupform group by iduser);