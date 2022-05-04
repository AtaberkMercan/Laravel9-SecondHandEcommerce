<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{route('admin.index')}}"><img src="{{asset('assets')}}/admin//images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{route('admin.index')}}"><img src="{{asset('assets')}}/admin//images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('assets')}}/admin//images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Ataberk Mercan</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items active">
            <a class="nav-link" href="/admin">
        <span class="menu-icon">
          <i class="mdi mdi-home-variant"></i>
        </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
                <span class="menu-title">Orders</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/">New Orders </a></li>
                    <li class="nav-item"> <a class="nav-link" href="/">Accepted Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/">Shipping Orders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/">Completed Orders</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/Category">
        <span class="menu-icon">
          <i class="mdi mdi-apps"></i>
        </span>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/Product">
        <span class="menu-icon">
          <i class="mdi mdi-shopping"></i>
        </span>
                <span class="menu-title">Product</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/comments">
        <span class="menu-icon">
          <i class="mdi mdi-comment"></i>
        </span>
                <span class="menu-title">Comments</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/faq">
        <span class="menu-icon">
          <i class="mdi mdi-help"></i>
        </span>
                <span class="menu-title">FAQ</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.message.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-message-reply-text"></i>
        </span>
                <span class="menu-title">Messages</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/social">
        <span class="menu-icon">
          <i class="mdi mdi-mail-ru"></i>
        </span> <span class="menu-title">Social</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/user">
        <span class="menu-icon">
          <i class="mdi mdi-account-box"></i>
        </span>
                <span class="menu-title">User</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/setting">
        <span class="menu-icon">
          <i class="mdi mdi-settings-box"></i>
        </span>
                <span class="menu-title">Settings</span>
            </a>
        </li>
    </ul>
</nav>
