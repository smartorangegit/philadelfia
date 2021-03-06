<?php  HeadAdd(array('pageType'=>'class="mainpage"','head'=>true));?>
  	<?php// HeaderInclude(array('pageTypeMobileAll'=>2));?>

     <? include('preloader_saga.php'); ?>

    <?php /*include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/preloader.php')*/?>
    <div id="perspective" class="perspective effect-laydown">
<?//if (!$detectMob) :?>
<!-- pop-up with map   -->
<div class="bigmap_overlay">
  <div class="bigmap_box">
    <div class="bigmap__close"><i class="icon-close"></i></div>
    <a class="bigmap__null" target="_blank" title="Розташування PHILADELPHIA Concept House" href="https://www.google.ru/maps/place/%D0%9A%D0%BB%D0%BE%D0%B2%D1%81%D1%8C%D0%BA%D0%B8%D0%B9+%D1%83%D0%B7%D0%B2%D1%96%D0%B7,+19,+%D0%9A%D0%B8%D1%97%D0%B2,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0/@50.4370409,30.5400974,17.75z/data=!4m5!3m4!1s0x40d4cfa8024b4ed5:0xfe7c681a83644e2c!8m2!3d50.437021!4d30.541358"></a>
    <img src="/img/philadelphia-map.jpg" alt="Карта розташування та проїзду до ЖК PHILADELPHIA Concept House - Київ, Кловський узвіз, 19" title="Карта розташування та проїзду до ЖК PHILADELPHIA Concept House - Київ, Кловський узвіз, 19" >
  </div>
