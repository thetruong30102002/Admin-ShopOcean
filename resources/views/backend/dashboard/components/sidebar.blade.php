<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <div class="dropdown">
            <button class="btn " type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                QL Thành Viên
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                <a class="dropdown-item" href="#">QL Nhóm Thành Viên</a>
                <a class="dropdown-item" href="{{route('user.index')}}">QL Thành Viên</a>
            </div>
        </div>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <span class="">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
              <span class="">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
            <span class="">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
        </a>
    </li>
    </ul>
</nav>
