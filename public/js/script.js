;jQuery(document).ready(function() {
      //Плавный скорллинг 
  jQuery('a[href^="#"]').click(function(){ //берем все ссылки атрибут href которых начинается с # 
    if(document.getElementById($(this).attr('href').substr(1)) != null) { //на странице есть элемент с нужным нам id 
      jQuery('html, body').animate({ scrollTop: jQuery(jQuery(this).attr('href')).offset().top }, 300); // анимируем скролл к элементу 
    } 
    return false; 
  });
});