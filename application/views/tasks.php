
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-info text-center"> My Task </h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="text-muted"> Task Board: </h4>
                                    </div>
                                </div>
                                <table class="table table-bordered table-hover table-sm text-center">
                                            <thead>
                                                <th> Task Name </th>
                                                <th> People </th>
                                                <th> Progress </th>
                                                <th> Priority </th>
                                                <th> Deadline </th>
                                                <th> Submit </th>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                foreach($tasks as $task) { ?>                          
                                                    <tr>
                                                        <td> <?= $task->tas_name?> </td>
                                                        <td>
                                                             <?php foreach($workers as $worker) {
                                                                 if ($worker->use_mail == $task->use_mail) {
                                                                     echo $worker->use_name;
                                                                 } ?>
                                                                 <?php }?>
                                                            </td>

                                                            <form action="<?=base_url()?>Project/update_taskProgress/<?= $task->tas_id?>" method="POST">
                                                                 <td>
                                                                <select name="tas_progress" class="form-control" id="#">
                                                                <option value = "<?= $task->tas_progress?>"><?= $task->tas_progress?></option>
                                                                <option value = "On going">On going</option>
                                                                <option value = "Done">Done</option>
                                                                <option value = "Blocked">Blocked</option>
                                                            </select> </td>
                                                        <td> <?= $task->tas_priority ?> </td>
                                                        <td> <?= $task->tas_deadline ?> </td>
                                                        <td>
                                                            <button btn btn-secondary type="submit" value="submit">
                                                                 submit
                                                            </button>
                                                            </form>
                                                        </td>
                                                    </tr> 
                                                    <?php }
                                             ?>
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
