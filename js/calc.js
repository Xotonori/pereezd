function alr(idd)
{
    var target = $('#'+idd);
    target.css({backgroundColor: '#da4040'});
}

$(function() {
    calc();

    $('#man_count').on('click', function () {
        $(this).css({backgroundColor: '#fff'});
    });

    $('a.up').click(function() {
        $('#man_count').click();
        var target = $(this).parent().children('input');
        var val = parseInt(target.val())+1;
        var idd = target.attr('id');
        if (idd=='avto_time' && $('#avto_count').val()=='0') {alr('avto_count');} else if (idd=='man_time' && $('#man_count').val()=='0') {alr('man_count');} else {target.val(val);
            calc();}
        if (idd=='avto_count') {if (parseInt($('#avto_count').val())>0) $('#avto_center').attr('disabled','');if (parseInt($('#avto_count').val())==0) $('#avto_center').attr('disabled','disabled').attr('checked', '');calc();}
        return false;
    });

    $('a.down').click(function() {
        var target = $(this).parent().children('input');
        if (target.attr('min'))
            var min = parseInt(target.attr('min'));
        else
            var min = 0;
        console.log(min);
        var val = parseInt(target.val())-1;
        var idd = target.attr('id');
        if (idd=='avto_time' && $('#avto_count').val()=='0') {alr('avto_count');} else if (idd=='man_time' && $('#man_count').val()=='0') {alr('man_count');} else {
            if (val>=min) target.val(val);
            calc();
        }
        if (idd=='avto_count') {if (parseInt($('#avto_count').val())>0) $('#avto_center').attr('disabled','');if (parseInt($('#avto_count').val())==0) $('#avto_center').attr('disabled','disabled').attr('checked', '');calc();}
        return false;
    });

    $('.avto_select').change(function() {
// 		console.log($('.avto_select :selected').val()+'  ----  '+$('.avto_select :selected').attr('pic'));
        $('.avto-cont img').attr('src',$('.avto_select :selected').attr('pic'));
        var hour = $('.avto_select :selected').attr('hour');
        $('#avto_time').val(hour).attr('min',hour);
    });

    $('#avto_mkad').change(function() {
        if ($('#avto_count').val()=='0') {
            $(this).val('0');
            alr('avto_count');
            return false;
        } else return true;
    });


    $('input.check').change(function() {
        var min = parseInt($(this).attr('min'));
        if ($(this).val()=='') $(this).val(min);
        var val = parseInt($(this).val());
        if (val<min) $(this).val(min);
    });

    $('.only_int').keypress (function(event) {
        var key, keyChar;
        if(!event) var event = window.event;

        if (event.keyCode) key = event.keyCode;
        else if(event.which) key = event.which;
        if(key==null || key==0 || key==8 || key==13 || key==37 || key==39 /*|| key==46*/ || key==9) return true;
        keyChar=String.fromCharCode(key);
        if(!/\d/.test(keyChar))	return false;
    });

    $('.submitt').click(function() {
        $('.code-img').attr('src','/img_generation.php?num=3');
        hs.htmlExpand(null, { useControls: false, contentId: 'order-form', align: 'center', fixedControls: 'fit', dimmingOpacity: 0.75});
        $('.highslide-credits').remove();
    });

    $('.submitt2').click(function() {
        $('.code-img').attr('src','/img_generation.php?num=3');
        $('.order-form-aktsii .aktsii_name').val($('.aktsii-name-val').text());
        $('.order-form-aktsii .aktsii_cost').val($('.aktsii-cost-val').text());
        hs.htmlExpand(null, { useControls: false, contentId: 'order-form-aktsii', align: 'center', fixedControls: 'fit', dimmingOpacity: 0.75});
// 		$('.highslide-credits').remove();
        return false;
    });

    $('.calculator input, .calculator select').change(function() {if (parseInt($('#avto_count').val())>0) $('#avto_center').attr('disabled','');if (parseInt($('#avto_count').val())==0) $('#avto_center').attr('disabled','disabled').attr('checked', '');calc();});

    $('.clr-butt').click(function() {
        $('#avto').val(4);
        $('.avto-cont img').attr('src',$('.avto_select :selected').attr('pic'));
        var hour = $('.avto_select :selected').attr('hour');
        $('#avto_time').val(hour).attr('min',hour);
        $("#avto").trigger("liszt:updated");
        $('#avto_count').val($('#avto_count').attr('min'));
        $('#avto_time').val($('#avto_time').attr('min'));
        $('#avto_mkad').val($('#avto_mkad').attr('min'));
        $('#avto_center').attr('checked', '').attr('disabled', 'disabled');

        $('#man_count').val($('#man_count').attr('min'));
        $('#man_time').val($('#man_time').attr('min'));
        $('#pack_box').val($('#pack_box').attr('min'));
        $('#pack_plenka').val($('#pack_plenka').attr('min'));

        $('#scotch').val($('#scotch').attr('min'));
        $('#streich').val($('#streich').attr('min'));

        calc();
    });
});

