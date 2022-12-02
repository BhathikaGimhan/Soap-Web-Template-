<div class="loader">
    <i></i><i></i><i></i><i></i><i></i>
</div>    
<header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader" class="aheto-header  aheto-header--fixed">
  <div class="container">
      <div data-elementor-type="wp-post" data-elementor-id="1880" class="elementor elementor-1880" data-elementor-settings="[]">
          <div class="elementor-inner">
              <div class="elementor-section-wrap">
                  <section class="elementor-section elementor-top-section elementor-element elementor-element-2b71f69 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2b71f69" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                      <div class="elementor-container elementor-column-gap-default">
                          <div class="elementor-row">
                              <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1304ad" data-id="f1304ad" data-element_type="column">
                                  <div class="elementor-column-wrap elementor-element-populated">
                                      <div class="elementor-widget-wrap">
                                          <div class="elementor-element elementor-element-eb9ae06 elementor-widget elementor-widget-aheto_navigation" data-id="eb9ae06" data-element_type="widget" data-widget_type="aheto_navigation.default">
                                              <div class="elementor-widget-container">
                                                  <div class="aheto_navigation_626d8200dbe55  main-header main-header--classic-2 main-header-js">
                                                      <div class="main-header__main-line">
                                                          <div class="aheto-logo main-header__logo">
                                                              <a href="{{ url('/') }}">
                                                                  <img width="145" height="70" src="../wp-content/plugins/aheto/assets/images/placeholder.jpg" data-lazy-src="https://soapy.foxthemes.me/wp-content/uploads/2020/01/logo_sopy_big-min-1.png" class="aheto-logo__image" alt="soapy" loading="lazy" />
                                                                  <img width="125" height="70" src="../wp-content/plugins/aheto/assets/images/placeholder.jpg" data-lazy-src="https://soapy.foxthemes.me/wp-content/uploads/2020/01/logo_sopy_big-min-1.png" class="aheto-logo__image aheto-logo__image-scroll" alt="soapy" loading="lazy" />
                                                                  <img width="125" height="70" src="../wp-content/plugins/aheto/assets/images/placeholder.jpg" data-lazy-src="https://soapy.foxthemes.me/wp-content/uploads/2020/01/logo_sopy_big-min-1.png" class="aheto-logo__image mob-logo" alt="soapy" loading="lazy" />
                                                                  <img width="125" height="70" src="../wp-content/plugins/aheto/assets/images/placeholder.jpg" data-lazy-src="https://soapy.foxthemes.me/wp-content/uploads/2020/01/logo_sopy_big-min-1.png" class="aheto-logo__image mob-logo aheto-logo__image-mob-scroll" alt="soapy" loading="lazy" />            
                                                              </a>
                                                          </div>
                                                          <div class="main-header__menu-box">
                                                              <span class="mobile-menu-title">Menu</span>
                                                              <nav class="menu-home-page-container">
                                                                  <ul id="menu-header" class="main-menu main-menu--inline">
                                                                      <li id="menu-item-2363" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-2363">
                                                                          <a href="{{ url("/") }}">Home</a>
                                                                      </li>
                                                                      <li id="menu-item-4173" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4173">
                                                                          <a href="{{  url("/shop")  }}">Shop</a>
                                                                      </li>
                                                                      <li id="menu-item-2365" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2365">
                                                                          <a href="{{ url("/about") }}">About Us</a>
                                                                      </li>
                                                                  </ul>
                                                              </nav>
                                                              <div class="main-header__widget-box-mobile">
                                                                  <div class="icons-widget__item"></div>
                                                              </div>
                                                          </div>
                                                          <div class="main-header__widget-box">
                                                              <ul class="icons-widget main-header__icons">
                                                                    <li class="icons-widget__item main-header__widget-box-desktop">
                                                                            @guest
                                                                            <a class="icons-widget__link" href="{{ url("/redirect") }}">
                                                                                <i class="ionicons ion-android-people" aria-hidden="true"></i>
                                                                            </a>
                                                                            @else
                                                                            <li class="nav-item dropdown">
                                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="redirect" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                                                </a>
                                                
                                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                                                       onclick="event.preventDefault();
                                                                                                     document.getElementById('logout-form').submit();">
                                                                                        {{ __('Logout') }}
                                                                                    </a>
                                                
                                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                        @csrf
                                                                                    </form>
                                                                                </div>
                                                                            </li>
                                                                            @endguest
                                                                            
                                                                    </li>
                                                              </ul>
                                                              <button class="hamburger main-header__hamburger js-toggle-mobile-menu" type="button">
                                                                  <span class="hamburger-box">
                                                                      <span class="hamburger-inner"></span>
                                                                  </span>
                                                              </button>
                                                          </div>
                                                      </div>
                                                  </div>		
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
              </div>
          </div>
      </div>
  </div>
</header>