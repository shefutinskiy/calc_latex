<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="calc/script.js"></script>
<link href="calc/bootstrap.min.css" rel="stylesheet">
<link href="calc/style.css" rel="stylesheet">

<section class="calculate-product">
    <div class = "calculatorall">
        <div class = "teloproduct">
          <form method="POST" enctype="multipart/form-data">
              <div class="product-label">
    <label>
      <input type="radio" checked name="prod" value="Обои" id = "prod"/>
      <img src="/wp-content/themes/theme/calc/img/oboi1k.svg" alt="" id="oboi1k">
    </label>
    <label>
      <input type="radio" name="prod" value="Холст" id = "prod"/>
      <img src="/wp-content/themes/theme/calc/img/holst1k.svg" alt="" id="oboi1k">
    </label>  
    <label>
      <input type="radio" name="prod" value="Ткань" id = "prod"/>
      <img src="/wp-content/themes/theme/calc/img/tkan1k.svg" alt="" id="oboi1k">
    </label>  
    <label>
      <input type="radio" name="prod" value="Флаг" id = "prod"/>
      <img src="/wp-content/themes/theme/calc/img/flag1k.svg" alt="" id="oboi1k">
    </label>  
    <label>
      <input type="radio" name="prod" value="Фреска" id = "prod"/>
      <img src="/wp-content/themes/theme/calc/img/fres1k.svg" alt="" id="oboi1k">
    </label> 
                  </div>
              </div>
              <div class = "telocalc">
                   <div class = "calc">

                         <div class="form-group" id="oboi1" style="display: none;">
                        <p class = "catname2"><label>Технические параметры</label></p>
                      <select name="mateoboi" id="mateoboi" class="form-control">
<option data-mate="630" value="Обои виниловые (Россия)">Обои виниловые (Россия)
</option> 
<option data-mate="530" value="Обои бумажные текстурные">Обои бумажные текстурные
</option>
<option data-mate="1200"value="Обои флизелиновые">Обои флизелиновые
</option> 
</select>    
    <div class="dsh">
    <div class="box">
    <div>
    <br>
    Длина
    <input type="number" name="oboidlin" class="form-control" id="oboidlin" value="" placeholder="0.00 м." step = "0.01">
    </div>
    

    <div>
    
    Ширина рулона
  <input type="text" name="oboishir" class="form-control" id="oboishir" value="">
    
    </div>
   
    <div>
    
    Площадь
   <input type="text" name="oboiploc" class="form-control" id="oboiploc" value="">
    
    </div>
    </div>
    </div>

    </div>



    <div class="form-group" id="hols1" style="display: none;">
<p class = "catname2"><label>Технические параметры</label></p><select name="holsmate" id="holsmate" class="form-control">
<option data-mate="950" value="Холст натуральный матовый">Холст натуральный матовый
</option> 
<option data-mate="1100" value="Холст натуральный глянцевый">Холст натуральный глянцевый
</option>
</select>
<br>

<div class = "holsvibotipa">
      <div class = "holsvibotipachild">
<label>
      <input type="radio" name="holst" value="Холст в метрах" id = "holsme"/>
      <img src="/wp-content/themes/theme/calc/img/holstmetr.svg" alt="" id="holstmetr">
    </label>
    <p class="reg" style="text-align: center">Холст в метрах</p>       
    </div>

    <div class = "holsvibotipachild1">
<label>
      <input type="radio" checked name="holst" value="Холст на раме без рамки" id = "holsbr"/>
      <img src="/wp-content/themes/theme/calc/img/holstbr.svg" alt="" id="oboi1k">
    </label>  
    <p class="reg" style="text-align: center">Холст<br>на раме<br>без рамки</p>
    </div>

    <div class = "holsvibotipachild2">
