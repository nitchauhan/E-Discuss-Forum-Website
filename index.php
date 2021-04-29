<?php
include_once("controller/controller.php");
$controller = new Controller();
$request = $_SERVER['REQUEST_URI'];
$search = $_GET['search'];
// echo $search;
switch ($request) {
    case '/ediscuss/index.php/signup':
        $controller->register();
        break;

    case '/ediscuss/index.php/login':
        $controller->reg_login();
        // $controller->showquestions(); // show questions
        break;

        // catagory index
    case '/ediscuss/index.php/ask_question':
        $controller->questionMaster();
        break;

        // catagory index
    // case '/ediscuss/index.php/ask_question':
    // case '/ediscuss/view/admin/edit_que.php':
    //     $controller->questionMaster();
    //     break;

    case '/ediscuss/index.php/search.php?search=' . $_GET['search']:
        // case '/ediscuss/index.php/search?search=%search%?':
        $controller->postanswer();
        break;


    case '/ediscuss/index.php/details':
        $controller->showquestions();
        break;

    case '/ediscuss/index.php/index':
        $controller->allquestion();
        break;


    case '/ediscuss/index.php/edit':
        $controller->edit_profile();
        break;

    case '/ediscuss/index.php/edit_que?qid='.$_GET['qid']:
        $controller->edit_que();
        break;

    case '/ediscuss/index.php/profile':
        $controller->profile();
        break;

    case '/ediscuss/index.php/logout':
        $controller->logout();
        break;

    case '/ediscuss/index.php/profile?search=' . $_GET['search']:
        $controller->que_search();
        break;

    case '/ediscuss/index.php/edit?search=' . $_GET['search']:
        $controller->que_search();
        break;


    case '/ediscuss/index.php/index_admin':
        // echo "1";
        $controller->admin_allquestion();
        // $controller->index_admin();
        break;

    default:
        // echo "question search";
        // echo $request;
        // $controller->que_search();

        // $controller->postanswer(); //comment 
        // $controller->showquestions();
        break;
        // echo "not selected ";

}
