<style>
        #login{
            margin-top: 100px;
        }
    </style>
<div class="row" id="login">
        <div class="col-lg-4 offset-lg-4 card-top-position">
            <div class="card bg-light mb-3">
                <div class="card-header"> LOGIN </div>
                <div class="card-body">
                    <form action="<?=base_url()?>Registration/user_haslogged" method="POST">
                        <div class="form-group">
                            <input type="text" name="use_mail" class="form-control" placeholder="Enter username please">
                        </div>
                        <div class="form-group">
                            <input type="password" name="use_pass" class="form-control" placeholder="Enter password please">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success btn-block"> LOGIN </button>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="btn btn-outline-info btn-sm" href="<?=base_url()?>"> BACK </a>
                        </div>

                        <div class="col-lg-6 text-right">
                            <a class="btn btn-outline-info btn-sm" href="<?=base_url()?>Registration/account_creation"> CREATE AN ACCOUNT </a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>