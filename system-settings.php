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
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>System</h4>
                            </div>
                            <hr class="dark horizontal my-0 mx-5">
                            <div class="card-body">
                                <div class="nav-wrapper position-relative end-0">
                                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#companyTab" role="tab" aria-controls="preview" aria-selected="true">
                                            <span class="material-symbols-outlined align-middle mb-1">business</span>
                                                Company Settings
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#activityTab" role="tab" aria-controls="code" aria-selected="false">
                                                <span class="material-symbols-outlined align-middle mb-1">groups</span>
                                                Activity Log
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#communicationsTab" role="tab" aria-controls="code" aria-selected="false">
                                            <span class="material-symbols-outlined align-middle mb-1">forum</span>
                                                Communications
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#accountingTab" role="tab" aria-controls="code" aria-selected="false">
                                            <span class="material-symbols-outlined align-middle mb-1">savings</span>
                                                Payments & Accounting
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content border-top border-3 border-info mt-4">
                                        <div id="companyTab" class="container tab-pane active"><br>
                                            <div class="nav-wrapper position-relative end-0">
                                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#detailsTab" role="tab" aria-controls="profile" aria-selected="true">
                                                            <span class="material-symbols-outlined align-middle mb-1">business</span>
                                                            Company Details
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#branchTab" role="tab" aria-controls="dashboard" aria-selected="false">
                                                            <span class="material-symbols-outlined align-middle mb-1">fork_right</span>
                                                            Branch Details
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tcTab" role="tab" aria-controls="dashboard" aria-selected="false">
                                                            <span class="material-symbols-outlined align-middle mb-1">gavel</span>
                                                            Terms & Conditions
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="detailsTab" class="container tab-pane active"><br>
                                                        <div class="nav-wrapper position-relative end-0">
                                                            <form role="form" action="" method="post" autocomplete="off">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="companyName">Company Name</label>
                                                                            <input type="text" class="form-control" name="companyName" id="companyName">
                                                                        </div>
                                                                        <div class="mb-4">
                                                                            <label class="form-label ms-0" for="companyLogo">Company Logo</label><br>
                                                                            <input type="file" id="companyLogo">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <textarea class="form-control" style="resize:none;" rows="8" placeholder="Company Description..." spellcheck="false"></textarea>
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <textarea class="form-control" style="resize:none;" rows="8" placeholder="Tutor Signup Description..." spellcheck="false"></textarea>
                                                                        </div>
                                                                    </div>
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
                                                    <div id="branchTab" class="container tab-pane"><br>
                                                        <div class="nav-wrapper position-relative end-0">
                                                            <form role="form" action="" method="post" autocomplete="off">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="companyName">Branch Name</label>
                                                                            <input type="text" class="form-control" name="companyName" id="companyName">
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchEmail">Branch Email</label>
                                                                            <input type="text" class="form-control" name="branchEmail" id="branchEmail">
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchPhone">Branch Phone</label>
                                                                            <input type="tel" class="form-control" name="branchPhone" id="branchPhone">
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchWebsite">Branch Website</label>
                                                                            <input type="text" class="form-control" name="branchWebsite" id="branchWebsite">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchAddress1">Branch Address 1</label>
                                                                            <input type="text" class="form-control" name="branchAddress1" id="branchAddress1">
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchAddress2">Branch Address 2</label>
                                                                            <input type="text" class="form-control" name="branchAddress2" id="branchAddress2">
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchCity">Branch Town/City</label>
                                                                            <input type="text" class="form-control" name="branchCity" id="branchCity">
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchCounty">Branch County</label>
                                                                            <input type="text" class="form-control" name="branchCounty" id="branchCounty">
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchPostcode">Branch Postcode</label>
                                                                            <input type="text" class="form-control" name="branchPostcode" id="branchPostcode">
                                                                        </div>
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="branchCountry">Branch Country</label>
                                                                            <input type="text" class="form-control" name="branchCountry" id="branchCountry">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group input-group-static mb-4">
                                                                            <label class="ms-0" hidden for="branchTimezone">Timezone</label>
                                                                            <select class="form-control" required name="branchTimezone" id="branchTimezone">
                                                                                <option>Branch Timezone</option>
                                                                                <option>UTC-1</option>
                                                                                <option>UTC-0</option>
                                                                                <option>UTC+1</option>
                                                                                <option>UTC+2</option>
                                                                                <option>UTC+3</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">
                                                                            <label class="ms-0" hidden for="branchWeekStart">Timezone</label>
                                                                            <select class="form-control" required name="branchWeekStart" id="branchWeekStart">
                                                                                <option>Branch Start of Week</option>
                                                                                <option>Monday</option>
                                                                                <option>Tuesday</option>
                                                                                <option>Wednesday</option>
                                                                                <option>Thursday</option>
                                                                                <option>Friday</option>
                                                                                <option>Saturday</option>
                                                                                <option>Sunday</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-group input-group-static mb-4">
                                                                            <label class="ms-0" hidden for="branchUnits">Timezone</label>
                                                                            <select class="form-control" required name="branchUnits" id="branchUnits">
                                                                                <option>Branch Distance Units</option>
                                                                                <option>Miles</option>
                                                                                <option>Kilometers</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-check form-switch mb-4">
                                                                            <input class="form-check-input" type="checkbox" id="clientReg" checked="">
                                                                            <label class="form-check-label" for="clientReg">Clients able to self-register</label>
                                                                        </div>
                                                                        <div class="form-check form-switch mb-4">
                                                                            <input class="form-check-input" type="checkbox" id="tutorReg" checked="">
                                                                            <label class="form-check-label" for="tutorReg">Tutors able to self-register</label>
                                                                        </div>
                                                                    </div>
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
                                                    <div id="tcTab" class="container tab-pane"><br>
                                                        <div class="nav-wrapper position-relative end-0">
                                                            <form role="form" action="" method="post" autocomplete="off">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <label class="form-label" for="tcTitle">Terms & Conditions Title</label>
                                                                            <input type="text" class="form-control" name="tcTitle" id="tcTitle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="input-group input-group-dynamic mb-4">
                                                                            <textarea class="form-control" style="resize:none;" rows="8" placeholder="Terms & Conditions text..." spellcheck="false"></textarea>
                                                                        </div>
                                                                    </div>
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
                                        <div id="activityTab" class="container tab-pane"><br>
                                            <h5>Activity Log</h5>
                                        </div>
                                        <div id="communicationsTab" class="container tab-pane"><br>
                                            <h5>Communications</h5>
                                        </div>
                                        <div id="accountingTab" class="container tab-pane"><br>
                                            <div class="row">
                                                <div class="col-6 d-flex align-items-center">
                                                    <h5 class="mb-5">Payment Method</h5>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Card</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                                        <img class="w-10 me-3 mb-0" src="assets/img/logos/mastercard.png" alt="logo">
                                                        <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                                                        <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card">edit</i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                                        <img class="w-10 me-3 mb-0" src="assets/img/logos/visa.png" alt="logo">
                                                        <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                                                        <i class="material-icons ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card">edit</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
<?php include 'includes/overall/footer.php'; ?>