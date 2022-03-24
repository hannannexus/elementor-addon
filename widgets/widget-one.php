<?php 

class Elementor_Widget_one extends \Elementor\Widget_Base{

    public function get_name(){
        return  "Widget One";
    }

    public function get_title(){
        return "Our First Widget";
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['Hello','world'];
    }

    protected function render()
    {
        ?>
        
            <p>Widgets One</p>
        <?php
    }
}