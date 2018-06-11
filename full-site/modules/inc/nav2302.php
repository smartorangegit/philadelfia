<style media="screen">
  .menuClose{
    opacity: 0;
    transition: 0.55s;
    -webkit-transition: 0.55s;
  }
  .modalview .menuClose{
    opacity: 1;
    transition: 0.55s;
    -webkit-transition: 0.55s;
  }
</style>
<nav class="outer-nav top horizontal">
  <div id="closeMenu" class="menuClose" style="position: absolute; right: 0px; top:0px;cursor:pointer;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="M7.05 32.85l-.684-.687 6.154-6.154 6.154-6.155-6.136-6.135-6.135-6.135.686-.686.685-.687 6.135 6.135 6.136 6.135 6.135-6.135 6.137-6.135.686.686.686.685-6.137 6.135-6.135 6.135 6.154 6.154 6.153 6.153-.684.688-.683.688-6.156-6.155-6.154-6.156-6.156 6.156-6.155 6.155z" fill="#fff"/></svg>
  </div>
    <?/*  <div class="menu_block_wrap clearfix"> */?>
    <div class="nav_logo">
      <img src="/img/logo_Phila.svg" alt="PHILADELPHIA - CONCEPT HOUSE">
    </div>
    <div class="menu_block">
    <span class="h3">ПРО ПРОЕКТ:</span>
    <ul>
      <li><a href="<?UrlAdd()?>">Головна</a></li>
      <li><a href="<?UrlAdd('architecture/house')?>">Будинок</a></li>
      <li><a href="<?UrlAdd('architecture')?>">Архітектура</a></li>
      <li><a href="<?UrlAdd('advantages')?>">Переваги</a></li>
      <li><a href="<?UrlAdd('architecture/location')?>">Розташування</a></li>
      <li><a href="<?UrlAdd('values')?>">Цінності</a></li>
      <li><a href="<?UrlAdd('contacts')?>">Контакти</a></li>
    </ul>
  </div>
  <div class="menu_block">
    <span class="h3">ОБРАТИ КВАРТИРУ:</span>
    <ul>
      <li><a href="<?UrlAdd('floor-bselect')?>">За поверхом</a></li>
      <!-- <li><a href="<?UrlAdd('appartments')?>">За параметрами</a></li> -->
      <li><a href="<?UrlAdd('appartments/odnokimnatna')?>">1-кімнатні</a></li>
      <li><a href="<?UrlAdd('appartments/dvohkimnatna')?>" >2-кімнатні</a></li>
      <li><a href="<?UrlAdd('appartments/trehkimnatna')?>">3-кімнатні</a></li>
        <?/*  <li><a href="#">Розстрочка</a></li> */?>
        <?/*  <li><a href="#">Комерційна нерухомість</a></li> */?>
        <?/*  <li><a href="#">Юридична інформація</a></li> */?>
    </ul>
  </div>
  <div class="menu_block">
    <span class="h3">ХІД ПРОЕКТУ:</span>
    <ul>
      <li><a href="<?UrlAdd('developer')?>">Забудовник</a></li>
      <li><a href="<?UrlAdd('news')?>">Новини</a></li>
      <li><a href="<?UrlAdd('building')?>">Будівництво</a></li>
 <?/*  <li><a href="<?UrlAdd('webcam')?>">Веб-камера</a></li> */?>
    </ul>
  </div>
  <div class="menu_block">
    <span class="h3">ВІДДІЛ ПРОДАЖУ:</span>
    <ul>
      <li><i class="icon-map-pin"></i><?=$mes['adres-sales']?></li>
      <li><i class="icon-Kyiv_Metro_logo"></i>М. Печерська</li>
      <li><i class="icon-phone"></i><a href="tel:<?=$mes['tel']?>"><?=$mes['tel']?></a></li>
      <li style="list-style:none;"><a id="call_back" class="button" href="#">Замовити зворотній зв&prime;язок</a></li>
    </ul>
  </div>

</nav>
