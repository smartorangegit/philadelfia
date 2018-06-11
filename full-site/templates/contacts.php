<?php  HeadAdd();?>
  	<?php //HeaderInclude(array('pageTypeMobileAll'=>true));?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>
    <!-- <style media="screen"> body{ visibility: hidden; }</style> -->

    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->
      <div class="container">
        <div class="wrapper">


        <div class="main_values">
            <div class="main_name"><h1><?H1page()?></h1></div>
          <div class="location_box">
            <div class="location_info">
              <div class="main_text">
                <p class="wow fadeInDown">
                   PHILADELPHIA Concept House розташований у центрі Печерську, за адресою Кловський узвіз, 19.
                </p>
                <p class="wow fadeInDown">
                  Ця частина міста відрізняється якісною та насиченою інфраструктурою. Найближчі магазини, кафе та ресторани
                  знаходяться на відстані у декілька хвилин пішки.
                </p>
              </div>
              <ul class="location_block wow fadeInUp">
                <li><i class="icon-map-pin"></i><?=$mes['adres']?></li>
                <li><i class="icon-Kyiv_Metro_logo"></i>М. Печерська</li>
                <li><i class="icon-mail"></i><?=$mes['email']?></li>
                <li><i class="icon-phone"></i><a class="phone_click" href="tel:<?=$mes['tel']?>"><?=$mes['tel']?></a></li>
              </ul>
            </div>
            <div class="location_form clearfix wow fadeInRight">
              <p class="lightgrey italic">У Вас виникли запитання чи пропозиції?</p>
             <?FormInclude('call_form')?>
            </div>
          </div>
        </div>
      </div>
   	     <?php	 FooterAdd(array('html'=>'
	        <script src="/js/jquery.fancybox.js"></script>
	'));	?>
