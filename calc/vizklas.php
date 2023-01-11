<section class="calculate-product">
    <div class="maincalc">    
        <form method="POST" enctype="multipart/form-data" name="form">                       
                <button type="button" name="returnbot"><label>Вернуться в начало</label></button>
    <div class="checkcontainer">

<input type="radio" id="radio1" checked name="radios" value="1">
<label for="radio1">1. Размер</label>

<input type="radio" id="radio2" name="radios" value="2">
<label for="radio2">2. Материал</label>

<input type="radio" id="radio3" name="radios" value="3">
<label for="radio3">3. Отделка</label>

<input type="radio" id="radio4" name="radios" value="4">
<label for="radio4">4. Цветность и печать</label>

<input type="radio" id="radio5" name="radios" value="5">
<label for="radio5">5. Персонализация</label>

<input type="radio" id="radio6" name="radios" value="6">
<label for="radio6">6. Базовая цена</label>

    </div>
    <div class="firstblockparent">
     <div class="firstblockparent2">
    <div class="firstblock" id="1block" style="display: none;">
     
       <ul class="tableultip">
        <h3 style="text-align: left;">1. Выберите размер и ориентацию</h3>
        <li>
       <label class="svgtitle">
       <input type="checkbox" name="format" value="90х50 мм" id = "format1"/>
     <img src="/wp-content/themes/theme/vizklas/img/9050.png" alt="" id="pech">90×50 мм
     <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
</li>
        <li>
    <label class="svgtitle">
      <input type="checkbox" name="format" value="50х90 мм" id = "format1"/>
      <img src="/wp-content/themes/theme/vizklas/img/9050v.png" alt="" id="pech">50х90 мм
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label> 
    </li>
    <li>
     <label class="svgtitle">
      <input type="checkbox" name="format" value="85х55 мм" id = "format1"/>
      <img src="/wp-content/themes/theme/vizklas/img/8555.png" alt="" id="pech">85х55 мм
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label> 
    </li>
     <li>
     <label class="svgtitle">
      <input type="checkbox" name="format" value="55х85 мм" id = "format1"/>
      <img src="/wp-content/themes/theme/vizklas/img/8555v.png" alt="" id="pech">55х85 мм
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label> 
    </li>
    <li>
     <label class="svgtitle">
      <input type="checkbox" name="format" value="55х55 мм" id = "format1"/>
      <img src="/wp-content/themes/theme/vizklas/img/5555.png" alt="" id="pech">55х55 мм
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label> 
    </li>
   <li> <label class="svgtitle" style="visibility: hidden;">
      <input type="checkbox">
       Двустороннняя
    </label> </li>

<li class="helper"></li>
</ul>
      </div>

      <div class="firstblock" id="2block" style="display: none;">
         <ul  class="tableultip">
          <h3 style="text-align: left;">2. Выберите бумагу</h3>
         <li>
          <label class="svgtitle" style="text-align: center;">
       <input type="checkbox" name="paper" value="Матовая 250 гр/м2" id = "paper1"/ data-mate ="0.8">
         <img src="/wp-content/themes/theme/vizklas/img/matbum.png" alt="" id="pech">Матовая<br>250 гр/м2
         <figcaption class="wp-caption-text">Выбрать</figcaption>
     </label></li>
        <li> <label class="svgtitle">
      <input type="checkbox" name="paper" value="Глянцевая 250 гр/м2" id = "paper1"/ data-mate = "1">
       <img src="/wp-content/themes/theme/vizklas/img/glabum.png" alt="" id="pech">Глянцевая<br>250 гр/м2
       <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label> </li>
    <li>
          <label class="svgtitle" style="text-align: center;">
       <input type="checkbox" name="paper" value="Хлопок, лен 220 гр/м2" id = "paper1"/ data-mate ="2.05">
         <img src="/wp-content/themes/theme/vizklas/img/lenbum.png" alt="" id="pech">Хлопок, лен<br>220 гр/м2
         <figcaption class="wp-caption-text">Выбрать</figcaption>
      <li> <label class="svgtitle" style="visibility: hidden;">
      <input type="checkbox">
       Двустороннняя
    </label> </li>
      <li> <label class="svgtitle" style="visibility: hidden;">
      <input type="checkbox">
       Двустороннняя
    </label> </li>

        <li class="helper"></li>
