<?php 

class salesforce_integration {
//salesforce variables
public $connection = NULL;

//debug variables
public $Reporting = false;

//api config variables
private $APIEmail = 'info@wealthdynamics.org';
private $APIPassword = 'sfwd2011'; 
private $APISecretToken = 'WhVIl4p3WdN4IOty9T7OAJbf';
public $connected = false; // so that the calling script can check that we have a connection

/*=============*/
//CONSTRUCT - connect to Salesforce immediately (there will never be a time that we need to use the integration class without connecting to salesforce. 
/*=============*/

function __construct(){

define("SOAP_CLIENT_BASEDIR", dirname(__FILE__));
require_once (SOAP_CLIENT_BASEDIR.'/SforceEnterpriseClient.php');
	
	

				
							try {
							  $this->connection = new SforceEnterpriseClient();
							  $mySoapClient =  $this->connection->createConnection(SOAP_CLIENT_BASEDIR.'/enterprise.wsdl.xml');
							 
							  $myLogin =  $this->connection->login($this->APIEmail, $this->APIPassword.$this->APISecretToken);
								
								
								if($Reporting){
									  echo "***** Login Info*****\n";
										print_r($myLogin);
								}
							
							
							  $this->connected = true;
								
								
							
							
							} catch (Exception $e) {
									  
									  if($Reporting){//be careful here - this message outputs the password and login name. only use in debug mode
										echo $this->connection->getLastRequest();
									  }
									  
									  echo $e->faultstring;
									  $this->connected = false;
									  return false;
							}

}//end function connect


	
	
	
	

	/*=============*/
	//  FindSalesforceRecord
	/*=============*/
	
	/*
	function GetSalesforceAccount($BenedixSystemId,$Email=NULL){
	
		$query = "select Id, IsDeleted, MasterRecordId, Name, LastName, FirstName, Salutation, Type, RecordTypeId, ParentId, BillingStreet, BillingCity, BillingState, BillingPostalCode, BillingCountry, ShippingStreet, ShippingCity, ShippingState, ShippingPostalCode, ShippingCountry, Phone, Fax, Website, Industry, AnnualRevenue, NumberOfEmployees, Description, OwnerId, CreatedDate, CreatedById, LastModifiedDate, LastModifiedById, SystemModstamp, LastActivityDate, PersonContactId, IsPersonAccount, PersonMailingStreet, PersonMailingCity, PersonMailingState, PersonMailingPostalCode, PersonMailingCountry, PersonOtherStreet, PersonOtherCity, PersonOtherState, PersonOtherPostalCode, PersonOtherCountry, PersonMobilePhone, PersonHomePhone, PersonOtherPhone, PersonAssistantPhone, PersonEmail, PersonTitle, PersonDepartment, PersonAssistantName, PersonLeadSource, PersonBirthdate, PersonHasOptedOutOfEmail, PersonLastCURequestDate, PersonLastCUUpdateDate, IsDuplicate__c, Expected_Grade__c, Alternative_Email__c, Right_To_Work_In_UK__c, Years_of_Experience_in_Finance__c, Field_of_Study__c, Post_Graduate_Grade__c, Post_Graduate_University__c, Post_Graduate_Graduation_Year__c, Post_Graduate_Course_Start_Year__c, Current_Study_Level__c, University__c, Course_End_Year__c, Course_Start_Year__c, Years_of_Experience_Outside_Finance__c, CV_Location__c, Own_Comments__c, Where_Did_You_Hear_Of_Us__c, Post_Graduate_Field_of_Study__c, Job_Title__c, BnxClientId__c, Year_Of_Birth__c, CPW_BookingDate__c, CPW_SeminarDate__c, Protrader_BookingDate__c, Mastery_BookingDate__c, CPWOnline_BookingDate__c, Consultation_Status__c, Private_Trader__c, Secured_A_Job_Through_Benedix__c, Chosen_Sector__c, Full_Time__c, Internships__c, Preferred_Sectors_Back_Office__c, Preferred_Sectors_Compliance__c, Preferred_Sectors_Insurance__c, Preferred_Sectors_Law__c, Preferred_Sectors_Risk_Management__c, Preferred_Sectors_Wealth_Management__c, Preferred_Sectors_Asset_Management__c, Preferred_Sectors_Consultancy__c, Preferred_Sectors_Commercial_Banking__c, Preferred_Sectors_Investment_Banking__c, Preferred_Sectors_Research_Analysis__c, Preferred_Sectors_Sales_Trading__c, Preferred_Sectors_Accounting_Tax__c, Locations_Birmingham_East_Midlands__c, Locations_London__c, Locations_North_East__c, Locations_North_West__c, Locations_South_East__c, Locations_Northern_Ireland__c, Locations_Edinburgh_Scotland__c, Locations_Wales__c, Locations_Overseas__c, Locations_West_Midlands__c, Locations_Leeds_Yorkshire__c, Locations_South_West__c, Affiliate__c, GeneralLeadSource__c, SpecificLeadSource__c, BenedixSystemId__c, Country__c, BES__RF_Rep__pc, BES__RapidFire__pc, BES__RapidFire_Date__pc, Number_of_Products__pc, Total_Paid__pc, Total_Outstanding__pc, HasBoughtProtrader__pc, HasBoughtCPWOnline__pc, HasBoughtWorkshop__pc, HasBoughtMastery__pc, Candidate_Status__pc from Account WHERE BenedixSystemId__c=".$BenedixSystemId." LIMIT 1";
		
		
		//echo "<hr />$query<hr />";
		$result = $this->connection->query($query);
		return $result->records[0];
		//var_dump($result);
	
	
	
	}*/
	
		
	/*=============*/
	//  Create sObject
	/*=============*/
	
