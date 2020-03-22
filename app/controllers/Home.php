<?php

class Home extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $data = ['title' => 'Welcome'];
        $this->view('index', $data);
    }

    public function register()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'emailErr' => '',
                'passwordErr' => ''
            ];
            $this->view('index', $data);
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'emailErr' => '',
                'passwordErr' => ''
            ];

            $this->view('index', $data);
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailErr' => '',
                'passwordErr' => ''
            ];

            $this->view('index', $data);
        }
    }
}
