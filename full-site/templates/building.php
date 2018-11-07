<?php  HeadAdd(array('html'=>'<link rel="stylesheet" href="/css/jquery.fancybox.css">'));?>
  	<?php//  HeaderInclude(array('pageTypeMobileAll'=>true));?>

    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->
      <div class="container">
        <div class="wrapper">
        <div class="main_build">
          <div class="name_wrap" data-wow-duration="2s">
            <div class="content_name"><h1><?H1page()?></h1></div>
            <div class="content_subname">
              <p><?=$mes['cтатус робіт']?></p>
              <p><?=$mes['Запланований час завершення будівництва']?></p>
            </div>
            <a href="/webcam/#" class="webcam__wrap">
                <span>веб<br>камера</span>
                <img src="/img/web.png" alt="Webcamera">
            </a>
          </div>
            <ul class="build_box">
				<? $time="0.0"; foreach ($ReaPost as $key=>$t) {  if ($key%2) {$time+=0.1;} ?>
              <li class="build_item wow fadeIn" <?if ($time>0) {?> data-wow-delay="<?=$time?>s" <?}?> data-day="<?=$t['date']?>">
                <img src="<?=$t['img-url'].'/'.$t['imgs'][0]?>"<?//LazyLoad ($t['img-url'].'/'.$t['imgs'][0])?> alt="advantages">
                <div class="build__date"><?=$t['date']?></div>
                   <? foreach ($t['imgs'] as $tt) {
                       echo  '<a href="'.$t['img-url'].'/'.$tt.'" data-fancybox="'.$t['sumb_cod'].'" data-caption="'.$t['text'].' '.$t['date'].'"></a>';
          				}?>

              </li>
				<?}?>
      </ul>

			<?php
			/**Пагінація*/
				echo $PAG;

			?>

        </div>
      </div>


	     <?php	 FooterAdd(array('html'=>'
	        <script src="/js/jquery.fancybox.js"></script>
	'));	?>
