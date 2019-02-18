<?php  HeadAdd(array('pageType'=>'class="otherpages appages"','head'=>true, 'robots'=>'noindex, nofollow', 'title'=>$mes['floor-h1']." $floor[0] $sec".$mes['floor-title'], 'description'=>"【".$mes['floor-h1']." $floor[0] $sec".$mes['floor-description']));?>



    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->
      <div class="container">
        <div class="wrapper">


        <!-- <div class="main_values"> -->

        <div class="main_appart">
          <div class="level_info">
            <?/* <a href="#" class="obrat_poverh"><i class="icon-keyboard_backspace"></i> Обрати поверх</a>*/?>
            <!-- <a href="/appartments/" class="params"> <i class="icon-equalizer"></i>Підбір за параметрами</a> -->
            <ul class="wow fadeInLeft">
              <!--<li><span class="round round_1"></span><span class="content_text">Куплено</span></li>-->
              <li><a href="<?UrlAdd('1-kimnatni')?>" class="li-link"><span class="round round_2"></span><span class="content_text">1 <?=$mes['кімната-floor']?></span></a></li>
              <li><a href="<?UrlAdd('2-kimnatni')?>" class="li-link"><span class="round round_3"></span><span class="content_text">2 <?=$mes['кімнати-floor']?></span></a></li>
              <li><a href="<?UrlAdd('3-kimnatni')?>" class="li-link"><span class="round round_4"></span><span class="content_text">3 <?=$mes['кімнати-floor']?></span></a></li>
            </ul>
            <img class="compas" src="/img/plan/compas.png"  alt="compas">
            <?
            FloorPrevNextAdd($plan,$sec,$floor,$floor_next,$floor_prev);
            ?>
          </div>

            <div class="level_plan">
              <h1 class="content_name name_appart"><?/* H1page() */?><?=$mes['floor-h1']?> <?=$floor[0]?> <?=$mes['floor-h1-2']?></h1>
              <!-- <img src="/img/plan/1.png" alt="plan"> -->
		            <?include(svg_plan($svg=$si['img']));?>
            </div>

            <!--всплывающий блок с информацией -->
      <div id="appInfo">
      <p><?=$mes['Кількість кімнат-floor']?>: <strong><span id="appInfoRooms">3</span></strong></p>
      <p><?=$mes['Загальна площа-floor']?>: <strong><span id="appInfoSquare">112,9</span> м<span class="m2">2</span></strong></p>
      <p><?=$mes['Житлова площа-floor']?>: <strong><span id="appInfoLivingSquare">46,5</span> м<span class="m2">2</span></strong></p>
      <p style="margin-bottom:0px;"><?=$mes['Поверх-floor']?>: <strong><span id="appInfoFloor">3-21</span></strong></p>
      </div>
        <!--конец всплывающий блок с информацией -->




            <div class="appart_info wow fadeInRight">
              <p><?=$mes['Параметри квартири']?></p>
              <ul style="overflow-y: hidden;">
                <li><span class="param_number"><?=$floor[0]?></span><span class="param_name"><?=$mes['Поверх-floor']?></span></li>
                <li><span class="param_number"><?=$sec?></span><span class="param_name"><?=$mes['Секція-floor']?></span></li>
                <li><span class="param_number" id="number_s">-</span><span class="param_name"><?=$mes['Квартира-floor']?></span></li>
                <li><span class="param_number" id="room_s">-</span><span class="param_name"><?=$mes['Кількість кімнат-floor']?></span></li>
                <li><span class="param_number" id="all_room_s">- м<sup>2</sup></span><span class="param_name"><?=$mes['Загальна площа-floor']?></span></li>
                <li><span class="param_number" id="life_room_s">- м<sup>2</sup></span><span class="param_name"><?=$mes['Житлова площа-floor']?></span></li>
              </ul>
            </div>
          </div>
        <!-- </div> -->
      </div>
<style>
<?
foreach($clas_css as $key=>$s){
	if ($REZULT[$key]['kim']==1) $color='#A5C561';
	else if($REZULT[$key]['kim']==2) $color='#568D94';
	else if($REZULT[$key]['kim']==3) $color='#DE8D18';

	if (!$REZULT[$key]['sales']) $color='#fff';
 echo '.'.$s.'_{ opacity: 0.4; fill:'.$color.';}';
}
?>
</style>

<? ob_start(); ?>

<script>
<? $i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
$('.<?=$clas_js[$key]?>').mouseover(function(e) {
  document.getElementById("number_s").innerHTML = "<?=$s['number']?>";
  document.getElementById("room_s").innerHTML = "<?=$s['kim']?>";
  document.getElementById("life_room_s").innerHTML = "<?=$s['life_room']?> <span><?=$mes['pl-mes7']?> <?=$mes['м2']?></span>";
  document.getElementById("all_room_s").innerHTML = "<?=$s['all_room']?> <span><?=$mes['pl-mes7']?> <?=$mes['м2']?></span>";
 <?// document.getElementById("flats").style = "display:block";>?>
  $('.flats').css("display", "block");

      var x = e.pageX;
    var y = e.pageY;
    var leftPos = x - $('.lin_<?=$i?>').width() - 250;
    var topPos = y - $('.lin_<?=$i?>').height() - 20;

    $(".lin_<?=$i?>").css({top:topPos, left:leftPos});
}).mouseout(function()
{
<?//document.getElementById("flats").style = "display:none";
 // $('.flats').css("display", "none");?>

  document.getElementById("number_s").innerHTML = "-";
  document.getElementById("room_s").innerHTML = "-";
  document.getElementById("life_room_s").innerHTML = "- <span><?=$mes['pl-mes7']?>м&sup2;</span>";
  document.getElementById("all_room_s").innerHTML = "- <span><?=$mes['pl-mes7']?>м&sup2;</span>";
});
 <?}?>
 	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
$('.<?=$clas_js[$key]?>').mouseover(function() {
  $('.lin_<?=$i?>').css('display', 'block');
}).mouseout(function()
{
$('.lin_<?=$i?>').css('display', 'none');
});
 <? } ?>

</script>

<?$Js= ob_get_clean(); ?>

		     <?php	 FooterAdd(array('html'=>$Js.'
    <script type="text/javascript">
    var currentMousePos = { x: -1, y: -1 };
      $(document).mousemove(function(event) {
          currentMousePos.x = event.pageX;
          currentMousePos.y = event.pageY;
      });

    function showApartmentInfo(appartmentInfo){
      var appartmentArr = appartmentInfo.split("|");
      //alert(appartmentArr[0]);
      $("#appInfoRooms").text(appartmentArr[0]);
      $("#appInfoSquare").text(appartmentArr[1]);
      $("#appInfoLivingSquare").text(appartmentArr[2]);
      $("#appInfoFloor").text(appartmentArr[3]);

      var divInfoLeftPos = currentMousePos.x - $("#appInfo").width() - 120;
      var divInfoTopPos = currentMousePos.y - $("#appInfo").height() - 160;
      $("#appInfo").css( {left:divInfoLeftPos});
      $("#appInfo").css( {top:divInfoTopPos});
    }
    function showApartmentDiv(){
      if($(window).width() > 1000){
        $("#appInfo").css( {visibility:"visible"});
        $("#appInfo").css( {display:"block"});
      }
    }
    function hideApartmentDiv(){
      if($(window).width() > 1000){
        $("#appInfo").css( {visibility:"hidden"});
        $("#appInfo").css( {display:"none"});
      }
    };
    </script>
	'));	?>
<style>
.fadeInLeft .li-link {
	margin: 0;
	font-size: 100%;
}
</style>