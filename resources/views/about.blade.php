<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MegaSoft | Website</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/icons.css" />
    <!-- This style for only this page -->
    <link rel="stylesheet" href="css/about.css" />
  </head>

  <body>
    <!--********************************* Start WRAPPER Section ************************************ -->
    <div class="wrapper">
      <!--====================================== Start NAVBAR section ======================================-->
      <nav class="site-nav">
        <!-- Site LOGO -->
        <div class="site-nav__container">
          <div class="site-nav-logo">
            <a href="{{ route('home') }}" class="site-nav-logo__item">
              <img src="assets/icons/site-logo.svg" class="site-logo site-nav__logo-img">
            </a>
          </div>
          <!-- SITENAV menu -->
          <div class="site-nav-menu">
            <ul class="site-nav-menu__list">
              <li class="site-nav__list">
                <a href="{{ route('home') }}" class="site-nav__link {{ request()->routeIs('home') ? 'active' : '' }}">Bosh sahifa</a>
              </li>
              <li class="site-nav__list">
                <a href="{{ route('about') }}" class="site-nav__link {{ request()->routeIs('about') ? 'active' : '' }}">Biz haqimizda</a>
              </li>
              <li class="site-nav__list">
                <a href="{{ route('portfolio') }}" class="site-nav__link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
              </li>
              <li class="site-nav__list">
                <a href="{{ route('services') }}" class="site-nav__link {{ request()->routeIs('services') ? 'active' : '' }}">Xizmatlar</a>
              </li>
              <li class="site-nav__list">
                <a href="{{ route('contact') }}" class="site-nav__link {{ request()->routeIs('contact') ? 'active' : '' }}">Bog’lanish</a>
              </li>
            </ul>
          </div>
          <!-- SITENAV Btn -->
          <div class="site-nav-btns">
            <div class="site-nav__toggle">
              <select class="site-nav-btns__toggle">
                <option value="uz">Uz</option>
                <option value="en">En</option>
                <option value="en">Ru</option>
              </select>
            </div>
            <div class="site-nav-btns__wrapper">
              <button class="site-nav-btns__btn open__modal-btn">
                Gaplashamizmi?
              </button>
            </div>
            <button class="site-nav__menu-icon">
              <img src="assets/icons/menu-icon.svg" alt="Menu__icon" />
            </button>
          </div>
        </div>
      </nav>
      <!-- /NAVBAR -->
      <!--==================================== Start HEADER =========================================== -->
      <header class="header">
        <!-- Start ABOUT banner -->
        <div class="about__banner page__banner-bg">
          <div class="container">
            <div class="about">
              <h1 class="about__title">Biz Haqimizda</h1>
              <div class="about__links">
                <a href="index.html" class="about__home">Bosh sahifa</a>
                <span class="about__link-sign"
                  ><i
                    class="about__icon fa-solid fa-chevron-right"
                    style="color: #ffffff"
                  ></i
                ></span>
                <a href="about.html" class="about__link">Biz haqimizda</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- /HEADER -->

      <!-- Start MAIN -->
      <main class="main">
        <div class="container">
          <div class="delivery">
            <div class="delivery__img">
              <img
                src="images/delivery__img.png"
                alt="Delivery"
                class="delivery__img-item"
              />
            </div>
            <div class="delivery__desc">
              <div class="delivery__text">
                <h3 class="delivery__title">
                  Siz uchun ajoyib raqamli mahsulotlarni yetkazib berish
                </h3>
                <p class="delivery__parag main-text">
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </p>
              </div>
              <div class="delivery__cards">
                <!-- ****************************** -->
                <div class="delivery__cards-item main-cards">
                  <i
                    class="fa-regular fa-circle-check delivery__icon"
                    style="color: #ffffff"
                  ></i>
                  <h3 class="delivery__cards-title main-cards__title">
                    Tezlik ishlashi
                  </h3>
                  <p class="delivery__cards-desc main-text">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout.
                  </p>
                </div>

                <div class="delivery__cards-item main-cards">
                  <i
                    class="fa-regular fa-circle-check delivery__icon"
                    style="color: #ffffff"
                  ></i>
                  <h3 class="delivery__cards-title main-cards__title">
                    Maxsus jamoani qo'llab-quvvatlash
                  </h3>
                  <p class="delivery__cards-desc main-text">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout.
                  </p>
                </div>

                <!-- *************************** -->
                <div class="delivery__cards-item main-cards">
                  <i
                    class="fa-regular fa-circle-check delivery__icon"
                    style="color: #ffffff"
                  ></i>
                  <h3 class="delivery__cards-title main-cards__title">
                    Yaxshi hujjatlashtirilgan
                  </h3>
                  <p class="delivery__cards-desc main-text">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout.
                  </p>
                </div>
                <!-- ****************************** -->
              </div>
            </div>
          </div>
        </div>

        <section id="working__section">
          <div class="container">
            <img
              src="images/working__after.svg"
              alt="Working"
              class="working__section-icon working__after-icon"
            />
            <div class="working">
              <div class="working__desc">
                <div class="working__text">
                  <h3 class="working__title">Biz qanday ishlaymiz</h3>
                  <p class="working__parag main-text">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout.
                  </p>
                </div>
                <div class="working__cards">
                  <!-- ****************************** -->
                  <div class="working__cards-item main-cards">
                    <img
                      src="assets/icons/search 02.svg"
                      alt="Crm platform"
                      class="working__cards-icon"
                    />
                    <h3 class="working__cards-title main-cards__title">
                      Tadqiqot
                    </h3>
                    <p class="working__cards-desc main-text">
                      Yangi bilim,tushuncha yoki tushunchaga ega bo’lish uchun
                      muayyan mavzuni tizimli tekshirish,o’rganish va tahlil
                      qilish.
                    </p>
                  </div>
                  <!-- ************************************************* -->
                  <div class="working__cards-item main-cards">
                    <img
                      src="assets/icons/idea.svg"
                      alt="Crm platform"
                      class="working__cards-icon"
                    />
                    <h3 class="working__cards-title main-cards__title">
                      Tushuncha
                    </h3>
                    <p class="working__cards-desc main-text">
                      Narsa, hodisa yoki hodisalarning toifasi yoki sinfini
                      ifodalovchi mavhum yoki umumiy fikirdir.
                    </p>
                  </div>
                  <!-- **************************************************** -->
                  <div class="working__cards-item main-cards">
                    <img
                      src="assets/icons/fountain pen.svg"
                      alt="Crm platform"
                      class="working__cards-icon"
                    />

                    <h3 class="working__cards-title main-cards__title">
                      Dizayn
                    </h3>
                    <p class="working__cards-desc main-text">
                      Dizayn xabarni samarali yetkazadigan vizual jihatdan
                      jozibali, foydalanuvchilarga qulay va funktsional
                      saytlarni yaratishdir.
                    </p>
                  </div>
                  <!-- *************************** -->
                  <div class="working__cards-item main-cards">
                    <img
                      src="assets/icons/web.svg"
                      alt="Crm platform"
                      class="working__cards-icon"
                    />
                    <h3 class="working__cards-title main-cards__title">
                      Rivojlanish
                    </h3>
                    <p class="working__cards-desc main-text">
                      Rivojlanish yani biror narsani yaratish qurish va uni
                      yanada takomillashtirishdir.
                    </p>
                  </div>
                  <!-- ****************************** -->
                </div>
              </div>
              <div class="working__gallery">
                <div class="working__img">
                  <img
                    src="images/Working-img.png"
                    alt="Working"
                    class="working__img-item"
                  />
                </div>
                <div class="working__collection">
                  <div class="working__collection-wrapper">
                    <img
                      src="images/working-collection1.png"
                      alt="Working collection"
                      class="working__collection-item"
                    />
                  </div>
                  <div class="working__collection-wrapper">
                    <img
                      src="images/working-collection2.png"
                      alt="Working collection"
                      class="working__collection-item"
                    />
                  </div>
                </div>
              </div>
            </div>
            <img
              src="images/working__before.svg"
              alt="Working"
              class="working__section-icon working__before-icon"
            />
          </div>
        </section>

        <div class="container">
          <!--********************************* Start CONTACT Section ************************************ -->
          <!--=========================================== Start CONTACT section ===========================================-->
          <div class="contact">
            <div class="contact__info">
              <h3 class="contact__title main-title">Savollaringiz bormi?</h3>
              <p class="contact__desc main-text">
                Bizga savol yoki murajatlaringiz bo’lsa yo’lashingiz mumkin. Biz
                sizga iloji boricha tezda javob berishga harakat qilamiz..
              </p>
              <span class="contact__details main-text">
                <i
                  class="details__icons fa-solid fa-phone-volume"
                  style="color: #ffffff"
                ></i>
                (201) 555-0124</span
              >
              <span class="contact__details main-text"
                ><i
                  class="details__icons fa-solid fa-envelope"
                  style="color: #ffffff"
                ></i
                >agish.studio@example.com</span
              >
              <span class="contact__details main-text"
                ><i
                  class="details__icons fa-solid fa-location-dot"
                  style="color: #ffffff"
                ></i
                >3891 Ranchview Dr. Richardson, California 62639</span
              >
            </div>
            <div class="contact__form">
              <form action="form">
                <div class="contact__row">
                  <div class="contact__name input__wrapper">
                    <label
                      for="contact__name"
                      class="contact__label input__label"
                      >Ism</label
                    >
                    <input
                      type="text"
                      class="contact__input contact__name-item"
                      id="contact__name"
                    />
                  </div>
                  <div class="contact__email input__wrapper">
                    <label
                      for="contact__email"
                      class="contact__label input__label"
                      >Email</label
                    >
                    <input
                      type="email"
                      class="contact__input contact__email-item"
                      id="contact__email"
                    />
                  </div>
                </div>
                <div class="contact__message input__wrapper">
                  <label
                    for="contact__message"
                    class="contact__label input__label"
                    >Xabar yozing</label
                  >
                  <textarea
                    rows="6"
                    class="contact__input contact__message-item"
                    id="contact__message"
                  ></textarea>
                </div>
                <button type="submit" class="contact__btn main-btn">
                  Yuborish
                </button>
              </form>
            </div>
          </div>
          <!-- /CONTACT -->
        </div>
      </main>

      <!--============================================= Start MODAL section =============================================-->
      <div class="modal hide">
        <div class="modal__dialog">
          <div class="modal__content">
            <div class="modal__wrapper">
              <form class="modal__form" action="#">
                <button class="modal__close">
                  <i class="fa-solid fa-xmark" style="color: #ffffff"></i>
                </button>
                <div class="modal__info">
                  <h3 class="modal__title">Gaplashamizmi?</h3>
                  <p class="modal__text">
                    Loyihangizga yangicha yechim berishni xoxlasangiz quyidagi
                    maydonlarni to‘ldiring, o’zimiz siz bilan bog‘lanamiz
                  </p>
                </div>
                <div class="modal__row">
                  <div class="modal__name input__wrapper">
                    <label for="modal__name" class="modal__label input__label"
                      >Ism</label
                    >
                    <input
                      type="text"
                      class="contact__input modal__name-item"
                      id="modal__name"
                    />
                  </div>
                  <div class="modal__email input__wrapper">
                    <label for="modal__email" class="modal__label input__label"
                      >Telefon raqam</label
                    >
                    <input
                      type="email"
                      class="contact__input modal__email-item"
                      id="modal__email"
                    />
                  </div>
                </div>
                <div class="modal__message input__wrapper">
                  <label for="modal__message" class="modal__label input__label"
                    >Xabar qoldiring</label
                  >
                  <textarea
                    rows="6"
                    class="contact__input modal__message-item"
                    id="modal__message"
                  ></textarea>
                </div>
                <button type="submit" class="modal__btn main-btn">
                  Yuborish
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /MODAL -->

      <!--============================================= Start FOOTER section =============================================-->
      <footer class="footer">
        <div class="container">
          <div class="footer__link">
            <div class="footer__logo site-logo">
              <a href="index.html" class="logo__item"><img src="assets/icons/site-logo.svg" class="site-logo footer__logo-img"></a>
            </div>

            <!--============================================= FOOTER__MEDIA =============================================-->
            <div class="footer__media">
              <a href="#"
                ><i class="fa-brands fa-facebook-f" style="color: #ffffff"></i
              ></a>
              <a href="#"
                ><i class="fa-brands fa-instagram" style="color: #ffffff"></i
              ></a>
              <a href="#"
                ><i class="fa-brands fa-twitter" style="color: #ffffff"></i
              ></a>
            </div>
            <!-- /FOOTER__MEDIA -->

            <!--============================================= Start FOOTER__MENU =============================================-->
            <ul class="footer__menu">
              <li class="footer__menu-list">
                <a href="index.html" class="footer__menu-link">Bosh sahifa</a>
              </li>
              <li class="footer__menu-list">
                <a href="about.html" class="footer__menu-link">Biz haqimizda</a>
              </li>
              <li class="footer__menu-list">
                <a href="portfolio.html" class="footer__menu-link">Portfolio</a>
              </li>
              <li class="footer__menu-list">
                <a href="services.html" class="footer__menu-link">Xizmatlar</a>
              </li>
              <li class="footer__menu-list">
                <a href="contact.html" class="footer__menu-link">Bog’lanish</a>
              </li>
            </ul>
            <!-- /FOOTER__MENU -->
          </div>
          <div class="footer__bottom">
            <p class="footer__desc">
              &copy; Copyright 2023, All Rights Reserved
            </p>
            <div class="footer__bottom-link">
              <a href="conditions.html">Foydalanish shartlari</a>
              <a href="privacy.html">Maxfiylik siyosati</a>
            </div>
          </div>
        </div>
      </footer>
      <!-- /FOOTER -->
    </div>
    <script src="assets/js/main.js"></script>
  </body>
</html>
