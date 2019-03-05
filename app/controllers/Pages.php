<?php

Class Pages extends Controller{
    public function __construct(){
        
    }

    public function index(){
        $data = [
            'title' => '1337'
        ];

        $this->view('index', $data);
    }

    public function about(){
        $data = [
            'title' => 'about'
        ];
        $this->view('index', $data);
    } 
}

?>