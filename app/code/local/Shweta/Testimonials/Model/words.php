<?php

class Shweta_Testimonials_Model_Words
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('testimonials')->__('left')),
            array('value'=>2, 'label'=>Mage::helper('testimonials')->__('middle')),
       );
    }

}
	 
