<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- TITLE for website -->
    <title>MegaSoft | Website</title>

    <!-- CSS file links below -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/icons.css" />
    <!-- This style for only this page -->
    <link rel="stylesheet" href="css/contact.css" />
  </head>

  <body>
    <!--========================================== Start WRAPPER Section ==========================================-->
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
      <!--====================================== Start HEADER section ======================================-->
      <header class="header">
        <!--====================================== Start CONTACT-PAGE__BANNER section ======================================-->
        <div class="contact-page__banner page__banner-bg">
          <div class="container">
            <div class="contact-page">
              <h1 class="contact-page__title">Bog'lanish</h1>
              <div class="contact-page__links">
                <a href="index.html" class="contact-page__home">Bosh sahifa</a>
                <span class="contact-page__link-sign"
                  ><i
                    class="contact-page__icon fa-solid fa-chevron-right"
                    style="color: #ffffff"
                  ></i
                ></span>
                <a href="contact-page.html" class="contact-page__link"
                  >Bog'lanish</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- /CONTACT__BANNER -->
      </header>
      <!-- /HEADER -->

      <!--=============================================== Start MAIN section ===============================================-->
      <main class="main">
        <!--=============================================== Start CONNECTION section ===============================================-->

        <div class="connection">
          <div class="container">
            <div class="connection__wrapper">
              <div class="connection__body">
                <div class="connection__desc">
                  <h2 class="connection__title main-title">Bog‘laning</h2>
                  <p class="connection__text main-text">
                    Quyidagi maydonlarni to‘ldirgan holda biz bilan
                    bog‘lanishingiz mumkin, yoki pastda bizning manzil va
                    telefon raqamimiz bor, bemalol bog‘lanishingiz mumkin
                  </p>
                </div>
                <div class="connection__info">
                  <h3 class="connection__info-title">Bizning ofis</h3>
                  <div class="connection__img-wrapper">
                    <img
                      src="images/connection__img.png"
                      alt="Img"
                      class="connection__img"
                    />
                  </div>
                  <h4 class="connection__location">New York, USA</h4>
                  <span class="contact__details main-text"
                    ><i
                      class="details__icons fa-solid fa-location-dot"
                      style="color: #ffffff"
                    ></i
                    >3891 Ranchview Dr. Richardson, California 62639</span
                  >
                  <span class="contact__details main-text">
                    <i
                      class="details__icons fa-solid fa-phone-volume"
                      style="color: #ffffff"
                    ></i>
                    (201) 555-0124</span
                  >
                </div>
              </div>
              <div class="connection__form">
                <form action="#" class="contact__page-form">
                  <label for="connection__name" class="connection__label"
                    >Ism familiya</label
                  >
                  <input
                    type="text"
                    class="connection__input"
                    id="connection__name"
                    placeholder="Abdullayev Abdulla"
                  />

                  <label for="connection__number" class="connection__label"
                    >Telefon raqam</label
                  >
                  <input
                    type="text"
                    class="connection__input"
                    id="connection__number"
                    placeholder="+998(00) 000 00 00 "
                  />

                  <label for="connection__company" class="connection__label"
                    >Kompaniya nomi</label
                  >
                  <input
                    type="text"
                    class="connection__input"
                    id="connection__company"
                    placeholder="Megasoft"
                  />

                  <label for="connection__message" class="connection__label"
                    >Xabar</label
                  >
                  <textarea
                    id="connection__message"
                    class="connection__input connection__message"
                    rows="7"
                    placeholder="Biror xabar yozing"
                  ></textarea>

                  <button type="submit" class="main-btn">Yuborish</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- /CONNECTION -->
      </main>
      <!-- /MAIN -->

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
    <!-- /WRAPPER -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
