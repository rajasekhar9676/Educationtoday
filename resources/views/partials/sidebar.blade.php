<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <!-- Profile Section -->
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="admin/assets/images/faces/face1.jpg" alt="profile" />
          <span class="login-status online"></span>
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">David Grey. H</span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-account-check text-success nav-profile-badge"></i>
      </a>
    </li>

    <!-- Dashboard -->
    <li class="nav-item">
    <a class="nav-link" href="">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-view-dashboard menu-icon"></i>
      </a>
    </li>

    <!-- Category -->
    <!-- Categories -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#categoryMenu" aria-expanded="false">
    <span class="menu-title">Category</span>
    <i class="mdi mdi-folder-outline menu-icon"></i>
  </a>
  <div class="collapse" id="categoryMenu">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Category</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('subcategories.index') }}">Sub Category</a></li>
    </ul>
  </div>
</li>

<!-- Blogs -->
<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#blogMenu" aria-expanded="false">
    <span class="menu-title">Blogs</span>
    <i class="mdi mdi-pencil menu-icon"></i>
  </a>
  <div class="collapse" id="blogMenu">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"><a class="nav-link" href="{{ route('blog_categories.index') }}">Category</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('blog_subcategories.index') }}">Sub Category</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('blog_posts.index') }}">Post</a></li>
    </ul>
  </div>
</li>


    <!-- Organization Lists -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false">
        <span class="menu-title">Organization Lists</span>
        <i class="mdi mdi-office-building menu-icon"></i>
      </a>
      <div class="collapse" id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="#">Organization</a></li>
        </ul>
      </div>
    </li>

    <!-- Organization Basic Info -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">Organization Basic Info</span>
        <i class="mdi mdi-information menu-icon"></i>
      </a>
    </li>

    <!-- Register -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">Register</span>
        <i class="mdi mdi-account-plus menu-icon"></i>
      </a>
    </li>

    <!-- Pre-School Listing -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">Pre-School Listing</span>
        <i class="mdi mdi-school menu-icon"></i>
      </a>
    </li>

    <!-- School Listing -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">School Listing</span>
        <i class="mdi mdi-bank menu-icon"></i>
      </a>
    </li>

    <!-- College Listing -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">College Listing</span>
        <i class="mdi mdi-school-outline menu-icon"></i>
      </a>
    </li>

    <!-- School Leads -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">School Leads</span>
        <i class="mdi mdi-account-group menu-icon"></i>
      </a>
    </li>

    <!-- Vote -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">Vote</span>
        <i class="mdi mdi-vote menu-icon"></i>
      </a>
    </li>

    <!-- Magazine -->
    <li class="nav-item">
      <a class="nav-link" href="">
        <span class="menu-title">Magazine</span>
        <i class="mdi mdi-book-open-variant menu-icon"></i>
      </a>
    </li>

    <!-- Ranking -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">Ranking</span>
        <i class="mdi mdi-chart-line menu-icon"></i>
      </a>
    </li>

    <!-- Gallery -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">Gallery</span>
        <i class="mdi mdi-image-multiple menu-icon"></i>
      </a>
    </li>

    <!-- Contact Us -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">Contact Us</span>
        <i class="mdi mdi-phone menu-icon"></i>
      </a>
    </li>

    <!-- User -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">User</span>
        <i class="mdi mdi-account menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>

















