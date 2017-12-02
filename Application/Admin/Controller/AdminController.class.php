<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends BaseController
{
	private $_db = "";

	public function __construct()
	{
		parent::__construct();
		$this->_db = M('Admin');
	}

	public function index()
	{
		$data = $_GET;

		if($data){
			$endTime = empty($data['endTime']) ? "" : strtotime($data['endTime']); 
			$startTime = empty($data['startTime']) ? "" : strtotime($data['startTime']); 

			$where['username'] = array('like',"%".$data['username']."%");
			$where['regTime'] = array("between",array($startTime,$endTime));
			$where['_logic'] = 'and';
			$list = $this->_db->where($where)->order('id asc')->select();

			$this->assign('startTime',$data['startTime']);
			$this->assign('endTime',$data['endTime']);
			$this->assign('username',$data['username']);
		}else{
			$list = $this->_db->order('id desc')->select();
		}
		$this->assign('list',$list);
		$this->display();
		
	}

	public function admin_add()
	{
		$admin_id = $_REQUEST['id'];
		if($admin_id){
			$info = $this->_db->where(array("id"=>$admin_id))->find();
			$this->assign('info',$info);
		}
		$act = empty($admin_id) ? 'add' : 'edit';
		$this->assign('act',$act);
		$this->display();
	}

	public function adminHandle()
	{
		$data = $_POST;
		if(empty($data['password'])){
			unset($data['password']);
		}else{
			$data['password'] = setSalt($data['password']);
		}
		
		//添加管理员
		if($data['act'] == 'add'){
			unset($data['id']);
			$data['regTime'] = time();
			if($this->_db->where("username = '".$data['username']."'")->count()){
				exit(json_encode(array('status'=>0,'msg'=>"此管理员已存在")));
			}
			$res = $this->_db->add($data);
			if($res){
				response(array('status'=>1,'msg'=>"添加成功",'url'=>"/admin.php/admin/index"));
			}else{
				response(array('status'=>0,'msg'=>"添加失败"));
			}
		}else if($data['act'] == 'edit'){
			//修改管理员信息
			$admin_id = $data['id'];
			unset($data['id']);
			$data['updateTime'] = time();
			$res = $this->_db->where("id = $admin_id")->save($data);
			if($res){
				response(array('status'=>1,'msg'=>"修改成功",'url'=>"/admin.php/admin/index"));
			}else{
				response(array('status'=>0,'msg'=>"修改失败"));
			}
		}
	}

	public function delData()
	{
		$data = $_GET;
		if(!is_numeric($data['id']))
		{
			response(array('status'=>0,'msg'=>'参数错误'));
		}

		$res = $this->_db->where("id = ".$data['id'])->delete();
		if($res){
			response(array('status'=>1,'msg'=>"删除成功"));
		}else{
			response(array('status'=>0,'msg'=>"删除失败"));
		}
	}

	public function roleList()
	{
		$this->display();
	}
}