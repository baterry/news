<html>
	<head>
	<title>Чудо-новости</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
	<div class="header">
		<div class="logo"><a href="index.php">Чудо-новости</a></div>
		<div class="slogan">только достоверные новости!</div>
	</div>
<div class="news_list">
<h1>Последние новости</h1>
<?php
include 'class.php';
$obj = new News;
if(!($_GET['news_id']) and !($_GET['author_id'])){
	$res = $obj->getNewsMain();
	$dt = date('d-m-Y');
	foreach($res as $item){
		$ann = explode('.',$item['text']);
		?>
		<div class="news_item">
		<div class="title"><a href='?news_id=<?=$item['id']?>'><?=$item['title']?></a></div>
		
		<div class="date">
		Автор: <?=$item['name']?><br/>
		<?=$item['publish_date']?></div>
		<div class="anounce"><?=$ann[0]?></div>
		</div>
		<hr/>
		<?
}
	}
if(isset($_GET['news_id'])){
	$rows = $obj->getNewsAuthor();
	foreach($rows as $row){
		?>
		<h1><?=$row['title']?></h1>
		<div class="date">
		<?=$row['publish_date']?><br/>
		Автор - <a href='?author_id=<?=$row['author_id']?>'><?=$row['name']?></a></div>
		<div class="text"><?=$row['text']?></div>
		<hr/>
		<?
	}}
elseif(isset($_GET['author_id']) ){
	$rows = $obj->getAuthorTitles();
	
	
	foreach($rows as $row){
		$dt = date('d-m-Y');
		$arr = $row;
		$ann = explode('.',$row['text']);
		?><h1>Новость от: <?=$arr['name']?></h1>
		<div class="news_item">
		<div class="title"><a href='?news_id=<?=$row['id']?>'><?=$row['title']?></a></div>
		<div class="date"><?=$arr['publish_date']?></div>
		<div class="anounce"><?=$ann[0]?></div>
		</div>
		<hr/>
	<?
	}}
?>
</div><div class="footer">Все права защищены, 2005-2015</div></body></html>