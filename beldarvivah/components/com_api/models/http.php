<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
/**
 * @package com_api
 * @copyright Copyright (C) 2009 2014 Techjoomla, Tekdi Technologies Pvt. Ltd. All rights reserved.
 * @license GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 * @link http://techjoomla.com
 * Work derived from the original RESTful API by Techjoomla (https://github.com/techjoomla/Joomla-REST-API) 
 * and the com_api extension by Brian Edgerton (http://www.edgewebworks.com)
*/

defined('_JEXEC') or die;
jimport('joomla.application.component.model');

class ApiModelHttp extends ApiModel
{

	public function executeRequest2($case,$data){
				return 'No Credit';
			switch ($case) {
				case 'register':
					$return=$this->register($data);
					return $return;
					break;
				case 'checkIfEmailExists':
					$return=$this->checkEmailExists($data);
					return $return;
					break;
				case 'checkUsernameExists':
					$return=$this->checkUsernameExists($data);
					return $return;
					break;

				case 'login':
					$return=$this->login($data);
					return $return;
					break;
				case 'checkIfRegisteredExists':
					$return=$this->checkEmailExists($data);
					return $return;
					break;

				case 'sendOtp':
					$return=$this->sendOtp($data);
					return $return;
					break;

				case 'resetPassNew':
				$return=$this->resetPassNew($data);
				return $return;
				break;

				case 'getActivityQuestions':
				$return=$this->getActivityQuestions($data);
				return $return;
				break;

				case 'getChildQuestionSet':
				$return=$this->getChildQuestionSet($data);
				return $return;
				break;

				case 'getChildActivityQuestions':
				$return=$this->getChildActivityQuestions($data);
				return $return;
				break;


				
				

				case 'storePoints':
				$return=$this->storePoints($data);
				return $return;
				break;

				case 'getTestResults':
				$return=$this->getTestResults($data);
				return $return;
				break;

				case 'testresultdoctor':
				$return=$this->testresultdoctor($data);
				return $return;
				break;


				
				
				
				default:
					return true; 	
					break;
			}
	}

	public function executeRequest($case,$data){
		
		switch ($case) {
			case 'registerUser':
				$return=$this->registerUser($data);
				return $return;
				break;
			case 'checkIfUsernameExists':
				$return=$this->checkIfUsernameExists($data);
				return $return;
				break;

			case 'checkIfEmailExists':
				$return=$this->checkIfEmailExists($data);
				return $return;
				break;

			case 'getCasteForDropdown':
				$return=$this->getCasteForDropdown();
				return $return;
				break;

			case 'getSubcasteForDropdown':
				$return=$this->getSubcasteForDropdown($data);
				return $return;
				break;

			case 'getStates':
				$return=$this->getStates($data);
				return $return;
				break;

			case 'getCities':
				$return=$this->getCities($data);
				return $return;
				break;

			case 'storeTemporaryImage':
				$return=$this->storeTemporaryImage($data);
				return $return;
				break;

			case 'storeImage':
				$return=$this->storeImage($data);
				return $return;
				break;

			case 'loginUser':
				$return=$this->loginUser($data);
				return $return;
				break;

			case 'removeProfilePicture':
				$return=$this->removeProfilePicture($data);
				return $return;
				break;

			case 'getProfile':
				$return=$this->getProfile($data);
				return $return;
				break;

			case 'editProfile':
				$return=$this->editProfile($data);
				return $return;
				break;

			case 'getAllCandidates':
				$return=$this->getAllCandidates($data);
				return $return;
				break;

			case 'getAllMyInterests':
				$return=$this->getAllMyInterests($data);
				return $return;
				break;

				
			case 'getMyMatches':
				$return=$this->getMyMatches($data);
				return $return;
				break;

			case 'getMyVisits':
				$return=$this->getMyVisits($data);
				return $return;
				break;

			case 'recordVisit':
				$return=$this->recordVisit($data);
				return $return;
				break;

			case 'sendMatch':
				$return=$this->sendMatch($data);
				return $return;
				break;


			case 'checkIfmatched':
				$return=$this->checkIfmatched($data);
				return $return;
				break;

			case 'checkIfmatchback':
				$return=$this->checkIfmatchback($data);
				return $return;
				break; 

			case 'sendMatchBack':
				$return=$this->sendMatchBack($data);
				return $return;
				break; 

			case 'checkIfmatchRecieved':
				$return=$this->checkIfmatchRecieved($data);
				return $return;
				break; 

			case 'sendInvite':
				$return=$this->sendInvite($data);
				return $return;
				break; 

			case 'changepassword':
				$return=$this->changepassword($data);
				return $return;
				break; 

			case 'recordFeedback':
				$return=$this->recordFeedback($data);
				return $return;
				break; 

			case 'sentRestOtp':
				$return=$this->sentRestOtp($data);
				return $return;
				break; 

			case 'resetPass':
			$return=$this->resetPass($data);
			return $return;
			break;

			case 'getMarryingSoon':
			$return=$this->getMarryingSoon($data);
			return $return;
			break;

			case 'getPopularCandidates':
			$return=$this->getPopularCandidates($data);
			return $return;
			break;

			case 'updateFcmToken':
			$return=$this->updateFcmToken($data);
			return $return;
			break;

			case 'handlePushNotifications':
			$return=$this->handlePushNotifications($data);
			return $return;
			break;

			case 'getNotificationCount':
			$return=$this->getNotificationCount($data);
			return $return;
			break;

			case 'getNotifications':
			$return=$this->getNotifications($data);
			return $return;
			break;

			case 'registerMac':
			$return=$this->registerMac($data);
			return $return;
			break;



			case 'updateEspFcmToken':
			$return=$this->updateEspFcmToken($data);
			return $return;
			break;


			case 'loginEspUser':
			$return=$this->loginEspUser($data);
			return $return;
			break;

			case 'processESPRequest':
			$return=$this->processESPRequest($data);
			return $return;
			break;

				
			


			



			
			
			default:
				return 'true';
				break;
		}
		
	}

