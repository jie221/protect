<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller
{
	private $phone = '';
	private $userid = null;

	public function _initialize()
	{
		if(CONTROLLER_NAME == "Index"){
			$action_name = array();
			if(in_array(ACTION_NAME,$action_name)){
				if($this->check())
				{
					
				}
			}
		}
	}


	private function check()
	{
		$login_name = $_COOKIE['login_name'];
		$userid = $_COOKIE['userid'];

		if(empty($login_name) || empty($userid)) return false;

		if(!is_numeric($userid)) return false;
		if(!is_numeric($login_name) && strlen($login_name) != 11) return false;

		$this->$phone = $login_name;
		$this->userid = $userid;
		return true;
	}
}