<?php


class Developer_model extends CI_Model
{

    public function login($emailphone, $password)
    {
        $values = array('email'=> $emailphone, 'password'=>$password);
        $value2 = array('phone'=> $emailphone, 'password'=>$password);

        $this->db->where($values);
        $this->db->or_where($value2);

        $result = $this->db->get('developers');
        if ($result->num_rows() >0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


}