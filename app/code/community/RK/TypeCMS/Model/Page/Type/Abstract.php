<?php

abstract class RK_TypeCMS_Model_Page_Type_Abstract extends Varien_Object
{

    protected $_attributes;

    abstract function init(Varien_Data_Form $form, RK_TypeCMS_Model_Page $page);

    /**
     * @return array
     */
    protected function getAttributes()
    {
        if (!isset($this->_attributes)) {
            $this->_attributes = Mage::getSingleton('typecms/config')->getAttributes($this->getPageType());
        }
        return $this->_attributes;
    }

}