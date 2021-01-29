
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       @if(Auth::user()->usertype=='Admin')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
             
            </ul>
          </li>
     @endif
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profiles.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('profiles.passowrd.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage Logo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logos.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Logo</p>
                </a>
              </li>
             
            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sliders.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slider</p>
                </a>
              </li>
             
            </ul>
          </li>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage Mission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('missions.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Mission</p>
                </a>
              </li>
             
            </ul>
          </li>
          </li>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage Vission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('vissions.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Vission</p>
                </a>
              </li>
             
            </ul>
          </li>
           </li>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage News_events
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('news_events.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View News_events</p>
                </a>
              </li>
             
            </ul>
          </li>
          </li>
           </li>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage Service
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('services.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Service</p>
                </a>
              </li>
             
            </ul>
          </li>
          </li>
           </li>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contacts.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p>
                </a>
              </li>
          </ul>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('communicate')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Communicate</p>
                </a>
              </li>
             
            </ul>

          </li>
          </li>
           </li>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage Abouts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('abouts.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Abouts</p>
                </a>
              </li>
             
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu --> 