var datetimepickerFactory=function(L){"use strict";var s={i18n:{ar:{months:["كانون الثاني","شباط","آذار","نيسان","مايو","حزيران","تموز","آب","أيلول","تشرين الأول","تشرين الثاني","كانون الأول"],dayOfWeekShort:["ن","ث","ع","خ","ج","س","ح"],dayOfWeek:["الأحد","الاثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت","الأحد"]},ro:{months:["Ianuarie","Februarie","Martie","Aprilie","Mai","Iunie","Iulie","August","Septembrie","Octombrie","Noiembrie","Decembrie"],dayOfWeekShort:["Du","Lu","Ma","Mi","Jo","Vi","Sâ"],dayOfWeek:["Duminică","Luni","Marţi","Miercuri","Joi","Vineri","Sâmbătă"]},id:{months:["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],dayOfWeekShort:["Min","Sen","Sel","Rab","Kam","Jum","Sab"],dayOfWeek:["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"]},is:{months:["Janúar","Febrúar","Mars","Apríl","Maí","Júní","Júlí","Ágúst","September","Október","Nóvember","Desember"],dayOfWeekShort:["Sun","Mán","Þrið","Mið","Fim","Fös","Lau"],dayOfWeek:["Sunnudagur","Mánudagur","Þriðjudagur","Miðvikudagur","Fimmtudagur","Föstudagur","Laugardagur"]},bg:{months:["Януари","Февруари","Март","Април","Май","Юни","Юли","Август","Септември","Октомври","Ноември","Декември"],dayOfWeekShort:["Нд","Пн","Вт","Ср","Чт","Пт","Сб"],dayOfWeek:["Неделя","Понеделник","Вторник","Сряда","Четвъртък","Петък","Събота"]},fa:{months:["فروردین","اردیبهشت","خرداد","تیر","مرداد","شهریور","مهر","آبان","آذر","دی","بهمن","اسفند"],dayOfWeekShort:["یکشنبه","دوشنبه","سه شنبه","چهارشنبه","پنجشنبه","جمعه","شنبه"],dayOfWeek:["یک‌شنبه","دوشنبه","سه‌شنبه","چهارشنبه","پنج‌شنبه","جمعه","شنبه","یک‌شنبه"]},ru:{months:["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],dayOfWeekShort:["Вс","Пн","Вт","Ср","Чт","Пт","Сб"],dayOfWeek:["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"]},uk:{months:["Січень","Лютий","Березень","Квітень","Травень","Червень","Липень","Серпень","Вересень","Жовтень","Листопад","Грудень"],dayOfWeekShort:["Ндл","Пнд","Втр","Срд","Чтв","Птн","Сбт"],dayOfWeek:["Неділя","Понеділок","Вівторок","Середа","Четвер","П'ятниця","Субота"]},en:{months:["January","February","March","April","May","June","July","August","September","October","November","December"],dayOfWeekShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dayOfWeek:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]},el:{months:["Ιανουάριος","Φεβρουάριος","Μάρτιος","Απρίλιος","Μάιος","Ιούνιος","Ιούλιος","Αύγουστος","Σεπτέμβριος","Οκτώβριος","Νοέμβριος","Δεκέμβριος"],dayOfWeekShort:["Κυρ","Δευ","Τρι","Τετ","Πεμ","Παρ","Σαβ"],dayOfWeek:["Κυριακή","Δευτέρα","Τρίτη","Τετάρτη","Πέμπτη","Παρασκευή","Σάββατο"]},de:{months:["Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember"],dayOfWeekShort:["So","Mo","Di","Mi","Do","Fr","Sa"],dayOfWeek:["Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag"]},nl:{months:["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"],dayOfWeekShort:["zo","ma","di","wo","do","vr","za"],dayOfWeek:["zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag"]},tr:{months:["Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık"],dayOfWeekShort:["Paz","Pts","Sal","Çar","Per","Cum","Cts"],dayOfWeek:["Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi"]},fr:{months:["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"],dayOfWeekShort:["Dim","Lun","Mar","Mer","Jeu","Ven","Sam"],dayOfWeek:["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"]},es:{months:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],dayOfWeekShort:["Dom","Lun","Mar","Mié","Jue","Vie","Sáb"],dayOfWeek:["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"]},th:{months:["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],dayOfWeekShort:["อา.","จ.","อ.","พ.","พฤ.","ศ.","ส."],dayOfWeek:["อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์","อาทิตย์"]},pl:{months:["styczeń","luty","marzec","kwiecień","maj","czerwiec","lipiec","sierpień","wrzesień","październik","listopad","grudzień"],dayOfWeekShort:["nd","pn","wt","śr","cz","pt","sb"],dayOfWeek:["niedziela","poniedziałek","wtorek","środa","czwartek","piątek","sobota"]},pt:{months:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],dayOfWeekShort:["Dom","Seg","Ter","Qua","Qui","Sex","Sab"],dayOfWeek:["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado"]},ch:{months:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],dayOfWeekShort:["日","一","二","三","四","五","六"]},se:{months:["Januari","Februari","Mars","April","Maj","Juni","Juli","Augusti","September","Oktober","November","December"],dayOfWeekShort:["Sön","Mån","Tis","Ons","Tor","Fre","Lör"]},km:{months:["មករា​","កុម្ភៈ","មិនា​","មេសា​","ឧសភា​","មិថុនា​","កក្កដា​","សីហា​","កញ្ញា​","តុលា​","វិច្ឆិកា","ធ្នូ​"],dayOfWeekShort:["អាទិ​","ច័ន្ទ​","អង្គារ​","ពុធ​","ព្រហ​​","សុក្រ​","សៅរ៍"],dayOfWeek:["អាទិត្យ​","ច័ន្ទ​","អង្គារ​","ពុធ​","ព្រហស្បតិ៍​","សុក្រ​","សៅរ៍"]},kr:{months:["1월","2월","3월","4월","5월","6월","7월","8월","9월","10월","11월","12월"],dayOfWeekShort:["일","월","화","수","목","금","토"],dayOfWeek:["일요일","월요일","화요일","수요일","목요일","금요일","토요일"]},it:{months:["Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre"],dayOfWeekShort:["Dom","Lun","Mar","Mer","Gio","Ven","Sab"],dayOfWeek:["Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato"]},da:{months:["Januar","Februar","Marts","April","Maj","Juni","Juli","August","September","Oktober","November","December"],dayOfWeekShort:["Søn","Man","Tir","Ons","Tor","Fre","Lør"],dayOfWeek:["søndag","mandag","tirsdag","onsdag","torsdag","fredag","lørdag"]},no:{months:["Januar","Februar","Mars","April","Mai","Juni","Juli","August","September","Oktober","November","Desember"],dayOfWeekShort:["Søn","Man","Tir","Ons","Tor","Fre","Lør"],dayOfWeek:["Søndag","Mandag","Tirsdag","Onsdag","Torsdag","Fredag","Lørdag"]},ja:{months:["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"],dayOfWeekShort:["日","月","火","水","木","金","土"],dayOfWeek:["日曜","月曜","火曜","水曜","木曜","金曜","土曜"]},vi:{months:["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],dayOfWeekShort:["CN","T2","T3","T4","T5","T6","T7"],dayOfWeek:["Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy"]},sl:{months:["Januar","Februar","Marec","April","Maj","Junij","Julij","Avgust","September","Oktober","November","December"],dayOfWeekShort:["Ned","Pon","Tor","Sre","Čet","Pet","Sob"],dayOfWeek:["Nedelja","Ponedeljek","Torek","Sreda","Četrtek","Petek","Sobota"]},cs:{months:["Leden","Únor","Březen","Duben","Květen","Červen","Červenec","Srpen","Září","Říjen","Listopad","Prosinec"],dayOfWeekShort:["Ne","Po","Út","St","Čt","Pá","So"]},hu:{months:["Január","Február","Március","Április","Május","Június","Július","Augusztus","Szeptember","Október","November","December"],dayOfWeekShort:["Va","Hé","Ke","Sze","Cs","Pé","Szo"],dayOfWeek:["vasárnap","hétfő","kedd","szerda","csütörtök","péntek","szombat"]},az:{months:["Yanvar","Fevral","Mart","Aprel","May","Iyun","Iyul","Avqust","Sentyabr","Oktyabr","Noyabr","Dekabr"],dayOfWeekShort:["B","Be","Ça","Ç","Ca","C","Ş"],dayOfWeek:["Bazar","Bazar ertəsi","Çərşənbə axşamı","Çərşənbə","Cümə axşamı","Cümə","Şənbə"]},bs:{months:["Januar","Februar","Mart","April","Maj","Jun","Jul","Avgust","Septembar","Oktobar","Novembar","Decembar"],dayOfWeekShort:["Ned","Pon","Uto","Sri","Čet","Pet","Sub"],dayOfWeek:["Nedjelja","Ponedjeljak","Utorak","Srijeda","Četvrtak","Petak","Subota"]},ca:{months:["Gener","Febrer","Març","Abril","Maig","Juny","Juliol","Agost","Setembre","Octubre","Novembre","Desembre"],dayOfWeekShort:["Dg","Dl","Dt","Dc","Dj","Dv","Ds"],dayOfWeek:["Diumenge","Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte"]},"en-GB":{months:["January","February","March","April","May","June","July","August","September","October","November","December"],dayOfWeekShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dayOfWeek:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]},et:{months:["Jaanuar","Veebruar","Märts","Aprill","Mai","Juuni","Juuli","August","September","Oktoober","November","Detsember"],dayOfWeekShort:["P","E","T","K","N","R","L"],dayOfWeek:["Pühapäev","Esmaspäev","Teisipäev","Kolmapäev","Neljapäev","Reede","Laupäev"]},eu:{months:["Urtarrila","Otsaila","Martxoa","Apirila","Maiatza","Ekaina","Uztaila","Abuztua","Iraila","Urria","Azaroa","Abendua"],dayOfWeekShort:["Ig.","Al.","Ar.","Az.","Og.","Or.","La."],dayOfWeek:["Igandea","Astelehena","Asteartea","Asteazkena","Osteguna","Ostirala","Larunbata"]},fi:{months:["Tammikuu","Helmikuu","Maaliskuu","Huhtikuu","Toukokuu","Kesäkuu","Heinäkuu","Elokuu","Syyskuu","Lokakuu","Marraskuu","Joulukuu"],dayOfWeekShort:["Su","Ma","Ti","Ke","To","Pe","La"],dayOfWeek:["sunnuntai","maanantai","tiistai","keskiviikko","torstai","perjantai","lauantai"]},gl:{months:["Xan","Feb","Maz","Abr","Mai","Xun","Xul","Ago","Set","Out","Nov","Dec"],dayOfWeekShort:["Dom","Lun","Mar","Mer","Xov","Ven","Sab"],dayOfWeek:["Domingo","Luns","Martes","Mércores","Xoves","Venres","Sábado"]},hr:{months:["Siječanj","Veljača","Ožujak","Travanj","Svibanj","Lipanj","Srpanj","Kolovoz","Rujan","Listopad","Studeni","Prosinac"],dayOfWeekShort:["Ned","Pon","Uto","Sri","Čet","Pet","Sub"],dayOfWeek:["Nedjelja","Ponedjeljak","Utorak","Srijeda","Četvrtak","Petak","Subota"]},ko:{months:["1월","2월","3월","4월","5월","6월","7월","8월","9월","10월","11월","12월"],dayOfWeekShort:["일","월","화","수","목","금","토"],dayOfWeek:["일요일","월요일","화요일","수요일","목요일","금요일","토요일"]},lt:{months:["Sausio","Vasario","Kovo","Balandžio","Gegužės","Birželio","Liepos","Rugpjūčio","Rugsėjo","Spalio","Lapkričio","Gruodžio"],dayOfWeekShort:["Sek","Pir","Ant","Tre","Ket","Pen","Šeš"],dayOfWeek:["Sekmadienis","Pirmadienis","Antradienis","Trečiadienis","Ketvirtadienis","Penktadienis","Šeštadienis"]},lv:{months:["Janvāris","Februāris","Marts","Aprīlis ","Maijs","Jūnijs","Jūlijs","Augusts","Septembris","Oktobris","Novembris","Decembris"],dayOfWeekShort:["Sv","Pr","Ot","Tr","Ct","Pk","St"],dayOfWeek:["Svētdiena","Pirmdiena","Otrdiena","Trešdiena","Ceturtdiena","Piektdiena","Sestdiena"]},mk:{months:["јануари","февруари","март","април","мај","јуни","јули","август","септември","октомври","ноември","декември"],dayOfWeekShort:["нед","пон","вто","сре","чет","пет","саб"],dayOfWeek:["Недела","Понеделник","Вторник","Среда","Четврток","Петок","Сабота"]},mn:{months:["1-р сар","2-р сар","3-р сар","4-р сар","5-р сар","6-р сар","7-р сар","8-р сар","9-р сар","10-р сар","11-р сар","12-р сар"],dayOfWeekShort:["Дав","Мяг","Лха","Пүр","Бсн","Бям","Ням"],dayOfWeek:["Даваа","Мягмар","Лхагва","Пүрэв","Баасан","Бямба","Ням"]},"pt-BR":{months:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],dayOfWeekShort:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],dayOfWeek:["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado"]},sk:{months:["Január","Február","Marec","Apríl","Máj","Jún","Júl","August","September","Október","November","December"],dayOfWeekShort:["Ne","Po","Ut","St","Št","Pi","So"],dayOfWeek:["Nedeľa","Pondelok","Utorok","Streda","Štvrtok","Piatok","Sobota"]},sq:{months:["Janar","Shkurt","Mars","Prill","Maj","Qershor","Korrik","Gusht","Shtator","Tetor","Nëntor","Dhjetor"],dayOfWeekShort:["Die","Hën","Mar","Mër","Enj","Pre","Shtu"],dayOfWeek:["E Diel","E Hënë","E Martē","E Mërkurë","E Enjte","E Premte","E Shtunë"]},"sr-YU":{months:["Januar","Februar","Mart","April","Maj","Jun","Jul","Avgust","Septembar","Oktobar","Novembar","Decembar"],dayOfWeekShort:["Ned","Pon","Uto","Sre","čet","Pet","Sub"],dayOfWeek:["Nedelja","Ponedeljak","Utorak","Sreda","Četvrtak","Petak","Subota"]},sr:{months:["јануар","фебруар","март","април","мај","јун","јул","август","септембар","октобар","новембар","децембар"],dayOfWeekShort:["нед","пон","уто","сре","чет","пет","суб"],dayOfWeek:["Недеља","Понедељак","Уторак","Среда","Четвртак","Петак","Субота"]},sv:{months:["Januari","Februari","Mars","April","Maj","Juni","Juli","Augusti","September","Oktober","November","December"],dayOfWeekShort:["Sön","Mån","Tis","Ons","Tor","Fre","Lör"],dayOfWeek:["Söndag","Måndag","Tisdag","Onsdag","Torsdag","Fredag","Lördag"]},"zh-TW":{months:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],dayOfWeekShort:["日","一","二","三","四","五","六"],dayOfWeek:["星期日","星期一","星期二","星期三","星期四","星期五","星期六"]},zh:{months:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],dayOfWeekShort:["日","一","二","三","四","五","六"],dayOfWeek:["星期日","星期一","星期二","星期三","星期四","星期五","星期六"]},ug:{months:["1-ئاي","2-ئاي","3-ئاي","4-ئاي","5-ئاي","6-ئاي","7-ئاي","8-ئاي","9-ئاي","10-ئاي","11-ئاي","12-ئاي"],dayOfWeek:["يەكشەنبە","دۈشەنبە","سەيشەنبە","چارشەنبە","پەيشەنبە","جۈمە","شەنبە"]},he:{months:["ינואר","פברואר","מרץ","אפריל","מאי","יוני","יולי","אוגוסט","ספטמבר","אוקטובר","נובמבר","דצמבר"],dayOfWeekShort:["א'","ב'","ג'","ד'","ה'","ו'","שבת"],dayOfWeek:["ראשון","שני","שלישי","רביעי","חמישי","שישי","שבת","ראשון"]},hy:{months:["Հունվար","Փետրվար","Մարտ","Ապրիլ","Մայիս","Հունիս","Հուլիս","Օգոստոս","Սեպտեմբեր","Հոկտեմբեր","Նոյեմբեր","Դեկտեմբեր"],dayOfWeekShort:["Կի","Երկ","Երք","Չոր","Հնգ","Ուրբ","Շբթ"],dayOfWeek:["Կիրակի","Երկուշաբթի","Երեքշաբթի","Չորեքշաբթի","Հինգշաբթի","Ուրբաթ","Շաբաթ"]},kg:{months:["Үчтүн айы","Бирдин айы","Жалган Куран","Чын Куран","Бугу","Кулжа","Теке","Баш Оона","Аяк Оона","Тогуздун айы","Жетинин айы","Бештин айы"],dayOfWeekShort:["Жек","Дүй","Шей","Шар","Бей","Жум","Ише"],dayOfWeek:["Жекшемб","Дүйшөмб","Шейшемб","Шаршемб","Бейшемби","Жума","Ишенб"]},rm:{months:["Schaner","Favrer","Mars","Avrigl","Matg","Zercladur","Fanadur","Avust","Settember","October","November","December"],dayOfWeekShort:["Du","Gli","Ma","Me","Gie","Ve","So"],dayOfWeek:["Dumengia","Glindesdi","Mardi","Mesemna","Gievgia","Venderdi","Sonda"]},ka:{months:["იანვარი","თებერვალი","მარტი","აპრილი","მაისი","ივნისი","ივლისი","აგვისტო","სექტემბერი","ოქტომბერი","ნოემბერი","დეკემბერი"],dayOfWeekShort:["კვ","ორშ","სამშ","ოთხ","ხუთ","პარ","შაბ"],dayOfWeek:["კვირა","ორშაბათი","სამშაბათი","ოთხშაბათი","ხუთშაბათი","პარასკევი","შაბათი"]}},ownerDocument:document,contentWindow:window,value:"",rtl:!1,format:"Y/m/d H:i",formatTime:"H:i",formatDate:"Y/m/d",startDate:!1,step:60,monthChangeSpinner:!0,closeOnDateSelect:!1,closeOnTimeSelect:!0,closeOnWithoutClick:!0,closeOnInputClick:!0,openOnFocus:!0,timepicker:!0,datepicker:!0,weeks:!1,defaultTime:!1,defaultDate:!1,minDate:!1,maxDate:!1,minTime:!1,maxTime:!1,minDateTime:!1,maxDateTime:!1,allowTimes:[],opened:!1,initTime:!0,inline:!1,theme:"",touchMovedThreshold:5,onSelectDate:function(){},onSelectTime:function(){},onChangeMonth:function(){},onGetWeekOfYear:function(){},onChangeYear:function(){},onChangeDateTime:function(){},onShow:function(){},onClose:function(){},onGenerate:function(){},withoutCopyright:!0,inverseButton:!1,hours12:!1,next:"xdsoft_next",prev:"xdsoft_prev",dayOfWeekStart:0,parentID:"body",timeHeightInTimePicker:25,timepickerScrollbar:!0,todayButton:!0,prevButton:!0,nextButton:!0,defaultSelect:!0,scrollMonth:!0,scrollTime:!0,scrollInput:!0,lazyInit:!1,mask:!1,validateOnBlur:!0,allowBlank:!0,yearStart:1950,yearEnd:2050,monthStart:0,monthEnd:11,style:"",id:"",fixed:!1,roundTime:"round",className:"",weekends:[],highlightedDates:[],highlightedPeriods:[],allowDates:[],allowDateRe:null,disabledDates:[],disabledWeekDays:[],yearOffset:0,beforeShowDay:null,enterLikeTab:!0,showApplyButton:!1},E=null,o=null,V="en",a={meridiem:["AM","PM"]},r=function(){var e=s.i18n[V],t={days:e.dayOfWeek,daysShort:e.dayOfWeekShort,months:e.months,monthsShort:L.map(e.months,function(e){return e.substring(0,3)})};"function"==typeof DateFormatter&&(E=o=new DateFormatter({dateSettings:L.extend({},a,t)}))},n={moment:{default_options:{format:"YYYY/MM/DD HH:mm",formatDate:"YYYY/MM/DD",formatTime:"HH:mm"},formatter:{parseDate:function(e,t){if(i(t))return o.parseDate(e,t);var a=moment(e,t);return!!a.isValid()&&a.toDate()},formatDate:function(e,t){return i(t)?o.formatDate(e,t):moment(e).format(t)},formatMask:function(e){return e.replace(/Y{4}/g,"9999").replace(/Y{2}/g,"99").replace(/M{2}/g,"19").replace(/D{2}/g,"39").replace(/H{2}/g,"29").replace(/m{2}/g,"59").replace(/s{2}/g,"59")}}}};L.datetimepicker={setLocale:function(e){var t=s.i18n[e]?e:"en";V!==t&&(V=t,r())},setDateFormatter:function(e){if("string"==typeof e&&n.hasOwnProperty(e)){var t=n[e];L.extend(s,t.default_options),E=t.formatter}else E=e}};var t={RFC_2822:"D, d M Y H:i:s O",ATOM:"Y-m-dTH:i:sP",ISO_8601:"Y-m-dTH:i:sO",RFC_822:"D, d M y H:i:s O",RFC_850:"l, d-M-y H:i:s T",RFC_1036:"D, d M y H:i:s O",RFC_1123:"D, d M Y H:i:s O",RSS:"D, d M Y H:i:s O",W3C:"Y-m-dTH:i:sP"},i=function(e){return-1!==Object.values(t).indexOf(e)};function m(e,t,a){this.date=e,this.desc=t,this.style=a}L.extend(L.datetimepicker,t),r(),window.getComputedStyle||(window.getComputedStyle=function(a){return this.el=a,this.getPropertyValue=function(e){var t=/(-([a-z]))/g;return"float"===e&&(e="styleFloat"),t.test(e)&&(e=e.replace(t,function(e,t,a){return a.toUpperCase()})),a.currentStyle[e]||null},this}),Array.prototype.indexOf||(Array.prototype.indexOf=function(e,t){var a,o;for(a=t||0,o=this.length;a<o;a+=1)if(this[a]===e)return a;return-1}),Date.prototype.countDaysInMonth=function(){return new Date(this.getFullYear(),this.getMonth()+1,0).getDate()},L.fn.xdsoftScroller=function(p,D){return this.each(function(){var n,i,s,d,u,l=L(this),a=function(e){var t,a={x:0,y:0};return"touchstart"===e.type||"touchmove"===e.type||"touchend"===e.type||"touchcancel"===e.type?(t=e.originalEvent.touches[0]||e.originalEvent.changedTouches[0],a.x=t.clientX,a.y=t.clientY):"mousedown"!==e.type&&"mouseup"!==e.type&&"mousemove"!==e.type&&"mouseover"!==e.type&&"mouseout"!==e.type&&"mouseenter"!==e.type&&"mouseleave"!==e.type||(a.x=e.clientX,a.y=e.clientY),a},f=100,o=!1,r=0,c=0,m=0,t=!1,h=0,g=function(){};"hide"!==D?(L(this).hasClass("xdsoft_scroller_box")||(n=l.children().eq(0),i=l[0].clientHeight,s=n[0].offsetHeight,d=L('<div class="xdsoft_scrollbar"></div>'),u=L('<div class="xdsoft_scroller"></div>'),d.append(u),l.addClass("xdsoft_scroller_box").append(d),g=function(e){var t=a(e).y-r+h;t<0&&(t=0),t+u[0].offsetHeight>m&&(t=m-u[0].offsetHeight),l.trigger("scroll_element.xdsoft_scroller",[f?t/f:0])},u.on("touchstart.xdsoft_scroller mousedown.xdsoft_scroller",function(e){i||l.trigger("resize_scroll.xdsoft_scroller",[D]),r=a(e).y,h=parseInt(u.css("margin-top"),10),m=d[0].offsetHeight,"mousedown"===e.type||"touchstart"===e.type?(p.ownerDocument&&L(p.ownerDocument.body).addClass("xdsoft_noselect"),L([p.ownerDocument.body,p.contentWindow]).on("touchend mouseup.xdsoft_scroller",function e(){L([p.ownerDocument.body,p.contentWindow]).off("touchend mouseup.xdsoft_scroller",e).off("mousemove.xdsoft_scroller",g).removeClass("xdsoft_noselect")}),L(p.ownerDocument.body).on("mousemove.xdsoft_scroller",g)):(t=!0,e.stopPropagation(),e.preventDefault())}).on("touchmove",function(e){t&&(e.preventDefault(),g(e))}).on("touchend touchcancel",function(){t=!1,h=0}),l.on("scroll_element.xdsoft_scroller",function(e,t){i||l.trigger("resize_scroll.xdsoft_scroller",[t,!0]),t=1<t?1:t<0||isNaN(t)?0:t,u.css("margin-top",f*t),setTimeout(function(){n.css("marginTop",-parseInt((n[0].offsetHeight-i)*t,10))},10)}).on("resize_scroll.xdsoft_scroller",function(e,t,a){var o,r;i=l[0].clientHeight,s=n[0].offsetHeight,r=(o=i/s)*d[0].offsetHeight,1<o?u.hide():(u.show(),u.css("height",parseInt(10<r?r:10,10)),f=d[0].offsetHeight-u[0].offsetHeight,!0!==a&&l.trigger("scroll_element.xdsoft_scroller",[t||Math.abs(parseInt(n.css("marginTop"),10))/(s-i)]))}),l.on("mousewheel",function(e){var t=Math.abs(parseInt(n.css("marginTop"),10));return(t-=20*e.deltaY)<0&&(t=0),l.trigger("scroll_element.xdsoft_scroller",[t/(s-i)]),e.stopPropagation(),!1}),l.on("touchstart",function(e){o=a(e),c=Math.abs(parseInt(n.css("marginTop"),10))}),l.on("touchmove",function(e){if(o){e.preventDefault();var t=a(e);l.trigger("scroll_element.xdsoft_scroller",[(c-(t.y-o.y))/(s-i)])}}),l.on("touchend touchcancel",function(){o=!1,c=0})),l.trigger("resize_scroll.xdsoft_scroller",[D])):l.find(".xdsoft_scrollbar").hide()})},L.fn.datetimepicker=function(j,a){var o,r,n=this,p=17,D=13,y=27,k=37,v=38,x=39,b=40,T=9,S=116,O=65,M=67,H=86,J=90,z=89,N=!1,I=L.isPlainObject(j)||!j?L.extend(!0,{},s,j):L.extend(!0,{},s),i=0;return o=function(w){var t,o,a,r,W,h,_=L('<div class="xdsoft_datetimepicker xdsoft_noselect"></div>'),e=L('<div class="xdsoft_copyright"><a target="_blank" href="http://xdsoft.net/jqplugins/datetimepicker/">xdsoft.net</a></div>'),g=L('<div class="xdsoft_datepicker active"></div>'),F=L('<div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev"></button><button type="button" class="xdsoft_today_button"></button><div class="xdsoft_label xdsoft_month"><span></span><i></i></div><div class="xdsoft_label xdsoft_year"><span></span><i></i></div><button type="button" class="xdsoft_next"></button></div>'),C=L('<div class="xdsoft_calendar"></div>'),n=L('<div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box"></div><button type="button" class="xdsoft_next"></button></div>'),u=n.find(".xdsoft_time_box").eq(0),P=L('<div class="xdsoft_time_variant"></div>'),i=L('<button type="button" class="xdsoft_save_selected blue-gradient-button">Save Selected</button>'),A=L('<div class="xdsoft_select xdsoft_monthselect"><div></div></div>'),Y=L('<div class="xdsoft_select xdsoft_yearselect"><div></div></div>'),s=!1,d=0;I.id&&_.attr("id",I.id),I.style&&_.attr("style",I.style),I.weeks&&_.addClass("xdsoft_showweeks"),I.rtl&&_.addClass("xdsoft_rtl"),_.addClass("xdsoft_"+I.theme),_.addClass(I.className),F.find(".xdsoft_month span").after(A),F.find(".xdsoft_year span").after(Y),F.find(".xdsoft_month,.xdsoft_year").on("touchstart mousedown.xdsoft",function(e){var t,a,o=L(this).find(".xdsoft_select").eq(0),r=0,n=0,i=o.is(":visible");for(F.find(".xdsoft_select").hide(),W.currentTime&&(r=W.currentTime[L(this).hasClass("xdsoft_month")?"getMonth":"getFullYear"]()),o[i?"hide":"show"](),t=o.find("div.xdsoft_option"),a=0;a<t.length&&t.eq(a).data("value")!==r;a+=1)n+=t[0].offsetHeight;return o.xdsoftScroller(I,n/(o.children()[0].offsetHeight-o[0].clientHeight)),e.stopPropagation(),!1});var l=function(e){var t=e.originalEvent,a=t.touches?t.touches[0]:t;this.touchStartPosition=this.touchStartPosition||a;var o=Math.abs(this.touchStartPosition.clientX-a.clientX),r=Math.abs(this.touchStartPosition.clientY-a.clientY);Math.sqrt(o*o+r*r)>I.touchMovedThreshold&&(this.touchMoved=!0)};function f(){var e,t=!1;return I.startDate?t=W.strToDate(I.startDate):(t=I.value||(w&&w.val&&w.val()?w.val():""))?(t=W.strToDateTime(t),I.yearOffset&&(t=new Date(t.getFullYear()-I.yearOffset,t.getMonth(),t.getDate(),t.getHours(),t.getMinutes(),t.getSeconds(),t.getMilliseconds()))):I.defaultDate&&(t=W.strToDateTime(I.defaultDate),I.defaultTime&&(e=W.strtotime(I.defaultTime),t.setHours(e.getHours()),t.setMinutes(e.getMinutes()))),t&&W.isValidDate(t)?_.data("changed",!0):t="",t||0}function c(m){var h=function(e,t){var a=e.replace(/([\[\]\/\{\}\(\)\-\.\+]{1})/g,"\\$1").replace(/_/g,"{digit+}").replace(/([0-9]{1})/g,"{digit$1}").replace(/\{digit([0-9]{1})\}/g,"[0-$1_]{1}").replace(/\{digit[\+]\}/g,"[0-9_]{1}");return new RegExp(a).test(t)},g=function(e,t){if(!(e="string"==typeof e||e instanceof String?m.ownerDocument.getElementById(e):e))return!1;if(e.createTextRange){var a=e.createTextRange();return a.collapse(!0),a.moveEnd("character",t),a.moveStart("character",t),a.select(),!0}return!!e.setSelectionRange&&(e.setSelectionRange(t,t),!0)};m.mask&&w.off("keydown.xdsoft"),!0===m.mask&&(E.formatMask?m.mask=E.formatMask(m.format):m.mask=m.format.replace(/Y/g,"9999").replace(/F/g,"9999").replace(/m/g,"19").replace(/d/g,"39").replace(/H/g,"29").replace(/i/g,"59").replace(/s/g,"59")),"string"===L.type(m.mask)&&(h(m.mask,w.val())||(w.val(m.mask.replace(/[0-9]/g,"_")),g(w[0],0)),w.off("paste.xdsoft").on("paste.xdsoft",function(e){var t=(e.clipboardData||e.originalEvent.clipboardData||window.clipboardData).getData("text"),a=this.value,o=this.selectionStart;return a=(a=a.substr(0,o)+t+a.substr(o+t.length)).substring(0,m.mask.length),o+=t.length,h(m.mask,a)?(this.value=a,g(this,o)):""===L.trim(a)?this.value=m.mask.replace(/[0-9]/g,"_"):w.trigger("error_input.xdsoft"),e.preventDefault(),!1}),w.on("keydown.xdsoft",function(e){var t,a=this.value,o=e.which,r=this.selectionStart,n=this.selectionEnd,i=r!==n;if(48<=o&&o<=57||96<=o&&o<=105||8===o||46===o){for(t=8===o||46===o?"_":String.fromCharCode(96<=o&&o<=105?o-48:o),8===o&&r&&!i&&(r-=1);;){var s=m.mask.substr(r,1),d=r<m.mask.length,u=0<r;if(!(/[^0-9_]/.test(s)&&d&&u))break;r+=8!==o||i?1:-1}if(i){var l=n-r,f=m.mask.replace(/[0-9]/g,"_"),c=f.substr(r,l).substr(1);a=a.substr(0,r)+(t+c)+a.substr(r+l)}else{a=a.substr(0,r)+t+a.substr(r+1)}if(""===L.trim(a))a=f;else if(r===m.mask.length)return e.preventDefault(),!1;for(r+=8===o?0:1;/[^0-9_]/.test(m.mask.substr(r,1))&&r<m.mask.length&&0<r;)r+=8===o?0:1;h(m.mask,a)?(this.value=a,g(this,r)):""===L.trim(a)?this.value=m.mask.replace(/[0-9]/g,"_"):w.trigger("error_input.xdsoft")}else if(-1!==[O,M,H,J,z].indexOf(o)&&N||-1!==[y,v,b,k,x,S,p,T,D].indexOf(o))return!0;return e.preventDefault(),!1}))}F.find(".xdsoft_select").xdsoftScroller(I).on("touchstart mousedown.xdsoft",function(e){var t=e.originalEvent;this.touchMoved=!1,this.touchStartPosition=t.touches?t.touches[0]:t,e.stopPropagation(),e.preventDefault()}).on("touchmove",".xdsoft_option",l).on("touchend mousedown.xdsoft",".xdsoft_option",function(){if(!this.touchMoved){void 0!==W.currentTime&&null!==W.currentTime||(W.currentTime=W.now());var e=W.currentTime.getFullYear();W&&W.currentTime&&W.currentTime[L(this).parent().parent().hasClass("xdsoft_monthselect")?"setMonth":"setFullYear"](L(this).data("value")),L(this).parent().parent().hide(),_.trigger("xchange.xdsoft"),I.onChangeMonth&&L.isFunction(I.onChangeMonth)&&I.onChangeMonth.call(_,W.currentTime,_.data("input")),e!==W.currentTime.getFullYear()&&L.isFunction(I.onChangeYear)&&I.onChangeYear.call(_,W.currentTime,_.data("input"))}}),_.getValue=function(){return W.getCurrentTime()},_.setOptions=function(e){var l={};I=L.extend(!0,{},I,e),e.allowTimes&&L.isArray(e.allowTimes)&&e.allowTimes.length&&(I.allowTimes=L.extend(!0,[],e.allowTimes)),e.weekends&&L.isArray(e.weekends)&&e.weekends.length&&(I.weekends=L.extend(!0,[],e.weekends)),e.allowDates&&L.isArray(e.allowDates)&&e.allowDates.length&&(I.allowDates=L.extend(!0,[],e.allowDates)),e.allowDateRe&&"[object String]"===Object.prototype.toString.call(e.allowDateRe)&&(I.allowDateRe=new RegExp(e.allowDateRe)),e.highlightedDates&&L.isArray(e.highlightedDates)&&e.highlightedDates.length&&(L.each(e.highlightedDates,function(e,t){var a,o=L.map(t.split(","),L.trim),r=new m(E.parseDate(o[0],I.formatDate),o[1],o[2]),n=E.formatDate(r.date,I.formatDate);void 0!==l[n]?(a=l[n].desc)&&a.length&&r.desc&&r.desc.length&&(l[n].desc=a+"\n"+r.desc):l[n]=r}),I.highlightedDates=L.extend(!0,[],l)),e.highlightedPeriods&&L.isArray(e.highlightedPeriods)&&e.highlightedPeriods.length&&(l=L.extend(!0,[],I.highlightedDates),L.each(e.highlightedPeriods,function(e,t){var a,o,r,n,i,s,d;if(L.isArray(t))a=t[0],o=t[1],r=t[2],d=t[3];else{var u=L.map(t.split(","),L.trim);a=E.parseDate(u[0],I.formatDate),o=E.parseDate(u[1],I.formatDate),r=u[2],d=u[3]}for(;a<=o;)n=new m(a,r,d),i=E.formatDate(a,I.formatDate),a.setDate(a.getDate()+1),void 0!==l[i]?(s=l[i].desc)&&s.length&&n.desc&&n.desc.length&&(l[i].desc=s+"\n"+n.desc):l[i]=n}),I.highlightedDates=L.extend(!0,[],l)),e.disabledDates&&L.isArray(e.disabledDates)&&e.disabledDates.length&&(I.disabledDates=L.extend(!0,[],e.disabledDates)),e.disabledWeekDays&&L.isArray(e.disabledWeekDays)&&e.disabledWeekDays.length&&(I.disabledWeekDays=L.extend(!0,[],e.disabledWeekDays)),!I.open&&!I.opened||I.inline||w.trigger("open.xdsoft"),I.inline&&(s=!0,_.addClass("xdsoft_inline"),w.after(_).hide()),I.inverseButton&&(I.next="xdsoft_prev",I.prev="xdsoft_next"),I.datepicker?g.addClass("active"):g.removeClass("active"),I.timepicker?n.addClass("active"):n.removeClass("active"),I.value&&(W.setCurrentTime(I.value),w&&w.val&&w.val(W.str)),isNaN(I.dayOfWeekStart)?I.dayOfWeekStart=0:I.dayOfWeekStart=parseInt(I.dayOfWeekStart,10)%7,I.timepickerScrollbar||u.xdsoftScroller(I,"hide"),I.minDate&&/^[\+\-](.*)$/.test(I.minDate)&&(I.minDate=E.formatDate(W.strToDateTime(I.minDate),I.formatDate)),I.maxDate&&/^[\+\-](.*)$/.test(I.maxDate)&&(I.maxDate=E.formatDate(W.strToDateTime(I.maxDate),I.formatDate)),I.minDateTime&&/^\+(.*)$/.test(I.minDateTime)&&(I.minDateTime=W.strToDateTime(I.minDateTime).dateFormat(I.formatDate)),I.maxDateTime&&/^\+(.*)$/.test(I.maxDateTime)&&(I.maxDateTime=W.strToDateTime(I.maxDateTime).dateFormat(I.formatDate)),i.toggle(I.showApplyButton),F.find(".xdsoft_today_button").css("visibility",I.todayButton?"visible":"hidden"),F.find("."+I.prev).css("visibility",I.prevButton?"visible":"hidden"),F.find("."+I.next).css("visibility",I.nextButton?"visible":"hidden"),c(I),I.validateOnBlur&&w.off("blur.xdsoft").on("blur.xdsoft",function(){if(I.allowBlank&&(!L.trim(L(this).val()).length||"string"==typeof I.mask&&L.trim(L(this).val())===I.mask.replace(/[0-9]/g,"_")))L(this).val(null),_.data("xdsoft_datetime").empty();else{var e=E.parseDate(L(this).val(),I.format);if(e)L(this).val(E.formatDate(e,I.format));else{var t=+[L(this).val()[0],L(this).val()[1]].join(""),a=+[L(this).val()[2],L(this).val()[3]].join("");!I.datepicker&&I.timepicker&&0<=t&&t<24&&0<=a&&a<60?L(this).val([t,a].map(function(e){return 9<e?e:"0"+e}).join(":")):L(this).val(E.formatDate(W.now(),I.format))}_.data("xdsoft_datetime").setCurrentTime(L(this).val())}_.trigger("changedatetime.xdsoft"),_.trigger("close.xdsoft")}),I.dayOfWeekStartPrev=0===I.dayOfWeekStart?6:I.dayOfWeekStart-1,_.trigger("xchange.xdsoft").trigger("afterOpen.xdsoft")},_.data("options",I).on("touchstart mousedown.xdsoft",function(e){return e.stopPropagation(),e.preventDefault(),Y.hide(),A.hide(),!1}),u.append(P),u.xdsoftScroller(I),_.on("afterOpen.xdsoft",function(){u.xdsoftScroller(I)}),_.append(g).append(n),!0!==I.withoutCopyright&&_.append(e),g.append(F).append(C).append(i),L(I.parentID).append(_),W=new function(){var r=this;r.now=function(e){var t,a,o=new Date;return!e&&I.defaultDate&&(t=r.strToDateTime(I.defaultDate),o.setFullYear(t.getFullYear()),o.setMonth(t.getMonth()),o.setDate(t.getDate())),o.setFullYear(o.getFullYear()),!e&&I.defaultTime&&(a=r.strtotime(I.defaultTime),o.setHours(a.getHours()),o.setMinutes(a.getMinutes()),o.setSeconds(a.getSeconds()),o.setMilliseconds(a.getMilliseconds())),o},r.isValidDate=function(e){return"[object Date]"===Object.prototype.toString.call(e)&&!isNaN(e.getTime())},r.setCurrentTime=function(e,t){"string"==typeof e?r.currentTime=r.strToDateTime(e):r.isValidDate(e)?r.currentTime=e:e||t||!I.allowBlank||I.inline?r.currentTime=r.now():r.currentTime=null,_.trigger("xchange.xdsoft")},r.empty=function(){r.currentTime=null},r.getCurrentTime=function(){return r.currentTime},r.nextMonth=function(){void 0!==r.currentTime&&null!==r.currentTime||(r.currentTime=r.now());var e,t=r.currentTime.getMonth()+1;return 12===t&&(r.currentTime.setFullYear(r.currentTime.getFullYear()+1),t=0),e=r.currentTime.getFullYear(),r.currentTime.setDate(Math.min(new Date(r.currentTime.getFullYear(),t+1,0).getDate(),r.currentTime.getDate())),r.currentTime.setMonth(t),I.onChangeMonth&&L.isFunction(I.onChangeMonth)&&I.onChangeMonth.call(_,W.currentTime,_.data("input")),e!==r.currentTime.getFullYear()&&L.isFunction(I.onChangeYear)&&I.onChangeYear.call(_,W.currentTime,_.data("input")),_.trigger("xchange.xdsoft"),t},r.prevMonth=function(){void 0!==r.currentTime&&null!==r.currentTime||(r.currentTime=r.now());var e=r.currentTime.getMonth()-1;return-1===e&&(r.currentTime.setFullYear(r.currentTime.getFullYear()-1),e=11),r.currentTime.setDate(Math.min(new Date(r.currentTime.getFullYear(),e+1,0).getDate(),r.currentTime.getDate())),r.currentTime.setMonth(e),I.onChangeMonth&&L.isFunction(I.onChangeMonth)&&I.onChangeMonth.call(_,W.currentTime,_.data("input")),_.trigger("xchange.xdsoft"),e},r.getWeekOfYear=function(e){if(I.onGetWeekOfYear&&L.isFunction(I.onGetWeekOfYear)){var t=I.onGetWeekOfYear.call(_,e);if(void 0!==t)return t}var a=new Date(e.getFullYear(),0,1);return 4!==a.getDay()&&a.setMonth(0,1+(4-a.getDay()+7)%7),Math.ceil(((e-a)/864e5+a.getDay()+1)/7)},r.strToDateTime=function(e){var t,a,o=[];return e&&e instanceof Date&&r.isValidDate(e)?e:((o=/^([+-]{1})(.*)$/.exec(e))&&(o[2]=E.parseDate(o[2],I.formatDate)),o&&o[2]?(t=o[2].getTime()-6e4*o[2].getTimezoneOffset(),a=new Date(r.now(!0).getTime()+parseInt(o[1]+"1",10)*t)):a=e?E.parseDate(e,I.format):r.now(),r.isValidDate(a)||(a=r.now()),a)},r.strToDate=function(e){if(e&&e instanceof Date&&r.isValidDate(e))return e;var t=e?E.parseDate(e,I.formatDate):r.now(!0);return r.isValidDate(t)||(t=r.now(!0)),t},r.strtotime=function(e){if(e&&e instanceof Date&&r.isValidDate(e))return e;var t=e?E.parseDate(e,I.formatTime):r.now(!0);return r.isValidDate(t)||(t=r.now(!0)),t},r.str=function(){var e=I.format;return I.yearOffset&&(e=(e=e.replace("Y",r.currentTime.getFullYear()+I.yearOffset)).replace("y",String(r.currentTime.getFullYear()+I.yearOffset).substring(2,4))),E.formatDate(r.currentTime,e)},r.currentTime=this.now()},i.on("touchend click",function(e){e.preventDefault(),_.data("changed",!0),W.setCurrentTime(f()),w.val(W.str()),_.trigger("close.xdsoft")}),F.find(".xdsoft_today_button").on("touchend mousedown.xdsoft",function(){_.data("changed",!0),W.setCurrentTime(0,!0),_.trigger("afterOpen.xdsoft")}).on("dblclick.xdsoft",function(){var e,t,a=W.getCurrentTime();a=new Date(a.getFullYear(),a.getMonth(),a.getDate()),e=W.strToDate(I.minDate),a<(e=new Date(e.getFullYear(),e.getMonth(),e.getDate()))||(t=W.strToDate(I.maxDate),(t=new Date(t.getFullYear(),t.getMonth(),t.getDate()))<a||(w.val(W.str()),w.trigger("change"),_.trigger("close.xdsoft")))}),F.find(".xdsoft_prev,.xdsoft_next").on("touchend mousedown.xdsoft",function(){var a=L(this),o=0,r=!1;!function e(t){a.hasClass(I.next)?W.nextMonth():a.hasClass(I.prev)&&W.prevMonth(),I.monthChangeSpinner&&(r||(o=setTimeout(e,t||100)))}(500),L([I.ownerDocument.body,I.contentWindow]).on("touchend mouseup.xdsoft",function e(){clearTimeout(o),r=!0,L([I.ownerDocument.body,I.contentWindow]).off("touchend mouseup.xdsoft",e)})}),n.find(".xdsoft_prev,.xdsoft_next").on("touchend mousedown.xdsoft",function(){var n=L(this),i=0,s=!1,d=110;!function e(t){var a=u[0].clientHeight,o=P[0].offsetHeight,r=Math.abs(parseInt(P.css("marginTop"),10));n.hasClass(I.next)&&o-a-I.timeHeightInTimePicker>=r?P.css("marginTop","-"+(r+I.timeHeightInTimePicker)+"px"):n.hasClass(I.prev)&&0<=r-I.timeHeightInTimePicker&&P.css("marginTop","-"+(r-I.timeHeightInTimePicker)+"px"),u.trigger("scroll_element.xdsoft_scroller",[Math.abs(parseInt(P[0].style.marginTop,10)/(o-a))]),d=10<d?10:d-10,s||(i=setTimeout(e,t||d))}(500),L([I.ownerDocument.body,I.contentWindow]).on("touchend mouseup.xdsoft",function e(){clearTimeout(i),s=!0,L([I.ownerDocument.body,I.contentWindow]).off("touchend mouseup.xdsoft",e)})}),t=0,_.on("xchange.xdsoft",function(e){clearTimeout(t),t=setTimeout(function(){void 0!==W.currentTime&&null!==W.currentTime||(W.currentTime=W.now());for(var e,t,a,o,r,n,i,s,d,u,l="",f=new Date(W.currentTime.getFullYear(),W.currentTime.getMonth(),1,12,0,0),c=0,m=W.now(),h=!1,g=!1,p=!1,D=!1,y=[],k=!0,v="";f.getDay()!==I.dayOfWeekStart;)f.setDate(f.getDate()-1);for(l+="<table><thead><tr>",I.weeks&&(l+="<th></th>"),e=0;e<7;e+=1)l+="<th>"+I.i18n[V].dayOfWeekShort[(e+I.dayOfWeekStart)%7]+"</th>";for(l+="</tr></thead>",l+="<tbody>",!1!==I.maxDate&&(h=W.strToDate(I.maxDate),h=new Date(h.getFullYear(),h.getMonth(),h.getDate(),23,59,59,999)),!1!==I.minDate&&(g=W.strToDate(I.minDate),g=new Date(g.getFullYear(),g.getMonth(),g.getDate())),!1!==I.minDateTime&&(p=W.strToDate(I.minDateTime),p=new Date(p.getFullYear(),p.getMonth(),p.getDate(),p.getHours(),p.getMinutes(),p.getSeconds())),!1!==I.maxDateTime&&(D=W.strToDate(I.maxDateTime),D=new Date(D.getFullYear(),D.getMonth(),D.getDate(),D.getHours(),D.getMinutes(),D.getSeconds())),!1!==D&&(u=31*(12*D.getFullYear()+D.getMonth())+D.getDate());c<W.currentTime.countDaysInMonth()||f.getDay()!==I.dayOfWeekStart||W.currentTime.getMonth()===f.getMonth();){y=[],c+=1,a=f.getDay(),o=f.getDate(),r=f.getFullYear(),O=f.getMonth(),n=W.getWeekOfYear(f),d="",y.push("xdsoft_date"),i=I.beforeShowDay&&L.isFunction(I.beforeShowDay.call)?I.beforeShowDay.call(_,f):null,I.allowDateRe&&"[object RegExp]"===Object.prototype.toString.call(I.allowDateRe)&&(I.allowDateRe.test(E.formatDate(f,I.formatDate))||y.push("xdsoft_disabled")),I.allowDates&&0<I.allowDates.length&&-1===I.allowDates.indexOf(E.formatDate(f,I.formatDate))&&y.push("xdsoft_disabled");var x=31*(12*f.getFullYear()+f.getMonth())+f.getDate();(!1!==h&&h<f||!1!==p&&f<p||!1!==g&&f<g||!1!==D&&u<x||i&&!1===i[0])&&y.push("xdsoft_disabled"),-1!==I.disabledDates.indexOf(E.formatDate(f,I.formatDate))&&y.push("xdsoft_disabled"),-1!==I.disabledWeekDays.indexOf(a)&&y.push("xdsoft_disabled"),w.is("[disabled]")&&y.push("xdsoft_disabled"),i&&""!==i[1]&&y.push(i[1]),W.currentTime.getMonth()!==O&&y.push("xdsoft_other_month"),(I.defaultSelect||_.data("changed"))&&E.formatDate(W.currentTime,I.formatDate)===E.formatDate(f,I.formatDate)&&y.push("xdsoft_current"),E.formatDate(m,I.formatDate)===E.formatDate(f,I.formatDate)&&y.push("xdsoft_today"),0!==f.getDay()&&6!==f.getDay()&&-1===I.weekends.indexOf(E.formatDate(f,I.formatDate))||y.push("xdsoft_weekend"),void 0!==I.highlightedDates[E.formatDate(f,I.formatDate)]&&(t=I.highlightedDates[E.formatDate(f,I.formatDate)],y.push(void 0===t.style?"xdsoft_highlighted_default":t.style),d=void 0===t.desc?"":t.desc),I.beforeShowDay&&L.isFunction(I.beforeShowDay)&&y.push(I.beforeShowDay(f)),k&&(l+="<tr>",k=!1,I.weeks&&(l+="<th>"+n+"</th>")),l+='<td data-date="'+o+'" data-month="'+O+'" data-year="'+r+'" class="xdsoft_date xdsoft_day_of_week'+f.getDay()+" "+y.join(" ")+'" title="'+d+'"><div>'+o+"</div></td>",f.getDay()===I.dayOfWeekStartPrev&&(l+="</tr>",k=!0),f.setDate(o+1)}l+="</tbody></table>",C.html(l),F.find(".xdsoft_label span").eq(0).text(I.i18n[V].months[W.currentTime.getMonth()]),F.find(".xdsoft_label span").eq(1).text(W.currentTime.getFullYear()+I.yearOffset),O=v="";var b=0;if(!1!==I.minTime){var T=W.strtotime(I.minTime);b=60*T.getHours()+T.getMinutes()}var S=1440;if(!1!==I.maxTime){T=W.strtotime(I.maxTime);S=60*T.getHours()+T.getMinutes()}if(!1!==I.minDateTime){T=W.strToDateTime(I.minDateTime);if(E.formatDate(W.currentTime,I.formatDate)===E.formatDate(T,I.formatDate)){var O=60*T.getHours()+T.getMinutes();b<O&&(b=O)}}if(!1!==I.maxDateTime){T=W.strToDateTime(I.maxDateTime);if(E.formatDate(W.currentTime,I.formatDate)===E.formatDate(T,I.formatDate))(O=60*T.getHours()+T.getMinutes())<S&&(S=O)}if(s=function(e,t){var a,o=W.now(),r=I.allowTimes&&L.isArray(I.allowTimes)&&I.allowTimes.length;o.setHours(e),e=parseInt(o.getHours(),10),o.setMinutes(t),t=parseInt(o.getMinutes(),10),y=[];var n=60*e+t;(w.is("[disabled]")||S<=n||n<b)&&y.push("xdsoft_disabled"),(a=new Date(W.currentTime)).setHours(parseInt(W.currentTime.getHours(),10)),r||a.setMinutes(Math[I.roundTime](W.currentTime.getMinutes()/I.step)*I.step),(I.initTime||I.defaultSelect||_.data("changed"))&&a.getHours()===parseInt(e,10)&&(!r&&59<I.step||a.getMinutes()===parseInt(t,10))&&(I.defaultSelect||_.data("changed")?y.push("xdsoft_current"):I.initTime&&y.push("xdsoft_init_time")),parseInt(m.getHours(),10)===parseInt(e,10)&&parseInt(m.getMinutes(),10)===parseInt(t,10)&&y.push("xdsoft_today"),v+='<div class="xdsoft_time '+y.join(" ")+'" data-hour="'+e+'" data-minute="'+t+'">'+E.formatDate(o,I.formatTime)+"</div>"},I.allowTimes&&L.isArray(I.allowTimes)&&I.allowTimes.length)for(c=0;c<I.allowTimes.length;c+=1)s(W.strtotime(I.allowTimes[c]).getHours(),O=W.strtotime(I.allowTimes[c]).getMinutes());else for(e=c=0;c<(I.hours12?12:24);c+=1)for(e=0;e<60;e+=I.step){var M=60*c+e;M<b||(S<=M||s((c<10?"0":"")+c,O=(e<10?"0":"")+e))}for(P.html(v),j="",c=parseInt(I.yearStart,10);c<=parseInt(I.yearEnd,10);c+=1)j+='<div class="xdsoft_option '+(W.currentTime.getFullYear()===c?"xdsoft_current":"")+'" data-value="'+c+'">'+(c+I.yearOffset)+"</div>";for(Y.children().eq(0).html(j),c=parseInt(I.monthStart,10),j="";c<=parseInt(I.monthEnd,10);c+=1)j+='<div class="xdsoft_option '+(W.currentTime.getMonth()===c?"xdsoft_current":"")+'" data-value="'+c+'">'+I.i18n[V].months[c]+"</div>";A.children().eq(0).html(j),L(_).trigger("generate.xdsoft")},10),e.stopPropagation()}).on("afterOpen.xdsoft",function(){var e,t,a,o;I.timepicker&&(P.find(".xdsoft_current").length?e=".xdsoft_current":P.find(".xdsoft_init_time").length&&(e=".xdsoft_init_time"),e?(t=u[0].clientHeight,(a=P[0].offsetHeight)-t<(o=P.find(e).index()*I.timeHeightInTimePicker+1)&&(o=a-t),u.trigger("scroll_element.xdsoft_scroller",[parseInt(o,10)/(a-t)])):u.trigger("scroll_element.xdsoft_scroller",[0]))}),o=0,C.on("touchend click.xdsoft","td",function(e){e.stopPropagation(),o+=1;var t=L(this),a=W.currentTime;if(null==a&&(W.currentTime=W.now(),a=W.currentTime),t.hasClass("xdsoft_disabled"))return!1;a.setDate(1),a.setFullYear(t.data("year")),a.setMonth(t.data("month")),a.setDate(t.data("date")),_.trigger("select.xdsoft",[a]),w.val(W.str()),I.onSelectDate&&L.isFunction(I.onSelectDate)&&I.onSelectDate.call(_,W.currentTime,_.data("input"),e),_.data("changed",!0),_.trigger("xchange.xdsoft"),_.trigger("changedatetime.xdsoft"),(1<o||!0===I.closeOnDateSelect||!1===I.closeOnDateSelect&&!I.timepicker)&&!I.inline&&_.trigger("close.xdsoft"),setTimeout(function(){o=0},200)}),P.on("touchstart","div",function(e){this.touchMoved=!1}).on("touchmove","div",l).on("touchend click.xdsoft","div",function(e){if(!this.touchMoved){e.stopPropagation();var t=L(this),a=W.currentTime;if(null==a&&(W.currentTime=W.now(),a=W.currentTime),t.hasClass("xdsoft_disabled"))return!1;a.setHours(t.data("hour")),a.setMinutes(t.data("minute")),_.trigger("select.xdsoft",[a]),_.data("input").val(W.str()),I.onSelectTime&&L.isFunction(I.onSelectTime)&&I.onSelectTime.call(_,W.currentTime,_.data("input"),e),_.data("changed",!0),_.trigger("xchange.xdsoft"),_.trigger("changedatetime.xdsoft"),!0!==I.inline&&!0===I.closeOnTimeSelect&&_.trigger("close.xdsoft")}}),g.on("mousewheel.xdsoft",function(e){return!I.scrollMonth||(e.deltaY<0?W.nextMonth():W.prevMonth(),!1)}),w.on("mousewheel.xdsoft",function(e){return!I.scrollInput||(!I.datepicker&&I.timepicker?(0<=(a=P.find(".xdsoft_current").length?P.find(".xdsoft_current").eq(0).index():0)+e.deltaY&&a+e.deltaY<P.children().length&&(a+=e.deltaY),P.children().eq(a).length&&P.children().eq(a).trigger("mousedown"),!1):I.datepicker&&!I.timepicker?(g.trigger(e,[e.deltaY,e.deltaX,e.deltaY]),w.val&&w.val(W.str()),_.trigger("changedatetime.xdsoft"),!1):void 0)}),_.on("changedatetime.xdsoft",function(e){if(I.onChangeDateTime&&L.isFunction(I.onChangeDateTime)){var t=_.data("input");I.onChangeDateTime.call(_,W.currentTime,t,e),delete I.value,t.trigger("change")}}).on("generate.xdsoft",function(){I.onGenerate&&L.isFunction(I.onGenerate)&&I.onGenerate.call(_,W.currentTime,_.data("input")),s&&(_.trigger("afterOpen.xdsoft"),s=!1)}).on("click.xdsoft",function(e){e.stopPropagation()}),a=0,h=function(e,t){do{if(!(e=e.parentNode)||!1===t(e))break}while("HTML"!==e.nodeName)},r=function(){var e,t,a,o,r,n,i,s,d,u,l,f,c;if(e=(s=_.data("input")).offset(),t=s[0],u="top",a=e.top+t.offsetHeight-1,o=e.left-0,r="absolute",d=L(I.contentWindow).width(),f=L(I.contentWindow).height(),c=L(I.contentWindow).scrollTop(),I.ownerDocument.documentElement.clientWidth-e.left<g.parent().outerWidth(!0)){var m=g.parent().outerWidth(!0)-t.offsetWidth;o-=m}"rtl"===s.parent().css("direction")&&(o-=_.outerWidth()-s.outerWidth()),I.fixed?(a-=c,o-=L(I.contentWindow).scrollLeft(),r="fixed"):(i=!1,h(t,function(e){return null!==e&&("fixed"===I.contentWindow.getComputedStyle(e).getPropertyValue("position")?!(i=!0):void 0)}),i?(r="fixed",a+_.outerHeight()>f+c?(u="bottom",a=f+c-e.top):a-=c):a+_[0].offsetHeight>f+c&&(a=e.top-_[0].offsetHeight+1),a<0&&(a=0),o+t.offsetWidth>d&&(o=d-t.offsetWidth)),n=_[0],h(n,function(e){if("relative"===I.contentWindow.getComputedStyle(e).getPropertyValue("position")&&d>=e.offsetWidth)return o-=(d-e.offsetWidth)/2,!1}),(l={position:r,left:o,top:"",bottom:""})[u]=a,_.css(l)},_.on("open.xdsoft",function(e){var t=!0;I.onShow&&L.isFunction(I.onShow)&&(t=I.onShow.call(_,W.currentTime,_.data("input"),e)),!1!==t&&(_.show(),r(),L(I.contentWindow).off("resize.xdsoft",r).on("resize.xdsoft",r),I.closeOnWithoutClick&&L([I.ownerDocument.body,I.contentWindow]).on("touchstart mousedown.xdsoft",function e(){_.trigger("close.xdsoft"),L([I.ownerDocument.body,I.contentWindow]).off("touchstart mousedown.xdsoft",e)}))}).on("close.xdsoft",function(e){var t=!0;F.find(".xdsoft_month,.xdsoft_year").find(".xdsoft_select").hide(),I.onClose&&L.isFunction(I.onClose)&&(t=I.onClose.call(_,W.currentTime,_.data("input"),e)),!1===t||I.opened||I.inline||_.hide(),e.stopPropagation()}).on("toggle.xdsoft",function(){_.is(":visible")?_.trigger("close.xdsoft"):_.trigger("open.xdsoft")}).data("input",w),d=0,_.data("xdsoft_datetime",W),_.setOptions(I),W.setCurrentTime(f()),w.data("xdsoft_datetimepicker",_).on("open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart",function(){w.is(":disabled")||w.data("xdsoft_datetimepicker").is(":visible")&&I.closeOnInputClick||I.openOnFocus&&(clearTimeout(d),d=setTimeout(function(){w.is(":disabled")||(s=!0,W.setCurrentTime(f(),!0),I.mask&&c(I),_.trigger("open.xdsoft"))},100))}).on("keydown.xdsoft",function(e){var t,a=e.which;return-1!==[D].indexOf(a)&&I.enterLikeTab?(t=L("input:visible,textarea:visible,button:visible,a:visible"),_.trigger("close.xdsoft"),t.eq(t.index(this)+1).focus(),!1):-1!==[T].indexOf(a)?(_.trigger("close.xdsoft"),!0):void 0}).on("blur.xdsoft",function(){_.trigger("close.xdsoft")})},r=function(e){var t=e.data("xdsoft_datetimepicker");t&&(t.data("xdsoft_datetime",null),t.remove(),e.data("xdsoft_datetimepicker",null).off(".xdsoft"),L(I.contentWindow).off("resize.xdsoft"),L([I.contentWindow,I.ownerDocument.body]).off("mousedown.xdsoft touchstart"),e.unmousewheel&&e.unmousewheel())},L(I.ownerDocument).off("keydown.xdsoftctrl keyup.xdsoftctrl").on("keydown.xdsoftctrl",function(e){e.keyCode===p&&(N=!0)}).on("keyup.xdsoftctrl",function(e){e.keyCode===p&&(N=!1)}),this.each(function(){var t,e=L(this).data("xdsoft_datetimepicker");if(e){if("string"===L.type(j))switch(j){case"show":L(this).select().focus(),e.trigger("open.xdsoft");break;case"hide":e.trigger("close.xdsoft");break;case"toggle":e.trigger("toggle.xdsoft");break;case"destroy":r(L(this));break;case"reset":this.value=this.defaultValue,this.value&&e.data("xdsoft_datetime").isValidDate(E.parseDate(this.value,I.format))||e.data("changed",!1),e.data("xdsoft_datetime").setCurrentTime(this.value);break;case"validate":e.data("input").trigger("blur.xdsoft");break;default:e[j]&&L.isFunction(e[j])&&(n=e[j](a))}else e.setOptions(j);return 0}"string"!==L.type(j)&&(!I.lazyInit||I.open||I.inline?o(L(this)):(t=L(this)).on("open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart",function e(){t.is(":disabled")||t.data("xdsoft_datetimepicker")||(clearTimeout(i),i=setTimeout(function(){t.data("xdsoft_datetimepicker")||o(t),t.off("open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart",e).trigger("open.xdsoft")},100))}))}),n},L.fn.datetimepicker.defaults=s};!function(e){"function"==typeof define&&define.amd?define(["jquery","jquery-mousewheel"],e):"object"==typeof exports?module.exports=e(require("jquery")):e(jQuery)}(datetimepickerFactory);
/*!
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2018
 * @version 1.3.5
 * * @see http://php.net/manual/en/function.date.php

 */!function(t,e){"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&module.exports?module.exports=e():t.DateFormatter=e()}("undefined"!=typeof self?self:this,function(){var t,e;return e={DAY:864e5,HOUR:3600,defaults:{dateSettings:{days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],daysShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],months:["January","February","March","April","May","June","July","August","September","October","November","December"],monthsShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],meridiem:["AM","PM"],ordinal:function(t){var e=t%10,n={1:"st",2:"nd",3:"rd"};return 1!==Math.floor(t%100/10)&&n[e]?n[e]:"th"}},separators:/[ \-+\/.T:@]/g,validParts:/[dDjlNSwzWFmMntLoYyaABgGhHisueTIOPZcrU]/g,intParts:/[djwNzmnyYhHgGis]/g,tzParts:/\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,tzClip:/[^-+\dA-Z]/g},compare:function(t,e){return"string"==typeof t&&"string"==typeof e&&t.toLowerCase()===e.toLowerCase()},lpad:function(t,n,r){var a=t.toString();return r=r||"0",a.length<n?e.lpad(r+a,n):a},merge:function(t){var n,r;for(t=t||{},n=1;n<arguments.length;n++)if(r=arguments[n])for(var a in r)r.hasOwnProperty(a)&&("object"==typeof r[a]?e.merge(t[a],r[a]):t[a]=r[a]);return t},getIndex:function(t,e){for(var n=0;n<e.length;n++)if(e[n].toLowerCase()===t.toLowerCase())return n;return-1}},t=function(t){var n=this,r=e.merge(e.defaults,t);n.dateSettings=r.dateSettings,n.separators=r.separators,n.validParts=r.validParts,n.intParts=r.intParts,n.tzParts=r.tzParts,n.tzClip=r.tzClip},t.prototype={constructor:t,getMonth:function(t){var n,r=this;return n=e.getIndex(t,r.dateSettings.monthsShort)+1,0===n&&(n=e.getIndex(t,r.dateSettings.months)+1),n},parseDate:function(t,n){var r,a,u,i,o,s,c,f,l,d,h=this,g=!1,p=!1,m=h.dateSettings,y={date:null,year:null,month:null,day:null,hour:0,min:0,sec:0};if(!t)return null;if(t instanceof Date)return t;if("U"===n)return u=parseInt(t),u?new Date(1e3*u):t;switch(typeof t){case"number":return new Date(t);case"string":break;default:return null}if(r=n.match(h.validParts),!r||0===r.length)throw new Error("Invalid date format definition.");for(u=r.length-1;u>=0;u--)"S"===r[u]&&r.splice(u,1);for(a=t.replace(h.separators,"\x00").split("\x00"),u=0;u<a.length;u++)switch(i=a[u],o=parseInt(i),r[u]){case"y":case"Y":if(!o)return null;l=i.length,y.year=2===l?parseInt((70>o?"20":"19")+i):o,g=!0;break;case"m":case"n":case"M":case"F":if(isNaN(o)){if(s=h.getMonth(i),!(s>0))return null;y.month=s}else{if(!(o>=1&&12>=o))return null;y.month=o}g=!0;break;case"d":case"j":if(!(o>=1&&31>=o))return null;y.day=o,g=!0;break;case"g":case"h":if(c=r.indexOf("a")>-1?r.indexOf("a"):r.indexOf("A")>-1?r.indexOf("A"):-1,d=a[c],-1!==c)f=e.compare(d,m.meridiem[0])?0:e.compare(d,m.meridiem[1])?12:-1,o>=1&&12>=o&&-1!==f?y.hour=o%12===0?f:o+f:o>=0&&23>=o&&(y.hour=o);else{if(!(o>=0&&23>=o))return null;y.hour=o}p=!0;break;case"G":case"H":if(!(o>=0&&23>=o))return null;y.hour=o,p=!0;break;case"i":if(!(o>=0&&59>=o))return null;y.min=o,p=!0;break;case"s":if(!(o>=0&&59>=o))return null;y.sec=o,p=!0}if(g===!0){var D=y.year||0,v=y.month?y.month-1:0,S=y.day||1;y.date=new Date(D,v,S,y.hour,y.min,y.sec,0)}else{if(p!==!0)return null;y.date=new Date(0,0,0,y.hour,y.min,y.sec,0)}return y.date},guessDate:function(t,e){if("string"!=typeof t)return t;var n,r,a,u,i,o,s=this,c=t.replace(s.separators,"\x00").split("\x00"),f=/^[djmn]/g,l=e.match(s.validParts),d=new Date,h=0;if(!f.test(l[0]))return t;for(a=0;a<c.length;a++){if(h=2,i=c[a],o=parseInt(i.substr(0,2)),isNaN(o))return null;switch(a){case 0:"m"===l[0]||"n"===l[0]?d.setMonth(o-1):d.setDate(o);break;case 1:"m"===l[0]||"n"===l[0]?d.setDate(o):d.setMonth(o-1);break;case 2:if(r=d.getFullYear(),n=i.length,h=4>n?n:4,r=parseInt(4>n?r.toString().substr(0,4-n)+i:i.substr(0,4)),!r)return null;d.setFullYear(r);break;case 3:d.setHours(o);break;case 4:d.setMinutes(o);break;case 5:d.setSeconds(o)}u=i.substr(h),u.length>0&&c.splice(a+1,0,u)}return d},parseFormat:function(t,n){var r,a=this,u=a.dateSettings,i=/\\?(.?)/gi,o=function(t,e){return r[t]?r[t]():e};return r={d:function(){return e.lpad(r.j(),2)},D:function(){return u.daysShort[r.w()]},j:function(){return n.getDate()},l:function(){return u.days[r.w()]},N:function(){return r.w()||7},w:function(){return n.getDay()},z:function(){var t=new Date(r.Y(),r.n()-1,r.j()),n=new Date(r.Y(),0,1);return Math.round((t-n)/e.DAY)},W:function(){var t=new Date(r.Y(),r.n()-1,r.j()-r.N()+3),n=new Date(t.getFullYear(),0,4);return e.lpad(1+Math.round((t-n)/e.DAY/7),2)},F:function(){return u.months[n.getMonth()]},m:function(){return e.lpad(r.n(),2)},M:function(){return u.monthsShort[n.getMonth()]},n:function(){return n.getMonth()+1},t:function(){return new Date(r.Y(),r.n(),0).getDate()},L:function(){var t=r.Y();return t%4===0&&t%100!==0||t%400===0?1:0},o:function(){var t=r.n(),e=r.W(),n=r.Y();return n+(12===t&&9>e?1:1===t&&e>9?-1:0)},Y:function(){return n.getFullYear()},y:function(){return r.Y().toString().slice(-2)},a:function(){return r.A().toLowerCase()},A:function(){var t=r.G()<12?0:1;return u.meridiem[t]},B:function(){var t=n.getUTCHours()*e.HOUR,r=60*n.getUTCMinutes(),a=n.getUTCSeconds();return e.lpad(Math.floor((t+r+a+e.HOUR)/86.4)%1e3,3)},g:function(){return r.G()%12||12},G:function(){return n.getHours()},h:function(){return e.lpad(r.g(),2)},H:function(){return e.lpad(r.G(),2)},i:function(){return e.lpad(n.getMinutes(),2)},s:function(){return e.lpad(n.getSeconds(),2)},u:function(){return e.lpad(1e3*n.getMilliseconds(),6)},e:function(){var t=/\((.*)\)/.exec(String(n))[1];return t||"Coordinated Universal Time"},I:function(){var t=new Date(r.Y(),0),e=Date.UTC(r.Y(),0),n=new Date(r.Y(),6),a=Date.UTC(r.Y(),6);return t-e!==n-a?1:0},O:function(){var t=n.getTimezoneOffset(),r=Math.abs(t);return(t>0?"-":"+")+e.lpad(100*Math.floor(r/60)+r%60,4)},P:function(){var t=r.O();return t.substr(0,3)+":"+t.substr(3,2)},T:function(){var t=(String(n).match(a.tzParts)||[""]).pop().replace(a.tzClip,"");return t||"UTC"},Z:function(){return 60*-n.getTimezoneOffset()},c:function(){return"Y-m-d\\TH:i:sP".replace(i,o)},r:function(){return"D, d M Y H:i:s O".replace(i,o)},U:function(){return n.getTime()/1e3||0}},o(t,t)},formatDate:function(t,e){var n,r,a,u,i,o=this,s="",c="\\";if("string"==typeof t&&(t=o.parseDate(t,e),!t))return null;if(t instanceof Date){for(a=e.length,n=0;a>n;n++)i=e.charAt(n),"S"!==i&&i!==c&&(n>0&&e.charAt(n-1)===c?s+=i:(u=o.parseFormat(i,t),n!==a-1&&o.intParts.test(i)&&"S"===e.charAt(n+1)&&(r=parseInt(u)||0,u+=o.dateSettings.ordinal(r)),s+=u));return s}return""}},t});


 $.datetimepicker.setLocale('ru');
 var logic1 = function( currentDateTime ){
		 if ( currentDateTime.getDate() == new Date().getDate() ){
				 this.setOptions({
						 minTime: new Date()
				 });
		 } else
		 {
				 this.setOptions({
						 minTime:'9:00'
				 });
		 }
 };

 $('#datetimepicker_dark').datetimepicker({
           theme:'dark',
		 // value: 'trololo',
		 // value: new Date(),
		 minDate: new Date(),
		 maxTime: '20:00',
		 yearStart: 2018,
		 yearEnd: 2018,
		 dayOfWeekStart : 1,
		 onSelectDate: logic1,
		 onShow: logic1

 });



// $(window).on('load', function () {
//   var $preloader = $('.preloader'),
//       $svg_anm   = $preloader.find('.preloader .svg');
//       $preloader.fadeOut('slow');
//       $svg_anm.fadeOut();
//   });

	// var hellopreloader = document.getElementById("preloader");
	// function fadeOutnojquery(el){el.style.opacity = 1;
	// 	var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;
	// 		if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1600);};
  //


var h = $(window).height();
$(window).scroll(function(){
	 windowTop = $(window).scrollTop();
	 if (windowTop > 100){
		 $(".fixed_menu").addClass("menu_back")
		 // $('.fixed_logo').css('opacity','1')
	 }
	 if (windowTop < 100){
		 $(".fixed_menu").removeClass("menu_back")
			// $(".fixed_logo").css("opacity","0")
	 	}
   });

	$('#lang_open, #lang').hover(
		function(){
		$('#lang').css('height','95px');
	},function(){
		$('#lang').css('height','0');
	});

//// для мобильного меню
$('#show_mobilemenu').click(function(){
	if ( $(this).hasClass('open_click') ) {
		$('#show_mobilemenu').removeClass('open_click'),
		$('.mobile_nav').removeClass('mobile_open'),
		$('.wrapper').removeClass('wrap_opened')
	}
	else{
		$(this).addClass('open_click'),
		$('.mobile_nav').addClass('mobile_open'),
		$('.wrapper').addClass('wrap_opened')
	}
});



//////////////
/*! WOW - v0.1.9 - 2014-05-10
* Copyright (c) 2014 Matthieu Aussaguel; Licensed MIT */(function(){var a,b,c=function(a,b){return function(){return a.apply(b,arguments)}};a=function(){function a(){}return a.prototype.extend=function(a,b){var c,d;for(c in a)d=a[c],null!=d&&(b[c]=d);return b},a.prototype.isMobile=function(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)},a}(),b=this.WeakMap||(b=function(){function a(){this.keys=[],this.values=[]}return a.prototype.get=function(a){var b,c,d,e,f;for(f=this.keys,b=d=0,e=f.length;e>d;b=++d)if(c=f[b],c===a)return this.values[b]},a.prototype.set=function(a,b){var c,d,e,f,g;for(g=this.keys,c=e=0,f=g.length;f>e;c=++e)if(d=g[c],d===a)return void(this.values[c]=b);return this.keys.push(a),this.values.push(b)},a}()),this.WOW=function(){function d(a){null==a&&(a={}),this.scrollCallback=c(this.scrollCallback,this),this.scrollHandler=c(this.scrollHandler,this),this.start=c(this.start,this),this.scrolled=!0,this.config=this.util().extend(a,this.defaults),this.animationNameCache=new b}return d.prototype.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0},d.prototype.init=function(){var a;return this.element=window.document.documentElement,"interactive"===(a=document.readyState)||"complete"===a?this.start():document.addEventListener("DOMContentLoaded",this.start)},d.prototype.start=function(){var a,b,c,d;if(this.boxes=this.element.getElementsByClassName(this.config.boxClass),this.boxes.length){if(this.disabled())return this.resetStyle();for(d=this.boxes,b=0,c=d.length;c>b;b++)a=d[b],this.applyStyle(a,!0);return window.addEventListener("scroll",this.scrollHandler,!1),window.addEventListener("resize",this.scrollHandler,!1),this.interval=setInterval(this.scrollCallback,50)}},d.prototype.stop=function(){return window.removeEventListener("scroll",this.scrollHandler,!1),window.removeEventListener("resize",this.scrollHandler,!1),null!=this.interval?clearInterval(this.interval):void 0},d.prototype.show=function(a){return this.applyStyle(a),a.className=""+a.className+" "+this.config.animateClass},d.prototype.applyStyle=function(a,b){var c,d,e;return d=a.getAttribute("data-wow-duration"),c=a.getAttribute("data-wow-delay"),e=a.getAttribute("data-wow-iteration"),this.animate(function(f){return function(){return f.customStyle(a,b,d,c,e)}}(this))},d.prototype.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),d.prototype.resetStyle=function(){var a,b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(a.setAttribute("style","visibility: visible;"));return e},d.prototype.customStyle=function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a},d.prototype.vendors=["moz","webkit"],d.prototype.vendorSet=function(a,b){var c,d,e,f;f=[];for(c in b)d=b[c],a[""+c]=d,f.push(function(){var b,f,g,h;for(g=this.vendors,h=[],b=0,f=g.length;f>b;b++)e=g[b],h.push(a[""+e+c.charAt(0).toUpperCase()+c.substr(1)]=d);return h}.call(this));return f},d.prototype.vendorCSS=function(a,b){var c,d,e,f,g,h;for(d=window.getComputedStyle(a),c=d.getPropertyCSSValue(b),h=this.vendors,f=0,g=h.length;g>f;f++)e=h[f],c=c||d.getPropertyCSSValue("-"+e+"-"+b);return c},d.prototype.animationName=function(a){var b;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=window.getComputedStyle(a).getPropertyValue("animation-name")}return"none"===b?"":b},d.prototype.cacheAnimationName=function(a){return this.animationNameCache.set(a,this.animationName(a))},d.prototype.cachedAnimationName=function(a){return this.animationNameCache.get(a)},d.prototype.scrollHandler=function(){return this.scrolled=!0},d.prototype.scrollCallback=function(){var a;return this.scrolled&&(this.scrolled=!1,this.boxes=function(){var b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],a&&(this.isVisible(a)?this.show(a):e.push(a));return e}.call(this),!this.boxes.length)?this.stop():void 0},d.prototype.offsetTop=function(a){for(var b;void 0===a.offsetTop;)a=a.parentNode;for(b=a.offsetTop;a=a.offsetParent;)b+=a.offsetTop;return b},d.prototype.isVisible=function(a){var b,c,d,e,f;return c=a.getAttribute("data-wow-offset")||this.config.offset,f=window.pageYOffset,e=f+this.element.clientHeight-c,d=this.offsetTop(a),b=d+a.clientHeight,e>=d&&b>=f},d.prototype.util=function(){return this._util||(this._util=new a)},d.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},d}()}).call(this);


