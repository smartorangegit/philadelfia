<?php  HeadAdd(array('html'=>'<link rel="stylesheet" href="/css/jquery.fancybox.css">'));?>
  	<?php//  HeaderInclude(array('pageTypeMobileAll'=>true));?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>
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
              <p>Статус робіт: роботи з благоустрою фундаменту</p>
              <p>Запланований час завершення будівництва: II квартал 2018 року</p>
            </div>
            <a href="/webcam/#" class="webcam__wrap">
              <!-- <a href="/webcam/#" class="webcam__link"> -->
                <span>веб<br>камера</span>
                <img src="/img/web.png" alt="Webcamera">
              <!-- </a> -->
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


    <style media="screen">
      /* .webcam__link{
        position: fixed;
        transform: rotate(90deg);
        -webkit-transform: rotate(-90deg);
        padding: 10px 62px;
        left: -90px;
        top: 270px;
        background: url('/img/min-pattern.png');
      } */
    </style>

	     <?php	 FooterAdd(array('html'=>'
	        <script src="/js/jquery.fancybox.js"></script>
	'));	?>
