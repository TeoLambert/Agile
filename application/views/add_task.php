<h2> Add a task for Project <?=$project->pro_name?> : </h2>
<div id="add_task">
    <form name="add_task" action="<?=base_url()?>Project/task_added" method="post">
        <input type="hidden" name="pro_id" value="<?=$project->pro_id?>">
        <div id="tas_name">
            <label for="tas_name">Task name: </label>
            <input type="text" name="tas_name">
        </div>
        <div id="tas_deadline">
            <label for="tas_deadline">Task deadline</label>
            <input type="date" name="tas_deadline">
        </div>
        <div id="tas_desc">
            <label for="tas_desc">Task description</label>
            <textarea name="tas_desc"></textarea>
        </div>
        <div id="submit">
            <input type="submit" name="submit" value="Create the task">
        </div>
</div>
