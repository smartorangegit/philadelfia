<?php  HeadAdd(array('pageType'=>'class="otherpages appages"','head'=>true));?>
<?php //HeaderInclude(array('pageTypeMobileAll'=>true));?>
<?php
  FormInclude('apartments_form', $kv);
?>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>

    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->
      <div class="container">
        <div class="wrapper">

          <div class="main_appart">
            <div class="level_info level_info__second wow fadeInUp" data-wow-duration="0.9s" >
              <a href="<?UrlAdd("section$sec/floor$floor[0]")?>" class="obrat_poverh wow fadeInUp" data-wow-duration="0.3s"><i class="icon-keyboard_backspace"></i> Обрати інше планування</a>
              <a href="<?UrlAdd('floor-bselect')?>" class="obrat_poverh wow fadeInUp" data-wow-duration="0.3s"><i class="icon-keyboard_backspace"></i> Обрати інший поверх</a>
              <!-- <a href="<?UrlAdd('appartments')?>" class="params wow fadeInUp" data-wow-duration="0.4s"> <i class="icon-equalizer"></i>Підбір за параметрами</a> -->

              <a href="<?UrlAdd('pdf')?>" target="_blank" class="select_level wow fadeInUp" data-wow-duration="0.5s">
                <div class="select_level_box"></div>
                <i class="icon-file-pdf"></i>
                <p class="select_level_name">завантажити</p>
              </a>
              <!-- <a href="#" id='select-booking' class="select_level wow fadeInUp" data-wow-duration="0.7s">
                <div class="select_level_box"></div>
                <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><linearGradient id="a"><stop offset="0"/><stop offset="1" stop-opacity="0"/></linearGradient></defs><path d="M334.974 0c-95.42 0-173.05 77.63-173.05 173.05 0 21.212 3.77 41.826 11.212 61.402L7.672 399.928a12.613 12.613 0 0 0-3.694 8.917v90.544c0 6.964 5.646 12.61 12.61 12.61h74.617a12.61 12.61 0 0 0 8.91-3.686l25.145-25.107a12.61 12.61 0 0 0 3.7-8.925v-30.876H159.8c6.965 0 12.61-5.646 12.61-12.61v-12.36h12.362c6.964 0 12.61-5.647 12.61-12.612v-27.136h27.137c3.344 0 6.55-1.33 8.917-3.694l40.12-40.12c19.58 7.448 40.197 11.222 61.418 11.222 95.42 0 173.05-77.63 173.05-173.05C508.02 77.63 430.39 0 334.973 0zm0 320.874c-20.642 0-40.606-4.17-59.34-12.393-4.843-2.125-10.298-.955-13.87 2.526-.04.037-.077.067-.115.106l-42.355 42.354h-34.523c-6.965 0-12.61 5.646-12.61 12.61v27.137H159.8c-6.964 0-12.61 5.646-12.61 12.61v12.36h-30.84c-6.963 0-12.61 5.647-12.61 12.612v38.257l-17.753 17.725H29.202v-17.82l154.14-154.14c4.434-4.434 4.434-11.62 0-16.052s-11.616-4.434-16.052 0L29.202 436.855V414.07l167.696-167.708c.038-.038.067-.073.102-.11 3.482-3.57 4.656-9.024 2.53-13.872-8.216-18.732-12.38-38.695-12.38-59.33 0-81.512 66.315-147.827 147.827-147.827S482.802 91.537 482.802 173.05c-.002 81.51-66.318 147.824-147.828 147.824z" fill="#666"/><path d="M387.638 73.144c-26.047 0-47.237 21.19-47.237 47.237s21.19 47.238 47.238 47.238 47.237-21.19 47.237-47.237-21.19-47.236-47.237-47.236zm0 69.252c-12.14 0-22.015-9.876-22.015-22.015s9.876-22.014 22.015-22.014 22.015 9.876 22.015 22.015-9.876 22.016-22.015 22.016z" fill="#666"/></svg></i>
                <p class="select_level_name">забронювати</p>
              </a> -->
              <img class="compas compas_appart" src="/img/plan/compas.png" alt="compas"/>
                  <?
              		FloorPrevNextAdd($plan,$sec,$floor,$floor_next,$floor_prev);
              		?>
              <div class="mini_plan">
                <?include($_SERVER['DOCUMENT_ROOT'].'/'.svg_plan($si['img']));?>
                <span>План поверху</span>
              </div>
                <style media="screen">
                  .select_level {display: none;}
                </style>
            </div>

            <div class="appart_plan">
              <div class="content_name"><?H1page()?></div>
              <div class="main_appart_img">
                <img <?img($img_flat)?>  <?AltImgAdd($mes['fl-mes1'].' '.$REZULT2['number'])?>>
              </div>
              <a class="button20" id="call_price" href="">Дізнатися ціну <i class="icon-long-arrow-right"></i></a>
            </div>

            <div class="appart_info wow fadeInRight" data-wow-duration="1.1s">
              <p style="margin-bottom:10px;">Параметри квартири</p>
              <ul>
                <li><span class="param_number"><?=$floor[0]?></span><span class="param_name">Поверх</span></li>
                <li><span class="param_number"><?=$sec?></span><span class="param_name">Секція</span></li>
                <li><span class="param_number"><?=$number?></span><span class="param_name">Квартира</span></li>
                <li><span class="param_number"><?=$s['room']?></span><span class="param_name">Кіл-ть кімнат</span></li>
                 <?foreach($mas2 as $k=>$s){  if($s){ ?>
                   <li><span class="param_number"><?=$s?> м<sup>2</sup></span><span class="param_name"><?=$mas1[$k]?></span></li>
                 <?}}?>
              </ul>
            </div>
          </div>

          <?php	 //FooterAdd(array('index'=>true,'html'=>$Form, 'head'=>true));	?>
      </div>
      <?php	FooterAdd(array('html'=>$Form));	?>
