<div class="wrapper">
<nav id="sidebar" class="sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="/">
      <span class="align-middle">POINTOUT COURIER</span>
    </a>

            <ul class="sidebar-nav">
               
              @if(Auth::user()->role == 2)

              <li class="sidebar-item">
                <a class="sidebar-link" href="/">
                  <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                </a>
              </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link" href="/dashboard">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
              </a>
                      </li>

                      <li class="sidebar-item">
                        <a class="sidebar-link" href="/delivery-requests">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Delivery Requests</span>
            </a>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link" href="/manage-deliveries">
            <i class="align-middle" data-feather="navigation"></i> <span class="align-middle">Manage Deliveries</span>
          </a>
                  </li>

                   
                    
                      <li class="sidebar-item">
                          <a class="sidebar-link" href="/profile">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
              </a>
                      </li>
              
              @endif
               

                

        @if(Auth::user()->role == 1)
        <li class="sidebar-header">
					Admin	Section
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/">
            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/dashboard">
<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
</a>
      </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="/see-users">
              <i class="align-middle" data-feather="eye"></i> <span class="align-middle">All Users</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/see-deliveries">
              <i class="align-middle" data-feather="eye"></i> <span class="align-middle">All Deliveries</span>
            </a>
        </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="/profile">
        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
        </a>
              </li>
      
        @endif
        @if(Auth::user()->role == 0)
        <li class="sidebar-item">
          <a class="sidebar-link" href="/">
            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
          </a>
        </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/dashboard">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="/schedule">
        <i class="align-middle" data-feather="clock"></i> <span class="align-middle">Request A Delivery</span>
      </a>
              </li>
              
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/profile">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
        </a>
                </li>
        
        @endif

                

               
               
            </ul>

           
        </div>
    </nav>