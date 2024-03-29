<?php
	
class Shweta_Testimonials_Block_Adminhtml_Testimonials_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "testimonials";
				$this->_controller = "adminhtml_testimonials";
				$this->_updateButton("save", "label", Mage::helper("testimonials")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("testimonials")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("testimonials")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("testimonials_data") && Mage::registry("testimonials_data")->getId() ){

				    return Mage::helper("testimonials")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("testimonials_data")->getId()));

				} 
				else{

				     return Mage::helper("testimonials")->__("Add Item");

				}
		}
}