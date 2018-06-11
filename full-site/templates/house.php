<?php  HeadAdd(array('pageType'=>'class="housepage"','head'=>true));?>
  	<?php// HeaderInclude(array('pageTypeMobileAll'=>2));?>


    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/preloader.php')?>
    <div id="perspective" class="perspective effect-laydown">
<?//if (!$detectMob) :?>
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->

	<?//endif;?>
      <div class="container">
        <div class="wrapper">


          <section class="main_two section_house">
            <div class="main_two_left"></div>
            <div class="main_two_right">
              <h1 class="main_name wow fadeIn">
                Будинок
              </h1>
              <div class="main_text">
                <p class="wow fadeIn">
                  У серці Києва, у центрі Печерська ми зводимо будинок, не схожий на інші.
                </p>
                <p class="wow fadeIn">
                  Смілива сучасна архітектура, продумана ергономіка суспільних просторів, затишна прибудинкова територія. І всього 65 квартир, що розташовані на 16 поверхах.
                </p>
                <p class="wow fadeIn">
                  Цей будинок ми створюємо для тих, хто прагне жити в оточенні однодумців. Для тих, хто цінує естетику, приватність та безпеку. Для тих, хто не готовий до компромісів, коли мова йде про стиль життя. Для тих, кому комфортно у колі самодостатніх та прогресивних сусідів.
                </p>
                <p class="wow fadeIn">
                  Створюючи PHILADELPHIA Concept House, ми також створюємо клуб однодумців. Приєднуйтесь!
                </p>
              </div>
              <a href="<?UrlAdd('floor-bselect/')?>" class="button20">Обрати квартиру</a>

            </div>
          </section>


          <style media="screen">
            .fixed_menu{  display: block;   background-color: rgba(0,0,0,0.45);}
          </style>

        </div>

	 <?php	 FooterAdd(array('index'=>true,'html'=>'
    <script src="/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	', 'head'=>true));	?>
