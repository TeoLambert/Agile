<?php var_dump($user);?>
<div id="acc_management">
<h2>Modify informations</h2>
    <form name="acc_update" action="<?php echo base_url();?>/Registration/account_update" method="post">
    <div id="acc_mail">
        <label for="use_mail">E-mail : </label>
        <input type="email" name="use_mail" value="<?= $user->use_mail;?>"> 
    </div>
    <div id="acc_name">
        <label for="use_name">Name : </label>
        <input type="text" name="use_name" value="<?php echo $user->use_name;?>">
    </div>
    <div id="acc_surname">
        <label for="use_surname">Surname : </label>
        <input type="text" name="use_surname" value="<?php echo $user->use_surname;?>">
    </div>
    <div id="submit">
        <input type="submit" name="submit" value="Save the modifications">
    </div>
    </form>
</div>
<div id="change_password">
    <h2>Modify the password</h2>
    <form name="change_pass" action="<?php echo base_url();?>/Registration/modify_password" method="post">
    <div id="old_pass">
        <label for="use_pass">Enter the old password : </label>
        <input type="password" name="old_pass">
    </div>
    <div id="new_pass">
        <label for="new_pass"> Enter the new password : </label>
        <input type="password" name="new_pass">
    </div>
    <div id="verify_pass">
        <label for="verify_pass">Verify the new password : </label>
        <input type="password" name="verify_pass">
    </div>
    <div id="submit_pass">
        <input type="submit" name="change_pass" value="Save the new password">;
    </div>
</div>