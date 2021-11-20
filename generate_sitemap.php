<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
	include_once("classes/DBManager.php");
	
	$db = new DBManager();
	
	$Sql_Article = "Select * from Article order by Article_Row_ID";
	$result_article = $db->search_query($Sql_Article);
	$num_article = mysql_num_rows($Sql_Article);
	echo "Num: " .$num_article;
	
	$i=0;
	
?>
</body>
</html>