<label>
      <input type="radio" name="holst" value="Холст на раме с рамкой" id = "holssr"/>
      <img src="/wp-content/themes/theme/calc/img/holstsr.svg" alt="" id="oboi1k">
    </label>
    <p class="reg" style="text-align: center">Холст<br>на раме<br>с рамкой&nbsp;&nbsp;<a class="help" href="#"><img src="/wp-content/themes/theme/rizo/img/vopr.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">В стоимость не будет включена багетная рама. Её выбор осуществляется из отдельного каталога, который будет направлен на электронный адрес, указанный при отправке заявки. Это сделано из-за большого числа багетных рам, стоимость которых разнится от 300 рублей до 80 тысяч.</span></a></p>
    </div>
      </div>

       <div class="form-group" id="hols2" style="display: none";>
    <div class="dsh">
    <div class="box">
    <div>
    
    Длина<input type="number" name="holsdlin" class="form-control" id="holsdlin" value="" placeholder="0.00 м." step = "0.01">
    
    </div>

    <div>
    
    Ширина<input type="number" name="holsshir" class="form-control" id="holsshir" value="" placeholder="0.00 м." step = "0.01">
    
    </div>
   
    <div>
   
Площадь<input type="text" name="holsploc" class="form-control" id="holsploc" value="">
    
    </div>
    </div> 
    </div>
    </div>

    <div class="form-group" id="hols3" style="display: none";>
    <div class="dsh2">
    <div class="box2">
    <div>
    
           <label id = "holsnaz1";>Выберите размер</label>
<select name="holsrazm" id="holsrazm1" class="form-control";>
<option data-mate="605" value="30х40 см" razmh = "0.12" dlinp = "0.3" shirp = "0.4">30х40 см
</option> 
<option data-mate="706" value="40х50 см" razmh = "0.2" dlinp = "0.4" shirp = "0.5">40х50 см
</option>
<option data-mate="896" value="50х60 см" razmh = "0.3" dlinp = "0.5" shirp = "0.6">50х60 см
</option>
<option data-mate="1383" value="860х80 см" razmh = "0.4" dlinp = "0.6" shirp = "0.8">60х80 см
</option>
<option data-mate="2240" value="70х100 см" razmh = "0.7" dlinp = "0.7" shirp = "1">70х100 см
</option>
<option data-mate="2644" value="90х120 см" razmh = "1.08" dlinp = "0.9" shirp = "1.2">90х120 см
</option>
</select>                                 
    
    </div>
    <div>
        Количество <input type="number" name="holskoli" class="form-control" id="holskoli" value="1" step = "1">
                                   
</div>
</div>
    </div>
    </div>

    <div class="form-group" id="hols4" style="display: none";>
    <div class="dsh2">
    <div class="box2">
    <div>

    <label id = "holsnaz2";>Выберите размер</label>
<select name="holsrazm1" id="holsrazm2" class="form-control";>
<option data-mate="455" value="30х40 см" razmh = "0.12" dlinp = "0.3" shirp = "0.4">30х40 см
</option> 
<option data-mate="530" value="40х50 см" razmh = "0.2" dlinp = "0.4" shirp = "0.5">40х50 см
</option>
<option data-mate="670" value="50х60 см" razmh = "0.3" dlinp = "0.5" shirp = "0.6">50х60 см
</option>
<option data-mate="1040" value="860х80 см" razmh = "0.4" dlinp = "0.6" shirp = "0.80">60х80 см
</option>
<option data-mate="1680" value="70х100 см" razmh = "0.7" dlinp = "0.7" shirp = "1">70х100 см
</option>
<option data-mate="1980" value="90х120 см" razmh = "1.08" dlinp = "0.9" shirp = "1.2">90х120 см
</option>
</select>    
                                        
    </div>
    <div>
    Количество <input type="number" name="holskoli2" class="form-control" id="holskoli2" value="1" step = "1">

                               
</div>
</div>
    </div>
    </div>
    </div>


        <div class="form-group" id="tkan1" style="display: none;">
