<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function login(){
        header('Content-type: application/json');

        if (isset($_POST['login'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($username=='admin' && $password=='admin' ) {
             $data=['success',200,"this is data"];
             echo json_encode($data);
             return json_encode($data);
            }
            else {
                 $data=['fail',400,"wrong credentials"];
                echo json_encode($data);
                return  json_encode($data);
            }
        }else {
           $data=['fail',401,"Unauthorized Access"];
            echo  json_encode($data);
            return  json_encode($data);
        }
       
    }
}