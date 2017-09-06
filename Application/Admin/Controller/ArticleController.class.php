<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	
    public function index(){
		
			$art = M("article");
			
			$model = $art->select();
			$this->assign("model",$model);
	     
	   
			$this->display();
    }
	
	public function add(){
		$model = M("cate");
		$lis = $model->select();
		$this->assign("lis",$lis);
		$this->display();
	}
	
	public function addUp(){
		$upload = new \Think\Upload();
        $upload->maxSize   =     3145728 ;
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath  =     './Uploads/'; 
        $upload->savePath  =     ''; 
        $info   =   $upload->upload();

		$picture="./Uploads/".$info['img']['savepath'].$info['img']['savename'];
		
		//echo $picture; 
		//dump ($info);die();
		
		$model = M("Article");
		$data["name"] = $_POST["name"];
		$data["img"] =  $picture ;
		$data["text"] = $_POST["text"];
		$data["uid"] = $_POST["uid"];
		
		var_dump ($data); die();
		
		$res = $model->add($data);
		
		if( $res ){
			$this->success("添加成功",U("Cate/index"));
		}else{
			$this->error("添加失败",U("Cate/index"));
		}
	}
	
	public function edit(){
		$this->display();
	}
	
	public function editUp(){
		
		$id = $_POST["id"];
		
	}
	
	public function del(){
		$id = $_GET["id"];
		
		
		
		$art = M("article");
		
		$res = $art->where("id=".$id)->delete();
		if( $res ){
			$this->success("删除成功",U("Article/index"));
		}else{
			$this->error("删除失败",U("Article/index"));
		}
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}