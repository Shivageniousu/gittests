<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);
ini_set("display_errors", 1);

date_default_timezone_set("Asia/Singapore");


session_start();

// Make sure we've got a name and email

 
	$leadpapad = $leadps2		= "";
	$papaf ="";
	$leadfname 		= $_REQUEST['fn'];
	$leadlname 		= $_REQUEST['ln'];
	$leademail 		= urldecode($_REQUEST['em']);
	$returnurl = 'https://solutions.geniusu.com/scaleup/digital/webinar/asia/thankyou.php';  //$_REQUEST['returnurl']; 


	$leadpapad		= 'GeniusuEmail';

	if (isset($_REQUEST['papaff'])) {
		# code...
		$leadpapad		= $_REQUEST['papaff'];
	}



$my_file = 'webinar_rego.txt';
$handle = fopen($my_file, 'a') ;

$date   = new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d H:i:s');
if ($handle) {
	# code...

	$data = "\n".$leademail.",".$leadfname.",".$leadlname.",".$result;
fwrite($handle, $data);
}


header('Location:'.$returnurl.'?sfid=1');










     //print_r($result);



	if ( $leadfname != "" && $leademail != "" ) {

	//	$retjson = httpPost($leademail, $leadfname , $leadlname, $leadtimez);

		$id = sfAddContact($leademail,  $leadfname, $leadlname, $leadpapad);

		// echo "sfid: $id <br/>";
		//print_r($retjson);
		 header('Location:'.$returnurl.'?sfid='.$id);

	} // end if we've got a name and email


