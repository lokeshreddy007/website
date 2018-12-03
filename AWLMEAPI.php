<?php  
include("ResMsgDTO.php");
include("VtransactSecurity.php");
include("HTTPPost.php");
include("ReqMsgDTO.php");

class AWLMEAPI
	{

 
	function generateTrnReqMsg($reqMsgDTO)
        { //echo $reqMsgDTO; die;
		
		if(empty($reqMsgDTO->getAddField10() ) || is_null($reqMsgDTO->getAddField10() )){
			$reqMsgDTO->setAddField10("NA");
		}
		
		if(empty($reqMsgDTO->getAddField9() ) || is_null($reqMsgDTO->getAddField9() )){
			$reqMsgDTO->getAddField9("NA");
		}
		 
            try
            {
			
                if (is_null($reqMsgDTO) || empty($reqMsgDTO)  
				|| is_null($reqMsgDTO->getMid() || empty($reqMsgDTO->getMid()))
                || is_null($reqMsgDTO->getOrderId()) || empty($reqMsgDTO->getOrderId()) 
                || is_null( $reqMsgDTO->getTrnAmt()) || empty( $reqMsgDTO->getTrnAmt())
                || is_null($reqMsgDTO->getMeTransReqType()) || empty( $reqMsgDTO->getMeTransReqType())
                || is_null($reqMsgDTO->getEnckey()) || empty( $reqMsgDTO->getEnckey())
                || is_null($reqMsgDTO->getResponseUrl()) || empty( $reqMsgDTO->getResponseUrl())
                || is_null($reqMsgDTO->getTrnCurrency()) || empty(  $reqMsgDTO->getTrnCurrency()) 
                )
                {
					$reqMsgDTO->setStatusDesc("Mandatory fields are missing");
                    return $reqMsgDTO;
                }
                if (!(($reqMsgDTO->getMeTransReqType() == "R") || ($reqMsgDTO->getMeTransReqType() == "P") || ($reqMsgDTO->getMeTransReqType() == "S")))
                {
                    $reqMsgDTO->setStatusDesc("Mandatory fields are missing");
                    return $reqMsgDTO;
                }
                if (($reqMsgDTO->getMeTransReqType() == "R")
                        &&(is_null($reqMsgDTO->getRecurrPeriod()) || empty($reqMsgDTO->getRecurrPeriod())
                        || is_null($reqMsgDTO->getRecurrDay()) ||  empty($reqMsgDTO->getRecurrDay()) 
                        || is_null( $reqMsgDTO->getNoOfRecurring()) || empty( $reqMsgDTO->getNoOfRecurring())))
                {

                   	$reqMsgDTO->setStatusDesc("Mandatory fields are missing for recurring payment");
                    return $reqMsgDTO;
                }

               
				
		    $merchantReqStr= $reqMsgDTO->getMid() 	."|". $reqMsgDTO->getOrderId()   ."|". $reqMsgDTO->getTrnAmt()
			."|".$reqMsgDTO->getTrnCurrency()     ."|". $reqMsgDTO->getTrnRemarks()  ."|". $reqMsgDTO->getMeTransReqType() 
			."|".$reqMsgDTO->getRecurrPeriod()    ."|". $reqMsgDTO->getRecurrDay()   ."|". $reqMsgDTO->getNoOfRecurring()
			."|".$reqMsgDTO->getResponseUrl()     ."|". $reqMsgDTO->getAddField1()   ."|". $reqMsgDTO->getAddField2()
			."|".$reqMsgDTO->getAddField3()       ."|". $reqMsgDTO->getAddField4()   ."|". $reqMsgDTO->getAddField5()
			."|".$reqMsgDTO->getAddField6()       ."|". $reqMsgDTO->getAddField7()   ."|". $reqMsgDTO->getAddField8()
			."|".$reqMsgDTO->getAddField9()       ."|". $reqMsgDTO->getAddField10();
			
			$vTransactSecurity = new VTransactSecurity();
	        $enc_data = $vTransactSecurity->encryptValue($merchantReqStr,$reqMsgDTO->getEnckey());  			
			
           	 	$reqMsgDTO->setReqMsg($enc_data);
				$reqMsgDTO->setStatusDesc("Success");
           
            }
            catch (Exception $ex)
            {
              	$reqMsgDTO->setStatusDesc("Error occurred during creation of request message");
                throw new Exception($ex->getMessage());
               
            }
            return $reqMsgDTO;
        } 
		
		
	function parseTrnResMsg($enc_data, $enc_key)
		{ 
		
	        $resMsgDTO = new ResMsgDTO();
	     try
            {
             
				$vTransactSecurity = new VTransactSecurity();
                $dec_data = $vTransactSecurity ->decryptValue($enc_data,$enc_key); 
					
                if (is_null($dec_data) || empty($dec_data) )
                {
                    $resMsgDTO->setStatusCode("F"); 
                    $resMsgDTO->setStatusDesc("Invalid response message");
                    return $resMsgDTO;
                }
                
				$strings=explode("|",$dec_data);
				
				if(!empty($strings)&& sizeof($strings)!= 22){
				
			        $resMsgDTO->setStatusCode("F"); 
                    $resMsgDTO->setStatusDesc("Number of fields not matching.");
                    return $resMsgDTO;
			    }               
				
                $resMsgDTO->setPgMeTrnRefNo($strings[0]); 
                $resMsgDTO->setOrderId($strings[1]) ;      // ORDERID
				$resMsgDTO->setTrnAmt($strings[2]) ; 
                $resMsgDTO->setAuthNStatus($strings[3]);  // AUTHNSTATUS
                $resMsgDTO->setAuthZStatus($strings[4]);
                $resMsgDTO->setCaptureStatus($strings[5]); 
                $resMsgDTO->setRrn($strings[6]);
                $resMsgDTO->setAuthZCode($strings[7]);
                $resMsgDTO->setResponseCode($strings[8]);
                $resMsgDTO->setTrnReqDate($strings[9]);
                $resMsgDTO->setStatusCode($strings[10]);
                $resMsgDTO->setStatusDesc($strings[11]);
                $resMsgDTO->setAddField1($strings[12]);
                $resMsgDTO->setAddField2($strings[13]);
                $resMsgDTO->setAddField3($strings[14]);
                $resMsgDTO->setAddField4($strings[15]);
                $resMsgDTO->setAddField5($strings[16]);
                $resMsgDTO->setAddField6($strings[17]);
                $resMsgDTO->setAddField7($strings[18]);
                $resMsgDTO->setAddField8($strings[19]);
                $resMsgDTO->setAddField9($strings[20]);
                $resMsgDTO->setAddField10($strings[21]); 
            }
            catch (Exception $ex)
            {
                throw new Exception($ex->getMessage());
            }
			$resMsgDTO->getOrderId();
			
			
            return $resMsgDTO;
	
		}
 
 
	function getTransactionStatus($mid, $orderid, $pgmetrn,$enc_key)
		{ 
						$enc_data=null;
						$dec_data = null;
						$ini_array = parse_ini_file("ClientAPI.ini");

						$qpURL=$ini_array['GET_TRANS_STATUS'];
						
						$resMsgDTO = new ResMsgDTO(); 
						$httpPost = new HTTPPost();
						$vtransactSecurity = new VtransactSecurity();
						

						if(is_null($mid)||empty($mid)||empty($orderid)||is_null($orderid)||is_null($enc_key)||empty($enc_key))
						{
							$resMsgDTO->setStatusCode("F");
							$resMsgDTO->setStatusDesc("Invalid request was received.");
							return $resMsgDTO;
						}
						$var="";
						$merchantReqStr= $mid ."|". $orderid  ."|". $pgmetrn ."|". $var  ."|". $var
						."|". $var  ."|". $var ."|". $var  ."|". $var ."|". $var  ."|". $var ."|". $var  ."|" ; 
						
						$enc_data=$vtransactSecurity ->encryptValue($merchantReqStr,$enc_key); 
						
						//$urlParameters="merchantReqStrT=".urlencode ($merchantReqStr);
						$urlParameters="merchantReqStrT=".$enc_data."&mid=".$mid; 
						
						
						// Called excutePost method to post the data						
					
						$enc_data=$httpPost ->excutePost($qpURL,$urlParameters);
                      
					   return $this->parseTrnResMsg($enc_data, $enc_key);
		}


	
 /**
	 * This method is used to call cancel or refund transaction.
	 * 
	 * 
	 * @param mid
	 * @param orderId
	 * @param pgmetrn
	 * @param cancelRefundFlag
	 * @param amount
	 * @param enc_key
	 * @return
	 * @throws Exception
	 */
    function cancelTransaction($reqMsgDTO)
        {
           
			   if(empty($reqMsgDTO->getAddField10() ) || is_null($reqMsgDTO->getAddField10() )){
				$reqMsgDTO->setAddField10("NA");
			  }
		 
			if(empty($reqMsgDTO->getAddField9() ) || is_null($reqMsgDTO->getAddField9() )){
				$reqMsgDTO->getAddField9("NA");
			}
		   
			$resMsgDTO = new ResMsgDTO();
			$httpPost = new HTTPPost();
            try
            {
                if( is_null($reqMsgDTO->getMid()) || empty($reqMsgDTO->getMid())  
                || is_null($reqMsgDTO->getOrderId()) || empty($reqMsgDTO->getOrderId())
                || is_null($reqMsgDTO->getPgMeTrnRefNo()) || empty($reqMsgDTO->getPgMeTrnRefNo())
                || is_null($reqMsgDTO->getEnckey()) || empty($reqMsgDTO->getEnckey()) 
                )
                {                    
					
					$resMsgDTO->setStatusCode("F");
					$resMsgDTO->setStatusDesc("Invalid request was received.");
					                   
                    return $resMsgDTO;
                }
                

            $ini_array = parse_ini_file("ClientAPI.ini");

	        $qpURL=$ini_array['CANCEL_TRANS_API'];
			
			if(is_null($reqMsgDTO->getAddField10()) || empty($reqMsgDTO->getAddField10())  ){
				$reqMsgDTO->setAddField10('NA');
			}
			   
			$merchantReqStr= $reqMsgDTO->getMid()	."|". $reqMsgDTO->getOrderId()  ."|". $reqMsgDTO->getPgMeTrnRefNo()
			."|". $reqMsgDTO->getTrnAmt()  ."|". $reqMsgDTO->getAddField1() 
			."|".$reqMsgDTO->getAddField2()		."|". $reqMsgDTO->getAddField3()  ."|". $reqMsgDTO->getAddField4()
			."|".$reqMsgDTO->getAddField5()		."|". $reqMsgDTO->getAddField6()  ."|". $reqMsgDTO->getAddField7()
			."|".$reqMsgDTO->getAddField8()		."|". $reqMsgDTO->getAddField9()  ."|". $reqMsgDTO->getAddField10();
			
	       
		    $vtransactSecurity = new VtransactSecurity();
		    $enc_data=$vtransactSecurity->encryptValue($merchantReqStr,$reqMsgDTO->getEnckey());
             
		    $urlParameters="merchantReqStrT=".$enc_data."&MID=".$reqMsgDTO->getMid();
	       	$enc_data=$httpPost ->excutePost($qpURL,$urlParameters);
			
			$dec_data=$vtransactSecurity -> decryptValue($enc_data,$reqMsgDTO->getEnckey());           
		
			$strings=explode("|",$dec_data);

			if(!empty($strings)&& sizeof($strings)!= 16)
	        {
			        $resMsgDTO->setStatusCode("F");
					$resMsgDTO->setStatusDesc("Number of fields not matching.");			                       
                    return $resMsgDTO;
			  
			} 
			    
			$resMsgDTO->setPgMeTrnRefNo($strings[0]); // PGTRNREFNO
			$resMsgDTO->setOrderId($strings[1]);      // ORDERID
			$resMsgDTO->setPgRefCancelReqId($strings[2]);
			$resMsgDTO->setRefundAmt($strings[3]);
			$resMsgDTO->setStatusCode($strings[4]);
			$resMsgDTO->setStatusDesc($strings[5]);
			$resMsgDTO->setAddField1($strings[6]);
			$resMsgDTO->setAddField2($strings[7]);
			$resMsgDTO->setAddField3($strings[8]);
			$resMsgDTO->setAddField4($strings[9]);
			$resMsgDTO->setAddField5($strings[10]);
			$resMsgDTO->setAddField6($strings[11]);
			$resMsgDTO->setAddField7($strings[12]);
			$resMsgDTO->setAddField8($strings[13]);
			$resMsgDTO->setAddField9($strings[14]);
			$resMsgDTO->setAddField10($strings[15]);            
            }
            catch(Exception $ex)
            {
                throw new Exception($ex->getMessage());
            }
            return $resMsgDTO;
        }
		
	function refundTransaction($reqMsgDTO)
        {   //$reqMsgDTO = new ReqMsgDTO(); 
		
			if(empty($reqMsgDTO->getAddField10() ) || is_null($reqMsgDTO->getAddField10() )){
				$reqMsgDTO->setAddField10("NA");
			}
		
			if(empty($reqMsgDTO->getAddField9() ) || is_null($reqMsgDTO->getAddField9() )){
				$reqMsgDTO->getAddField9("NA");
			}
            $resMsgDTO = new ResMsgDTO();
			$httpPost = new HTTPPost();
						
            try
            {
                if (  is_null($reqMsgDTO->getMid()) ||  empty($reqMsgDTO->getMid()) 
                || is_null($reqMsgDTO->getOrderId()) || empty($reqMsgDTO->getOrderId()) 
                || is_null($reqMsgDTO->getPgMeTrnRefNo() ) || empty($reqMsgDTO->getPgMeTrnRefNo())
                || is_null( $reqMsgDTO->getEnckey() ) || empty( $reqMsgDTO->getEnckey())
				|| is_null( $reqMsgDTO->getRefundAmt()) || empty( $reqMsgDTO->getRefundAmt()))
                {
                    
					$resMsgDTO->setStatusCode("F");
					$resMsgDTO->setStatusDesc("Mandatory fields are missing.");
					return $resMsgDTO;
                }
                
			if( is_null($reqMsgDTO->getAddField10()) ||empty($reqMsgDTO->getAddField10()) ){
			$reqMsgDTO->setAddField10('NA');
			}
		    $ini_array = parse_ini_file("ClientAPI.ini");

	        $qpURL=$ini_array['REFUND_TRANS_API'];
			   
			$merchantReqStr= $reqMsgDTO->getMid()."|". $reqMsgDTO->getOrderId()  ."|". $reqMsgDTO->getPgMeTrnRefNo()
			."|".$reqMsgDTO->getRefundAmt()."|". $reqMsgDTO->getAddField1() 
			."|".$reqMsgDTO->getAddField2()."|". $reqMsgDTO->getAddField3()  ."|". $reqMsgDTO->getAddField4()
			."|".$reqMsgDTO->getAddField5()."|". $reqMsgDTO->getAddField6()  ."|". $reqMsgDTO->getAddField7()
			."|".$reqMsgDTO->getAddField8()."|". $reqMsgDTO->getAddField9()  ."|". $reqMsgDTO->getAddField10();
				
				
			$vtransactSecurity = new VtransactSecurity();
		    $enc_data=$vtransactSecurity->encryptValue($merchantReqStr,$reqMsgDTO->getEnckey());	
				
		    	
			
			$urlParameters="merchantReqStrT=".$enc_data."&MID=".$reqMsgDTO->getMid();
	        
			$enc_data=$httpPost ->excutePost($qpURL,$urlParameters);
			
		//	$enc_data=$httpPost ->excutePost($qpURL,$urlParameters);
			
			$dec_data=$vtransactSecurity -> decryptValue($enc_data,$reqMsgDTO->getEnckey()); 				
            
			$strings=explode("|",$dec_data);
			if(!empty($strings)&& sizeof($strings)!= 16)
	        {
			        $resMsgDTO->setStatusCode("F");
					$resMsgDTO->setStatusDesc("Number of fields not matching.");			                       
                    return $resMsgDTO;
			  
			  
			  
			} 
			
			$resMsgDTO->setPgMeTrnRefNo($strings[0]); // PGTRNREFNO
			$resMsgDTO->setOrderId($strings[1]);      // ORDERID
			$resMsgDTO->setPgRefCancelReqId($strings[2]);
			$resMsgDTO->setRefundAmt($strings[3]);
			$resMsgDTO->setStatusCode($strings[4]);
			$resMsgDTO->setStatusDesc($strings[5]);
			$resMsgDTO->setAddField1($strings[6]);
			$resMsgDTO->setAddField2($strings[7]);
			$resMsgDTO->setAddField3($strings[8]);
			$resMsgDTO->setAddField4($strings[9]);
			$resMsgDTO->setAddField5($strings[10]);
			$resMsgDTO->setAddField6($strings[11]);
			$resMsgDTO->setAddField7($strings[12]);
			$resMsgDTO->setAddField8($strings[13]);
			$resMsgDTO->setAddField9($strings[14]);
			$resMsgDTO->setAddField10($strings[15]); 
            }
            catch (Exception $ex)
            {
                throw new Exception($ex->getMessage());
            }
            return $resMsgDTO;
        }

	function generateTrnReqMsgWithCard($reqMsgDTO)
        {  
			$reqMsgDTO->setAddField10('NA');
			$reqMsgDTO->setAddField9('NA');
		 
		 //$reqMsgDTO->set_statusDesc("First Validation done"); 
		// return $reqMsgDTO;
            try
            { 
                if ( is_null($reqMsgDTO) || empty($reqMsgDTO) || is_null($reqMsgDTO->getMid() || empty($reqMsgDTO->getMid()) ) 
                || is_null($reqMsgDTO->getOrderId()) || empty($reqMsgDTO->getOrderId())  
                || is_null($reqMsgDTO->getTrnAmt())  || empty($reqMsgDTO->getTrnAmt()) 
                || is_null($reqMsgDTO->getMeTransReqType()) || empty($reqMsgDTO->getMeTransReqType()) 
                || is_null($reqMsgDTO->getEnckey()) || empty($reqMsgDTO->getEnckey())
                || is_null($reqMsgDTO->getResponseUrl()) || empty($reqMsgDTO->getResponseUrl()) 
                || is_null($reqMsgDTO->getTrnCurrency()) || empty($reqMsgDTO->getTrnCurrency())
                )
                {
                    
					$reqMsgDTO->setStatusDesc("Mandatory fields are missing");
                    return $reqMsgDTO;
                }
				
				
				
                if (!(($reqMsgDTO->getMeTransReqType() == "R") || ($reqMsgDTO->getMeTransReqType() == "P") || ($reqMsgDTO->getMeTransReqType() == "S")))
                { 
                    $reqMsgDTO->setStatusDesc("Mandatory fields are missing");
                    return $reqMsgDTO;
                }
                if (($reqMsgDTO->getMeTransReqType() == "R")
                        && (is_null($reqMsgDTO->getRecurrPeriod() || empty($reqMsgDTO->getRecurrPeriod()))
                        || is_null($reqMsgDTO->getRecurrDay()) ||empty($reqMsgDTO->getRecurrDay()) 
                        || is_null($reqMsgDTO->getNoOfRecurring()) ||empty($reqMsgDTO->getNoOfRecurring()) )) 
                {

                   	$reqMsgDTO->setStatusDesc("Mandatory fields are missing for recurring payment");
                    return $reqMsgDTO;
                }
				
				
			if($reqMsgDTO->getPayTypeCode() == "DC" || $reqMsgDTO->getPayTypeCode() == "CC"
					||  $reqMsgDTO->getPayTypeCode() == "CUG") {
					
					if(is_null($reqMsgDTO->getCardNumber()) || empty($reqMsgDTO->getCardNumber())
						|| is_null($reqMsgDTO->getExpiryDate()) || empty($reqMsgDTO->getExpiryDate()) 
						|| is_null($reqMsgDTO->getPayTypeCode()) || empty($reqMsgDTO->getPayTypeCode()) 
						){

				
						$reqMsgDTO->setStatusDesc("Card details are missing.");
						return $reqMsgDTO;
				}
				$reqMsgDTO->setNetBankCode("NA");
			
			} else if($reqMsgDTO->getPayTypeCode() == "NB" ){

					if(is_null($reqMsgDTO->getNetBankCode()) || empty($reqMsgDTO->getNetBankCode())) {
						$reqMsgDTO->setStatusDesc("Net bank code is missing");
						return $reqMsgDTO;
					}
				
			} else {
				$reqMsgDTO->setStatusDesc("Invalid pay type code");
				return $reqMsgDTO;
			}
				

				
		    $merchantReqStr= $reqMsgDTO->getMid() ."|". $reqMsgDTO->getOrderId()     ."|". $reqMsgDTO->getTrnAmt()
			."|".$reqMsgDTO->getTrnCurrency()     ."|". $reqMsgDTO->getTrnRemarks()  ."|". $reqMsgDTO->getMeTransReqType() 
			."|".$reqMsgDTO->getRecurrPeriod()    ."|". $reqMsgDTO->getRecurrDay()   ."|". $reqMsgDTO->getNoOfRecurring()
			."|".$reqMsgDTO->getResponseUrl()     ."|". $reqMsgDTO->getAddField1()   ."|". $reqMsgDTO->getAddField2()
			."|".$reqMsgDTO->getAddField3()       ."|". $reqMsgDTO->getAddField4()   ."|". $reqMsgDTO->getAddField5()
			."|".$reqMsgDTO->getAddField6()       ."|". $reqMsgDTO->getAddField7()   ."|". $reqMsgDTO->getAddField8()
			."|".$reqMsgDTO->getAddField9()       ."|". $reqMsgDTO->getAddField10()  ."|".$reqMsgDTO->getPayTypeCode() ."|".$reqMsgDTO->getCardNumber() 
			."|". $reqMsgDTO->getExpiryDate()      ."|". $reqMsgDTO->getCvv()         ."|". $reqMsgDTO->getNameOnCard() ."|". $reqMsgDTO->getNetBankCode();
	
			$vTransactSecurity = new VTransactSecurity();
            $enc_data=$vTransactSecurity ->encryptValue($merchantReqStr,$reqMsgDTO->getEnckey());  			

			  
             //reqMsgDTO.ReqMsg(encryption.encryptMEMessage(msg.toString()));//Java Code
		            $reqMsgDTO->setReqMsg($enc_data) ;
					$reqMsgDTO->setStatusDesc("Success");
           
            }
            catch (Exception $ex)
            {
               
				$reqMsgDTO->setStatusDesc("Error occurred during generating request message");
                throw new Exception($ex->getMessage());
               
            }
            return $reqMsgDTO;
        } 
		


    }



?>