		function sendesppushnotification($fcmtoken,$message,$action)
    {  

             $key="AAAA8_WtqAw:APA91bEwBIcTZfasr60tJV9d0oni0oPpmVJGMqJfrJgkkXtHD5Ius8I0l7hapivPyvzVNTY5kcJvntn_at_4qye6N9G59VmayRju2ceM6LaY-z4I925ftB7IeHh5VX6sYrT0lnGBIlcx";
             $title='Virtual Punchin';

            $to=$fcmtoken;
			$ch = curl_init("https://fcm.googleapis.com/fcm/send");
            $header=array('Content-Type: application/json',
            "Authorization: key=$key");
             curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
             curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
			 curl_setopt($ch, CURLOPT_POST, 1);
             curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"notification\": {    \"title\": \"$action\",    \"text\":\"$message\"  },    \"to\" : \"$to\"}");
			curl_exec($ch);
            curl_close($ch);


       }

	function processESPRequest($data){
		// $vicinity_mac=$data['MAC'];
		$today=date('Y-m-d');
		$db = JFactory::getDbo();
		foreach ($data as $key => $mac) {
			$query="SELECT id,mac,fcmtoken from f919a_esp_registerations where mac='".$mac."'";
				$db->setQuery($query);
				$db->query();
				$result=$db->loadObject();

				if(!empty($result)){
					/*
						check here if already logged in and notify user if not


					*/
				$fcmtoken=$result->$fcmtoken;

			
				$query="SELECT * from f919a_esp_attendance where user_id='".$result->id."' AND punched_out='0000-00-00 00:00:00' AND punched_in LIKE '%".$today."%'";
				// return $query;
				$db->setQuery($query);
				$db->query();
				$result2=$db->loadObject();
				// return $query;
				if(empty($result2)){

					// insert into attendance table and notify
						$object= new stdClass();
						$object->user_id= $result->id;
						$object->punched_in = date("Y-m-d H:i:s");
						
						$insert = JFactory::getDbo()->insertObject('f919a_esp_attendance', $object);
						
						$message='Punched In Successfully at '.date("Y-m-d H:i:s");
						$response=$this->sendesppushnotification($result->fcmtoken,$message,'Punch In');
						
						echo " \n \nNotified about punchin to userid: ".$result->id."\n\n";
				}

				


				}


		



		}


	

		foreach ($punched_in as $key => $value) {
			$query="SELECT mac from f919a_esp_registerations where id  = '".$value->user_id."' ";
			
			$db->setQuery($query);
			$db->query();
			$mac=$db->loadResult();
			$punched_in_macs[]=$mac;
		}

		$logged_out_users=array();
		foreach ($punched_in_macs as $key => $eachMac) {

			$query="SELECT id,fcmtoken from f919a_esp_registerations where mac  = '".$eachMac."' ";
			$db->setQuery($query);
			$db->query();
			$details=$db->loadObject();
			// echo $details->id;
			// echo $details->fcmtoken;
			if(in_array($eachMac, $data)){
				echo "\n\n\nuser '".$details->id."' still in vicinity";
			}else{

				
					

					echo "\n\n\nuser '".$details->id."'not found , sending punch out notification \n\n\n";
					$update  = new stdClass();
					$update->user_id = $details->id;
					$update->punched_out =date("Y-m-d H:i:s");
					$db->updateObject('f919a_esp_attendance',$update,'user_id');

					$message='Punched out Successfully at '.date("Y-m-d H:i:s");
					$response=$this->sendesppushnotification($details->fcmtoken,$message,'Punch Out');
						
					echo " \n \nNotified about punchout to userid: ".$details->id."\n\n";

			}
		}

		echo "\n\n\n End Of cycle";


		
	}

	function loginEspUser($data){
		$email=$data['email'];
		$password=md5($data['password']);


	$db = JFactory::getDbo();
	$query="SELECT * from f919a_esp_registerations where email='".$email."' AND password='".$password."'";
		$db->setQuery($query);
		$db->query();
		$result=$db->loadObject();
		// return $query;
		if(!empty($result)){
			$return=array();
			$return['status']=true;
			$return['msg']=$result;

			return $return;
		}else{
			$return=array();
			$return['status']=false;
			$return['msg']='Invalid Email or Password';

			return $return;
		}
	}

	function updateEspFcmToken($data){

		$userid=$data['userid'];
		$newToken=$data['newToken'];


		$db = JFactory::getDbo();
		$update  = new stdClass();
		$update->id = $userid;
		$update->fcmtoken =$newToken;
		$db->updateObject('f919a_esp_registerations',$update,'id');

		return true;
	}

	function registerMac($data){

		$db = JFactory::getDbo();
		$query="SELECT * from f919a_esp_registerations where email='".$data['email']."'";
		$db->setQuery($query);
		$db->query();
		$result=$db->loadObjectList();
		if(!empty($result)){
			return 'exists';
		}


		$object= new stdClass();
		$object->email= $data['email'];
		$object->password =md5($data['password']);
		$object->mac =$data['mac'];
		
		$result = JFactory::getDbo()->insertObject('f919a_esp_registerations', $object);
		if($result==true){

			$query="SELECT * from f919a_esp_registerations where email='".$data['email']."'";
			$db->setQuery($query);
			$db->query();
			$result=$db->loadObject();
			return $result;
		}else{
			return false;
		}
		
	}

	function getNotifications($data){
		$userid=$data['userid'];

		$db = JFactory::getDbo();
		$update  = new stdClass();
		$update->receiver = $userid;
		$update->seen =1;
		$db->updateObject('f919a_notifications',$update,'receiver');

	$notifications=array();
	$eachNotification=array();
	$query="SELECT * from f919a_notifications where receiver = '".$data['userid']."'";
	$db->setQuery($query);
	$result=$db->loadObjectList();

	foreach ($result as $key => $res) {
		$eachNotification['sender']=$res->sender;
		$eachNotification['msg']=$res->msg;
		$eachNotification['timestamp']=$res->timestamp;
		$notifications[]=$eachNotification;
	}
	$return=array();
	$return['notifications']=$notifications;
	return $return;

		

	}

	function getNotificationCount($data){

	$db = JFactory::getDbo();
	$query="SELECT count(*) from f919a_notifications where receiver = '".$data['userid']."' AND seen=0";
		$db->setQuery($query);

    	$db->query();

    	$result=$db->loadResult();

    	return $result;
	}


	function handlePushNotifications($data){

		$type=$data['notification_type'];
		switch ($type) {
			case 'match':
			$sender_id=$data['sender_id'];
			$reciever_id=$data['reciever_id'];
			$fcmtoken=$this->getFcmTokenFromUserId($reciever_id);
			$message=$data['msg'];
			$result=$this->sendpushnotification($fcmtoken,$message);
			$log=$this->logNotifications($sender_id,$reciever_id,$message);
				
				break;

			case 'match-back':
			$sender_id=$data['sender_id'];
			$reciever_id=$data['reciever_id'];
			$fcmtoken=$this->getFcmTokenFromUserId($reciever_id);
			$message=$data['msg'];
			$result=$this->sendpushnotification($fcmtoken,$message);
			$log=$this->logNotifications($sender_id,$reciever_id,$message);
				
			break;

			case 'visit':
			$sender_id=$data['sender_id'];
			$reciever_id=$data['reciever_id'];

			// return if already sent before

				$res=$this->checkifAlreadyVisited($sender_id,$reciever_id);
				if($res==true){
					return;
				}
			//

			$fcmtoken=$this->getFcmTokenFromUserId($reciever_id);
			$message=$data['msg'];
			$result=$this->sendpushnotification($fcmtoken,$message);
			$log=$this->logNotifications($sender_id,$reciever_id,$message);
				
			break;
			
			default:
				
				break;
		}
	}

	function checkifAlreadyVisited($sender_id,$reciever_id){

		$db = JFactory::getDbo();
		$query="SELECT * from f919a_visits where userid = '".$sender_id."' 
		AND memberid='".$reciever_id."'";
		$db->setQuery($query);

    	$db->query();

    	$result=$db->loadObjectList();
    	if(count($result)>1){
    		return true;
    	}else{
    		return false;
    	}

	}

	function logNotifications($sender_id,$reciever_id,$message){
		$db = JFactory::getDbo();
		$object= new stdClass();
		$object->sender= $sender_id;
		$object->receiver =$reciever_id;
		$object->msg =$message;
		$object->seen =0;
		$result = JFactory::getDbo()->insertObject('f919a_notifications', $object);
	}

	function getFcmTokenFromUserId($reciever_id){

		$db = JFactory::getDbo();
		$query="SELECT fcm_token from f919a_users where id = '".$reciever_id."'";
		$db->setQuery($query);

    	$db->query();

    	$result=$db->loadResult();

    	return $result;
	}

	function updateFcmToken($data){

		$userid=$data['userid'];
		$newToken=$data['newToken'];


		$db = JFactory::getDbo();
		$update  = new stdClass();
		$update->id = $userid;
		$update->fcm_token =$newToken;
		$db->updateObject('f919a_users',$update,'id');

		return true;
	}

	function sendpushnotification($fcmtoken,$message)
    {  

             $key="AAAAfr3AwW0:APA91bHRvlOwxbmGwVpGdoxyXOSc-wEQ7eI6whH2yP0F_HZ4yzGFTeyQOz7Pau_xG-dP0BxenjtKOP2PKrzyqnrlAggi5uTVnqxtDFI5hxM06xlBbEr2QJdmkxBEj9qSMvUf0oO0s2mHOyrYKBn6CuUtoQDHZ8KFCQ";
             $title='बेलदार विवाह';

            $to=$fcmtoken;
			$ch = curl_init("https://fcm.googleapis.com/fcm/send");
            $header=array('Content-Type: application/json',
            "Authorization: key=$key");
             curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
             curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
			 curl_setopt($ch, CURLOPT_POST, 1);
             curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"notification\": {    \"title\": \"बेलदार विवाह\",    \"text\":\"$message\"  },    \"to\" : \"$to\"}");
			curl_exec($ch);
            curl_close($ch);


       }



	function getPopularCandidates($data){

		$db = JFactory::getDbo();
		$query="SELECT DISTINCT memberid from f919a_visits WHERE memberid!='".$data['user_id']."' LIMIT 5";
		$db->setQuery($query,$start,$end);
		$db->query();
		$result=$db->loadObjectList();

		$candidates=array();

		foreach ($result as $key => $res) {

			$query="SELECT * from f919a_user_basic_details WHERE user_id='".$res->memberid."'";
			$db->setQuery($query,$start,$end);
			$db->query();
			$candidates[]=$db->loadObject();
			
		}

		
	

		foreach ($candidates as $key => $res) {
			$user=array();
			$name=ucfirst($res->first_name).' '.ucfirst($res->last_name);
			if($res->gender=='M'){

				$gender='Male';
			}else{

				$gender='Female';
			}

			$caste='बेलदार';
			if($res->subcaste!=24){
			$subcaste=$this->getSubcaseFromCasteID($res->subcaste);	
			}else{
				$subcaste=$res->specify;
			}
		
			$profile_pic_url=$res->profile_pic;

			$maritial=$this->getMarritalStatusFromId($res->maritial_status);

			$query="SELECT count(*) from f919a_visits WHERE memberid='".$data['user']."' AND userid='".$res->user_id."'";
			$db->setQuery($query,$start,$end);
			$db->query();
			$times=$db->loadResult();

			$user['userid']=$res->user_id;
			$user['name']=ucfirst($name);
			$user['gender']=ucfirst($gender);
			$user['maritial']=ucfirst($maritial);
			$user['subcaste']=$subcaste;
			$user['profile_pic_url']=$profile_pic_url;
			$user['age']=$this->getAge($res->dob);
			$user['times']=$times;


			$candidate[]=$user;
			
		}

		return $candidate;
	}
	function getMarryingSoon($data){

		$userid=$data['user'];
		$start=$data['start'];
		$end=$data['end'];

		$db = JFactory::getDbo();
		$query1="SELECT * from f919a_user_basic_details d WHERE d.user_id!='".$data['user']."' AND d.marrying_in!=''";
		if($data['who']){

			$query1.=" AND d.gender='".$data['who']."'";
		}

		if($data['marrying_in']){

			$query1.=' AND d.marrying_in='.$data['marrying_in'];
		}

		

			$query1.=' order by d.marrying_in ASC';
		
		$db->setQuery($query1,$start,$end);
		$db->query();
		$result=$db->loadObjectList();
		$candidates=array();

		foreach ($result as $key => $res) {
			$user=array();
			$name=ucfirst($res->first_name).' '.ucfirst($res->last_name);
			if($res->gender=='M'){

				$gender='Male';
			}else{

				$gender='Female';
			}

			$caste='बेलदार';
			if($res->subcaste!=24){
			$subcaste=$this->getSubcaseFromCasteID($res->subcaste);	
			}else{
				$subcaste=$res->specify;
			}
		
			$profile_pic_url=$res->profile_pic;

			$maritial=$this->getMarritalStatusFromId($res->maritial_status);

			$user['userid']=$res->user_id;
			$user['name']=ucfirst($name);
			$user['gender']=ucfirst($gender);
			$user['maritial']=ucfirst($maritial);
			$user['subcaste']=$subcaste;
			$user['profile_pic_url']=$profile_pic_url;
			$user['age']=$this->getAge($res->dob);
			if($res->marrying_in){

			if($res->marrying_in=='>5'){
				$res->marrying_in='More Than 5';
			}
			$user['marrying_in']=$res->marrying_in.' years';

			}



			$candidates[]=$user;
			
		}


		$db = JFactory::getDbo();
		$query="SELECT count(*) from f919a_user_basic_details WHERE user_id!='".$data['user']."'";

		if($data['who']){

			$query.=" AND gender='".$data['who']."'";
		}

		if($data['maritial_status']){

			$query.=' AND maritial_status='.$data['maritial_status'];
		}

		if($data['subcaste']){

			$query.=' AND subcaste='.$data['subcaste'];
		}

		$db->setQuery($query);
		$db->query();
		$count=$db->loadResult();
		$count=$count-$end;





		$result=array();
		$result['candidates']=$candidates;
		$result['end']=$end;
		$result['count']=$count-$end;
		$result['query']=$query1;
		



		return $result;
	}

	function getActivityQuestions($data){
		if($data['type']=='parent'){

			$db = JFactory::getDbo();
			$sql="SELECT q.id,q.question,q.suspected_answer from g21c8_parents_questions q where q.active=1";
			$db->setQuery($sql);
			$db->query();
			$questions=$db->loadObjectList();
			$array=array();
			foreach ($questions as $key => $eachQuestion) {
				# code...
				
				$array[$eachQuestion->id]['question']=$eachQuestion->question;
				$array[$eachQuestion->id]['answer']=$eachQuestion->suspected_answer;
			}
			return $array;
		}
	}

	function getChildQuestionSet($data){

		$db = JFactory::getDbo();
			$sql="SELECT q.* from g21c8_childrens_questionaire q where q.active=1";
			$db->setQuery($sql);
			$db->query();
			$questions=$db->loadObjectList();
			$return=array();
			$answers=array();
			foreach ($questions as $key => $res) {
				$return[$res->id]['question']=$res->question;
				$answers['never']=$res->never;
				$answers['rarely']=$res->rarely;
				$answers['sometimes']=$res->sometimes;
				$answers['often']=$res->often;
				$answers['very_often']=$res->very_often;
				$return[$res->id]['answer']=$answers;

			}
			return $return;

	}


	function getChildActivityQuestions($data){

		$db = JFactory::getDbo();
			$sql="SELECT id,question,type from g21c8_activity_questions where active=1";
			$db->setQuery($sql);
			$db->query();
			$questions=$db->loadObjectList();
			return $questions;
	}


	function getTestResults($data){

		$db = JFactory::getDbo();
		$sql="SELECT u.username,u.email,p.points,p.risk,p.status,p.timestamp from g21c8_points p LEFT JOIN g21c8_users u ON u.id=p.userid WHERE p.userid='".$data['userid']."' order by p.id DESC";
		$db->setQuery($sql);
		$db->query($data['start'],$data['end']);
		$result=$db->loadObjectList();
		return $result;
	}

	function testresultdoctor($data){
		$db = JFactory::getDbo();
		$sql="SELECT u.username,u.email,u.phone,p.points,p.status,p.risk,p.timestamp from g21c8_points p LEFT JOIN g21c8_users u ON u.id=p.userid order by p.id DESC";
		$db->setQuery($sql);
		$db->query($data['start'],$data['end']);
		$result=$db->loadObjectList();
		return $result;
	}


	function storePoints($data){

		$db = JFactory::getDbo();
		$object= new stdClass();
		$object->userid= $data['userid'];
		$object->points =$data['points'];
		$object->type =$data['type'];
		$object->risk =$data['risk'];
		$object->status =$data['status'];
		$object->timestamp =date('Y-m-d');
		
		$result = JFactory::getDbo()->insertObject('g21c8_points', $object);

		return true;
	}

	function resetPassNew($data){

		$email=$data['email'];
		$password=$data['password'];
		$db = JFactory::getDbo();

		$sql="SELECT id from g21c8_users where email='".$email."'";
		$db->setQuery($sql);
		$db->query();
		$userid=$db->loadResult();


		$update  = new stdClass();
		$update->id = $userid;
		$update->password =md5($password);
		$db->updateObject('g21c8_users',$update,'id');

		return true;
	}


	function resetPass($data){


		$email=$data['email'];
		$password=$data['password'];
		$db = JFactory::getDbo();

		$sql="SELECT user_id from f919a_user_basic_details where email='".$email."'";
		$db->setQuery($sql);
		$db->query();
		$userid=$db->loadResult();


		$update  = new stdClass();
		$update->id = $userid;
		$update->password =md5($password);
		$db->updateObject('f919a_users',$update,'id');

		return true;
	}

	function sendOtp($data){

		// the message
		$digits = 6;
		$otp=rand(pow(10, $digits-1), pow(10, $digits)-1);
		$message='Your reset password otp is: '.$otp;
		// $message=$this->getResetEmail($otp,$data);
		// return $message;
		// return $message;	
			
	
            
            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = $data['email'];
			$cleanedFrom='support@autismdetector.com';
			
			$subject = 'Reset password OTP';
			
			$headers = "From: " . $cleanedFrom . "\r\n";
			$headers .= "Reply-To: ". strip_tags($cleanedFrom) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if (mail($to, $subject, $message, $headers)) {
            	$return=array();
            	$return['otp']=$otp;
            	$return['status']=true;
             return $return;
            } else {
              	$return=array();
            	$return['otp']=$otp;
            	$return['status']=false;
            	   return $return;
            }
	}


	function sentRestOtp($data){

		// the message
		$digits = 6;
		$otp=rand(pow(10, $digits-1), pow(10, $digits)-1);
	
		$message=$this->getResetEmail($otp,$data);
		// return $message;
		// return $message;	
			
	
            
            //   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = $data['email'];
			$cleanedFrom='support@beldarvivah.com';
			
			$subject = 'Reset password OTP';
			
			$headers = "From: " . $cleanedFrom . "\r\n";
			$headers .= "Reply-To: ". strip_tags($cleanedFrom) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if (mail($to, $subject, $message, $headers)) {
            	$return=array();
            	$return['otp']=$otp;
            	$return['status']=true;
             return $return;
            } else {
              	$return=array();
            	$return['otp']=$otp;
            	$return['status']=false;
            	   return $return;
            }
	}

	function getResetEmail($otp,$data){
		$email=$data['email'];

		$db = JFactory::getDbo();
		$query="SELECT first_name from f919a_user_basic_details where email = '".$email."'";
		$db->setQuery($query);

    	$db->query();
		$first_name=$db->loadResult();

		$message='';

		$message .='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$message .='<html xmlns="http://www.w3.org/1999/xhtml">';
		$message .='<head>';
		$message .='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		$message .='<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
		$message .='<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
		$message .='<title></title>';
		$message .='<style type="text/css">';
		$message .='* {';
		$message .='-webkit-font-smoothing: antialiased;';
		$message .='}';
		$message .='body {';
		$message .='Margin: 0;';
		$message .='padding: 0;';
		$message .='min-width: 100%;';
		$message .='font-family: Arial, sans-serif;';
		$message .='-webkit-font-smoothing: antialiased;';
		$message .='mso-line-height-rule: exactly;';
		$message .='}';
		$message .='table {';
		$message .='border-spacing: 0;';
		$message .='color: #333333;';
		$message .='font-family: Arial, sans-serif;';
		$message .='}';
		$message .='img {';
		$message .='border: 0;';
		$message .='}';
		$message .='.wrapper {';
		$message .='width: 100%;';
		$message .='table-layout: fixed;';
		$message .='-webkit-text-size-adjust: 100%;';
		$message .='-ms-text-size-adjust: 100%;';
		$message .='}';
		$message .='.webkit {';
		$message .='max-width: 600px;';
		$message .='}';
		$message .='.outer {';
		$message .='Margin: 0 auto;';
		$message .='width: 100%;';
		$message .='max-width: 600px;';
		$message .='}';
		$message .='.full-width-image img {';
		$message .='width: 100%;';
		$message .='max-width: 600px;';
		$message .='height: auto;';
		$message .='}';
		$message .='.inner {';
		$message .='padding: 10px;';
		$message .='}';
		$message .='p {';
		$message .='Margin: 0;';
		$message .='padding-bottom: 10px;';
		$message .='}';
		$message .='.h1 {';
		$message .='font-size: 21px;';
		$message .='font-weight: bold;';
		$message .='Margin-top: 15px;';
		$message .='Margin-bottom: 5px;';
		$message .='font-family: Arial, sans-serif;';
		$message .='-webkit-font-smoothing: antialiased;';
		$message .='}';
		$message .='.h2 {';
		$message .='font-size: 18px;';
		$message .='font-weight: bold;';
		$message .='Margin-top: 10px;';
		$message .='Margin-bottom: 5px;';
		$message .='font-family: Arial, sans-serif;';
		$message .='-webkit-font-smoothing: antialiased;';
		$message .='}';
		$message .='.one-column .contents {';
		$message .='text-align: left;';
		$message .='font-family: Arial, sans-serif;';
		$message .='-webkit-font-smoothing: antialiased;';
		$message .='}';
		$message .='.one-column p {';
		$message .='font-size: 14px;';
		$message .='Margin-bottom: 10px;';
		$message .='font-family: Arial, sans-serif;';
		$message .='-webkit-font-smoothing: antialiased;';
		$message .='}';
		$message .='.two-column {';
		$message .='text-align: center;';
		$message .='font-size: 0;';
		$message .='}';
		$message .='.two-column .column {';
		$message .='width: 100%;';
		$message .='max-width: 300px;';
		$message .='display: inline-block;';
		$message .='vertical-align: top;';
		$message .='}';
		$message .='.contents {';
		$message .='width: 100%;';
		$message .='}';
		$message .='.two-column .contents {';
		$message .='font-size: 14px;';
		$message .='text-align: left;';
		$message .='}';
		$message .='.two-column img {';
		$message .='width: 100%;';
		$message .='max-width: 280px;';
		$message .='height: auto;';
		$message .='}';
		$message .='.two-column .text {';
		$message .='padding-top: 10px;';
		$message .='}';
		$message .='.three-column {';
		$message .='text-align: center;';
		$message .='font-size: 0;';
		$message .='padding-top: 10px;';
		$message .='padding-bottom: 10px;';
		$message .='}';
		$message .='.three-column .column {';
		$message .='width: 100%;';
		$message .='max-width: 200px;';
		$message .='display: inline-block;';
		$message .='vertical-align: top;';
		$message .='}';
		$message .='.three-column .contents {';
		$message .='font-size: 14px;';
		$message .='text-align: center;';
		$message .='}';
		$message .='.three-column img {';
		$message .='width: 100%;';
		$message .='max-width: 180px;';
		$message .='height: auto;';
		$message .='}';
		$message .='.three-column .text {';
		$message .='padding-top: 10px;';
		$message .='}';
		$message .='.img-align-vertical img {';
		$message .='display: inline-block;';
		$message .='vertical-align: middle;';
		$message .='}';
		$message .='@media only screen and (max-device-width: 480px) {';
		$message .='table[class=hide], img[class=hide], td[class=hide] {';
		$message .='display: none !important;';
		$message .='}';
		$message .='.contents1 {';
		$message .='width: 100%;';
		$message .='}';
		$message .='.contents1 {';
		$message .='width: 100%;';
		$message .='}';
		$message .='</style>';
		$message .='</head>';
		$message .='<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#f3f2f0;">';
		$message .='<center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#f3f2f0;">';
		$message .='<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f3f2f0;" bgcolor="#f3f2f0;">';
		$message .='<tr>';
		$message .='<td width="100%"><div class="webkit" style="max-width:600px;Margin:0 auto;">';
		$message .='<table class="outer" align="center" cellpadding="0" cellspacing="0" border="0" style="border-spacing:0;Margin:0 auto;width:100%;max-width:600px;">';
		$message .='<tr>';
		$message .='<td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">';
		$message .='<table border="0" width="100%" cellpadding="0" cellspacing="0"  >';
		$message .='<tr>';
		$message .='<td><table style="width:100%;" cellpadding="0" cellspacing="0" border="0">';
		$message .='<tbody>';
		$message .='<tr>';
		$message .='<td align="center"><center>';
		$message .='<table border="0" align="center" width="100%" cellpadding="0" cellspacing="0" style="Margin: 0 auto;">';
		$message .='<tbody>';
		$message .='<tr>';
		$message .='<td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" bgcolor="#FFFFFF"><!-- ======= start header ======= -->';
		$message .='<table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#f3f2f0">';
		$message .='<tr>';
		$message .='<td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;font-size:0;" >';
		$message .='<div class="column" style="width:100%;max-width:80px;display:inline-block;vertical-align:top;">';
		$message .='<table class="contents" style="border-spacing:0; width:100%"  >';
		$message .='<tr>';
		$message .='</tr>';
		$message .='</table>';
		$message .='</div>';
		$message .='<div class="column" style="width:100%;max-width:518px;display:inline-block;vertical-align:top;">';
		$message .='<table width="100%" style="border-spacing:0" cellpadding="0" cellspacing="0" border="0" >';
		$message .='<tr>';
		$message .='<td class="inner" style="padding-top:0px;padding-bottom:10px; padding-right:10px;padding-left:10px;"><table class="contents" style="border-spacing:0; width:100%" cellpadding="0" cellspacing="0" border="0">';
		$message .='<tr>';
		$message .='<td align="left" valign="top">&nbsp;</td>';
		$message .='</tr>';
		$message .='<tr>';
		$message .='</tr>';
		$message .='</table></td>';
		$message .='</tr>';
		$message .='</table>';
		$message .='</div>';
		$message .='</td>';
		$message .='</tr>';
		$message .='<tr>';
		$message .='<td>&nbsp;</td>';
		$message .='</tr>';
		$message .='</table></td>';
		$message .='</tr>';
		$message .='</tbody>';
		$message .='</table>';
		$message .='</center></td>';
		$message .='</tr>';
		$message .='</tbody>';
		$message .='</table></td>';
		$message .='</tr>';
		$message .='</table>';
		$message .='<table class="one-column" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing:0; border-left:1px solid #e8e7e5; border-right:1px solid #e8e7e5; border-bottom:1px solid #e8e7e5; border-top:1px solid #e8e7e5" bgcolor="#FFFFFF">';
		$message .='<tr>';
		$message .='<td align="left" style="padding:50px 50px 50px 50px"><p style="color:#262626; font-size:24px; text-align:left; font-family: Verdana, Geneva, sans-serif"><strong>Hey '.$first_name.'</strong>,</p>';
		$message .='<p style="color:#000000; font-size:16px; text-align:left; font-family: Verdana, Geneva, sans-serif; line-height:22px ">Seems like you have forgotten your old password to the Beldar Vivah App. Please use the OTP below to reset the same. <br />';
		$message .='<br /> Your OTP is:';
		$message .='<br />';
		$message .='</p>';
		$message .='<table border="0" align="left" cellpadding="0" cellspacing="0" style="Margin:0 auto;">';
		$message .='<tbody>';
		$message .='<tr>';
		$message .='<td align="center"><table border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;">';
		$message .='<tr>';
		$message .='<td width="250" height="60" align="center" bgcolor="#ce283d" style="-moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;"><a href="#" style="width:250; display:block; text-decoration:none; border:0; text-align:center; font-weight:bold;font-size:18px; font-family: Arial, sans-serif; color: #ffffff" class="button_link">'.$otp.'</a></td>';
		$message .='</tr>';
		$message .='</table></td>';
		$message .='</tr>';
		$message .='</tbody>';
		$message .='</table>';
		$message .='</td>';
		$message .='</tr>';
		$message .='</table>';
		$message .='<table cellpadding="0" cellspacing="0" border="0" width="100%">';
		$message .='<tr>';
		$message .='<td height="30">&nbsp;</td>';
		$message .='</tr>';
		$message .='<tr>';
		$message .='<td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;">';
		$message .='<div class="column" style="width:100%;max-width:350px;display:inline-block;vertical-align:top;">';
		$message .='<table class="contents" style="border-spacing:0; width:100%">';
		$message .='<tr>';
		$message .='<td width="39%" align="right" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;"><a href="#" target="_blank"><img src="http://www.beldarvivah.com/www/images/icon.png" alt="" width="59" height="59" style="border-width:0; max-width:59px;height:auto; display:block; padding-right:20px" /></a></td>';
		$message .='<td width="61%" align="left" valign="middle" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;"><p style="color:#787777; font-size:13px; text-align:left; font-family: Verdana, Geneva, sans-serif"> Beldar Vivah &copy; 2018<br />';
		$message .='This is a system generated email, please do not reply back to the email<br />';
		$message .='All Rights Reserved.</p></td>';
		$message .='</tr>';
		$message .='</table>';
		$message .='</div>';
		$message .='<div class="column" style="width:100%;max-width:248px;display:inline-block;vertical-align:top;">';
		$message .='<table width="100%" style="border-spacing:0">';
		$message .='<tr>';
		$message .='<td class="inner" style="padding-top:0px;padding-bottom:10px; padding-right:10px;padding-left:10px;"><table class="contents" style="border-spacing:0; width:100%">';
		$message .='<tr>';
		$message .='<td width="32%" align="center" valign="top" style="padding-top:10px"><table width="150" border="0" cellspacing="0" cellpadding="0">';
		$message .='</table></td>';
		$message .='</tr>';
		$message .='</table></td>';
		$message .='</tr>';
		$message .='</table>';
		$message .='</div>';
		$message .='</td>';
		$message .='</tr>';
		$message .='<tr>';
		$message .='<td height="30">&nbsp;</td>';
		$message .='</tr>';
		$message .='</table>';
		$message .='</td>';
		$message .='</tr>';
		$message .='</table>';
		$message .='</div></td>';
		$message .='</tr>';
		$message .='</table>';
		$message .='</center>';
		$message .='</body>';
		$message .='</html>';


		return $message;


	}


	function changepassword($data){

		$userid=$data['userid'];
		$password=$data['password'];


		$db = JFactory::getDbo();
		$update  = new stdClass();
		$update->id = $userid;
		$update->password =md5($password);
		$db->updateObject('f919a_users',$update,'id');

		return true;
	}

	function sendInvite($data){

		$userid=$data['userid'];
		$db = JFactory::getDbo();
		$query="SELECT first_name from f919a_user_basic_details where user_id = '".$userid."'";
		$db->setQuery($query);

    	$db->query();

    	$first_name=$db->loadResult();

    	$query="SELECT last_name from f919a_user_basic_details where user_id = '".$userid."'";
		$db->setQuery($query);

    	$db->query();

    	$last_name=$db->loadResult();

    	$name=$first_name.' '.$lastname;

    	$shareurl='https://play.google.com/store/apps/details?id=com.alokmandavgane.hinducalendar';
		$number=$data['contact'];
		$email='khurramshaikh117@gmail.com';
		$hashkey='54bb9cdae0410730d9a4f6d5f0526cafe7df416311ed8afcb867753ffdf15c24';
		$message=$name." has sent you an invitation to join the Beldar Vivah Matrimony App. Download the app from the playstore here: ".$shareurl;
		$result=$this->send_sms($number,$message,$email,$hashkey);



		return $result;

	}

	function recordFeedback($data){

		$db = JFactory::getDbo();
		$object= new stdClass();
		$object->user_id= $data['userid'];
		$object->feedback =$data['feedback'];
		$result = JFactory::getDbo()->insertObject('f919a_feedback', $object);

		return true;

	}


	function send_sms($number, $message,$email,$hashkey){
      $number=urlencode($number);
      $message=urlencode($message);
      $email=urlencode($email);
      $hashkey=urlencode($hashkey);
    
      $send = "https://api.textlocal.in/send/?username=".$email."&hash=".$hashkey."&sender=TXTLCL&numbers=".$number."&message=".$message."";
      // echo $send; exit();
      $res = file_get_contents($send);
      if($res){
         return $res;
      }else{
         return false;
      }
   }

	function getMyVisits($data){
		$userid=$data['user'];
		$start=$data['start'];
		$end=$data['end'];

		$db = JFactory::getDbo();
		$query="SELECT DISTINCT * from f919a_visits WHERE memberid='".$data['user']."'";
		$db->setQuery($query,$start,$end);
		$db->query();
		$result=$db->loadObjectList();
		$candidates=array();

		foreach ($result as $key => $res) {

			$query="SELECT * from f919a_user_basic_details WHERE user_id='".$res->userid."'";
			$db->setQuery($query,$start,$end);
			$db->query();
			$candidates[]=$db->loadObject();
			
		}

		
	

		foreach ($candidates as $key => $res) {
			$user=array();
			$name=ucfirst($res->first_name).' '.ucfirst($res->last_name);
			if($res->gender=='M'){

				$gender='Male';
			}else{

				$gender='Female';
			}

			$caste='बेलदार';
			if($res->subcaste!=24){
			$subcaste=$this->getSubcaseFromCasteID($res->subcaste);	
			}else{
				$subcaste=$res->specify;
			}
		
			$profile_pic_url=$res->profile_pic;

			$maritial=$this->getMarritalStatusFromId($res->maritial_status);

			$query="SELECT count(*) from f919a_visits WHERE memberid='".$data['user']."' AND userid='".$res->user_id."'";
			$db->setQuery($query,$start,$end);
			$db->query();
			$times=$db->loadResult();

			$user['userid']=$res->user_id;
			$user['name']=ucfirst($name);
			$user['gender']=ucfirst($gender);
			$user['maritial']=ucfirst($maritial);
			$user['subcaste']=$subcaste;
			$user['profile_pic_url']=$profile_pic_url;
			$user['age']=$this->getAge($res->dob);
			$user['times']=$times;


			$candidate[]=$user;
			
		}


		$db = JFactory::getDbo();
		$query="SELECT count(*) from f919a_matches WHERE userid='".$data['user']."'";
		$db->setQuery($query,$start,$end);
		$db->query();
		$count=$db->loadResult();
		$count=$count-$end;





		$result=array();
		$result['candidates']=array_unique($candidate);
		$result['end']=$end;
		$result['count']=$count-$end;
		



		return $result;
	}


	function checkIfmatchRecieved($data){


		$db = JFactory::getDbo();
		$sql="SELECT * from f919a_matches where userid='".$data['memberid']."' AND memberid='".$data['userid']."'";
		$db->setQuery($sql);
		$db->query();
		$result=$db->loadObject();
		// return $result;
		if(count($result)>0){

			return true;
		}

		return false;


	}


	function sendMatchBack($data){


		$db = JFactory::getDbo();
		$sql="SELECT * from f919a_matches where userid='".$data['userid']."' AND memberid='".$data['memberid']."'";
		$db->setQuery($sql);
		$db->query();
		$result=$db->loadObject();
		
		if(count($result)>0){

						$match_id=$result->id;

						$db = JFactory::getDbo();
						$update  = new stdClass();
						$update->id = $match_id;
						$update->match_back =1;
						$db->updateObject('f919a_matches',$update,'id');

					
						$object= new stdClass();
						$object->match_id = $match_id;
						$object->status =1;
						$db->updateObject('f919a_match_back',$object,'match_id');

						$object= new stdClass();
						$object->userid= $data['userid'];
						$object->memberid =$data['memberid'];
						$result = JFactory::getDbo()->insertObject('f919a_interests', $object);

						$object= new stdClass();
						$object->userid= $data['memberid'];
						$object->memberid =$data['userid'];
						$result = JFactory::getDbo()->insertObject('f919a_interests', $object);
	

						return true;
		}else{


			return false;
		}


	}

	function checkIfmatchback($data){

		$db = JFactory::getDbo();
		$sql="SELECT * from f919a_matches where userid='".$data['memberid']."' AND memberid='".$data['userid']."'";
		$db->setQuery($sql);
		$db->query();
		$result=$db->loadObject();
	
		if(count($result)>0){

			$match_id=$result->id;

		$sql="SELECT status from f919a_match_back where match_id='".$match_id."'";
		$db->setQuery($sql);
		$db->query();
		$status=$db->loadResult();

		return $status;





		}else{

			$sql="SELECT * from f919a_matches where userid='".$data['userid']."' AND memberid='".$data['memberid']."'";
				$db->setQuery($sql);
				$db->query();
				$result=$db->loadObject();
				if(count($result)>0){

						$match_id=$result->id;

					$sql="SELECT status from f919a_match_back where match_id='".$match_id."'";
					$db->setQuery($sql);
					$db->query();
					$status=$db->loadResult();

					return $status;


				}

		}


	}

	function checkIfmatched($data){

		$db = JFactory::getDbo();

		$sql="SELECT * from f919a_matches where userid='".$data['userid']."' AND memberid='".$data['memberid']."'";
		$db->setQuery($sql);
		$db->query();
		$result=$db->loadObjectList();
		if(count($result)>0){
			$return=array();
			$return['status']=$result[0]->match_back;
			$return['exist']=true;
			return $return;
		}else{

		

		}


	}

	function recordVisit($data){


		$db = JFactory::getDbo();
		$object= new stdClass();
		$object->userid= $data['userid'];
		$object->memberid =$data['memberid'];
		$result = JFactory::getDbo()->insertObject('f919a_visits', $object);
	}


	function sendMatch($data){


		$db = JFactory::getDbo();

		$sql="SELECT * from f919a_matches where userid='".$data['userid']."' AND memberid='".$data['memberid']."'";
		$db->setQuery($sql);
		$db->query();
		$result=$db->loadObjectList();
		
		if(count($result)>0){
			$return=array();
			$return['status']=$result[0]->match_back;
			$return['exist']=true;
			return $return;
		}

/// check if there is a reverse possibility
		$sql="SELECT * from f919a_matches where userid='".$data['memberid']."' AND memberid='".$data['userid']."'";
		$db->setQuery($sql);
		$db->query();
		$result=$db->loadObjectList();
		
		if(count($result)>0){
			$return=array();
			$return['status']=$result[0]->match_back;
			$return['usersent']=true;
			return $return;
		}

		$object= new stdClass();
		$object->userid= $data['userid'];
		$object->memberid =$data['memberid'];
		$object->match_back =0;
		$result = JFactory::getDbo()->insertObject('f919a_matches', $object);


		$sql="SELECT id from f919a_matches where userid='".$data['userid']."' AND memberid='".$data['memberid']."'";
		$db->setQuery($sql);
		$db->query();
		$matchid=$db->loadResult();

		$object= new stdClass();
		$object->match_id= $matchid;
		$result = JFactory::getDbo()->insertObject('f919a_match_back', $object);
			
			$return=array();
			$return['status']=0;
			$return['exist']=false;
			return $return;
	}


	function getMyMatches($data){

		$userid=$data['user'];
		$start=$data['start'];
		$end=$data['end'];

		$db = JFactory::getDbo();
		$query="SELECT * from f919a_matches WHERE memberid='".$data['user']."' AND match_back!='1'";
		$db->setQuery($query,$start,$end);
		$db->query();
		$result=$db->loadObjectList();
		$candidates=array();

		foreach ($result as $key => $res) {

			$query="SELECT * from f919a_user_basic_details WHERE user_id='".$res->userid."'";
			$db->setQuery($query,$start,$end);
			$db->query();
			$candidates[]=$db->loadObject();
			
		}

		
	

		foreach ($candidates as $key => $res) {
			$user=array();
			$name=ucfirst($res->first_name).' '.ucfirst($res->last_name);
			if($res->gender=='M'){

				$gender='Male';
			}else{

				$gender='Female';
			}

			$caste='बेलदार';
			if($res->subcaste!=24){
			$subcaste=$this->getSubcaseFromCasteID($res->subcaste);	
			}else{
				$subcaste=$res->specify;
			}
		
			$profile_pic_url=$res->profile_pic;

			$maritial=$this->getMarritalStatusFromId($res->maritial_status);

			$user['userid']=$res->user_id;
			$user['name']=ucfirst($name);
			$user['gender']=ucfirst($gender);
			$user['maritial']=ucfirst($maritial);
			$user['subcaste']=$subcaste;
			$user['profile_pic_url']=$profile_pic_url;
			$user['age']=$this->getAge($res->dob);


			$candidate[]=$user;
			
		}


		$db = JFactory::getDbo();
		$query="SELECT count(*) from f919a_matches WHERE userid='".$data['user']."'";
		$db->setQuery($query,$start,$end);
		$db->query();
		$count=$db->loadResult();
		$count=$count-$end;





		$result=array();
		$result['candidates']=$candidate;
		$result['end']=$end;
		$result['count']=$count-$end;
		



		return $result;
	}

	function getAllMyInterests($data){

		$userid=$data['user'];
		$start=$data['start'];
		$end=$data['end'];

		$db = JFactory::getDbo();
		$query="SELECT * from f919a_interests WHERE userid='".$data['user']."'";
		$db->setQuery($query,$start,$end);
		$db->query();
		$result=$db->loadObjectList();
		$candidates=array();
		// return $query;
		foreach ($result as $key => $res) {

			$query="SELECT * from f919a_user_basic_details WHERE user_id='".$res->memberid."'";
			$db->setQuery($query,$start,$end);
			$db->query();
			$candidates[]=$db->loadObject();
			
		}

		
	

		foreach ($candidates as $key => $res) {
			$user=array();
			$name=ucfirst($res->first_name).' '.ucfirst($res->last_name);
			if($res->gender=='M'){

				$gender='Male';
			}else{

				$gender='Female';
			}

			$caste='बेलदार';
			if($res->subcaste!=24){
			$subcaste=$this->getSubcaseFromCasteID($res->subcaste);	
			}else{
				$subcaste=$res->specify;
			}
		
			$profile_pic_url=$res->profile_pic;

			$maritial=$this->getMarritalStatusFromId($res->maritial_status);

			$user['userid']=$res->user_id;
			$user['name']=ucfirst($name);
			$user['gender']=ucfirst($gender);
			$user['maritial']=ucfirst($maritial);
			$user['subcaste']=$subcaste;
			$user['profile_pic_url']=$profile_pic_url;
			$user['age']=$this->getAge($res->dob);


			$candidate[]=$user;
			
		}


		$db = JFactory::getDbo();
		$query="SELECT count(*) from f919a_matches WHERE userid='".$data['user']."'";
		$db->setQuery($query,$start,$end);
		$db->query();
		$count=$db->loadResult();
		$count=$count-$end;





		$result=array();
		$result['candidates']=$candidate;
		$result['end']=$end;
		$result['count']=$count-$end;
		



		return $result;

	}

	function getAllCandidates($data){

		$userid=$data['user'];
		$start=$data['start'];
		$end=$data['end'];

		$db = JFactory::getDbo();
		$query1="SELECT * from f919a_user_basic_details WHERE user_id!='".$data['user']."'";
		if($data['who']){

			$query1.=" AND gender='".$data['who']."'";
		}

		if($data['maritial_status']){

			$query1.=' AND maritial_status='.$data['maritial_status'];
		}

		if($data['subcaste']){

			$query1.=' AND subcaste='.$data['subcaste'];
		}
		$db->setQuery($query1,$start,$end);
		$db->query();
		$result=$db->loadObjectList();
		$candidates=array();

		foreach ($result as $key => $res) {
			$user=array();
			$name=ucfirst($res->first_name).' '.ucfirst($res->last_name);
			if($res->gender=='M'){

				$gender='Male';
			}else{

				$gender='Female';
			}

			$caste='बेलदार';
			if($res->subcaste!=24){
			$subcaste=$this->getSubcaseFromCasteID($res->subcaste);	
			}else{
				$subcaste=$res->specify;
			}
		
			$profile_pic_url=$res->profile_pic;

			$maritial=$this->getMarritalStatusFromId($res->maritial_status);

			$user['userid']=$res->user_id;
			$user['name']=ucfirst($name);
			$user['gender']=ucfirst($gender);
			$user['maritial']=ucfirst($maritial);
			$user['subcaste']=$subcaste;
			$user['profile_pic_url']=$profile_pic_url;
			$user['age']=$this->getAge($res->dob);


			$candidates[]=$user;
			
		}


		$db = JFactory::getDbo();
		$query="SELECT count(*) from f919a_user_basic_details WHERE user_id!='".$data['user']."'";

		if($data['who']){

			$query.=" AND gender='".$data['who']."'";
		}

		if($data['maritial_status']){

			$query.=' AND maritial_status='.$data['maritial_status'];
		}

		if($data['subcaste']){

			$query.=' AND subcaste='.$data['subcaste'];
		}

		$db->setQuery($query);
		$db->query();
		$count=$db->loadResult();
		$count=$count-$end;





		$result=array();
		$result['candidates']=$candidates;
		$result['end']=$end;
		$result['count']=$count-$end;
		$result['query']=$query1;
		



		return $result;
	}

	function getSubcaseFromCasteID($id){

			$db = JFactory::getDbo();
            $query="SELECT subcaste from f919a_user_subcaste where id='".$id."'";
			$db->setQuery($query);
			$subcaste=$db->loadResult();
			return $subcaste;
	}

	function deleteFiles($file)
{
        // Initialise variables.
        jimport('joomla.client.helper');
        $FTPOptions = JClientHelper::getCredentials('ftp');

        if (is_array($file)) {
                $files = $file;
        } else {
                $files[] = $file;
        }

        // // Do NOT use ftp if it is not enabled
        // if ($FTPOptions['enabled'] == 1)
        // {
        //         // Connect the FTP client
        //         jimport('joomla.client.ftp');
        //         $ftp = & JFTP::getInstance($FTPOptions['host'], $FTPOptions['port'], null, $FTPOptions['user'], $FTPOptions['pass']);
        // }

        // return $ftp;

        foreach ($files as $file)
        {
                $file = JPath::clean($file);

                // Try making the file writeable first. If it's read-only, it can't be deleted
                // on Windows, even if the parent folder is writeable
                @chmod($file, 0777);

                // In case of restricted permissions we zap it one way or the other
                // as long as the owner is either the webserver or the ftp
                if (@unlink($file)) {
                        // Do nothing
                } else {
                        $filename       = basename($file);
                        JError::raiseWarning('SOME_ERROR_CODE', JText::_('Delete failed') . ": '$filename'");
                        return false;
                }
        }

        return true;
}


	function editProfile($data){
		$media=$data['media'];
		$data=$data['profile'];
		jimport( 'joomla.filesystem.folder' );
		$directory_url='uploads/'.$data['userid'].'';
		
		if(JFolder::exists($directory_url)==false)
  		{
  			mkdir($directory_url);
  		}

		
		$db = JFactory::getDbo();
			if(!empty($media['image1']) || !empty($media['image2']) || !empty($media['image3']) 
    		|| !empty($media['image4']) || !empty($media['image5']) || !empty($media['image6'])){


				 $query="SELECT url from f919a_photos WHERE user_id='".$data['userid']."'";
						$db->setQuery($query);

				    	$db->query();

				    	$urls=$db->loadObjectList();
				    	$urlarray=array();
				    	foreach ( $urls as $key => $eachurl) {
				    		$eachurl=str_replace('http://beldarvivah.com','', $eachurl->url);
				    		$urlarray[]=$eachurl;
				    	}

				
		            $query="DELETE from f919a_photos WHERE user_id='".$data['userid']."'";
					$db->setQuery($query);
					$id=$db->loadObjectList();



				    // $delete_files=$this->deleteFiles($urlarray);
				    // return $delete_files;
					// return $media;

    			foreach ($media as $key => $value) {

    				if(!empty($value)){

    				$rand_name=rand(10,1000000);
    				$rand_name=$data['userid'].'_'.$rand_name;
					file_put_contents("uploads/".$data['userid']."/".$rand_name.".jpeg",base64_decode($value));
					$url='http://beldarvivah.com/uploads/'.$data['userid'].'/'.$rand_name.'.jpeg';
					

					    $object= new stdClass();
			            $object->user_id= $data['userid'];
			            $object->url =$url;
			         	$result = JFactory::getDbo()->insertObject('f919a_photos', $object);


    				}
				
    				
    			}


    		
    	}


	
		$update  = new stdClass();
		$update->user_id = $data['userid'];
		$update->first_name = $data['firstname'];
		$update->middle_name = $data['middlename'];
		$update->last_name = $data['lastename'];
		$update->email = $data['email'];
		$update->gender = $data['gender'];
		if(!empty($data['specify'])){
			$update->subcaste = 24;
		}else{
			$update->subcaste = $data['subcaste'];
		}
		
		$update->dob = $data['dob'];
		$update->maritial_status = $data['maritial_status'];
		$update->flat_no = $data['registered_addre_line1'];
		$update->profile_pic = $data['profile_pic_url'];
		$update->area = $data['registered_addre_line2'];
		$update->state = $data['state'];
		$update->city = $data['city'];
		$update->pincode = $data['pincode'];
		$update->qualification = $data['qualification'];
		$update->mobile = $data['mobile_num'];
		$update->height = $data['height'];
		$update->specify = $data['specify'];
		$update->expectation = $data['expectation'];
		$update->marrying_in = $data['marrying_in'];
		
		$db->updateObject('f919a_user_basic_details',$update,'user_id');

		$query="SELECT u.id,u.username,u.password,d.email,d.first_name as firstname ,d.last_name as 
		lastname,d.profile_pic from f919a_users u LEFT JOIN f919a_user_basic_details d ON d.user_id=u.id
		 where d.user_id=".$data['userid'];
		$db->setQuery($query);

    	$db->query();

    	$rows=$db->loadObject();



    	$return=array();
    	$return['status']=true;
    	$return['data']=$rows;

		return $return;
	}

	function register($data){

			$object= new stdClass();
            $object->username = $data['username'];
            $object->password=md5($data['password']);
            $object->fcmtoken =$data['fcmtoken'];
            $object->email =$data['email'];
            $object->usertype =$data['usertype'];
            $object->phone =$data['phone'];
            $object->online =1;
            $result = JFactory::getDbo()->insertObject('g21c8_users', $object);
            $query="SELECT id from g21c8_users WHERE username='".$data['username']."'";
				
		  		$db = JFactory::getDbo();
				$db->setQuery($query);
				$id=$db->loadResult();
				$return=array();
				$return['username']=$data['username'];
				$return['password']=$data['password'];
				$return['fcmtoken']=$data['fcmtoken'];
				$return['email']=$data['email'];
				$return['phone']=$data['phone'];
				$return['usertype']=$data['usertype'];
				$return['userid']=$id;
            return $return;
	}

	function login($data){

		$username=$data['username'];
		$password=md5($data['password']);

		$db = JFactory::getDbo();
		$query="SELECT * from g21c8_users where username='".$username."' AND password='".$password."'";
		$db->setQuery($query);
		$rows=$db->loadObject();
		if(count($rows)){
			$return=array();
			$return['status']=true;
			$return['return']=$rows;
			return $return;
		}else{
			$return=array();
			$return['status']=false;
			return $return;
		}


	}

	function registerUser($data){

		$basicData=$data['basic'];
		$profileData=$data['profile'];
		$fcm_token=$data['fcmtoken'];


		// return $data;
		if(empty($profileData['email_id']) || empty($basicData['username']) ||
		empty($basicData['password'])){
			return false;
		}
		

		$db                = JFactory::getDbo();
		$object            = new stdClass();
        $object->fcm_token = $fcm_token;
        $object->username  = $basicData['username'];
        $object->password  = md5($basicData['password']);
        $result            = JFactory::getDbo()->insertObject('f919a_users', $object);
		$query             = "SELECT id from f919a_users WHERE username='".$basicData['username']."'";
			$db->setQuery($query);
			$id=$db->loadResult();


			$object= new stdClass();
            $object->user_id = $id;
            $object->first_name=$profileData['firstname'];
            $object->last_name =$profileData['lastename'];
          

             $object->middle_name = $profileData['middlename'];
             $object->email = $profileData['email_id'];
            $object->gender=$profileData['gender'];
            $object->caste =1;

             $object->subcaste = $profileData['subcaste'];
            $object->dob=$profileData['dob-date'].'-'.$profileData['dob-month'].'-'.$profileData['dob-year'];
            $object->maritial_status =$profileData['maritial_status'];

             $object->flat_no = $profileData['addre_line1'];
            $object->profile_pic=$profileData['profile_pic_url'];
            $object->area =$profileData['addre_line2'];

             $object->state = $profileData['state'];
            $object->city=$profileData['city'];
            $object->pincode =$profileData['pincode'];

             $object->qualification = $profileData['qualification'];
            $object->mobile=$profileData['mobile_num'];
            $object->height =$profileData['height_feet'].' ft, '.$profileData['height_inches'].' inches';
            $object->expectation=$profileData['expectation'];
            if($profileData['specify']){
              $object->specify=$profileData['specify'];
				
			}

         
            $result = JFactory::getDbo()->insertObject('f919a_user_basic_details', $object);


            $return=array();
             $return['status']=true;
            $return['id']=$id;
             $return['email'] = $profileData['email_id'];
            $return['username']=$basicData['username'];
             $return['firstname']=$profileData['firstname'];
              $return['lastname']=$profileData['lastename'];
         	  $return['password'] =md5($basicData['password']);
         	  $return['profile_pic']=$profileData['profile_pic_url'];
         	  $return['shareurl']='https://play.google.com/store/apps/details?id=com.alokmandavgane.hinducalendar';

			return $return;

	}
	function checkIfUsernameExists($data){

		 $db = JFactory::getDbo();
		 $query="SELECT * from f919a_users WHERE username='".$data['username']."'";
		$db->setQuery($query);

    	$db->query();

    	$rows=$db->loadObjectList();
    	if(count($rows)>0){
    		return true;
    	}else{
    		return false;
    	}

		return $rows;
	}

	function checkEmailExists($data){

		 $db = JFactory::getDbo();
		 $query="SELECT * from g21c8_users WHERE email='".$data['email']."'";
		$db->setQuery($query);

    	$db->query();

    	$rows=$db->loadObjectList();
    	if(count($rows)>0){
    		return true;
    	}else{
    		return false;
    	}

		return $rows;


	}


	
	function checkUsernameExists($data){

		 $db = JFactory::getDbo();
		 $query="SELECT * from g21c8_users WHERE username='".$data['username']."'";
		$db->setQuery($query);

    	$db->query();

    	$rows=$db->loadObjectList();
    	if(count($rows)>0){
    		return true;
    	}else{
    		return false;
    	}

		return $rows;


	}




	function checkIfEmailExists($data){

		 $db = JFactory::getDbo();
		 $query="SELECT * from f919a_users WHERE email='".$data['email']."'";
		$db->setQuery($query);

    	$db->query();

    	$rows=$db->loadObjectList();
    	if(count($rows)>0){
    		return true;
    	}else{
    		return false;
    	}

		return $rows;


	}

	function getCasteForDropdown(){


		 $db = JFactory::getDbo();
		$query="SELECT id,caste from f919a_user_caste";
		$db->setQuery($query);

    	$db->query();

    	$result=$db->loadObjectList();
    	$castes=array();
    	foreach ($result as $key => $res) {
    		$castes[$res->id]=$res->caste;
    	}

		return $castes;
	}

	function getSubcasteForDropdown($data){


		 $db = JFactory::getDbo();
		$query="SELECT id,subcaste from f919a_user_subcaste where caste_id='".$data['caste_id']."'";
		$db->setQuery($query);

    	$db->query();

    	$result=$db->loadObjectList();
    	$castes=array();
    	foreach ($result as $key => $res) {
    		$castes[$res->id]=$res->subcaste;
    	}
   
		return $castes;
	}

	function getStates(){

		$db = JFactory::getDbo();
		$query="SELECT state_name from f919a_country where country_name= 'India'";
		$db->setQuery($query);
		$db->query();
		$result=$db->loadObjectList();
    	$states=array();
    	foreach ($result as $key => $res) {
    		$states[$res->state_name]=$res->state_name;
    	}
   		return $states;


	}

	function getCities($data){

		$db = JFactory::getDbo();
		$query="SELECT city_name from f919a_cities where state LIKE '%".$data['state']."%'";
		$db->setQuery($query);

    	$db->query();

    	$result=$db->loadObjectList();
    	$cities=array();
    	foreach ($result as $key => $res) {
    		$cities[$res->city_name]=$res->city_name;
    	}
   
		return $cities;


	}

	function getAge($then) {
    $then_ts = strtotime($then);
    $then_year = date('Y', $then_ts);
    $age = date('Y') - $then_year;
    if(strtotime('+' . $age . ' years', $then_ts) > time()) $age--;
    return $age;
	}


	function getImageRawData($image_url) {
	  if (function_exists('curl_init')) {
	    $opts                                   = array();
	    $http_headers                           = array();
	    $http_headers[]                         = 'Expect:';
	    
	    $opts[CURLOPT_URL]                      = $image_url;
	    $opts[CURLOPT_HTTPHEADER]               = $http_headers;
	    $opts[CURLOPT_CONNECTTIMEOUT]           = 10;
	    $opts[CURLOPT_TIMEOUT]                  = 60;
	    $opts[CURLOPT_HEADER]                   = FALSE;
	    $opts[CURLOPT_BINARYTRANSFER]           = TRUE;
	    $opts[CURLOPT_VERBOSE]                  = FALSE;
	    $opts[CURLOPT_SSL_VERIFYPEER]           = FALSE;
	    $opts[CURLOPT_SSL_VERIFYHOST]           = 2;
	    $opts[CURLOPT_RETURNTRANSFER]           = TRUE;
	    $opts[CURLOPT_FOLLOWLOCATION]           = TRUE;
	    $opts[CURLOPT_MAXREDIRS]                = 2;
	    $opts[CURLOPT_IPRESOLVE]                = CURL_IPRESOLVE_V4;

	    # Initialize PHP/CURL handle
	    $ch = curl_init();
	    curl_setopt_array($ch, $opts);
	    $content = curl_exec($ch);
	    
	    # Close PHP/CURL handle
	    curl_close($ch);
	  }// use file_get_contents
	  elseif (ini_get('allow_url_fopen')) {
	    $content = file_get_contents($image_url);
	  }

	  # Return results
	  return $content;
}

	function getMarritalStatusFromId($id){

		$db = JFactory::getDbo();
		$query="SELECT status from f919a_maritial_status where id = '".$id."'";
		$db->setQuery($query);

    	$db->query();

    	$result=$db->loadResult();

    	return $result;

	}

	function getProfile($data){


		$db = JFactory::getDbo();
		$query="SELECT * from f919a_users where id = '".$data['userid']."'";
		$db->setQuery($query);

    	$db->query();

    	$result1=$db->loadObjectList();

    	$query="SELECT * from f919a_user_basic_details where user_id = '".$data['userid']."'";
		$db->setQuery($query);

    	$db->query();

    	$result2=$db->loadObjectList();
    	$new=array();
    	$new['age']=$this->getAge($result2[0]->dob);
    	$new['maritial']=$this->getMarritalStatusFromId($result2[0]->maritial_status);
    	$new['caste']=$this->getCasteToDisplay($data['userid'],$result2[0]->caste,$result2[0]->subcaste);



    	$query="SELECT * from f919a_photos where user_id = '".$data['userid']."'";
		$db->setQuery($query);

    	$db->query();

    	$media=$db->loadObjectList();
    	$urlarray=array();
    	$rawdataArray=array();
    	$index=1;
    	foreach ($media as $key => $value) {

    		
    		$raw=base64_encode($this->getImageRawData($value->url));
    		$urlarray[$key]=$value->url;
    		$rawdataArray[$key]=$raw;
    		$index++;
    	}

    	$result=array_merge($result1,$result2,$new,$urlarray,$rawdataArray);

    	$return=array();
    	$return['result']=$result;
    	$return['caste']=$new['caste'];
    	$return['maritial']=$new['maritial'];
    	$return['age']=$new['age'];
    	$return['rawdata']=$rawdataArray;

		return $return;
	}




	function getCasteToDisplay($id,$casteId,$subCasteId){

		$db = JFactory::getDbo();
		$query="SELECT caste from f919a_user_caste where id = '".$casteId."'";
		$db->setQuery($query);

    	$db->query();

    	$caste=$db->loadResult();


    	$query="SELECT subcaste from f919a_user_subcaste where id = '".$subCasteId."'";
		$db->setQuery($query);

    	$db->query();

    	$subcaste=$db->loadResult();

    	if($subCasteId==24){

    	$query="SELECT specify from f919a_user_basic_details where user_id = '".$id."'";
		$db->setQuery($query);

    	$db->query();

    	$subcaste=$db->loadResult();

    	}

    	$casteTodisplay=$caste.' ( '.$subcaste.' )';
    	return $casteTodisplay;


	}

	function storeImage($data){

		$rand_name=rand(10,1000000);
		$rand_name=$data['userid'].'_'.$rand_name;
		

				file_put_contents("uploads/".$rand_name.".jpeg",base64_decode($data['image']));

				$url='http://beldarvivah.com/uploads/'.$rand_name.'.jpeg';
				$file="uploads/".$rand_name.".jpeg";
				$thumb="http://beldarvivah.com/uploads/".$rand_name."_thumb.jpg";
				// $img=$this->generateThumbnail($file);

				if($data['userid']){
					$db = JFactory::getDbo();
						$update  = new stdClass();
						$update->user_id = $data['userid'];
						$update->profile_pic =$thumb;
						$db->updateObject('f919a_user_basic_details',$update,'user_id');

						return $thumb;

				}

				return $thumb;
	}

	function storeTemporaryImage($data){
			
			$rand_name=rand(10,100);
			file_put_contents("uploads/".$rand_name.".jpeg",base64_decode($data['image']));
			
			$url=JURI::root().'uploads/'.$rand_name.'.jpeg';
				$file="uploads/".$rand_name.".jpeg";
				// $thumb=JURI::root()."uploads/".$rand_name."_thumb.jpg";
				// $img=$this->generateThumbnail($file);
				$thumb=JURI::root()."uploads/".$rand_name.".jpeg";
				$img = $file;

				if($data['userid']){
					$db = JFactory::getDbo();
					$update  = new stdClass();
						$update->user_id = $data['userid'];
						$update->profile_pic =$thumb;
						$db->updateObject('f919a_user_basic_details',$update,'user_id');

				}

				
				return $thumb;
				
				// file_put_contents(dirname(__FILE__).'/imageupload.png', base64_decode($data['image']));



	}


							function generateThumbnail($img, $width=100, $height=100, $quality = 100)
								{
								    if (is_file($img)) {
								        $imagick = new Imagick(realpath($img));
								        $imagick->setImageFormat('jpeg');
								        $imagick->setImageCompression(Imagick::COMPRESSION_JPEG);
								        $imagick->setImageCompressionQuality($quality);
								        $imagick->thumbnailImage($width, $height, false, false);
								        $filename_no_ext = reset(explode('.', $img));
								        if (file_put_contents($filename_no_ext . '_thumb' . '.jpg', $imagick) === false) {
								            throw new Exception("Could not put contents.");
								        }
								        return true;
								    }
								    else {
								        throw new Exception("No valid image provided with {$img}.");
								    }
								}

								

								function loginUser($data){
									// return 'hello';
									$username=$data['username'];
									$password=md5($data['password']);

									$db = JFactory::getDbo();
									$query="SELECT * from f919a_users where username='".$username."' AND password='".$password."'";
									$db->setQuery($query);
									$rows=$db->loadObject();
									if(count($rows)){

										$query="SELECT profile_pic,first_name,last_name from f919a_user_basic_details where user_id='".$rows->id."'";
										$db->setQuery($query);
										$details=$db->loadObject();

										$return=array();
										$return['status']=true;
										$return['id']=$rows->id;
										$return['email']=$rows->email;
										$return['username']=$rows->username;
										$return['password']=$rows->password;
										$return['profile_pic']=$details->profile_pic;
										$return['first_name']=$details->first_name;
										$return['last_name']=$details->last_name;
										$return['fcmtoken']=$rows->fcm_token;
										$return['shareurl']='https://play.google.com/store/apps/details?id=com.alokmandavgane.hinducalendar';
										

										return $return;
									}else{

										$return=array();
										$return['status']=false;
										

										return $return;

									}

									
								}

								function removeProfilePicture($data){
									$db = JFactory::getDbo();
									$query="SELECT profile_pic from f919a_user_basic_details where user_id='".$data['userid']."'";

										$db->setQuery($query);
										$profile_pic=$db->loadResult();
										
											$unlink=unlink($profile_pic);
											$update  = new stdClass();
											$update->user_id = $data['userid'];
											$update->profile_pic ='images/small.png';
											$db->updateObject('f919a_user_basic_details',$update,'user_id');

											return true;

									
								}
	
}