<p class = "catname2"><label>Технические параметры</label></p>
<select name="tkanmate" id="tkanmate" class="form-control">
<option data-mate="540" value="Полиэстер">Полиэстер
</option> 
<option data-mate="780" value="Флажная ткань">Флажная ткань
</option>
<option data-mate="930"value="Эко - кожа">Эко - кожа
</option> 
<option data-mate="650" value="Атлас">Атлас
</option> 
<option data-mate="650" value="Габардин">Габардин
</option>
<option data-mate="750"value="Оксфорд">Оксфорд
</option> 
<option data-mate="750"value="Спанбонд">Спанбонд
</option> 
<option data-mate="750"value="Двунитка">Двунитка
</option> 
</select>    

    <div class="dsh">
    <div class="box">
    <div>
    <br>
    Длина<input type="number" name="tkandlin" class="form-control" id="tkandlin" placeholder="0.00 м." step = "0.01">
    
    </div>

    <div>
    
    Ширина<input type="number" name="tkanshir" class="form-control" id="tkanshir" placeholder="0.00 м." step = "0.01">
    
    </div>
   
    <div>
    
    Площадь<input type="text" name="tkanploc" class="form-control" id="tkanploc" value="">
     
    </div>
    </div>
    </div>

    <div class="tkanluve1">
    <div class="tkanluve1child1" style="display: none;">
                                        <br>
                                        <input type="checkbox" name="tkanluve2" class="form-control" id="tkanluve2" placeholder="0.00 м." step = "0.01">
                                        <label for = "tkanluve2"><span></span>Нужны люверсы</label>
                                        <p class = "luvpol" style="display: none;"> 
                                            <span></span>
                                        </p>
    </div>
    </div>
    </div>

<div class="form-group" id="flag1" style="display: none;">

<p class = "catname2"><label>Технические параметры</label></p>
<select name="flagmate" id="flagmate" class="form-control">
<option data-mate="780" value="Флажная ткань">Флажная ткань
</option>
<option data-mate="540" value="Полиэстер">Полиэстер
</option> 
</select>    

    <div class="dsh">
    <div class="box">
    <div>
    <br>
                                        Длина<input type="number" name="flagdlin" class="form-control" id="flagdlin" placeholder="0.00 м." step = "0.01">
    
    </div>

    <div>
    
                                        Ширина<input type="number" name="flagshir" class="form-control" id="flagshir" placeholder="0.00 м." step = "0.01">
    
    </div>
   
    <div>
    
Площадь<input type="text" name="flagploc" class="form-control" id="flagploc" value="">
    
    </div>
    </div> 
    </div>

<br><br>
    <div class="flagdop">
    <div class="flagdopchild1">
                                        <input type="checkbox" name="obra" class="form-control" id="obra" placeholder="0.00 м." step = "0.01">
                                        <label for = "obra"><span></span>Обработка края (зашивка)</label>
                                        <p class = "obraznac" style="display: none;"> 
                                            <span></span>
                                        </p>
    </div>

    <div class="flagdopchild2">
                                        <input type="checkbox" name="zash" class="form-control" id="zash" placeholder="0.00 м." step = "0.01">
                                        <label for = "zash"><span></span>Зашивка под флагшток</label>
                                        <p class = "zashznac" style="display: none;"> 
                                            <span></span>
                                        </p>
                                
    </div>
    </div>
    </div>

    <div class="form-group" id="fres1" style="display: none;"> 
    <p class = "catname2"><label>Технические параметры</label></p>   
    <select name="fresmate" id="fresmate" class="form-control">
<option data-mate="1570" value="Nordick">Nordick
</option> 
<option data-mate="1570" value="Flamenco">Flamenco
</option>
<option data-mate="1330"value="Mokachino">Mokachino
</option> 
<option data-mate="1090" value="Leanardo">Leanardo
</option> 
</select>    

    <div class="dsh">
    <div class="box">
    <div>
    <br>
    Длина<input type="number" name="fresdlin" class="form-control" id="fresdlin" placeholder="0.00 м." step = "0.01">
    
    </div>
    <div>
    
    Ширина<input type="number" name="fresshir" class="form-control" id="fresshir" placeholder="0.00 м." step = "0.01">
    
    </div>
   
    <div>
    
    Площадь<input type="text" name="fresploc" class="form-control" id="fresploc" value="">
    
    </div> 
    </div>
    </div>

    </div>
    <p class = "catname"><label>Изображение для печати</label> </p>
    <div class="dop"> 
    <div class="dopchild1">
    <input type="radio" name="zagr" class="form-control" id="zagr" value="Загружен файл макета">
