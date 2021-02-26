<?php

class ListCon extends Controller
{
    public function index()
    {
        $data['title'] = 'Consultants';
        $this->view('templates/header_aflog', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('ListCon/index');
        $this->view('templates/footer_aflog');
    }
}
