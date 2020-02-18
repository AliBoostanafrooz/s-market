<?php


class developer_model extends CI_Model
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

    public function register($email, $phone, $password, $nationalcode)
    {
        $developer_array = array('email'=>$email, 'phone'=>$phone, "password"=>$password, "national_code"=>$nationalcode);

        if($this->db->insert('developers',$developer_array))
        {
            return true;
        }else
        {
            return false;
        }
    }

}