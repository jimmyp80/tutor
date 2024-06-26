<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
$queryClient = mysqli_query($conn, "SELECT * FROM clients ORDER BY last_name, first_name");
?>
    <div class="container-fluid py-4">
        <div class="row min-vh-80 h-100">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 mb-xl-0 mb-4">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3 px-4" style="height:85px;">
                                    <h5 class="float-start text-white" id="clientMainTitle">Clients</h5>
                                    <h5 class="float-start text-white" id="clientAddTitle" style="display:none;">Add New Client</h5>
                                    <button type="button" class="btn btn-primary btn-sm float-end" id="clientAddBtn" onclick="clientToggle()">
                                        <span class="material-symbols-outlined">person_add</span>
                                    </button>
                                    <a href="" class="material-symbols-outlined float-end" id="clientMainBtn" style="display:none;" onclick="clientToggle()">close</a>
                                </div>
                            </div>
                            <div class="card-body" id="clientMainBody">
                                <div class="nav-wrapper position-relative end-0">
                                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#liveTab" role="tab" aria-controls="preview" aria-selected="true">
                                            <span class="material-symbols-outlined align-middle mb-1">person</span>
                                                Live
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#prospectiveTab" role="tab" aria-controls="code" aria-selected="false">
                                                <span class="material-symbols-outlined align-middle mb-1">person_raised_hand</span>
                                                Prospective
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dormantTab" role="tab" aria-controls="code" aria-selected="false">
                                            <span class="material-symbols-outlined align-middle mb-1">bedtime</span>
                                                Dormant
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="liveTab" class="container tab-pane active"><br>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach($queryClient as $row) {
                                                            echo '
                                                            <tr>
                                                                <td><a href="client-page.php?'.$row['id'].'">'.$row['first_name'].' '.$row['last_name'].'</a></td>
                                                                <td><a href="mailto:'.$row['email'].'">'.$row['email'].'</a></td>
                                                                <td>'.$row['city'].', '.$row['postcode'].', '.$row['country'].'</td>
                                                                <td>'.$row['phone_1'].'</td>
                                                            </tr>';
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="prospectiveTab" class="container tab-pane"><br>
                                            <h5>Prospective clients</h5>
                                        </div>
                                        <div id="dormantTab" class="container tab-pane"><br>
                                            <h5>Dormant clients</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="clientAddBody" style="display:none;">
                                <form role="form" action="add-client.php" method="post" autocomplete="off">
                                    <div class="row">
                                        <fieldset class="col-md-3">
                                            <legend>Basic Details</legend>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="clientRegTitle">Title</label>
                                                <select class="form-control" required name="clientRegTitle" id="clientRegTitle">
                                                    <option>Title*</option>
                                                    <option>Mr</option>
                                                    <option>Mrs</option>
                                                    <option>Ms</option>
                                                    <option>Dr</option>
                                                    <option>Prof</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegFirstName">First Name*</label>
                                                <input type="text" class="form-control" required name="clientRegFirstName" id="clientRegFirstName">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegLastName">Last Name*</label>
                                                <input type="text" class="form-control" required name="clientRegLastName" id="clientRegLastName">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegEmail">Email*</label>
                                                <input type="email" class="form-control" required name="clientRegEmail" id="clientRegEmail">
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="clientRegStatus">Status</label>
                                                <select class="form-control" required name="clientRegStatus" id="clientRegStatus">
                                                    <option>Status*</option>
                                                    <option>Live</option>
                                                    <option>Prospective</option>
                                                    <option>Dormant</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegDOB">Date of Birth</label>
                                                <input type="text" class="form-control" name="clientRegDOB" id="clientRegDOB">
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Contact Info</legend>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegAddress1">Address Line 1</label>
                                                <input type="text" class="form-control" name="clientRegAddress1" id="clientRegAddress1">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegAddress2">Address Line 2</label>
                                                <input type="text" class="form-control" name="clientRegAddress2" id="clientRegAddress2">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegCity">Town/City</label>
                                                <input type="text" class="form-control" name="clientRegCity" id="clientRegCity">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegCounty">County</label>
                                                <input type="text" class="form-control" name="clientRegCounty" id="clientRegCounty">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegPostcode">Postcode</label>
                                                <input type="text" class="form-control" name="clientRegPostcode" id="clientRegPostcode">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegCountry">Country</label>
                                                <input type="text" class="form-control" name="clientRegCountry" id="clientRegCountry">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegPhone1">Phone</label>
                                                <input type="tel" class="form-control" name="clientRegPhone1" id="clientRegPhone1">
                                            </div>
                                            <div class="input-group input-group-dynamic mb-4">
                                                <label class="form-label" for="clientRegTimezone">Timezone</label>
                                                <input type="text" class="form-control" name="clientRegTimezone" id="clientRegTimezone">
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-3">
                                            <legend>Business Attachments</legend>
                                            <div class="input-group input-group-static mb-4">
                                                <label class="ms-0" hidden for="clientRegCM">Client Manager</label>
                                                <select class="form-control" required name="clientRegCM" id="clientRegCM">
                                                    <option>Client Manager</option>
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
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" name="invoiceReminder" id="invoiceReminder" value="1">
                                                <label class="form-check-label" for="invoiceReminder">Invoice reminders</label>
                                            </div>
                                            <div class="form-check form-switch mb-4">
                                                <input class="form-check-input" type="checkbox" name="balanceReminder" id="balanceReminder" value="1">
                                                <label class="form-check-label" for="balanceReminder">Account balance reminders</label>
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
            function clientToggle() {
                const main = document.getElementById("clientMainBody");
                const mainBtn = document.getElementById("clientMainBtn");
                const mainTitle = document.getElementById("clientMainTitle");
                const add = document.getElementById("clientAddBody");
                const addBtn = document.getElementById("clientAddBtn");
                const addTitle = document.getElementById("clientAddTitle");
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