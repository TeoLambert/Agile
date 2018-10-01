<style>
        #registration{
            margin-top: 100px;
        }
    </style>
    
    <div class="row" id="registration">
        <div class="col-lg-6 offset-lg-3 card-top-position">
            <div class="card bg-light mb-3">
                <div class="card-header"> CREATE ACCOUNT </div>
                <div class="card-body">
                    <form action="<?=base_url()?>Registration/insert_user" method="POST">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <input type="text" name="" class="form-control" placeholder=" First name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="" class="form-control" placeholder=" Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="" class="form-control" placeholder="E-mail Address">
                        </div>
                        <div class="form-group">
                            <input type="password" name="" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success btn-block"> REGISTER </button>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-lg-6">
                            <a class="btn btn-outline-info btn-sm" href="<?=base_url()?>"> BACK </a>
                        </div>

                        <div class="col-lg-6 text-right">
                            <a class="btn btn-outline-info btn-sm" href="<?=base_url()?>Registration/user_login"> LOGIN </a> </span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
