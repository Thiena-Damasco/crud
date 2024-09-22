<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
    public function display_user() {
        return $data = $this->db->raw('select * from tbd_users', array(), PDO::FETCH_ASSOC);
    }

	public function add_user($lastname, $firstname, $email, $gender, $address) {
        $data = array(
            'tbd_lastname' => $lastname,
            'tbd_firstname' => $firstname,
            'tbd_email' => $email,
            'tbd_gender' => $gender,
            'tbd_address' => $address
        );
       return $this->db->table('tbd_users')->insert($data);
    }
    
    public function update_user($lastname, $firstname, $email, $gender, $address, $id) {
        $data = array(
            'tbd_lastname' => $lastname,
            'tbd_firstname' => $firstname,
            'tbd_email' => $email,
            'tbd_gender' => $gender,
            'tbd_address' => $address
        );
       return $this->db->table('tbd_users')->where('tbd_id', $id)->update($data);
    }

    public function singleUser($id) {
        return $this->db->table('tbd_users')->where('tbd_id', $id)->get();
    }
    public function delete_user($id) {
        return $this->db->table('tbd_users')->where('tbd_id', $id)->delete();
    }
}
?>
