<?php
include_once("model/Model.php");

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function register()
    {

        $result = $this->model->insert_data();
        include 'view/signup.php';
    }

    public function reg_login()
    {
        $result = $this->model->login();
        include 'view/login.php';
    }
  
    public function que_search()
    {

        $result = $this->model->searchque();
        $result3= $this->model->showans();     
        include 'view/search.php';
    }

    public function index()
    {
        // $result2 = $this->model->index();     
        include 'view/index.php';
    }

    public function index_admin()
    {
        // $result2 = $this->model->index();     
        include 'view/index_admin.php';
    }

    //Add quePost And Add catagory

    public function questionMaster()
    {
        
        $result = $this->model->cat();               
        $result1 = $this->model->quePost();
        include 'view/questions/ask_question.php';
    }
    public function admin_questionMaster()
    {
        
        $result = $this->model->cat();               
        $result1 = $this->model->quePost();
        $result1 = $this->model->edit_que();
        include 'view/admin/edit_que.php';
    }

    // show questions
    public function showquestions()
    {
        $result2 = $this->model->showQue();
        
        // foreach($result3 as $key => $val){
        //     echo $key."->";
        //     print_r($val);}
        include 'view/questions/details.php';
    }

    public function allquestion()
    {
        $result=$this->model->showall();
        include 'view/index.php';
    }   
    public function admin_allquestion()
    {
        $result=$this->model->showall();
        include 'view/index_admin.php';
    }   

    public function postanswer()
    {
        // echo "111";

        $result = $this->model->searchque_id();
        $result3= $this->model->showans();
     
        $this->model->postanswer();
        include 'view/search.php';
    }

    public function edit_profile()
    {
        $this->model->editprofilfunc();
        include 'view/users/editprof.php';
    }

    public function profile()
    {
        $result=$this->model->profile();
        include 'view/users/profile.php';
    }

    public function edit_que()
 {
        $result = $this->model->cat(); 
        $result2 = $this->model->showQue();
        // print_r($result2);
        // echo ":sdv:";
        // echo $result2['queTitle'];
        $this->model->edit_que();
        include 'view/admin/edit_que.php';
    }
    public function logout()
    {
        $result = $this->model->logout();
        include 'view/logout.php';
    }
}
?>


<!-- 
    // public function usersearch()
    // {
    //     $result=$this->model->usersearch();
    //     include 'view/users/profile.php';
    // }


    // //profile and edit rofile mate
    // public function profilepage()
    // {
    //     $result = $this->model->profilfunc();
    //     $result = $this->model->editprofilfunc();
    //     include 'view/questions/profile.php';
    // }

    // show Answer
    // public function answerMaster()
    // {
    //     // echo " it is detail pages";
    //     $result = $this->model->ansPost();
        
    //     // $result = $this->model->showans();//new modify
    //     include 'view/questions/details.php';
    // }

    //     public function forget_pass()
    //   {
    //     $result = $this->model->forgot();
    //     include 'view/forgot.php';
    //   } -->