	/*
	function CreateSObject($PostArray){
		
		$this->sObject = new stdClass;
		foreach($PostArray as $K=>$V){
		
			if (stristr($K,'sf_')){//if the field name starts with sf_
			
				$FieldName = str_replace('sf_','',$K);
				if($FieldName=='Email'){
					
					$this->sObject->PersonEmail = $V;
				}else{
					
						$this->sObject->$FieldName = $V;
				}
			
			}// /if 
			
			

		
		}// /foreach
	
			if($this->FirstName && $this->LastName){//if these two are not set, means that we're using the edit porifle form and the values are set in the form. 
				$this->sObject->FirstName = $this->FirstName;
				$this->sObject->LastName = $this->LastName;
			}
			
	}
	*/
	
	/*=============*/
	//  CopyMemberToSalesforce
	/*=============*/
	/*
	function CopyMemberToSalesforce(){

		if(empty($this->sObject)){ echo "FATAL ERROR: You need to create an sObject before you can use CopyMemberToSalesforce()."; exit(); } 

							
								$this->sObject->BenedixSystemId__c = $this->BenedixSystemId;//the __c is crucial as it is a custom salesforce field
								
								if(empty($this->sObject->BenedixSystemId__c)){ echo "FATAL ERROR: Before you can use CopyMemberToSalesforce(), you must have created the local user in order to get the BenedixSystemId"; exit(); }
							
								
								if($this->Reporting)	{ echo "<hr />sObject About To Be Uploaded To Salesforce:"; var_dump($this->sObject); echo "<hr />"; }
								
								$createResponse = $this->connection->create(array($this->sObject),'Account');
	
							if($this->Reporting)	echo "<hr />".var_dump($createResponse)."<hr />";
	
								if($createResponse->success!=1){  echo "ERROR - could not create the Client. createResponse from Salesforce was: "; var_dump($createResponse); return FALSE; } else { $this->SalesforceAccountId=$createResponse->id; return TRUE; }
	
	
	} 
	*/
	/*=============*/
	//  UpdateSalesforceAccount
	/*=============*/
	/*
	function UpdateSalesforceAccount(){

		if(empty($this->sObject)){ echo "FATAL ERROR: You need to create an sObject before you can use UpdateSalesforceAccount()."; exit(); } 
			if(empty($this->BenedixSystemId)){ echo "FATAL ERROR: You need to set the BenedixSystemId before you can use UpdateSalesforceAccount()."; exit(); } 
							

					//Get AccountId from BenedixSystemId
					
		$query = "select Id from Account WHERE BenedixSystemId__c=".$this->BenedixSystemId." LIMIT 1";
		if($this->Reporting)	{  echo "<hr/>$query<hr />"; }
		$query_result = $this->connection->query($query);
		$this->sObject->Id = $query_result->records[0]->Id;
		if($this->Reporting)	{ echo "Account ID: ".$this->sObject->Id." <hr />"; }
					
								
			
								
								if($this->Reporting)	{ echo "<hr />sObject About To Be Uploaded To Salesforce for Updating:"; var_dump($this->sObject); echo "<hr />"; }
								
								$updateResponse = $this->connection->update(array($this->sObject),'Account');
	
							if($this->Reporting)	echo "<hr />".var_dump($updateResponse)."<hr />";
	
								if($updateResponse->success!=1){  echo "ERROR - could not update the Account. updateResponse from Salesforce was: "; var_dump($updateResponse); return FALSE; } else { return TRUE; }
	
	
	} 
	
*/
	
