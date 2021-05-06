<?php
/**

 */

class bnadmin_article extends bnadmin_article_parent
{
	// siehe application\views\azure\tpl\page\details\inc\tabs.tpl  und productmain.tpl
    public function isPriceAlarm() {
		return (bool) oxRegistry::get("oxConfig")->getConfigParam("blpricealarm");			
    }
	
	// Stammdaten->Grundeinstellungen->Einstellungen->Shop Frontend->Tags
	// siehe application\views\azure\tpl\page\details\inc\tabs.tpl
    // public function showTags() {
	// 	return (bool) oxRegistry::get("oxConfig")->getConfigParam("bltags");
	// }	


}