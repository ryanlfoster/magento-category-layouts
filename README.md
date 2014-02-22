#Magento Category Layouts

There's no easy and user friendly way to have different kind of layouts for categories in Magento. Both for devs and customers. This module creates new layout handles depending on page layout and category level. With this approach the customer can easily select which layout they want and we can avoid having layout XML in Custom Layout Update.

## Page Layouts

The module provides 3 new page layouts:
* Category Custom Design 1
* Category Custom Design 2
* Category Custom Design 3

These page layouts creates new custom layout handles where you can apply your changes.
E.g: 
```xml 
<category_custom_design_1> 
```

## Category Level Layout Handles

The module creates layout handles per level.

E.g: 
```xml 
<category_level_1> 
```
