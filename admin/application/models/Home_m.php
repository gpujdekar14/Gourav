
<?php
class Login_m extends CI_Model
 {
    function login() {
        $username = $_POST['form-username'];
        $password = $_POST['form-password'];
        $query = $this->db->get_where('login_tbl', array('username' => $username, 'password' => $password));
        if ($query->num_rows() == 1) {
           foreach ($query->result() as $key) {
                $role = $key->role;        
           }
            $newdata = array(
                'username' => $username,
                'role' => $role              
            );        
            $this->session->set_userdata($newdata);
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }      
}
?>