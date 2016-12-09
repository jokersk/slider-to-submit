<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qaptcha extends YSD_Controller {
	
	
	public function __construct()
    {
    	 parent::__construct();
       	// session_start();
		
    }
	
	public function index()
	{
		
			$aResponse['error'] = false;


			if(isset($_POST['action']) && isset($_POST['qaptcha_key']))
			{
				$_SESSION['qaptcha_key'] = false;	
				
				if(htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'qaptcha')
				{

					$_SESSION['qaptcha_key'] = $_POST['qaptcha_key'];
					echo json_encode($aResponse);
				}
				else
				{
					$aResponse['error'] = true;
					echo json_encode($aResponse);
				}
			}
			else
			{
				$aResponse['error'] = true;
				$aResponse['post'] = $_POST;
				echo json_encode($aResponse);
			}
		
	}

	
	
	
}




