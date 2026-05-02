<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Domain_model extends CI_Model
{

    function getDomain($host)
    {
        return $this->db
            ->where('domain_name', $host)
            ->get('table_domain')
            ->row();
    }
}
