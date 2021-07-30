<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);
ini_set("display_errors", 1);

date_default_timezone_set('Asia/Singapore');



	$sfid = $_REQUEST['id'];

	if ($sfid != '' && strlen($sfid) > 14) {
		# code...

	//$guId = $sfid;

	require('../sfapi/salesforce_integration.class.php');
	$Int = new salesforce_integration();//automatically connected to salesforce



	$sCusObjectsToUpdate=array();
	//$sCusObjectsToCreate=array();


	$FieldName = 'Genius_Solutions_Webinar_Attended__c';
	$sCusObject->$FieldName =  "1";

	$FieldName = 'Genius_Solutions_Webinar_Attended_Date__c';
	$sCusObject->$FieldName =  date("Y-m-d");


	$iLabQuery = "SELECT Id FROM GU_Service__c WHERE Id = '".$sfid."'" ;

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


		if($guId){
		$sCusObject->Id				= $guId;
		//$sCusObject->Account__c 		= $salesforceId;

		//add to update array
		$sCusObjectsToUpdate[]=$sCusObject;

		echo "updating marketing Commun Application object";

		$updateCusResponse=$Int->connection->update($sCusObjectsToUpdate,'GU_Service__c');
		echo "$updateCusResponse->id";
		//return $updateCusResponse->id;
		}

		else
		{
			echo "failure - incorrect id";
		}

	}
	else
	{
		echo "failure - no id";
	}

?>