function sfAddContact($leademail, $leadfname , $leadlname, $leadpapad  )
{

	//grab pap referrer
	//include ("../pap/PapApi.class.php");

	//global $affiliate;

	// $session = new Gpf_Api_Session("http://affiliate.wd-central.com/scripts/server.php");

	// if(!$session->login("affiliateadmin@wd-central.com", "pap2020")) { // change it here please
	//   //die("Cannot login. Message: ".$session->getMessage());
	// }
	// else
	// {

	// 	$clickTracker = new Pap_Api_ClickTracker($session);

	// 	try {
	// 	// save the cookies first, if the parameters exist in the link
	// 	    $clickTracker->track();
	// 	    $clickTracker->saveCookies();

	// 	    if ($clickTracker->getAffiliate() != null) {

	// 	    	$affiliate = $clickTracker->getAffiliate()->getValue('refid');
	// 	    }
	// 	} catch (Exception $e) {
	// 	    //die("Error while communicating with PAP: ".$e->getMessage());
	// 	}
	// }

	// Get a new connection for this new "transaction"
	require('../sfapi/salesforce_integration.class.php');
	$Int = new salesforce_integration();//automatically connected to salesforce

	$sObjectsToUpdate=array();
	$sObjectsToCreate=array();

	$sCusObjectsToUpdate=array();
	$sCusObjectsToCreate=array();

	$PersonAccountQuery = "SELECT PersonContactId, Id FROM Account WHERE IsPersonAccount=true AND PersonEmail='".$leademail."' LIMIT 1 ";

	//echo "<hr />Person Account Query:".$PersonAccountQuery;
	$Result = $Int->connection->query($PersonAccountQuery);
	if(count($Result->records)	>0){
		$salesforceId = $Result->records[0]->PersonContactId;

		$AccId = $Result->records[0]->Id;

		// echo "accid:".$AccId ;

		// echo "here";
			$iLabQuery = "SELECT Id FROM GU_Service__c WHERE Name = 'VIP Masterclass Series 3 - Asia' AND Account__c = '".$AccId."'  LIMIT 1 ";

			// echo "ilabqueyr:".$iLabQuery;
			$Result2 = $Int->connection->query($iLabQuery);
			var_dump($Result2) ;
				if(count($Result2->records)	>0){
					$guId = $Result2->records[0]->Id;

						// echo "guid3:".$guId;

						// echo "guid4:".$Result2->records[0]->Id;
						}
							else
							{
								$guId =  false;
						}

						// echo "guid1:".$guId;

	}else{
		$salesforceId = false;
	}

	if(!$salesforceId){ //still not found them

		$CorporateContactQuery = "SELECT Id, IsPersonAccount FROM Contact WHERE Email='".$leademail."' LIMIT 1 ";
		//echo "<hr />Corporate Contact Query:".$CorporateContactQuery;
		$Result = $Int->connection->query($CorporateContactQuery);
		if(count($Result->records)	>0){
			//var_dump($Result);
			$salesforceId = $Result->records[0]->Id;
		// echo "here2";
			$iLabQuery = "SELECT Id FROM GU_Service__c WHERE Name = 'VIP Masterclass Series 3 - Asia' AND Account__c = '".$salesforceId."'  LIMIT 1 ";
			$Result2 = $Int->connection->query($iLabQuery);
				if(count($Result2->records)	>0){
					$guId = $Result2->records[0]->Id;

						}
							else
							{
								$guId =  false;
						}

						// echo "guid2:".$guId;

		}else{
			$salesforceId = false;
		}

	}//end if SalesforceId false


	//===================== //
	//
	//	SET UP THE sObject AND ADD ALL DATA
	//
	//===================== //
	$sObject = new stdclass();


	$sCusObject = new stdclass();


	// Need to get correct postfix, depending on whether we're updating them (__c, for contacts), or creating an account
	if($salesforceId){//existing contact
		$Postfix = '__c';
	}else{
		$Postfix = '__pc';
	}

	// Add custom field


	if ($leadpapad != '') {
			$FieldName = 'PAP_Referrer'.$Postfix;
	$sObject->$FieldName =  $leadpapad;
		# code...
	}


	// if ($leadutm != '') {
	// 		$FieldName = 'UTM_Source'.$Postfix;
	// $sObject->$FieldName =  $leadutm;
	// 	# code...
	// }

/* 	var_dump($affiliate); */

	//Add to appropriate batch
	if($salesforceId){//existing contact
		//add id
		$sObject->Id				= $salesforceId;
		$sObject->FirstName 		= $leadfname;
		$sObject->LastName 			= $leadlname;

		$sObject->HasOptedOutOfEmail = 'false';
		// $sObject->MobilePhone		= $leadphonec. " ". $leadphonen ;


		//add to update array
		$sObjectsToUpdate[]=$sObject;





	}else{// Create them from scratch - add all the contact details


			$sObject->RecordTypeId='01290000000DDQXAA4';//make a person account
			$sObject->FirstName 				= $leadfname;
			$sObject->LastName 					= $leadlname;
			$sObject->PersonEmail 				= $leademail;

			$sObject->PersonHasOptedOutOfEmail  = 'false';
			// $sObject->PersonMobilePhone 		= $leadphonec. " ". $leadphonen;



 			/*$sObject->PersonLeadSource = 'Mastermind';			 */
			$sObjectsToCreate[]=$sObject;
	}




		//UPDATE AND CREATE ALL NEW SALESFORCE RECORDS
	if(count($sObjectsToUpdate)>0){
		//echo "<hr>Objects to Update<br />";
		//var_dump($sObjectsToUpdate);

		$updateResponse=$Int->connection->update($sObjectsToUpdate,'Contact');
		//echo "<hr>Update Response:<br />";

		$salesforceId = $updateResponse->id;
		//return $updateResponse->id;



	  //added by gavin 3/11/11 - getting error below (cannot use object as array) when trying to update tblparticipants table, code below expects an array of objects
		if(!is_array($updateResponse)) $updateResponse = array($updateResponse);
	}

	if(count($sObjectsToCreate)>0){
		//echo "<hr>Objects to Create<br />";
		//var_dump($sObjectsToCreate);
		$createResponse=$Int->connection->create($sObjectsToCreate,'Account');


		$salesforceId = $createResponse->id;
		//echo "<hr>CREATE RESPONSE<br />";
		//return $createResponse->id;
	}

	//start aayu

	// header("Location:.$result["user"]["thank_you_url"].");
	$FieldName = 'Web_Form_application__c';
	$sCusObject->$FieldName =  "VIP Masterclass Series 3 - Asia";


	$FieldName = 'Web_Form_application_date__c';
	$sCusObject->$FieldName =  date("Y-m-d");

	$FieldName = 'Marketing_Source__c';
	$sCusObject->$FieldName =  $leadpapad;




	//echo "leadvalue:".$leadvalue;



	// Add custom field






		if($guId){//existing ilAb Object
		//add id
		$sCusObject->Id				= $guId;
		$sCusObject->Account__c 		= $salesforceId;

		//add to update array
		$sCusObjectsToUpdate[]=$sCusObject;

		echo "updating marketing Commun Application object";




	}else{// Create them from scratch - add all the contact details


			//$sObject->RecordTypeId='01290000000DDQXAA4';//make a person account
			$sCusObject->Name				= "VIP Masterclass Series 3 - Asia";
			$sCusObject->Account__c 		= $salesforceId;


		echo "creating marketing Commun Application object";

 			/*$sObject->PersonLeadSource = 'Mastermind';			 */
			$sCusObjectsToCreate[]=$sCusObject;
	}

		//UPDATE AND CREATE ALL NEW SALESFORCE RECORDS
	if(count($sCusObjectsToUpdate)>0){
		//echo "<hr>Objects to Update<br />";
		//var_dump($sObjectsToUpdate);

		$updateCusResponse=$Int->connection->update($sCusObjectsToUpdate,'GU_Service__c');
		echo "<hr>Update Response:<br />";
		return $updateCusResponse->id;
		  //return "success";


	  //added by gavin 3/11/11 - getting error below (cannot use object as array) when trying to update tblparticipants table, code below expects an array of objects
		if(!is_array($updateCusResponse)) $updateCusResponse = array($updateCusResponse);
	}

	if(count($sCusObjectsToCreate)>0){
		//echo "<hr>Objects to Create<br />";
		//var_dump($sObjectsToCreate);
		$createCusResponse=$Int->connection->create($sCusObjectsToCreate,'GU_Service__c');
		echo "<hr>CREATE RESPONSE<br />";
		return $createCusResponse->id;
		//return "success";
	}

echo $result;

//end aayu

}



?>
