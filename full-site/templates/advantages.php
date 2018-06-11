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


        <div class="main_advant">
          <div class="name_wrap" data-wow-duration="2s">
            <div class="content_name wow fadeInUp">Переваги</div>
            <div class="content_subname wow fadeInUp"><h1><?H1page()?></h1></div>
          </div>
            <ul class="advant_box">
              <li class="advant_item wow fadeInUp animatia">
                <img src="/img/advant/1.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Вдале розташування</span> у престижній частині центру міста</div>
              </li>
              <li class="advant_item wow fadeInUp" >
                <img src="/img/advant/4.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Затишні парки та сквери</span> у безпосередній <span class="italic">близькості</span> від будинку</div>
              </li>
              <li class="advant_item wow fadeInUp">
                <img src="/img/advant/8.jpg" alt="advantages">
                <div class="figcaption"><span class="italic">Невелика</span> кількість сусідів – лише <span class="bold">65 квартир</span> у будинку</div>
              </li>
              <li class="advant_item wow fadeInUp">
                <img src="/img/advant/7.jpg" alt="advantages">
                <div class="figcaption"><span class="italic">Унікальні</span> <span class="bold">панорамні вікна</span> у кожній квартирі</div>
              </li>
              <li class="advant_item wow fadeInUp" >
                <img src="/img/advant/5.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Супер-сучасне</span><span class="italic"> архітектурне</span> рішення</div>
              </li>
              <li class="advant_item wow fadeInUp" >
                <img src="/img/advant/6.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Продумана</span> <span class="italic">ергономіка</span> суспільних просторів</div>
              </li>
              <li class="advant_item wow fadeInUp animatia">
                <img src="/img/advant/2.jpg" alt="advantages">
                <div class="figcaption"><span class="italic">Близькість</span> до багатьох <span class="bold">архітектурних пам’яток</span>, головна з яких – <span class="italic"> Києво-Печерська лавра</span></div>
              </li>
              <li class="advant_item wow fadeInUp">
                <img src="/img/advant/9.jpg" alt="advantages">
                <div class="figcaption">Застосування системи <span class="bold">«розумний будинок»</span>, яка підвищує комфорт мешканців та <span class="bold">зменшує витрату</span> енергії</div>
              </li>
              <li class="advant_item wow fadeInUp" >
                <img src="/img/advant/3.jpg" alt="advantages">
                <a href="/location">
                  <div class="figcaption"><span class="italic">Насичена</span> високоякісна <span class="bold">інфраструктура</span> навколо будинку</div>
                </a>
              </li>
              <li class="advant_item wow fadeInUp">
                <img src="/img/advant/10.jpg" alt="advantages">
                <div class="figcaption"><span class="bold">Club Lounge</span>, призначений лише <span class="italic">для мешканців будинку</span> та їх гостей</div>
              </li>
            </ul>
        </div>
      </div>
      <style media="screen">
        .fixed_menu{  display: block;   background-color: rgba(0,0,0,0.45);}
      </style>



   <?php	 FooterAdd(array('html'=>'
	    <style media="screen">
      .advant_item:before{
        width: 0;
        height: 0;
      }
      .animatia:before{
        width: 30%;
        height: 32%;
      }
    </style>
    <script type="text/javascript">
    var h = $(window).height();
    $(window).scroll(function(){
            $(".advant_item").each(function(){
               windowTop = $(window).scrollTop() - 50;
               elTop = $(this).offset().top;
                if ( (elTop - h) <= windowTop) {
                    $(this).addClass("animatia");
                }
                if ( (elTop - h) > windowTop) {
                  if ( $(this).hasClass("animatia") ) {
                    $(this).removeClass("animatia");
                  }
                }
            });
       });

    </script>
	'));	?>
