<?php
//application/controllers/Pics.php

class Pics extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('pics_model');
        /*
        $this->config->set_item('banner','News Section');
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        */
    }
/*
    public function index($tags)
    {
        
        //$tags = 'sounders';
        $pics = $this->pics_model->get_pics($tags);
         
        foreach($pics as $pic){

            $size = 'm';
            $photo_url = '
            http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

            echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
         
        }
    
    }

    */
    
    public function index($tags)
    {
        //$tags = 'sounders';
        $pics = $this->pics_model->get_pics($tags);
        $data['title'] = 'Pics';
        $data['pics'] = $pics;
        $this->load->view('news/pics', $data);
    }
   

}