<?php
header("Access-Control-Allow-Origin: *");
// error_reporting(E_ALL);
// ini_set("display_errors", 1);

date_default_timezone_set("Asia/Singapore");


session_start();

// Make sure we've got a name and email


	$leadpapad = $leadps2 = $leadphonec = $leadphonen	= "";
	$papaf ="";
	$leadfname 		= $_REQUEST['firstname'];
	$leadlname 		= $_REQUEST['lastname'];
	$leademail 		= urldecode($_REQUEST['email']);
	$leadtimez	= $_REQUEST['timesl'];
	$returnurl = $_REQUEST['returnurl'];


	if (isset($_REQUEST['papaff'])) {
		# code...
		$leadpapad		= $_REQUEST['papaff'];
	}

	if (isset($_REQUEST['phonec'])) {
		# code...
		$leadphonec		= $_REQUEST['phonec'];
		$leadphonen = $_REQUEST['payment_mobile_country_code'];
	}


	$guAutoregister = 0;
	if(isset($_REQUEST['guAutoregister'])){
		$guAutoregister = 1;
	}


$my_file = 'rego_14thjuly.txt';
$handle = fopen($my_file, 'a');

if ($handle) {
	# code...
$rego_date = date("Y-m-d");
//	$result = $rego_date->format('Y-m-d H:i:s');

$date   = new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d H:i:s');


	$data = "\n".$leademail.",".$leadfname.",".$leadlname.",".$result.",".$guAutoregister.','.$leadpapad;//.",".$returnurl;
fwrite($handle, $data);
}





     //print_r($result);



	if ( $leadfname != "" && $leademail != "" ) {

	
		$id = sfAddContact($leademail,  $leadfname, $leadlname, $leadphonen, $leadphonec, $leadtimez,$guAutoregister, $leadpapad);


		 header('Location:'.$returnurl.'?sfid='.$id);

	} // end if we've got a name and email


function sfAddContact($leademail, $leadfname , $leadlname, $leadphonen, $leadphonec, $leadtimez,$guAutoregister, $leadpapad  )
{



	// Get a new connection for this new "transaction"
	require('../sfapi/salesforce_integration.class.php');
	$Int = new salesforce_integration();//automatically connected to salesforce

	$sObjectsToUpdate=array();
	$sObjectsToCreate=array();

	$sCusObjectsToUpdate=array();
	$sCusObjectsToCreate=array();

	$PersonAccountQuery = "SELECT PersonContactId, Id FROM Account WHERE IsPersonAccount=true AND PersonEmail='".$leademail."' LIMIT 1 ";

	$Result = $Int->connection->query($PersonAccountQuery);
	if(count($Result->records)	>0){
		$salesforceId = $Result->records[0]->PersonContactId;

		$AccId = $Result->records[0]->Id;

			$iLabQuery = "SELECT Id FROM Marketing_Communication__c WHERE Name = 'Solutions Webinar - 29th July - Asia' AND Account__c = '".$AccId."'  LIMIT 1 ";

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
			$iLabQuery = "SELECT Id FROM Marketing_Communication__c WHERE Name = 'Solutions Webinar - 29th July - Asia' AND Account__c = '".$salesforceId."'  LIMIT 1 ";
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
		$sObject->MobilePhone		= $leadphonen. " ". $leadphonec ;


		//add to update array
		$sObjectsToUpdate[]=$sObject;





	}else{// Create them from scratch - add all the contact details


			$sObject->RecordTypeId='01290000000DDQXAA4';//make a person account
			$sObject->FirstName 				= $leadfname;
			$sObject->LastName 					= $leadlname;
			$sObject->PersonEmail 				= $leademail;
			
			$sObject->PersonHasOptedOutOfEmail  = 'false';
			$sObject->PersonMobilePhone 		= $leadphonen. " ". $leadphonec;



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
	$FieldName = 'Web_Form_application__c ';
	$sCusObject->$FieldName =  "Solutions Webinar - 29th July - Asia";
	
	$FieldName = 'Marketing_Source__c';
	$sCusObject->$FieldName =  $leadpapad;

	$FieldName = 'Web_Form_application_date__c';
	$sCusObject->$FieldName =  date("Y-m-d");

	// if ($leadphonec != '') {
	// 	# code...
	// 	$FieldName = 'Marketing_SMS_Opt_in__c';
	// $sCusObject->$FieldName =  "1";
	// }
	

	//echo "leadvalue:".$leadvalue;


	
	// Add custom field



	if ($guAutoregister) {

        $checkTempuser = "SELECT Id, IsPersonAccount ,GeniusU_User_URL__c FROM Contact WHERE Email='".$leademail."' LIMIT 1 ";
        $Result        = $Int->connection->query($checkTempuser);
        $response      = $Result->records[0];

        if (!property_exists($response, 'GeniusU_User_URL__c')) {
            $updateGeniususer             = new stdclass();
            $updateGeniususer->Id         = $Result->records[0]->Id;
            $FieldName                    = 'GeniusU_Temporary_User__c';
            $updateGeniususer->$FieldName = 1;
            $updateGeniususer_a[]         = $updateGeniususer;
            $response                     = $Int->connection->update($updateGeniususer_a, 'Contact');
			var_dump($response);
            echo "<hr>uppdated temp user<br />";
        }

	}



		if($guId){//existing ilAb Object
		//add id
		$sCusObject->Id				= $guId;
		$sCusObject->Account__c 		= $salesforceId;
	
		//add to update array
		$sCusObjectsToUpdate[]=$sCusObject;

		echo "updating marketing Commun Application object";

		
	
	
	}else{// Create them from scratch - add all the contact details
		
		
			//$sObject->RecordTypeId='01290000000DDQXAA4';//make a person account
			$sCusObject->Name				= "Solutions Webinar - 29th July - Asia";
			$sCusObject->Account__c 		= $salesforceId;
	
		
		echo "creating marketing Commun Application object";
					
 			/*$sObject->PersonLeadSource = 'Mastermind';			 */
			$sCusObjectsToCreate[]=$sCusObject;
	}

		//UPDATE AND CREATE ALL NEW SALESFORCE RECORDS
	if(count($sCusObjectsToUpdate)>0){
		//echo "<hr>Objects to Update<br />";
		//var_dump($sObjectsToUpdate);
		
		$updateCusResponse=$Int->connection->update($sCusObjectsToUpdate,'Marketing_Communication__c');
		echo "<hr>Update Response:<br />";
		return $updateCusResponse->id;
		  //return "success";

	  
	  //added by gavin 3/11/11 - getting error below (cannot use object as array) when trying to update tblparticipants table, code below expects an array of objects
		if(!is_array($updateCusResponse)) $updateCusResponse = array($updateCusResponse);
	}

	if(count($sCusObjectsToCreate)>0){
		//echo "<hr>Objects to Create<br />";
		//var_dump($sObjectsToCreate);
		$createCusResponse=$Int->connection->create($sCusObjectsToCreate,'Marketing_Communication__c');
		echo "<hr>CREATE RESPONSE<br />";
		return $createCusResponse->id;
		//return "success";
	}

echo $result;

//end aayu

}



?>
