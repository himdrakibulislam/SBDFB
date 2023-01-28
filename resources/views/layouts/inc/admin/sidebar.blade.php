 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{request()->is('admin/dashboard') ? 'bg-dark text-white' : ''}}" href="{{url('admin/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Volunteers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>Add volunteer</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Tables Nav -->

      

    
      <li class="nav-item">
        <a class="nav-link {{request()->is('admin/all-admins') ? 'bg-dark text-white' : ''}}" href="{{url('admin/all-admins')}}">
          <i class="fa-solid fa-users"></i>
          <span>Admins</span>
        </a>
      </li>


      <li class="nav-item" >
        <a class="nav-link {{request()->is('admin/users') ? 'bg-dark text-white' : ''}}" href="{{url('admin/users')}}">
          <i class="fa-solid fa-users"></i>
          <span>All donors</span>
        </a>
      </li>


      <li class="nav-item" >
        <a class="nav-link {{request()->is('admin/blood-donors') ? 'bg-dark text-white' : ''}}" href="{{url('admin/blood-donors')}}">
          <i class="fa-solid fa-users"></i>
          <span>Blood donors</span>
        </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link {{request()->is('admin/platelets-donors') ? 'bg-dark text-white' : ''}}" href="{{url('admin/platelets-donors')}}">
          <i class="fa-solid fa-users"></i>
          <span>Platelets donors</span>
        </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link {{request()->is('admin/gallery') ? 'bg-dark text-white' : ''}}" href="{{url('admin/gallery')}}">
          <i class="fas fa-image"></i>
          <span>Gallery</span>
        </a>
      </li>

     


      

      

    </ul>

  </aside>