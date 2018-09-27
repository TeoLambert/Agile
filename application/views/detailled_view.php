<div id="project_container">
    <h2> Detailled view of <?= $project->pro_name; ?></h2>
    <h4>Deadline : <?= $project->pro_deadline ?></h4>
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
    <div class="tasks">
    <h3>Tasks : </h3>  
    </div>
</div>
<div id="workers">
    <h3> Project team : </h3>
    <?php foreach($workers as $worker) { ?>
    <div class="use_name">
        <?= $worker->use_surname.' '.$worker->use_name; ?>
    </div>
    <div class="use_mail">
        <?= $worker->use_mail?>
    </div>
    <?php } ?>

    <?php if(unserialize($_SESSION['user_connected'])->use_mail === $project->use_mail) { ?>
    <div id="add_worker">
    <h3>Add a worker : </h3>
        <form name="add_worker" action="<?=base_url()?>Project/add_worker" method="post">
            <input type="hidden" name="pro_id" value="<?=$project->pro_id?>">
            <label for="use_mail">E-mail : </label>
            <input type="mail" name="use_mail">
            <input type="submit" name="submit" value="Add this worker">
        </form>
    </div>
    <div id="add_task">
        <h4><a href="<?=base_url()?>Project/add_task/<?=$project->pro_id?>">Add a task</a></h4>
    </div>
    <?php } ?>
</div>
