<?php	include('config.php');
function LangAdd(){

	$filename='modules/language/'.(substr($_POST['lang'], 0,2)).".ini";
			 global 	 $mes, $len_default;

			if (file_exists($filename)) {// echo 111; echo $_POST['lang'];
			 $mes = parse_ini_file($filename);			 }
			 else{ 	 $mes = parse_ini_file('language/'.$len_default.'.ini'); 	}

	}
	
function scripts($file)	{ 
	///***Якщо э / - Видаляем перший символ **
		if ($file[0]=='/') { 
		
		mb_internal_encoding("UTF-8");
		 $file = mb_substr( $file, 1);
		}
		
	$file ='/'.$file.'?v='.filemtime($file);
	
	echo $file; 
}

function HeadAdd($html=['html'=>'', 'head'=>true]){ GLOBAL $mes,$SETPAGE, $SLIDE;

	if (empty ($html['head'])) {$html['head']=true;}
	if ($html['head']!=false) { echo '<!DOCTYPE html><html class="no-js" lang="'.$mes['fut-mes3'].'">';} 
	if(!$html['title']){$html['title']=$mes[$SETPAGE.'-title'];}
	if (!$html['robots']) {$html['robots']='index, follow';}
	if (!$html['pageType']) {$html['pageType']='class="otherpages wow fadeIn" data-wow-duration="1s"';}  //клас для body

	
	//if (!$html['alternate']) {$html['alternate']=alternateAdd($_SERVER["REQUEST_URI"]);}
	?>
	
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="<?=$html['robots']?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=false;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MW8S79B');</script>
<!-- End Google Tag Manager-->
			
		<?if(strpos($_SERVER['REQUEST_URI'], 'floor') || strpos($_SERVER['REQUEST_URI'], 'section')):?>
		<link rel="canonical" href="<?='http://'.$_SERVER['SERVER_NAME'].'/appartments/';?>"/>
		<?else:?>
		<link rel="canonical" href="<?='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>"/>
		<?endif;?>

		<?if($html['description']!='N'):
		if(!$html['description']){$html['description']=$mes[$SETPAGE.'-description'];}
		?>
		<meta name="description" content="<?=$html['description']?>">
		<?endif;?>
		<title><?=$html['title']?></title>
		<?
		if($html['alternate']): echo $html['alternate'];	endif;
		if($html['html']): 	echo $html['html'];	endif;
		?>
		<?if ($html['mata_img']) {?>
		<meta property="og:title" content="<?=$html['title']?>" />
		<meta property="og:description" content="<?=$html['description']?>" />
		<meta property="og:image" content="<?=$_SERVER['SERVER_NAME'].$html['mata_img']?>"/>
		<?}?>
		<?/*Виводиться на всіх сторінках*/?>
		 
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
	  <link rel="stylesheet" href="<?scripts('css/component.css')?>">
	<?if (empty($html['offstyle'])):?>

    <link rel="stylesheet" href="<?scripts('css/style.css')?>">

	<?endif;?>		
	    
		<link rel="stylesheet" href="<?scripts('css/animate.css')?>">
		  <link rel="stylesheet" href="/css/onlymobile.css" media="handheld">
		<?/***End*/?>

	</head>
	
	
	
<?if($html['head']){ echo '<body '.$html['pageType'].'>
			<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MW8S79B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



';} 
	}
	

function HeaderInclude($html=['html'=>'']){	 global $mes, $detectMob;

	if ($html['pageTypeMobile']) {	
		require (__DIR__.'/inc/mobile_header.php'); 	
	}
	else if ($html['pageTypeMobileAll'] AND $detectMob) {	
		require (__DIR__.'/inc/mobile_header.php'); 	
	}
		
	else if ($html['pageType'] ){		
		require (__DIR__.'/inc/haeder_main.php'); 
	}
	else { 
			if ($html['pageTypeMobileAll']!=2) { 
			require (__DIR__.'/inc/header.php'); 
			}
		}
		
	
	
	}
	
function H1page(){ GLOBAL $mes,$SETPAGE;

	echo $mes[$SETPAGE.'-h1'];
}	
	
function FooterAdd($html=['html'=>'','head'=>true]){ GLOBAL $mes, $detectMob;


	if ($html['head']!==false){	$html['head']=true;	}
	
	/*Виводиться на всіх сторінках*/
			if ($detectMob) {	?>

				<!-- Footer -->
				<?if ($html['index']) { include_once(__DIR__.'/inc/footer_main.php');}			
				else {	include_once(__DIR__.'/inc/footer.php');	}?>
				<!-- Footer end-->
			    <?php 
				echo '</div>';	
				if($html['pageType']){ echo '</div>';		}
					?>
				<? echo '</div>';?>
				<?php include (__DIR__.'/inc/mobile_nav.php') ?>

			<?}
				else {?>
			
				<!-- Footer -->
				<?if ($html['index']) { include_once(__DIR__.'/inc/footer_main.php');}			
				else {	include_once(__DIR__.'/inc/footer.php');	}?>
				<!-- Footer end-->
			    <?php 
				echo '</div>';	
				if($html['pageType']){ echo '</div>';		}
					?>
				  <!-- Start menu -->
			    <? include_once(__DIR__.'/inc/nav.php'); ?>
				  <!-- end menu -->
				<? echo '</div>';?>
			
			
			<?}?>
	
	
	<script src="<?scripts('js/jquery-2.1.3.min.js')?>"></script>
	<?if (!$detectMob) {?><script src="<?scripts('js/menu.js')?>" type="text/javascript" ></script><?}?>
	 <? FormInclude('callback')  ?>
	<script src="<?scripts('js/jquery.inputmask.min.js')?>" type="text/javascript" ></script>
	<script src="<?scripts('js/js/intlTelInput.min.js')?>" type="text/javascript" ></script>
	<script src="<?scripts('js/script.js')?>"></script>
				

 
<?	
if($html['html']) { echo $html['html'];		}
if($html['head']!=false){ echo  '</body></html>';}
	}	
	
	
function FooterMobileAdd($html=['html'=>'','head'=>true]){ GLOBAL $mes;

	if ($html['head']!==false){	$html['head']=true;	}

	include_once(__DIR__.'/inc/mobile_footer.php');	?>
<!-- Footer end-->
    <?php include (__DIR__.'/inc/mobile_nav.php') ?>

	<script src="<?scripts('js/jquery-2.1.3.min.js')?>"></script>
	<script src="<?scripts('js/jquery.inputmask.min.js')?>" type="text/javascript" ></script>
   
	<script src="<?scripts('js/js/intlTelInput.min.js')?>" type="text/javascript" ></script>
	 <script src="<?scripts('js/script.js')?>"></script>

 <? FormInclude('callback')  ?>
 
<?	
if($html['html']) { echo $html['html'];		}
if($html['head']!=false){ echo  '</body></html>';}
	}

function AltImgAdd($text=''){
	$t='alt="'.$text.'"';
	echo $t;
}

function UrlAdd($text='', $return='', $a=''){
	$slesh='/';
if ($a) {$slesh='';}

	$t='/'.$_POST['lang'].$text.$slesh;
	if($text==''){$t='/'.$_POST['lang'];}
	if($return) {
		return $t;
		} else {
			echo $t;
		}
}

function MenuAdd($text=''){ global $mes;
	include_once('menu.php');
}

function Getpar($text){
$text = strip_tags($text);
$text = htmlspecialchars($text);
return $text;
}

function ErrorPage404()
    { LangAdd(); global $mes, $SETPAGE;

        header($_SERVER['SERVER_PROTOCOL'].'HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        //echo "<script>document.location.replace('/404');</script>";
		$SETPAGE='404';
		 include("templates/404.php");
		// include($_SERVER['DOCUMENT_ROOT']."index.php");
        exit();
    }

function alternateAdd($url_origin=''){ global $site_url;
	   $url_str = explode("/", $url_origin);
	   if ($url_str[1] == 'ru' || $url_str[1] == 'en'){
	   $st='<link rel="alternate" hreflang="ru" href="'.$site_url.'/ru'.substr($url_origin, 3).'" />
    <link rel="alternate" hreflang="uk" href="'.$site_url.substr($url_origin, 3).'" />
    <link rel="alternate" hreflang="en" href="'.$site_url.'/en'.substr($url_origin, 3).'" />';
 }
	else {
	  $st='<link rel="alternate" hreflang="ru" href="'.$site_url.'/ru'.$url_origin.'" />
    <link rel="alternate" hreflang="uk" href="'.$site_url.$url_origin.'" />
    <link rel="alternate" hreflang="en" href="'.$site_url.'/en'.$url_origin.'" />';
 }
 return $st;
}

function getdefolt($t){
	if(Getpar($t)){ $t=Getpar($t);}else{$t=1;}
	return $t;
}

//For plan		/*План SVG*/
function svg_plan($svg){ GLOBAL $floor_new,$plan;
	$files = scandir($_SERVER['DOCUMENT_ROOT']."/img/houses/doma/dom$plan/");
foreach($files  as $file){
$pos = strpos($file, "$floor_new");
if($pos===false){}else{ $img=$file; }
}
//echo '<pre>'; print_r($files); echo '</pre>';

$rr='img/houses/doma/dom'.$plan.'/'.$img.'/'.$svg.'.php';
	return $rr;
}
	//For plan
function FloorPrevNextAdd($plan,$sec,$floor,$floor_next,$floor_prev, $compas=0){ global $mes ?>
			<?/* 
			 <div class="apartments-compass compass-ico" data-rotate="<?=$compas?>deg" >
				<span class="compass-north"><?=$mes['C']?></span>
				<span class="compass-west"><?=$mes['З']?></span>
				<span class="compass-east"><?=$mes['В']?></span>
				<span class="compass-south"><?=$mes['Ю']?></span>
			</div>
				*/?>
				
		 <div class="select_level wow fadeInUp">
                <div class="select_level_box"></div>
                <p class="select_level_number school"><?=$floor[0]?></p>
                <p class="select_level_name">поверх</p>
                <a class="select_level_left" href="<?UrlAdd('section'.$sec.'/floor'.$floor_prev)?>"><i class="icon-chevron-left"></i></a>
                <a class="select_level_right" href="<?UrlAdd('section'.$sec.'/floor'.$floor_next)?>"><i class="icon-chevron-right"></i></a>
         </div>
			
			<? }
	//For plan
function ParametrFlats(){ 
	
GLOBAL $OPTIONS,$floor_new,$plan,$flat,$plan,$sec,$sleh,$floor,$floor_prev,$floor_next, $db;
$plan=$sec=$id=$floor;
$sleh='/';
$plan=3;
$sec=intval(getdefolt($_POST['section']));
$flat=getdefolt($_POST['flat']);
$floor_new=intval(getdefolt($_POST['floor']));

$floor[0]=$floor_new;
$floor[1]=1;


$result = $db->prepare("SELECT MIN(floor),MAX(floor)  FROM `apartments` WHERE `sec`=$sec AND `buld`=$plan");
$result->execute();     $result->bind_result($si['floor_min'],$si['floor_max']);	$result->fetch(); 	$result->close();

if($floor[0]>=$OPTIONS['MINFLOOR']) {$floor[1]=$floor[0]-1;} else {$floor[0]=$OPTIONS['MINFLOOR'];}
if($floor[0]<$OPTIONS['MAXFLOOR']){$floor[2]=$floor[0]+1;}else{$floor[2]=$OPTIONS['MAXFLOOR'];}
if($floor[2]>=$OPTIONS['MAXFLOOR'] && $floor[0]==$OPTIONS['MAXFLOOR']){$floor_next=$si['floor_min'];}else{$floor_next=$floor[2];}
if($floor[1]<=$OPTIONS['MINFLOOR']-1 && $floor[0]==$OPTIONS['MINFLOOR']){$floor_prev=$si['floor_max'];}else{$floor_prev=$floor[1];}

if ($si['floor_max']<$floor_next) {$floor_next=$si['floor_min'];}
if ($si['floor_min']>$floor_prev) {$floor_prev=$si['floor_max'];}

}

function copyringAdd(){?>
		<div class="footer clearfix">
          <span class="footer_left"><?=$mes['fut-mes1']?></span>
          <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank">
            <img <?LazyLoad ("/img/logo-smart.png")?> alt="smartorange">
          </a>
          <span class="footer_right"><?=$mes['fut-mes2']?></span>
        </div>
		<?}

function servername(){
	$t=$_SERVER['REQUEST_SCHEME'].'://'.str_replace("www.", "", $_SERVER['SERVER_NAME']);
	return $t;
}

function searchPagination($url){

	$page=substr($url, 0,4);
	$val=substr($url, 4);

	if ($page=='page' && $val>1) {
		$_GET['page']=$val;
		return $page;
	}
}

function enterAdminka($correct_link){
	foreach ($_SERVER as $key=>$t) {
	if ($key=='SCRIPT_URL') {$SCRIPT_URL=$t; break;}
}
 $correct_link=substr($SCRIPT_URL, 1);

if (strripos($correct_link, '.php')===false) {
	$correct_link.='index.php';
} 
$dt='admin';

	require($correct_link);

 exit;
}

function LazyLoad ($src='', $option=''){

$t='';
	if (!empty($option['option'])) {$t='data-option="'.$option['option'].'"'; } else {$option['option']='';}
	if (empty($option['class']))  {$option['class']='';}

		echo 'class="'.$option['class'].' b-lazy" '.$t.' src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="'.$src.'"';
}

function img($img='', $lazy=true) {
	
	if ($img) {
		echo 'src="'.$img.'"';
	}
}

function FormInclude($id, $par=''){ GLOBAL $mes;
	$kv=$par;
	$webAd=$_SERVER['SCRIPT_URI'];
		
	 include("inc/form/".$id.".php");
		
}

function cropStrWord($text, $max_words=15, $append = '')
{
       $max_words = $max_words+1;
       $words = explode(' ', $text, $max_words);
       array_pop($words);
       $text = implode(' ', $words) . $append;
	   $text = str_replace("<p>", "",  $text);
	   $text = str_replace("</p>", "", $text);
	   
       return $text;
}

function cropStrStyle($text)
{
       $words = explode(' ', $text);
      // array_pop($words);
     //  $text = implode(' ', $words) . $append;
	$count=count($words);
	   foreach ($words as $key=>$t){
		   
		  // if ($key==$count%2) { $words[$key]='<span class="bold">'.$t.'</span>';	}
		   if ($key==0) { $words[$key]='<span class="bold">'.$t;	}
		   elseif ($key==1) { $words[$key]=$t.'</span>';	}
		   else {$words[$key].=$t;}
		 
	   }
	     $text = implode(' ', $words);

       return $text;
}




	/*
	function brauzer (){ GLOBAL $mes;
		$user_agent = $_SERVER["HTTP_USER_AGENT"];
		echo $user_agent;
		if (strpos($user_agent, "Safari/537.36")===true OR strpos($user_agent, "Firefox") ) {
			echo 'placeholder="Телефон:*"';
		}
	}
	*/
	
	
	
	/** Структура галереї*/
	function Gallery_list($postnumbers=0, $offset=0, $img=array()){
		$i=$n=1;
		
//echo $postnumbers;
//echo $offset;
		
		foreach ($img as $key=>$t) { 
		
		if($offset>=$i ) { $i++; continue;  } 
		if($postnumbers<$n ) { $i++; continue;  }
		
		?>
					<div class="construction_item">
						<div class="construction_item_iner">
							<a class="construction_item_link" data-img='<?=$key?>' href=""></a>
							<div class="construction__info">
								<span class="construction__info_item"><i class="calendar-ico"></i><?=$t['date']?></span>
								<span class="construction__info_item"><i class="clock-ico"></i><?=$t['time']?></span>
							</div>
							<div class="construction__pict">
								<img <?img("/img/main/".$t['img'])?>  alt="">
							</div>
							<p class="construction__text">
								<?=cropStrStyle($t['text'])?>
								</p>
						</div>
					</div>
					
		<?  $n++; $i++; }
	}
	
	function LoadingNews($postnumbers='', $offset='') { 
	LangAdd();
	global $db, $mes;

if($_POST['lang']==''){$lg='ua';}else{$lg=substr($_POST['lang'], 0,2);}
	$result = $db->prepare("SELECT date, news_code,name_news_$lg,description_$lg,img_name,full_text_$lg, min_text_$lg, img_path, img_name FROM news WHERE isActive=0 AND name_news_$lg!='' ORDER BY date DESC");
	$result->execute();
	$result->store_result();	$num=$result->num_rows;

	if ($postnumbers>$num) {$offset=$num;} 
	
	$result = $db->prepare("SELECT date, news_code,name_news_$lg,description_$lg,img_name,full_text_$lg, min_text_$lg, img_path, img_name FROM news WHERE isActive=0 AND name_news_$lg!='' ORDER BY date DESC LIMIT $postnumbers OFFSET $offset");
	$result->execute();
	$result->store_result();	
	$result->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text'],$s['mini_text'],$s['img-min'],$s['img']);
	$i=0; $it=0; 
	
	
	 while ($result->fetch()) { $s['img_news'] = $s['img-min'].'/'.$s['img'];
								$s['img-min'].='/min_'.$s['img'];
								//if(!file_exists($s['img-min'])){$s['img-min']=$s['img_news'];}
								//$s['mini_text']	=cropStrWord($text=$s['text']);
								$s['urls']='news/'.$s['urls'];
								
								$date = new DateTime($s['date']);
								$s['date']=$date->format('d.m.Y');
								
				foreach($s as $key=>$k){			$rez[$key]=$k;	}
								//if($i>=$news_onpage_start AND $i<=$news_onpage_end){	 $ReaNews[$it]=$rez; $it++;	}
								$ReaNews[$it]=$rez; $it++;
	   $i++; }
	   
	   return array('ReaNews'=>$ReaNews, 'num'=>$num) ;
			
		
	}
	
	/**Пагінація*/
	function Pagination ($postnumbers, $offset,$num){
		$page=1;
			if(isset($_GET['page'])) {
			 
	$page=$_GET['page'];
		$offset=$postnumbers*($page-1);
			if ($num<$offset) {
			
				ErrorPage404();
			} 
	}
	//if ($return):
	
	$Pagination=array('last'=>0, 'set'=>$page, 'next'=>0, 'pages'=>1,'startpage'=>1,'endpage'=>1,  'maxpage'=>3);	
	
	if ($num &&$postnumbers<$num) {	$Pagination['pages']=ceil($num/$postnumbers);	} 
	
	//if ($Pagination['maxpage']>$Pagination['pages']) {$Pagination['maxpage']=$Pagination['pages'];}
	
	if ($Pagination['set']<$Pagination['pages']) {	$Pagination['next']=$Pagination['set']+1; 	 } 			
			else { $Pagination['next']=1;	} 
	if ($Pagination['set']>1) {	$Pagination['last']=$Pagination['set']-1;	} 
			else { $Pagination['last']=$Pagination['pages'];	} 
	if ($Pagination['set']>=$Pagination['maxpage']) { $Pagination['startpage']=$Pagination['set']-1; }
	
	
	 $Pagination['endpage']= $Pagination['startpage']+ $Pagination['maxpage']-1;
	 if ($Pagination['endpage']>$Pagination['pages'])	{
					$Pagination['endpage']=$Pagination['pages']; 
					$Pagination['startpage']=$Pagination['endpage']-$Pagination['maxpage']+1;
														}
		
		
		
		
		//**Силка кнопок пагінації*/
		 function PagUrl($url){ global $SETPAGE;
			 if ($url==1) {$url=Urladd($SETPAGE, true);} 
				else {	$url='?page='.$url;	}
			 return $url;
		 }
	
	ob_start();

		if ($Pagination['pages']>1){  /**Last*/
					echo' <ul class="pagination clearfix">
					<li><a href="'.PagUrl($Pagination['last']).'"><i class="icon-long-arrow-left"></i></a></li>';
					
				for ($i=$Pagination['startpage']; $i<=$Pagination['endpage']; $i++) {
					if ($i==$Pagination['set']) {$action='style="background: #b2b2b2;"';} else {$action='';}
					
					  echo  ' <li><a '.$action.' href="'.PagUrl($i).'">'.$i.'</a></li>';
				}
			  
            /**Next*/
			echo ' <li><a href="'.PagUrl($Pagination['next']).'"><i class="icon-long-arrow-right"></i></a></li> </ul>';	
					}	
	$return =ob_get_contents();
	ob_end_clean();	
	
	return $return;

	}
	
	function CacheControls($file){
	if (Cash) {		
		
		Global $result;

		$result=array();
		$write=0;	
		$writeText='';
				
			   ///***Функці пошуку файлів в казаному каталозі**
			   function glob_recursive($dir, $mask){ Global $result;
			   
			   
					foreach(glob($dir.'/*') as $filename){
							if(strtolower(substr($filename, strlen($filename)-strlen($mask), strlen($mask)))==strtolower($mask)) 
			if ($filename==CashFile) {continue;}
						$result[$filename]=filemtime($filename);
						
							if(is_dir($filename)) glob_recursive($filename, $mask);
					}		
				
				}
				
				///*** Пошуку файлів в каталогах з ControlDir**
					foreach (ControlDir as $t){
						
						glob_recursive($t);
					}
					
				$cashFile = parse_ini_file(CashFile);	
				
				foreach($result as $key=>$t) {
					
					if (array_key_exists($key, $cashFile)) {
						if ($cashFile[$key]!=$t) {	$write=1; }
					} else {$write=1;}
				
				$writeText.=$key."=".$t."\r\n";
				}
						
				if ($write) {
					$fp = fopen(CashFile, "w"); // Открываем файл в режиме записи
					$test = fwrite($fp, $writeText); 
				}
				
				if (array_search($file, NotCashlFile) ===false) {  	
					
	header("Cache-Control: public");
	header("Expires: " . date("r", time()+CashTime));

		$last_modified_time = filemtime($file);

		if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time 
			&& $write==0 && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= filemtime(CashFile)){
		    header('HTTP/1.1 304 Not Modified');
		   die; ///*** убили всё, что ниже**
		}
		
		header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');
		
	///***Cesh End**
					}
		
		}
	
	}	
	
global 	 $mes;	