<?php


class user_model extends CI_Model
{
    public function login($email_phone, $password)
    {
        $values = array('email'=> $email_phone, 'password'=>$password);
        $value2 = array('phone'=> $email_phone, 'password'=>$password);
         $this->db->where($values);
         $this->db->or_where($value2);

         $result = $this->db->get('users');
      if ($result->num_rows() >0)
      {
          return true;
      }
      else
      {
          return false;
      }
    }

    public function register($email, $phone, $password)
    {
        $array = array('email'=>$email, 'phone'=>$phone, "password"=>$password);

        if($this->db->insert('users',$array))
        {
            return true;
        }else
        {
            return false;
        }
    }
}