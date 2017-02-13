<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <title>LSD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta property="og:image" content="http://lsdgame.ru/img/vk-snippet.jpg">
  <meta name="twitter:card" content="http://lsdgame.ru/img/vk-snippet.jpg">
  <meta name="twitter:image:src" content="http://lsdgame.ru/img/vk-snippet.jpg">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="/img/plainicon.png">
  <link rel="image_src" href='http://lsdgame.ru/img/vk-snippet.jpg' />
</head>
<body id="body">
  <div data-image='http://lsdgame.ru/img/vk-snippet.jpg'></div>
  <header class="hidden-xs-down">
    <ul id="menu-top" class="nav">
      <li class="nav-item"><a href="#menu-top" class="nav-link">Главная</a></li>
      <li class="nav-item"><a href="#results" class="nav-link">Результаты</a></li>
      <li class="nav-item"><a href="#cooperation" class="nav-link">Сотрудничество</a></li>
      <li class="nav-item"><a href="#proofs" class="nav-link">Отзывы</a></li>
    </ul>
  </header>

  <section id="first-screen">

    <div class="container">
      <div class="head-wrap text-xs-center">
        <div class="row">
          <div class="offset-md-1 col-md-4 col-xl-4">
            <img src="img/logo.png" alt="logo" class="logo" width="100%">
          </div>
          <div class="col-md-3 col-xl-3">
            <h3>Мы продаем<br>франшизу!</h3>
          </div>
          <div class="col-md-4 col-xl-3">
            <div class="contacts text-xl-right">
              <a href="tel:88007005162" class="phone">8-800-700-51-62</a><br>
              <a href="" class="call-back" data-toggle="modal" data-target=".call-back-modal">Заказать звонок</a>
              <div class="social">
                <ul>
                  <li><a href="https://www.facebook.com/lsdisgame" target="_blank"><img src="img/fb.png" alt="Facebook"></a></li>
                  <li><a href="https://vk.com/lsdgame" target="_blank"><img src="img/vk.png" alt="Vkontakte"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tv">
        <div class="row">
          <div class="col-xs-12 offset-xl-1 col-xl-7">
            <div class="tv-wrap">
              <a class="various fancybox.iframe tv-link" href="https://www.youtube.com/embed/RBm3gomjrkI">
                <img src="img/tv.gif" alt="" class="tv-img" width="100%">
              </a>
            </div>
          </div>
          <div class="tv-form">
            <div class="col-xs-12 col-xl-3">
              <h2>Хочу в бизнес!</h2>
              <form action="mail.php" method="POST" name="header-form" class="call-back">
                <input type="text" class="form-control" name="name" placeholder="Имя">
                <input type="tel" class="form-control" name="phone" placeholder="Ваш номер телефона*" required>
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
              <div class="col-xs-4 col-xl-3">
                <p class="strength-val">до 500 000</p>
                <p class="marker-left">|</p>
              </div>
              <div class="col-xs-4 col-xl-5 text-xs-center">
                <p class="strength-val">от 500 000 до 999 000</p>
                <p>|</p>
              </div>
              <div class="col-xs-4 col-xl-3 text-xs-right">
                <p class="strength-val">свыше 1 000 000</p>
                <p class="marker-right">|</p>
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
                <input type="tel" class="form-control" name="phone" placeholder="Ваш номер телефона*" required>
              </div>
              <div class="col-xl-3 text-xs-center text-sm-left">
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
            <div class="col-xs-12">
              <h4 class="text-xs-center">Мы создаем:</h4>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xs-3 col-xl-3">
              <span class="icon scenario"></span>
            </div>
            <div class="col-xs-9 col-xl-9">
              <p class="adv-desc">
                Мы прорабатываем каждый сценарий <br>
                с криминалистами, врачами, <br>
                судмедэкспертами, полицейскими
              </p>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xs-3 col-xl-3">
              <span class="icon video"></span>
            </div>
            <div class="col-xs-9 col-xl-9">
              <p class="adv-desc mt10">
                Наши видео снимают <br>
                настоящие профессионалы
              </p>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xs-3 col-xl-3">
              <span class="icon audio"></span>
            </div>
            <div class="col-xs-9 col-xl-9">
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
            <div class="col-xs-12">
              <h4 class="text-xs-center">Вы получаете:</h4>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xs-3 col-xl-3">
              <span class="icon box"></span>
            </div>
            <div class="col-xs-9 col-xl-9">
              <p class="adv-desc">
                Бокс с 20 комплектами раздаточных <br>
                материалов и необходимого реквизита <br>
                для проведения игры
              </p>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xs-3 col-xl-3">
              <span class="icon video-crime"></span>
            </div>
            <div class="col-xs-9 col-xl-9">
              <p class="adv-desc mt20">
                Видеоролики с места преступления
              </p>
            </div>
          </div>
          <div class="row adv-item">
            <div class="col-xs-3 col-xl-3">
              <span class="icon audio-crime"></span>
            </div>
            <div class="col-xs-9 col-xl-9">
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
            <div class="col-xs-3 col-xl-3">
              <span class="icon docs"></span>
            </div>
            <div class="col-xs-9 col-xl-9">
              <p class="adv-desc-support">
                Пакет документов с инструкциями <br>
                по запуску и ведению бизнеса
              </p>
            </div>
          </div>
        </div>

        <div class="offset-xl-1 col-xl-5">
          <div class="row adv-item">
            <div class="col-xs-3 col-xl-3">
              <span class="icon support"></span>
            </div>
            <div class="col-xs-9 col-xl-9">
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
    <h2 class="text-uppercase text-xs-center">Создатели</h2>

    <div class="container">
      <div class="row text-xs-center text-md-left">
        <div class="col-xs-6 offset-md-1 col-md-5">
          <div class="team-item">
            <div class="row">
              <div class="offset-md-1 col-md-4">
                <img src="img/team/belousov.png" alt="Денис Белоусов" class="team-item-avatar" width="100%">
              </div>
              <div class="col-md-7">
                <div class="team-item-desc">
                  <p class="team-item-name">Денис Белоусов</p>
                  <p class="team-item-post text-xs-center text-md-left">создатель проекта ЛСД,<br>руководитель</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-xl-5">
          <div class="team-item">
            <div class="row">
              <div class="col-md-4">
                <img src="img/team/ahmetshin.png" alt="Антон Ахметшин" class="team-item-avatar" width="100%">
              </div>
              <div class="col-md-8">
                <div class="team-item-desc">
                  <p class="team-item-name">Антон Ахметшин</p>
                  <p class="team-item-post text-xs-center text-md-left">совладелец проекта ЛСД,<br>игротехник</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <h3 class="text-xs-center">Порядок работы</h3>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-xs-center offset-xl-1 col-xl-10">
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
              <input type="tel" class="form-control" name="phone" placeholder="Ваш номер телефона*" required>
            </div>
            <div class="col-xl-3 text-xs-center text-sm-left">
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
          <div class="offset-xs-1 col-xs-11 offset-md-1 col-md-4">
            <ul>
              <li>Дорого?</li>
              <li>Это будет работать у меня в городе?</li>
              <li>Чем мне заняться пока я собираю<br>средства для покупки франшизы?</li>
              <li>Кто ваши конкуренты?</li>
            </ul>
          </div>
          <div class="offset-xs-1 col-xs-11 col-md-5">
            <ul>
              <li>Почему ЛСД, а не квест комнаты<br>или другие интеллектуальные игры?</li>
              <li>У меня не получится!</li>
              <li>Могу ли я купить франшизу и нанять<br>сотрудника для управления данным бизнесом?</li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
    <div class="text-xs-center"><a href="" class="button-big" data-toggle="modal" data-target=".call-back-modal">Получить ответы</a></div>

    <div class="container">
      <div class="row">
        <div class="offset-xl-1 col-xl-10">
          <h4>Бизнес уже работает. Вот наши партнеры</h4>
          <div class="row">
            <div class="partners-wrap">
              <div class="partner-item col-xs-12 col-sm-6 col-md-4 offset-xl-0 col-xl-2">
                <span class="speech-bubble 01"></span>
                <p class="name">Анна Петрова<br><i>г. Самара</i></p>
                <em>Привлек формат игры, который не является ни квестом, 
                ни привычной квиз — игрой. Во-вторых, меня поразил антураж игры и стиль, который продуман до мелочей. Участник полностью погружается
                в детективный мир, забывая, что творится за окном.</em>
                <a href="" class="button-small" data-toggle="modal" data-target=".call-back-city-modal">Связаться с партнером</a>
              </div>
              <div class="partner-item col-xs-12 col-sm-6 col-md-4 offset-xl-0 col-xl-2">
                <span class="speech-bubble second"></span>
                <p class="name">Алексей Фомин<br><i>г. Екатеринбург</i></p>
                <em>Адекватный взнос, низкий роялти, поддержка на всех этапах — основные критерии, которые я оценивал при выборе франшизы. ЛСД подошёл по всем параметрам и подарил много приятных бонусов. Именно поэтому сейчас Я — дилер ЛСД в Екатеринбурге!)</em>
                <a href="" class="button-small" data-toggle="modal" data-target=".call-back-city-modal">Связаться с партнером</a>
              </div>
              <div class="partner-item col-xs-12 col-sm-6 col-md-4 offset-xl-0 col-xl-2">
                <span class="speech-bubble third"></span>
                <p class="name">Дмитрий Хорчин<br><i>г. Калуга</i></p>
                <em>Каждый человек хотел бы почувствовать себя в роли Шерлока Холмса, раскрывая преступления своим знаменитым дедуктивным методом. ЛСД сделает из Вас детектива! Формат привлекает людей и позволяет заработать, проводя игры ЛСД в своём городе</em>
                <a href="" class="button-small" data-toggle="modal" data-target=".call-back-city-modal">Связаться с партнером</a>
              </div>
              <div class="partner-item col-xs-12 col-sm-6 offset-md-2 col-md-4 offset-xl-0 col-xl-2">
                <span class="speech-bubble fourth"></span>
                <p class="name">Василий Ефимов<br><i>г. Тюмень</i></p>
                <em>Я выбрал ЛСД по следующим причинам — оригинальность, уникальность проекта; стиль, глубина проработки материалов; потенциал развития проекта в России; потенциал моего заработка; близость к моей деятельности; открытость и помощь создателей</em>
                <a href="" class="button-small" data-toggle="modal" data-target=".call-back-city-modal">Связаться с партнером</a>
              </div>
              <div class="partner-item col-xs-12 offset-sm-3 col-sm-6 offset-md-0 col-md-4 offset-xl-0 col-xl-2">
                <span class="speech-bubble fifth"></span>
                <p class="name">Алексей Захаренко<br><i>г. Орел</i></p>
                <em>Выбрал ЛСД, потому что искал интересный проект, который не будет отнимать много времени, но при этом приносить доход. Тема с ресторанными развлечениями сейчас находится на подъеме. Старался успеть попасть в струю. Результаты очень радуют!</em>
                <a href="" class="button-small" data-toggle="modal" data-target=".call-back-city-modal">Связаться с партнером</a>
              </div>
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
              <input type="text" class="form-control" name="name" placeholder="Город">
            </div>
            <div class="col-xl-4">
              <input type="tel" class="form-control" name="phone" placeholder="Ваш номер телефона*" required>
            </div>
            <div class="col-xl-3 text-xs-center text-sm-left">
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
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="gallery-photo">
                  <a href="img/photo/photo-1.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-1.jpg" alt=""></a>
                  <a href="img/photo/photo-2.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-2.jpg" alt=""></a>
                  <a href="img/photo/photo-3.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-3.jpg" alt=""></a>
                  <a href="img/photo/photo-4.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-4.jpg" alt=""></a>
                  <a href="img/photo/photo-5.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-5.jpg" alt=""></a>
                  <a href="img/photo/photo-6.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-6.jpg" alt=""></a>
                  <a href="img/photo/photo-7.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-7.jpg" alt=""></a>
                  <a href="img/photo/photo-8.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-8.jpg" alt=""></a>
                  <a href="img/photo/photo-9.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-9.jpg" alt=""></a>
                  <a href="img/photo/photo-10.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-10.jpg" alt=""></a>
                  <a href="img/photo/photo-11.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-11.jpg" alt=""></a>
                  <a href="img/photo/photo-12.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-12.jpg" alt=""></a>
                  <a href="img/photo/photo-13.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-13.jpg" alt=""></a>
                  <a href="img/photo/photo-14.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-14.jpg" alt=""></a>
                  <a href="img/photo/photo-15.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-15.jpg" alt=""></a>
                  <a href="img/photo/photo-16.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-16.jpg" alt=""></a>
                  <a href="img/photo/photo-17.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-17.jpg" alt=""></a>
                  <a href="img/photo/photo-18.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-18.jpg" alt=""></a>
                  <a href="img/photo/photo-19.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-19.jpg" alt=""></a>
                  <a href="img/photo/photo-20.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-20.jpg" alt=""></a>
                  <a href="img/photo/photo-21.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-21.jpg" alt=""></a>
                  <a href="img/photo/photo-22.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-22.jpg" alt=""></a>
                  <a href="img/photo/photo-23.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-23.jpg" alt=""></a>
                  <a href="img/photo/photo-24.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-24.jpg" alt=""></a>
                  <a href="img/photo/photo-25.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-25.jpg" alt=""></a>
                  <a href="img/photo/photo-26.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-26.jpg" alt=""></a>
                  <a href="img/photo/photo-27.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-27.jpg" alt=""></a>
                  <a href="img/photo/photo-28.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-28.jpg" alt=""></a>
                  <a href="img/photo/photo-29.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-29.jpg" alt=""></a>
                  <a href="img/photo/photo-30.jpg" class="fancybox" data-fancybox-group="photo-gallery"><img data-lazy="img/photo/thumb-photo-30.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="video" role="tabpanel">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-xl-3">
                <a class="various fancybox.iframe" href="https://www.youtube.com/embed/mT8KBL5qvx8">
                  <img src="img/video/screenshot_video-1.jpg" alt="">
                </a>
              </div>
              <div class="col-xs-12 col-md-6 col-xl-3">
                <a class="various fancybox.iframe" href="https://www.youtube.com/embed/w3RtCEqzVsA">
                  <img src="img/video/screenshot_video-2.jpg" alt="">
                </a>
              </div>
              <div class="col-xs-12 col-md-6 col-xl-3">
                <a class="various fancybox.iframe" href="https://www.youtube.com/embed/rEh-dQm19Zk">
                  <img src="img/video/screenshot_video-3.jpg" alt="">
                </a>
              </div>
              <div class="col-xs-12 col-md-6 col-xl-3">
                <a class="various fancybox.iframe" href="https://www.youtube.com/embed/XFUo8anTK3A">
                  <img src="img/video/screenshot_video-4.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="offset-xs-3 col-xs-6 offset-xl-1 col-xl-2">
          <img src="img/logo-footer.jpg" class="logo">
        </div>
        <div class="col-xs-12 col-xl-5">
          <ul id="menu-bottom" class="nav">
            <li class="nav-item"><a href="#menu-top" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="#results" class="nav-link">Результаты</a></li>
            <li class="nav-item"><a href="#cooperation" class="nav-link">Сотрудничество</a></li>
            <li class="nav-item"><a href="#proofs" class="nav-link">Отзывы</a></li>
          </ul>
          <div class="main-print text-xs-center">
            <a href="http://mainprinter.ru/" title="Mainprint" target="_blank"><img src="img/main-print.png"></a>
          </div>
        </div>
        <div class="col-xs-12 col-xl-4">
          <div class="contacts">
            <a href="tel:88007005162" class="phone">8-800-700-51-62</a><br>
            <a href="" class="call-back" data-toggle="modal" data-target=".call-back-modal">Заказать звонок</a>
            <div class="social">
              <ul>
                <li><a href="https://www.facebook.com/lsdisgame" target="_blank"><img src="img/fb.png" alt="Facebook"></a></li>
                <li><a href="https://vk.com/lsdgame" target="_blank"><img src="img/vk.png" alt="Vkontakte"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#body" class="totop">&uarr;</a>

  <!-- Модальное окно для формы заказа звонка -->
  <div class="modal fade call-back-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="cbm">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="mail.php" method="POST" name="call-back" class="call-back">
          <input class="form-control" type="text" placeholder="Введите имя" name="name">
          <input class="form-control" type="tel" placeholder="Номер телефона" name="phone" required="required">
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

  <!-- Модальное окно для связи с партнером -->
  <div class="modal fade call-back-city-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Для того, чтобы партнер связался в Вами, введите</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="row">
          <div class="col-xs-12 col-xl-12">
            <form action="mail.php" method="POST" name="call-back" class="call-back">
              <input class="form-control" type="text" placeholder="Имя" name="name">
              <input class="form-control" type="tel" placeholder="Номер телефона*" name="phone" required="required">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  
  <script src="minified/polyfiller.js"></script>

  <script src="script.js"></script>
    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter40748314 = new Ya.Metrika({ id:40748314, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/40748314" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>