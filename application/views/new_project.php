<div class="col-lg-9">
                <div class="card">
                    <div class="card-header"> CREATE PROJECT </div>
                    <div class="card-body">
                        <form action="<?=base_url()?>/Project/project_creation" method="POST">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <label for="projectName"> Project Name: </label>
                                        <input type="text" name="pro_name" id="projectName" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="projectDeadline"> Project Deadline: </label>
                                        <input type="date" name="pro_deadline" id="projectDeadline" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-lg-4">
                                        <label for="customerName"> Customer Name: </label>
                                        <input type="text" name="pro_customer" id="customerName" class="form-control" required>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="customerPhone"> Customer Phone: </label>
                                        <input type="text" name="pro_customer_tel" id="customerPhone" class="form-control" required>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="customerEmail"> Customer E-mail: </label>
                                        <input type="email" name="pro_customer_mail" id="customerEmail" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="projectDescription"> Project Description: </label>
                                <textarea class="form-control" name="pro_desc" id="projectDescription" cols="30" rows="3" required></textarea>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" name="submit" class="btn btn-outline-success"> Create Project </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>