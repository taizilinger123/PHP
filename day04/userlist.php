<?php
$link = mysqli_connect('localhost','root','123456');

if(!$link){
	exit('数据库连接失败');
}

mysqli_set_charset($link, 'utf8');

mysqli_select_db($link, 'bbs');  

$sql = "select * from bbs_user";

$obj = mysqli_query($link, $sql);

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
echo '<a href="add.php">添加</a>';
mysqli_close($link);