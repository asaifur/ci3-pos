<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function index()
    {
        $this->page('home');
    }
    public function page($slug)
    {
        $host = $_SERVER['HTTP_HOST'];
        $this->domain_data = $this->Domain_model->getDomain($host);
        if (!$this->domain_data) {
            show_404();
        }

        $page = $this->Page_model->getPage($slug, $this->domain->id);

        if (!$page) {
            show_404();
        }

        $data['page'] = $page;
        $sections = $this->Page_model->getSections($page->id_page);
        $data['sections'] = $sections;
        $data['domain'] = $this->domain;
        $data['menus'] = $this->Menu_model->getMenuTree($this->domain->id);
        $this->template->load($this->domain->theme, 'page', $data);
    }
    public function ajax_list()
    {
        $page     = $this->input->get('page');
        $search   = $this->input->get('search');
        $limit = 6;
        $this->db->from('table_pages');
        $this->db->where('category', '2');

        if (!empty($search)) {
            $this->db->like('title', $search);
        }

        $total = $this->db->count_all_results('', false);

        $query = $this->db->get();
        $data['news'] = $query->result();
        // Render HTML
        $html = $this->load->view('news/_list', $data, TRUE);

        // Pagination manual
        $totalPages = ceil($total / $limit);
        $pagination = "";

        for ($i = 1; $i <= $totalPages; $i++) {
            $active = ($i == $page) ? "active" : "";
            $pagination .= "<a href='#' class='$active' data-page='$i'>$i</a>";
        }

        echo json_encode([
            "html" => $html,
            "pagination" => $pagination
        ]);
    }
}
