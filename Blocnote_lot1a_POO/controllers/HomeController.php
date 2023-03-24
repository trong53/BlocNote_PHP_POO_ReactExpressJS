<?php

class HomeController
{
    public $home_model;

    public function __construct() {
        require './models/HomeModel.php';
        $this->home_model = new HomeModel();
    }

    public function index() {
        $all_notes = $this->home_model->getAllNotes();
        require './views/HomeView.php';
    }

}
