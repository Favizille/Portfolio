<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Users</title>
        <link rel="stylesheet" href="{{asset("admin/assets/vendors/mdi/css/materialdesignicons.min.css")}}">
        <link rel="stylesheet" href="{{ asset("admin/assets/vendors/flag-icon-css/css/flag-icon.min.css")}}">
        <link rel="stylesheet" href="{{ asset("assets/vendors/css/vendor.bundle.base.css")}}">
        <link rel="stylesheet" href="{{asset("admin/assets/vendors/font-awesome/css/font-awesome.min.css")}}" />
        <link rel="stylesheet" href="{{ asset("admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css")}}">
        <link rel="stylesheet" href="{{ asset("admin/assets/css/style.css")}}">
    </head>
  <body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html"><h2>Admin Dashboard</h2></a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><h3> Admin</h3></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
              </button>
              <div class="search-field d-none d-xl-block">
                <form class="d-flex align-items-center h-100" action="#">
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
                  </div>
                </form>
              </div>
              <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item nav-profile dropdown">
                  <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                    <div class="p-3 text-center bg-primary">
                      <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
                    </div>
                    <div class="p-2">
                      <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                      <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                        <span>Inbox</span>
                        <span class="p-0">
                          <span class="badge badge-primary">3</span>
                          <i class="mdi mdi-email-open-outline ml-1"></i>
                        </span>
                      </a>
                      <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                        <span>Profile</span>
                        <span class="p-0">
                          <span class="badge badge-success">1</span>
                          <i class="mdi mdi-account-outline ml-1"></i>
                        </span>
                      </a>
                      <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                        <span>Settings</span>
                        <i class="mdi mdi-settings"></i>
                      </a>
                      <div role="separator" class="dropdown-divider"></div>
                      <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                      <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                        <span>Lock Account</span>
                        <i class="mdi mdi-lock ml-1"></i>
                      </a>
                      {{-- <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{route('logout')}}">
                        <span>Log Out</span>
                        <i class="mdi mdi-logout ml-1"></i>
                      </a> --}}
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count-symbol bg-success"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                        <p class="text-gray mb-0"> 1 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                        <p class="text-gray mb-0"> 15 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                        <p class="text-gray mb-0"> 18 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count-symbol bg-danger"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-success">
                          <i class="mdi mdi-calendar"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                        <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-warning">
                          <i class="mdi mdi-settings"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                        <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-info">
                          <i class="mdi mdi-link-variant"></i>
                        </div>
                      </div>
                      <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                        <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-category">Main</li>
              <li class="nav-item">
                {{-- <a class="nav-link" href="{{ route("admin.dashboard")}}">
                  <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                  <span class="menu-title">Dashboard</span>
                </a> --}}
              </li>
              <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="{{ route("users.all")}}" >
                  <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                  <span class="menu-title text-primary">Users</span>
                </a>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/icons/mdi.html">
                  <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                  <span class="menu-title">Icons</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                  <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                  <span class="menu-title">Forms</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/charts/chartjs.html">
                  <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                  <span class="menu-title">Charts</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                  <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                  <span class="menu-title">Tables</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                  <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                  <span class="menu-title">User Pages</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item sidebar-user-actions">
                <div class="sidebar-user-menu">
                  <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title">Settings</span>
                  </a>
                </div>
              </li>
              <li class="nav-item sidebar-user-actions">
                <div class="sidebar-user-menu">
                  <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                    <span class="menu-title">Take Tour</span></a>
                </div>
              </li>
              <li class="nav-item sidebar-user-actions">
                <div class="sidebar-user-menu">
                  <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span></a>
                </div>
              </li>
            </ul>
          </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Registered Users </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">users</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> ID </th>
                              <th> Name </th>
                              <th> Email </th>
                              <th> Registered Date </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                            @if ($user->name === "Admin")
                                <tr hidden>
                                    <td class="py-1">
                                    {{$user->id}}
                                    </td>
                                    <td> {{$user->name}}</td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->created_at}} </td>
                                </tr>
                            @else
                                <tr>
                                    <td class="py-1">
                                    {{$user->id}}
                                    </td>
                                    <td> {{$user->name}}</td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->created_at}} </td>
                                </tr>
                            @endif

                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="{{asset("admin/assets/vendors/js/vendor.bundle.base.js")}}"></script>
    <script src="{{asset("admin/assets/js/off-canvas.js")}}"></script>
    <script src="{{asset("admin/assets/js/hoverable-collapse.js")}}"></script>
    <script src="{{asset("admin/assets/js/misc.js")}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
