
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link sidebar-toggle-btn d-lg-none" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-flex align-items-center">
             <a>{{ Auth::user()->name }}</a> <a class="nav-link" title="Logout" data-toggle="modal" data-target="#logout">
             <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a href="{{ Route('admin.logout') }}" type="button" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->

        <!-- Sidebar -->
        <div class="sidebar mt-3">
            <!-- Sidebar user (optional) -->

            <!-- SidebarSearch Form -->
            <div class="form-inline">
      <h2><img src="../../../../../logo.svg" /></h2>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-5">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="true">

                    <li class="nav-item">
                        <a href="{{ Route('admin.dashboard') }}"
                            class="nav-link @if (Route::currentRouteName() == 'admin.dashboard') active @endif">
                            <i class="fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>


                    <li class="nav-item ">
                 
                        <a href="#" class="nav-link">
                        <i class="fas fa-home"></i>
                            <p>
                         Home 
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ Route('admin.home.hero') }}"
                                    class="nav-link   @if (Route::currentRouteName() == 'admin.home.hero') active @endif">
                                    <p>Hero Background</p>
                                </a>
                            </li>

    <li class="nav-item">
    <a href="{{ Route('admin.home.whoweare') }}" 
    class="nav-link @if (Route::currentRouteName() == 'admin.home.whoweare') active @endif">
        <p>Who We Are</p>
</a>
</li>
                
<li class="nav-item">
    <a href="{{ Route('admin.home.client') }}" 
    class="nav-link @if (Route::currentRouteName() == 'admin.home.client') active @endif">
        <p>Clients</p>
</a>
</li>                
</ul>
                    </li>



                    <li class="nav-item ">
                 
                 <a href="#" class="nav-link">
                 <i class="fas fa-info-circle"></i>
                     <p>
                 About Us
                         <i class="fas fa-angle-left right"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">

                     <li class="nav-item">
                         <a href="{{ Route('admin.about.hero') }}"
                             class="nav-link @if (Route::currentRouteName() == 'admin.about.hero') active @endif">
                             <p>Hero About</p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{ Route('admin.about.values') }}"
                             class="nav-link @if (Route::currentRouteName() == 'admin.about.values') active @endif">
                             <p>About Values</p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{ Route('admin.about.team') }}"
                             class="nav-link @if (Route::currentRouteName() == 'admin.about.team') active @endif">
                             <p>About Team</p>
                         </a>
                     </li>
              
</ul>
             </li>
     
             <li class="nav-item ">
                 
                 <a  href="{{ Route('admin.services') }}"  class="nav-link @if (Route::currentRouteName() == 'admin.services') active @endif">
                 <i class="fas fa-briefcase"></i>
                     <p>
                     Services
                     
                     </p>
                 </a>

             </li>

             <li class="nav-item ">
                 
                 <a  href="{{ Route('admin.subsidiaries') }}"  class="nav-link @if (Route::currentRouteName() == 'admin.subsidiaries') active @endif">
                 <i class="fas fa-sitemap"></i>
                     <p>
                     SUBSIDIARIES
                     
                     </p>
                 </a>

             </li>
     
             <li class="nav-item ">                
                 <a  href="{{ Route('admin.latest') }}"  class="nav-link @if (Route::currentRouteName() == 'admin.latest') active @endif">
                 <i class="fas fa-bullhorn"></i>
                     <p>
                Latest News                   
                     </p>
                 </a>
             </li>

             <li class="nav-item ">                
                 <a  href="{{ Route('admin.milestone') }}"  class="nav-link @if (Route::currentRouteName() == 'admin.milestone') active @endif">
                 <i class="fas fa-trophy"></i>
                     <p>
                     OUR MILESTONES
                     </p>
                 </a>
             </li>

             <li class="nav-item ">                
                 <a  href="{{ Route('admin.contact') }}" class="nav-link @if (Route::currentRouteName() == 'admin.contact') active @endif">
                 <i class="fas fa-envelope"></i>
                     <p>
                   Contact
                     </p>
                 </a>
             </li>

            </nav>
        </div>
    </aside>
