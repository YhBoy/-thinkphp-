<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
	
    public function index(){
	   $model  = M("cate");
	   $res = $model->select();
	   $this->assign("res",$res);
	   $this->display();
    }
	
	public function add(){
		
		
		$this->display();
	}
	
	public function addUp(){
		$model = M("cate");
		$data["name"] = $_POST["name"];
		$data["info"] = $_POST["info"];
		$data["time"] = time();
		$data["uid"] = $_POST["uid"];

		$res = $model->add($data);
		
		if( $res ){
			$this->success("添加成功",U("Cate/index"));
		}else{
			$this->error("添加失败",U("Cate/index"));
		}
	
	}
	
	public function del(){
		$id = $_GET["id"];
		$model = M("Cate");
		
		$res = $model->delete($id);
		if( $res ){
			$this->success("删除成功",U("Cate/index"));
		}else{
			$this->error("删除失败",U("Cate/index"));
		}
		
	}
	

}