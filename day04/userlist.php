<?php

$page = empty($_GET['page'])? 1 : $_GET['page'];

$link = mysqli_connect('localhost','root','123456');

if(!$link){
	exit('数据库连接失败');
}

mysqli_set_charset($link, 'utf8');

mysqli_select_db($link, 'bbs');  

//----------分页开始--------------
//求出来总条数
$sql = "select count(*) as count from  bbs_user";
$result = mysqli_query($link , $sql);
$pageRes = mysqli_fetch_assoc($result);
$count = $pageRes['count'];
//每页显示数 每页显示五条数据
$num = 5;
//根据每页显示数可以求出来总页数
$pageCount = ceil($count/$num);
//根据总页数求出来偏移量
$offset = ($page-1)*$num;

//----------分页结束--------------

$sql = "select * from bbs_user limit ".$offset . ',' . $num;

$obj = mysqli_query($link, $sql);
echo '<a href="add.php">添加</a>';
echo '<table width="600" border="1">';
      echo '<th>编号</th><th>用户名</th><th>地址</th><th>性别</th><th>年龄</th><th>操作</th>';
	  
	  while($rows = mysqli_fetch_assoc($obj)){
		  echo '<tr>';
		       echo '<td>'.$rows['id'].'</td>';
			   echo '<td>'.$rows['username'].'</td>';
			   echo '<td>'.$rows['address'].'</td>';
			   echo '<td>'.($rows['sex']==1?'男':'女').'</td>';
			   echo '<td>'.$rows['age'].'</td>';
			   echo '<td><a href="del.php?id='.$rows['id'].'">删除</a>/<a href="update.php?id='.$rows['id'].'">修改</a></td>';
		  echo '</tr>';
		  
	  }
echo '</table>';

$next = $page + 1;
$prev = $page - 1;
if($prev < 1){
	$prev = 1;
}
if($next > $pageCount){
	$next = $pageCount;
}

mysqli_close($link);
?>
<a href="userlist.php?page=1">首页</a>&nbsp;&nbsp;&nbsp;<a href="userlist.php?page=<?=$prev;?>">上一页</a>&nbsp;&nbsp;&nbsp;<a href="userlist.php?page=<?php echo $next;?>">下一页</a>&nbsp;&nbsp;&nbsp;<a href="userlist.php?page=<?=$pageCount;?>">尾页</a>

