<div class="fixed_menu">
  <div class="menu clearfix">
    <div class="left_nav">
      <a href="tel:<?=$mes['tel']?>" class="only_mobile"><i class="icon-phone"></i></a>
      <span class="no_mobile main_call"><i class="icon-phone"></i><span class="phone_number"><a class="phone_click" href="tel:<?=$mes['tel']?>"><?=$mes['tel']?></a></span></span>
      <a id="call_on" class="button20 no_mobile">замовити дзвінок</a>
    </div>
    <div class="right_nav">
      <?php global $len;
          if ($len){
           echo '<div class="lang">
           <span id="lang_open">'.$mes['fut-mes4'].' <i class="icon-chevron-down"></i></span>
           <ul id="lang">';
                  foreach ($len as $t){
                  $tHref='/'.$t.'/';
                    if ($t==$LANG) {$t=$len_default; $tHref='/';}
                    $mes_t = parse_ini_file('modules/language/'.$t.'.ini'); ;

                  echo '
                  <li>
                    <a href="'.$tHref.'">'.$mes_t['fut-mes4'].'</a>
                  </li>';
                  }
          echo'</ul></div>';
          } ?>
      <!-- <a class="no_mobile"  href="<?UrlAdd('architecture/location')?>"><i class="icon-location2"></i></a> -->
      <!-- <a class="no_mobile" href="<?UrlAdd('contacts')?>"><i class="icon-mail2"></i></a> -->
      <a href="#" id="<?if ($detectMob) {echo 'show_mobilemenu';}else {echo 'showMenu';}?>"><i class="icon-menu" style="display:  inline-block; vertical-align: middle;"></i><span class="no_mobile">меню</span> </a>
    </div>
    <div class="fixed_logo">
      <a href="/" title="PHILADELPHIA - CONCEPT HOUSE">
        <img src="/img/logo_Phila.svg" alt="PHILADELPHIA - CONCEPT HOUSE">
      </a>
    </div>
  </div>
</div>