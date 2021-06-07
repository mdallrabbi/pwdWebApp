<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
{{--    <li class="nav-item nav-profile not-navigation-link">--}}
{{--      <div class="nav-link">--}}
{{--        <div class="user-wrapper">--}}
{{--          <div class="profile-image">--}}
{{--            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">--}}
{{--          </div>--}}
{{--          <div class="text-wrapper">--}}
{{--            <p class="profile-name">Richard XX.Welsh</p>--}}
{{--            <div class="dropdown" data-display="static">--}}
{{--              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">--}}
{{--                <small class="designation text-muted">Manager</small>--}}
{{--                <span class="status-indicator online"></span>--}}
{{--              </a>--}}
{{--              <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">--}}
{{--                <a class="dropdown-item p-0">--}}
{{--                  <div class="d-flex border-bottom">--}}
{{--                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">--}}
{{--                      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>--}}
{{--                    </div>--}}
{{--                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">--}}
{{--                      <i class="mdi mdi-account-outline mr-0 text-gray"></i>--}}
{{--                    </div>--}}
{{--                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">--}}
{{--                      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </a>--}}
{{--                <a class="dropdown-item mt-2"> Manage Accounts </a>--}}
{{--                <a class="dropdown-item"> Change Password </a>--}}
{{--                <a class="dropdown-item"> Check Inbox </a>--}}
{{--                <a class="dropdown-item"> Sign Out </a>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <button class="btn btn-success btn-block">New Project WE <i class="mdi mdi-plus"></i>--}}
{{--        </button>--}}
{{--      </div>--}}
{{--    </li>--}}
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">ড্যাশবোর্ড</span>
      </a>
    </li>
{{--    <li class="nav-item {{ active_class(['basic-ui/*']) }}">--}}
{{--      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">--}}
{{--        <i class="menu-icon mdi mdi-dna"></i>--}}
{{--        <span class="menu-title">প্রকল্প</span>--}}
{{--        <i class="menu-arrow"></i>--}}
{{--      </a>--}}
{{--      <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">--}}
{{--        <ul class="nav flex-column sub-menu">--}}
{{--          <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">--}}
{{--            <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Buttons</a>--}}
{{--          </li>--}}
{{--          <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">--}}
{{--            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>--}}
{{--          </li>--}}
{{--          <li class="nav-item {{ active_class(['basic-ui/typography']) }}">--}}
{{--            <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>--}}
{{--          </li>--}}
{{--        </ul>--}}
{{--      </div>--}}
{{--    </li>--}}

    <li class="nav-item {{ active_class(['projects/projects_list']) }}">
      <a class="nav-link" href="{{ url('/projects/projects_list') }}">
          <i class="menu-icon mdi mdi-dna"></i>
          <span class="menu-title">প্রকল্প</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['budgets/budgets_list']) }}">
      <a class="nav-link" href="{{ url('/budgets/budgets_list') }}">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">বাজেট</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['implementors/implementors_list']) }}">
        <a class="nav-link" href="{{ url('implementors/implementors_list') }}">
            <i class="menu-icon mdi mdi-table-large"></i>
            <span class="menu-title">বাস্তবায়নকারী</span>
        </a>
    </li>
    <li class="nav-item {{ active_class(['progresses/progresses_list']) }}">
      <a class="nav-link" href="{{ url('/progresses/progresses_list') }}">
        <i class="menu-icon mdi mdi-progress-check"></i>
        <span class="menu-title">অগ্রগতি</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">ব্যবহারকারী</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html" target="_blank">
        <i class="menu-icon mdi mdi-file-outline"></i>
        <span class="menu-title">রিপোর্ট</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html" target="_blank">
            <i class="menu-icon mdi mdi-settings"></i>
            <span class="menu-title">সেটিংস</span>
        </a>
    </li>
  </ul>
</nav>
