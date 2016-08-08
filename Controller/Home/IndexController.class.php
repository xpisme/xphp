<?php


namespace Controller\Home;

use Controller;

defined('ACC')||exit('ACC Denied');
class IndexController extends Controller\Controller
{
    public function index()
    {
        $this->display('index');
    }
}
