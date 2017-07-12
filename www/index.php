<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/css/lightgallery.css" /> 
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<script src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/js/lightgallery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/js/lg-thumbnail.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.6/js/lg-fullscreen.js"></script>
 <style type="text/css">
   .lg-backdrop.in {
    opacity: 0.7;
}
  </style>

    <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
</head>
	
   
<title>Anna Volodkina makeup</title>

<body>
<script type="text/javascript">
	var s = 1;
</script>
<?php  
		$n=0;
		$p=1;
  /* Функция для удаления лишних файлов: сюда, помимо удаления текущей и родительской директории, так же можно добавить файлы, не являющиеся картинкой (проверяя расширение) */
  function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
      if ($files[$i] != "." && $files[$i] != ".." && $files[$i] != "thumbs" && $files[$i] != "dynamic") $result[] = $files[$i];
    }

    return $result;
  }
  $dir = "images"; // Путь к директории, в которой лежат изображения
  $files = scandir($dir); // Получаем список файлов из этой директории
  $files = excess($files); // Удаляем лишние файлы
  /* Дальше происходит вывод изображений на страницу сайта (по 4 штуки на одну строку) */
 
?>
<script type="text/javascript">
<!--
function divdown(){
if (s > 1) {
var el=document.getElementById(s);
 $(el).toggle('slide',{direction: 'down'},1000);
s = s-1;
el=document.getElementById(s);
 $(el).toggle('slide',{direction: 'up'}, 1000);
}else{
var el=document.getElementById(s);
$(el).effect('bounce', { distance: 10 });
}
}
function divup(){
if (s < <?php echo count($files)/6 ?>){

var el=document.getElementById(s);

 $(el).toggle('slide',{direction: 'up'}, 1000);


s = s+1;

el=document.getElementById(s);
 $(el).toggle('slide',{direction: 'down'},1000);
} else{
var el=document.getElementById(s);
$(el).effect('bounce',{ distance: 10 });
}
}
//-->
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $(".jek").lightGallery({
			'backdrop-opacity': "0",
			download: false,
			thumbnail:false,
			fullscreen: true
		}); 
    });
</script>


<div class="mas">

	<div  class="firstdiv" lang="en" style="overflow: visible"> 
	<div class="side" lang="ru">
		<ul class="menu">
			<li class="menu__list"><a class="menubtn" href="#"  ></a>
				<ul class="menu__drop" lang="ru">
					<li><a href="#price">Прайс-лист</a></li>
					<li><a href="#port">Портфолио</a></li>
					<li><a href="#fot">Фотографы</a></li>
					<li><a href="#stud">Обучение</a></li>
					<li><a href="#cont">Контакты</a></li>
				</ul> 
			</li>
		</ul>
	</div>
	<span class="mainspan" >ANNA VOLODKINA</span> <div class="enter"></div> <div class="enter"></div><span class="submainspan">Makeup & hairstyle</span> <hr id="mainchert"> </div>
	<div  class="seconddiv"  lang="ru"><span class="ruspan"><hr class="lchert">ЧЕМ Я ЗАНИМАЮСЬ?<hr class="rchert"></span><div class="enter"></div> <span class="submainspan"> я создаю тот образ, которого вы заслуживаете </span></div>
	<div  class="thirddiv" lang="ru"> <span class="ruspan"><a name="price"></a>Макияж &nbsp; // &nbsp; </span><span class="ruspan">от </span><span class="ruspan" lang="en">1200&nbsp;</span><div class="ruble"></div> <div class="enter"></div>
	<div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><span class="submainspan">-Cвадебный <div class="enter"></div> -Вечерний//дневной <div class="enter"></div> -Деловой <div class="enter"></div> -На выпускной <div class="enter"></div> -Праздничный <div class="enter"></div> -Мужской <div class="enter"></div> -Для фотосессии и портфолио </span>
	</div>
	<div  class="quatrodiv" lang="ru"><span class="ruspan">Прическа &nbsp; // &nbsp; </span><span class="ruspan">от </span><span class="ruspan" lang="en">800&nbsp;</span><div class="ruble"></div> <div class="enter"></div>
	<div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><span class="submainspan">-Cвадебные <div class="enter"></div> -Вечерние</span></div>
	<div class="seconddiv1"  lang="ru"><hr class="lchert"><span class="ruspan">ТОЛЬКО ЛУЧШИЙ ХУДОЖЕСТВЕННЫЙ МАКИЯЖ</span><hr class="rchert"><div class="enter"></div> </div>
	<div class="portfoliodiv"><center><span class="titlespan"><a name="port"></a>ПОРТФОЛИО</span> <div class="arro" onclick="divdown();" id ="down"></div><div class="arro" onclick="divup();" id ="up"></div></div>
	<div class="cont">
	
		
