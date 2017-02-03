;jQuery(document).ready(function() {

  //Плавный скорллинг 
  jQuery('a[href^="#"]:not(#gallery .nav-link)').click(function(){ //берем все ссылки атрибут href которых начинается с # 
    if(document.getElementById($(this).attr('href').substr(1)) != null) { //на странице есть элемент с нужным нам id 
      jQuery('html, body').animate({ scrollTop: jQuery(jQuery(this).attr('href')).offset().top }, 300); // анимируем скролл к элементу 
    } 
    return false; 
  });

  //Обработчик формы
  jQuery(function(){
    jQuery('.call-back').submit(function(e){
      e.preventDefault(); //отменяем стандартное действие при отправке формы
      var m_method=$(this).attr('method'); //берем из формы метод передачи данных
      var m_action=$(this).attr('action'); //получаем адрес скрипта на сервере, куда нужно отправить форму
      var m_data=$(this).serialize(); //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
      jQuery.ajax({
        type: m_method,
        url: m_action,
        data: m_data,
        success: function(result){
          jQuery('.result').html(result);
          }
      });
    });
  });
});