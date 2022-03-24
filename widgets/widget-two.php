<?php 

class Elementor_widget_two extends \Elementor\Widget_Base{


    // widget name here
    public function get_name(){
        return "Our Second Widget";
    }

    // widget title here

    public function get_title()
    {
        return "SeWidgets";
    }

    // widget icon here

    public function get_icon()
    {
      return 'eicon-code';  
    }

    // widgets category

    public function get_categories()
    {
        return ['basic'];
    }

    //widgets keyword

    public function get_keywords()
    {
        return ['second','hello'];
    }

    // widget output rendar form here

    protected function render(){ 
        ?>
            <p>This is welcome text</p>
        <?php
        
    }

} // end widgets class here