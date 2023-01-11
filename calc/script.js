$(document).ready(function () {
    
    ////////Калькулятор
    function latex () {
        
        var prod = $('input[name="prod"]:checked').val();
        if (prod =='Обои'){
        $('#oboi1').fadeIn() && $('#hols1').fadeOut() && $('#tkan1').fadeOut() && $('#fres1').fadeOut() && $('#flag1').fadeOut();
    }
         if (prod =='Холст'){
        $('#hols1').fadeIn() && $('#oboi1').fadeOut() && $('#tkan1').fadeOut() && $('#fres1').fadeOut() && $('#flag1').fadeOut();
    }
         if (prod =='Ткань'){
        $('#tkan1').fadeIn() && $('#hols1').fadeOut() && $('#oboi1').fadeOut() && $('#fres1').fadeOut() && $('#flag1').fadeOut();
    }
         if (prod =='Флаг'){
        $('#flag1').fadeIn() && $('#hols1').fadeOut() && $('#tkan1').fadeOut() && $('#oboi1').fadeOut() && $('#fres1').fadeOut();
    }
         if (prod =='Фреска'){
        $('#fres1').fadeIn() && $('#hols1').fadeOut() && $('#tkan1').fadeOut() && $('#oboi1').fadeOut() && $('#flag1').fadeOut();
    }

//обои        
    var selectoboi = $('select#mateoboi option:selected').val()
    if (selectoboi == "Обои виниловые (Россия)") {var shiroboi = 0.53}
      if (selectoboi == "Обои бумажные текстурные") {var shiroboi = 0.53}
          if (selectoboi == "Обои флизелиновые") {var shiroboi = 1.06}
   $('#oboishir').val(shiroboi); // вывод ширины рулона от значения селекта
   var oboidlin1 = +$('#oboidlin').val().replace(',', '.');
   var dlinrulo = 10;
   var oboipere = oboidlin1 / dlinrulo
   var oboipere2 = Math.ceil(oboipere)
   var oboidlin2 = oboidlin1 + oboipere2*0.75
  

   var oboiploc1 = (oboidlin2 * shiroboi);
    var oboiploc2 = oboiploc1.toFixed(2);
    $('#oboiploc').val(oboiploc2 + " м2");
    $oboiprice = +$('select#mateoboi option:selected').attr('data-mate');
    var oboiprice1 = oboiploc2 * $oboiprice;
    var oboiprice2 = oboiprice1.toFixed(0);
    if ($(zagr).is(':checked')){
    $("#zagrfile").fadeIn() && $("#photbank2").fadeOut() &&$("#rabodiza2").fadeOut();
    }
    if ($(photbank).is(':checked')){
    $("#photbank2").fadeIn() && $("#zagrfile").fadeOut() &&$("#rabodiza2").fadeOut();
    }
    if ($(rabodiza).is(':checked')){
    $("#rabodiza2").fadeIn() && $("#photbank2").fadeOut() &&$("#zagrfile").fadeOut();
    }


//холст
  if (prod =='Холст'){
    if ($(holsme).is(':checked')){
    $("#hols2").fadeIn() && $("#hols3").fadeOut() && $("#hols4").fadeOut()
    }
    if ($(holsbr).is(':checked')){
    $("#hols2").fadeOut() && $("#hols3").fadeIn() && $("#hols4").fadeOut()
    }
    if ($(holssr).is(':checked')){
    $("#hols2").fadeOut() && $("#hols3").fadeOut() && $("#hols4").fadeIn()
    }
}
    var holsdlin0 = +$('#holsdlin').val().replace(',', '.');
    if (holsdlin0 == 0) {
        var holsdlin1 = 0;
    } else {
    var holsdlin1 = holsdlin0 + 0.75;
}
    var holsshir1 = 1.5;
    $("#holsshir").val(holsshir1);
    var holsplkoc1 = holsdlin0 * holsshir1;
    var holsplkoc2 = holsplkoc1.toFixed(2);
    $('#holsploc').val(holsplkoc2 + " м2");
    var holsmate = +$('select#holsmate option:selected').attr('data-mate');
    var holskoli = +$('#holskoli').val();
    var holskoli2 = +$('#holskoli2').val();
    if ($(holsme).is(':checked')){
        
         var priladkaprice = 1.5 * 0.75 * 600;
         var holsprice1 = holsplkoc2 * holsmate + priladkaprice;
    }


    if ($(holsbr).is(':checked')){
        var holspricerazm = +$('select#holsrazm1 option:selected').attr('data-mate');
        var holsploc = +$('select#holsrazm1 option:selected').attr("razmh");
        var dlinforperer = +$('select#holsrazm1 option:selected').attr("dlinp");
        var shirforperer = +$('select#holsrazm1 option:selected').attr("shirp");
        
        var plholst = dlinforperer * shirforperer;
        var ps1 = ((dlinforperer * 1.5) - plholst);
        var ps2 = ((shirforperer * 1.5) - plholst);

        if (ps1 <= ps2) {
        var priceSperer = ps1 * 600;
        }
        if (ps1 > ps2) {
        var priceSperer = ps2 * 600;
        }

        if (priceSperer <= 0) {
        if (ps1 > ps2) {
        var priceSperer = ps2 * 600;
        }
        if (ps1 < ps2) {
        var priceSperer = ps1 * 600;
        }    
        }
   


        var priladkaprice = 1.5 * 0.75 * 600;
        var pricepechatholst = holsploc * holsmate;
        var holsprice1 = ((pricepechatholst + holspricerazm + priceSperer) 
        * holskoli)
        + priladkaprice;

    }
    
    if ($(holssr).is(':checked')){
        var holspricerazm = +$('select#holsrazm2 option:selected').attr('data-mate');
        var holsploc = +$('select#holsrazm2 option:selected').attr("razmh");
        var dlinforperer = $('select#holsrazm2 option:selected').attr("dlinp");
        var shirforperer = $('select#holsrazm2 option:selected').attr("shirp");
        
var plholst = dlinforperer * shirforperer;
        var ps1 = ((dlinforperer * 1.5) - plholst);
        var ps2 = ((shirforperer * 1.5) - plholst);

        if (ps1 <= ps2) {
        var priceSperer = ps1 * 600;
        }
        if (ps1 > ps2) {
        var priceSperer = ps2 * 600;
        }

        if (priceSperer <= 0) {
        if (ps1 > ps2) {
        var priceSperer = ps2 * 600;
        }
        if (ps1 < ps2) {
        var priceSperer = ps1 * 600;
        }    
        }

        var priladkaprice = 1.5 * 0.75 * 600;
        var pricepechatholst = holsploc * holsmate;
        var holsprice1 = ((pricepechatholst + holspricerazm + priceSperer) 
        * holskoli2)
        + priladkaprice;

    }

    
    var holsprice2 = holsprice1.toFixed(0);

if ($(holssr).is(':checked') || $(holsbr).is(':checked') && prod =='Холст') {
        $(".srokpricechild2").fadeIn();
} else {
    $(".srokpricechild2").fadeOut();
}

    
    

    
//ткань
    var tkandlin1 = +$('#tkandlin').val().replace(',', '.');
    var tkanshir1 = +$('#tkanshir').val().replace(',', '.');
    var tkanplkoc1 = tkandlin1 * tkanshir1;
    var tkanplkoc2 = tkanplkoc1.toFixed(2);
    $('#tkanploc').val(tkanplkoc2 + " м2");
    var tkanpricemate = +$('select#tkanmate option:selected').attr('data-mate');
    

    //люверсы
    var chtozatkan = $('select#tkanmate option:selected').val();
     if (chtozatkan == "Эко - кожа")
    {
    $(".tkanluve1child1").fadeOut();
    $(tkanluve2).prop('checked', false)
    } else {
        $(".tkanluve1child1").fadeIn()
    }

    var tkanper1 = Math.round (tkandlin1 / 0.3);
    var tkanper2 = Math.round (tkandlin1 / 0.3);
    var tkanper3 = Math.round (tkanshir1 / 0.3);
    var tkanper4 = Math.round (tkanshir1 / 0.3);
    var tkanluve = tkanper1 + tkanper2 + tkanper3 + tkanper4; // люверсы по периметру
    var priceluve = tkanluve * 10; // цена за люверсы
    $('.luvpol').html(tkanluve + " шт. / " + priceluve + " р.")

    if ($(tkanluve2).is(':checked')) {
        $('.luvpol').fadeIn();
        $('#tkanluvemail').val(tkanluve + " шт. / " + priceluve + " р.");
    
        var tkanprice = tkanplkoc2 * tkanpricemate + priceluve;
    } else {$('.luvpol').fadeOut();
    $('#tkanluvemail').val("Не нужны");
    var tkanprice = tkanplkoc2 * tkanpricemate;
}

var tkanprice2 = tkanprice.toFixed(0);



//Флаг
    var flagdlin1 = +$('#flagdlin').val().replace(',', '.');
    var flagshir1 = +$('#flagshir').val().replace(',', '.');
    var flagplkoc1 = flagdlin1 * flagshir1;
    var flagplkoc2 = flagplkoc1.toFixed(2);
    $('#flagploc').val(flagplkoc2 + " м2");
    var flagpricemate = +$('select#flagmate option:selected').attr('data-mate');
    

    var flagperi = flagdlin1 + flagshir1 + flagdlin1 + flagshir1;
    var obrprice = +flagperi * 50;
    var obrprice2 = +obrprice.toFixed(0)
    $('.obraznac').html(obrprice2 + " р.");

    if ($(obra).is(':checked')){
        $('.obraznac').fadeIn()
        $('#obramail').val(obrprice2 + " р.");
    } else {
        $('.obraznac').fadeOut()
        $('#obramail').val("Не нужна");
    }
    var zashprice = 50;
    $('.zashznac').html(zashprice + " р.");

    if ($(zash).is(':checked')){
        $('.zashznac').fadeIn()
        $('#zashmail').val(zashprice + " р.");
    } else {
        $('.zashznac').fadeOut()
        $('#zashmail').val("Не нужна");
    }

    if (($(obra).is(':checked')) && ($(zash).is(':checked')))
    {
        var flagprice = flagplkoc2 * flagpricemate + zashprice + obrprice2
    } else if ($(obra).is(':checked')){
        var flagprice = flagplkoc2 * flagpricemate + obrprice2
    }
     else if ($(zash).is(':checked')){
        var flagprice = flagplkoc2 * flagpricemate + zashprice
    }
     else {var flagprice = flagplkoc2 * flagpricemate}

    var flagprice2 = flagprice.toFixed(0);

//Фреска
    var fresdlin1 = +$('#fresdlin').val().replace(',','.');
    var fresshshir1 = 1.6;
    $('#fresshir').val(fresshshir1);
    var fresplkoc1 = fresdlin1 * fresshshir1;
    var fresplkoc2 = fresplkoc1.toFixed(2);
    $('#fresploc').val(fresplkoc2 + " м2");
    var freskprice = +$('select#fresmate option:selected').attr('data-mate');
    var freskprice1 = fresplkoc2 * freskprice;
    var freskprice2 = freskprice1.toFixed(0);
    


// Просмотр материала
    var oboismg = $('select#mateoboi option:selected').val()
       
       if (oboismg == "Обои виниловые (Россия)")
       {var pu = 1} 
       if (oboismg == "Обои бумажные текстурные")
            {var pu = 2}
       if (oboismg == "Обои флизелиновые")
            {var pu = 3}

        if (prod =='Обои') {
        if (pu == 1) {
                    $('.card-images img').hide();   
                    $('#card_1').show();
                    $('.card-images p').hide();
                    $('#ca1').show();           
                }
                if (pu == 2) {
                    $('.card-images img').hide();   
                    $('#card_2').show();
                    $('.card-images p').hide();
                    $('#ca2').show();          
                }
                if (pu == 3) {
                    $('.card-images img').hide();   
                    $('#card_3').show();
                    $('.card-images p').hide();
                    $('#ca3').show();          
                }
            }
//холст изо
        var holssmg = $('select#holsmate option:selected').val()
       
       if (holssmg == "Холст натуральный матовый")
       {var puh = 1} 
       if (holssmg == "Холст натуральный глянцевый")
            {var puh = 2}
           if (prod =='Холст') {
        if ((puh == 1) && ($(holsme).is(':checked'))) {
                    $('.card-images img').hide();   
                    $('#card_4').show();
                    $('.card-images p').hide();
                    $('#ca4').show();        
                }
                if ((puh == 2) && ($(holsme).is(':checked'))) {
                    $('.card-images img').hide();   
                    $('#card_5').show();
                    $('.card-images p').hide();
                    $('#ca5').show();       
                }
                if ((puh == 1) && ($(holsbr).is(':checked'))) {
                    $('.card-images img').hide();   
                    $('#card_6').show();
                    $('.card-images p').hide();
                    $('#ca6').show();       
                }
                if ((puh == 2) && ($(holsbr).is(':checked'))) {
                    $('.card-images img').hide();   
                    $('#card_7').show();
                    $('.card-images p').hide();
                    $('#ca7').show();       
                }
                if ((puh == 1) && ($(holssr).is(':checked'))) {
                    $('.card-images img').hide();   
                    $('#card_8').show();
                    $('.card-images p').hide();
                    $('#ca8').show();       
                }
                if ((puh == 2) && ($(holssr).is(':checked'))) {
                    $('.card-images img').hide();   
                    $('#card_9').show();
                    $('.card-images p').hide();
                    $('#ca9').show();       
                }
            }
            //ткань
var tkansmg = $('select#tkanmate option:selected').val()
       
       if (tkansmg == "Полиэстер")
       {var put = 1} 
       if (tkansmg == "Флажная ткань")
            {var put = 2}
        if (tkansmg == "Эко - кожа")
            {var put = 3}
        if (tkansmg == "Атлас")
            {var put = 4}
        if (tkansmg == "Габардин")
            {var put = 5}
        if (tkansmg == "Оксфорд")
            {var put = 6}
        if (tkansmg == "Спанбонд")
            {var put = 7}
        if (tkansmg == "Двунитка")
            {var put = 8}

           if (prod =='Ткань') {
        if (put == 1)  {
                    $('.card-images img').hide();   
                    $('#card_10').show();
                    $('.card-images p').hide();
                    $('#ca10').show();        
                }
                if (put == 2)  {
                    $('.card-images img').hide();   
                    $('#card_11').show();
                    $('.card-images p').hide();
                    $('#ca11').show();        
                }
                if (put == 3)  {
                    $('.card-images img').hide();   
                    $('#card_12').show();
                    $('.card-images p').hide();
                    $('#ca12').show();        
                }
                if (put == 4)  {
                    $('.card-images img').hide();   
                    $('#card_13').show();
                    $('.card-images p').hide();
                    $('#ca13').show();        
                }
                if (put == 5)  {
                    $('.card-images img').hide();   
                    $('#card_14').show();
                    $('.card-images p').hide();
                    $('#ca14').show();        
                }
                if (put == 6)  {
                    $('.card-images img').hide();   
                    $('#card_15').show();
                    $('.card-images p').hide();
                    $('#ca15').show();        
                }
                if (put == 7)  {
                    $('.card-images img').hide();   
                    $('#card_16').show();
                    $('.card-images p').hide();
                    $('#ca16').show();        
                }
                if (put == 8)  {
                    $('.card-images img').hide();   
                    $('#card_17').show();
                    $('.card-images p').hide();
                    $('#ca17').show();        
                }
            }
 // флаг
 var flagsmg = $('select#flagmate option:selected').val()
       
       if (flagsmg == "Полиэстер")
       {var puf = 1} 
       if (flagsmg == "Флажная ткань")
            {var puf = 2}

           if (prod =='Флаг') {
        if (puf == 1)  {
                    $('.card-images img').hide();   
                    $('#card_10').show();
                    $('.card-images p').hide();
                    $('#ca10').show();        
                }
                if (puf == 2)  {
                    $('.card-images img').hide();   
                    $('#card_11').show();
                    $('.card-images p').hide();
                    $('#ca11').show();        
                }
            }
        
// фреска
var fressmg = $('select#fresmate option:selected').val()
       
       if (fressmg == "Nordick")
       {var pufr = 1} 
       if (fressmg == "Flamenco")
            {var pufr = 2}
        if (fressmg == "Leanardo")
       {var pufr = 3} 
       if (fressmg == "Mokachino")
            {var pufr = 4}

           if (prod =='Фреска') {
        if (pufr == 1)  {
                    $('.card-images img').hide();   
                    $('#card_18').show();
                    $('.card-images p').hide();
                    $('#ca18').show();        
                }
                if (pufr == 2)  {
                    $('.card-images img').hide();   
                    $('#card_19').show();
                    $('.card-images p').hide();
                    $('#ca19').show();        
                }
                if (pufr == 3)  {
                    $('.card-images img').hide();   
                    $('#card_20').show();
                    $('.card-images p').hide();
                    $('#ca20').show();        
                }
                if (pufr == 4)  {
                    $('.card-images img').hide();   
                    $('#card_21').show();
                    $('.card-images p').hide();
                    $('#ca21').show();        
                }
            }

            
                     



// вывод цены
 
$('#sroko').click(function(){
  $('#srokkk').val("5-7");
});

$('#srokot').click(function(){
  $('#srokkk').val("1-2");
});
$('#srokotn').click(function(){
  $('#srokkk').val("При возможности");
});

if (prod =='Обои'){
        $('.cur').html(oboiprice2);
        $('#mailpr').val(oboiprice2);
    }
         if (prod =='Холст'){
        $('.cur').html(holsprice2);
        $('#mailpr').val(holsprice2);
    }
         if (prod =='Ткань'){
        $('.cur').html(tkanprice2);
        $('#mailpr').val(tkanprice2);
    }
         if (prod =='Флаг'){
        $('.cur').html(flagprice2);
        $('#mailpr').val(flagprice2);
    }
         if (prod =='Фреска'){
        $('.cur').html(freskprice2);
        $('#mailpr').val(freskprice2);
    }

    
    
   var mnoz1 = 1.3; 

var oboiprice3 = (oboiprice2 * mnoz1).toFixed(0);
var holsprice3 = (holsprice2 * mnoz1).toFixed(0);
var tkanprice3 = (tkanprice2 * mnoz1).toFixed(0);
var flagprice3 = (flagprice2 * mnoz1).toFixed(0);
var freskprice3 = (freskprice2 * mnoz1).toFixed(0);

    if (prod =='Обои'){
        $('.cur2').html(oboiprice3);
        $('#mailpr2').val(oboiprice3);
    }
         if (prod =='Холст'){
        $('.cur2').html(holsprice3);
        $('#mailpr2').val(holsprice3);
    }
         if (prod =='Ткань'){
        $('.cur2').html(tkanprice3);
        $('#mailpr2').val(tkanprice3);
    }
         if (prod =='Флаг'){
        $('.cur2').html(flagprice3);
        $('#mailpr2').val(flagprice3);
    }
         if (prod =='Фреска'){
        $('.cur2').html(freskprice3);
        $('#mailpr2').val(freskprice3);
    }
    var holsprice4 = holsprice2 - priladkaprice;
    if (prod =='Холст'){
        $('.cur3').html(holsprice4);
        $('#mailpr3').val(holsprice4);
    }
                $('.rub').show(); // показ рубля
                
   
    };




    $('.calculatorall').on('click keyup', latex);
    $('.calculatorall').click();
setInterval(function() {
    $('.calculatorall').click();
}, 100);

    


    
    



 $('.calculate-product .calc-btn').click(function (e) {
            e.preventDefault();
            var $that = $(this).parents('.pricecontainer').prev().find('form'),
                    formData = new FormData($that.get(0));
            var error = 0;
            $(".calculate-product .required input").each(function (i) {
                if ($(this).val() == '') {
                    error++;
                    $(this).parent().addClass("error");
                } else {
                    $(this).parent().removeClass("error");
                }
            });

            if (error) {
                return false;
            } else {
                $('.calculate-product>div').css({'opacity': '0.5'});
            }

            $.ajax({
                type: "POST",
                url: "/mail.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (msg) {
                    $('.calculate-product>div').css({'opacity': '0.1'});
                    $('.calculate-product').append('<div class="success">Заявка отправлена!<br>Ожидайте звонка специалиста в&nbsp;ближайшее время!</div>');
                    $('.calculate-product .success').css({'opacity': '1'});
                    function showform() {
                        $('.calculate-product form').get(0).reset();
                        $('.calculate-product>div').css({'opacity': '1'});
                        $('.calculate-product .success').fadeOut(500, function () {
                            $('.calculate-product .success').remove();
                        });
                    }
                    setTimeout(showform, 2000);
                }
            });
        });

}) 