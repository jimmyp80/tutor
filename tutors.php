<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
    <div class="container-fluid py-4">
        <div class="row min-vh-80 h-100">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 mb-xl-0 mb-4">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3 px-4" style="height:85px;">
                                    <h5 class="float-start text-white" id="tutorMainTitle">Tutors</h5>
                                    <h5 class="float-start text-white" id="tutorAddTitle" style="display:none;">Add New Tutor</h5>
                                    <button type="button" class="btn btn-primary btn-sm float-end" id="tutorAddBtn" onclick="tutorToggle()">
                                        <span class="material-symbols-outlined">person_add</span>
                                    </button>
                                    <a href="" class="material-symbols-outlined float-end" id="tutorMainBtn" style="display:none;" onclick="tutorToggle()">close</a>
                                </div>
                            </div>
                            <div class="card-body" id="tutorMainBody">
                                Tutors Main Area
                            </div>
                            <div class="card-body" id="tutorAddBody" style="display:none;">
                                <form role="form" action="" method="" autocomplete="off">
                                    <div class="row">
                                        <fieldset class="col-md-3">
                                            <legend>Basic Details</legend>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="tutorRegTitle">Title</label>
                                                <select class="form-control" name="tutorRegTitle" id="tutorRegTitle">
                                                    <option>Title</option>
                                                    <option>Mr</option>
                                                    <option>Mrs</option>
                                                    <option>Ms</option>
                                                    <option>Dr</option>
                                                    <option>Prof</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegFirstName">First Name*</label>
                                                <input type="text" class="form-control" required name="tutorRegFirstName" id="tutorRegFirstName">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegLastName">Last Name*</label>
                                                <input type="text" class="form-control" required name="tutorRegLastName" id="tutorRegLastName">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegEmail">Email*</label>
                                                <input type="email" class="form-control" required name="tutorRegEmail" id="tutorRegEmail">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegDOB">Date of Birth</label>
                                                <input type="text" class="form-control" name="tutorRegDOB" id="tutorRegDOB">
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="tutorRegGender">Gender</label>
                                                <select class="form-control" required name="tutorRegGender" id="tutorRegGender">
                                                    <option>Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="tutorRegStatus">Status</label>
                                                <select class="form-control" required name="tutorRegStatus" id="tutorRegStatus">
                                                    <option>Status</option>
                                                    <option>Approved</option>
                                                    <option>Pending</option>
                                                    <option>Dormant</option>
                                                    <option>Rejected</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Contact Info</legend>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegAddress1">Address Line 1</label>
                                                <input type="text" class="form-control" name="tutorRegAddress1" id="tutorRegAddress1">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegAddress2">Address Line 2</label>
                                                <input type="text" class="form-control" name="tutorRegAddress2" id="tutorRegAddress2">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegCity">Town/City</label>
                                                <input type="text" class="form-control" name="tutorRegCity" id="tutorRegCity">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegCounty">County</label>
                                                <input type="text" class="form-control" name="tutorRegCounty" id="tutorRegCounty">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegPostcode">Postcode</label>
                                                <input type="text" class="form-control" name="tutorRegPostcode" id="tutorRegPostcode">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegCountry">Country</label>
                                                <input type="text" class="form-control" name="tutorRegCountry" id="tutorRegCountry">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegPhone1">Phone 1</label>
                                                <input type="tel" class="form-control" name="tutorRegPhone1" id="tutorRegPhone1">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegPhone2">Phone 2</label>
                                                <input type="tel" class="form-control" name="tutorRegPhone2" id="tutorRegPhone2">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="tutorRegTimezone">Timezone</label>
                                                <input type="text" class="form-control" name="tutorRegTimezone" id="tutorRegTimezone">
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Background</legend>
                                            <div class="form-check form-switch pt-4 mb-4">
                                                <input class="form-check-input" type="checkbox" name="backgroundCheck" id="backgroundCheck" value="1">
                                                <label class="form-check-label" for="backgroundCheck">Background check completed</label>
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="backgroundCheckDate">Background Check Date</label>
                                                <input type="text" class="form-control" name="backgroundCheckDate" id="backgroundCheckDate">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <textarea class="form-control" style="resize:none;" rows="8" placeholder="Teaching experience..." spellcheck="false"></textarea>
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <textarea class="form-control" style="resize:none;" rows="8" placeholder="Biography / general interests..." spellcheck="false"></textarea>
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Notification Settings</legend>
                                            <div class="form-check form-switch pt-4 mb-4">
                                                <input class="form-check-input" type="checkbox" name="smsReceive" id="smsReceive" value="1">
                                                <label class="form-check-label" for="smsReceive">Receive SMS</label>
                                            </div>
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" name="lessonReminder" id="lessonReminder" value="1">
                                                <label class="form-check-label" for="lessonReminder">Lesson reminders</label>
                                            </div>
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" name="lessonReports" id="lessonReports" value="1">
                                                <label class="form-check-label" for="availableJobs">Lesson reports</label>
                                            </div>
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" name="availableJobs" id="availableJobs" value="1">
                                                <label class="form-check-label" for="availableJobs">Available jobs</label>
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
            function tutorToggle() {
                var main = document.getElementById("tutorMainBody");
                var mainBtn = document.getElementById("tutorMainBtn");
                var mainTitle = document.getElementById("tutorMainTitle");
                var add = document.getElementById("tutorAddBody");
                var addBtn = document.getElementById("tutorAddBtn");
                var addTitle = document.getElementById("tutorAddTitle");
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