<?php  session_start(); 
require_once('function.php');   LangAdd(); global 	 $mes;
/* переменные для проверки*/

	function clear_phone($phone){
		
		$phone=	str_replace("+(38)", "", $phone);
		$phone = str_replace("-", "", $phone);
        $phone = str_replace(" ", "", $phone);
        
			return $phone;
	}

	 $utm=array(
		'utm_source' ,
		'utm_medium',
		'utm_campaign' ,
		'utm_term', 
		'utm_content' 
		);	
	$utms=array();	
	foreach($utm as $key=>$t)
	{
		if (isset($_SESSION[$t]))
		{
			$utms[]=$_SESSION[$t];
		}
		else
		{
			$utms[]='no_utm';
		}			
	}

$day = date("Y-m-d H:i:s",strtotime("-1 hour")); 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = clear_phone($_POST['tel']);
$kv= $_POST['kv'];
$count=$_POST['count'];
	
	//echo '<pre>'; print_r($_POST); echo '</pre>'; 

$dat = date("Y-m-d H:i:s");  
$good = 0;
/**/
$time = date("H:i:s");
$Id = 1; //54  1 робочий
define('CRM_HOST', 'riverside-development.bitrix24.ua'); // Домен срм системы smartorange.bitrix24.ru riverside-development.bitrix24.ua
define('CRM_PORT', '443'); 
define('CRM_PATH', '/crm/configs/import/lead.php'); 
define('CRM_LOGIN', 'gav.sqrt@gmail.com');  // логин
define('CRM_PASSWORD', '4561210_gav'); // пароль

	
 
/********************************************************************************************/
if(empty($_POST['text']))
{
$_POST['text']=$_POST['metka'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){


    if(empty($name) OR empty($email) OR $count<2)
    {
		 echo 'Заполены не все поля';
       }	
	   else  {
		 // получаем данные из полей и задаем название лида
    $postData = array(
        'TITLE' => $_POST['metka'], // сохраняем нашу метку и формируем заголовок лида
        'NAME' => $_POST['name'],   // сохраняем имя
        'PHONE_WORK' =>$phone, // сохраняем телефон
        'EMAIL_WORK' => $_POST['email'], // сохраняем почту
        'UF_CRM_1485774805' => $_POST['inn'], // сохраняем ИНН UF_CRM_1485437157
	'ASSIGNED_BY_ID' => $Id,
	'ADDRESS' => $_POST['webad'],
	'UF_CRM_1485774841' => $time, //UF_CRM_1485510398
	'UF_CRM_1485774828' => $_POST['text'], //UF_CRM_1485507619
		'UF_CRM_1517487869'=>$utms[0],
		'UF_CRM_1517487957'=>$utms[1],
		'UF_CRM_1517488014'=>$utms[2],
		'UF_CRM_1517489120'=>$utms[3],
		'UF_CRM_1517489335'=>$utms[4]	
    );
	
function addintbd($name,$phone,$formData,$typs,$kv,$crm=0){ GLOBAL $db;

date_default_timezone_set('Europe/Kiev');
$today = date("Y-m-d H:i:s");  
$ip=$_SERVER["REMOTE_ADDR"];

$phone = clear_phone($_POST['tel']);

$name = $_POST['name'];
$formData = $_POST['text'];
$email=$_POST['email'];
$typs=$_POST['typ'];

$result = $db->query("INSERT INTO `calls` (`dates`, `ip`, `name`, `fhonenumber`, `texts`, `typs`, `email`,`kv`,`crm`) VALUES ('$today', '$ip', '$name', '$phone', '$formData', '$typs', '$email','$kv','$crm')");
		return $result->insert_id; 	
}
 
    // авторизация, проверка логина и пароля
    if (defined('CRM_AUTH'))
    {
        $postData['AUTH'] = CRM_AUTH;
    }
    else
    {
        $postData['LOGIN'] = CRM_LOGIN;
        $postData['PASSWORD'] = CRM_PASSWORD;
    }
 
    $fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
    if ($fp)
    {

	$check = $db->prepare("SELECT fhonenumber FROM calls where dates >= CURRENT_TIME - INTERVAL 1.5 HOUR");
    $check->execute();
	$check->bind_result($myrow['fhonenumber']);
        // формируем и шифруем строку с данными из формы
        $strPostData = '';
        foreach ($postData as $key => $value)
            $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
            $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
            $str .= "Host: ".CRM_HOST."\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: ".strlen($strPostData)."\r\n";
            $str .= "Connection: close\r\n\r\n";
 
        $str .= $strPostData;
		 while ($check->fetch()) 
		{
		if ($phone==$myrow['fhonenumber']) {
			//echo "Нашел номер";
            $good = 1;
			
		}
		}
		
		$insert_id=addintbd($name,$phone,$formData, $typs, $kv);
		
        if($good == 1){
        // если 1 то номер есть в базе и за последний час человек оставлял заявку и мы его записываем в базу но не шлем в CRM
	echo $mes['Сообщение отправлено'];
        }
        else{
        //если такого номера нет или он не звонил за последний час, добавляем в базу и отправляем в CRM
        // отправляем запрос в срм систему
      fwrite($fp, $str );
        $result = '';
        while (!feof($fp))
        {
            $result .= fgets($fp, 128);
        }
        fclose($fp);
 
        $response = explode("\r\n\r\n", $result);
        $output = '<pre>'.print_r($response[1], 1).'</pre>';
		
		$error=str_replace("'", '"',$response[1]);
		$error=json_decode($error);
	
		
			ob_start();
			echo '<pre>'; print_r($response); echo '</pre>'; 	
			$text=ob_get_contents ();
			ob_clean ();
			
			$format = "\n\n[" . date('Y-m-d H:i:s') . "]\nTel: ".$phone."\n";
			$message=$format."\n".$result."\n";

			$path = $_SERVER['DOCUMENT_ROOT']."/log/call.log";
			file_put_contents($path, $message,FILE_APPEND);
			if ($error->error) {$crm=$error->error;} else {$crm=0;}
								
			if ($error->error!=201) {
				$mail = array(  
				'to' => "vitaliyzell@gmail.com",  
				'subject' => "ОШИБКА ОТПРАВКИ ЛИДА В CRM",  
				'message' => 'Ошибка отправки лида в CRM с формы "'.$_POST['metka'].'" для номера '.$phone,  
				'headers' => "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: ОШИБКА ОТПРАВКИ ЛИДА В CRM <errorloger@email.ua>\r\n"
					);  

				$rez=mail($mail['to'], $mail['subject'], $mail['message'], iconv ('utf-8', 'windows-1251', $mail['headers']));
			}
			
	   // addintbd($name,$phone,$formData, $typs, $kv,$crm);
		$result = $db->query("UPDATE `calls` SET `crm` = $crm WHERE `id` = $insert_id;");


	echo $mes['Сообщение отправлено'];
}
    }
    else
    {
        echo 'Connection Failed! '.$errstr.' ('.$errno.')';
    } 
	
 }
        

   
   
    
}
?>
