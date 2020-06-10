<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('styles')
    <!-- Styles -->
  
    <link href="{{ asset('vendors/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
          <div class="mdc-drawer__header">
            <a href="../../index.html" class="brand-logo">
              <img src="https://www.bootstrapdash.com/demo/material-admin/jquery/template/assets/images/logo.svg" alt="logo">
            </a>
          </div>
          <div class="mdc-drawer__content">
            <div class="user-info">
              <p class="name">Clyde Miles</p>
              <p class="email">clydemiles@elenor.us</p>
            </div>
            <div class="mdc-list-group">
              <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="../../index.html">
                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                    Dashboard
                  </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                    <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                    UI Features
                    <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                  </a>
                  <div class="mdc-expansion-panel" id="ui-sub-menu">
                    <nav class="mdc-list mdc-drawer-submenu">
                      <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="../ui-features/buttons.html">
                          Buttons
                        </a>
                      </div>
                      <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="../ui-features/badges.html">
                          Badges
                        </a>
                      </div>
                      <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="../ui-features/typography.html">
                          Typography
                        </a>
                      </div>
                      <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="../ui-features/icons.html">
                          Icons
                        </a>
                      </div>
                      <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="../ui-features/tabs.html">
                          Tabs
                        </a>
                      </div>
                      <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="../ui-features/progress-bar.html">
                          Progress
                        </a>
                      </div>
                    </nav>
                  </div>
                </div>
            </div>  
            <div class="profile-actions">
              <a href="javascript:;">Settings</a>
              <span class="divider"></span>
              <a href="javascript:;">Logout</a>
            </div>
          </div>
        </aside>
        <!-- partial -->
    
        <div class="main-wrapper mdc-drawer-app-content">
          <!-- partial:../../partials/_navbar.html -->
          <header class="mdc-top-app-bar">
            <div class="mdc-top-app-bar__row">
              <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
                <span class="mdc-top-app-bar__title">Greetings Clyde!</span>
            
              </div>
              <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
                <div class="menu-button-container menu-profile d-none d-md-block">
                  <button class="mdc-button mdc-menu-button">
                    <span class="d-flex align-items-center">
                      <span class="figure">
                        <img src="{{asset('images/faces/face1.jpg')}}" alt="user" class="user">
                      </span>
                      <span class="user-name">Clyde Miles</span>
                    </span>
                  </button>
                  <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                    <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                      <li class="mdc-list-item" role="menuitem">
                        <div class="item-thumbnail item-thumbnail-icon-only">
                          <i class="mdi mdi-account-edit-outline text-primary"></i>
                        </div>
                        <div class="item-content d-flex align-items-start flex-column justify-content-center">
                          <h6 class="item-subject font-weight-normal">Edit profile</h6>
                        </div>
                      </li>
                      <li class="mdc-list-item" role="menuitem">
                        <div class="item-thumbnail item-thumbnail-icon-only">
                          <i class="mdi mdi-settings-outline text-primary"></i>                      
                        </div>
                        <div class="item-content d-flex align-items-start flex-column justify-content-center">
                          <h6 class="item-subject font-weight-normal">Logout</h6>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <!-- partial -->
          <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
              
              <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                      <h6 class="card-title">Text Field</h6>
                      <div class="template-demo">
                        <div class="mdc-layout-grid__inner">
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                              <input class="mdc-text-field__input" id="text-field-hero-input">
                              <div class="mdc-line-ripple"></div>
                              <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field mdc-text-field--outlined">
                              <input class="mdc-text-field__input" id="text-field-hero-input">
                              <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                              </div>
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                              <i class="material-icons mdc-text-field__icon">favorite</i>
                              <input class="mdc-text-field__input" value="xd "id="text-field-hero-input">
                              <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                              </div>
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
                              <i class="material-icons mdc-text-field__icon">visibility</i>
                              <input class="mdc-text-field__input" id="text-field-hero-input">
                              <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </main>
            <!-- partial:../../partials/_footer.html -->
            <footer>
              <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <span class="tx-14">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                    <div class="d-flex align-items-center">
                      <a href="#">Documentation</a>
                      <span class="vertical-divider"></span>
                      <a href="#">FAQ</a>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
            <!-- partial -->
          </div>
        </div>
      </div>

    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('vendors/jquery.flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('vendors/jquery.flot/jquery.flot.fillbetween.js')}}"></script>

    <script src="{{asset('js/material.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>

    @yield('scripts')
</body>
</html>