<?php for ($i = 0, $j=0; $i < count($files); $i++, $j++) { 
	if (($j % 6 == 0) && ($j == $n)) { 	
	
?>	
<div class="jek" id= "<?php echo "$p";?>" >	<?php }
	if (($j % 6 == 0) && ($j != $n)) { 	
	$n = $j;
	$p++;
 ?>  </div> <div class="jek" id= "<?php echo "$p";?>" style="display:none;"> <?php } ?>
  <a href="<?=$dir."/".$files[$i]?>"><div class="im" style = "background: url(<?=$dir."/".$files[$i]?>) no-repeat center center"></div></a>
  

	
<?php } ?> 		

		
	</div>
	</div>
	


	<div class="seconddiv"  lang="ru"><a name="fot"></a><span class="ruspan"><hr class="lchert">А КТО ЗА ОБЪЕКТИВОМ?<hr class="rchert"></span><div class="enter"></div> <span class="submainspan"> Фотографы, с которыми я работаю </span></div>
	<div class="phline" lang="ru"><div class="phbutton" style="overflow: visible"><a href="http://vk.com/volodkin_kirill"><span class="button">Кирилл<div class="enter"></div>Володкин</span></a></div><div class="phbutton" style="overflow: visible"><a href="http://vk.com/kityakityakitya"><span class="button">Кристина<div class="enter"></div>Топашян</span></a></div><div class="phbutton" style="overflow: visible"><a href="http://vk.com/pchelkova"><span class="button">Ксения<div class="enter"></div>Пчелкова</span></a></div><div class="phbutton" style="overflow: visible"><a href="http://vk.com/lubov_zudilova"><span class="button">Любовь<div class="enter"></div>Зудилова</span></a></div></div>
	
	<div class="panel" lang="ru" style="overflow: visible"><center><span class="titlespan"><a name="stud"></a>ОБУЧЕНИЕ</span><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div></center></div>
	<div class="obuch" lang="ru"><span class="ruspan">Основы салонного макияжа &nbsp; // &nbsp; </span><span class="ruspan">от </span><span class="ruspan" lang="en">10000&nbsp;</span><div class="ruble"></div> <div class="enter"></div>
	<div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><span class="submainspan">Курс - <span class="submainspan" lang="en">10</span> занятий с<div class="enter"></div>фотосессией для портфолио.<div class="enter"></div>Форма обучения: индивидуальная.</span></div>
	<div class="obuch1" lang="ru"><span class="ruspan">Сам себе визажист &nbsp; // &nbsp; </span><span class="ruspan">от </span><span class="ruspan" lang="en">5000&nbsp;</span><div class="ruble"></div> <div class="enter"></div>
	<div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><div class="enter"></div><span class="submainspan">Курс - <span class="submainspan" lang="en">5</span> занятий с<div class="enter"></div>циклом портретных фотографий.<div class="enter"></div>Форма обучения: индивидуальная.</span></div>
	<div class="seconddiv1"  lang="ru"><hr class="lchert"><span class="ruspan">ДАВАЙТЕ ВСТРЕТИМСЯ!</span><hr class="rchert"><div class="enter"></div> </div>
	<div class="footdiv" lang="en"><div class="num" style="overflow: visible"><a name="cont"></a><span>8-923-527-09-00</span></div><div class="konts"> <a class="button1" href="https://ru-ru.facebook.com/people/%D0%90%D0%BD%D1%8F-%D0%92%D0%BE%D0%BB%D0%BE%D0%B4%D0%BA%D0%B8%D0%BD%D0%B0/100010435238614"></a> <a class="button2" href="https://instagram.com/ankavolodkina"></a> <a class="button3" href="https://vk.com/make_up.kemerovo"></a><a class="button4" href="https://www.youtube.com/channel/UCu1ssHIGS-klwMHFhn4UfNg"></a><div class="web"><span class="submainspan" lang="ru">© студия </span><span class="submainspan" lang="it">web</span><span class="submainspan" lang="ru">-дизайна <span class="submainspan" lang="en">2015</span> кемерово</span></div></div>
	
</div>

	</body>
</html>