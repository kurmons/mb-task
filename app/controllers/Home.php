<?php

class Home extends Controller
{

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        // Load index page with empty data
        $data = [
            'name' => '',
            'email' => '',
            'password' => '',
            'regNameErr' => '',
            'regEmailErr' => '',
            'regPassErr' => '',
            'logEmailErr' => '',
            'logPassErr' => ''
        ];
        $this->view('index', $data);
    }

    public function register()
    {
        // Register button pressed
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            // Sanitize data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Initialize data
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'regNameErr' => '',
                'regEmailErr' => '',
                'regPassErr' => '',
                'logEmailErr' => '',
                'logPassErr' => ''
            ];

            // Validate data
            if (empty($data['name'])) {
                $data['regNameErr'] = 'Please enter Your name';
            }
            if (empty($data['email'])) {
                $data['regEmailErr'] = 'Please enter email';
            } else {
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['regEmailErr'] = 'Email is taken';
                }
            }
            if (empty($data['password'])) {
                $data['regPassErr'] = 'Please enter password';
            } elseif (strlen($data['password']) < 8) {
                $data['regPassErr'] = 'Password must be at least 8 characters';
            }

            // Check if no errors are present
            if (empty($data['regNameErr']) && empty($data['regEmailErr']) && empty($data['regPassErr'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register user in database
                if ($this->userModel->register($data)) {
                    $_SESSION['regSuccess'] = 'true';
                    header('location: ' . URLROOT . 'home/login');
                } else {
                    die('error');
                }

                // Insert values in database
            } else {
                // Load view with data
                $this->view('index', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'regNameErr' => '',
                'regEmailErr' => '',
                'regPassErr' => '',
                'logEmailErr' => '',
                'logPassErr' => ''
            ];

            // Load view with data
            $this->view('index', $data);
        }
    }

    public function login()
    {
        // Login button pressed
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Initialize data
            $data = [
                'name' => '',
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'regNameErr' => '',
                'regEmailErr' => '',
                'regPassErr' => '',
                'logEmailErr' => '',
                'logPassErr' => ''
            ];

            // Validate data
            if (empty($data['email'])) {
                $data['logEmailErr'] = 'Please enter email';
            }
            if (empty($data['password'])) {
                $data['logPassErr'] = 'Please enter password';
            }

            // Check if email exists
            if ($this->userModel->findUserByEmail($data['email'])) {
                // Email exists
            } else {
                // Email doesn't exist
                $data['logEmailErr'] = 'Account not found';
            }

            // Check if no errors are present
            if (empty($data['logEmailErr']) && empty($data['logPassErr'])) {
                // Login
                $validUser = $this->userModel->login($data['email'], $data['password']);

                if ($validUser) {
                } else {
                    $data['logPassErr'] = 'Wrong password';
                    $this->view('index', $data);
                }
            } else {
                // Load view with errors
                $this->view('index', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'regNameErr' => '',
                'regEmailErr' => '',
                'regPassErr' => '',
                'logEmailErr' => '',
                'logPassErr' => ''
            ];

            // Load view with data
            $this->view('index', $data);
        }
    }
}
