<div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-info text-center"><?= $project->pro_name?></h4>
                        <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true"> Description </a>
                                <a class="nav-item nav-link" id="nav-backlog-tab" data-toggle="tab" href="#nav-backlog"  role="tab" aria-controls="nav-backlog" aria-selected="false"> Backlog </a>
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

                            <!-- Backlog section code start  -->
                            <div class="tab-pane fade" id="nav-backlog" role="tabpanel" aria-labelledby="nav-backlog-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4 class="text-muted"> Product Backlog: </h4>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-right">
                                                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addRequirementModal">
                                                        <i class="fas fa-plus"></i> Add Requirement
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                        <table class="table table-bordered table-hover table-sm text-center">
                                            <thead>
                                                <th> Name </th>
                                                <th> Priority </th>
                                                <th> Estimate </th>
                                                <th> Deadline </th>
                                                <th> Edit </th>
                                                <th> Delete </th>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            if ($requirements = isset($variable)) {
                                                foreach($requirements as $requirement) { ?>                          
                                                    <tr>
                                                        <td> <?= $requirement->tas_name?> </td>
                                                        <!-- TODO: requirement of people-->
                                                        <td> Willford </td>
                                                        <td> <?= $requirement->tas_progress ?> </td>
                                                        <td> <?= $requirement->tas_priority ?> </td>
                                                        <td> <?= $requirement->tas_deadline ?> </td>
                                                        <td>
                                                            <!-- TODO: edit and delete requirement-->
                                                            <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#editRequirementModal">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </td>
                                                        <td> <a class="bth btn-sm btn-outline-danger" href=""> <i class="fas fa-trash-alt"></i> </a> </td>
                                                    </tr>
                                                    <?php }
                                            }
                                            else{
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- This below code show madal for add Requirement -->
                                <div class="modal fade" id="addRequirementModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> Add Requirement </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"> &times; </span>
                                                    </button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="requirementname"> Name: </label>
                                                        <input type="text" name="" id="requirementname" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="priority"> Priority: </label>
                                                                <select class="form-control" id="priority" required>
                                                                    <option value=""> High </option>
                                                                    <option value=""> Middle </option>
                                                                    <option value=""> Low </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="estimate"> Estimate: </label>
                                                                <input type="text" name="" id="estimate" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="for-group">
                                                        <label for="deadline"> Deadline: </label>
                                                        <input type="date" name="" id="deadline" class="form-control" required>
                                                    </div>
                                                    <div class="for-group">
                                                        <label for="reqDes"> Description: </label>
                                                        <textarea name="" id="reqDes" cols="30" rows="3" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-plus"></i> Add Requirement </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End of the add Requirement modal code -->


                                <!-- This below code show madal for edit Requirement -->
                                <div class="modal fade" id="editRequirementModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> Edit Requirement </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"> &times; </span>
                                                    </button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="requirementname"> Name: </label>
                                                        <input type="text" name="" value="Willford" id="requirementname" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="priority"> Priority: </label>
                                                                <select class="form-control" id="priority" required>
                                                                    <option value=""> High </option>
                                                                    <option value=""> Middle </option>
                                                                    <option value=""> Low </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="estimate"> Estimate: </label>
                                                                <input type="text" name="" id="estimate" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="for-group">
                                                        <label for="deadline"> Deadline: </label>
                                                        <input type="date" name="" id="deadline" class="form-control" required>
                                                    </div>
                                                    <div class="for-group">
                                                        <label for="reqDes"> Description: </label>
                                                        <textarea name="" id="reqDes" cols="30" rows="3" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-plus"></i> Update Requirement </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End of the edit Requirement modal code -->



                            </div> <!-- Backlog section code end  -->
                            <!-- Board section code start  -->
                            <div class="tab-pane fade" id="nav-board" role="tabpanel" aria-labelledby="nav-board-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4 class="text-muted"> Task Board: </h4>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-right">
                                                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addTaskModal">
                                                        <i class="fas fa-plus"></i> Add Task
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                        <table class="table table-bordered table-hover table-sm text-center">
                                            <thead>
                                                <th> Task Name </th>
                                                <th> People </th>
                                                <th> Progress </th>
                                                <th> Priority </th>
                                                <th> Deadline </th>
                                                <th> Edit </th>
                                                <th> Delete </th>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            if ($task = isset($variable)) {
                                                foreach($tasks as $task) { ?>                          
                                                    <tr>
                                                        <td> <?= $task->tas_name?> </td>
                                                        <!-- TODO: task of people-->
                                                        <td> Willford </td>
                                                        <td> <?= $task->tas_progress ?> </td>
                                                        <td> <?= $task->tas_priority ?> </td>
                                                        <td> <?= $task->tas_deadline ?> </td>
                                                        <td>
                                                            <!-- TODO: edit and delete task-->
                                                            <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#editTaskModal">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </td>
                                                        <td> <a class="bth btn-sm btn-outline-danger" href=""> <i class="fas fa-trash-alt"></i> </a> </td>
                                                    </tr>
                                                    <?php }
                                            }
                                            else{
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- This below code show madal for add task -->
                                <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> Add Task </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"> &times; </span>
                                                    </button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="taskname"> Task Name: </label>
                                                        <input type="text" name="" id="taskname" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="Progress"> Progress: </label>
                                                                <select class="form-control" id="Progress" required>
                                                                    <option value=""> Done </option>
                                                                    <option value=""> Ongoing </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="Priority"> Priority: </label>
                                                                <select class="form-control" id="Priority" required>
                                                                    <option value=""> High </option>
                                                                    <option value=""> Middle </option>
                                                                    <option value=""> Low </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="for-group">
                                                        <label for="deadline"> Deadline: </label>
                                                        <input type="date" name="" id="deadline" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-plus"></i> Add Task </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End of the add task modal code -->

                                <!-- This below code show madal for edit task -->
                                <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> Edit Task </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"> &times; </span>
                                                    </button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="taskname"> Task Name: </label>
                                                        <input type="text" name="" id="taskname" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label for="Progress"> Progress: </label>
                                                                <select class="form-control" id="Progress" required>
                                                                    <option value=""> Done </option>
                                                                    <option value=""> Ongoing </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="Priority"> Priority: </label>
                                                                <select class="form-control" id="Priority" required>
                                                                    <option value=""> High </option>
                                                                    <option value=""> Middle </option>
                                                                    <option value=""> Low </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="for-group">
                                                        <label for="deadline"> Deadline: </label>
                                                        <input type="date" name="" id="deadline" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-plus"></i> Update Task </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End of the edit task modal code -->
                            </div> <!-- Board section code end  -->
                            <!-- People section code start  -->
                            <div class="tab-pane fade" id="nav-people" role="tabpanel" aria-labelledby="nav-people-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4 class="text-muted"> List of People: </h4>
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-right">
                                                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addPeopleModal">
                                                        <i class="fas fa-plus"></i> Add People
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                        <table class="table table-bordered table-hover table-sm">
                                            <thead>
                                                <th> Name </th>
                                                <th> E-mail </th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($req = isset($variable)) {
                                                foreach($workers as $worker) { ?>                          
                                                    <tr>
                                                        <td> <?= $worker->tas_name?> </td>
                                                        <!-- TODO: worker of people-->
                                                        <td> Willford </td>
                                                        <td> <?= $worker->tas_progress ?> </td>
                                                        <td> <?= $worker->tas_priority ?> </td>
                                                        <td> <?= $worker->tas_deadline ?> </td>
                                                        <td>
                                                        
                                                    </tr>
                                                    <?php }
                                            }
                                            else{
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- This below code show madal for add people -->
                                <div class="modal fade" id="addPeopleModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> Add People </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"> &times; </span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="email"> E-mail </label>
                                                        <select class="form-control" id="email" required>
                                                            <option> willford@gmail.com </option>
                                                            <option> teo@gmail.com </option>
                                                            <option> example@gmail.com </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-plus"></i> Add People </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End of the add people modal code -->
                            </div> <!-- People section code end  -->

