<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl bg-gradient-info mt-3 mb-0" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <a class="navbar-brand text-white py-0" href="./"><span class="material-icons" style="font-size:40px; color:yellow;">tungsten</span></a>
        <form class="d-flex">
            <div class="input-group border border-2 rounded-3 px-3 bg-white text-dark border-info" style="width:300px;">
                <label class="form-label text-white" for="navSearch" hidden>Search</label>
                <input type="text" class="form-control text-dark" id="navSearch" placeholder="Search...">
            </div>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white border-0" style="font-size:15px;" href="#" role="button" data-bs-toggle="dropdown"><?php echo $user_data['first_name'].' '.$user_data['last_name'];?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                    <li><a class="dropdown-item" href="#">My Tasks</a></li>
                    <li class="divider"></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>