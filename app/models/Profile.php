<?php
class Profile
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get profile data by user ID
    public function getProfileData($userID)
    {
        $this->db->query('SELECT * FROM profiles_data WHERE user_id = :userID');
        $this->db->bind(':userID', $userID);

        $results = $this->db->fetchAll();

        return $results;
    }

    // Add profile info in database
    public function addInfo($data)
    {
        $this->db->query('INSERT INTO profiles_data (user_id, attribute, value) VALUES (:user_id, :attribute, :value)');
        // Bind values
        $this->db->bind(':user_id', $data['userID']);
        $this->db->bind(':attribute', $data['attribute']);
        $this->db->bind(':value', $data['value']);

        // Execute statement
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Update profile info in database
    public function updateInfo($data)
    {
        $this->db->query('UPDATE profiles_data SET attribute = :attribute, value = :value WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':attribute', $data['attribute']);
        $this->db->bind(':value', $data['value']);

        // Execute statement
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Delete info in database
    public function deleteInfo($id)
    {
        $this->db->query('DELETE FROM profiles_data WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);

        // Execute statement
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Get info from database by ID
    public function getInfoByID($id)
    {
        $this->db->query('SELECT * FROM profiles_data WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->fetchSingle();

        return $row;
    }
}
