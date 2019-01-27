<?php
header('Content-type:text/html; charset=utf-8');
require 'phpQuery.php';

 function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }

     function NewsView($url,$newsview,$im,$tit,$tim,$a_href,$attr_img,$attr_a,$site_name)
     {
	$file=file_get_contents($url);
	$doc = phpQuery::newDocument($file);
	 foreach ($doc->find($newsview) as $article) {
			$article=pq($article);
			$img=$article->find($im)->attr($attr_img);
			$title=$article->find($tit)->html();
			$time=$article->find($tim)->html();
			if($attr != ''){
			$a=$article->find($a_href)->attr($attr_a);	
			}
			else{
			$a=$article->find($a_href)->html();
			}

			if($site_name='newsru')
			{
				if (strpos($a, 'https') == 0) { 
					$a='https://www.newsru.com/'.$a;
				}}
			
			if($attr !=''){
				echo "<hr><h3 id='title'><a href='$a'>".($title)."</a></h3><br>";	}
				else{
			 	echo '<hr><h3 id="title">'.($title).'</h3><br>';
			 	}
			 

		 	if($img != '' and $attr_img == style){
		 		echo "<div><div style='$img' class='pic_news_fon'></div><br><br>";
		 	}
		 	else {
		 		if($img !='')
		 		{
		 			echo "<img src='$img'class='pic_news'><br><br>";
		 		}
		 	}
		 	if($tim != ''){
		 	echo '<span>'.($time).'</span>';	
		 }
 }}
?>
	<meta name="viewport" content="width=device=width">
<link rel="stylesheet" href="style/style.css" type="text/css"/>
		<title>Новости</title>
	<body class="view">

		<div class="wrapperview">
			<div class="logo">
				<a href="/index.php"><img src="/images/_logo.png" id="img_logo"></a>
			</div>
		</div>

    <div class="conteinerview">
    	<div class="list_news">
    		<div class="post">
   		<h1>Новости </h1>
   		<?php
		    if(IsChecked('news','1'))
		{
			$url='https://habr.com/ru/all/';
			$newsview='.posts_list .post_preview';
			$im='.js-mediator-article img';
			$tit='.post__title';
			$tim='.post__time';
			$a_href='btn_outline_blue post__habracut-btn a';
			$attr_img='src';
			$attr_a='';
			$site_name='habr';

			NewsView($url,$newsview,$im,$tit,$tim,$a_href,$attr_img,$attr_a,$site_name);
		}

			if(IsChecked('news','2'))
		{
			$url='http://horrorzone.ru/category/movie-news';
			$newsview='.content-wrap .';
			$im='img';
			$tit='.title a';
			$tim='';
			$a_href='.title a';
			$attr_img='data-src';
			$attr_a='';
			$site_name='horror';

			NewsView($url,$newsview,$im,$tit,$tim,$a_href,$attr_img,$attr_a,$site_name);
		}

			if(IsChecked('news','3'))
		{
			$url='https://www.sports.ru/';
			$newsview='.material-list_last-item_border_none .material-list__item';
			$im='img';
			$tit='h2';
			$tim='time';
			$a_href='.title a';
			$attr_img='src';
			$attr_a='href';
			$site_name='sports';

			NewsView($url,$newsview,$im,$tit,$tim,$a_href,$attr_img,$attr_a,$site_name);
		}

				if(IsChecked('news','4'))
		{
			$url='https://kostroma.today/';
			$newsview='.news-line .item-news';
			$im='.content-post div';
			$tit='h3';
			$tim='span';
			$a_href='a';
			$attr_img=style;
			$attr_a='href';
			$site_name='kt';

			NewsView($url,$newsview,$im,$tit,$tim,$a_href,$attr_img,$attr_a,$site_name);
		}

			if(IsChecked('news','5'))
		{
			$url='https://www.newsru.com/';
			$newsview='.left-feed-item';
			$im='.left-feed-img img';
			$tit='.left-feed-title a';
			$tim='';
			$a_href='.left-feed-img a';
			$attr_img='src';
			$attr_a='href';
			$site_name='newsru';

			NewsView($url,$newsview,$im,$tit,$tim,$a_href,$attr_img,$attr_a,$site_name);
		}

		?>
</div></div>
</div>
</body>