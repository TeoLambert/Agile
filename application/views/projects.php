<h2> My projects </h2>
<?php 
foreach($projects as $project)
{
    ?>
    <div class='project'>
        <input type="hidden" name="pro_id" value="<?=$project->pro_id?>">
        <div class="pro_name">
           <h4> <?= $project->pro_name?> </h4>
        </div>
        <div class="pro_deadline">
            Deadline : <?= $project->pro_deadline?>
        </div>
        <div class="pro_customer">
            Customer : <?=$project->pro_customer?>
        </div>
        <div class="pro_customer_tel">
            Customer phone : <?=$project->pro_customer_tel?>
        </div>
        <div class="pro_customer_mail">
            Customer mail : <?=$project->pro_customer_mail?>
        </div>
        <div class="pro_desc">
            Project description : <?=$project->pro_desc?>
        </div>
        <div class="pro_owner">
            Project owner : <?=$project->use_mail?>
        </div>
    <?php 
} ?>

<div id="new_project">
    <a href="<?=base_url()?>/Project/new_project">Create a new project</a>
</div>