 //раскрывающийся аккардеон
 ! function(t) {
  var o, n;
  $('.title_block').unbind();
  t(".title_block").on("click", function() {
    o = t(this).parents(".accordion_item"), n = o.find(".info"),
      o.hasClass("active_block") ? (o.removeClass("active_block"),
        n.slideUp()) : (o.addClass("active_block"), n.stop(!0, !0).slideDown(),
        o.siblings(".active_block").removeClass("active_block").children(
          ".info").stop(!0, !0).slideUp())
  });
     // t(".cenablock-card-abs-btnwrap").on("click", function() {
     //     var id = $(this).find('.mbtn2').attr("href");
     //     setTimeout(function () {
     //         var acc = $('.accordion').find(id);
     //         id_acc = $(acc).find('.title_block');
     //         o = (id_acc).parents(".accordion_item");
     //         collapse_accardion(o);
     //     }, 500)
     // });
     // t(".cenablock-card-abs-text").on("click", function() {
     //     var id = $(this).find('a').attr("href");
     //     setTimeout(function () {
     //         var acc = $('.accordion').find(id);
     //         id_acc = $(acc).find('.title_block');
     //         o = (id_acc).parents(".accordion_item");
     //         collapse_accardion(o);
     //     }, 500)
     // });
}(jQuery);

// function collapse_accardion(o) {
//     var n;
//     n = o.find(".info"),
//         o.hasClass("active_block") ? (o.removeClass("active_block"),
//             n.slideUp()) : (o.addClass("active_block"), n.stop(!0, !0).slideDown(),
//             o.siblings(".active_block").removeClass("active_block").children(
//                 ".info").stop(!0, !0).slideUp())
// }

//Вызываем или закрываем 2 версии мобильного меню

    $('.mobmenu-open').click(function(event) {
    $('.menu-ten').slideToggle(500);
    $('.header-center-menu').slideToggle(500);
  });
  $('.menu-ten').click(function(event) {
    $('.menu-ten').slideToggle(500);
    $('.header-center-menu').slideToggle(500);
  });
  $('.mobmenu-close').click(function(event) {
    $('.menu-ten').slideToggle(500);
    $('.header-center-menu').slideToggle(500);
  });

  $('.addr-open').click(function(event) {
    $('.header-center-addrw').slideToggle(500);
  });
  $('.header-center-addrw-close').click(function(event) {
    $('.header-center-addrw').slideToggle(500);
  });

//Делает хедер не прозрачным при скролле
$(window).scroll(function() {
  if( $(window).scrollTop() > 80 ) {
    $('.header').addClass('header-v2')
  }
  else {
    $('.header').removeClass('header-v2')
  }
});

 //Слайдер марок

 //Слайдер блока Новости
$('.markiblock-slider').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 6,
    autoplay: false,
    lazyLoad: 'progressive',
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
  ]
 });

 //Слайдер блока Акции
