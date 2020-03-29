<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Register user in database
    public function register($data)
    {
        $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute statement
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Login user
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        //$row = $this->db->single();

        // Check if entry exists
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Create session when user logs in
    public function createUserSession($user)
    {
        $_SESSION['userID'] = $user->id;
        $_SESSION['userEmail'] = $user->email;
        $_SESSION['userName'] = $user->name;
        header('location: ' . URLROOT . 'home/login');
    }

    // Destroy session when user logs out
    public function logout()
    {
        unset($_SESSION['userID']);
        unset($_SESSION['userEmail']);
        unset($_SESSION['userName']);
        session_destroy();
        header('location: ' . URLROOT . 'home/login');
    }

    // Check if user is logged in
    public function isLoggedIn()
    {
        if (isset($_SESSION['userID'])) {
            return true;
        } else {
            return false;
        }
    }
}
