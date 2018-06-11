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
            Різниця у вартості 3-кімнатних та 2-кімнатних квартир незначна. Саме тому <span class="italic">трикімнатна квартира</span> в PHILADELPHIA Concept House − це розумний та вигідний вибір.
          </p>
            <p class="wow fadeIn">
              Трикімнатні квартири <span class="bold">PHILADELPHIA Concept House</span> мають лоджії й тераси. Однією з додаткових переваг є <span class="italic">вільне планування </span>такого житла. Тільки вам вирішувати, де розміститься спальня, а де кухня з вітальнею.

          </p>
            <p class="wow fadeIn">
              Якщо у вас велика сім′я і ви хочете <span class="bold">жити комфортно</span>, <span class="italic">PHILADELPHIA Concept House</span> є, що вам запропонувати. 3-кімнатна квартира в новому комплексі − це передусім <span class="bold">зручне житло</span>, яке може стати вашим уже сьогодні.
          </p>
        </div>
        <figure class="poster wow fadeIn">
            <img class="poster__img" src="/img/img3a.jpg" alt="3-кімнатні квартири PHILADELPHIA Concept House"/>
          <figcaption class="poster__caption">
            <h2 class="poster__title">3 кімнатні</h2>
            <p class="poster__deco">Квартири</p>
            <div class="poster__box"></div>
            <span class="poster__number">03</span>
          </figcaption>
        </figure>
        <div class="tabscontent_table">
     	<?TableFlatsMobile($REZULT, 3);	?>
        </div>
      </div>

    </div>
	<?php FooterMobileAdd(array('html'=>'
    <script src="/js/ion.rangeSlider.js"></script>
    <script src="/js/range.js"></script>'));
	?>