new WOW().init();
/////////////////


/* Modernizr 2.7.1 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-csstransforms3d-csstransitions-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a){var e=a[d];if(!C(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.7.1",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.csstransforms3d=function(){var a=!!F("perspective");return a&&"webkitPerspective"in g.style&&w("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},q.csstransitions=function(){return F("transition")};for(var G in q)y(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)y(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},z(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,e.prefixed=function(a,b,c){return b?F(a,b,c):F(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

////////////////
/*** menu.js v1.0.0 * http://www.codrops.com */
(function() {

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	// from http://stackoverflow.com/a/11381730/989439
	function mobilecheck() {
		var check = false;
		(function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
		return check;
	}

	var docElem = window.document.documentElement,
		// support transitions
		support = Modernizr.csstransitions,
		// transition end event name
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		docscroll = 0,
		// click event (if mobile use touchstart)
		clickevent = mobilecheck() ? 'touchstart' : 'click';

	function init() {
		var showMenu = document.getElementById( 'showMenu' )
		var showMenu1 = document.getElementById('showMenu1'),
			perspectiveWrapper = document.getElementById( 'perspective' )
			if (perspectiveWrapper != null){
				container = perspectiveWrapper.querySelector( '.container' )
				if ( container != null){
					contentWrapper = container.querySelector( '.wrapper' )
				}
			}


if (showMenu != null) {

		showMenu.addEventListener( clickevent, function( ev ) {
			ev.stopPropagation();
			ev.preventDefault();
			docscroll = scrollY();
			// change top of contentWrapper
			contentWrapper.style.top = docscroll * -1 + 'px';
			// mac chrome issue:
			document.body.scrollTop = document.documentElement.scrollTop = 0;
			// add modalview class
			classie.add( perspectiveWrapper, 'modalview' );
			// animate..
			setTimeout( function() { classie.add( perspectiveWrapper, 'animate' ); }, 25 );
		});

		container.addEventListener( clickevent, function( ev ) {
			if( classie.has( perspectiveWrapper, 'animate') ) {
				var onEndTransFn = function( ev ) {
					if( support && ( ev.target.className !== 'container' || ev.propertyName.indexOf( 'transform' ) == -1 ) ) return;
					this.removeEventListener( transEndEventName, onEndTransFn );
					classie.remove( perspectiveWrapper, 'modalview' );
					// mac chrome issue:
					document.body.scrollTop = document.documentElement.scrollTop = docscroll;
					// change top of contentWrapper
					contentWrapper.style.top = '0px';
				};
				if( support ) {
					perspectiveWrapper.addEventListener( transEndEventName, onEndTransFn );
				}
				else {
					onEndTransFn.call();
				}
				classie.remove( perspectiveWrapper, 'animate' );
			}
		});


		perspectiveWrapper.addEventListener( clickevent, function( ev ) { return false; } );
	}

	if (showMenu1 != null) {

			showMenu1.addEventListener( clickevent, function( ev ) {
				ev.stopPropagation();
				ev.preventDefault();
				docscroll = scrollY();
				// change top of contentWrapper
				contentWrapper.style.top = docscroll * -1 + 'px';
				// mac chrome issue:
				document.body.scrollTop = document.documentElement.scrollTop = 0;
				// add modalview class
				classie.add( perspectiveWrapper, 'modalview' );
				// animate..
				setTimeout( function() { classie.add( perspectiveWrapper, 'animate' ); }, 25 );
			});

			container.addEventListener( clickevent, function( ev ) {
				if( classie.has( perspectiveWrapper, 'animate') ) {
					var onEndTransFn = function( ev ) {
						if( support && ( ev.target.className !== 'container' || ev.propertyName.indexOf( 'transform' ) == -1 ) ) return;
						this.removeEventListener( transEndEventName, onEndTransFn );
						classie.remove( perspectiveWrapper, 'modalview' );
						// mac chrome issue:
						document.body.scrollTop = document.documentElement.scrollTop = docscroll;
						// change top of contentWrapper
						contentWrapper.style.top = '0px';
					};
					if( support ) {
						perspectiveWrapper.addEventListener( transEndEventName, onEndTransFn );
					}
					else {
						onEndTransFn.call();
					}
					classie.remove( perspectiveWrapper, 'animate' );
				}
			});


			perspectiveWrapper.addEventListener( clickevent, function( ev ) { return false; } );
		}
}
		init();
})();
//////////////////
/*! * classie - class helper functions

/*global define: false */
( function( window ) {
'use strict';
// class helper functions from bonzo https://github.com/ded/bonzo
function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}
// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );


///============================================
//Для форм
///============================================
var ct = 0;
var addCount = document.createElement('input');
addCount.type = "hidden";
addCount.id = "count";
addCount.name = "count";
addCount.value = "0";
function countme(form) { var form;
    document.getElementById(form).appendChild(addCount);
    document.getElementById('count').value = ++ct;
}

function sendform(id){ var id;
var elem = $('#'+id);
   var data = elem.serialize();
    var inputs = [ "name", "email", "tel"];
    var r = /^[\w\.\d-_]+@[\w\.\d-_]+\.\w{2,4}$/i;
    var error=0;

    for (var key in inputs) {

        var el=elem[0].elements[inputs[key]]
        var clas=''
        el.classList.value=el.classList.value.replace(" error","")

        if (el.value.length<2){

            clas=' error'; error++;
            }
        if (key==1 && !r.test(el.value)){

             clas=' error'; error++;
            }

el.classList.value=el.classList.value+clas
    }

    if (error) {  return false;    }

       $.ajax({
           method: 'POST',
           url: '/modules/application.php',
           data: data,
           success: function(dat){

            $('#'+id)[0].reset();
            // $.magnificPopup.close();
             $('.succses__form_text').html(dat);
            $('.succses__form_info').fadeIn();
            setTimeout(function(){
               $('.succses__form_info').fadeOut();
            },8000)
           },
           error: function(dat){
              // console.log(dat);
           },
       });
return false;
}

$(document).on('click', '.submit', function(e){
  e.preventDefault();
  var id=$(this).data('id');
  var elem = $('#'+id);
  var data = elem.serialize();
  var inputs = [ "name", "email", "tel"];
  var r = /^[\w\.\d-_]+@[\w\.\d-_]+\.\w{2,4}$/i;
  var error=0;

    for (var key in inputs) {
      var el=elem[0].elements[inputs[key]]
      var clas=''
      if(el) {
        el.classList.value=el.classList.value.replace(" error","")
        if(el.value.length<2){
          clas=' error';
          error++;
          if($(el).hasClass('inputtelmask')) {
            $('.form__telephone').removeClass('form__email-valid').addClass('form__email-invalid');
          }
        }
        if(key==1 && !r.test(el.value)){
          clas=' error';
          $('.form__email').removeClass('form__email-valid').addClass('form__email-invalid');
          error++;
        }
        el.classList.value=el.classList.value+clas
      }
    }

    if (error) {  return false;    }
    console.log(data);
       $.ajax({
           method: 'POST',
           url: '/modules/application.php',
           data: data,
           success: function(dat){

            $('#'+id)[0].reset();
            // $.magnificPopup.close();
             $('.succses__form_text').html(dat);
            $('.succses__form_info').fadeIn();
            setTimeout(function(){
               $('.succses__form_info').fadeOut();
            },8000)
           },
           error: function(dat){
              // console.log(dat);
           },
       });


});


$(document).on('change', '.error', function(e){
	$(this).removeClass('error');
})

$('.form__email-input').on('change', function() {
  $('.form__email').removeClass('form__email-invalid').addClass('form__email-valid');
});

$('.inputtelmask').on('change', function() {
  $('.form__telephone').removeClass('form__email-invalid').addClass('form__email-valid');
});

/*
$(document).on('click', '.inputtelmask', function(e){
    $(".inputtelmask").inputmask("+380(99)999-99-99");
})
*/
// ALL FORMS
$('#call_on').click(function(e){
  e.preventDefault(),
  $('.overlay').fadeIn(300),
  $('#callback1').css('display','block').animate({opacity: 1,top: '46%'}, 200)
});


$('#call_on_bot').click(function(e){
  e.preventDefault(),
  $('.overlay').fadeIn(300),
  $('#callback1').css('display','block').animate({opacity: 1,top: '46%'}, 200)
});

$(document).on('click', '#formclose', function(){
  $('#callform').css('display','none'),
  $('.overlay').fadeOut(300)
});

$('#call_price').click(function(e){
  e.preventDefault(),
  $('.overlay').fadeIn(300),
  $('#callprice').css('display','block').animate({opacity: 1,top: '46%'}, 200)
});

$(document).on('click', '#formclose1', function(){
  $('#callprice').css('display','none'),
  $('.overlay').fadeOut(300)
});

$('#call_back').click(function(e){
  e.preventDefault(),
  $('.overlay').fadeIn(300),
  $('#callback1').css('display','block').animate({opacity: 1,top: '46%'}, 200)
});

$(document).on('click', '#formclose2', function(){
  $('#callback1').css('display','none'),
  $('.overlay').fadeOut(300)
});

$('#select-booking').click(function(e){
  e.preventDefault(),
  $('.overlay').fadeIn(300),
  $('#booking').css('display','block').animate({opacity: 1,top: '46%'}, 200)
});

$(document).on('click', '#formclose3', function(){
  $('#booking').css('display','none'),
  $('.overlay').fadeOut(300)
});



//============= Mask and international number start ========
;(function(){
    jQuery(function($){
      $.mask.definitions['#']='[0-9]';
      $.mask.definitions['9'] = '';
      $("form input[type='tel']").mask("+(38) ### ###-##-##",{placeholder:"_"});


    var telInput = $("form input[type='tel']");

    telInput.intlTelInput({
        initialCountry: 'ua',
        preferredCountries: ['ua' ,'ru'],
        nationalMode: false,
        utilsScript: '/js/js/utils.js'
    });

    $(telInput).on("countrychange", function(e, countryData) {
        $(this).intlTelInput("setNumber", "");
        $(this).trigger('blur');
        $(this).mask( '+(' + countryData.dialCode + ')' + ' ### ###-##-##',{placeholder:"_"});
    });

    telInput.on('keyup', function() {
      $(this).removeClass('error__invalid-number');
    });

    telInput.blur(function() {
      if ($(this).intlTelInput("isValidNumber")) {
        $(this).removeClass('error__invalid-number');
      } else {
        $(this).addClass('error__invalid-number');
      }
    });

  });
})();
//============= Mask and international number start ========


(function() {
  var visible = false;
  $('.js-icon-chevron-down').click(function() {
    if(!visible) {
      visible =!visible;
      $('.js-select-level-floor-list').removeClass('select-level-floor-list_hidden').addClass('select-level-floor-list_visble');
    } else {
      visible =!visible;
      /* $('.js-select-level-floor-list').removeClass('select-level-floor-list_visible').addClass('select-level-floor-list_hidden'); */
    }
  });
})();

 jQuery(function($){
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $(".js-icon-chevron-down"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0) { // и не по его дочерним элементам
			$('.js-select-level-floor-list').removeClass('select-level-floor-list_visible').addClass('select-level-floor-list_hidden'); // скрываем его
		}
	});
});

