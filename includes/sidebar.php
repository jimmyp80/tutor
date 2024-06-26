<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Your Company Ltd</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white <?php if(basename($_SERVER['REQUEST_URI']) == 'dashboard.php'){echo 'bg-info';} ?>" href="dashboard.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white <?php 
                    if (basename($_SERVER['REQUEST_URI']) == 'clients.php' || basename($_SERVER['REQUEST_URI']) == 'students.php' || basename($_SERVER['REQUEST_URI']) == 'tutors.php') {echo 'bg-info';}?>"
                    href="#peopleSidebar" role="button" data-bs-toggle="collapse">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">group</i>
                    </div>
                    <span class="nav-link-text ms-1">People</span>
                </a>
                <div class="collapse" id="peopleSidebar">
                    <a class="nav-link <?php if (basename($_SERVER['REQUEST_URI']) == 'clients.php') {echo 'bg-info';}?>" href="clients.php">Clients</a>
                    <a class="nav-link <?php if (basename($_SERVER['REQUEST_URI']) == 'students.php') {echo 'bg-info';}?>" href="students.php">Students</a>
                    <a class="nav-link <?php if (basename($_SERVER['REQUEST_URI']) == 'tutors.php') {echo 'bg-info';}?>" href="tutors.php">Tutors</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">payments</i>
                    </div>
                    <span class="nav-link-text ms-1">Accounting</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php if(basename($_SERVER['REQUEST_URI']) == 'system-settings.php'){echo 'bg-info';} ?>" href="system-settings.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">settings</i>
                    </div>
                    <span class="nav-link-text ms-1">System</span>
                </a>
            </li>
        </ul>
    </div>
</aside>