<label for = "zagr"><span></span>Загрузить файл макета</label>
<p class = "zagr" style="display: none;"><span></span></p>
    </div>

    <div class="dopchild2">
    <input type="radio" name="zagr" class="form-control" id="photbank" value="Выбор из фотобанка">
<label for = "photbank"><span></span>Выбор из фотобанка</label>
<p class = "photbank" style="display: none;"><span></span></p>
    </div>
    </div>
   
     <p class="margin-bottom-10"></p>
    <input type="radio" name="zagr" class
    ="form-control" id="rabodiza" value="Индивидуальная работа с дизайнером">
<label for = "rabodiza"><span></span>Индивидуальная работа с дизайнером</label>
<p class = "rabodiza" style="display: none;"><span></span></p>



    <div class="form-group" id="zagrfile" style="display: none;">
      <input id="file-input" type="file" name="file" multiple>
    </div>
    <div class="form-group" id="photbank2" style="display: none;">После оформления и оплаты заказа, Вам будет предоставлен доступ к платному фотобанку, в котором собраны разработанные профессиональными дизайнерами макеты высокого качества.
     
      </div>
      <div class="form-group" id="rabodiza2" style="display: none;">
        Час работы с дизайнером стоит около 500 рублей. Вы можете присутствовать в офисе и лично наблюдать за ходом работы, а также оперативно вносить правки в макет.
        </div>
        <p class="margin-bottom-15"></p>
        <p class = "catname"><label>Контактные данные</label> </p>
         <div class="flagdop">
    <div class="flagdopchild1 required">
              <label for="">Введите ваше имя</label>
              <input class="w3-round" type="text" id="" name="user_name" placeholder="Например, Иван">
            </div>
          
             <div class="flagdopchild2 required">
              <label for="">Введите номер телефона</label>
              <input type="text" class="w3-round" id="" name="user_phone" placeholder="+7 (999) 999 99 99">
            </div></div>
            <p class="margin-bottom-10"></p>
            <div class="flagdop">
    <div class="flagdopchild1">
              <label for="">Введите ваш e-mail</label>
              <input type="text" class="w3-round" id="" name="user_e-mail" placeholder="mail@mail.ru">
            </div>
            <div class="flagdopchild2">
              <label for="">Примечание</label>
              <input type="text" class="w3-round" id="" name="user_prim" placeholder="Что-то еще?">
            </div>
            </div>
            <p class="margin-bottom-15"></p>
    </div>

    <div class = "materlook">
    <figure class="card-images text-center">
    
    <img src="/wp-content/themes/theme/calc/img/vini.png" alt="" id="card_1">
     <p class = "cardname" id = "ca1" style="display: none;">
   Виниловые обои - это двухслойные обои на флизелиновой или бумажной основе с покрытием поливинилхлорида (винила ПВХ). Такая структура и формирование в толще винила микропор позволили сохранить водонепроницаемость и возможность нанесения красок.<br>
   Виниловые обои прекрасно подойдут для нанесения индивидуального изображения (орнаментов, фотографий) без существенной потери качества. Новейшие технологии латексной печати позволяют сохранить экологичность (печать осуществляется с использованием экологически чистых латексных красок, не имеющих запаха) с сохранением высокой яркости и насыщенности цветов.
