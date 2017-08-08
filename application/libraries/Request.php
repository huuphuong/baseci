<?php 

class Request 
{

	protected $CI;

	public function __construct() 
	{
		$this->CI=& get_instance();
		// Load model, library, helper if you need
	}


	public static function getName()
	{
		
	}


	
}