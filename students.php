<?php include 'includes/overall/header.php'; ?>
    <div class="container-fluid py-4">
        <div class="row min-vh-80 h-100">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="float-start" id="studentMainTitle">Students</h4>
                                <h4 class="float-start" id="studentAddTitle" style="display:none;">Add New Student</h4>
                                <button type="button" class="btn btn-primary btn-sm float-end" id="studentAddBtn" onclick="studentToggle()">
                                    <span class="material-symbols-outlined">person_add</span>
                                </button>
                                <a href="" class="material-symbols-outlined float-end" id="studentMainBtn" style="display:none;" onclick="studentToggle()">close</a>
                            </div>
                            <hr class="dark horizontal my-0 mx-5">
                            <div class="card-body" id="studentMainBody">
                                Students Main Area
                            </div>
                            <div class="card-body" id="studentAddBody" style="display:none;">
                                <form role="form" action="" method="" autocomplete="off">
                                    <div class="row">
                                        <fieldset class="col-md-3">
                                            <legend>Basic Details</legend>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="studentRegTitle">Title</label>
                                                <select class="form-control" name="studentRegTitle" id="studentRegTitle">
                                                    <option>Title</option>
                                                    <option>Mr</option>
                                                    <option>Mrs</option>
                                                    <option>Ms</option>
                                                    <option>Dr</option>
                                                    <option>Prof</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegFirstName">First Name*</label>
                                                <input type="text" class="form-control" required name="studentRegFirstName" id="studentRegFirstName">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegLastName">Last Name*</label>
                                                <input type="text" class="form-control" required name="studentRegLastName" id="studentRegLastName">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegEmail">Email</label>
                                                <input type="email" class="form-control" name="studentRegEmail" id="studentRegEmail">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegDOB">Date of Birth</label>
                                                <input type="text" class="form-control" name="studentRegDOB" id="studentRegDOB">
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="studentRegYear">Academic Year</label>
                                                <select class="form-control" required name="studentRegYear" id="studentRegYear">
                                                    <option>Academic Year</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="studentRegGender">Gender</label>
                                                <select class="form-control" required name="studentRegGender" id="studentRegGender">
                                                    <option>Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Contact Info</legend>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegAddress1">Address Line 1</label>
                                                <input type="text" class="form-control" name="studentRegAddress1" id="studentRegAddress1">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegAddress2">Address Line 2</label>
                                                <input type="text" class="form-control" name="studentRegAddress2" id="studentRegAddress2">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegCity">Town/City</label>
                                                <input type="text" class="form-control" name="studentRegCity" id="studentRegCity">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegCounty">County</label>
                                                <input type="text" class="form-control" name="studentRegCounty" id="studentRegCounty">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegPostcode">Postcode</label>
                                                <input type="text" class="form-control" name="studentRegPostcode" id="studentRegPostcode">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegCountry">Country</label>
                                                <input type="text" class="form-control" name="studentRegCountry" id="studentRegCountry">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegPhone1">Phone 1</label>
                                                <input type="tel" class="form-control" name="studentRegPhone1" id="studentRegPhone1">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegPhone2">Phone 2</label>
                                                <input type="tel" class="form-control" name="studentRegPhone2" id="studentRegPhone2">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegTimezone">Timezone</label>
                                                <input type="text" class="form-control" name="studentRegTimezone" id="studentRegTimezone">
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Client Info</legend>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="studentRegClient">Associated Client</label>
                                                <select class="form-control" required name="studentRegClient" id="studentRegClient">
                                                    <option>Associated Client</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Notification Settings</legend>
                                            <div class="form-check form-switch pt-4 mb-4">
                                                <input class="form-check-input" type="checkbox" name="smsReceive" id="smsReceive" checked>
                                                <label class="form-check-label" for="smsReceive">Receive SMS</label>
                                            </div>
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" name="lessonReminder" id="lessonReminder" checked>
                                                <label class="form-check-label" for="lessonReminder">Lesson reminders</label>
                                            </div>
                                        </fieldset>
                                        <hr class="dark horizontal mx-5">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success float-end">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function studentToggle() {
                var main = document.getElementById("studentMainBody");
                var mainBtn = document.getElementById("studentMainBtn");
                var mainTitle = document.getElementById("studentMainTitle");
                var add = document.getElementById("studentAddBody");
                var addBtn = document.getElementById("studentAddBtn");
                var addTitle = document.getElementById("studentAddTitle");
                if (add.style.display === "none") {
                    main.style.display = "none";
                    mainBtn.style.display = "block";
                    mainTitle.style.display = "none";
                    add.style.display = "block";
                    addBtn.style.display = "none";
                    addTitle.style.display = "block";
                } else {
                    add.style.display = "none";
                    addBtn.style.display = "block";
                    addTitle.style.display = "none";
                    main.style.display = "block";
                    mainBtn.style.display = "none";
                    mainTitle.style.display = "block";
                }
            }
        </script>
        <?php include 'includes/footer.php'; ?>
    </div>
<?php include 'includes/overall/footer.php'; ?>