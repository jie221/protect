<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends BaseController
{
	private $_db = "";

	public function __contruct()
	{
		$this->_db = M('user');
	}

	public function index()
	{
		// echo "管理员列表";
		$this->display();
	}

	public function admin_add()
	{
		$admin_id = $_REQUEST['admin_id'];
		if($admin_id){

		}
		$act = empty($admin_id) ? 'add' : 'edit';
		$this->assign('act',$act);
		$this->display();
	}

	public function adminHandle()
	{
		$data = $_REQUEST;
		var_dump($data);die;
		if($data['act'] == 'add'){
			unset($data['admin_id']);

		}else if($data['act'] == 'edit'){

		}else if($data['act'] == 'del'){

		}
	}

}