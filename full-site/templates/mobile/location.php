
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
            PHILADELPHIA Concept House розташований у центрі Печерську, за адресою:<span class="bold"> Кловський узвіз, 19</span>.
          </p>
          <p class="wow fadeIn">
            <span class="italic">Ця частина міста відрізняється якісною та насиченою інфраструктурою.</span> Найближчі магазини, кафе та
            ресторани знаходяться на відстані у декілька хвилин пішки.
          </p>
          <p class="wow fadeIn">
            А коли ви відправитесь на прогулянку, <span class="italic">ваш маршрут охопить найгарніші київські парки та історичні пам’ятки</span>,
            головна з яких, безперечно, Києво-Печерська лавра.
          </p>

        </div>
        <figure class="poster wow fadeIn">
          <a class="location_link" href="#" title="Розташування PHILADELPHIA Concept House">

          <!-- <a class="location_link" target="_blank" href="https://www.google.ru/maps/place/%D0%9A%D0%BB%D0%BE%D0%B2%D1%81%D1%8C%D0%BA%D0%B8%D0%B9+%D1%83%D0%B7%D0%B2%D1%96%D0%B7,+19,+%D0%9A%D0%B8%D1%97%D0%B2,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0/@50.4370409,30.5400974,17.75z/data=!4m5!3m4!1s0x40d4cfa8024b4ed5:0xfe7c681a83644e2c!8m2!3d50.437021!4d30.541358" title="Розташування PHILADELPHIA Concept House"> -->
            <img class="poster__img" src="/img/poster2.jpg" alt="Розташування"/>
          </a>
          <figcaption class="poster__caption">
            <h2 class="poster__title">Центр<br/>Печерську</h2>
            <h1 class="poster__deco">Розташування</h1>
            <div class="poster__box"></div>
          </figcaption>
        </figure>
<style media="screen">
.location_link{
  pointer-events: all;
  display: block;
}

</style>

        <div class="tabscontent_left table_time">
          <table>
            <tr><td>1</td><td><span class="school">хвилина </span>пішки</td><td>
              <ul>
                <li>до найближчих кафе та ресторанів</li>
                <li>до найближчого продуктового магазину</li>
              </ul></td>
            </tr>
            <tr><td>5</td><td><span class="school">хвилин </span>пішки</td><td>
              <ul>
                <li>до найближчого супермаркету</li>
                <li>до найближчого парку</li>
              </ul></td>
            </tr>
            <tr><td>7</td><td><span class="school">хвилин </span>пішки</td><td>
              <ul>
                <li>до найближчої станції метро</li>
              </ul></td>
            </tr>
            <tr><td>10</td><td><span class="school">хвилин </span>пішки</td><td>
              <ul>
                <li>до Києво-Печерської Лаври</li>
              </ul></td>
            </tr>
            <tr><td>15</td><td><span class="school">хвилин </span>пішки</td><td>
              <ul>
                <li>до Верховної Ради</li>
              </ul></td>
            </tr>
            <tr><td>5</td><td><span class="school">хвилин </span>на авто</td><td>
              <ul>
                <li>до Хрещатика</li>
              </ul></td>
            </tr>
          </table>
        </div>

      </div>

    </div>
    <div class="bigmap_overlay">
      <div class="bigmap_box">
        <div class="bigmap__close"><i class="icon-close"></i></div>
        <a class="bigmap__null" target="_blank" title="Розташування PHILADELPHIA Concept House" href="https://www.google.ru/maps/place/%D0%9A%D0%BB%D0%BE%D0%B2%D1%81%D1%8C%D0%BA%D0%B8%D0%B9+%D1%83%D0%B7%D0%B2%D1%96%D0%B7,+19,+%D0%9A%D0%B8%D1%97%D0%B2,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0/@50.4370409,30.5400974,17.75z/data=!4m5!3m4!1s0x40d4cfa8024b4ed5:0xfe7c681a83644e2c!8m2!3d50.437021!4d30.541358"></a>
        <img src="/img/bigmap.jpg" alt="Розташування">
      </div>
    </div>
    <script src="/js/jquery.js"></script>
    <script>
    $(".location_link").click(function(e){
      e.preventDefault;
      $(".bigmap_overlay").addClass("over__active"),
      $(".bigmap_box").fadeIn()
      });
      $(".bigmap__close, .bigmap_overlay").click(function(){
        $(".bigmap_overlay").removeClass("over__active"),
        $(".bigmap_box").fadeOut("slow")
        })
        </script>
 	<?php FooterMobileAdd();?>
