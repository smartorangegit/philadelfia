<?php  HeadAdd($html=['title'=>$ReaNews['title'],
					'description'=>$ReaNews['description'],
					'html'=>$facebook.$rel]);?>
  	<?php //HeaderInclude(array('pageTypeMobileAll'=>true));?>

		<?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>
    <style media="screen"> body{ visibility: hidden; }</style>
    <div id="perspective" class="perspective effect-laydown">
			<!-- menu -->
			<?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
			<!-- end menu -->
      <div class="container">
        <div class="wrapper">


        <div class="main_values">
					<h1 class="content_subname" style="margin-bottom:30px;"><?=$ReaNews['name_news']?></h1>
          <div class="news_img">
						<div class="news_inner__date news_top_date"><?=$ReaNews['date']?></div>
            <img src="<?=$ReaNews['img_news']?>" <?AltImgAdd($ReaNews['name_news'])?>>
          </div>
          <div class="news_text">
            <?=$ReaNews['text']?>
          </div>
          <a class="allnews_link button20" href="<?UrlAdd('news')?>" ><i class="icon-long-arrow-left"></i>ПОВЕРНУТИСЯ ДО НОВИН</a>



		 <?if (count($ReaNewsL)>0):?>
          <div class="read_more" style="text-align:left;">
            <div class="content_subname bold">Читайте також:</div>
              <ul class="read_more_list">
				<?foreach ($ReaNewsL as $t):
				?>
                <li class="content_subname"><a href="<?UrlAdd('news/'.$t['urls'])?>" class="italic"><?=$t['name_news']?></a></li>

				<?endforeach?>
              </ul>



          </div>
		  <?endif?>

        </div>
      </div>
  <?php	 FooterAdd();	?>
