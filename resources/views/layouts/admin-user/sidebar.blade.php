<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="{{ asset('template/template-admin-user/assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
    @if (Auth::guard('user')->check())
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('user/keluhan*') ? 'active bg-gradient-primary' : '' }}" href="/user/keluhan/index">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">description</i>
          </div>
          <span class="nav-link-text ms-1">Data Keluhan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="/user/logout" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">logout</i>
          </div>
          <span class="nav-link-text ms-1">Sign Out</span>
        </a>
        <form id="logout-form" action="/user/logout" method="POST" class="d-none">
          @csrf
        </form>
      </li>               
    @elseif(Auth::guard('admin')->check())                
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('admin/respon*') ? 'active bg-gradient-primary' : '' }}" href="/admin/respon/index">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">description</i>
          </div>
          <span class="nav-link-text ms-1">Data Keluhan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="/user/logout" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">logout</i>
          </div>
          <span class="nav-link-text ms-1">Sign Out</span>
        </a>
        <form id="logout-form" action="/admin/logout" method="POST" class="d-none">
          @csrf
        </form>
      </li>
    @endif                    
    </ul>
  </div>    
</aside>
  