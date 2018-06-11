
<?php  HeadAdd(array('pageType'=>'class="appartments"','head', 'offstyle'=>true, 'html'=>'
  <link rel="stylesheet" type="text/css" href="/css/component-line.css" />
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/ion.rangeSlider.css">
  <link rel="stylesheet" type="text/css" href="/css/ion.rangeSlider.skinHTML5.css">
  <link rel="stylesheet" href="/css/onlymobile.css">

  '));
  
  include_once('modules/pages/appartments.php');
  
  ?>

    <?php HeaderInclude(array('pageTypeMobile'=>true)); ?>
    <div class="wrapper">
      <div class="tabscontent__item_mobile">
        <div class="tabscontent_left">
          <p class="wow fadeIn">
            <span class="bold">Однокімнатні квартири </span>в PHILADELPHIA Concept House відповідають всім ключовим характеристикам комфортного житла і при цьому <span class="bold">мають прийнятну ціну</span>.
            Якщо ж додати сюди вдале розташування комплексу, можна впевнено стверджувати, що 1-кімнатні квартири є максимально вигідною пропозицією.
          </p>
            <p class="wow fadeIn">
            Між іншим, придбання такої нерухомості є <span class="italic">ідеальним варіантом </span>для однієї людини або пари без дітей.

          </p>
            <p class="wow fadeIn">
              Купівля нерухомості в новобудові на ранніх стадіях будівництва та її подальший продаж <span class="bold">дуже вигідний</span>:квадратні метри щороку дорожчають, або таке житло можна здавати в оренду й <span class="italic">отримувати непоганий прибуток</span>.
          </p>
        </div>
        <figure class="poster wow fadeIn">
            <img class="poster__img" src="/img/img1a.jpg" alt="1-кімнатні квартири PHILADELPHIA Concept House"/>
          <figcaption class="poster__caption">
            <h2 class="poster__title">1 кімнатні</h2>
            <p class="poster__deco">Квартири</p>
            <div class="poster__box"></div>
            <span class="poster__number">01</span>
          </figcaption>
        </figure>
        <div class="tabscontent_table">
         	<?TableFlatsMobile($REZULT, 1);	?>
        </div>
      </div>

    </div>
 	<?php FooterMobileAdd(array('html'=>'
    <script src="/js/ion.rangeSlider.js"></script>
    <script src="/js/range.js"></script>'));
	?>