</ul>
     
      </div>
       
      <div class="firstblock" id="3block" style="display: none;">
         <ul class="tableultip">
          <h3 style="text-align: left;">3. Выберите отделку</h3>
        <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Без отделки" id = "color1" priceforoneot = "0">
      <img src="/wp-content/themes/theme/vizklas/img/BO.png" alt="" id="pech">Без отделки 
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
     </li>
      <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Ламинат глянцевый 80 гр. двусторонний" id = "color1" priceforoneot = "1.95">
      <img src="/wp-content/themes/theme/vizklas/img/80gl.png" alt="" id="pech">Двустороннее<br>глянцевое 80 гр.<br>ламинирование<br>
      <figcaption class="wp-caption-text">Выбрать</figcaption> 
    </label>
     </li>
      <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Ламинат глянцевый 250 гр. двусторонний" id = "color1" priceforoneot = "3.4">
      <img src="/wp-content/themes/theme/vizklas/img/250gl.png" alt="" id="pech">Двустороннее<br>глянцевое 250 гр.<br>ламинирование<br> 
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
     </li>
      <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Ламинат матовый 100 гр. двусторонний" id = "color1" priceforoneot = "3.1">
     <img src="/wp-content/themes/theme/vizklas/img/100ma.png" alt="" id="pech">Двустороннее<br>матовое 100 гр.<br>ламинирование<br> 
     <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
     </li>
      <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Ламинат Touch Cover двусторонний" id = "color1" priceforoneot = "3.5">
      <img src="/wp-content/themes/theme/vizklas/img/tcover.png" alt="" id="pech">Двустороннее<br>ламинирование<br>Touch Cover
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
     </li>
     <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Ламинат глянцевый 80 гр. односторонний" id = "color1" priceforoneot = "0.98">
      <img src="/wp-content/themes/theme/vizklas/img/80gl1.png" alt="" id="pech">Одностороннее<br>глянцевое 80 гр.<br>ламинирование<br> 
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
     </li>
     <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Ламинат глянцевый 250 гр. односторонний" id = "color1" priceforoneot = "1.7">
      <img src="/wp-content/themes/theme/vizklas/img/250gl1.png" alt="" id="pech">Одностороннее<br>глянцевое 250 гр.<br>ламинирование<br> 
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
     </li>
     <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Ламинат матовый 100 гр. односторонний" id = "color1" priceforoneot = "1.6">
      <img src="/wp-content/themes/theme/vizklas/img/100ma1.png" alt="" id="pech">Одностороннее<br>матовое 100 гр.<br>ламинирование<br> 
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
     </li>
     <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Ламинат Touch Cover" id = "color1" priceforoneot = "1.8">
      <img src="/wp-content/themes/theme/vizklas/img/tcover1.png" alt="" id="pech">Одностороннее<br>ламинирование<br>Touch Cover
      <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label>
     </li>
     <li> <label class="svgtitle" style="visibility: hidden;">
      <input type="checkbox">
       Двусторонняя
    </label> </li>
    
      <li class="helper"></li>
</ul>
      </div>

<div class="firstblock" id="3block2" style="display: none;">
         <ul class="tableultip">
          <h3 style="text-align: left;">3. Выберите отделку</h3>
        <li>
         <label class="svgtitle">
       <input type="checkbox" name="color" value="Без отделки" id = "color1" priceforoneot = "0">
      <img src="/wp-content/themes/theme/vizklas/img/BO.png" alt="" id="pech"><br>Без отделки 
    </label>
     </li>
      <li> <label class="svgtitle" style="visibility: hidden;">
      <input type="checkbox">
       Двусторонняя
    </label> </li>
     <li> <label class="svgtitle" style="visibility: hidden;">
      <input type="checkbox">
       Двусторонняя
    </label> </li>
     <li> <label class="svgtitle" style="visibility: hidden;">
      <input type="checkbox">
       Двусторонняя
    </label> </li>
    <li> <label class="svgtitle" style="visibility: hidden;">
      <input type="checkbox">
       Двусторонняя
    </label> </li>
