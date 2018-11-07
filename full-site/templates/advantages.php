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
            <div class="content_name wow fadeInUp"><?=$mes['Переваги']?></div>
            <div class="content_subname wow fadeInUp"><h1><?H1page()?></h1></div>
          </div>
            <ul class="advant_box">
              <li class="advant_item wow fadeInUp animatia">
                <img src="/img/advant/1.jpg" alt="Вдале розташування у престижній частині центру міста" title="Вдале розташування у престижній частині центру міста" >
                <div class="figcaption"><span class="bold"><?=$mes['Вдале розташування</span> у престижній частині центру міста']?></div>
              </li>
              <li class="advant_item wow fadeInUp" >
                <img src="/img/advant/4.jpg" alt="Затишні парки та сквери у безпосередній близькості від будинку" title="Затишні парки та сквери у безпосередній близькості від будинку" >
                <div class="figcaption"><span class="bold"><?=$mes['Затишні парки та сквери_advantages']?></div>
              </li>
              <li class="advant_item wow fadeInUp">
                <img src="/img/advant/8.jpg" alt="Невелика кількість сусідів – лише 65 квартир у будинку" title="Невелика кількість сусідів – лише 65 квартир у будинку" >
                <div class="figcaption"><span class="italic"><?=$mes['Невелика кількість сусідів_advantages']?></div>
              </li>
              <li class="advant_item wow fadeInUp">
                <img src="/img/advant/7.jpg" alt="Унікальні панорамні вікна у кожній квартирі" title="Унікальні панорамні вікна у кожній квартирі" >
                <div class="figcaption"><span class="italic"><?=$mes['Унікальні панорамні вікна_advantages']?></div>
              </li>
              <li class="advant_item wow fadeInUp" >
                <img src="/img/advant/5.jpg" alt="Супер-сучасне архітектурне рішення" title="Супер-сучасне архітектурне рішення" >
                <div class="figcaption"><span class="bold"><?=$mes['Супер-сучасне архітектурне рішення_advantages']?></div>
              </li>
              <li class="advant_item wow fadeInUp" >
                <img src="/img/advant/6.jpg" alt="Продумана ергономіка суспільних просторів" title="Продумана ергономіка суспільних просторів" >
                <div class="figcaption"><span class="bold"><?=$mes['Продумана ергономіка_advantages']?></div>
              </li>
              <li class="advant_item wow fadeInUp animatia">
                <img src="/img/advant/2.jpg" alt="Близькість до багатьох архітектурних пам’яток, головна з яких – Києво-Печерська лавра" title="Близькість до багатьох архітектурних пам’яток, головна з яких – Києво-Печерська лавра" >
                <div class="figcaption"><span class="italic"><?=$mes['Близькість до багатьох архітектурних_advantages']?></div>
              </li>
              <li class="advant_item wow fadeInUp">
                <img src="/img/advant/9.jpg" alt="Застосування системи «розумний будинок», яка підвищує комфорт мешканців та зменшує витрату енергії" title="Застосування системи «розумний будинок», яка підвищує комфорт мешканців та зменшує витрату енергі" >
                <div class="figcaption"><?=$mes['Застосування системи_advantages']?></div>
              </li>
              <li class="advant_item wow fadeInUp" >
                <img src="/img/advant/3.jpg" alt="Насичена високоякісна інфраструктура навколо будинку" title="Насичена високоякісна інфраструктура навколо будинку" >
                <a href="/location/">
                  <div class="figcaption"><span class="italic"><?=$mes['Насичена високоякісна інфраструктура навколо будинку_advantages']?></div>
                </a>
              </li>
              <li class="advant_item wow fadeInUp">
                <img src="/img/advant/10.jpg" alt="Club Lounge, призначений лише для мешканців будинку та їх гостей" title="Club Lounge, призначений лише для мешканців будинку та їх гостей">
                <div class="figcaption"><span class="bold"><?=$mes['Club Lounge призначений лише для мешканців_advantages']?></div>
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
