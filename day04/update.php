<?php
echo '这是执行修改操作';

$id = $_GET['id'];

$link = mysqli_connect('localhost','root','123456');

if(!$link){
	exit('数据库连接失败');
}

mysqli_set_charset($link, 'utf8');

mysqli_select_db($link, 'bbs');  

$sql = "select * from bbs_user where id=$id";

$obj = mysqli_query($link, $sql);

$rows = mysqli_fetch_assoc($obj);

?>

<html>
    <form action="doupdate.php">
	    <input type="hidden" value="<?php echo $id;?>" name="id" />
	    用户名:<input type="text" value="<?php echo $rows['username'];?>" name="username" /><br/>
	    地址:<input type="text" value="<?php echo $rows['address'];?>"  name="address"/><br/>
	    性别:<input type="text" value="<?php echo $rows['sex'];?>"  name="sex"/><br/>
	    年龄:<input type="text" value="<?php echo $rows['age'];?>" name="age"/><br/>
		<input type="submit" value="执行修改" />
	</form>
</html>
