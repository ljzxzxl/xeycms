<?php
include_once("header.html");
include_once ("config.php");

$db=new db();
$db->exec("set names utf8;");
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
if(@$_REQUEST['id'])
{$id=$_REQUEST['id'];}
else {$id=1;}
$mysql="select * from xey_archives A left join xey_articles B on A.id=B.aid where A.id=".$id."";
$query = $db->query($mysql);
$query->setFetchMode(PDO::FETCH_ASSOC);
while($row=$query->fetch())
{
?>
			<div id="content">
					<div id="detail">
						<h2 class="big" align="center"><?php echo $row['title'];?></h2>
						<!-- 日志内容 开始 --><?php echo $row['body'];?><!-- 日志内容 结束 -->
						<p class="date">
                        <a href="http://ljzxzxl.mezoka.com/technology-article/php/">阅读(<?php echo $row['click'];?>)</a>
						<a href="http://ljzxzxl.mezoka.com/technology-article/php/#评论1">评论(<?php echo $row['userip'];?>)</a> 26.11.2010. 12:22
                        </p>
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
}
include_once("footer.html");
?>