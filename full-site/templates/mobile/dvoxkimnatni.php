
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
            Площа 2-к квартир в <span class="italic">PHILADELPHIA Concept House </span>стартує з 63 м2. Відчуття простору посилюють <span class="bold">панорамні вікна</span>, які покращують освітлення.
          </p>
            <p class="wow fadeIn">
              Чудово підійде <span class="italic">2-кімнатна квартира</span> молодятам та невеликим сім’ям. Таке житло стане <span class="bold">райським куточком</span> для спокійного й щасливого життя. До того ж у житловому комплексі чудова звукоізоляція завдяки використанню високоякісних матеріалів.

          </p>
            <p class="wow fadeIn">
              Якщо ви шукаєте <span class="italic">краще житло в Києві</span>, сміливо обирайте PHILADELPHIA Concept House. Квартира тут стане вашою фортецею, творчим простором, а також місцем для відпочинку, приємних зустрічей і щасливого сімейного життя.
          </p>
        </div>
        <figure class="poster wow fadeIn">
            <img class="poster__img" src="/img/img2a.jpg" alt="2-кімнатні квартири PHILADELPHIA Concept House"/>
          <figcaption class="poster__caption">
            <h2 class="poster__title">2 кімнатні</h2>
            <p class="poster__deco">Квартири</p>
            <div class="poster__box"></div>
            <span class="poster__number">02</span>
          </figcaption>
        </figure>
        <div class="tabscontent_table">
         	<?TableFlatsMobile($REZULT, 2);	?>
        </div>
      </div>

    </div>
	<?php FooterMobileAdd(array('html'=>'
    <script src="/js/ion.rangeSlider.js"></script>
    <script src="/js/range.js"></script>'));
	?>