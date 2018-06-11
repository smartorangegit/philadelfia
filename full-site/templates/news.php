<?php  HeadAdd();?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>

    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->
      <div class="container">
        <div class="wrapper">


        <div class="main_news">
          <!-- <div class="name_wrap wow bounceInUp" data-wow-duration="2s"> -->
            <div class="content_name"><h1><?H1page()?></h1></div>
          <!-- </div> -->

		 	      <?if (count($ReaNews['ReaNews'])) {?>
            <ul class="news_box">
			 	         <? $i=0; foreach($ReaNews['ReaNews'] as $key=>$s): $i++;?>
              <li class="news_item wow fadeInUp" data-wow-duration="2s" data-day="<?=$s['date']?>">
                <div class="news__inner">
                  <img <?img($s['img-min']);  AltImgAdd($s['name_news'])?>>
                  <div class="news_name"><?=$s['name_news']?></div>
                  <div class="news_inner__date">
                    <?=$s['date']?>
                  </div>
                </div>
                <div class="figcaption">
                  <p class="news_prev"><?=$s['mini_text']?></p>
                </div>
                <a class="button6 news_link" href="<?UrlAdd($s["urls"])?>">Читати далі <i class="icon-long-arrow-right"></i></a>
              </li>
              <?endforeach;?>
            </ul>
            <?}?>
        		<?php
        			/**Пагінація*/
        				echo $PAG;
        			?>
        </div>

      </div>

     <?php	 FooterAdd();	?>
