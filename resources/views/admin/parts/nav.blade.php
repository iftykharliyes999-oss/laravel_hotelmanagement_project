 <div class="primary-menu">
     <nav class="navbar navbar-expand-lg align-items-center">
         <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
             <div class="offcanvas-header border-bottom">
                 <div class="d-flex align-items-center">
                     <div class="">
                         <img src="{{ asset('') }}assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                     </div>
                     <div class="">
                         <h4 class="logo-text">Dashtreme</h4>
                     </div>
                 </div>
                 <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
             <div class="offcanvas-body">

                 <ul class="navbar-nav align-items-center flex-grow-1">

                     <li class="nav-item">
                         <a class="nav-link d-flex align-items-center" href="{{ route('admin.dashboard') }}">

                             <div class="parent-icon me-2">
                                 <i class='bx bx-home-circle'></i>
                             </div>

                             <div class="menu-title d-flex align-items-center">
                                 Dashboard
                             </div>

                         </a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link d-flex align-items-center" href="{{ route('room.index') }}">

                             <div class="parent-icon me-2">
                                 <i class='bx bx-building-house'></i>
                             </div>

                             <div class="menu-title d-flex align-items-center">
                                 Rooms
                             </div>

                         </a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link d-flex align-items-center" href="#">

                             <div class="parent-icon me-2">
                                 <i class='bx bx-calendar-check'></i>
                             </div>

                             <div class="menu-title d-flex align-items-center">
                                 Bookings
                             </div>

                         </a>
                     </li>

                     <li class="nav-item">

                         <a class="nav-link d-flex align-items-center" href="{{ route('admin.guests.index') }}">

                             <div class="parent-icon me-2">
                                 <i class='bx bx-group'></i>
                             </div>

                             <div class="menu-title d-flex align-items-center">
                                 Guests
                             </div>

                         </a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link d-flex align-items-center" href="#">

                             <div class="parent-icon me-2">
                                 <i class='bx bx-wallet-alt'></i>
                             </div>

                             <div class="menu-title d-flex align-items-center">
                                 Payments
                             </div>

                         </a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link d-flex align-items-center" href="#">

                             <div class="parent-icon me-2">
                                 <i class='bx bx-receipt'></i>
                             </div>

                             <div class="menu-title d-flex align-items-center">
                                 Invoices
                             </div>

                         </a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link d-flex align-items-center" href="{{ route('staff.index') }}">

                             <div class="parent-icon me-2">
                                 <i class='bx bx-group'></i>
                             </div>

                             <div class="menu-title d-flex align-items-center">
                                 Staff
                             </div>

                         </a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link d-flex align-items-center" href="#">

                             <div class="parent-icon me-2">
                                 <i class='bx bx-cog'></i>
                             </div>

                             <div class="menu-title d-flex align-items-center">
                                 Settings
                             </div>

                         </a>
                     </li>
<li class="nav-item">
    <form method="POST" action="{{ route('logout') }}" class="d-inline">
        @csrf

        <button type="submit" class="nav-link d-flex align-items-center btn btn-link p-0">

            <div class="parent-icon me-2">
                <i class='bx bx-power-off'></i>
            </div>

            <div class="menu-title d-flex align-items-center">
                Logout
            </div>

        </button>
    </form>
</li>
                 </ul>

             </div>
         </div>
     </nav>
 </div>
