<?php

class users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function isLoggedIn() {
        return isset($this->session->accountType);
    }

    public function checkUserCredentialsDuringLogin($username, $password)
    {
        $q = $this->db->select('pwdUsers')->from('users')->where('uidUsers',
                $username)->get();

        if ($q->num_rows() == 1) {
            $r = $q->row_array();

            if (password_verify($password, $r['pwdUsers']) {
                return true;
            }
        }

        return false;
    }

    public function createNewSession($username) {
        $sessionID = $this->generateRandomString();

        $this->db->select('*')
            ->from('users')
            ->where('users.uidUsers', $username);

        $query = $this->db->get();
        $result = $query->row_array();

        $this->session->set_userdata(array(
            'sessionID' => $sessionID,
            'userID' => $result['idUsers'],
            'login' => $result['uidUsers'],
        ));
    }

    private function generateRandomString($length = 64) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function isAdministrator() {
        return $this->session->accountType == "1";
    }

}
