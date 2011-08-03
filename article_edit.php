<?php
include_once("header.html");
include_once ("config.php");
require_once ('include/fckeditor/fckeditor.php');

$db=new db();
$db->exec("set names utf8;");

$sBasePatch = $_SERVER['PHP_SELF'];
$sBasePatch = dirname($sBasePatch).'/include/fckeditor/';
$ed= new FCKeditor('content');		//'con'取得值所用的名称，即input的name值
$ed->BasePath=$sBasePatch;		//编辑器路径
$ed->ToolbarSet='Default';		//设置显示模式 $ed->ToolbarSet='Basic';
$ed->Width='100%';
$ed->Height='500px';

if(@$_POST['add_article'])
	{
		//echo "标题".$_POST['title'];
		//echo "FCK内容".$_REQUEST['content'];
		$sql1="insert into xey_archives (typeid,typeid2,flag,channel,click,title,writer,source,litpic,pubdate,senddate,keywords,description) value (1,0,'a',1,12,'".$_REQUEST['title']."','admin','http://','url','2010','2011','php','php开发')";
		$sql2="insert into xey_articles (typeid,body,userip) value (1,'".$_REQUEST['content']."','192.168.0.2')";
		if($db->exec($sql1)&&$db->exec($sql2))
			{echo " 插入成功！";}
		else
			{echo "插入失败！";}
	 }
?>
			<div id="content">
					<div id="article_edit">
                    	<form method="post" action="article_edit.php" id="post" accept-charset="utf-8">
                            <div class="">标题：<input type="text" name="title" value=""></div>
                            <div class="">内容：<?php $ed->Value="123";$ed->Create();?></div>
                        	<input type="submit" name="add_article" id="add_article" class="button" value="确认提交" />
                        </form>
					</div>

					<div id="side2">
						<div class="single">
							<h3>New Posts</h3>
								<ul>
								<li><a title="个人日志 / 让青春继续 (28.11.2010. 10:53)" href="http://ljzxzxl.mezoka.com/personal-log/story/">让青春继续 (个人日志)</a>
								</li><li><a title="技术文档 / 数据库中的主键与外键 (26.11.2010. 12:36)" href="http://ljzxzxl.mezoka.com/technology-article/database/">数据库中的主键与外键 (技术文档)</a>
								</li><li><a title="技术文档 / PHP开发工程师的职业规划 (26.11.2010. 12:22)" href="http://ljzxzxl.mezoka.com/technology-article/php/">PHP开发工程师的职业规划 (技术文档)</a>
								</li>
								</ul>
							<h3>New Comments</h3>
								<ul>
								<li><a title="评论已发表 PHP开发工程师的职业规划" href="http://ljzxzxl.mezoka.com/technology-article/php/#评论1">Xeylon Zhou (test Comments!...)</a></li>
								</ul>
                            <h3>Categories</h3>
								<ul>
									<li><a title="技术文档 - 技术相关文档" href="http://ljzxzxl.mezoka.com/technology-article/">技术文档(2)</a></li><li><a title="个人日志 - 个人相关日志" href="http://ljzxzxl.mezoka.com/personal-log/">个人日志(1)</a></li>	
								</ul>
							<h3>RSS Feeds</h3>
								<ul>
									<li><a href="rss-articles/">文章RSS</a></li><li><a href="rss-comments/">评论RSS</a></li>
								</ul>
						</div>
					</div>
			</div>
<?php
include_once("footer.html");
?>