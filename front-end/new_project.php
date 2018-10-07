<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Create Project </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        body{
            background-color:#dce0db;
        }
        .navbar{
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="home.html"> PROJECTS TOOL </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <ul class="navbar-nav mr-auto">
                </ul> -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenunotify" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell"></i> <sup> <span class="badge badge-danger"> 5 </span> </sup>
                        </a>
                                
                        <div class="dropdown-menu" aria-labelledby="dropdownMenunotify">
                            <a class="dropdown-item" href="#"> Notification one </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"> Notification two </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"> Notification three </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> Teo Lambert
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"> User Profile </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.html"> Logout </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                        <a class="list-group-item list-group-item-action" href="home.html"> <i class="fas fa-project-diagram"></i> Projects </a>
                        <a class="list-group-item list-group-item-action" href=""> <i class="fas fa-tasks"></i> My Tasks </a>
                </div>
            </div>
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
                                <button type="submit" class="btn btn-outline-success"> Create Project </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.js"> </script>
</body>
</html>