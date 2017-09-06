<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       
	   $this->display();
    }
	
	 public function lis(){
		 
	   $model = M("admin");
	   $lis = $model->select();
	   $this->assign("lis",$lis);
	   $this->display();
	   
    }
	
	// 修改展示
	public function edit(){
		 
		 $id = $_GET["id"];
		
		 $model  = M("admin");
		 $lis = $model->where("id=".$id)->find();
		 $this->assign("lis",$lis);

		 $this->display();
	}
	
	//修改提交
	
	public function editUp(){
		 $id = $_GET["id"];
		 $model  = M("admin");
		 $data["username"] = $_POST["username"];
		 $data["password"] = $_POST["password"];
		 $data["status"] = $_POST["status"];
		 
		$res = $model->add($data);
		
		if( $res ){
			$this->success("修改成功",U("Index/lis"));
		}else{
			$this->error("修改失败",U("Index/edit"));
		} 
	}
	
	public function del(){
		$id = $_GET["id"];
		$model = M("admin");
		$res = $model->where('id='.$id)->delete();
		
		if( $res ){
			$this->success("删除成功",U("Index/lis"));
		}else{
			$this->error("修改失败",U("Index/lis"));
		}
		 
	}
	
	public function add(){
		$this->display();
	}
	
	
	
	public function addUp(){
		
		$model = M("admin");
		$lis["username"] = $_POST["username"];
		$lis["password"] = $_POST["password"];
		$lis["status"] = $_POST["status"];
		
		//$username=$_POST["username"];
		$where['username']=$_POST["username"];
		
		$res = $model->where($where)->find();
		
		if( !$res ){
			$model->add($lis);
			$this->success("添加成功",U("Index/lis"));
		}else{
			$this->error("用户名存在",U("Index/lis"));
		}
	}
	
	public function yz(){
		
		$model = M("admin");
		$name['username'] = $_POST["pro_id"];
		
		$res = $model->where($name)->find();
		
		if( $res ){
			echo 1; // 1 代表查到
		}else{
			echo 2; // 2 代表没有
		}
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
}