</p>
    <img src="/wp-content/themes/theme/calc/img/text.png" alt="" id="card_2">
    <p class = "cardname" id = "ca2" style="display: none;">Текстурные бумажные обои состоят из двух слоев: бумажная основа и специальный верхний слой с 3D - эффектом текстуры. Результат печати с использованием компьютерного моделирования поражает грубиной и насыщенностью цвета. Такие обои предназначены для декорирования стен собственными изображениями по принципу: «напечатал и поклеил».<br>
    Данное решение в оформлении интерьера в несколько раз дешевле, чем оформление интерьера фресками (см. фрески ниже). В процессе выбора мы предоставляем несколько вариантом текстуры обоев: "Холст", "Лен", "Бархатистые", "Песок", "Пыль", "Мазки кистью", "Следы от шпателя" и др. по запросу.</p>
    <img src="/wp-content/themes/theme/calc/img/fliz.png" alt="" id="card_3">
    <p class = "cardname" id = "ca3" style="display: none;">Обои на флизелиновой основе обладают уникальными характеристиками и позволяют не только качественно напечатать изображения, но и легко и аккуратно их смонтировать. Помимо этого, такие обои обладают пожароустойчивыми характеристиками.<br>
    Увеличенная толщина винилового слоя позволяет получить насыщенные цвета и идеальную цветопередачу, а толщина и фактура обоев позволяет использовать их на поверхностях, имеющих незначительные дефекты.</p>
    <img src="/wp-content/themes/theme/calc/img/matrul.png" alt="" id="card_4">
    <p class = "cardname" id = "ca4" style="display: none;">Матовый холст отличается своей выраженной фактурой. Если вы хотите напечатать высокодетализированное изображение с мелкими деталями или фотографию - это ваш выбор. Полотно можно будет легко раскрасить акриловыми красками или придать ему объема фактурным гелем, ведь на матовом холсте напечатанное изображение находтся глубоко в материале, а значит оно более устойчиво к внешним воздействиям и не расплывется. <br> 
    На матовом холсте отсутствуют блики, но вместе с этим и менее насыщенными будут цвета, особенно в сравнении с глянцевым холстом.</p>
    <img src="/wp-content/themes/theme/calc/img/glyarulo.png" alt="" id="card_5">
    <p class = "cardname" id = "ca5" style="display: none;">Основным отличием глянцевого холста от матового является наличие специального блестящего слоя. Такой холст - идеальный выбор для пейзажей или картин. Благодаря насыщенной цветопередачи, которую обеспечивает специальный слой, глянцевый холст наиболее точно и ярко передает цвет изображения. <br>
    Изображения, напечатанные на глянцевом холсте бликуют, особенно при ярком освещении (например в кратинных галереях). При естественном свете будет заметен небольшой блеск, придающий особый шарм картине. Глянцвеый холст по эффекту можно сравнить с лаковым покрытием картины.</p>
    <img src="/wp-content/themes/theme/calc/img/6-6.png" alt="" id="card_6">
    <p class = "cardname" id = "ca6" style="display: none;">Матовый холст отличается своей выраженной фактурой. Если вы хотите напечатать высокодетализированное изображение с мелкими деталями или фотографию - это ваш выбор. Полотно можно будет легко раскрасить акриловыми красками или придать ему объема фактурным гелем, ведь на матовом холсте напечатанное изображение находтся глубоко в материале, а значит оно более устойчиво к внешним воздействиям и не расплывется. <br> 
    На матовом холсте отсутствуют блики, но вместе с этим и менее насыщенными будут цвета, особенно в сравнении с глянцевым холстом.</p>
    <img src="/wp-content/themes/theme/calc/img/7-7.png" alt="" id="card_7">
    <p class = "cardname" id = "ca7" style="display: none;">Основным отличием глянцевого холста от матового является наличие специального блестящего слоя. Такой холст - идеальный выбор для пейзажей или картин. Благодаря насыщенной цветопередачи, которую обеспечивает специальный слой, глянцевый холст наиболее точно и ярко передает цвет изображения. <br>
    Изображения, напечатанные на глянцевом холсте бликуют, особенно при ярком освещении (например в кратинных галереях). При естественном свете будет заметен небольшой блеск, придающий особый шарм картине. Глянцвеый холст по эффекту можно сравнить с лаковым покрытием картины.</p>
    <img src="/wp-content/themes/theme/calc/img/8-8.png" alt="" id="card_8">
    <p class = "cardname" id = "ca8" style="display: none;">Матовый холст отличается своей выраженной фактурой. Если вы хотите напечатать высокодетализированное изображение с мелкими деталями или фотографию - это ваш выбор. Полотно можно будет легко раскрасить акриловыми красками или придать ему объема фактурным гелем, ведь на матовом холсте напечатанное изображение находтся глубоко в материале, а значит оно более устойчиво к внешним воздействиям и не расплывется. <br> 
    На матовом холсте отсутствуют блики, но вместе с этим и менее насыщенными будут цвета, особенно в сравнении с глянцевым холстом.</p>
    <img src="/wp-content/themes/theme/calc/img/9-9.png" alt="" id="card_9">
    <p class = "cardname" id = "ca9" style="display: none;">Основным отличием глянцевого холста от матового является наличие специального блестящего слоя. Такой холст - идеальный выбор для пейзажей или картин. Благодаря насыщенной цветопередачи, которую обеспечивает специальный слой, глянцевый холст наиболее точно и ярко передает цвет изображения. <br>
    Изображения, напечатанные на глянцевом холсте бликуют, особенно при ярком освещении (например в кратинных галереях). При естественном свете будет заметен небольшой блеск, придающий особый шарм картине. Глянцвеый холст по эффекту можно сравнить с лаковым покрытием картины.</p>

    <img src="/wp-content/themes/theme/calc/img/poli.png" alt="" id="card_10">
    <p class = "cardname" id = "ca10" style="display: none;">Полиэстер, несмотря на сложившиеся стереотипы, имеет ряд преимуществ перед натуральными материалами – он экологически безопасен, достаточно дешев, нечувствительны к внешним воздействиям. Краску на полиэстере прекрасно держится, со временем практически не меняясь и сохраняя свои свойства и насыщенность.<br>
    С использованием полиэстера можно создавать практически любые предметы наружной рекламы. Этот материал может применяться при создании входных групп, вывесок, баннеров, брандмауэров, рекламных щитов. Из полиэстера зачастую создают уличные растяжки, перетяжки и транспаранты.</p>
    <img src="/wp-content/themes/theme/calc/img/flaz.png" alt="" id="card_11">
    <p class = "cardname" id = "ca11" style="display: none;">Флажная ткань – разработанное специально для флагов трикотажное сетчатое полотно. Оно обладает повышенной износостойкостью к воздействиям ветра и ультрафиолета. За счёт эластичности, продуваемости и специального плетения флажная ткань выдерживает высокие ветровые нагрузки. Благодаря новым технологиям латексной печати, флажная ткань после нанесения краски становится неподверженной механическим воздействиям (царапины, заломы).<br>
    Стоит отметить, что наряду со множеством плюсов, у этой ткань есть и один небольшой минус - при печати изображение получается менее насыщенным, в отличие от традиционных материалов. </p>
    <img src="/wp-content/themes/theme/calc/img/ekoz.png" alt="" id="card_12">
    <p class = "cardname" id = "ca12" style="display: none;">Эко - кожа – это высокотехнологичный материал, дышащая искусственная кожа, которая производится без использования ПВХ. Можно сказать, что она является прекрасным сочетанием ткани и кожи. Эко-кожа гипоаллергенна, мягче натуральной кожи, обладает высокой износостойкостью и морозоустойчивостью. <br>
    Экокожа имеет самые высокие показатели по важнейшим потребительским свойствам и более низкую стоимость относительно натуральной кожи. Печать на ней технологически проще, а значит и дешевле, нежели на натуральной коже</p>
    <img src="/wp-content/themes/theme/calc/img/atla.png" alt="" id="card_13">
    <p class = "cardname" id = "ca13" style="display: none;">Атлас - это плотная шёлковая или полушёлковая ткань атласного переплетения с гладкой блестящей лицевой поверхностью.<br>
    Благодаря своей плотности ткань может использоваться для создания самых разнообразных изделий — от рекламной продукции, флагов, плакатов и лент до элементов интерьера, штор, постельного белья и одежды.</p>
    <img src="/wp-content/themes/theme/calc/img/gaba.png" alt="" id="card_14">
    <p class = "cardname" id = "ca14" style="display: none;">Габардин - это плотная, но мягкая ткань, с «саржевым» переплетением нитей. Габардин имеет характерный рельефный узор на лицевой стороне. В его основу входят полиэстеровые волокна придающие ткани столь большую прочность. Ткань имеет матовую поверхность и по ощущениям более всего похожа на натуральную ткань.<br>
    Высокая плотность, прочность и не подверженность растягиванию делает габардин одним из самых применяемых материалов. Габардин часто используют для изготовления баннеров для помещений, школьной и иной формы и одежды.</p>
    <img src="/wp-content/themes/theme/calc/img/oksf.png" alt="" id="card_15">
    <p class = "cardname" id = "ca15" style="display: none;">Ткань Оксфорд - 100% полиэфирная грубая ткань полотняного переплетения, состоящая из толстых нитей. Имеет ярко-выраженную фактуру и водооталкивающее покрытие. Эти свойства сделали Оксфорд незаменимым в самых разных областях. Она используется в основном для производства штор для ванной, одежды, пошива моющихся скатертей и тд.).<br>
    Ткань оксфорд считается относительно бюджетной и используется в производстве целого ряда вещей. Печать на этой ткани является самой технологически простой для наших машин и мы с большим удовольствием возьмемся за воплощение ваших дизайнерские идей!</p>
    <img src="/wp-content/themes/theme/calc/img/span.png" alt="" id="card_16">
    <p class = "cardname" id = "ca16" style="display: none;">Спанбонд - это название технологии производства нетканого материала из расплава полимера фильерным способом. Не редко  спанбондом также обозначают материал, произведенный по этой технологии. Материал устойчив к стиранию и сминанию, воздвействию воды, кислот и щелочей, имеет низкое водопоглощение, не гниёт и не плесневеет. Он обладает высокой разрывной нагрузкой в сухом и мокром состоянии.<br>
    Чаще всего из спанбонда изготавливают  различные упаковочные материалы, сумки, пакеты, чехлы и одноразовую одежду.</p>
    <img src="/wp-content/themes/theme/calc/img/dvun.png" alt="" id="card_17">
    <p class = "cardname" id = "ca17" style="display: none;">Двунитка — это очень грубая, плотная и прочная ткань. Jна изготавливается из натурального хлопка или хлопка с добавлением синтетики. Переплетение ткани простое со сдвоенными нитями. <br>
    Двунитка используется для пошива спецодежды, обивки мебели, в качестве подкладочной ткани и т. д. Декораторы применяют двунитку при изготовлении разных деталей интерьера и подарочной упаковки. Ну и, конечно же, из этой ткани шьют удобные и практичные сумки.</p>

    <img src="/wp-content/themes/theme/calc/img/nord.png" alt="" id="card_18">
    <p class = "cardname" id = "ca18" style="display: none;">Фактура Nordick - это поверхность с контурами, мелкими царапинами и впадинами. Благодаря им, фреска смотрится легко и воздушно. Неоднородность полотна придаёт изображению объемность и эффект античной живописи. Насыщенность изображения играет в зависимости от рельефа, что приближает факутуру Nordick к оригинальной итальянской фреске.<br>
    Такие фрески чаще всего используют для оформления жилых помещений, современных офисов в стиле хай-тек, а также в ресторанах и кафе.</p>
    <img src="/wp-content/themes/theme/calc/img/flam.png" alt="" id="card_19">
    <p class = "cardname" id = "ca19" style="display: none;">Фреска Flamenko обладает пористой фактурой с выступающими элементами. Благодаря этому изображение выглядит объемным и воздушным. Печать на такой текстурной поверхности позволяет подчеркнуть разницу света и тени, а дополнительное освещение придает изображению дополнительную глубину.<br>
    Фрески Flamenko прекрасно подойдут для холлов, приемных и культурных учреждений.</p>
    <img src="/wp-content/themes/theme/calc/img/leon.png" alt="" id="card_20">
    <p class = "cardname" id = "ca20" style="display: none;">Фактура Leanardo обладает изысканной рельефностью, будто художник оставил на полотне глубокие мазки кисти. Фактура фрески напоминает творения старых мастеров и импрессионистов. Благодаря этому, изображение на фреске покажет всё многообразие игры света и тени.<br>
    Фреска Leanardo отлично подходит под стиль модерн. Её зачастую можно увидеть в интерьерах магазинов, баров, кафе и загородных особняков.</p>
    <img src="/wp-content/themes/theme/calc/img/moka.png" alt="" id="card_21">
    <p class = "cardname" id = "ca21" style="display: none;">Основа фактуры Mokachino - деликатный материал со свободными жесткими мазками, имитирующими кисть художника. Текстурная поверхность фрески обладает легким блеском, а печать на ней позволяет подчеркнуть художественную составляющую в декоре интерьера.<br>
    Такие фрески делают возможной стилизацию под классику и отлично подойдут для музеев, театров, библиотек, тематических заведений и жилых помещений.
    </p>



