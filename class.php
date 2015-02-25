<?
class News extends PDO{
	private $_db;
	private $user = "root";
	private $pass = "";
	const DB_NAME = "news.db";
	function __construct(){
		try{
		$this->_db = new PDO('mysql:host=localhost;dbname=news',"root","");
		$this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}catch(PDOException $e){
		echo $e->errorCode();
	}
	}
	function getNewsMain(){
		try{
		$page = $_GET['page'];
		if(!$page){$page = 1;}
		$perpage = 3;
		$start = ($page-1)*$perpage;
		$sql = "SELECT * FROM authors INNER JOIN news ON authors.id = news.author_id
		LIMIT $start,$perpage";
		$result = $this->_db->query($sql) or die('ERROR');
		$sql2 = "SELECT * FROM authors INNER JOIN news ON authors.id = news.author_id";
		$result2 = $this->_db->query($sql2) or die('ERROR');
		$total = $result2->rowCount();
		$pages = ceil($total/$perpage);
		for($i=1;$i<=$pages;$i++){
		echo "<a href='?page=$i'>$i  </a>";
		}
		$this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		return $this->db2Arr($result);
		}catch(PDOException $e){
			echo $e->errorCode();
		}
	}
	function db2Arr($data){
		try{
		$this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		while($row = $data->fetch(PDO::FETCH_ASSOC))
			$arr[]= $row;
		return $arr;
		}catch(PDOException $e){
			$e->errorCode();
		}
	}
	function getNewsAuthor(){
		$sql = "SELECT * FROM authors INNER JOIN news ON authors.id = news.author_id
	WHERE authors.id = news.author_id and news.id = {$_GET['news_id']}";
		$result = $this->_db->query($sql) or die('ERROR');
		return $this->db2Arr($result);	
	}
	function getAuthorTitles(){
		$sql = "SELECT * FROM authors INNER JOIN news ON authors.id = news.author_id
	WHERE news.author_id = {$_GET['author_id']}";
		$result = $this->_db->query($sql) or die('ERROR');
		return $this->db2Arr($result);	
	}

}
?>