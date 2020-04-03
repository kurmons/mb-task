<?php
class Profiles extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['userID'])) {
            header('location: ' . URLROOT . 'home/login');
        }

        $this->profileModel = $this->model('Profile');
    }

    public function index()
    {
        // Get profile data
        $attributes = $this->profileModel->getProfileData($_SESSION['userID']);

        $data = ['attributes' => $attributes];

        $this->view('profile/profile', $data);
    }

    public function add()
    {
        //Add button pressed
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Initialize data
            $data = [
                'userID' => $_SESSION['userID'],
                'attribute' => trim($_POST['attribute']),
                'value' => trim($_POST['value']),
                'attributeError' => '',
                'valueError' => ''
            ];

            // Validate data
            if (empty($data['attribute'])) {
                $data['attributeError'] = 'Please enter attribute';
            }
            if (empty($data['value'])) {
                $data['valueError'] = 'Please enter value';
            }

            // Check if no errors are present
            if (empty($data['attributeError']) && empty($data['valueError'])) {
                if ($this->profileModel->addInfo($data)) {
                    header('location: ' . URLROOT . 'profiles');
                } else {
                    die('error');
                }
            } else {
                // Load view with errors
                $this->view('profile/add', $data);
            }
        } else {

            $data = [
                'attribute' => '',
                'value' => '',
                'attributeError' => '',
                'valueError' => ''
            ];

            $this->view('profile/add', $data);
        }
    }

    public function edit($id)
    {
        //Edit button pressed
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Initialize data
            $data = [
                'id' => $id,
                'userID' => $_SESSION['userID'],
                'attribute' => trim($_POST['attribute']),
                'value' => trim($_POST['value']),
                'attributeError' => '',
                'valueError' => ''
            ];

            // Validate data
            if (empty($data['attribute'])) {
                $data['attributeError'] = 'Please enter attribute';
            }
            if (empty($data['value'])) {
                $data['valueError'] = 'Please enter value';
            }

            // Check if no errors are present
            if (empty($data['attributeError']) && empty($data['valueError'])) {
                if ($this->profileModel->updateInfo($data)) {
                    header('location: ' . URLROOT . 'profiles');
                } else {
                    die('error');
                }
            } else {
                // Load view with errors
                $this->view('profile/edit', $data);
            }
        } else {
            $info = $this->profileModel->getInfoByID($id);
            // Check if info is accessed by owner
            if ($info->user_id != $_SESSION['userID']) {
                header('location: ' . URLROOT . 'profiles');
            }

            $data = [
                'id' => $id,
                'attribute' => $info->attribute,
                'value' => $info->value,
                'attributeError' => '',
                'valueError' => ''
            ];

            $this->view('profile/edit', $data);
        }
    }

    // Delete profile info
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $info = $this->profileModel->getInfoByID($id);

            // Check if info is accessed by owner
            if ($info->user_id != $_SESSION['userID']) {
                header('location: ' . URLROOT . 'profiles');
            }

            // Check if info was deleted
            if ($this->profileModel->deleteInfo($id)) {
                header('location: ' . URLROOT . 'profiles');
            } else {
                die('error');
            }
        } else {
            header('location: ' . URLROOT . 'profiles');
        }
    }
}
