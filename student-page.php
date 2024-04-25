<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
$studentId = basename($_SERVER['QUERY_STRING']);
$queryStudent = mysqli_query($conn, "SELECT * FROM students WHERE id = $studentId");
$resultStudent = mysqli_fetch_assoc($queryStudent);
$created = date_create($resultStudent['record_created']);
?>
    <div class="container-fluid py-4">
        <div class="row min-vh-80 h-100">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 mb-xl-0 mb-4">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3 px-4" style="height:85px;">
                                    <h5 class="float-start text-white" id="studentMainTitle">Student: <?php echo $resultStudent['first_name'].' '.$resultStudent['last_name'];?></h5>&nbsp;&nbsp;
                                    <button type="button" class="btn btn-primary btn-sm float-end" id="studentEditBtn">Actions</button>
                                </div>
                            </div>
                            <div class="card-body" id="studentMainBody">
                                <div class="nav-wrapper position-relative end-0">
                                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profileTab" role="tab" aria-controls="preview" aria-selected="true">
                                            <span class="material-symbols-outlined align-middle mb-1">person</span>
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#activityTab" role="tab" aria-controls="code" aria-selected="false">
                                            <span class="material-symbols-outlined align-middle mb-1">checklist_rtl</span>
                                                Activity
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#communicationsTab" role="tab" aria-controls="code" aria-selected="false">
                                            <span class="material-symbols-outlined align-middle mb-1">email</span>
                                                Communications
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="profileTab" class="container tab-pane active"><br>
                                            <div class="row">
                                                <div class="col-md-3 border-end">
                                                    <span class="material-symbols-outlined float-start">send</span>&nbsp;<?php echo '<p><a href="mailto:'.$resultStudent['email'].'">'.$resultStudent['email'].'</a></p>';?>
                                                    <span class="material-symbols-outlined float-start">phone</span>&nbsp;<?php echo '<p><a href="tel:+'.$resultStudent['phone_1'].'">'.$resultStudent['phone_1'].'</a></p>';?>
                                                    <span class="material-symbols-outlined float-start">contact_mail</span>&nbsp;
                                                    <?php echo '<p class="mb-0">'.$resultStudent['address_1'].'</p>';
                                                    if($resultStudent['address_2']!==""){echo '
                                                        <p class="mb-0">'.$resultStudent['address_2'].'</p>';
                                                    }
                                                    echo '
                                                    <p class="mb-0">'.$resultStudent['city'].'</p>
                                                    <p class="mb-0">'.$resultStudent['postcode'].'</p>
                                                    <p>'.$resultStudent['country'].'</p>';?>
                                                    <span class="material-symbols-outlined float-start mb-0">today</span><p>Record created:</p><?php echo '<p class="mt-0">'.date_format($created, "d/m/Y @ H:i").'</p>';?>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="activityTab" class="container tab-pane"><br>
                                            <h5>Activity</h5>
                                        </div>
                                        <div id="communicationsTab" class="container tab-pane"><br>
                                            <h5>Communications</h5>
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