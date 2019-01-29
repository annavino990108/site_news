<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style/style.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<title></title>
</head>
<body>
<div class="preloader">
	<div>
		<img src="images/load.svg">
	</div>
</div>

    <div class="conteiner">
    	<div class="wrapper">
    			<img src="images/_logo.png" id="img_logo_main">
    	</div>

    	<div class="news">
    		<form action="view.php" method="post" id="form">   
	    		<div class="checkbox" >
	    			<input id="checkbox1" type="checkbox" name="news[]" value="1">
						<label for="checkbox1">
	    			<img src="images/habra.png" class="img_news">
	    			</label>
	    		</div>	
	    		<div class="checkbox" >
	    			<input id="checkbox2" type="checkbox" name="news[]" value="2">
						<label for="checkbox2">
	    			<img src="images/horror.png" class="img_news">
	    			</label>
	    		</div>
	    		<div class="checkbox" >
	    			<input id="checkbox3" type="checkbox" name="news[]" value="3">
						<label for="checkbox3">
	    			<img src="images/sport.png" class="img_news">
	    			</label>
	    		</div>		
    		  		
	    		<div class="checkbox" >
	    			<input  id="checkbox4" type="checkbox" name="news[]" value="4">
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
	    		<div class="checkbox" >
	    			<input id="checkbox6" type="checkbox" name="news[]" value="6">
						<label for="checkbox6">
	    			<img src="images/yandex.png" class="img_news">
	    			</label>
	    		</div>	
    		</div>	
    </div>

    		<input type="submit" class="submit" value="Перейти" id="hide" style="display: none;" />
			</form>
			<div class="submit" id="footer" style="display: block;">
				<div>
					Выбирете сайты для просмотра новостей
				</div>
			</div>

<script src="js/hide_block.js"></script>

		<script type="text/javascript">
			$(window).on('load',function(){
				$('.preloader').delay(1000).fadeOut('slow');
			})
		</script>

</body>
</html>