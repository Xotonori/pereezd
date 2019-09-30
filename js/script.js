$(document).ready(function () {

//Check submit/////////////////////////////////////////////////////////////////////////////////////////////
    $('.js-modal').submit(function (e) {
        e.preventDefault();
        let formInputs = $(this).find('input, textarea, checkbox');
        if(formValidation(formInputs, $(this))) {
            $(this).unbind('submit').submit();
        }
    });
//Check submit-end/////////////////////////////////////////////////////////////////////////////////////////////

//Shorter text/////////////////////////////////////////////////////////////////////////////////////////////
    $('.js-podrobno').on('click', function () {

        let textButton = $(this).find('span').text();
        if (textButton === 'Подробно') {
            $(this).find('span').text('Свернуть');
            $(this).find('img').css({
                'transform' : 'rotate(180deg)'
            });

        } else {
            $(this).find('span').text('Подробно');
            $(this).find('img').css({
                'transform' : 'rotate(0)'
            });
        }

        $(this).closest('.js-long-text').find('.paragraph').toggleClass('show-all');
    });
//Shorter text-end/////////////////////////////////////////////////////////////////////////////////////////////

    $('.carousel').carousel({
        touch: true
    });

    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    minHeader('.about, .contacts, .cars, .calculyator, .zakaz, .individual_reference, .reference, .articles,' +
        '.kak-bystro-mozhno-organizovat-pereezd, .na-chto-obratit-vnimanie, .pereezd-samostojatelno-ili-profi,' +
        '.prostye-pravila-pereezda-bez-hlopot, .rasprostranennye-oshibki, .pereezd-po-oblasti, .upakovochnye-materialy,' +
        '.vozdushno-puzyrchataya-plenka, .kartonnye-korobki, .skotch-upakovochnyj');

});

//functions////////////////////////////////////////////////////////////////////////////////////////////////

function minHeader (mainClass) {
    $(mainClass).parent().find('.header-main-theme').css({
        'height' : '400px'

    });

    $(mainClass).parent().find('.header-main-theme>h1').css({
        'marginTop' : '130px'
    });
}

//Check submit/////////////////////////////////////////////////////////////////////////////////////////////
function phoneValidation (value) {
    return value.match(/\+7\(?\d{3}\)?\d{3}-?\d{2}-?\d{2}/);
}

function emailValidation (value) {
    return value.match(/^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i);
}

function stringValidation (value) {
    return value.length > 0;
}

function formValidation(formInputs, form) {
    let errors = [];

    $.each(formInputs,function() {
        let inputName = $(this).data('id');
        let inputValue = $(this).val();

        switch (inputName) {
            case 'tel':
                if (!phoneValidation(inputValue)) {
                    errors.push({
                        name: inputName,
                        error: 'Номер телефона введен не корректно'
                    });
                }
                break;
            case 'email':
                if (!emailValidation(inputValue)) {
                    errors.push({
                        name: inputName,
                        error: 'E-mail введен не корректно'
                    });
                }
                break;
            default:
                if (!stringValidation(inputValue)) {
                    errors.push({
                        name: inputName,
                        error: 'Поле не должно быть пустым'
                    });
                }
        }
    });

    form.removeClass('is-invalid').addClass('is-valid');
    $('.text-danger').text('');

    if (errors.length > 0) {
        for (let i = 0; i < errors.length; i++) {
            let input = form.find('input[data-id=' + errors[i].name +']');
            let textarea = form.find('textarea[data-id=' + errors[i].name +']');
            input.removeClass('is-valid').addClass('is-invalid');
            textarea.removeClass('is-valid').addClass('is-invalid');
            input.siblings('.text-danger').text(errors[i].error);
            textarea.siblings('.text-danger').text(errors[i].error);
        }

        return false;
    }

    return true;
}
//Check submit end/////////////////////////////////////////////////////////////////////////////////////////////

