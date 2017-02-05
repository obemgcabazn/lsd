<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>LSD</title>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="ion.rangeSlider.css">
  <link rel="stylesheet" type="text/css" href="ion.rangeSlider.skinFlat.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <ul id="menu-top" class="nav">
      <li class="nav-item"><a href="#menu-top" class="nav-link">Главная</a></li>
      <li class="nav-item"><a href="#results" class="nav-link">Результаты</a></li>
      <li class="nav-item"><a href="#cooperation" class="nav-link">Сотрудничество</a></li>
      <li class="nav-item"><a href="#proofs" class="nav-link">Отзывы</a></li>
    </ul>
  </header>

  <section id="first-screen">

    <div class="container">
      <div class="head-wrap">
        <div class="row">
          <div class="offset-md-1 col-md-4 col-xl-4">
            <img src="img/logo.png" alt="logo" class="logo">
          </div>
          <div class="col-md-3 col-xl-3">
            <h3>Мы продаем<br>франшизу!</h3>
          </div>
          <div class="col-md-4 col-xl-4">
            <div class="contacts">
              <a href="tel:+79090606897" class="phone">+7 (909) 060-68-97</a><br>
              <a href="" class="call-back" data-toggle="modal" data-target=".call-back-modal">Заказать звонок</a>
              <div class="social">
                <ul>
                  <li><a href="https://vk.com/lsdgame" target="_blank"><img src="img/fb.png" alt="Facebook"></a></li>
                  <li><a href="https://www.facebook.com/lsdisgame" target="_blank"><img src="img/vk.png" alt="Vkontakte"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="tv">
        <div class="row">
          <div class="offset-xl-1 col-xl-7">

              <a href="" class="tv-link">
                <img src="img/play.png" alt="" class="tv-play">
                <p class="tv-desc text-xs-center text-uppercase">Вся суть бизнеса<br>за 2,5 минуты!</p>
              </a>
              <img src="img/tv.png" alt="" class="tv-img">
              <img src="img/noise.gif" alt="" class="tv-noise">
            
          </div>
          <div class="col-xl-3">
            <h2>Хочу в бизнес!</h2>
            <form action="mail.php" method="POST" name="header-form" class="call-back">
              <input type="text" class="form-control" name="name" placeholder="Имя">
              <input type="tel" class="form-control" name="phone" placeholder="Ваш номер телефона*">
              <p class="require-desc">* Поля обязательные к заполнению</p>
              <span class="results"></span>
              <button class="button-big" type="submit">Отправить</button>
            </form>
            <div class="success">
              Спасибо, мы получили ваши <br>
              данные, наш менеджер свяжется <br>
              с вами в ближайшее время!
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="results">
    <h2 class="text-xs-center text-uppercase">Наши результаты</h2>
    <div class="results-wrap">
      <div class="container">
        <div class="row">
          <div class="result-item col-md-4 col-xl-4">
            <p class="number">1</p>
            <p class="orange">год</p> 
            <span>Существование игры</span>
          </div>
          <div class="result-item col-md-4 col-xl-4">
            <p class="number">500</p>
            <p class="orange">рублей</p> 
            <span>Средний чек игрока</span></div>
          <div class="result-item col-md-4 col-xl-4">
            <p class="number">10 000</p>
            <p class="orange">человек</p> 
            <span>Участвуют в играх по России</span></div>
        </div>
      </div>
    </div>
  </section>

  <section id="calculator">
    <h2 class="text-xs-center">Посчитай как быстро ты начнешь зарабатывать</h2>
    
    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-7 bdr">
          <p class="strength-desc text-uppercase">Численность населения вашего города, чел</p>
            <div class="row">
              <div class="col-xl-3">
                <p class="strength-val">до 500 000</p>
                <span>|</span>
              </div>
              <div class="col-xl-5 text-xs-center">
                <p class="strength-val">от 500 000 до 999 000</p>
                <span>|</span>
              </div>
              <div class="col-xl-3 text-xs-right">
                <p class="strength-val">свыше 1 000 000</p>
                <span>|&nbsp;</span>
              </div>
            </div>
            
          <div class="range-wrap">
            <input type="text" id="range" name="range">
          </div>
          <p class="payment-desc text-uppercase">Паушальный взнос</p>
          <div class="payment">
            <span id="payment-val">180 000</span> <span class="payment-currency">руб</span>
          </div>
        </div>
        <div class="col-xl-4">
          <p class="profit-desc text-uppercase">За 1 год вы легко окупите паушальный взнос и заработаете</p>
          <div class="profit">
            <span id="profit-val">725 660</span> <span class="currency">руб</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="form-section">
    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-3">
          <h2>Хочу в бизнес!</h2>
          <p class="require-desc">* Поля обязательные к заполнению</p>
        </div>
        <div class="col-xl-8">
          <div class="row">
            <form action="mail.php" method="POST" name="payment-form" class="call-back">
              <div class="col-xl-4">
                <input type="text" class="form-control" name="name" placeholder="Имя">
              </div>
              <div class="col-xl-4">
                <input type="tel" class="form-control" name="phone" placeholder="Ваш номер телефона*">
              </div>
              <div class="col-xl-3">
                <button class="button-big" type="submit">Отправить</button>
              </div>
            </form>
          </div>

          <div class="success">
            Спасибо, мы получили ваши данные,<br>
            наш менеджер свяжется с вами в ближайшее время!
          </div>
        </div>

      </div>
    </dv>
  </section>

  <section id="cooperation">
    <h2 class="text-uppercase text-xs-center">Сотрудничество</h2>
    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-5">
          <div class="row">
            <div class="offset-xl-3 col-xl-9">
              <h4>Мы создаем:</h4>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xl-3">
              <span class="icon scenario"></span>
            </div>
            <div class="col-xl-9">
              <p class="adv-desc">
                Мы прорабатываем каждый сценарий <br>
                с криминалистами, врачами, <br>
                судмедэкспертами, полицейскими
              </p>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xl-3">
              <span class="icon video"></span>
            </div>
            <div class="col-xl-9">
              <p class="adv-desc mt10">
                Наши видео снимают <br>
                настоящие профессионалы
              </p>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xl-3">
              <span class="icon audio"></span>
            </div>
            <div class="col-xl-9">
              <p class="adv-desc">
                Аудиозаписи потрясают своей <br>
                натуральностью, потому что записаны <br>
                с участием профессиональных актеров
              </p>
            </div>
          </div>
        </div>

        <div class="offset-xl-1 col-xl-5">
          <div class="row">
            <div class="offset-xl-3 col-xl-9">
              <h4>Вы получаете:</h4>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xl-3">
              <span class="icon box"></span>
            </div>
            <div class="col-xl-9">
              <p class="adv-desc">
                Бокс с 20 комплектами раздаточных <br>
                материалов и необходимого реквизита <br>
                для проведения игры
              </p>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xl-3">
              <span class="icon video-crime"></span>
            </div>
            <div class="col-xl-9">
              <p class="adv-desc mt20">
                Видеоролики с места преступления
              </p>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xl-3">
              <span class="icon audio-crime"></span>
            </div>
            <div class="col-xl-9">
              <p class="adv-desc mt10">
                Аудиозаписи допросов и звуковое <br>
                сопровождение к играм
              </p>
            </div>
          </div>
        </div>
      </div>
      <h3 class="text-xs-center">Сопровождение</h3>
      <div class="row">
        <div class="offset-xl-1 col-xl-5">
          <div class="row adv-item">
            <div class="col-xl-3">
              <span class="icon docs"></span>
            </div>
            <div class="col-xl-9">
              <p class="adv-desc-support">
                Пакет документов с инструкциями <br>
                по запуску и ведению бизнеса
              </p>
            </div>
          </div>
        </div>

        <div class="offset-xl-1 col-xl-5">
          <div class="row adv-item">
            <div class="col-xl-3">
              <span class="icon support"></span>
            </div>
            <div class="col-xl-9">
              <p class="adv-desc-support">
                Поддержку и консультации <br>
                на всех этапах ведения бизнеса
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="team">
    <h2 class="text-uppercase text-xs-center">Команда</h2>

    <div class="container">
      <div class="row">
        <div class="offset-md-1 col-md-5">
          <div class="team-item">
            <div class="row">
              <div class="offset-md-1 col-md-4">
                <img src="img/team/belousov.png" alt="Денис Белоусов" class="team-item-avatar">
              </div>
              <div class="col-md-7">
                <div class="team-item-desc">
                  <p class="team-item-name">Денис Белоусов</p>
                  <p class="team-item-post">создатель проекта ЛСД,<br>руководитель</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5">
          <div class="team-item">
            <div class="row">
              <div class="col-md-4">
                <img src="img/team/ahmetshin.png" alt="Антон Ахметшин" class="team-item-avatar">
              </div>
              <div class="col-md-8">
                <div class="team-item-desc">
                  <p class="team-item-name">Антон Ахметшин</p>
                  <p class="team-item-post">совладелец проекта ЛСД,<br>игротехник</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <h3 class="text-xs-center">Порядок работы</h3>

    <div class="container">
      <div class="row">
        <div class="offset-xs-1 col-xl-10">
          <ul class="stages">
            <li>
              <span class="stages-icon invite"></span>
              <p class="stages-desc">Знакомство</p>
            </li>
            <li>
              <span class="stages-icon meet"></span>
              <p class="stages-desc">Личная<br>встреча</p>
            </li>
            <li>
              <span class="stages-icon contract"></span>
              <p class="stages-desc">Подписание<br>договора</p>
            </li>
            <li>
              <span class="stages-icon payment"></span>
              <p class="stages-desc">Оплата<br>взноса</p>
            </li>
            <li>
              <span class="stages-icon execution"></span>
              <p class="stages-desc">Исполнение<br>обязательств</p>
            </li>
            <li>
              <span class="stages-icon education"></span>
              <p class="stages-desc">Подробное<br>обучение</p>
            </li>
            <li>
              <span class="stages-icon support"></span>
              <p class="stages-desc">Поддержка</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="form-section second">
    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-3">
          <h2>Хочу в бизнес!</h2>
          <p class="require-desc">* Поля обязательные к заполнению</p>
        </div>
        <div class="col-xl-8">
          <form action="mail.php" method="POST" name="payment-form" class="call-back">
            <div class="col-xl-4">
              <input type="text" class="form-control" name="name" placeholder="Имя">
            </div>
            <div class="col-xl-4">
              <input type="tel" class="form-control" name="phone" placeholder="Ваш номер телефона*">
            </div>
            <div class="col-xl-3">
              <button class="button-big" type="submit">Отправить</button>
            </div>
          </form>
          <div class="success">
            Спасибо, мы получили ваши данные,<br>
            наш менеджер свяжется с вами в ближайшее время!
          </div>
        </div>
      </div>
    </dv>
  </section>

  <section id="proofs">
    <h2 class="text-uppercase">Доказательства</h2>
    <h4>Мы знаем про Вас всё, поэтому знаем все Ваши вопросы:</h4>

    <div class="question-wrap">
      <div class="container">
        <div class="row">
          <div class="offset-xl-1 col-xl-4">
            <ul>
              <li>Дорого?</li>
              <li>Это будет работать у меня в городе?</li>
              <li>Чем мне заняться пока я собира<br>средства для покупки франшизы?</li>
              <li>Кто ваши конкуренты?</li>
            </ul>
          </div>
          <div class="col-xl-5">
            <ul>
              <li>Почему ЛСД, а не квест комнаты<br>или другие интеллектуальные игры?</li>
              <li>У меня не получится!</li>
              <li>Могу ли я купить франшизу и нанять<br>сотрудника для управления данным бизнесом?</li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
    <div class="text-xs-center"><a href="" class="button-big">Получить ответы</a></div>

    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-10">
          <h4>Бизнес уже работает. Вот наши партнеры</h4>
          <div class="partners-wrap">
            <div class="col-xl-3">
              <img src="img/speech-bubble-02.png" alt="">
              <p class="name">Наташа Беляева</p>
              <em>ЛСД — это круто! И да, это ИГРА!!! Спасибо, Денис Белоусов!! Отличная идея. Меня очень порадовало это</em>
              <a href="" class="button-small">Связаться с партнером</a>
            </div>
            <div class="col-xl-3">
              <img src="img/speech-bubble-01.png" alt="">
              <p class="name">Динара Иванова</p>
              <em>Погрузились в детективные расследования с головой! Мы с коллегами такую теорию выдвинули, что мама не горюй </em>
              <a href="" class="button-small">Связаться с партнером</a>
            </div>
            <div class="col-xl-3">
              <img src="img/speech-bubble-02.png" alt="">
              <p class="name">Вера Русских</p>
              <em>А вы слышите скрип мозгов? Проведи 2 часа с #ЛСДэтоигра и получи +150 к Интеллекту. И +3 к квадратной попе)))</em>
              <a href="" class="button-small">Связаться с партнером</a>
            </div>
            <div class="col-xl-3">
              <img src="img/speech-bubble-01.png" alt="">
              <p class="name">Наташа Беляева</p>
              <em>ЛСД — это круто! И да, это ИГРА!!! Спасибо, Денис Белоусов!! Отличная идея. Меня очень порадовало</em>
              <a href="" class="button-small">Связаться с партнером</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <h2 class="city">Один город = одна франшиза!</h2>
  <section class="form-section third">
    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-3">
          <h2>Какой город хочешь<br>оставить за собой?</h2>
          <p class="require-desc">* Поля обязательные к заполнению</p>
        </div>
        <div class="col-xl-8">
          <form action="mail.php" method="POST" name="payment-form" class="call-back">
            <div class="col-xl-4">
              <input type="text" class="form-control" name="name" placeholder="Город*">
            </div>
            <div class="col-xl-4">
              <input type="tel" class="form-control" name="phone" placeholder="Ваш номер телефона*">
            </div>
            <div class="col-xl-3">
              <button class="button-big" type="submit">Отправить</button>
            </div>
          </form>
          <div class="success">
            Спасибо, мы получили ваши данные,<br>
            наш менеджер свяжется с вами в ближайшее время!
          </div>
        </div>
      </div>
    </dv>
  </section>
  <section id="gallery">
    <!-- Nav tabs -->
    <div class="tab-wrap">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link left active" data-toggle="tab" href="#photo" role="tab"><span>Фото</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link right" data-toggle="tab" href="#video" role="tab"><span>Видео</span></a>
        </li>
      </ul>
    </div>

    <div class="tab-content-wrap">
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="photo" role="tabpanel">
          <div class="gallery-photo">
            <div><img data-lazy="img/photo/photo-1.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-2.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-3.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-4.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-5.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-6.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-7.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-8.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-9.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-10.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-11.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-12.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-13.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-14.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-15.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-16.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-17.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-18.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-19.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-20.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-21.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-22.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-23.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-24.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-25.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-26.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-27.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-28.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-29.jpg" alt=""></div>
            <div><img data-lazy="img/photo/photo-30.jpg" alt=""></div>
          </div>
        </div>
        <div class="tab-pane" id="video" role="tabpanel">
          <a href="" data-toggle="modal" data-target=".video-modal-1"><img src="img/video/screenshot_video-1.jpg" alt=""></a><a href="" data-toggle="modal" data-target=".video-modal-2"><img src="img/video/screenshot_video-2.jpg" alt=""></a><a href="" data-toggle="modal" data-target=".video-modal-3"><img src="img/video/screenshot_video-3.jpg" alt=""></a><a href="" data-toggle="modal" data-target=".video-modal-4"><img src="img/video/screenshot_video-4.jpg" alt=""></a>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-2">
          <img src="img/logo-footer.jpg" class="logo">
        </div>
        <div class="col-xl-5">
          <ul id="menu-bottom" class="nav">
            <li class="nav-item"><a href="#menu-top" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="#results" class="nav-link">Результаты</a></li>
            <li class="nav-item"><a href="#cooperation" class="nav-link">Сотрудничество</a></li>
            <li class="nav-item"><a href="#proofs" class="nav-link">Отзывы</a></li>
          </ul>
        </div>
        <div class="col-xl-4">
          <div class="contacts">
            <a href="tel:+79090606897" class="phone">+7 (909) 060-68-97</a><br>
            <a href="" class="call-back" data-toggle="modal" data-target=".call-back-modal">Заказать звонок</a>
            <div class="social">
              <ul>
                <li><a href="https://vk.com/lsdgame" target="_blank"><img src="img/fb.png" alt="Facebook"></a></li>
                <li><a href="https://www.facebook.com/lsdisgame" target="_blank"><img src="img/vk.png" alt="Vkontakte"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Модальное окно для формы заказа звонка -->
  <div class="modal fade call-back-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="row">
          <div class="col-xl-12">
            <form action="mail.php" method="POST" name="call-back" class="call-back">
              <input class="form-control" type="text" placeholder="Введите имя" name="name">
              <input class="form-control" type="tel" placeholder="Номер телефона" name="phone">
              <button type="submit" class="button-big">Отправить</button>
            </form>
            <div class="success">
              Спасибо, мы получили ваши <br>
              данные, наш менеджер свяжется <br>
              с вами в ближайшее время!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Модальные окна для видео -->
  <div class="modal fade video-modal-1" tabindex="-1" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-" role="document">
      <div class="row">
        <div class="col-xl-12">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/XFUo8anTK3A" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade video-modal-2" tabindex="-1" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-" role="document">
      <div class="row">
        <div class="col-xl-12">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/rEh-dQm19Zk" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade video-modal-3" tabindex="-1" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-" role="document">
      <div class="row">
        <div class="col-xl-12">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/w3RtCEqzVsA" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade video-modal-4" tabindex="-1" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-" role="document">
      <div class="row">
        <div class="col-xl-12">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/mT8KBL5qvx8" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <script src="https://yastatic.net/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/jquery.maskedinput.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <script src="js/ion.rangeSlider.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>