<li class="helper"></li>
</ul>
      </div>
      <div class="firstblock" id="4block" style="display: none;">
         
         <ul class="tableultip">
      <h3 style="text-align: left;">4. Выберите параметры печати</h3>
        <li>
          <label class="svgtitle" style="text-align: center;">
       <input type="checkbox" name="listkol" value="4+4" id = "listkol1" numberoption = "1"/>
         <img src="/wp-content/themes/theme/vizklas/img/44.png" alt="" id="pech">4+4<br>Цветная <br>двусторонняя
         <figcaption class="wp-caption-text">Выбрать</figcaption>
     </label></li>
        <li> <label class="svgtitle">
      <input type="checkbox" name="listkol" value="4+1" id = "listkol1" numberoption = "2"/>
       <img src="/wp-content/themes/theme/vizklas/img/41.png" alt="" id="pech">4+1<br>Одна сторона - цветная<br>Другая - черно-белая<figcaption class="wp-caption-text">Выбрать</figcaption>
    
    </label> </li>
    <li> <label class="svgtitle">
      <input type="checkbox" name="listkol" value="4+0" id = "listkol1" numberoption = "3"/>
       <img src="/wp-content/themes/theme/vizklas/img/40.png" alt="" id="pech">4+0<br>Цветная<br>односторонняя
         <figcaption class="wp-caption-text">Выбрать</figcaption>
    
    </label> </li>
    <li> <label class="svgtitle">
      <input type="checkbox" name="listkol" value="1+1" id = "listkol1" numberoption = "4"/>
       <img src="/wp-content/themes/theme/vizklas/img/11.png" alt="" id="pech">1+1<br>Черно-белая<br>двусторонняя
       <figcaption class="wp-caption-text">Выбрать</figcaption>
    
    </label> </li>
     <li> <label class="svgtitle">
      <input type="checkbox" name="listkol" value="1+0" id = "listkol1" numberoption = "4"/>
       <img src="/wp-content/themes/theme/vizklas/img/10.png" alt="" id="pech">1+0<br>
       Черно-белая<br>односторонняя
       <figcaption class="wp-caption-text">Выбрать</figcaption>
    </label> </li>
      <li class="helper"></li>
</ul>
      </div>

       <div class="firstblock" id="5block" style="display: none;">
         <ul class="tableultipv">
           <h3 style="text-align: left;">5. Персоналии</h3>
        
          <label class="svgtitle2">
       <input type="radio" name="pechat" value="1" id = "pechat1">
        &nbsp;&nbsp;1. Один <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Выберите, если заказываете визитки только для себя</span></a>  
     </label>
     <p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="2" id = "pechat1">
        &nbsp;&nbsp;2. Два <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>
     <p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="3" id = "pechat1">
        &nbsp;&nbsp;3. Три <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>
<p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="4" id = "pechat1">
        &nbsp;&nbsp;4. Четыре <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>
     <p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="5" id = "pechat1">
        &nbsp;&nbsp;5. Пять <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>
     <p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="6" id = "pechat1">
        &nbsp;&nbsp;6. Шесть <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>
     <p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="7" id = "pechat1">
        &nbsp;&nbsp;7. Семь <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>
     <p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="8" id = "pechat1">
        &nbsp;&nbsp;8. Восемь <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>
     <p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="9" id = "pechat1">
        &nbsp;&nbsp;9. Девять <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>
     <p class="margin-bottom-15"></p>
      <label class="svgtitle2">
       <input type="radio" name="pechat" value="10" id = "pechat1">
        &nbsp;&nbsp;10. Десять <a class="help" href="#" style="float: right"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Разместите в одном заказе визитки на несколько человек. Если Вам нужно разное количество визиток для разных людей - оставьте комментарий в примечании к заказу на следующей странице!</span></a>
     </label>

       
      <li class="helper"></li>
