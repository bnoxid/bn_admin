<?php
/**

 */
class bnadmin_main extends bnadmin_main_parent
{
	public $blNewsletter = null;	
	
	
	public function myShowNewsletter() {	
		$this->blNewsletter =  (bool) oxRegistry::get("oxConfig")->getConfigParam("blnewsletter");
		return $this->blNewsletter;
	}
	
	public function getShowWishlist() {	  // Wunschzettel
        return (bool) oxRegistry::get("oxConfig")->getConfigParam("blwunschzettel");
	}

    /**
     * Returns config param "bl_showListmania" value
     *
     * @return bool
     */
    public function getShowListmania()
    {
        return false;
    }	
	
    public function ratingIsActive()
    {
        return false;
    }	
	
    public function getParameter()
    {
        return true;
    }	
	



}