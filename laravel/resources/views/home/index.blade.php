@extends("layouts.default")
@section("main")
<div class="body-wrapper">
        <!-- --------------------------------------------------- -->
        <!-- Header Start -->
        <!-- --------------------------------------------------- -->
        <header class="app-header"> 
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="ti ti-search"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav quick-links d-none d-lg-flex">
             
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="{{route('todo.index')}}">Todo Example</a>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="app-calendar.html">Calendar</a>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="app-email.html">Email</a>
              </li>
            </ul>
            <div class="d-block d-lg-none">
              <img src="/assets/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="">
              <img src="/assets/images/logos/light-logo.svg" class="light-logo" width="180" alt="" style="display: none;">
            </div>
            <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                  <i class="ti ti-align-justified fs-7"></i>
                </a>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="/assets/images/svgs/icon-flag-en.svg" alt="" class="rounded-circle object-fit-cover round-20">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="/assets/images/svgs/icon-flag-en.svg" alt="" class="rounded-circle object-fit-cover round-20">
                          </div>
                          <p class="mb-0 fs-3">English (UK)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="/assets/images/svgs/icon-flag-cn.svg" alt="" class="rounded-circle object-fit-cover round-20">
                          </div>
                          <p class="mb-0 fs-3">中国人 (Chinese)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="/assets/images/svgs/icon-flag-fr.svg" alt="" class="rounded-circle object-fit-cover round-20">
                          </div>
                          <p class="mb-0 fs-3">français (French)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="/assets/images/svgs/icon-flag-sa.svg" alt="" class="rounded-circle object-fit-cover round-20">
                          </div>
                          <p class="mb-0 fs-3">عربي (Arabic)</p>
                        </a>
                      </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link notify-badge nav-icon-hover" href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="ti ti-basket"></i>
                        <span class="badge rounded-pill bg-danger fs-2">2</span>                   
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="ti ti-bell-ringing"></i>
                      <div class="notification bg-primary rounded-circle"></div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                      </div>
                      <div class="message-body" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="/assets/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48" height="48">
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                            <span class="d-block">Congratulate him</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="/assets/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48">
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">New message</h6>
                            <span class="d-block">Salma sent you new message</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="/assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48">
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">Bianca sent payment</h6>
                            <span class="d-block">Check your earnings</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="/assets/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48">
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">Jolly completed tasks</h6>
                            <span class="d-block">Assign her new tasks</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="/assets/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48">
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">John received payment</h6>
                            <span class="d-block">$230 deducted from account</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="/assets/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48" height="48">
                          </span>
                          <div class="w-75 d-inline-block v-middle">
                            <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                            <span class="d-block">Congratulate him</span>
                          </div>
                        </a>
                      </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                      <div class="py-6 px-7 mb-1">
                        <button class="btn btn-outline-primary w-100"> See All Notifications </button>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                      <div class="d-flex align-items-center">
                        <div class="user-profile-img">
                          <img src="/assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="">
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="profile-dropdown position-relative" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                        <div class="py-3 px-7 pb-0">
                          <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                        </div>
                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                          <img src="/assets/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="">
                          <div class="ms-3">
                            <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                            <span class="mb-1 d-block text-dark">Designer</span>
                            <p class="mb-0 d-flex text-dark align-items-center gap-2">
                              <i class="ti ti-mail fs-4"></i> info@modernize.com
                            </p>
                          </div>
                        </div>
                        <div class="message-body">
                          <a href="./page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="/assets/images/svgs/icon-account.svg" alt="" width="24" height="24">
                            </span>
                            <div class="w-75 d-inline-block v-middle ps-3">
                              <h6 class="mb-1 bg-hover-primary fw-semibold"> My Profile </h6>
                              <span class="d-block text-dark">Account Settings</span>
                            </div>
                          </a>
                          <a href="./app-email.html" class="py-8 px-7 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="/assets/images/svgs/icon-inbox.svg" alt="" width="24" height="24">
                            </span>
                            <div class="w-75 d-inline-block v-middle ps-3">
                              <h6 class="mb-1 bg-hover-primary fw-semibold">My Inbox</h6>
                              <span class="d-block text-dark">Messages &amp; Emails</span>
                            </div>
                          </a>
                          <a href="./app-notes.html" class="py-8 px-7 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="/assets/images/svgs/icon-tasks.svg" alt="" width="24" height="24">
                            </span>
                            <div class="w-75 d-inline-block v-middle ps-3">
                              <h6 class="mb-1 bg-hover-primary fw-semibold">My Task</h6>
                              <span class="d-block text-dark">To-do and Daily Tasks</span>
                            </div>
                          </a>
                        </div>
                        <div class="d-grid py-4 px-7 pt-8">
                          <div class="upgrade-plan bg-light-primary position-relative overflow-hidden rounded-4 p-4 mb-9">
                            <div class="row">
                              <div class="col-6">
                                <h5 class="fs-4 mb-3 w-50 fw-semibold text-dark">Unlimited Access</h5>
                                <button class="btn btn-primary text-white">Upgrade</button>
                              </div>
                              <div class="col-6">
                                <div class="m-n4">
                                  <img src="/assets/images/backgrounds/unlimited-bg.png" alt="" class="w-100">
                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="./authentication-login.html" class="btn btn-outline-primary">Log Out</a>
                        </div>
                      </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <!-- --------------------------------------------------- -->
        <!-- Header End -->
        <!-- --------------------------------------------------- -->
        <div class="container-fluid">
          <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Blog app</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-muted" href="./index.html">Dashboard</a></li>
                      <li class="breadcrumb-item" aria-current="page">Blog apps</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">  
                    <img src="/assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-8">
              <div class="card blog position-relative overflow-hidden hover-img" style="background-image: url(/assets/images/blog/blog-img9.jpg);">
                <div class="card-body position-relative">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mollie Underwood">
                        <img src="/assets/images/profile/user-4.jpg" alt="" class="rounded-circle img-fluid" width="40" height="40">
                      </div>
                      <span class="badge text-bg-primary rounded-3 fs-2 fw-semibold">Gadget</span>
                    </div>
                    <div>
                      <a href="./details.html" class="fs-7 my-4 fw-semibold text-white d-block lh-sm">Early Black Friday Amazon deals: cheap TVs, headphones, laptops</a>
                      <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2 text-white fs-3 fw-normal">
                          <i class="ti ti-eye fs-5"></i>
                          6006
                        </div>
                        <div class="d-flex align-items-center gap-2 text-white fs-3 fw-normal">
                          <i class="ti ti-message-2 fs-5"></i>
                          3
                        </div>
                        <div class="d-flex align-items-center gap-1 text-white fw-normal ms-auto">
                          <i class="ti ti-point"></i>
                          <small>Fri, Jan 13</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card blog position-relative overflow-hidden hover-img" style="background-image: url(/assets/images/blog/blog-img10.jpg);">
                <div class="card-body position-relative">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <div class="d-flex align-items-start justify-content-between">
                      <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Francisco Quinn">
                        <img src="/assets/images/profile/user-5.jpg" alt="" class="rounded-circle img-fluid" width="40" height="40">
                      </div>
                      <span class="badge text-bg-primary rounded-3 fs-2 fw-semibold">Health</span>
                    </div>
                    <div>
                      <a href="./details.html" class="fs-7 my-4 fw-semibold text-white d-block lh-sm">Presented by Max Rushden with Barry Glendenning, Philippe Auclair</a>
                      <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2 text-white fs-3 fw-normal">
                          <i class="ti ti-eye fs-5"></i>
                          713
                        </div>
                        <div class="d-flex align-items-center gap-2 text-white fs-3 fw-normal">
                          <i class="ti ti-message-2 fs-5"></i>
                          3
                        </div>
                        <div class="d-flex align-items-center gap-1 text-white fw-normal ms-auto">
                          <i class="ti ti-point"></i>
                          <small>Wed, Jan 18</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="/assets/images/blog/blog-img6.jpg" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 min Read</span>
                  <img src="/assets/images/profile/user-1.jpg" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Gadget</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">As yen tumbles, gadget-loving Japan goes for secondhand iPhones</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>9,125</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>3</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Mon, Jan 16</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="/assets/images/blog/blog-img11.jpg" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 min Read</span>
                  <img src="/assets/images/profile/user-2.jpg" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Walter Palmer">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Social</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Intel loses bid to revive antitrust case against patent foe Fortress</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>4,150</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>38</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Sun, Jan 15</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="/assets/images/blog/blog-img8.jpg" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 min Read</span>
                  <img src="/assets/images/profile/user-3.jpg" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Miguel Kennedy">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Health</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">COVID outbreak deepens as more lockdowns loom in China</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>9,480</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>12</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Sat, Jan 14</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="/assets/images/blog/blog-img5.jpg" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 min Read</span>
                  <img src="/assets/images/profile/user-5.jpg" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Esther Lindsey">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Lifestyle</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Streaming video way before it was cool, go dark tomorrow</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>2252</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>3</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Sat, Jan 14</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="/assets/images/blog/blog-img3.jpg" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 min Read</span>
                  <img src="/assets/images/profile/user-3.jpg" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Leroy Greer">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Design</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Apple is apparently working on a new ‘streamlined’ accessibility for iOS</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>5860</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>38</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Fri, Jan 13</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="/assets/images/blog/blog-img2.jpg" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 min Read</span>
                  <img src="/assets/images/profile/user-2.jpg" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tommy Butler">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Lifestyle</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">After Twitter Staff Cuts, Survivors Face ‘Radio Silence</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>6315</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>12</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Wed, Jan 11</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="/assets/images/blog/blog-img4.jpg" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 min Read</span>
                  <img src="/assets/images/profile/user-4.jpg" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Donald Holmes">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Design</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Why Figma is selling to Adobe for $20 billion</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>7570</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>38</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Wed, Jan 11</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="/assets/images/blog/blog-img1.jpg" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge bg-white text-dark fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2 min Read</span>
                  <img src="/assets/images/profile/user-1.jpg" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eric Douglas">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Gadget</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="">Garmins Instinct Crossover is a rugged hybrid smartwatch</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>6763</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>12</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Tue, Jan 10</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav aria-label="...">
            <ul class="pagination justify-content-center mb-0 mt-4">
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-left"></i></a>
              </li>
              <li class="page-item active" aria-current="page">
                <a class="page-link border-0 rounded-circle round-32 mx-1 d-flex align-items-center justify-content-center" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">...</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">10</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
@endsection