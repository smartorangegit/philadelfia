<?php
ParametrFlats();
GLOBAL $floor_new,$plan,$flat,$plan,$sleh,$floor,$floor_prev,$floor_next, $PDF;

 define('COMERC',0,TRUE);

$floo=$floor[0];
$flat=str_replace("flat", "",$flat);
$flat=str_replace("/", "",$flat);

 $flat_level=1;
 $flat_mas = explode("-", $flat);
 $flat=$flat_mas[0];

 $flat_mas = explode(".", $flat_mas[1]);
 $flat_id=$flat_mas[0];		 $flat_level_p=$flat_mas[1];

 if(empty($flat_level_p)){$flat_level_p=0;}
$poverx=$floor[0]-$flat_level_p;

$result = $db->prepare("SELECT floor, 	sec, 	visible ,	type, 	all_room ,	life_room, img, room1, 	room2, 	room3, 	room4 ,	room5,
 room6, 	room7, 	room8, 	room9 ,	room10, room11,room12,room13,room14,room15,room16,room17,room18,room19,room20,
 room21,room22,room23,room24,room25,room26,room27,room28,room29,room30,room31,
 level,id, rooms FROM `apartments` WHERE buld=$plan AND `floor`=$floor[0]-$flat_level_p AND `sec`=$sec AND `id`= '$flat_id'");
 
 

 
	$result->execute(); 	$result->store_result();
	if (!$result->num_rows) {ErrorPage404();}
	
   $result->execute();


    $result->bind_result($s['floor'],$s['sec'],$s['visible'],$s['number'],$s['all_room'],$s['life_room'],$s['img'],$s['room1'],$s['room2'],$s['room3'],$s['room4'],$s['room5'],
	$s['room6'],$s['room7'],$s['room8'],$s['room9'],$s['room10'],$s['room11'],$s['room12'],$s['room13'],$s['room14'],$s['room15'],
	$s['room16'],$s['room17'],$s['room18'],$s['room19'],$s['room20'],$s['room21'],$s['room22'],$s['room23'],$s['room24'],$s['room25'],
	$s['room26'],$s['room27'],$s['room28'],$s['room29'],$s['room30'],$s['room31'],$s['level'],$s['id'],$s['rooms']);
	$result->fetch();
 $result->close();
 $level=$s['level'];

 $s['img']= str_replace('.png', "",  $s['img']);
 $s['img']= str_replace('.jpg', "",  $s['img']);
$number=$s['number'];
$id=$s['id'];
//$s['room']= mb_substr($s['number'],0,-1,'UTF-8');
//$s['room']= str_replace('.', "",  $s['room']);
$s['room']=$s['rooms'];
$pdf['number']=$s['room'];

 $img_flat='/img/houses/house'.$plan.'_black/floor'.$s['floor'].'/'.$s['img'].'.png';
$s['pdf']=$img_flat;


  $level_floor=$s['floor'];
	//foreach($s as $k){
		//	$rez=$rez.$k;
		//}
	//echo $con;
//$my_id=$s['id'];

	/*$mas1=['��������','�������',
		'���������','�����','³������','�������','������� 2','������� 3','������','��������','�����','�����','������','������ 2','����������','���������� 2','ʳ�����','�����-�������','������','���������� 3','�����',
'г���� 2','���������','��������','������� 1','������� 2','�����','	�����������','	�������','	������','	������','	������� 3','	³������','	�����','','','','','','','','',
'г���� 3','�����','������','���','','','','','','',''];*/

for($m=0; $m<53; $m++): $mas1[$m]=$mes['pl-mes'][$m];		endfor;

	$mas2=[$s['all_room'],$s['life_room'],$s['room1'],$s['room2'],$s['room3'],$s['room4'],$s['room5'],
	$s['room6'],$s['room7'],$s['room8'],$s['room9'],$s['room10'],$s['room11'],$s['room12'],$s['room13'],$s['room14'],$s['room15'],
	$s['room16'],$s['room17'],$s['room18'],$s['room19'],$s['room20'],$s['room21'],$s['room22'],$s['room23'],$s['room24'],$s['room25'],
	$s['room26'],$s['room27'],$s['room28'],$s['room29'],$s['room30'],$s['room31']];
$all_room=$s['all_room'];
$life_room=$s['life_room'];
	if($s['level']>1){
	 $result = $db->prepare("SELECT room1, 	room2, 	room3, 	room4 ,	room5,room6,room7,room8,room9,room10,
	 room11,room12,room13,room14,room15,room16,room17,room18,room19,room20,
	 room21,room22,room23,room24,room25,room26,room27,room28,room29,room30
	 FROM `apartments_level` WHERE `id_flat`=$s[id]");
   $result->execute();
    $result->bind_result($sl['room1'],$sl['room2'],$sl['room3'],$sl['room4'],$sl['room5'],$sl['room6'],$sl['room7'],$sl['room8'],$sl['room9'],$sl['room10'],
						$sl['room11'],$sl['room12'],$sl['room13'],$sl['room14'],$sl['room15'],$sl['room16'],$sl['room17'],$sl['room18'],$sl['room19'],$sl['room20'],
						$sl['room21'],$sl['room22'],$sl['room23'],$sl['room24'],$sl['room25'],$sl['room26'],$sl['room27'],$sl['room28'],$sl['room29'],$sl['room30']
);
	$result->fetch();
 $result->close(); 	$i=count($mas2); /*��� 2-�� ����*/ //$mas2[$i]='<br>';

		foreach ($sl as $key=>$k) { $i++;
		//��� 3-�� ���� � 21 ���������
	//if($key=='room21' AND $s['level']>2){$mas2[$i]='<br>'; $i++;}
			$mas2[$i]=$k;
		}
	}

/*

	$print_pdf='';  $print_pdf2=''; $i=0; $m=1;
						foreach($mas2 as $k=>$n){ $j=$k;
						if(!empty($n)){ $st='';
						if($k==0):
								if($level==1):	$st='style="padding-top:30px;"'; else: $st=''; endif;
						$print_pdf.= '<div class="table-item'.$m.'" '.$st.'><ul>';  $print_pdf2.= '<div class="table-item'.($m+1).'" '.$st.'><ul>'; endif;
						if($level>1 AND $k==0):  $print_pdf.='<li class="table-item1-li">'.$mes['pl-mes18'].'</li>'; $print_pdf2.='<li class="table-item1-li">1</li>'; $i++;
						 endif;

						$pos = strripos($mas1[$k], $mes['pl-mes18']);

if ($pos === false) {$raz=''; $zn=$mas1[$k];}else{$raz=' class="table-item1-li"'; $zn=$mes['pl-mes18']; $n=substr($mas1[$k], -1);

	}

	if (COMERC) {if ($k==21 OR $k==42) { $zn=$mes['pl-mes18'];} else { $zn=$mas1[0];}}

					if($k>1){						$print_pdf.='<li'.$raz.'>'.$zn.'</li>';   $print_pdf2.='<li'.$raz.'>'.$n.'</li>';
					}
					$kk=0;
						}
					}
					if($kk==0){  $print_pdf.= '</ul></div>'.$print_pdf2.'</ul></div>';  }
	*/				
					$pdf['print']=$mas2;




$result = $db->prepare("SELECT img,  compas   FROM `section` WHERE `sec`=$sec AND `build`=$plan AND  `floor`=$poverx ");
   $result->execute();     $result->bind_result($si['img'], $si['compas']);	$result->fetch(); 	$result->close();

  // $SORT=explode(",", $si['sort']); //����� ����������

        if($floor[0]>1){$pov1="OR (`floor`=($floor[0]-$flat_level_p)-1 AND `level`=2)OR (`floor`=($floor[0]-$flat_level_p)-2 AND `level`=3) OR (`floor`=($floor[0]-$flat_level_p)-1 AND `level`=3)";}else{$pov1='';}

 $rez=[]; $REZULT=[]; $n=0;
 
$result = $db->prepare("SELECT floor, visible,type,buld,level,all_room,life_room, id, sorts, onSale   FROM `apartments`
WHERE buld=$plan AND `sec`=$sec AND (`floor`=$floor[0]-$flat_level_p $pov1) ORDER BY sorts ASC");
   $result->execute();
    $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['sorts'],$s['sales']); while($result->fetch()){   $i=0;
		foreach($s as $key=>$k){
			$rez[$key]=$k;
		}
		$REZULT[$n]=$rez;		$n++;
		}
 $result->close();


//��� SVG
 foreach ($REZULT as $key=>$s) {
	 if($flat_level_p>0){$t=".".$flat_level_p;}else{$t='';}
 if ($s['sales']) 	{
	 
					$URLP[$key]=UrlAdd('section'.$sec.'/floor'.($s['floor']+$flat_level_p).'/flat'.$s['number'].'-'.$s['id'].$t, TRUE);
 }
					
 else {$URLP[$key]=UrlAdd('section'.$sec.'/floor'.($s['floor']+$flat_level_p), TRUE);}
	$clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id'].'_';
		$clas[$key]=" ".$clas_js[$key];
		if($s['id']==$flat_id){$clas[$key].=' st-on';}
		//if($s['number']==$flat){$clas[$key].=' st-on';}
		$clas_css[$key]="clas".$sec."_".$s['floor']."_".$s['id'];

//������� 		//$URLP[$key].='--'.$s['sort']."-".($key+1);
	}
	$pdf['img']=$s['img'];

			//*** ��� PDF **/
ob_start(); $NOIMG=1;
include($_SERVER['DOCUMENT_ROOT'].'/'.svg_plan($si['img']));
$svg_min_plan= ob_get_clean();


$st_open='fill: #2a5c6c; opacity: 0.8;'; //����� ��� ������� ������� ��������
$st_close='fill: #DDDDDD; opacity: 0.5;'; //����� ��� ������� ��� ������� 


foreach ($REZULT as $key=>$s) {

	$clas_js[$key]="clas".$sec."_".$s['floor']."_".$s['id'].'_';
		$clas[$key]=" ".$clas_js[$key];

		$zamena='" style="'.$st_close;
		if ($s['id']==$flat_id) {
			$clas[$key].=' st-on';  $zamena='" style="'.$st_open;
		}
$svg_min_plan = str_replace($clas[$key], $zamena, $svg_min_plan);
	}

ob_start();

require($DIR."pdf/html.php");
$html= ob_get_clean();


$_SESSION['svg_min_plan']=$html;

$NOIMG=0;
$kv=$site_url.UrlAdd('section'.$sec.'/floor'.$floor[0].'/flat'.$number.'-'.$id.'/', 1, true);

