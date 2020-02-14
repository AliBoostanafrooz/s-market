<?php


class user_model extends CI_Model
{
    public function login($email_phone, $password)
    {
        $values = array('email'=> $email_phone, 'password'=>$password);
         $this->db->where($values);
         $result = $this->db->get('users');
      $result->result();
    }
} 