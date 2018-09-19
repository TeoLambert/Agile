<h2>Create a new project</h2>
<div id="project">
    <form name="new_project" method="post" action="<?=base_url()?>/Project/project_creation">
    <div id="pro_name">
        <label for="pro_name">Project name : </label>
        <input type="text" name="pro_name">
    </div>
    <div id="pro_deadline">
        <label for="pro_deadline">Deadline : </label>
        <input type="date" name="pro_deadline">
    </div>
    <div id="pro_customer">
        <label for="pro_customer">Customer name : </label>
        <input type="text" name="pro_customer">
    </div>
    <div id="pro_customer_tel">
        <label for="pro_customer_tel">Customer phone : </label>
        <input type="text" name="pro_customer_tel">
    </div>
    <div id="pro_customer_mail">
        <label for="pro_customer_mail">Customer mail : </label>
        <input type="mail" name="pro_customer_mail">
    </div>
    <div id="pro_desc">
        <label for="pro_desc">Project description : </label>
        <textarea name="pro_desc"></textarea>
    </div>
    <div id="submit">
        <input type="submit" name="submit" value="Create the project">
    </div>
</div>

