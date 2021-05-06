<?php
/**

 */
class bnadmin_base extends oxbase
{
	public $sModuleId		=	null;				// Module ID, for later usage in imva_services
	public $sModuleVersion	=	null;				// Module Version (for template)
	public $oConf			=	null;				// oxconfig
	
	/**
	 * Construct
	 * 
	 * @param null
	 * @return null
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->sModuleId = 'bnadmin';
		
		$this->oConf = $this->getConfig();
		
		// Get the module version
		$oModule = oxNew('oxModule');
		$oModule->load($this->sModuleId);		
		$this->sModuleVersion = $oModule->getInfo('version');
	}
	
	
	/**
	 * POST/GET parameter getter
	 * 
	 * @param string
	 * @return string
	 */
	public function getP($sString = '')
	{
		return $this->oConf->getRequestParameter($sString);
	}
	
	/**
	 * Name of the current class
	 * For usage with forms.
	 * 
	 * @param null
	 * @return string
	 */
	public function getCurrentCl()
	{
		return $this->oConf->getActiveView()->getClassName();
	}
	

}