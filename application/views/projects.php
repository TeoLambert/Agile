<?php 
foreach($projects as $project)
{
    ?>
    <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-info text-center"><?= $project->pro_name?></h4>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true"> Description </a>
                                <a class="nav-item nav-link" id="nav-backlog-tab" data-toggle="tab" href="#nav-backlog" role="tab" aria-controls="nav-backlog" aria-selected="false"> Backlog </a>
                                <a class="nav-item nav-link" id="nav-board-tab" data-toggle="tab" href="#nav-board" role="tab" aria-controls="nav-board" aria-selected="false"> Board </a>
                                <a class="nav-item nav-link" id="nav-people-tab" data-toggle="tab" href="#nav-people" role="tab" aria-controls="nav-people" aria-selected="false"> People </a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p> <b> Customer Name: </b><?=$project->pro_customer?> </p> 
                                            </div>
                                            <div class="col-lg-6">
                                                <p> <b> Customer Phone: </b><?=$project->pro_customer_tel?></p> 
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p> <b> Customer E-mail: </b><?=$project->pro_customer_mail?></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p> <b> Project Deadline: </b><?= $project->pro_deadline?></p> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="text-justify"> <b> Project Description: </b>
                                                <?=$project->pro_desc?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <?php 
} ?>
