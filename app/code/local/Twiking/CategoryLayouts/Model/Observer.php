<?php
class Twiking_CategoryLayouts_Model_Observer
{
    public function addHandles(Varien_Event_Observer $observer)
    {
        $category = Mage::registry('current_category');

        if ($category instanceof Mage_Catalog_Model_Category) {
            $update = Mage::getSingleton('core/layout')->getUpdate();
            $pageLayout = $category->getPageLayout();

            // Add layout handle by page layout
            switch ($pageLayout) {
                case 'category_custom_design_1':
                    $update->addHandle('category_custom_design_1');
                    break;
                case 'category_custom_design_2':
                    $update->addHandle('category_custom_design_2');
                    break;
                case 'category_custom_design_3':
                    $update->addHandle('category_custom_design_3');
                    break;
            }

            // Add layout handle by category level. Decrease with 1 since root category is level 1.
            $level = $category->getLevel() - 1;
            $update->addHandle('category_level_' . $level);
        }

        return $this;
    }
}