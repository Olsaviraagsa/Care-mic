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
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/user/">
                <i class="fas fa-fw fa-user"></i>
                <span>My Profile</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider mt-3">


        <!-- Heading -->
        <div class="sidebar-heading">
            Forum
        </div>

        <!-- Nav Item - topic -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/Forums/AddTopic">
                <i class="fas fa-fw fa-pen"></i>
                <span>Add a Topic</span></a>
        </li>

        <!-- Nav Item - forum -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/Forums">
                <i class="fas fa-fw fa-comments"></i>
                <span>Discussion</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider mt-3">

        <!-- Heading -->
        <div class="sidebar-heading">
            Article
        </div>

        <!-- Nav Item - Read Article -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/Artikel">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Explore</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider mt-3">

        <div class="sidebar-heading">
            Contact
        </div>

        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= BASE_URL; ?>/ListCon">
                <i class="fas fa-fw fa-user-check"></i>
                <span>Consultants</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block mt-3">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->