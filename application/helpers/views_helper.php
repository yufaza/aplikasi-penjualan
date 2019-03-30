<?php
    if ( ! function_exists('show'))
    {
        function  show($view=null, $data=null)
        {
           $ci = &get_instance();
           $data['view'] = $view;
           $ci->load->view('layout', $data);
        }
    }
?>