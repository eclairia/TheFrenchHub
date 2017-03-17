  <form method="POST" action="?module=projects&action=new" id="form_project">
    <table>
        <h2>Créer un projet</h2><br>

        <tr>
          <td><label for="project_name">Project name: </label></td>
          <td><input name="project_name" type="text" maxLenght="200" required /></td>
        </tr>

        <tr>
          <td><label for="project_nb_members">Project nb members: </label></td>
          <td><input type="text" name="project_nb_members" required></td>
        </tr>

        <tr>
          <td><label for="project_author">Auteur: </label></td>
          <td><input name="project_author" type="text" value="<?= $_SESSION['user']['user_login']; ?>" required /></td>
        </tr>

        <tr>
          <td></td>
          <td><input value="Enregistrer" type="submit" /><input type="reset" value="effacer" /></td>
        </tr>
    </table>
  </form>

<?php include("app/view/layout/footer.inc.php") ?>