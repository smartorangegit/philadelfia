<div class="mobile_nav">
  <div class="mobile_nav__wrap">
    <div class="menu_block">
    <h3>ПРО ПРОЕКТ:</h3>
    <ul>
       <li><a href="<?UrlAdd()?>">Головна</a></li>
      <li><a href="<?UrlAdd('house')?>">Будинок</a></li>
      <li><a href="<?UrlAdd('architecture')?>">Архітектура</a></li>
      <li><a href="<?UrlAdd('advantages')?>">Переваги</a></li>
      <li><a href="<?UrlAdd('location')?>">Розташування</a></li>
      <li><a href="<?UrlAdd('values')?>">Цінності</a></li>
      <li><a href="<?UrlAdd('contacts')?>">Контакти</a></li>
    </ul>
  </div>
  <div class="menu_block">
    <h3><a href="<?UrlAdd('appartments')?>">ОБРАТИ КВАРТИРУ:</a></h3>
    <ul>
      <!-- <li><a href="<?UrlAdd('appartments')?>">За параметрами</a></li> -->
       <li><a href="<?UrlAdd('floor-bselect')?>">За поверхом</a></li>
      <li><a href="<?UrlAdd('1-kimnatni')?>">1-кімнатні</a></li>
      <li><a href="<?UrlAdd('2-kimnatni')?>" >2-кімнатні</a></li>
      <li><a href="<?UrlAdd('3-kimnatni')?>">3-кімнатні</a></li>
         <?/*  <li><a href="#">Розстрочка</a></li> */?>
        <?/*  <li><a href="#">Комерційна нерухомість</a></li> */?>
        <?/*  <li><a href="#">Юридична інформація</a></li> */?>
    </ul>
  </div>
  <div class="menu_block">
    <h3>ХІД ПРОЕКТУ:</h3>
    <ul>
      <li><a href="<?UrlAdd('developer')?>">Забудовники</a></li>
      <li><a href="<?UrlAdd('news')?>">Новини</a></li>
      <li><a href="<?UrlAdd('building')?>">Будівництво</a></li>
     <?/*  <li><a href="<?UrlAdd('webcam')?>">Веб-камера</a></li> */?>
    </ul>
  </div>
  <div class="menu_block">
    <h3>ВІДДІЛ ПРОДАЖУ:</h3>
    <ul>
      <li><i class="icon-map-pin"></i><?=$mes['adres-sales']?></li>
      <li><i class="icon-Kyiv_Metro_logo"></i>М. Печерська</li>
      <li><i class="icon-phone"></i><a href="tel:<?=$mes['tel']?>"><?=$mes['tel']?></a></li>
      <li style="list-style:none;"><a id="call_back" class="button20" href="#">Замовити зворотній зв&prime;язок</a></li>
    </ul>
  </div>
</div>
</div>
