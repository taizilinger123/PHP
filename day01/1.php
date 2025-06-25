<?php
//header("content-type:text/html;charset=utf-8");
$name = '李四';
function say()
{
  $name = '张三';
}

echo  $name;
============================================================
$conn = mysqli_connect("localhost", "root", "111") or die("数据库连接错误".mysqli_error());
mysqli_select_db($conn, "db_database15") or die("数据库访问错误".mysqli_error());
mysqli_query($conn, "set names gb2312");

连接到本地的 MySQL 数据库，用户名是 root，密码是 111。
选择数据库 db_database15。
设置字符集为 gb2312（注意：现在建议使用 utf8mb4）。

if(isset($_POST['Submit']) && $_POST['Submit'] != ""){
    echo nl2br($_POST['a']) . "<br>";
    echo nl2br($_POST['b']);
}
isset($_POST['Submit'])：判断是否提交了表单。
$_POST['Submit'] != ""：确保提交值不为空。
nl2br()：将换行符 \n 转换成 <br>，在 HTML 中实现换行。

if(isset($_POST['Submit']) && $_POST['Submit']==true){
    $id=$_POST['name'];        // 获取商品名
    $num=$_POST['counts'];     // 获取新数量
    $key=array_search($id,$arrayid);  // 找到该商品名在数组中的下标
    $arraycount[$key]=$num;           // 更新对应数量
    $counts=implode("@",$arraycount); // 重新拼接为字符串
}   这里$_POST这个函数啥意思？不太理解 
你问得很好，$_POST 不是“函数”，而是 PHP 中的一个超级全局变量，它在处理表单提交时非常重要
$_POST 是一个 关联数组（associative array），用于接收 通过 HTTP POST 方法提交的表单数据。

<form method="post" action="your_script.php">
    <input type="text" name="name" value="数码相机">
    <input type="text" name="counts" value="5">
    <input type="submit" name="Submit" value="true">
</form>
当用户点击“提交”按钮时，浏览器会以 POST 方式把这些数据发送给服务器，然后：
$_POST['name']   // 结果是 "数码相机"
$_POST['counts'] // 结果是 "5"
$_POST['Submit'] // 结果是 "true"
也就是说，$_POST['xxx'] 就是获取 <input name="xxx"> 所提交的值
if(isset($_POST['Submit']) && $_POST['Submit']==true)这句的意思是：
isset($_POST['Submit'])：检查有没有提交表单（有没有名为 Submit 的字段）。
$_POST['Submit']==true：确保按钮值为 "true"
表达式	                       含义
$_POST	           包含所有通过 POST 提交的表单数据
$_POST['name']	   获取 <input name="name"> 的值
$_POST['counts']	 获取 <input name="counts"> 的值
isset(...)	       检查是否设置了某个字段

var_dump()和print_r()是什么意思？
$arr = [1, "hello", false];
var_dump($arr);
array(3) {
  [0]=>
  int(1)
  [1]=>
  string(5) "hello"
  [2]=>
  bool(false)
}
print_r() 用于打印数组或对象的结构和值，但不会显示变量的类型，结果更简洁，适合快速查看数组内容。
$arr = [1, "hello", false];
print_r($arr);
Array
(
    [0] => 1
    [1] => hello
    [2] => 
)
var_dump() 和 print_r() 对比总结
功能	             var_dump()	                        print_r()
是否显示类型	       ✅ 是（如 bool、int、string）       ❌否
是否适合调试	       ✅非常适合，信息详细	               ✅适合快速查看数组或对象结构
是否支持字符串	     ✅支持，显示长度和内容	             ✅支持
输出格式	           比较详细、可嵌套输出	                 比较简洁
建议使用场景
想知道变量的类型和值 ➜ 用 var_dump()；
只想快速查看数组或对象结构 ➜ 用 print_r()；
输出给用户 ➜ 不建议用这两个，建议用 echo 或模板渲染。
PHP :: 双冒号用法对照表
用法	                     示例	                               说明	                                  适用场景
类常量	                     ClassName::CONSTANT	               访问类中定义的 const 常量	           读取固定不变的值
静态属性	                   ClassName::$property                访问类中声明为 static 的属性	         跨对象共享数据
静态方法	                   ClassName::method()	               调用 static 修饰的方法	             工具类、无需实例化的操作
当前类常量/方法	           self::CONSTANT / self::method()	   在类内部访问自己的常量或静态方法	     类内部自身调用
延迟静态绑定	               static::method()	                   保留继承类的调用上下文（晚绑定）	     工厂模式、继承覆盖
父类成员	                   parent::method()	                   在子类中调用父类的静态方法或常量	     覆写后仍想访问父类内容
class A {
    const VERSION = '1.0';
    public static $count = 0;

    public static function showVersion() {
        echo self::VERSION;
    }
}

class B extends A {
    const VERSION = '2.0';

    public static function showParentVersion() {
        echo parent::VERSION;
    }

    public static function showDynamicVersion() {
        echo static::VERSION;
    }
}

A::showVersion();           // 输出 1.0
B::showParentVersion();     // 输出 1.0
B::showDynamicVersion();    // 输出 2.0

动作	                                    类比
$_POST['user']	                          用户在表格上写下名字，交给你，客户端发生的
$_SESSION['admin']	                      你把这个名字记在一个小本本（服务器 session）上，下次还能记得是谁登录的，服务器端发生的
$_SESSION 的信息是服务器存储的，不容易被篡改；而 $_POST 是用户提交的数据，容易造假，要验证！
使用 $_SESSION 之前，必须在页面顶部写：
session_start();
名称	                                     含义说明
$_POST	                                   是一个 超全局数组，用于接收 HTML 表单通过 POST 方法提交的数据。
                                           比如登录表单中输入的用户名、密码、验证码等
$_POST['user']	                           就是用户在 <input name="user"> 中填写的用户名
$_SESSION	                                 是另一个 超全局数组，用于在 多个页面之间 共享用户登录状态的信息。
                                           它存储在 服务器端，而不是浏览器
<link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" />
| 部分                                     | 含义                                            |
| -------------------------------------- | --------------------------------------------- |
| `<link ... />`                         | 用来在 HTML 中引入外部 CSS 文件的标签                      |
| `href="__ROOT__/Public/Css/style.css"` | 引入的 CSS 文件路径，这里用到了一个 ThinkPHP 模板变量 `__ROOT__` |
| `rel="stylesheet"`                     | 表示这是一个样式表                                     |
| `type="text/css"`                      | 声明这是 CSS 类型的文件（可写可不写）                         |
__ROOT__ 是什么？
这是 ThinkPHP 模板中的内置变量，表示当前网站的根目录路径。
举个例子：
假设你的项目地址是：
http://localhost/myproject/
那么：
__ROOT__/Public/Css/style.css
等价于：
/myproject/Public/Css/style.css
