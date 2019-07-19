    <div class="sidebar" data-color="orange" data-background-color="black" data-image="{{asset('assets/assets/img/sidebar-2.jpg')}}">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          Bz
        </a>
        <a href="#" class="simple-text logo-normal">
          Blinkzap
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="{{asset('assets/img/profile.png')}}" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                {{ Auth::user()->email }}
                <small class="mb-0">Corporate User</small>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
			  {{--
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                  </a>
                </li>
			  --}}
			@if(Auth::check())
                <li class="nav-item">
                  <a class="nav-link" href="{{url('logout')}}">
                    <span class="sidebar-mini"> LO </span>
                    <span class="sidebar-normal"> Log Out </span>
                  </a>
                </li>
			@endif
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#campaignPage">
              <i class="material-icons">flag</i>
              <p> Campaign
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse show" id="campaignPage">
              <ul class="nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('campaign/create')}}">
                    <span class="sidebar-mini"> CC </span>
                    <span class="sidebar-normal"> Create Campaign </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          
          
          
        </ul>
      </div>
    </div>