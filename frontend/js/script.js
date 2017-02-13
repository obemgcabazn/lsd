;(function($){

  $(document).ready(function() {

    //Плавный скорллинг 
    $('a[href^="#"]:not(#gallery .nav-link)').click(function(){ //берем все ссылки атрибут href которых начинается с # 
      if(document.getElementById($(this).attr('href').substr(1)) != null) { //на странице есть элемент с нужным нам id 
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 300); // анимируем скролл к элементу 
      } 
      return false; 
    });

    //Обработчик формы
    $(function(){
      $('.call-back').submit(function(e){
        e.preventDefault(); //отменяем стандартное действие при отправке формы
        var m_method=$(this).attr('method'); //берем из формы метод передачи данных
        var m_action=$(this).attr('action'); //получаем адрес скрипта на сервере, куда нужно отправить форму
        var m_data=$(this).serialize(); //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
        $.ajax({
          type: m_method,
          url: m_action,
          data: m_data,
          success: function(result){
            $('.success').css("display", "block");
            $('form.call-back').css("display", "none");
            }
        });
      });
    });

    // Подключаем слайдер
    var range = $("#range");
    var paymentVal = $("#payment-val");
    var profitVal = $("#profit-val");

    range.ionRangeSlider({
      hide_min_max: true,
      min: 0,
      max: 2,
      step: 1
    });

    range.on("change", function () {
        var $this = $(this),
            value = $this.prop("value");
            value = parseInt(value);

            if(value === 0) {
              paymentVal.animateNumber({ number: 180000 });
              profitVal.animateNumber({ number: 725660 });
            }

            if(value === 1) {
              paymentVal.animateNumber({ number: 200000 });
              profitVal.animateNumber({ number: 958580 });
            }

            if(value === 2) {
              paymentVal.animateNumber({ number: 250000 });
              profitVal.animateNumber({ number: 1161500 });
            }
    });

    // Подключаем фильтр форм
    $('input[type="tel"]').mask("+7 (999) 999-99-99");

    //Подключаем галерею
    $('.gallery-photo').slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                variableWidth: true
              }
            }
          ]
      });

    //Лайтбокс для Галереи
    $(".fancybox").fancybox();

    $(".various").fancybox({
        maxWidth  : 800,
        maxHeight : 600,
        fitToView : false,
        width   : '70%',
        height    : '70%',
        autoSize  : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
      });

    //Полифил для валидации форм в Safari
    webshim.polyfill('forms');
  });

})($);