</ul>
      </div>

      <div class="firstblock2" id="6block" style="display: none;">
      
  <table>
    <h3 style="text-align: center; margin-top: -1px; color: red">Для заказа нажмите на цену</h3>
   <thead>
    <tr>
     <th>Тираж</th>
    <th>Цена за единицу <a class="help" href="#"><img src="/wp-content/themes/theme/vizklas/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Здесь указана цена изготовления одного меню. В стоимость тиража также будет включена стоимость плоттерной резки - 2 рубля за каждые 50 листов</span></a></th>
     <th>Стоимость тиража <br> Срок изготовления до 3 дней</th>
     <th>Стоимость тиража <br> Срок изготовления 1 день</th>
    </tr>
   </thead>
   <tbody>
    <tr>
    <td>
      <input type="range" name="svoitir" id="svoitir" min="24"; max = "1200" step="24" style="display: none;" />
<input type="text" name="" id="output" style="display: none;" />
      <input type="range" name="svoitir" id="svoitir2" min="18"; max = "900" step="18" style="display: none;"/>
      <input type="text" name="" id="output2" style="display: none;" />
   </td>
     <td>  <p class="prob">
     <span id="price1s"></span><span class="rub2"></span></p>
   </td>
   <td>  
   <button type="submit" class="rizobut" name="zayvka1" id="zayvka1" vallue="pyat">
    <p class="prob">
     <span id="price2s"></span><span class="rub2"></span></p>
     </button>
   </td>
   <td>  <button type="submit" class="rizobut" name="zayvka1" id="zayvkat1" vallue="pyat"><p class="prob">
     <span id="price3s"></span><span class="rub2"></span></p> </button>
  
    </tr>
   </tbody>
   <tbody>
    <tr>
     <td>  <p class="prob">
     <span id="tir1"></span></p>
   </td>
     <td>  <p class="prob">
     <span id="price11"></span><span class="rub2"> р.</span></p>
   </td>
   <td>  
    <button type="submit" class="rizobut" name="zayvka1" id="zayvka2" vallue="pyat">
    <p class="prob">
     <span id="price21"></span><span class="rub2"> р.</span></p>
    </button>
   </td>
   <td>  
 <button type="submit" class="rizobut" name="zayvka1" id="zayvkat2" vallue="pyat">
    <p class="prob">
     <span id="price31"></span><span class="rub2"> р.</span></p> </button>
   </td>
   </td>
    </tr>
   </tbody>
   <tbody>
    <tr>
     <td>  <p class="prob">
     <span id="tir2"></span></p>
   </td>
     <td>  <p class="prob">
     <span id="price12"></span><span class="rub2"> р.</span></p>
   </td>
   <td>  
     <button type="submit" class="rizobut" name="zayvka1" id="zayvka3" vallue="pyat">
      <p class="prob">
     <span id="price22"></span><span class="rub2"> р.</span></p>
    </button>
   </td>
   <td>  
 <button type="submit" class="rizobut" name="zayvka1" id="zayvkat3" vallue="pyat">
    <p class="prob">
     <span id="price32"></span><span class="rub2"> р.</span></p> </button>
    </tr>
       </tbody>
       <tbody>
    <tr>
    <td>  <p class="prob">
     <span id="tir3"></span></p>
   </td>
     <td>  <p class="prob">
     <span id="price13"></span><span class="rub2"> р.</span></p>
   </td>
  
   <td>  
     <button type="submit" class="rizobut" name="zayvka1" id="zayvka4" vallue="pyat">
      <p class="prob">
     <span id="price23"></span><span class="rub2"> р.</span></p>
    </button>
   </td>
   <td>  
 <button type="submit" class="rizobut" name="zayvka1" id="zayvkat4" vallue="pyat">
    <p class="prob">
     <span id="price33"></span><span class="rub2"> р.</span></p> </button>
    </tr>
   </tbody>
   <tbody>
    <tr>
    <td>  <p class="prob">
     <span id="tir4"></span></p>
   </td>
     <td>  <p class="prob">
     <span id="price14"></span><span class="rub2"> р.</span></p>
   </td>
   
   <td> 
   <button type="submit" class="rizobut" name="zayvka1" id="zayvka5" vallue="pyat">
    <p class="prob">
     <span id="price24"></span><span class="rub2"> р.</span></p>
    </button>
   </td>
   <td>  
 <button type="submit" class="rizobut" name="zayvka1" id="zayvkat5" vallue="pyat">
    <p class="prob">
     <span id="price34"></span><span class="rub2"> р.</span></p> </button>
    </tr>
   </tbody>
   <tbody>
    <tr>
    <td>  <p class="prob">
     <span id="tir5"></span></p>
   </td>
     <td>  <p class="prob">
     <span id="price15"></span><span class="rub2"> р.</span></p>
   </td>
  
   <td>  
     <button type="submit" class="rizobut" name="zayvka1" id="zayvka6" vallue="pyat">
      <p class="prob">
     <span id="price25"></span><span class="rub2"> р.</span></p>
       </button>  
   </td>
   <td> 
 <button type="submit" class="rizobut" name="zayvka1" id="zayvkat6" vallue="pyat">
    <p class="prob">
     <span id="price35"></span><span class="rub2"> р.</span></p> </button>
    </tr>
   </tbody>
   
   <tbody>
    <tr>
    <td>  <p class="prob">
     <span id="tir6"></span></p>
   </td>
     <td>  <p class="prob">
     <span id="price16"></span><span class="rub2"> р.</span></p>
   </td>
   <td>  
    <button type="submit" class="rizobut" name="zayvka1" id="zayvka7" vallue="pyat">
    <p class="prob">
     <span id="price26"></span><span class="rub2"> р.</span></p>
   </button>
   </td>
   <td>  
 <button type="submit" class="rizobut" name="zayvka1" id="zayvkat7" vallue="pyat">
    <p class="prob">
     <span id="price36"></span><span class="rub2"> р.</span></p> </button>
    </tr>
   </tbody>
  </table>

  <div class="contactcontainer"></div>
  <div class="contactcontainerchild required">
  <label for="" style="text-align: center;">Ваше имя</label>
  <input type="text" class="form-control" name="user_name" placeholder="Например, Антон Петров" id="" value="">
  </div>
  <div class="contactcontainerchild required" >
  <label for="" style="text-align: center;">Ваш телефон</label>
  <input type="text" class="form-control" name="user_phone" placeholder="+79089998998" id="">
  </div>
  <div class="contactcontainerchild required">
  <label for="" style="text-align: center;" >Ваша почта</label>
  <input type="text" class="form-control" name="user_e-mail" placeholder="mail@mail.ru">
  </div>
  <div class="contactcontainerchild1">
  <label for="" style="text-align: center;">Примечание</label>
  <input type = "text" class="form-control" placeholder="Забрендируйте каждый лист..." name="user_prim">
  </div>
  <p class="margin-bottom-15"> </p>
  
 <div class="contactcontainerchild2">
  <input type="radio" checked name="contactzagr" class="form-control" id="diz" value="Работа с дизайнером">