	/*=============*/
	// CreateSalesforceOrder
	/*=============*/
	/*
	function CreateSalesforceOrder($ProductId,$Price,$Bonus=false){
		
			if(empty($this->BenedixSystemId)){ echo "FATAL ERROR: You need to set the BenedixSystemId before you can use CreateSalesforceOrder()."; exit(); } 
					
		echo "CREATESALESFORCEORDER";
		//ensure that SalesforceContactId is set
		$this->GetContactIdFromBenedixSystemId($this->BenedixSystemId);

						  $sObjects = array();//create a new sObjects array
						  $sObject = new stdclass();//create a new sObject (this will be the booking)

						  $sObject->Candidate__c = $this->SalesforceContactId;
						  
						  $sObject->Product__c = $ProductId;
						  $sObject->Price__c = $Price;
						  $sObject->Amount_Paid__c = '0.00';
						  
						  if($Bonus==true){
						  $sObject->Payment_Method__c = 'Bonus - Incomplete';
						  
						  }else{
						  $sObject->Payment_Method__c = 'Online';
						  }
						  
						  
						  $sObject->Comments__c = $this->Comments__c;
						  
						  
						  
						  
						  
						 
						  
									 
									 
									if($this->Reporting) echo "<hr/>sObject:".var_dump($sObject)."<hr />"; 
									 
									 array_push($sObjects, $sObject);
								  
								  									if($this->Reporting) echo "<hr/>The sObjects array: ".var_dump($sObjects)."<hr />";
								  
									  try {
									  
									  $results = $this->connection->create($sObjects,'BenedixOrder__c');
									 
									  } catch (Exception $e) {
									  echo $e->faultstring;
									  }
										
			
									if($this->Reporting)	"<hr />Booking Creation Results: ".var_dump($results)."<hr />";
					
									
			
			
						 
				
						
						
							if($results->success=='1'){

 								$this->BookingId=$results->id;//esential, pass this to paypal so Ipn can update!
							
										if($this->Reporting) echo "<h2>Salesforce booking was a success! Booking Id = ".$this->BookingId."</h2>";					
							
								return true;
							
							
							}else{
							
							
							
									if($this->Reporting) echo "<font color='red'>Sorry - due to a technical error we were unable to complete your booking. Please email <a href='webmaster@benedix.co.uk'>webmaster@benedix.co.uk</a> to inform us of this problem so that we can fix it as soon as possible. (Line 520)</font>";
			
								return false;		
							
							}
					
		
	
	}
	
*/
/*=============*/
// Get Contact Id from BenedixSystemId
/*=============*/	
/*
function GetContactIdFromBenedixSystemId($BenedixSystemId){


$query = "select PersonContactId, LastName, FirstName from Account WHERE BenedixSystemId__c=".$BenedixSystemId;//no quotes around the value - it's expecting a number
echo "<hr />$query<hr />";
$result = $this->connection->query($query);

$this->SalesforceContactId = $result->records[0]->PersonContactId;
if($this->SalesforceContactId){
	return true;
}else{
	echo "Error with retrieving PersonContactId from Sf.";
	return false;
}


}

*/

	
/*=============*/
// Post Form Data
/*=============*/	
/*					
	function PostFormData($host,$query,$others=''){
	
	
		# $host includes host and path and filename
		# ex: "myserver.com/this/is/path/to/file.php"
	# $query is the POST query data
		# ex: "a=thisstring&number=46&string=thatstring
	# $others is any extra headers you want to send
		# ex: "Accept-Encoding: compress, gzip\r\n"

								$path=explode('/',$host);
								$host=$path[0];
								unset($path[0]);
								$path='/'.(implode('/',$path));
								$post="POST $path HTTP/1.1\r\nHost: $host\r\nContent-type: application/x-www-form-urlencoded\r\n${others}User-Agent: Mozilla 4.0\r\nContent-length: ".strlen($query)."\r\nConnection: close\r\n\r\n$query";
								$h=fsockopen($host,80);
								fwrite($h,$post);
								for($a=0,$r='';!$a;){
									$b=fread($h,8192);
									$r.=$b;
									$a=(($b=='')?1:0);
								}
								fclose($h);
								return $r;//r is the page that appears after the post has been submitted - usually confirmation page, as it would appear in a browser
	}
*/

/*===========================*/
//
//   GET PRODUCTS
//
/*===========================*/
/*
function get_products($Type=false){//used by Wordpress Admin panels to update all the products on the local database

	$query="select Id, Name, Event_Date__c, Product_Type__c, Subscription_Length__c, Standard_Price__c, Discount_Price__c from BenedixProduct__c";
	
	if($Type){
	
		$query.=" WHERE Product_Type__c='".$Type."'";
	}
	
	$Products=$this->connection->query($query);
	
	
	if($Products->done){
	
	return $Products->records;
	
	}else{
	
	echo "Error: could not retrieve products from the Salesforce database.";
	return false;
	} 
}//end get_products

*/

}//end class Integration


?>