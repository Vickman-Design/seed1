<?php

//Write your custome class/methods here
namespace Apps;

class Core extends Model
{


	/** @return exit  */
	public function __construct()
	{
		parent::__construct();
	}

	public function UserLogin($email, $password)
	{
		$sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
		$result = mysqli_query($this->dbCon, $sql);
		if ($result->num_rows) {
			$result = mysqli_fetch_object($result);
			return $result->id;
		}
		return false;
	}
	public function GetUserInfo($id)
	{
		$sql = "SELECT * FROM `users` WHERE `id`='$id'";
		$result = mysqli_query($this->dbCon, $sql);
		if ($result->num_rows) {
			$result = mysqli_fetch_object($result);
			return $result;
		}
		return false;
	}
	public function GetUserInfoUserName($username)
	{
		$sql = "SELECT * FROM `users` WHERE `username`='$username'";
		$result = mysqli_query($this->dbCon, $sql);
		if ($result->num_rows) {
			$result = mysqli_fetch_object($result);
			return $result;
		}
		return false;
	}
	public function UserRegister($name, $email, $username, $password, $referer)
	{
		$sql = "INSERT INTO `users`(`name`, `username`, `email`, `password`, `referer`) VALUES ('$name','$username','$email','$password','$referer')";
		return mysqli_query($this->dbCon, $sql);
	}

	public function Connectpaystack($amount, $redirect, $email)
	{

		// Create an array with the request data
		$requestData = [
			'amount' => $amount * 100,
			'currency' => 'NGN',
			'callback_url' => $redirect,
			'email' => $email
		];

		// Initialize cURL session
		$ch = curl_init('https://api.paystack.co/transaction/initialize');

		// Set cURL options
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Authorization: Bearer ' . Api_key,
			'Content-Type: application/json'
		]);

		// Execute cURL session
		$response = curl_exec($ch);

		// Check for cURL errors
		if (curl_errno($ch)) {
			echo 'cURL Error: ' . curl_error($ch);
		}

		// Close cURL session
		curl_close($ch);
		// Decode the JSON response
		$responseData = json_decode($response, true);
		// Handle the response data as needed
		return $responseData;
	}
	public function Verify($reference)
	{

		// Create an array with the request data

		// Initialize cURL session
		$ch = curl_init("https://api.paystack.co/transaction/verify/{$reference}");

		// Set cURL options
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Authorization: Bearer ' . Api_key,
		]);

		// Execute cURL session
		$response = curl_exec($ch);

		// Check for cURL errors
		if (curl_errno($ch)) {
			echo 'cURL Error: ' . curl_error($ch);
		}

		// Close cURL session
		curl_close($ch);
		// Decode the JSON response
		$responseData = json_decode($response, true);
		// Handle the response data as needed
		return $responseData;
	}

	public function Withdraw($amount,  $reference)
	{

		// Create an array with the request data
		$requestData = [
			'amount' => $amount * 100,
			'source' => 'balance',
			'recipient' => 'RCP_2wwoqfkj78tqvrn',
			'reason' => 'payout',
			'reference' => $reference,
		];

		// Initialize cURL session
		$ch = curl_init('https://api.paystack.co/transfer');

		// Set cURL options
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Authorization: Bearer ' . Api_key,
			'Content-Type: application/json'
		]);
		// Favourjake@2002
		// Execute cURL session
		$response = curl_exec($ch);

		// Check for cURL errors
		if (curl_errno($ch)) {
			echo 'cURL Error: ' . curl_error($ch);
		}

		// Close cURL session
		curl_close($ch);
		// Decode the JSON response
		$responseData = json_decode($response, true);
		// Handle the response data as needed
		return $responseData;
	}
	public function Verifywithdraw($reference)
	{

		// Create an array with the request data

		// Initialize cURL session
		$ch = curl_init("https://api.paystack.co/transaction/verify/{$reference}");

		// Set cURL options
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Authorization: Bearer ' . Api_key,
		]);

		// Execute cURL session
		$response = curl_exec($ch);

		// Check for cURL errors
		if (curl_errno($ch)) {
			echo 'cURL Error: ' . curl_error($ch);
		}

		// Close cURL session
		curl_close($ch);
		// Decode the JSON response
		$responseData = json_decode($response, true);
		// Handle the response data as needed
		return $responseData;
	}
	public function GetBanks()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.paystack.co/bank",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Authorization: Bearer " . Api_key,
				"Cache-Control: no-cache",
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}
	public function CreateReciepient($acc_name, $acc_num, $bank_code)
	{
		$url = "https://api.paystack.co/transferrecipient";

		$fields = [
			"type" => "nuban",
			"name" => $acc_name,
			"account_number" => $acc_num,
			"bank_code" => $bank_code,
			"currency" => "NGN"
		];

		$fields_string = http_build_query($fields);

		//open connection
		$ch = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			"Authorization: Bearer " . Api_key,
			"Cache-Control: no-cache",
		));

		//So that curl_exec returns the contents of the cURL; rather than echoing it
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//execute post
		$result = curl_exec($ch);
		return $result;
	}
}