</figure>
    </div>

          </div>
</div>
    </div>



    

  
<div class = "pricecontainer">
       <div class="srokprice">
    <div class="srokpricechild">
    <div class="list-group-item footer-price">
                            <p>Срок изготовления 5-7 дней</p>
                            <h4>Итого: <span class="cur" name = "price1"></span> <span class="rub">р.</span></h4>
                            <button type="submit" class="form-btn calc-btn" name="sroko" id="sroko" vallue="pyat">Отправить заявку</button>
                           
                           
    </div>
    </div>
    <div class="srokpricechild1">
    <div class="list-group-item footer-price">
                            <p>Срок изготовления 1-2 дня</p>
                            <h4>Итого: <span class="cur2" name = "price2"></span> <span class="rub2">р.</span></h4>
                            <button type="submit" class="form-btn calc-btn" name="srokot" vallue="odin" id="srokot">Отправить заявку</button>
                        

    </div>
    </div>
    <div class="srokpricechild2" style="display: none;">
    <div class="list-group-item footer-price">
                            <p>Срок изготовления НЕИЗВЕСТЕН&nbsp;<a class="help" href="#"><img src="/wp-content/uploads/2020/08/voprb.svg" style="margin-bottom: 4px" alt="подсказка" /><span class="airhelp">Ваш заказ будет напечатан совместно с другими - тогда мы исключаем стоимость незапечатываемой площади и расходы на приладку материала. К сожалению, здесь нет точных сроков поступления заказа с достаточным для вашего макета количеством незапечатываемого поля. Среднее время ожидания - 2 недели</span></a></p></p>
                            <h4>Итого: <span class="cur3" name = "price3"></span> <span class="rub2">р.</span></h4>
                            <button type="submit" class="form-btn calc-btn" name="srokot" vallue="neizv" id="srokotn">Отправить заявку</button>
                        

    </div>
    </div>
    </div>
    </div>
    <p class="prob">
                            <span id="prob"></span> 
                        </p>
     <input type="text" name="mailprice" class="form-control" id="mailpr" value="" style="display: none;">
     <input type="text" name="mailprice2" class="form-control" id="mailpr2" value="" style="display: none;">
     <input type="text" name="mailprice3" class="form-control" id="mailpr3" value="" style="display: none;">
    <input type="text" name="srokkk" class="form-control" id="srokkk" value="" style="display: none;">
    <input type="text" name="tkanluvemail" class="form-control" id="tkanluvemail" value="" style="display: none;">
    <input type="text" name="obramail" class="form-control" id="obramail" value="" style="display: none;">
    <input type="text" name="zashmail" class="form-control" id="zashmail" value="" style="display: none;">
      </form>
</section>
<h5 style="text-align: center;">Цены указаны с учетом стоимости материала<br>
         Цены не являются окончательными и могут быть изменены в зависимости от сложности, срочности и других параметров заказа
        </h5>