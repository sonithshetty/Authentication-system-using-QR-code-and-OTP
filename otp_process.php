<?php
session_start();

$ch = $_POST['ch'];

switch ($ch) {
	case 'send_otp':
		
			

			$num = $_POST['mob'];
			
			$otp = rand(10000,999999);
			$_SESSION['otp']  = $otp;

			$curl = curl_init();

			curl_setopt_array($curl, array(
                            //enter valid api key in the url, you will get API Key from the 2factor.in site just login and instead of 4499 add $otp and 9911991199 add mob
		//CURLOPT_URL => "http://2factor.in/API/V1/293832-67745-11e5-88de-5600000c6b13/SMS/9911991199/4499",
		  CURLOPT_URL => "http://2factor.in/API/V1/293832-67745-11e5-88de-5600000c6b13/SMS/9911991199/4499".$num."/".$otp."",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo 'success';
		}
						

		break;

		case 'verify_otp':


				$user_otp = $_POST['otp'];
				$verify_otp = $_SESSION['otp'];

				if($verify_otp == $user_otp){

					echo "success";
                                        
				}


		break;
                        

	default:
		# code...
		break;
}


?>