 <div class="page-header">
     <div class="header-wrapper m-0">
         <div class="header-logo-wrapper p-0">
             <div class="logo-wrapper">
                 <a href="index.html">
                     <img class="img-fluid main-logo" src="{{ asset('backend/assets/images/logo/1.png') }}" alt="logo">
                     <img class="img-fluid white-logo" src="{{ asset('backend/assets/images/logo/1-white.png') }}"
                         alt="logo">
                 </a>
             </div>
             <div class="toggle-sidebar">
                 <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                 <a href="index.html">
                     <img class="img-fluid for-light" src="{{ asset('backend/assets/images/logo/1.png') }}"
                         alt="logo">
                     <img class="img-fluid for-dark" src="{{ asset('backend/assets/images/logo/1-white.png') }}"
                         alt="logo">
                 </a>
             </div>
         </div>
         <div class="welcome-title">
             <h5>
                 Food that's you loved!
                 <img src="{{ asset('backend/assets/images/header.gif') }}" alt="">
             </h5>
             <span>
                 Delight your taste with our most famous food !!
             </span>
         </div>

         <div class="nav-right col-xl-6 col-5 pull-right right-header p-0">
             <ul class="nav-menus">
                 <li class="search-icon">
                     <span class="header-search">
                         <i class="ri-search-line"></i>
                     </span>
                 </li>

                 <li class="onhover-dropdown">
                     <div class="notification-box">
                         <i class="ri-notification-line"></i>
                         <span class="badge rounded-pill badge-theme">4</span>
                     </div>
                     <ul class="notification-dropdown onhover-show-div">
                         <li>
                             <i class="ri-notification-line"></i>
                             <h4 class="mb-0">Notitications</h4>
                         </li>
                         <li>
                             <p>
                                 <i class="fa fa-circle me-2 font-primary"></i>Delivery processing
                                 <span class="pull-right">10 min.</span>
                             </p>
                         </li>
                         <li>
                             <p>
                                 <i class="fa fa-circle me-2 font-success"></i>Order Complete
                                 <span class="pull-right">1 hr</span>
                             </p>
                         </li>
                         <li>
                             <p>
                                 <i class="fa fa-circle me-2 font-info"></i>Tickets Generated
                                 <span class="pull-right">3 hr</span>
                             </p>
                         </li>
                         <li>
                             <p>
                                 <i class="fa fa-circle me-2 font-danger"></i>Delivery Complete
                                 <span class="pull-right">6 hr</span>
                             </p>
                         </li>
                         <li>
                             <a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
                         </li>
                     </ul>
                 </li>

                 <li class="onhover-dropdown">
                     <div class="messages-box">
                         <i class="ri-message-3-line"></i>
                     </div>
                     <ul class="messages-dropdown onhover-show-div">
                         <li>
                             <i class="ri-message-3-line"></i>
                             <h4 class="mb-0">Messages</h4>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-2">
                                 <img src="{{ asset('backend/assets/images/user/1.jpg') }}" alt="">
                                 <div>
                                     <h5>Nullam tempor</h5>
                                     <p>Curabitur facilisis erat viverra.</p>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-2">
                                 <img src="{{ asset('backend/assets/images/user/2.jpg') }}" alt="">
                                 <div>
                                     <h5>Nullam tempor</h5>
                                     <p>Curabitur facilisis erat viverra.</p>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-2">
                                 <img src="{{ asset('backend/assets/images/user/3.jpg') }}" alt="">
                                 <div>
                                     <h5>Nullam tempor</h5>
                                     <p>Curabitur facilisis erat viverra.</p>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="d-flex align-items-center gap-2">
                                 <img src="{{ asset('backend/assets/images/user/4.jpg') }}" alt="">
                                 <div>
                                     <h5>Nullam tempor</h5>
                                     <p>Curabitur facilisis erat viverra.</p>
                                 </div>
                             </div>
                         </li>
                         <li>
                             <a class="btn btn-primary" href="javascript:void(0)">Go to Inbox</a>
                         </li>
                     </ul>
                 </li>

                 <li>
                     <div class="mode">
                         <i class="ri-moon-line"></i>
                     </div>
                 </li>

                 <li class="profile-nav onhover-dropdown pe-0 me-0">
                     <div class="media profile-media">
                         <img class="user-profile rounded-circle" src="{{ asset('backend/assets/images/users/4.jpg') }}"
                             alt="">
                         <div class="user-name-hide media-body">
                             <span>Emay Walter</span>
                             <p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
                         </div>
                     </div>
                     <ul class="profile-dropdown onhover-show-div">
                         <li>
                             <a href="all-users.html">
                                 <i data-feather="users"></i>
                                 <span>Users</span>
                             </a>
                         </li>
                         <li>
                             <a href="order-list.html">
                                 <i data-feather="archive"></i>
                                 <span>Orders</span>
                             </a>
                         </li>
                         <li>
                             <a href="support-ticket.html">
                                 <i data-feather="phone"></i>
                                 <span>Spports Tickets</span>
                             </a>
                         </li>


                        <li>
                              <a href="{{ route('admin.setting.index') }}">
                                  <i data-feather="settings"></i>
                                  <span>Settings</span>
                              </a>
                          </li>


                         <li>
                             <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0)">
                                 <i data-feather="log-out"></i>
                                 <span>Log out</span>
                             </a>
                         </li>



                     </ul>
                 </li>
             </ul>
         </div>



         <div class="input-box">
             <i class="ri-search-line"></i>
             <input class="search-box" type="search" placeholder="What are you looking for?">
             <i class="close-icon" data-feather="x"></i>
         </div>
     </div>
 </div>
