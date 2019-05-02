
<?php
class Login_m extends CI_Model
 {
     function login() {

        $username = $_POST['username'];
        $password = $_POST['password'];
       // return $this->db->get('tbl_login')->result_array();
       $query = $this->db->get_where('tbl_login', array('username' => $username, 'password' => $password));
       if ($query->num_rows() == 1) {   
        return TRUE;
    } 
    else {
        return FALSE;
    }
  
      
    }
}
?>