$('.akciiblock-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    lazyLoad: 'progressive',
    responsive: [
    {
      breakpoint: 1800,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
 });
  //Малый слайдер наши работы
$('.rabotiblock-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    lazyLoad: 'progressive',
    responsive: [
    {
      breakpoint: 1800,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
 });

//Показываем или скрываем все марки в Блока Марки со слайдером

$('.markiblock-btn').click(function(event) {
    $('.markiblock-btn-s1').slideToggle(10);
    $('.markiblock-btn-s2').slideToggle(10);
    $('.markiblock-spis').slideToggle(1000);
    $('.markiblock-slider').slideToggle(500);
});

if ($(window).width()>992) {
$('.cenablock-card').hover(function(event) {
    $(this ).find('.cenablock-card-abs-btnwrap').slideToggle(500);
  })
  }
  else{
    $('.cenablock-card').click(function(event) {
        $(this ).find('.cenablock-card-abs-btnwrap').slideToggle(500);
      });

};

//Показываем все услуги в блоке Цены и услуги
$('.cenablock-pokbtn').click(function(event) {
    $('.cenablockdn').slideDown(500)
    $('.cenablock-pokbtn').slideToggle(100)
  });

  //Показываем весь текст в СЕО-блоках
$('.seo-skrcont-open').click(function(event) {
    $('.seo-skrcont').slideToggle(500)
    $('.seo-skrcont-open').slideToggle(500)
  });

// Работа с модальными формами
$("#client_phone").mask("+7 (999) 999-99-99");

$('.modal-form-open').click(function(event) {
    event.preventDefault();
    this.blur();

    let modalForm = $("#modal-form");
    let button = $(this);

    modalForm.find("#recall-form-name").text(button.data('name'));
    modalForm.find("input[name=type]").val(button.data('type'));

    modalForm.modal();
});

$("#form-recall-send").click(function(event) {
    event.preventDefault();

    let form = $(this).closest('#recall-form');
    let client_name = form.find('input[name=client_name]').val();
    let client_phone = form.find('input[name=client_phone]').val();
    let type = form.find('input[name=type]').val();
    let vacancy_status = false;
    if(type === 'vacancy'){
        vacancy_status = true;
    }

    if (client_name == '') {
        showNotification('Предупреждение!', 'Поле "Имя" не заполнено!', true);
        return false;
    } else if (/[0-9]/.test(client_name)) {
        showNotification('Предупреждение!', 'В поле Имя не могут содержаться цифры!', true);
        return false;
    } else if (/[a-zA-Z]/.test(client_name)) {
        showNotification('Предупреждение!', 'В поле Имя не могут содержаться английские буквы!', true);
        return false;
    } else if (client_phone == '') {
        showNotification('Предупреждение!', 'Поле телефон не заполнено!', true);
        return false;
    } else if (!form.find("input[name=obrabotkaDanix]").prop("checked")) {
        showNotification('Предупреждение!', 'Вы не дали согласие на обработку персональных данных!', true);
        return false;
    }

    $("#form-recall-send").text('Отправляется...');


    $.ajax({
        type: "POST",
        url: '/ajax/sendcall/',
        data: {
            username: client_name,
            phone: client_phone,
            type: type,
            _csrf: form.find('input[name=_csrf]').val()
        },
        success: function (respond, status, jqXHR) {
            if (typeof respond.error === 'undefined') {
                // yaCounter5921719.reachGoal('ostavit_zayavku');
                let response = JSON.parse(respond);
                form.closest('.modal').modal('hide');
                if(vacancy_status) {
                    showNotification('Отправлено!', 'Ваш отклик на вакансию получен!');
                    $("#form-recall-send").text('Отправляется...');
                } else {
                    showNotification('Отправлено!', 'Ваша заявка получена, мы перезвоним в течении 30 секунд');
                    yaCounter89214513.reachGoal('fos_send');
                    $("#form-recall-send").text('Отправляется...');
                    // $("#form-recall-send").text("Отправить");
                }
            } else {
                let error = 'ОШИБКА: ' + respond.data;
                showNotification('Ошибка!', error, true);
                console.log(error);
                $("#form-recall-send").text("Отправить");
            }
        },
        error: function (jqXHR, status, errorThrown) {
            let error = 'ОШИБКА AJAX запроса: ' + status;
            showNotification('Ошибка!', error, true);
            console.log(error, jqXHR);
            $("#form-recall-send").text("Отправить");
        }
    });

    return false;

});

function showNotification(header, message, closeExisting = false) {
    let modal = $("#modal-report");

    modal.find("#modal-report-header").text(header);
    modal.find("#modal-report-massage").text(message);

    if(closeExisting) {
        modal.modal({
            closeExisting: false
        });
    } else {
        modal.modal();
    }

}

$(".mobile-touch-path").on("touchstart", function(event) {
    event.preventDefault();
    let touchButton = $(this);
    let naviPath = touchButton.data("touch");
    window.location = naviPath;
});