    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-comment-medical"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Care.mic</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Profile
        </div>

        <!-- Nav Item - My Profile -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/consultan/">
                <i class="fas fa-fw fa-user"></i>
                <span>My Profile</span></a>
        </li>

        <!-- Nav Item - Edit Profile -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/consultan/con_edit">
                <i class="fas fa-fw fa-user-edit"></i>
                <span>Edit Profile</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider mt-3">


        <!-- Heading -->
        <div class="sidebar-heading">
            Forum
        </div>

        <!-- Nav Item - forum -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/consultan/con_forums/">
                <i class="fas fa-fw fa-comments"></i>
                <span>Discussion</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider mt-3">

        <!-- Heading -->
        <div class="sidebar-heading">
            Article
        </div>

        <!-- Nav Item - Add Article -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/consultan/con_addArticle">
                <i class="fas fa-fw fa-plus"></i>
                <span>Add an Article</span></a>
        </li>

        <!-- Nav Item - Read Article -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/consultan/con_artikel">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Explore Articles</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block mt-3">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->