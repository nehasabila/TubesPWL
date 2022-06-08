
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="/user/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
    
      @if(auth()->user()->status === 'penulis')
      <li class="nav-item">
        <a class="nav-link collapsed" href="/user/post">
          <i class="bi bi-file-earmark-text"></i>
          <span>My Post</span>
        </a>
      </li>
     @endif

     @if(auth()->user()->status === 'admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="/user/allpost">
          <i class="bi bi-file-earmark-text"></i>
          <span>All Post</span>
        </a>
      </li>
     @endif
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="/user/kategori">
        <i class="bi bi-menu-button-wide"></i>
          <span>Kategori</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/user/comment">
        <i class="bi bi-menu-button-wide"></i>
          <span>Komentar</span>
        </a>
      </li>
    
    </ul>
    
    </aside>
    
    <!-- End Sidebar-->