<h2> My projects </h2>
<div class="container">


<?php 
foreach($projects as $project)
{
    ?>
    <div class="project">  
        <table class="table">
            <thead>
                <tr>
                    <th><h4> <a href="<?=base_url()?>Project/detailled_project/<?=$project->pro_id?>"><?= $project->pro_name?> </a></h4></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Deadline</th>
                    <td><?= $project->pro_deadline?></td>
                </tr>
                <tr>
                    <th>Customer</th>
                    <td><?=$project->pro_customer?></td>
                </tr>
                <tr>
                    <th>Customer phone</th>
                    <td><?=$project->pro_customer_tel?></td>
                </tr>
                <tr>
                    <th>Customer mail</th>
                    <td><?=$project->pro_customer_mail?></td>
                </tr>
                <tr>
                    <th>Project description</th>
                    <td><?=$project->pro_desc?></td>
                </tr>
                <tr>
                    <th>Project owner</th>
                    <td><?=$project->use_mail?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php 
} ?>


    <div id="new_project">
        <a href="<?=base_url()?>/Project/new_project"><button class="btn btn-primary">Create a new project</button></a>
    </div>
</div>