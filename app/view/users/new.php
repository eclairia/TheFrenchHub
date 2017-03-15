<?php include_once("app/view/layout/footer_back.inc.php"); ?>

    <form method="POST" action="?module=users&action=new" enctype="multipart/form-data" id="form_user">	<br><br>
        <label>First name: </label><input type="text" name="user_first_name"><br><br>
        <label>Last name: </label><input type="text" name="user_last_name"><br><br>
        <input type="radio" name="user_civility" value="M"><label>M</label><br><br>
        <label></label><input type="radio" name="user_civility" value="Mme"><label>Mme</label><br><br>
        <label>Birth date: </label><input type=date name="user_birth"><br><br>
        <label>Email: </label><input type="email" name="user_mail"><br><br>
        <label>Login: </label><input type="text" name="user_login"><br><br>
        <label>Password: </label><input type="password" name="user_password"><br><br>
        <label>Avatar: </label><input type="file" name="user_avatar"><br><br>
        <input type="hidden" name="user_level" value="0">
        <input type="submit">
    </form>

<?php include_once("app/view/layout/footer_back.inc.php"); ?>
