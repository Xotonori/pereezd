$(document).ready(function () {

//Check submit/////////////////////////////////////////////////////////////////////////////////////////////
    $('.js-modal').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        if(formValidation(formData, $(this))) {
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
        interval: false
    });


});















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

function formValidation(formData, form) {
    let errors = [];

    $.each(formData,function() {
        let inputName = this.name;
        let inputValue = this.value;

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
            let input = form.find('input[name=' + errors[i].name +']');
            input.removeClass('is-valid').addClass('is-invalid');
            input.siblings('.text-danger').text(errors[i].error);
        }

        return false;
    }

    return true;
}
//Check submit end/////////////////////////////////////////////////////////////////////////////////////////////

