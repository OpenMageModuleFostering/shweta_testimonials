<?php   
class Shweta_Testimonials_Block_Testimonials extends Mage_Core_Block_Template{   
    

public function ShowCustomRecords()
{
  $w = Mage::getSingleton('core/resource')->getConnection('core_write');
    $results = $w->query('SELECT * FROM shweta_testimonials');
   return $results;

}

}
