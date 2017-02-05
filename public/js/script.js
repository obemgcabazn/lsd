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

            console.log(value);

            if(value === 0) {
              paymentVal.html('180 000');
              profitVal.html('725 660');
            }

            if(value === 1) {
              paymentVal.html('200 000')
              profitVal.html('958 580')
            }

            if(value === 2) {
              paymentVal.html('250 000')
              profitVal.html('1 161 500')
            }
    });

    // Подключаем фильтр форм
    $('input[type="tel"]').mask("+7 (999) 999-99-99");

    //Подключаем галерею
    $('.gallery-photo').slick({
        lazyLoad: 'ondemand',
        infinite: true,
        speed: 300,
        arrows: false,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
      });

  });

})($);