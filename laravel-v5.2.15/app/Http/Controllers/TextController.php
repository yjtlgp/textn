<?php
	namespace App\Http\Controllers;
	use App\Index;
	use App\Http\Controllers\Controller;
	use DB;
	class TextController extends Controller{
		public function index(){
			return view("index.index");
		}
		public function add(){
			header("content-type:text/html;charset=utf8");
			$desc=$_POST['liuyan'];
			$sql="insert into liuyan (l_desc) values('$desc')";
			//echo $sql;die;
			$re=DB::insert($sql);
			if($re){
				echo "<script>alert('添加成功');location.href='lists'</script>";
			}else{
				echo "<script>alert('添加失败');location.href='/'</script>";
			}
		}
		public function lists(){
			$sql="select * from liuyan";
			$arr=DB::select($sql);
			//print_r($arr);die;
			return view("index.list",['arr'=>$arr]);
		}
		public function update(){
			$id=$_GET['id'];
			$sql="select * from liuyan where l_id=$id";
			$arr=DB::select($sql);
			//print_r($arr);die;
			return view("index.update",['arr'=>$arr]);
		}
		public function updateall(){
			//print_r($_POST);die;
			$id=$_POST['id'];
			$liu=$_POST['liu'];
			$sql="update  liuyan set l_desc='$liu' where l_id=$id";
			//echo $sql;die;
			$arr=DB::update($sql);
			//print_r($arr);die;
			if($arr){
				echo "<script>alert('修改成功');location.href='lists'</script>";
				$sql2="select * from liuyan";
			$arrlist=DB::select($sql);
			return view("index.list",['arr'=>$arrlist]);
			}else{
				echo "<script>alert('修改失败');location.href='/'</script>";
			}
			
		}
		public function del(){
			$id=$_GET['id'];
			$sql="delete from liuyan where l_id=$id";
			//echo $sql;die;
			$del=DB::delete($sql);
			if($del){
				echo "<script>alert('删除成功');location.href='lists'</script>";
				$sql2="select * from liuyan";
				$arrlist=DB::select($sql);
				return view("index.list",['arr'=>$arrlist]);
			}else{
				echo "<script>alert('删除失败');location.href='/'</script>";
			}
		}
	}
?>