/* function globalPopupClose(block) {
    $(document).mouseup(function (e){
        var div = block;
        if (div.has(e.target).length === 0) {
            $('.js-select-level-floor-list').removeClass('select-level-floor-list_visible').addClass('select-level-floor-list_hidden'); // скрываем его
        }
    });
};
globalPopupClose($(".select_level_left"));
globalPopupClose($(".select_level_right")); */

// var w = $(window).width();
// if (w > 768) {
//   (function() {
//     function init() {
//       var speed = 1300,
//       easing = mina.backout;
// 			[].slice.call ( document.querySelectorAll( '#grid .grid_link' ) ).forEach( function( el ) {
//         var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
//         pathConfig = {
//           from : path.attr( 'd' ),
//           to : el.getAttribute( 'data-path-hover' )
//         };
//         el.addEventListener( 'mouseover', function() {
//           path.animate( { 'path' : pathConfig.to }, speed, easing );
//         } );
//         el.addEventListener( 'mouseout', function() {
//           path.animate( { 'path' : pathConfig.from }, speed, easing );
//         } );
//       } );
//     }
//     init();
//   })();
//
// } else {
//   (function() {
//     function init() {
//       var speed = 1300,
//       easing = mina.backout;
// 			[].slice.call ( document.querySelectorAll( '#grid .grid_link' ) ).forEach( function( el ) {
//         var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
//         pathConfig = {
//           from : path.attr( 'd' ),
//           to : el.getAttribute( 'data-path-hover' )
//         };
//         el.addEventListener( 'touchstart', function() {
//           path.animate( { 'path' : pathConfig.to }, speed, easing );
//         } );
//         el.addEventListener( 'touchend', function() {
//           path.animate( { 'path' : pathConfig.from }, speed, easing );
//         } );
//       } );
//     }
//     init();
//   })();
// };
