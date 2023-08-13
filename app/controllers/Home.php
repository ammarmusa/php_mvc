<?php

class Home extends Controller
{
    public function index($a = '')
    {
        echo "This is the home controller";
    }
}

$home = new Home;
call_user_func_array([$home, 'index'], ['a' => 'Something']);
