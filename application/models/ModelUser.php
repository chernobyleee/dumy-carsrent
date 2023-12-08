<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function cekData($where)
    {
    return $this->db->get_where('user', $where);
    }
}