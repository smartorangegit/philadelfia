<?php  HeadAdd(array('html'=>'<link rel="stylesheet" href="/css/jquery.fancybox.css">'));?>
  	<?php HeaderInclude(array('pageTypeMobileAll'=>true));?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>
    <style media="screen"> body{ visibility: hidden; }</style>


    <div id="perspective" class="perspective effect-laydown">
      <div class="container">
        <div class="wrapper">

          	<?php HeaderInclude();?>

        <div class="main_build">
          <div class="name_wrap wow bounceInUp" data-wow-duration="2s">
            <div class="content_name"><h1><?H1page()?></h1></div>
          </div>
          <div class="content_subname">
            <p>
              <span class="bold">Статус робіт:</span> роботи з благоустрою фундаменту
            </p>
            <p>
              <span class="bold"> Запланований час завершення будівництва: </span> II квартал 2018 року
            </p>
          </div>

            <ul class="build_box clearfix">
				<? $time="0.0"; foreach ($ReaPost as $key=>$t) {  if ($key%2) {$time+=0.1;} ?>
              <li class="build_item wow fadeIn" <?if ($time>0) {?> data-wow-delay="<?=$time?>s" <?}?> data-day="<?=$t['date']?>">
                <img src="<?=$t['img-url'].'/'.$t['imgs'][0]?>"<?//LazyLoad ($t['img-url'].'/'.$t['imgs'][0])?> alt="advantages">
                <!--<div class="figcaption"><?=cropStrStyle($t['name'])?><?/*<span class="bold">Вдале розташування</span> у престижній частині центру міста*/?></div>-->

					<? foreach ($t['imgs'] as $tt) {
                 echo  '<a href="'.$t['img-url'].'/'.$tt.'" data-fancybox="'.$t['sumb_cod'].'" data-caption="'.$t['text'].' '.$t['date'].'"></a>';
      				}?>

              </li>
				<?}?>

				<?/*
              <li class="build_item wow fadeIn" data-day="12.08.2017">
                <img src="/img/build/2.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Вдале розташування</span> у престижній частині центру міста</div>
              </li>
              <li class="build_item wow fadeIn" data-wow-delay="0.2s" data-day="14.08.2017">
                <img src="/img/build/3.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Вдале розташування</span> у престижній частині центру міста</div>
              </li>
              <li class="build_item wow fadeIn" data-wow-delay="0.2s" data-day="16.08.2017">
                <img src="/img/build/4.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Вдале розташування</span> у престижній частині центру міста</div>
              </li>
              <li class="build_item wow fadeIn" data-wow-delay="0.3s" data-day="18.08.2017">
                <img src="/img/build/3.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Вдале розташування</span> у престижній частині центру міста</div>
              </li>
              <li class="build_item wow fadeIn" data-wow-delay="0.3s" data-day="20.08.2017">
                <img src="/img/build/2.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Вдале розташування</span> у престижній частині центру міста</div>
              </li>*/?>
            </ul>

			<?php
			/**Пагінація*/
				echo $PAG;

			?>

        </div>
      </div>

      <a href="/webcam/#" class="webcam__link">веб-камера</a>

    <style media="screen">
      .webcam__link{
        position: fixed;
        transform: rotate(90deg);
        -webkit-transform: rotate(-90deg);
        padding: 10px 62px;
        left: -90px;
        top: 270px;
        background: url('/img/min-pattern.png');
      }
    </style>

	     <?php	 FooterAdd(array('html'=>'
	        <script src="/js/jquery.fancybox.js"></script>
	'));	?>
