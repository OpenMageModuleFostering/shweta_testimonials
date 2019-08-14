<?php   

class Shweta_Testimonials_Block_Index extends Mage_Core_Block_Template{   


	
public function ShowTestimonialsRecords()
{
  $w = Mage::getSingleton('core/resource')->getConnection('core_write');
    $results = $w->query('SELECT * FROM shweta_testimonials');
   return $results;

}

public function getTestimonialsEnabled()
    {
        return Mage::getStoreConfig('shweta/shweta_group/shweta_select',Mage::app()->getStore());
    }
public function getTestimonialsImageWidth()
    {
        return Mage::getStoreConfig('shweta/shweta_group/shweta_width',Mage::app()->getStore());
    }
public function getTestimonialsImageHeight()
    {
        return Mage::getStoreConfig('shweta/shweta_group/shweta_height',Mage::app()->getStore());
    }
public function getTestimonialsView()
    {
        return Mage::getStoreConfig('shweta/shweta_group/shweta_view',Mage::app()->getStore());
    }
public function getTestimonialsImages()
    {
        return Mage::getStoreConfig('shweta/shweta_group/shweta_image',Mage::app()->getStore());
    }


}
