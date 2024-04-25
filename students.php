<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
$queryStudent = mysqli_query($conn, "SELECT * FROM students ORDER BY last_name, first_name");
?>
    <div class="container-fluid py-4">
        <div class="row min-vh-80 h-100">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 mb-xl-0 mb-4">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3 px-4" style="height:85px;">
                                    <h5 class="float-start text-white" id="studentMainTitle">Students</h5>
                                    <h5 class="float-start text-white" id="studentAddTitle" style="display:none;">Add New Student</h5>
                                    <button type="button" class="btn btn-primary btn-sm float-end" id="studentAddBtn" onclick="studentToggle()">
                                        <span class="material-symbols-outlined">person_add</span>
                                    </button>
                                    <a href="" class="material-symbols-outlined float-end" id="studentMainBtn" style="display:none;" onclick="studentToggle()">close</a>
                                </div>
                            </div>
                            <div class="card-body" id="studentMainBody">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Paying Client</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($queryStudent as $row) {
                                                echo '
                                                <tr>
                                                    <td><a href="student-page.php?'.$row['id'].'">'.$row['first_name'].' '.$row['last_name'].'</a></td>
                                                    <td>'.$row['client'].'</td>
                                                    <td>'.$row['city'].', '.$row['postcode'].', '.$row['country'].'</td>
                                                </tr>';
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body" id="studentAddBody" style="display:none;">
                                <form role="form" action="add-student.php" method="post" autocomplete="off">
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
                                                <label class="ms-0" hidden for="studentRegGender">Gender</label>
                                                <select class="form-control" name="studentRegGender" id="studentRegGender">
                                                    <option>Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="studentRegYear">Academic Year</label>
                                                <select class="form-control" name="studentRegYear" id="studentRegYear">
                                                    <option>Academic Year</option>
                                                    <option>YR</option>
                                                    <option>Y1</option>
                                                    <option>Y2</option>
                                                    <option>Y3</option>
                                                    <option>Y4</option>
                                                    <option>Y5</option>
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
                                                <label class="form-label" for="studentRegPhone1">Phone</label>
                                                <input type="tel" class="form-control" name="studentRegPhone1" id="studentRegPhone1">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="studentRegTimezone">Timezone</label>
                                                <input type="text" class="form-control" name="studentRegTimezone" id="studentRegTimezone">
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Business Attachments</legend>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="client">Paying Client</label>
                                                <select class="form-control" required name="client" id="client">
                                                    <option>Paying Client*</option>
                                                </select>
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
                const main = document.getElementById("studentMainBody");
                const mainBtn = document.getElementById("studentMainBtn");
                const mainTitle = document.getElementById("studentMainTitle");
                const add = document.getElementById("studentAddBody");
                const addBtn = document.getElementById("studentAddBtn");
                const addTitle = document.getElementById("studentAddTitle");
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