function calc()
{
    var avto_name =  $('.avto_select :selected').text();
    var avto_cost =  parseInt($('.avto_select :selected').attr('cost'));
    var avto_cost_mkad =  parseInt($('.avto_select :selected').attr('cost_mkad'));
    var avto_tonaj =  $('.avto_select :selected').attr('tonaj');
    var avto_count =  parseInt($('#avto_count').val());
    var avto_time =  parseInt($('#avto_time').val());
    var avto_mkad =  parseInt($('#avto_mkad').val());
    var avto_center =  $('#avto_center').attr('checked');

    var man_count = parseInt($('#man_count').val());
    var man_cost = parseInt($('#man_count').attr('cost'));
    var man_time = parseInt($('#man_time').val());

    var pack_box = parseInt($('#pack_box').val());
    var pack_box_cost = parseInt($('#pack_box').attr('cost'));
    var pack_plenka = parseInt($('#pack_plenka').val());
    var pack_plenka_cost = parseInt($('#pack_plenka').attr('cost'));


    var scotch = parseInt($('#scotch').val());
    var scotch_cost = parseInt($('#scotch').attr('cost'));
    var streich = parseInt($('#streich').val());
    var streich_cost = parseInt($('#streich').attr('cost'));



    var itogo_avto = (avto_count>0 ? ((1*avto_cost)*(avto_time+1))+((avto_mkad*avto_cost_mkad)*2) : 0);
    if (avto_center) itogo_avto = itogo_avto+avto_cost;
    var itogo_man = (man_count*man_time)*man_cost;
    var itogo_pack = (pack_box*pack_box_cost)+(pack_plenka*pack_plenka_cost)+(scotch*scotch_cost)+(streich*streich_cost);

    var itogo = itogo_avto+itogo_man+itogo_pack;

    $('#itogo_avto').text(avto_name+' '+avto_tonaj+' '+1+' шт');
    $('#itogo_avto_time').text(avto_time);
    $('#itogo_avto_mkad').text((avto_mkad!='0' ? ', '+avto_mkad+'км. за мкад' : ''));
    $('#itogo_avto_center').text((avto_center ? ', с пропуском в центр' : ''));
    $('#itogo_man_count').text(man_count);
    $('#itogo_man_time').text(man_time);
    $('#itogo_pack_box').text(pack_box);
    $('#itogo_pack_plenka').text(pack_plenka);
    $('#itogo_scotch').text(scotch);
    $('#itogo_streich').text(streich);
    $('#itogo').text(itogo);
}

function send_order()
{
    $('#tmp').html($('.calculator .col3').html());
    var itogo = $('#tmp .big-price').text();
    $('#tmp .titol').remove();$('#tmp button').remove();
    $('#tmp .big-price').html('<h2><strong>РС‚РѕРіРѕ:</strong> '+itogo+'</h2>');
    var test = $('#tmp').html();
    $('#tmp').empty();
    $.post('https://pereezdy-spb.ru/ajax/orders.html', $('.formorder').serialize()+'&test='+test, function(result) {console.log(result);
        if (result.errors.length) {
            for (err in result.errors)
            {
                var field = $('.formorder').find('[name="' + result.errors[err] + '"]');
                field.stop();
                field.animate({backgroundColor: '#e76300', color: '#FFFFFF'}, 1000)
                    .animate({backgroundColor: '#FFFFFF', color: '#000000'}, 1000);
            }
        } else {
            $('.order-form').fadeOut(500, function () {
                $('.order-form').fadeIn(500).html(zakaz_text);
            });
            setTimeout("hs.close();", 15000);
        }
    });
}

function send_order2()
{
    $.post('https://pereezdy-spb.ru/ajax/aktsii.html', $('.formorder-aktsii').serialize(), function(result) {console.log(result);
        if (result.errors.length) {
            for (err in result.errors)
            {
                var field = $('.formorder-aktsii').find('[name="' + result.errors[err] + '"]');
                field.stop();
                field.animate({backgroundColor: '#e76300', color: '#FFFFFF'}, 1000)
                    .animate({backgroundColor: '#FFFFFF', color: '#000000'}, 1000);
            }
        } else {
            $('.order-form-aktsii').fadeOut(500, function () {
                $('.order-form-aktsii').fadeIn(500).html(zakaz_text);
            });
            setTimeout("hs.close();", 15000);
        }
    });
}