               <nav style="z-index:30" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   <!-- Sidebar Toggle (Topbar) -->
                   <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                       <i class="fa fa-bars"></i>
                   </button>




                   <!-- Topbar Navbar -->
                   <ul class="navbar-nav ml-auto">

                       <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                       <li class="nav-item dropdown no-arrow d-sm-none">
                           <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-search fa-fw"></i>
                           </a>
                           <!-- Dropdown - Messages -->
                           <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                               aria-labelledby="searchDropdown">
                               <form class="form-inline mr-auto w-100 navbar-search">
                                   <div class="input-group">
                                       <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                       <div class="input-group-append">
                                           <button class="btn btn-primary" type="button">
                                               <i class="fas fa-search fa-sm"></i>
                                           </button>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </li>

                       <!-- Nav Item - Alerts -->
                       <li class="nav-item dropdown no-arrow mx-1">

                           <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-bell fa-fw"></i>
                               <!-- Counter - Alerts -->
                               @if (count(Auth::user()->unreadNotifications))
                                   <span
                                       class="badge badge-danger badge-counter">{{ count(Auth::user()->unreadNotifications) }}</span>
                               @endif
                           </a>
                           <!-- Dropdown - Alerts -->
                           <div class="dropdown-list z-5 dropdown-menu dropdown-menu-right shadow animated--grow-in"
                               aria-labelledby="alertsDropdown">
                               <h6 class="dropdown-header">
                                   Notificaciones
                               </h6>
                               @foreach (Auth::user()->unreadNotifications as $not)
                                   <x-notification-alert>
                                       <x-slot name="id">
                                           {{ $not->id }}
                                       </x-slot>

                                       <x-slot name="date">
                                           {{ $not->created_at }}
                                       </x-slot>
                                       <x-slot name="title">
                                           {{ $not->data['message'] }}
                                       </x-slot>
                                   </x-notification-alert>
                               @endforeach

                               <a class="dropdown-item text-center small text-gray-500"
                                   href="{{ route('notificaciones.index') }}">Todas las notificaciones</a>
                           </div>
                       </li>

                       <!-- Nav Item - Messages -->

                       <div class="d-flex align-items-center font-bold gap-1">
                            
                            {{ Auth::user()->name }}
                       </div>
                       <!-- Nav Item - User Information -->
                       <li class="nav-item dropdown no-arrow">
                           <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                               <img class="img-profile rounded-circle"
                                   src="{{ Auth::user()->image->url ?? 'https://cdn-icons-png.flaticon.com/512/8791/8791450.png' }}">
                           </a>
                           <!-- Dropdown - User Information -->
                           <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                               aria-labelledby="userDropdown">
                               <a class="dropdown-item" href="{{ route('app_profile') }}">
                                   <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                   Perfil
                               </a>
                               <a class="dropdown-item" href="#">
                                   <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                   Configuración
                               </a>
                               <a class="dropdown-item" href="/logs/usuario">
                                   <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                   Actividad
                               </a>
                        
                               <div class="dropdown-divider"></div>

                               <a class="dropdown-item" href="/close" data-toggle="modal" data-target="#logoutModal">
                                   <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                   Cerrar sesión
                               </a>
                           </div>
                       </li>

                   </ul>
                   

               </nav>