<label for = "diz"><span></span>Работа с дизайнером</label>
</div>
<p class="margin-bottom-15"> </p>
<div class="contactcontainerchild2">
 <input type="radio" name="contactzagr" class="form-control" id="zagr" value="Загружен файл макета">
<label for = "zagr" ><span></span>Загрузить файл макета</label>
<input style="display: none" id="file-input" type="file" name="file" id="file" multiple >
</div>

      </div>
      <div class="secondblock">
        <b><h3 style="text-align: center;">Ваше изделие</h3></b>
<p class="prob">
                            <h4 style="margin-top: -2px">Размер: <span id="format2"></span> </h4>
                        </p>
                         <p class="prob">
                            <h4 style="margin-top: -2px">Бумага: <span id="paper2"></span> </h4>
                        </p>
                         <p class="prob">
                            <h4 style="margin-top: -2px">Отделка: <span id="colorpaper2"></span> </h4>
                        </p>
                        <p class="prob">
                            <h4 style="margin-top: -2px">Параметры печати: <span id="listkol2"></span> </h4>
                        </p>
                         <p class="prob">
                            <h4 style="margin-top: -2px">Вариаций: <span id="pechat2"></span></h4>
                        </p>
      </div>
      </div>
       </div>           
       </div>  
       <input type="text" name="wtfbut" class="form-control" id="wtfbut" value="" style="display: none;">

 <input type="text" name="format3" class="form-control" id="format3" value="" style="display: none;">
  <input type="text" name="paper3" class="form-control" id="paper3" value="" style="display: none;">
   <input type="text" name="colorpaper3" class="form-control" id="colorpaper3" value="" style="display: none;">
    <input type="text" name="pechat3" class="form-control" id="pechat3" value="" style="display: none;">
     <input type="text" name="listkol3" class="form-control" id="listkol3" value="" style="display: none;">
     <input type="text" name="svoitir3" class="form-control" id="svoitir3" value="" style="display: none;">

 
 <input type="text" name="pricem11" class="form-control" id="pricem11" value="" style="display: none;">
 <input type="text" name="pricem111" class="form-control" id="pricem111" value="" style="display: none;">

 <input type="text" name="pricem2" class="form-control" id="pricem2" value="" style="display: none;">
 <input type="text" name="pricem22" class="form-control" id="pricem22" value="" style="display: none;">
 <input type="text" name="pricem222" class="form-control" id="pricem222" value="" style="display: none;">

 <input type="text" name="pricem3" class="form-control" id="pricem3" value="" style="display: none;">
 <input type="text" name="pricem33" class="form-control" id="pricem33" value="" style="display: none;">
 <input type="text" name="pricem333" class="form-control" id="pricem333" value="" style="display: none;">

 <input type="text" name="pricem4" class="form-control" id="pricem4" value="" style="display: none;">
 <input type="text" name="pricem44" class="form-control" id="pricem44" value="" style="display: none;">
 <input type="text" name="pricem444" class="form-control" id="pricem444" value="" style="display: none;">

 <input type="text" name="pricem5" class="form-control" id="pricem5" value="" style="display: none;">
 <input type="text" name="pricem55" class="form-control" id="pricem55" value="" style="display: none;">
 <input type="text" name="pricem555" class="form-control" id="pricem555" value="" style="display: none;">

 <input type="text" name="pricem6" class="form-control" id="pricem6" value="" style="display: none;">
 <input type="text" name="pricem66" class="form-control" id="pricem66" value="" style="display: none;">
 <input type="text" name="pricem666" class="form-control" id="pricem666" value="" style="display: none;">

 <input type="text" name="pricem7" class="form-control" id="pricem7" value="" style="display: none;">
 <input type="text" name="pricem77" class="form-control" id="pricem77" value="" style="display: none;">
 <input type="text" name="pricem777" class="form-control" id="pricem777" value="" style="display: none;">


 <input type="text" name="pricemt11" class="form-control" id="pricemt11" value="" style="display: none;">


 <input type="text" name="pricemt2" class="form-control" id="pricemt2" value="" style="display: none;">


 <input type="text" name="pricemt3" class="form-control" id="pricemt3" value="" style="display: none;">


 <input type="text" name="pricemt4" class="form-control" id="pricemt4" value="" style="display: none;">
 

 <input type="text" name="pricemt5" class="form-control" id="pricemt5" value="" style="display: none;">


 <input type="text" name="pricemt6" class="form-control" id="pricemt6" value="" style="display: none;">


 <input type="text" name="pricemt7" class="form-control" id="pricemt7" value="" style="display: none;">
</form>
</section>
  <h5 style="text-align: center;">Цены указаны с учетом стоимости материала<br>
         Цены не являются окончательными и могут быть изменены в зависимости от сложности, срочности и других параметров заказа
        </h5>