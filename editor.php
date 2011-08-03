<?php
require_once ('include/fckeditor/fckeditor.php');

echo $sBasePatch = $_SERVER['PHP_SELF'];
echo "<br/>";
echo $sBasePatch = dirname($sBasePatch).'/include/fckeditor/';

$ed= new FCKeditor('con');		//'con'取得值所用的名称，即input的name值
$ed->BasePath=$sBasePatch;
$ed->ToolbarSet='Default';		//设置显示模式 $ed->ToolbarSet='Basic';
$ed->Width='100%';
$ed->Height='300px';

if(@$_POST[sub]){
		echo "标题".$_POST['title'];
		echo "FCK内容".$_REQUEST['con'];
	 }
?>

<form action="" method="post">
标题：
<input type="text" name="title" value="">
内容：
<?php
$ed->Value='123';
$ed->Create();
?>
<input type="submit" name="sub" value="添加新闻">
</form>