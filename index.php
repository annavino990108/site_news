<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1">
	<link rel="stylesheet" href="style/style.css" type="text/css"/>
	<title></title>
</head>
<body>

    <div class="conteiner">
    	<div class="wrapper">
    			<img src="images/_logo.png" id="img_logo_main">
	    	<div class="text">
	    		<p>ВЫБИРЕТЕ САЙТЫ ДЛЯ ПРОСМОТРА НОВОСТЕЙ</p>
	    	</div>
    	</div>

    	<div class="news">
    		<form action="view.php" method="post">   
	    		<div class="checkbox" >
	    			<input id="checkbox1" type="checkbox" name="news[]" value="1">
						<label for="checkbox1">
	    			<img src="images/habra.png" class="img_news">
	    			</label>
	    		</div>	
	    		<!--<div class="checkbox" >
	    			<input id="checkbox2" type="checkbox" name="news[]" value="2">
						<label for="checkbox2">
	    			<img src="images/horror.png" class="img_news">
	    			</label>
	    		</div>!-->
	    		<div class="checkbox" >
	    			<input id="checkbox3" type="checkbox" name="news[]" value="3">
						<label for="checkbox3">
	    			<img src="images/sport.png" class="img_news">
	    			</label>
	    		</div>		
    		  		
	    		<div class="checkbox" >
	    			<input id="checkbox4" type="checkbox" name="news[]" value="4">
						<label for="checkbox4">
	    			<img src="images/kt.png" class="img_news">
	    			</label>
	    		</div>	
	    		
	    		<div class="checkbox" >
	    			<input id="checkbox5" type="checkbox" name="news[]" value="5">
						<label for="checkbox5">
	    			<img src="images/newsru.png" class="img_news">
	    			</label>
	    		</div>		
    		</div>

    	
    </div>
    	<div class="footer">
    	<div>
    		<input type="submit" class="submit" value="ПЕРЕЙТИ" />
			</form>
    	</div>
    	<div>
</body>
</html>