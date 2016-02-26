<!doctype html>
<html ng-app="fresh365">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <title>Свежесть 365</title>
  <link rel="stylesheet" href="stylesheets/styles.css" type="text/css" />
  <link rel="stylesheet" href="stylesheets/styles-1200.css" type="text/css" />
  <link rel="stylesheet" href="stylesheets/lib/onepage-scroll.css" type="text/css">
  <link rel="stylesheet" href="stylesheets/lib/magnific-popup.css" type="text/css">
</head>

<body ng-controller="vegCtrl">
  <header class="other_sec">
    <a class="a_start_section" href="#1"><img class="logo" src="images/freshmarket365_logo.png"></a>
    
    <ul class="main_menu">
      <li><a class="a_about_section" href="#2">О компании</a></li>
      <li><a class="a_advantages_section" href="#3">Наши преимущества</a></li>
      <li><a class="a_product_section" href="#4">О продукции</a></li>
      <li><a class="a_order_section" href="#5">Оформить заказ</a></li>
      <li><a class="a_contacts_section" href="#6">Контакты</a></li>
    </ul>
    
    <div class="phone">8 (495) 966 41 51</div>
  </header>
  
  <div class="main">
    <section id="head_section">
      <header class="first_sec">
        <img class="logo" src="images/freshmarket365_logo.png">
        
        <ul class="main_menu">
          <li><a class="a_about_section" href="#1">О компании</a></li>
          <li><a class="a_advantages_section" href="#2">Наши преимущества</a></li>
          <li><a class="a_product_section" href="#3">О продукции</a></li>
          <li><a class="a_order_section" href="#4">Оформить заказ</a></li>
          <li><a class="a_contacts_section" href="#5">Контакты</a></li>
        </ul>
        
        <div class="phone">8 (495) 966 41 51</div>
      </header>
      <div class="slogan">
        <h2>Свежие овощи и зелень с собственных полей</h2>
        <button class="order">Заказать</button>
        <button class="more">Узнать больше</button>
      </div>
    </section>
    <section id="about_section">
    <!--<div class="about_section_block products">-->
    <!--  <img class="about_section_pic" src="images/trava_1.png">-->
    <!--  <h2>О продукции</h2>-->
    <!--  <p>Русское фермерское хозяйство «Свежесть 365» -->
    <!--    на производстве и продаже свежей зелени и овощей.</p>-->
    <!--  <p>Мы выращиваем на собственных плодородных землях в Тульской области. </p>-->
    <!--  <div class="vegetables_collection">-->
    <!--    <div class="vegetables_item">Лук севок</div>-->
    <!--    <div class="vegetables_item">Укроп</div>-->
    <!--    <div class="vegetables_item">Кинза</div>-->
    <!--    <div class="vegetables_item">Шпинат</div>-->
    <!--    <div class="vegetables_item">Петрушка</div>-->
    <!--    <div class="vegetables_item">Лук порей</div>-->
    <!--    <div class="vegetables_item">Чеснок</div>-->
    <!--    <div class="vegetables_item">Щавель</div>-->
    <!--  </div>-->
    <!--</div>-->
    <!--<div class="about_section_block company">-->
      <img class="about_section_pic" src="images/logo_2.png">
      <h2>О компании</h2>
      <p>Свежие овощи и зелень от компании Свежесть — 365 – радуга вкуса и свежести для потребителей России!</p>
      <p>Для российских потребителей, на протяжении всего календарного года мы предлагаем Вам овощи 
      и зелень собственного производства!</p>
      <p>Уделив всего 5 минут своего времени, Вы можете ознакомиться с нашим широким ассортиментом, 
      а так же узнать о преимуществах сотрудничества с компанией «Свежесть» — 365.</p>
      <p>Мы выращиваем нашу продукцию на собственных плодородных землях площадью 200 га 
      и предлагаем широкий ассортимент собственного производства мелким и крупным оптом по приемлемым ценам. 
      Вся продукция сертифицирована, имеет высокий стандарт качества и полное соответствие экологическим 
      и санитарно-эпидемиологическим нормам, принятым в Российской Федерации. 
      Гарантию полной сохранности товарного вида и вкусовых качеств продукции обеспечивают складские помещения, 
      оснащенные специальным холодильным и вентиляционным оборудованием, 
      с обеспечением правильного температурного режима, соблюдением санитарных норм и правил.</p>
    <!--</div>-->
    </section>
    <section id="advantages_section">
      <div id="freshmarket365_logo">
        <img id="circle_part" src="images/freshmarket365_logo.svg">
        <img id="leaves_part" src="images/logo_part.svg">
      </div>
      <div class="header_block h_left h_top">
        <h2>Качество и документация</h2>
        <p>Овощи и зелень соответствуют самым строгим требованиям экологической безопасности, 
        что регулярно подтверждается сертификатами качества. 
        По Вашему запросу готовы предоставить всю необходимую документацию.</p>
      </div>
      <div class="header_block h_right h_top">
        <h2>Профессионализм</h2>
        <p>МЫ-КОМАНДА ПРОФЕССИОНАЛОВ! Обработкой заказов занимается главный офис, расположенный в Москве. 
        Специалисты нашей компании всегда готовы оказать профессиональную консультацию, 
        оформить заказ и проконтролировать качественное исполнение.</p>
      </div>
      <div class="header_block h_right h_bottom">
        <h2>Оперативность</h2>
        <p>Предлагаем быструю и бесплатную доставку по Москве и М.О.
          Ежедневные оптовые поставки. Развитая логистическая система.
        </p>
      </div>
      <div class="header_block h_left h_bottom">
        <h2>Конкурентные цены</h2>
        <p>Наша компания предлагает Вам продукцию по самым выгодным и конкурентным ценам по Безналичной оплате с НДС.</p>
      </div>
    </section>
    <section id="product_section">
      <img class="about_section_pic" src="images/trava_1.png">
      <h2>О продукции</h2>
      <p>Основным направлением нашей компании является выращивание овощей и зелени.</p>
      <p>Ассортимент производимой нами продукции включает в себя такие позиции как:</p>
      <div class="vegetables_collection">
        <div class="vegetables_item">Лук зеленый</div>
        <div class="vegetables_item">Укроп</div>
        <div class="vegetables_item">Петрушка</div>
        <div class="vegetables_item">Кинза</div>
        <div class="vegetables_item">Щавель</div>
        <div class="vegetables_item">Шпинат</div>
        <div class="vegetables_item">Базилик</div>
        <div class="vegetables_item">Огурцы</div>
        <div class="vegetables_item">Помидоры</div>
        <div class="vegetables_item">Кукуруза пищевая</div>
        <div class="vegetables_item">Капуста белокочанная</div>
        <div class="vegetables_item">Капуста пекинская</div>
        <div class="vegetables_item">Редис</div>
        <div class="vegetables_item">Картофель</div>
        <div class="vegetables_item">Морковь</div>
        <div class="vegetables_item">Салатная группа (Айсберг, руккола, романо, лолло россо и т.д.)</div>
      </div>
    <!--<div class="order_block">-->
    <!--  <h2 id="success_sent">Заказ успешно отправлен. Мы свяжемся с вами в ближайшее время</h2>-->
    <!--  <h2 id="error_sent">Произошла ошибка при отправке заказа. Пожалуйста, перезагрузите страницу и попробуйте позже</h2>-->
    <!--  <form id="order_form" action="index.php" method="post">-->
    <!--  <table class="order_table">-->
    <!--    <tr class="heading">-->
    <!--      <th colspan="4"><h2>Закажите сейчас!</h2></th>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--      <th>Наименование</th>-->
    <!--      <th>Цена</th>-->
    <!--      <th>Наличие</th>-->
    <!--      <th>Фасовка</th>-->
    <!--      <th colspan="4" class="buttons"></th>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--      <td>Лук севок</td>-->
    <!--      <td>10 руб/кг</td>-->
    <!--      <td class="amount">В наличии</td>-->
    <!--      <td>500 кг</td>-->
    <!--      <td class="buttons total_btn"><div class="total">0</div><input type="hidden" name="prod_1" value="0"/></td>-->
    <!--      <td class="buttons"><div class="plus_btn">+</div></td>-->
    <!--      <td class="buttons"><div class="minus_btn">&#8722;</div></td>-->
    <!--      <td class="buttons"><div class="clear_btn">&#10006;</div></td>-->
    <!--    </tr>-->
    <!--     <tr>-->
    <!--      <td>Лук порей</td>-->
    <!--      <td>10 руб/кг</td>-->
    <!--      <td class="amount">В наличии</td>-->
    <!--      <td>500 кг</td>-->
    <!--      <td class="buttons total_btn"><div class="total">0</div><input type="hidden" name="prod_2" value="0"/></td>-->
    <!--      <td class="buttons"><div class="plus_btn">+</div></td>-->
    <!--      <td class="buttons"><div class="minus_btn">&#8722;</div></td>-->
    <!--      <td class="buttons"><div class="clear_btn">&#10006;</div></td>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--      <td>Шпинат</td>-->
    <!--      <td>10 руб/кг</td>-->
    <!--      <td class="amount">В наличии</td>-->
    <!--      <td>500 кг</td>-->
    <!--      <td class="buttons total_btn"><div class="total">0</div><input type="hidden" name="prod_3" value="0"/></td>-->
    <!--      <td class="buttons"><div class="plus_btn">+</div></td>-->
    <!--      <td class="buttons"><div class="minus_btn">&#8722;</div></td>-->
    <!--      <td class="buttons"><div class="clear_btn">&#10006;</div></td>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--      <td>Укроп</td>-->
    <!--      <td>10 руб/кг</td>-->
    <!--      <td class="amount">В наличии</td>-->
    <!--      <td>500 кг</td>-->
    <!--      <td class="buttons total_btn"><div class="total">0</div><input type="hidden" name="prod_4" value="0"/></td>-->
    <!--      <td class="buttons"><div class="plus_btn">+</div></td>-->
    <!--      <td class="buttons"><div class="minus_btn">&#8722;</div></td>-->
    <!--      <td class="buttons"><div class="clear_btn">&#10006;</div></td>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--      <td>Петрушка</td>-->
    <!--      <td>10 руб/кг</td>-->
    <!--      <td class="amount">В наличии</td>-->
    <!--      <td>500 кг</td>-->
    <!--      <td class="buttons total_btn"><div class="total">0</div><input type="hidden" name="prod_5" value="0"/></td>-->
    <!--      <td class="buttons"><div class="plus_btn">+</div></td>-->
    <!--      <td class="buttons"><div class="minus_btn">&#8722;</div></td>-->
    <!--      <td class="buttons"><div class="clear_btn">&#10006;</div></td>-->
    <!--    </tr>-->
    <!--    <tr class="credentials">-->
    <!--      <td colspan="2"><input type="text" name="full_name" id="full_name" placeholder="ФИО" required/></td>-->
    <!--      <td colspan="2"><input type="email" name="email" id="email" placeholder="E-mail" required/></td>-->
    <!--      <td colspan="4"></td>-->
    <!--    </tr>-->
    <!--    <tr class="order">-->
    <!--      <td colspan="4"><input type="submit" name="submit" id="order_form_submit" value="Заказать"/></td>-->
    <!--      <td colspan="4"></td>-->
    <!--    </tr>-->

    <!--  </table>-->
    <!--  </form>-->
    <!--</div>-->
    </section>
    <section id="order_section">
      <div class="heading">
        <h1>Новинки</h1>
      </div>
      <div class="content">
        <div class="item">
          <img src="images/water_drop.png">
          <h2>Новый продукт</h2>
          <p>
            У нас появился в ассортименте новый вид кинзы. 
            У нас появился в ассортименте новый вид кинзы. 
            У нас появился в ассортименте новый вид кинзы. 
          </p>
        </div>
        <div class="item">
          <img src="images/water_drop.png">
          <h2>Новый продукт</h2>
          <p>
            У нас появился в ассортименте новый вид кинзы. 
            У нас появился в ассортименте новый вид кинзы. 
            У нас появился в ассортименте новый вид кинзы. 
          </p>
        </div>
        <div class="item">
          <img src="images/water_drop.png">
          <h2>Новый продукт</h2>
          <p>
            У нас появился в ассортименте новый вид кинзы. 
            У нас появился в ассортименте новый вид кинзы. 
            У нас появился в ассортименте новый вид кинзы. 
          </p>
        </div>
      </div>
    </section>
    <section id="contacts_section">
      <div class="heading">
        <h1>Сертификаты</h1>
      </div>
      <div class="certificates">
        <a class="certificate" href="images/certificates/cer-1.jpg">
          <img id="cer-1" src="images/certificates/cer-1.jpg">
        </a>
        <a class="certificate" href="images/certificates/cer-2.jpg">
          <img id="cer-1" src="images/certificates/cer-2.jpg">
        </a>
        <a class="certificate" href="images/certificates/cer-3.jpg">
          <img id="cer-1" src="images/certificates/cer-3.jpg">
        </a>
        <a class="certificate" href="images/certificates/cer-4.jpg">
          <img id="cer-1" src="images/certificates/cer-4.jpg">
        </a>
        <a class="certificate" href="images/certificates/cer-5.jpg">
          <img id="cer-1" src="images/certificates/cer-5.jpg">
        </a>
        <a class="certificate" href="images/certificates/cer-6.jpg">
          <img id="cer-1" src="images/certificates/cer-6.jpg">
        </a>
        <a class="certificate" href="images/certificates/cer-7.jpg">
          <img id="cer-1" src="images/certificates/cer-7.jpg">
        </a>
      </div>
      <div class="content">
        <p>
          Свежие овощи и зелень от компании Свежесть — 365 – 
          радуга вкуса и свежести  для потребителей России!
        </p> 
        <p>
          Для российских потребителей, на протяжении всего календарного года 
          мы предлагаем Вам овощи и зелень собственного производства!
        </p>
        <p>
          Потратив всего 5 минут своего времени, Вы можете ознакомиться 
          с нашим широким ассортиментом, а так же узнать 
          о преимуществах сотрудничества с компанией «Свежесть» — 365.
        </p>
        <p>
          Мы предлагаем широкий ассортимент продукции собственного производства мелким и 
          крупным оптом по приемлемым ценам. Вся продукция сертифицирована, имеет высокий 
          стандарт качества и полное соответствие экологическим и 
          санитарно-эпидемиологическим нормам, принятым в Российской Федерации. 
          Гарантию полной сохранности товарного вида и вкусовых качеств продукции 
          обеспечивают складские помещения, оснащенные специальным холодильным и 
          вентиляционным оборудованием, с обеспечением правильного температурного 
          режима, соблюдением санитарных норм и правил.
        </p>
      </div>
      <footer>
          <div class="line1">
            <ul class="footer_menu">
              <li><a class="a_about_section" href="#2">О компании</a></li>
              <li><a class="a_advantages_section" href="#3">Наши преимущества</a></li>
              <li><a class="a_product_section" href="#4">Заголовок</a></li>
              <li><a class="a_order_section" href="#5">Оформить заказ</a></li>
            </ul>
            <div class="email">info@freshmarket365.ru</div>
            <div class="phone">8 (495) 966-41-51</div>
          </div>
          <div class="line2">
            <div class="copyright">© 2013-2016 «Свежесть – 365» Все права защищены</div>
            <!-- &#8209; is a non-breaking hyphen -->
            <div class="address">г. Москва, Хлебозаводский проезд, д. 7, стр.9</div>
            <img class="logo" src="images/freshmarket365_logo.png">
          </div>
      </footer>
    </section>
  </div>
  
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.onepage-scroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript">
    
	  $(document).ready(function(){
      $(".main").onepage_scroll({
        afterMove: function(index) {
          if (index === 3) {
            if( $('#leaves_part').is(':animated') || $('.header_block').is(':animated')) {
              // reset();
              // start_animation();
            } else {
              start_animation();
              fadeIn(0);
            }
          } else {
            reset();
          }
          toggle_header_style(index);
        },
        easing: "ease-in-out",
        animationTime: 600,
        pagination: false,
        loop: false
      });
      $('.a_start_section').click(function(){
        $('.main').moveTo(1);
      });
      $('.a_about_section').click(function(){
        $('.main').moveTo(2);
      });
      $('.a_advantages_section').click(function(){
        $('.main').moveTo(3);
      });
      $('.a_product_section').click(function(){
        $('.main').moveTo(4);
      });
      $('.a_order_section').click(function(){
        $('.main').moveTo(5);
      });
      $('.a_contacts_section').click(function(){
        $('.main').moveTo(6);
      });
      
      $('.more').click(function() {
          $('.main').moveTo(2);
      });
      $('.order').click(function() {
          $('.main').moveTo(5);
      });
      
      $('.certificate').magnificPopup({type:'image'});
		});

    function fadeIn(delay) {
      $('.header_block').each(function(){
          $(this).delay(delay).animate({
              opacity: 1.0
          }, 1000);
          delay += 1000;
      });
    }
    
    function toggle_header_style(index) {
      if (index === 1) {
        $('header.other_sec').css('display', 'none');
      } else {
        $('header.other_sec').css('display', 'block');
      }
    }
    function start_animation() {
      // Чтобы листья росли из центра снизу
      $('#leaves_part').animate({
        width: '+=35%',
        top: '-=27%',
        left: '-=19%'
      }, 4000/*, function() {
        reset();
      }*/);
      
    }
    
    function reset() {
      $('.header_block').css('opacity', 0.3);
      $('#leaves_part').css({
        'width': 0,
        'left': '50%',
        'top': '50%'
      });
    }
	
  </script>
  <script>
    $(document).ready(function(){
      $('.plus_btn').click(function(){
        var $total = $(this).parent().siblings(".total_btn").children(".total");
        var $hidden = $total.siblings("input[type=hidden]");
        $total.html(parseInt($total.html()) + 1);
        $hidden.attr('value', $total.html());
      });
      $('.minus_btn').click(function(){
        var $total = $(this).parent().siblings(".total_btn").children(".total");
        var $hidden = $total.siblings("input[type=hidden]");
        if ($total.html() > 0) {
          $total.html($total.html() - 1);
        }
        $hidden.attr('value', $total.html());
      });
      $('.clear_btn').click(function(){
        var $total = $(this).parent().siblings(".total_btn").children(".total");
        var $hidden = $total.siblings("input[type=hidden]");
        $total.html(0);
        $hidden.attr('value', 0);
      });

      var request;

      // Bind to the submit event of our form
      $("#order_form").submit(function(event){

        // Abort any pending request
        if (request) {
          request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the request to /form.php
        request = $.ajax({
            url: "/send_mail.php",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR){
          // alert(response);
          $('#order_form').fadeOut();
          $('#success_sent').fadeIn();
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
          // Log the error to the console
          console.error(
            "The following error occurred: "+
            textStatus, errorThrown
          );
          $('#order_form').fadeOut();
          $('#error_sent').fadeIn();
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
          // Reenable the inputs
          $inputs.prop("disabled", false);
        });

        // Prevent default posting of form
        event.preventDefault();
      });
    });
  </script>
</body>
</html>