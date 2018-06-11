
<?php  HeadAdd(array('pageType'=>'class="wow fadeIn"','head', 'offstyle'=>true, 'html'=>'
  <link rel="stylesheet" type="text/css" href="/css/component-line.css" />
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/onlymobile.css">

  '));?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/mobile_header.php') ?>
    <div class="wrapper">
      <div class="tabscontent__item_mobile">
        <div class="tabscontent_left">
          <p class="wow fadeIn">
            <span class="bold">Пропозиція обмежена:</span> на 16 поверхах будинку розташовані <span class="italic">лише 65 квартир.</span>
          </p>
          <p class="wow fadeIn">
            Усі квартири обладнані <span class="italic">великими панорамними вікнами</span>, з яких відкриваються <span class="bold">мальовничі види Печерську</span> .

          </p>

        </div>
        <figure class="poster wow fadeIn">
          <img class="poster__img" src="/img/poster3.jpg" alt="Апартаменти комплексу"/>

          <figcaption class="poster__caption">
            <h2 class="poster__title">Апартаменти<br/>комплексу</h2>
            <p class="poster__deco">Обрати квартиру</p>
            <div class="poster__box"></div>
          </figcaption>
        </figure>


        <div class="tabscontent_left aligncenter">
          <p class="bold">У продажу лишилося 65 квартир</p>
          <ul id="clockdiv" class="timer clearfix">
            <li><div class="number_date days">12</div><span class="school">днів</span></li>
            <li><div class="number_date hours">20</div><span class="school">годин</span></li>
            <li><div class="number_date minutes">16</div><span class="school">хвилин</span></li>
            <li><div class="number_date seconds">49</div><span class="school">секунд</span></li>
          </ul>
          <a class="link" href="/appartments/">ОБРАТИ КВАРТИРУ <i class="icon-long-arrow-right"></i></a>
        </div>
      </div>

    </div>
	
	<?php FooterMobileAdd(array('html'=>'<script type="text/javascript">
  var deadline = "December 31 2017";
  function getTimeRemaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
   "total": t,
   "days": days,
   "hours": hours,
   "minutes": minutes,
   "seconds": seconds
  };
}
function initializeClock(id, endtime){
var clock = document.getElementById(id);
var daysSpan = clock.querySelector(".days");
var hoursSpan = clock.querySelector(".hours");
var minutesSpan = clock.querySelector(".minutes");
var secondsSpan = clock.querySelector(".seconds");
var timeinterval = setInterval(function(){
 var t = getTimeRemaining(endtime);
 daysSpan.innerHTML = t.days;
 hoursSpan.innerHTML = t.hours;
 minutesSpan.innerHTML = t.minutes;
 secondsSpan.innerHTML = t.seconds;
 if(t.total<=0){
clearInterval(timeinterval);
 }
},1000);
}
initializeClock("clockdiv", deadline);

  </script>'));?>

