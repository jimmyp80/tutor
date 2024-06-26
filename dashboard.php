<?php
include 'core/init.php';
//protect_page();
include 'includes/overall/header.php';
?>
    <div class="container-fluid py-4">
        <div class="row min-vh-80 h-100">
            <div class="col-12">
                <div class="row mt-4">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">7 Day Revenue</p>
                                    <h4 class="mb-0">£7.2k</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">28 Day Revenue</p>
                                    <h4 class="mb-0">£17.3k</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than lask month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Revenue YTD</p>
                                    <h4 class="mb-0">£47.2k</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than last year</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Pending Revenue</p>
                                    <h4 class="mb-0">£103,430</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0">Due for receipt on 27/04/2024</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0">Lesson Hours</h6>
                                <p class="text-sm">Last Campaign Performance</p>
                                <hr class="dark horizontal">
                                <div class="d-flex">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0">New Jobs</h6>
                                <p class="text-sm"> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
                                <hr class="dark horizontal">
                                <div class="d-flex">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> updated 4 min ago </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mb-3">
                        <div class="card z-index-2">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0">Completed Tasks</h6>
                                <p class="text-sm">Last Campaign Performance</p>
                                <hr class="dark horizontal">
                                <div class="d-flex">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm">just updated</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-7">
                                        <h6>Recently-Created Clients</h6>
                                        <p class="text-sm mb-0">
                                            <i class="fa fa-check text-info" aria-hidden="true"></i>
                                            <span class="font-weight-bold ms-1">30</span> new clients this month
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-5 my-auto text-end">
                                        <div class="dropdown float-lg-end pe-4">
                                            <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-secondary"></i>
                                            </a>
                                            <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-5">Name</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Town/City</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Postcode</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                                <td class="align-middle ps-5 text-sm">
                                                    <a class="font-weight-bold" href="#">Susan Powell</a>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">Bedford</span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">MK43 9GX</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">07788332456</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">28/03/2024</span>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td class="align-middle ps-5 text-sm">
                                                    <a class="font-weight-bold" href="#">Rod Powell</a>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">Padstow</span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">PB12 1AA</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">07788355426</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">23/03/2024</span>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td class="align-middle ps-5 text-sm">
                                                    <a class="font-weight-bold" href="#">Rebecca Smith</a>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">Cardigan</span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">SA43 1AE</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">07788355436</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">28/02/2024</span>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td class="align-middle ps-5 text-sm">
                                                    <a class="font-weight-bold" href="#">Gary Smith</a>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">St Dogmaels</span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">SA43 1SS</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">07788366554</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">21/01/2024</span>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td class="align-middle ps-5 text-sm">
                                                    <a class="font-weight-bold" href="#">Zac Efron</a>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">London</span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">W14 1AA</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">07785456456</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">14/04/2024</span>
                                                </td>
                                            </tr>
                                            <tr> 
                                                <td class="align-middle ps-5 text-sm">
                                                    <a class="font-weight-bold" href="#">John Brown</a>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">London</span>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <span class="font-weight-bold">N1 2AB</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">07785566778</span>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="font-weight-bold">19/04/2024</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="card-header pb-0">
                                <h6>Orders overview</h6>
                                <p class="text-sm">
                                    <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                    <span class="font-weight-bold">24%</span> this month
                                </p>
                            </div>
                            <div class="card-body p-3">
                                <div class="timeline timeline-one-side">
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="material-icons text-success text-gradient">notifications</i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                                        </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-danger text-gradient">code</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-info text-gradient">shopping_cart</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-warning text-gradient">credit_card</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block mb-3">
                                      <span class="timeline-step">
                                        <i class="material-icons text-primary text-gradient">key</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                                      </div>
                                    </div>
                                    <div class="timeline-block">
                                      <span class="timeline-step">
                                        <i class="material-icons text-dark text-gradient">payments</i>
                                      </span>
                                      <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
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