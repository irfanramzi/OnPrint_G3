<?php

class dbchart extends Front_end{
    

    /**
     */
    function __construct() {
        parent::__construct();
        $this->load->model(charts_model);
    }

    function index()
    {
        $data['has_offers_rate'] = $this->charts_model->get_services_has_offers();
        $this->View('content/charts', $data);
    }
}