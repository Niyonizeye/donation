<aside class="main-sidebar elevation-4" style="background:black;">
    <span class="brand-link text-black" style="background:white">
      <img src="image/muhahecharityLog.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text text-black">Donation</span>
    </span>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link text-black" style="background:white">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link text-black" style="background:white">
              <!-- <i class="nav-icon fas fa-book"></i> -->
              <p>
                Manage Project
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" >
              <li class="nav-item">
                <a href="/admin/projects" class="nav-link text-black" style="background:white">
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/add" class="nav-link text-black" style="background:white">
                  <p>Project Add</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview active">
            <a href="/auth/register" class="nav-link text-black" style="background:white">
              <p>
                Manage User
                <i class="right fas fa-angle-left">
                </i>
              </p>
            </a>
            <ul class="nav nav-treeview" >
              <li class="nav-item">
                <a href="/auth/register" class="nav-link text-black" style="background:white">
                  <p>Add Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview" style="background:white">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  
              <i class="nav-icon fas signout"></i> 
              <p class="text-red">{{ __('Logout') }}</p>               
            </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </li>
        
        </ul>
      </nav>
    </div>
  </aside>
  @yield('leftSide')