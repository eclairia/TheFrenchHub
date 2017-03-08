  <form method="POST" action="?module=articles&action=new" enctype="multipart/form-data" id="form_post">
    <table>
        <h2>Créer un article</h2><br>

        <tr>
          <td><label for="article_title">Titre: </label></td>
          <td><input name="article_title" type="text" maxLenght="200" required /></td>
        </tr>

        <tr>
          <td><label for="article_content">Contenu: </label></td>
          <td><textarea name="article_content" rows="10" cols="100" required ></textarea></td>
        </tr>

        <tr>
          <td><label for="article_author">Auteur: </label></td>
          <td><input name="article_author" type="text" value="<?= $_SESSION["admin"]["admin_login"]; ?>" maxLenght="200" required /></td>
        </tr>

        <tr>
          <td><label for="article_file">Photo: </label></td>
          <td><input name="article_file" type="file" /></td>
          <td><input type="hidden" name="MAX_FILE_SIZE" value="12345"></td>
        </tr>            

        <tr>
          <td></td>
          <td><input value="Enregistrer" type="submit" /><input type="reset" value="effacer" /></td>
        </tr>
    </table>
  </form>

<?php include("app/view/layout/footer.inc.php") ?>