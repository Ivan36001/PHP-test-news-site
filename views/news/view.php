<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo 'Новость №'.$newsItem['id']?></title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	


	
	<div id="page">
		
			
				<div id="content">
					<div class="post">
						<h2 class="title"><?php echo $newsItem['title'].' # '.$newsItem['id'];?></h2>
                                                <p class="byline"><?php echo $newsItem['date'];?>
						<div class="entry">
							<p><?php echo $newsItem['full_content'];?></p>
						</div>
					</div>
					<p><a href='http://localhost/test/index.php/news/' class="permalink"> Back to HomePage</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
			
		
	
	</div>
	

</body>
</html>
