<?php
class Sitemap_model extends CI_Model
{

    public function get_all_post()
    {
        return $this->db
            ->select('slug, created_at')
            ->from('table_pages')
            ->where('status', 1)
            ->get()
            ->result();
    }
}
