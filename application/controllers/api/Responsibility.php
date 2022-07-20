<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors', 'off');
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: GET");
// header("Access-Control-Allow-Methods: GET, OPTIONS");
// header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
// use chriskacerguis\RestServer\RestController;
use chriskacerguis\RestServer\RestController;

class Responsibility extends RestController
{
// 	public function __construct($config = 'rest')
// {
//     header('Access-Control-Allow-Origin: *');
//     header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
//     parent::__construct();
// }

	
	
	public function index_post()
	{
		if(empty($_POST))
		{
			$_POST = json_decode(file_get_contents('php://input'), true);
		}
		if (!empty($this->input->post())) 
		{
			$question = $this->input->post('question');
			$question_type = $this->input->post('question_type');
			$correct_ans = $this->input->post('correct_ans');
			$option = $this->input->post('option');
			

		// $option_arr = explode(',' , $option);
		if ($correct_ans != '' || !empty($correct_ans))
		{
			if ($question_type == 'bool')
		{
			$option_arr = ['True' , 'False'];
			$data = [
				'success' => true,
				'question' => $question ,
				'question_type' => $question_type ,
				'correct_ans' => $correct_ans,
				'option' => $option_arr,
				'code' => RestController::HTTP_OK
			];
			
		}
		elseif ($question_type == 'radio') {
			$option_arr = explode(',' , $option);
			$data = [
				'success' => true,
				'question' => $question ,
				'question_type' => $question_type ,
				'correct_ans' => $correct_ans,
				'option' => $option_arr,
				'code' => RestController::HTTP_OK
			];
		}
		elseif ($question_type == 'check_box') {
			$option_arr = explode(',' , $option);
			$ans_arr = explode(',' , $correct_ans);
			$data = [
				'success' => true,
				'question' => $question ,
				'question_type' => $question_type ,
				'correct_ans' => $ans_arr,
				'option' => $option_arr,
				'code' => RestController::HTTP_OK
			];
		}
		else
		{
			$data = [
				'success' => false,
				'message' => 'Please Select Valid Question Type ..!',
				'code' => RestController::HTTP_BAD_REQUEST
			];
		}

		
		}
			
		}
		else
		{
			$data = [
				'success' => false,
				'message' => 'Please pass the valid data',
				'code' => RestController::HTTP_BAD_REQUEST
			];	
		}
		// sleep(4);
		$this->response($data ,  $data['code']);
		
	
	
	}


	public function login_auth_post()
	{
		if(empty($_POST))
		{
			$_POST = json_decode(file_get_contents('php://input'), true);
			// print_r($_POST);die;
			$username = $_POST['username'];
			$password = $_POST['password'];

		}
		else
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
		}
	
        if($username =='admin' && $password =='admin' ) 
		{
        	$data=[
				'success' => true,
				'message' => 'Validate successfully'
			];

            $this->response($data ,  RestController::HTTP_OK);
        }
        else
		{
				
			$data=[
					'success' => false,
					'message' => 'Please enter valid credential'
				];
			$this->response($data ,  RestController::HTTP_OK);
        }
        
	}


}

?>