</div>
<!-- end pop-up -->
      <!-- menu -->
      <div class="fixed_menu">
        <div class="menu clearfix menu_logo">

            <div class="logo-container">
              <a href="http://saga-development.com.ua/" class="saga-logo" target="_blank">
                <img src="/img/saga-development-logo.svg" alt="Лого девелопера проекту SAGA Development" title="Лого девелопера проекту SAGA Development" >
              </a>
              <a href="https://perfect-group.ua/" class="perfect-logo" target="_blank">
                <img src="/img/perfect-logo.png" alt="Лого девелопера проекту Perfect Group" title="Лого девелопера проекту Perfect Group" >
              </a>
            </div>

          <div class="left_nav">
            <a href="tel:<?=$mes['tel']?>" class="only_mobile"><i class="icon-phone"></i></a>
            <span class="no_mobile main_call"><i class="icon-phone"></i><span class="phone_number"><a class="phone_click" href="tel:<?=$mes['tel']?>"><?=$mes['tel']?></a></span></span>
            <a id="call_on" class="button20 no_mobile"><?=$mes['замовити дзвінок']?></a>
          </div>
          <div class="right_nav">
		  <?php global $len;
								if ($len){
					 echo '<div class="lang">
					 <span id="lang_open">'.$mes['fut-mes4'].' <i class="icon-chevron-down"></i></span>
					 <ul id="lang">';
					 
					 
    							foreach ($len as $t){
									$tHref='/'.$t.'/';
										if ($t==$LANG) {$t=$len_default; $tHref='/';}
										$mes_t = parse_ini_file('modules/language/'.$t.'.ini'); ;

									echo '
									<li>
										<a href="'.$tHref.'">'.$mes_t['fut-mes4'].'</a>
									</li>';
									}
					echo'</ul></div>';
								} ?>

            <!-- <a class="no_mobile"  href="<?UrlAdd('location')?>"><i class="icon-location2"></i></a> -->
            <!-- <a class="no_mobile" href="<?UrlAdd('contacts')?>"><i class="icon-mail2"></i></a> -->
            <a href="#" id="<?if ($detectMob) {echo 'show_mobilemenu';}else {echo 'showMenu';}?>"><i class="icon-menu" style="display:  inline-block;  vertical-align: middle;"></i>
    <span class="no_mobile"><?=$mes['меню']?></span> </a>

          </div>
          <div class="fixed_logo">
            <a href="<?UrlAdd()?>" title="PHILADELPHIA - CONCEPT HOUSE">
              <img src="/img/philadelphia-concept-house-logo.svg" alt="Лого житлового комплексу PHILADELPHIA Concept House місто Київ" title="Лого житлового комплексу PHILADELPHIA Concept House місто Київ" >
            </a>
          </div>
        </div>
      </div>
      <!-- end menu -->
      <div id="toTop"><img src="/img/up.png" alt="up"></div>

	<?//endif;?>
      <div class="container">
        <div class="wrapper">

          <section class="main_one">
            <div class="main_one__name">
              <div class="main_one__name_inner wow fadeIn" style="display:none;">
                <?=$mes['Будинок для шанувальників']?>
              </div>
            </div>
            <div id="toDown" class="bounce">
              <i class="icon-chevron-down"></i>
            </div>
          </section>

          <section class="main_two">
            <div class="main_two_left"></div>
            <div class="main_two_right">
              <h1 class="main_name wow fadeIn">
                PHILADELPHIA Concept House
              </h1>
              <div class="main_text">
                <p class="wow fadeIn">
                  <?=$mes['У серці Києва']?>
                </p>
                <p class="wow fadeIn">
                  <?=$mes['Смілива сучасна архітектура']?>
                </p>
                <p class="wow fadeIn">
                  <?=$mes['Цей будинок ми створюємо для тих']?>
                </p>
              </div>
              <a href="<?UrlAdd('architecture')?>" class="button20"><?=$mes['Архітектура']?></a>

            </div>
          </section>

          <section class="main_three">
            <div class="main_three_left">
              <h2 class="main_name wow fadeIn">
                <?=$mes['Переваги']?>
              </h2>
                <table class="table_advanced">
                  <tr>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 171.3 170.6"><style type="text/css">
                      	.st0{fill:#FFFFFF;}
                      	.st1{fill:#E4E4E4;}
                      </style><circle class="st0" cx="86.8" cy="85.3" r="80"/><path class="st1" d="M166.8 85.3c0-44.2-35.8-80-80-80v160C131 165.3 166.8 129.5 166.8 85.3z"/><path d="M86.1 122.6c0.1 0.2 0.3 0.4 0.4 0.6 0.2-0.2 0.3-0.4 0.4-0.6 7.9-11.4 15.8-22.7 23.6-34.1 0.8-1.2 1.6-2.4 2.2-3.7 4-8.7 4.3-17.7 1-26.6C109.9 48 102.4 42 91.8 39.8c-1.1-0.2-2.3-0.3-3.4-0.5 -1.3 0-2.6 0-3.9 0 -0.6 0.1-1.2 0.2-1.8 0.3 -7.2 1-13.3 4.2-18.2 9.6 -4.6 5.2-6.8 11.5-7.3 18.3 -0.6 8 1.2 15.4 5.9 22C70.9 100.5 78.5 111.6 86.1 122.6zM86.8 57.7c5.9 0 10.7 4.8 10.7 10.7s-4.8 10.7-10.8 10.7c-5.9 0-10.7-4.8-10.7-10.7C76.1 62.5 80.9 57.7 86.8 57.7z"/><path d="M129.3 112.8c-2.2-1.7-4.8-2.9-7.4-3.8 -5.3-2-10.9-3-16.5-3.7 -0.9-0.1-1.7 0.5-1.8 1.4 -0.1 0.9 0.5 1.5 1.4 1.7 3.1 0.5 6.2 1 9.3 1.6 4.1 0.9 8 2.1 11.6 4.3 1 0.6 2 1.4 2.9 2.3 1.2 1.3 1.2 2.5-0.2 3.7 -0.9 0.8-1.9 1.5-3 2 -4.3 2.1-9 3.2-13.7 4 -7.7 1.4-15.4 2-23.2 2 -10.1 0.1-20.1-0.5-29.9-2.6 -3.8-0.8-7.5-1.8-11-3.5 -1.2-0.6-2.3-1.4-3.3-2.3 -1-0.9-1-1.9-0.1-2.9 0.6-0.7 1.4-1.4 2.2-2 1.9-1.4 4.1-2.3 6.2-3.1 5-1.8 10.3-2.8 15.6-3.5 1-0.1 1.6-0.8 1.5-1.7s-0.9-1.5-1.9-1.3c-3 0.5-6.1 0.9-9.1 1.6 -4.5 1-8.8 2.3-12.8 4.7 -2.4 1.4-4.5 3.1-5.4 5.9 0 0.5 0 1 0 1.5 0.6 2.3 2.3 3.8 4.2 5 2.9 1.9 6.2 3 9.5 3.9 5.1 1.4 10.3 2.2 15.5 2.7 3.6 0.3 7.3 0.5 10.9 0.7 0.3 0 0.5 0.1 0.8 0.1 3.4 0 6.8 0 10.2 0 1.7-0.1 3.3-0.2 5-0.3 8.4-0.5 16.8-1.4 24.8-4 2.7-0.9 5.3-2 7.6-3.6 1.6-1.1 2.9-2.5 3.4-4.5 0-0.5 0-1 0-1.5C132.2 115.5 131 114 129.3 112.8z"/></svg>
                    </td>
                    <td class="wow fadeInLeft"><?=$mes['Вдале розташування  у престижній частині центру міста']?></td>
                  </tr>
                  <tr>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 174.3 175.3"><style type="text/css">
                      	.st0{fill:#FFFFFF;}
                      	.st1{fill:#E4E4E4;}
                      </style><circle class="st0" cx="89.7" cy="83.8" r="80"/><path class="st1" d="M169.7 83.8c0-44.2-35.8-80-80-80v160C133.9 163.8 169.7 128 169.7 83.8z"/><path d="M139.3 92.9c-4.7 0-9.5-0.1-14.2-0.1 -0.9 0-0.8 0-0.9-0.9 -0.1-1.6-0.1-3.2-0.4-4.7 -0.2-1.5-1.2-2.6-2.7-2.9 -0.9-0.2-1.8-0.2-2.7-0.1 -2.2 0.3-3.4 1.4-3.6 3.6 -0.2 1.4-0.1 2.8-0.2 4.2 0 0.5-0.2 0.8-0.7 0.7 -0.7 0-1.5-0.1-2.2 0 -0.7 0-1-0.2-1.4-0.8 -3.9-6.3-7.9-12.6-11.8-19 -0.6-1-1.3-1.5-2.4-1.3 -0.7 0.1-1.3 0-1.8-0.7 -0.2-0.3-0.5-0.4-0.8-0.6 -4.1-2.9-8.2-5.7-12.3-8.6 -0.4-0.3-0.7-0.6-0.9-1 -1.9-3.7-3.7-7.4-5.5-11.1 -0.8-1.8-2.2-2.5-4.1-2.5 -4.2 0-8.4 0-12.5 0 -1.5 0-2 0.6-1.9 2 0.3 5.3 0.5 10.7 0.9 16 0.2 2.9-0.2 5.4-1.6 8 -3.7 6.6-7.1 13.3-10.6 20 -0.6 1.1-0.2 1.7 1 1.7 1.4 0 2.8 0 4.1 0 1 0 2 0 3.1 0 0 0.3 0 0.5 0 0.7 0 1.8 0 3.7 0 5.5 0 0.4-0.1 0.8-0.3 1.1 -4.1 5.7-8.1 11.3-12.2 16.9 -0.6 0.8-1 1.7-1.5 2.6 0 0.4 0 0.9 0 1.3 0.5 1.6 1.5 2.6 3 3 0.5 0 1 0 1.4 0 1.3-0.4 2.2-1.3 2.9-2.4 4.3-6.1 8.7-12.1 13.1-18.1 0.7-0.9 1-1.9 1-3.1 0-2.2 0-4.5 0-6.7 0-0.2 0-0.5 0-0.8 0.5 0 0.9 0 1.2 0 0.5 0 0.6 0.1 0.8 0.6 1.4 4.2 2.8 8.5 4.2 12.7 1.6 4.8 3.2 9.7 4.7 14.5 0.5 1.7 1.4 2.9 3.2 3.4 0.4 0 0.9 0 1.3 0 0.1 0 0.1-0.1 0.2-0.1 2.2-0.7 3.3-2.7 2.6-4.9 -1.3-3.9-2.5-7.7-3.8-11.6 -1.5-4.6-3-9.3-4.6-13.9 -0.1-0.2-0.1-0.4-0.2-0.7 1.7 0 3.4 0 5 0 0.2 0 0.5 0 0.7 0 0.9-0.1 1.3-0.7 1-1.5 -0.4-1.1-0.9-2.2-1.4-3.3 -2.5-6.2-5.1-12.3-7.6-18.5 -0.5-1.3-0.5-2.5 0.1-3.7 1.1-2.3 2.1-4.5 3.1-6.8 0.1-0.2 0.2-0.4 0.4-0.7 0.2 0.3 0.3 0.6 0.4 0.9 0.7 1.4 1.4 2.9 2.1 4.3 0.3 0.6 0.8 1.3 1.4 1.7 4.5 3.2 9.1 6.4 13.7 9.6 1.9 1.3 4 0.9 5.4-0.9 0.3-0.4 0.9-0.4 1.2 0 0.1 0.1 0.2 0.3 0.3 0.5 5.8 9 11.7 18 17.5 27 0.4 0.6 0.3 0.9-0.2 1.4 -2.8 2.7-5.5 5.4-8.2 8.1 -0.4 0.4-0.8 0.5-1.4 0.3 -2.6-1.1-5-0.7-7.1 1.1 -2.1 1.8-2.8 4.1-2 6.8s2.6 4.3 5.4 4.8c2.5 0.4 4.7-0.4 6.4-2.4 1.6-2 1.9-4.3 0.9-6.7 -0.3-0.6-0.2-1 0.3-1.5 2.5-2.4 5-4.9 7.6-7.4 0.6-0.6 0.6-0.6 1.1 0.1 1.4 2.1 2.9 4.1 4.3 6.2 0.3 0.4 0.3 0.7 0 1.1 -3.3 4.3-1 10.1 4.3 10.9 0.1 0 0.2 0.1 0.3 0.1 0.4 0 0.7 0 1.1 0 0.3-0.1 0.6-0.1 0.9-0.2 3.7-0.8 5.9-4.3 5.1-8 -0.8-3.5-4.3-5.8-7.9-5.1 -0.6 0.1-0.9 0-1.2-0.5 -0.4-0.6-0.8-1.2-1.3-2 0.6 0 1.1 0 1.6 0 4.6-0.3 8.3-2.4 11.5-5.5 2.8-2.7 4.2-6 4.6-9.7 0-0.2 0.1-0.4 0.1-0.6 0-0.4 0-0.9 0-1.3C139.9 92.9 139.6 92.9 139.3 92.9zM101.6 122.9c-2.2 0-3.9-1.9-3.9-4 0-2.2 1.9-4 4.1-3.9 2.2 0 4 1.9 3.9 4.1C105.7 121.3 103.9 123 101.6 122.9zM126.3 115.1c2.2 0 4 1.8 4 4s-1.8 4-4 4 -4-1.8-4-4S124.1 115.1 126.3 115.1z"/><path d="M64.5 44.5c3 0.8 6.2-0.7 7.5-3.5 1.3-2.7 0.5-6.1-2-7.9 -0.9-0.6-2-0.9-3-1.4 -0.6 0-1.2 0-1.8 0 -0.1 0-0.2 0.1-0.3 0.1 -3 0.6-5.1 3-5.3 6C59.5 40.9 61.5 43.7 64.5 44.5z"/><path d="M119.4 82.7c2.5 0 4.6-2 4.6-4.6 0-2.5-2.1-4.6-4.7-4.6 -2.5 0-4.6 2.1-4.6 4.6C114.8 80.7 116.9 82.7 119.4 82.7z"/></svg>
                    </td>
                    <td class="wow fadeInLeft"><?=$mes['Близькість до багатьох архітектурних']?></td>
                  </tr>
                  <tr>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170.4 173.5"><style type="text/css">
                      	.st0{fill:#FFFFFF;}
                      	.st1{fill:#E4E4E4;}
                      </style><circle class="st0" cx="87.7" cy="83.8" r="80"/><path class="st1" d="M167.7 83.8c0-44.2-35.8-80-80-80v160C131.9 163.8 167.7 128 167.7 83.8z"/><path d="M90.7 96.2c8.4 0 16.7 0 25.1 0 0-5.6 0-11.1 0-16.7 -8.4 0-16.8 0-25.1 0 0-8 0-15.9 0-23.9 11.9 0 23.7 0 35.6 0 0-1 0-2 0-2.9 0-1 0-1.9 0-2.9 -1.1 0-2.2-0.1-3.2 0 -1.6 0.2-2.4-0.4-3.3-1.7 -6.3-8.8-14.9-14.3-25.6-16.2 -1.3-0.2-2.7-0.4-4.1-0.5 -1.6 0-3.1 0-4.7 0 -0.9 0.1-1.8 0.2-2.7 0.3 -11.8 1.7-21.1 7.6-27.8 17.4 -0.3 0.5-0.7 0.7-1.2 0.7 -1.5 0-3 0-4.5 0 0 2 0 3.9 0 5.9 11.9 0 23.7 0 35.5 0 0 8 0 15.9 0 23.9 -8.4 0-16.8 0-25.1 0 0 5.6 0 11.1 0 16.6 8.4 0 16.8 0 25.1 0 0 8.7 0 17.3 0 26 -1.7 0-3.3 0-5.1 0 0 2 0 3.9 0 5.9 5.3 0 10.7 0 16 0 0-1.9 0-3.9 0-5.9 -1.8 0-3.4 0-5 0C90.7 113.5 90.7 104.9 90.7 96.2z"/><path d="M64.6 103.3c0-0.3 0-0.6 0-0.9 -6.9 0-13.7 0-20.6 0 0-6.6 0-13.2 0-19.8 -2 0-3.9 0-5.8 0 0 15.2 0 30.4 0 45.6 1.9 0 3.9 0 5.8 0 0-3.1 0-6.2 0-9.3 4.9 0 9.8 0 14.8 0 0 0.2 0 0.5 0 0.7 0 2.6 0 5.2 0 7.8 0 0.3 0 0.5 0 0.8 1.9 0 3.9 0 5.8 0 0-0.3 0-0.6 0-0.9C64.6 119.2 64.6 111.3 64.6 103.3z"/><path d="M131.4 82.5c0 6.7 0 13.2 0 19.9 -6.9 0-13.7 0-20.6 0 0 0.4 0 0.7 0 1 0 8 0 15.9 0 23.9 0 0.3 0 0.6-0.1 0.9 1.9 0 3.9 0 5.8 0 0-2.7 0-5.5 0-8.2 0-0.3 0-0.7 0-1.1 4.9 0 9.8 0 14.8 0 0 3.1 0 6.2 0 9.3 1.9 0 3.9 0 5.8 0 0-15.2 0-30.4 0-45.6C135.3 82.5 133.4 82.5 131.4 82.5z"/></svg>
                    </td>
                    <td class="wow fadeInLeft"><?=$mes['Насичена високоякісна інфраструктура навколо будинку']?></td>
                  </tr>
                  <tr>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 174 170.3"><style type="text/css">
                      	.st0{fill:#FFFFFF;}
                      	.st1{fill:#E4E4E4;}
                      </style><circle class="st0" cx="89.7" cy="84.9" r="80"/><path class="st1" d="M169.7 84.9c0-44.2-35.8-80-80-80v160C133.9 164.9 169.7 129.1 169.7 84.9z"/><path d="M117.9 107.4c0.6-0.6 1.1-1 1.6-1.5 -0.2-0.2-0.4-0.4-0.5-0.6 -4.6-4.9-9.1-9.8-13.7-14.6 -2.1-2.2-4.2-4.4-6.4-6.5 -1.4-1.4-2.9-2.6-4.7-3.4 -1-0.4-2-0.7-3-0.3 -0.6 0.2-1.2 0.2-1.8 0.1 -3.9-0.6-6.9-2.6-8.7-6.2 -0.9-1.7-1.7-3.5-2.5-5.2 -1.2-2.5-2.7-4.9-4.7-6.9 -2-1.9-4.3-3.1-7.1-2.9 -5.2 0.2-9.8 2-13.8 5.3 -1.7 1.5-3.3 3.1-4.7 4.9 -2.8 3.5-5.2 7.2-7.1 11.2 0 0.4 0 0.8 0 1.2 0 0.1 0.1 0.2 0.1 0.4 0.5 1.5 1.5 2.5 3 2.7 1.7 0.3 3-0.3 4-1.7 1.1-1.8 2.1-3.6 3.3-5.3 1.4-2 3-4 4.5-6 0.2-0.2 0.3-0.4 0.5-0.7 0.1 0.1 0.2 0.1 0.2 0.2 -0.2 1-0.4 2-0.6 3 -0.8 3.9-1.7 7.8-2.5 11.6 -0.4 1.9-0.1 3.6 1 5.2 0.2 0.3 0.3 0.7 0.3 1 -0.3 4.7-0.6 9.5-0.9 14.2 0 0.3-0.1 0.5-0.2 0.8 -2 5-3.9 10.1-6 15.1 -1.4 3.4 0.6 6.5 3.5 7l0.1 0.1c0.5 0 1.1 0 1.6 0 1.9-0.5 3.2-1.5 3.9-3.4 2.1-5.4 4.2-10.8 6.4-16.2 0.2-0.5 0.4-1.1 0.4-1.6 0.2-2.7 0.4-5.5 0.6-8.2 0-0.1 0-0.3 0.1-0.5 1.4 2.1 2.6 4.2 4 6.2 1.3 1.8 2.2 3.7 2.6 5.9 0 0.1 0 0.1 0.1 0.2 1.3 4.6 2.5 9.3 3.8 13.9 0.7 2.6 3.2 4.2 5.8 3.6 2.9-0.6 4.5-3.3 3.7-6.1 -1.6-5.7-3.1-11.4-4.7-17.1 -0.3-1-0.7-2-1.3-2.8 -2.2-3.5-4.5-7-6.7-10.5 -0.5-0.8-0.9-1.4-0.3-2.3 0.1-0.1 0.1-0.3 0.1-0.5 0.9-3.9 1.7-7.8 2.5-11.6 0-0.1 0.1-0.3 0.2-0.5 3.1 5.9 7.9 9.1 14.3 10.2 0 0.7 0 1.3 0 2 0.7 0 1.4-0.1 2.1-0.1 0-0.6 0-1.1 0-1.6 1.3-0.2 2.4-0.8 3.1-1.9 0.7-1.2 0.6-2.4 0.2-3.6 0.7 0.4 1.4 0.8 2 1.3 1.7 1.5 3.4 2.9 4.9 4.5 5.7 6 11.4 12.1 17 18.1C117.6 106.9 117.7 107.2 117.9 107.4z"/><path d="M73.2 59.8c4.9-0.1 8.8-3.7 9.6-8.6 0.7-4.5-2.2-9-6.7-10.4 -0.7-0.2-1.3-0.3-2-0.5 -0.8 0-1.5 0-2.3 0 -0.2 0-0.3 0.1-0.5 0.1 -4.3 0.7-7.8 4.3-8.2 8.4C62.5 55 67.1 60 73.2 59.8z"/><path d="M128.2 113.8c-2.7-1.5-5.4-3.1-8.1-4.6 -0.3-0.2-0.7-0.3-1.1-0.3 -3.6 0-7.2 0-10.8 0 -0.3 0-0.8-0.1-1-0.4 -1.1-0.8-2.1-1.7-3.2-2.5 -1-0.8-2.2-0.6-2.9 0.2 -0.7 0.9-0.5 2 0.5 2.8 1.1 0.8 2.1 1.7 3.2 2.5 0.3 0.3 0.5 0.5 0.5 1 0 2.3 0 4.7 0 7 0 0.4-0.1 0.8-0.3 1.1 -1 1.9-2 3.8-2.9 5.8 -0.2 0.5-0.3 1.1-0.2 1.6 0.1 0.8 0.8 1.3 1.6 1.4 0.9 0.1 1.6-0.3 2-1.1 1-1.9 2-3.7 3-5.6 0.1-0.2 0.2-0.4 0.4-0.7 0.2 0.3 0.4 0.6 0.5 0.9 1.1 1.8 2.1 3.7 3.2 5.5 0.5 0.9 1.5 1.2 2.4 0.9 0.9-0.3 1.4-1.2 1.3-2.1 -0.1-0.4-0.2-0.7-0.4-1.1 -1-1.7-2-3.4-3-5.2 4.1 0 8.1 0 12.2 0 0 2.2 0 4.3 0 6.3 0 1.3 0.8 2.1 2 2.1s2-0.9 2-2.1c0-4.2 0-8.4 0-12.7C128.7 114.3 128.6 114 128.2 113.8z"/><path d="M137.7 107.2c-0.8-0.6-1.7-1.1-2.6-1.5 -1.2-0.5-2-1.3-2.8-2.3 -0.6-0.8-1.2-1.4-2-2 -0.5-0.4-0.6-0.7-0.6-1.3 0.1-0.7 0.1-1.5 0-2.2 -0.2-0.9-1-1.5-1.7-1.6 -0.7 0-1.4 0.4-1.6 1.5 -0.5 1.9-1.6 3.6-2.7 5.2s-2.1 3.1-3.3 4.7c0.3 0.2 0.4 0.3 0.6 0.4 2.2 1.2 4.4 2.5 6.7 3.7 1.2 0.7 1.2 0.7 2.2-0.3 0.1-0.1 0.1-0.1 0.2-0.2 0.4-0.5 0.8-0.5 1.4-0.2 1.1 0.6 2.3 0.8 3.5 0.7 1.2-0.1 2.3-0.6 3-1.7C139 109 138.9 108 137.7 107.2z"/></svg>
                    </td>
                    <td class="wow fadeInLeft"><?=$mes['Затишні парки та сквери неподалiк вiд будинку']?></td>
                  </tr>
                  <tr>
                    <td>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168.6 169"><style type="text/css">
                      	.st0{fill:#FFFFFF;}
                      	.st1{fill:#E4E4E4;}
                      </style><circle class="st0" cx="84.8" cy="84.1" r="80"/><path class="st1" d="M164.8 84.1c0-44.2-35.8-80-80-80v160C129 164.1 164.8 128.3 164.8 84.1z"/><path d="M47.5 81.5c0.8 0 1.6 0 2.4 0 13.1-0.1 26.2-0.2 39.3-0.3 0.5 0 1.1-0.2 1.5-0.4 14.2-7.8 28.4-15.7 42.7-23.5 0.2-0.1 0.4-0.3 0.7-0.4 -0.8-0.3-1.5-0.5-2.2-0.8 -3.5 0-6.9 0-10.4 0 -0.3 0-0.5 0.1-0.8 0.1 -12.5 0.1-25 0.2-37.5 0.3 -10.4 0.1-20.9 0.2-31.3 0.3 -2.7 0-4.4 1.6-4.4 4.2 0 6.5 0 13.1 0 19.6C47.5 80.9 47.5 81.2 47.5 81.5z"/><path d="M123.2 67.5c-0.5 0.3-0.8 0.4-1.1 0.6 -9.9 5.4-19.8 10.9-29.8 16.3 -0.5 0.3-1.1 0.4-1.6 0.5 -14.1 0.3-28.1 0.5-42.2 0.7 -0.3 0-0.6 0-0.9 0 0 0.9-0.1 1.8 0 2.6 0.2 1.8 1 2.8 2.9 3.1 1.6 0.3 3.2 0.5 4.8 0.4 4.3 0 8.7-0.2 13-0.3 0.4 0 0.9 0 1.3 0 0 1.4-0.1 2.6 0 3.9 0.1 1.5 0.2 2.9 0.4 4.3 0.1 0.7 0.6 1.2 1.5 1.3 0.9 0.1 1.7 0.2 2.6 0.4 0.2 0 0.5 0.3 0.5 0.5 0 3 0 5.9-0.2 8.9 -0.3 3.4-2 5.3-5.3 5.9 -2 0.4-4.1 0.6-6.2 0.6 -7 0-14.1-0.1-21.1-0.2 -1.3 0-2.5 0-3.9 0 0-0.9 0.1-1.8 0-2.6 -0.2-2.7-1.2-5-3.8-6.4 0 2.3 0 4.5 0 6.8 0 2.7 0 5.4 0 8.1 0 0.2-0.2 0.6 0.3 0.5 0.3-0.2 0.6-0.4 0.7-0.7 0.3-0.6 0.7-0.6 1.2-0.6 1.5 0 3 0 4.6 0 8.5 0 17-0.1 25.6-0.1 5.8 0 10.8-3.8 12.1-9.4 0.5-2.2 0.6-4.6 0.7-6.9 0.1-1.4 0-2.8 0-4.2 0.9-0.2 1.9-0.4 2.8-0.6 1.2-0.3 1.6-0.7 1.7-2 0.1-1.5 0-3.1 0-4.6 0-1 0-1.9 0-3 1.6 0 3.1 0 4.6 0 10-0.1 19.9-0.2 29.9-0.3 2.6 0 3.8-0.8 4.4-3.4 0.4-1.6 0.6-3.3 0.6-4.9 0-4.2-0.2-8.3-0.4-12.5C123.2 69.4 123.2 68.5 123.2 67.5z"/><path d="M127.1 67c0 5.8 0 11.4 0 17.2 2.9 0 5.6 0 8.3 0 0-5.9 0-11.7 0-17.6C132.6 66.7 129.8 66.8 127.1 67z"/></svg>
                    </td>
                    <td class="wow fadeInLeft"><?=$mes['Супер-сучасне архітектурне рішення']?></td>
                  </tr>
                </table>
                <a href="<?UrlAdd('advantages')?>" class="button20"><?=$mes['Більше переваг']?></a>
            </div>
            <div class="main_three_right">

            </div>

          </section>
          <section class="main_four">
            <div class="four_wrap">
              <div class="main_name">
                <h2 class="wow fadeIn">
                  <?=$mes['Галерея']?>
                </h2>
              </div>
              <div class="slider">
                <ul class="bxslider">
                  <li><img src="/img/gal-min/philadelphia-photo3.jpg" alt="Фото фасаду перших поверхів будинку PHILADELPHIA Concept Hous" title="Фото фасаду перших поверхів будинку PHILADELPHIA Concept Hous" /></li>
                  <li><img src="/img/gal-min/philadelphia-photo1.jpg" alt="Фото фасаду будинку PHILADELPHIA Concept House" title="Фото фасаду будинку PHILADELPHIA Concept House" /></li>
                  <li><img src="/img/gal-min/philadelphia-photo2.jpg" alt="Фото фасаду будинку PHILADELPHIA Concept House" title="Фото фасаду будинку PHILADELPHIA Concept House" /></li>
                  <li><img src="/img/gal-min/philadelphia-photo4.jpg" alt="Фото фасаду останніх поверхів будинку PHILADELPHIA Concept House" title="Фото фасаду останніх поверхів будинку PHILADELPHIA Concept House" /></li>
                  <li><img src="/img/gal-min/philadelphia-photo5.jpg" alt="Фото фасаду будинку PHILADELPHIA Concept House" title="Фото фасаду будинку PHILADELPHIA Concept House" /></li>
                 </ul>
                <div id="bx-pager">
                  <a data-slide-index="0" href=""><img src="/img/gal-min/gal_min4.jpg" /></a>
                  <a data-slide-index="1" href=""><img src="/img/gal-min/gal_min2.jpg" /></a>
                  <a data-slide-index="2" href=""><img src="/img/gal-min/gal_min3.jpg" /></a>
                  <a data-slide-index="3" href=""><img src="/img/gal-min/gal_min1.jpg" /></a>
                  <a data-slide-index="4" href=""><img src="/img/gal-min/gal_min.jpg"/></a>

                </div>
              </div>
            </div>

          </section>
          <section class="main_four">
            <div class="four_wrap">
              <div class="main_name">
                <h2 class="wow fadeIn">
                  <?=$mes['Панорама']?>
                </h2>
              </div>
              <div class="panorama">
                <script src="https://360player.io/static/dist/scripts/embed.js" async></script>
                <iframe src="https://360player.io/p/x8hLtM/" frameborder="0" width="100%" height="600px" allowfullscreen data-token="x8hLtM"></iframe>
              </div>
            </div>
          </section>
          <section class="main_five">
            <div class="main_name">
              <h2 class="wow fadeIn">
                <?=$mes['Обрати квартиру']?>
              </h2>
            </div>
            <div class="select_wrapper">
              <div class="main_values main_select">
                <div class="main_select__left">
                  <h2 class="select_name wow fadeIn" data-wow-duration="2s"><?=$mes['Оберіть потрібний вам поверх']?></h2>
                  <div class="black_line"></div>
                  <ul class="select__list">
                    <li><a href="<?UrlAdd('1-kimnatni')?>" title="Однокімнатні квартири в житловому комплексі PHILADELPHIA Concept House місто Київ" ><?=$mes['1-кімнатні квартири']?></a></li>
                    <li><a href="<?UrlAdd('2-kimnatni')?>" title="Двокімнатні квартири в житловому комплексі PHILADELPHIA Concept House місто Київ"><?=$mes['2-кімнатні квартири']?></a></li>
                    <li><a href="<?UrlAdd('3-kimnatni')?>" title="Трикімнатні квартири в житловому комплексі PHILADELPHIA Concept House місто Київ"><?=$mes['3-кімнатні квартири']?></a></li>
                  </ul>
                  <div class="main_select__infobox">
                    <div class="infobox__item">
                      <div id="floorNumber1"> 2 </div>
                      <p class="select__italic"><?=$mes['поверх']?></p>
                    </div>
                    <div class="infobox__item">
                      <div id="flatsNumber"> 5 </div>
                      <p class="select__italic"><?=$mes['квартир у продажі']?></p>
                    </div>
                    <a href="/section1/floor4/" class="infobox__item hidden_desktop" id="new_link_house">
                      <svg xmlns="http://www.w3.org/2000/svg"height="32" viewBox="0 0 40 40" width="32">
                        <path fill="#ffffff" d="m20 0c-11.027 0-20 8.973-20 20s8.973 20 20 20 20-8.973 20-20-8.973-20-20-20zm7.059 22.281h-9.187l2.142 2.521c.815.96.698 2.399-.263 3.216-.429.363-.953.543-1.476.543-.646 0-1.288-.272-1.739-.806l-5.334-6.278c-.723-.853-.723-2.103 0-2.953l5.334-6.279c.814-.961 2.254-1.078 3.215-.264.961.815 1.078 2.256.263 3.217l-2.142 2.521h9.187c1.26 0 2.28 1.021 2.28 2.281s-1.021 2.281-2.28 2.281z" transform="matrix(-1 0 0 1 40 0)"/></svg>
                      </svg>
                      <span class=""><?=$mes['переглянути']?></span>
                    </a>
                  </div>
                  <!-- <a class="button20 select__link" href="/floor-bselect/">Обрати квартиру <i class="icon-long-arrow-right"></i></a> -->
                </div>
                <svg class="arrow_blink" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 186 36.5" style="enable-background:new 0 0 186 36.5;" xml:space="preserve">
                <style type="text/css">.st0{fill:#FFFFFF;}.st1{fill:#E4E4E4;}.st2{font-family:'HE_L';font-size:12px;}</style>
                <g><polygon class="st0" points="155,4 4,4 4,34 155,34 182,19 	"/><polygon class="st1" points="4,4 4,19 182,19 182,19 155,4 	"/></g>
                <text transform="matrix(1 0 0 1 16 22.2998)" class="st2"><?=$mes['Оберіть поверх тут']?></text>
                </svg>
              </div>

              <svg class="floorselect__img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" viewBox="0 0 1365 1215.4" width="1365" height="1215.4">
                <image xlink:href="/img/house_black.jpg" y="-1.2" id="image3389" height="1220" width="1365" overflow="visible" fill="#f55"/>
                <a xlink:href="<?UrlAdd('section1/floor16')?>">
                  <path class="st0" data-level="16" data-sale="5" data-href="<?UrlAdd('section1/floor16')?>" d="M699 135.5l-13.2 56.2-35.3 166.6v35.5l48.5-201h113.5l185.5 254v-24.5l7-4.6-194.7-288.2H703z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor15')?>">
                  <path class="st0" data-level="15" data-sale="5" data-href="<?UrlAdd('section1/floor15')?>" d="M1003 493.8l-190-246-114 1.7-48.5 184.6v-40.3l48.5-201h113.5l185.5 254 5 7z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor14')?>">
                  <path class="st0" data-level="14" data-sale="5" data-href="<?UrlAdd('section1/floor14')?>" d="M650.5 434.1l3.8 7v22.4l45.4-157.7h114L998 525.5v-23l5-8.7-190-246-114 1.7z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor13')?>">
                  <path class="st0" data-level="13" data-sale="5" data-href="<?UrlAdd('section1/floor13')?>" d="M699.7 305.8l-45.4 157.7-3.8 12.6v44l49.2-158h113l185.6 203.7v-24.3l6.7-7.7-7-8.3-184.3-219.7z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor12')?>">
                  <path class="st0" data-level="12" data-sale="5"  data-href="<?UrlAdd('section1/floor12')?>" d="M699 418.5h113.3L1003 608.8v-38.3l-4.7-4.7-185.6-203.7h-113l-49.2 158v45.7z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor11')?>">
                  <path class="st0" data-level="11" data-sale="5" data-href="<?UrlAdd('section1/floor11')?>" d="M699 418.5l-48.5 147.3 3.5 3.7v31.6l46-126h113.3L999 644.5v-25.4l6-6.6-2-3.7-190.7-190.3z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor10')?>">
                  <path class="st0" data-level="10" data-sale="5" data-href="<?UrlAdd('section1/floor10')?>" d="M654 601.1l-3.5 6.4v42l48.5-118h114l185.7 152.6v-26.6l6.3-7-191.7-175.4H700z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor9')?>">
                  <path class="st0" data-level="9" data-sale="5" data-href="<?UrlAdd('section1/floor9')?>" d="M699.7 587.5H813l190 139v-38.7l-4.3-3.7L813 531.5H699l-48.5 118v43.6z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor8')?>">
                  <path class="st0" data-level="8" data-sale="5" data-href="<?UrlAdd('section1/floor8')?>" d="M699.7 587.5l-49.2 105.6 4.8 7.4v31l43.4-87H813l184 116.3v-25.3l8-6.4-2-2.6-190-139z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor7')?>">
                  <path class="st0" data-level="7" data-sale="5" data-href="<?UrlAdd('section1/floor7')?>" d="M698.7 644.5l-43.4 87-4.8 5.3v44.3l48.8-79.6H813l184.7 99.3v-27.3l7.3-7-8-5.7-184-116.3z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor6')?>">
                  <path class="st0" data-level="6" data-sale="5" data-href="<?UrlAdd('section1/floor6')?>" d="M699.3 757.1h114l189.7 86.7v-39.7l-5.3-3.3L813 701.5H699.3l-48.8 79.6v43z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor5')?>">
                  <path class="st0" data-level="5" data-sale="5" data-href="<?UrlAdd('section1/floor5')?>" d="M699.3 757.1l-48.8 67 32 8.4 16.5-19h114.3l185.4 66.3v-28.3l6.3-7.7h-2l-189.7-86.7z"/>
                </a>
                <a xlink:href="<?UrlAdd('section1/floor4')?>">
                  <path class="st0" data-level="4" data-sale="5" data-href="<?UrlAdd('section1/floor4')?>" d="M813 868.8l185.3 51.3v-29l6.7-9.3-6.3-2-185.4-66.3H699l-16.5 19z"/>
                </a>
              </svg>


            </div>
            <div id="floorNumber" class="select__box"> 2 </div>

          </section>
          <section class="main_six">
            <div class="six_wrap">
              <h2 class="main_name wow fadeIn">
                  <?=$mes['Контакти']?>
              </h2>
              <div class="six__details">
                <div class="six__details__1 wow fadeInUp">
                  <?=$mes['PHILADELPHIA Concept House розташований у центрі Печерську']?>
                </div>
                <div class="six__details__2 wow fadeInUp">
                  <?=$mes['Ця частина міста відрізняється якісною та насиченою інфраструктурою']?>
                </div>
                <div class="six__details__3 wow fadeInUp">
                  <ul class="location_block">
                    <li><i class="icon-map-pin"></i><?=$mes['adres']?></li>
                    <li><i class="icon-Kyiv_Metro_logo"></i><?=$mes['М. Печерська']?></li>
					<li><a href="#" class="icon_facebook" title="Facebook" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><path fill="#6C6662" d="M301.5 84.8h70V0h-98.9c-79.7 16.1-80.7 89-80.7 89v86.4h-63.5v84.1h63.5V500h88.5V259.3h83.4l7.9-84.1H281v-61.7c-.1-27.1 20.5-28.7 20.5-28.7z"></path></svg>
						</a>
						<style>
						.icon_facebook {
						background: white;
						border-radius: 100%;
						height: 30px;
						width: 30px;
						padding: 3px;
						display: inline-block;
						}
						</style>
					</li>
                  </ul>
                </div>
                <div class="six__details__4 wow fadeInUp">
                  <ul class="location_block">
                    <li><i class="icon-mail"></i>info@philadelphia.kiev.ua</li>
                    <li><i class="icon-phone"></i><a class="phone_click" href="tel:<?=$mes['tel']?>"><?=$mes['tel']?></a></li>
                  </ul>
                </div>
              </div>
              <div class="six__images">
                <div class="six__map" id="location_link">
                  <div class="six_map__info">
                    <div class="map_info__item">
                      <img src="/img/map_icon.png" alt="map">
                      <div>
                        <h3><?=$mes['Розташування ЖК']?></h3>
                        <p><?=$mes['adres']?></p>
                      </div>
                    </div>
                    <div class="map_info__item">
                      <img src="/img/map_icon.png" alt="map">
                      <div>
                        <h3><?=$mes['Відділ продажу']?></h3>
                        <p><?=$mes['вул. Антоновича 74']?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="six__form">
                  <div class="location_form clearfix">
                    <p class="lightgrey italic"><?=$mes['У Вас виникли запитання чи пропозиції?']?></p>
                   <?FormInclude('call_form')?>
                  </div>
                </div>

              </div>

            </div>

          </section>

          <style media="screen">
            .fixed_menu{
              display: block;
			        max-height: 93px;
            }
          </style>
        </div>

	 <?php	 FooterAdd(array('index'=>true,'html'=>'

    <script src="/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="/js/bx.js"></script>
    <script>jQuery(document).ready(function(){
      $(".bxslider").bxSlider({
         nextText: "",
         prevText: "",
         adaptiveHeight: true,
         pagerCustom: "#bx-pager"
      });
      });

      $(function() {
       $(window).scroll(function() {
         if($(this).scrollTop() != 0) {
         $("#toTop").fadeIn();
            } else {
         $("#toTop").fadeOut();
            }
            });
     $("#toTop").click(function() {
     $("body,html").animate({scrollTop:0},800);
     });
       });
      </script>

      <script type="text/javascript">
      $( "path.st0" ).each(function() {

        var myBox = $("#floorNumber");
        var infoBox1 = $("#floorNumber1");
        var infoBox2 = $("#flatsNumber");
        var newlink = $("#new_link_house");

        if ($(window).width() > 1024){

        $(this).mouseover(function() {
          var offset = $(this).offset();
          var level = this.dataset.level;
          var flatSale = this.dataset.sale;
          myBox.html(level);
          infoBox1.html(level);
          infoBox2.html(flatSale);
          $(".arrow_blink").hide("slow");
          myBox.css("opacity","1");
          myBox.offset({top:offset.top, left:offset.left});
        });
        $(this).mouseleave(function() {
          var myBox = $("#floorNumber");
          myBox.css("opacity","0");
        });
        }
        else{
          $(this).click(function(e){
            e.preventDefault();
            var level = this.dataset.level;
            var flatSale = this.dataset.sale;
            var href = this.dataset.href;
            myBox.html(level);
            infoBox1.html(level);
            infoBox2.html(flatSale);
            newlink.attr("href", href);
            $(".floorselect__img .st0").css("animation","none");

          });
          }
    });

    $("#location_link").click(function(e){
      e.preventDefault;
      $(".bigmap_overlay").addClass("over__active"),
      $(".bigmap_box").fadeIn()
      });
      $(".bigmap__close, .bigmap_overlay").click(function(){
        $(".bigmap_overlay").removeClass("over__active"),
        $(".bigmap_box").fadeOut("slow")
        });
        </script>


	', 'head'=>true));	?>


<style>
/* .menu_logo {
  position: relative;
}
.logo-container {
	position: absolute;
	top: 15px;
	left: 186px;
  max-height: 70px;
  height: 100%;
  min-width: 170px;
  width: 150px;
  display: flex;
  justify-content: space-between;

  transition: top .3s;
}
.saga-logo {
  display: block;
}
.perfect-logo {
  height: 100%;
  display: block;
}
.logo-container img {
  height: calc(100% - 10px);
  height: 80%;
  max-height: 60px;
}
.logo-container a {
	max-height: 60px;
}
.menu_back .logo-container {
  top: 5px;
}
@media screen and (max-width: 1024px){
  .logo-container {

	min-width: 121px;
  }
}
@media screen and (max-width: 767px){
  .logo-container {
    left: 5px;
    top: 70px;
    min-width: auto;
    display: block;
    width: 100px;
  }
  .perfect-logo img, .saga-logo img {
    width: 100%;
    height: auto;
  }
  .menu_back .logo-container {
    top: 70px;
  }
  .mobile_nav {
    z-index: 9999;
  }
} */

</style>
