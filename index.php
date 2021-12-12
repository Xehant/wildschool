<?php
 require_once 'server.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Images</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <script type="text/javascript" src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/solid.min.css">
</head>
<header>
  <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

<!-- Main section -->
<main>
  
  <!-- New member form -->
  <h2>Ajouter un(e) Argonaute</h2>
  <form class="new-member-form" method="post">
    <img src="https://www.makeleio.gr/wp-content/uploads/2020/11/argo_88920632fdecd8555feb7bec2d56f0e8.jpg">
    <label for="name">Nom de l&apos;Argonaute</label>
    <input id="name" name="name_member" type="text" placeholder="Charalampos" autocomplete="off" />
    <button type="submit" name="submit">Envoyer</button>
  </form>
  <?php $reponse_page_site_add = $bdd->query("SELECT * FROM member");?>
  <!-- Member list -->
  <h2>Membres de l'équipage</h2>
  <section class="member-list">
<!--     <div class="member-item">Eleftheria</div>
    <div class="member-item">Gennadios</div>
    <div class="member-item">Lysimachos</div> --> 
    <?php while ($donnees = $reponse_page_site_add->fetch()) : ?>
    <tr>
        <td><?php echo $donnees['name_member'];?></td>
        </td>
        <br>
    </tr>
<?php endwhile ; ?> 

  </section>
</main>
<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>
<?php
if (isset($_POST['submit'])){
                $name_member =$_POST['name_member'];
                $bdd->exec("INSERT INTO member(name_member) VALUES('$name_member')"); }
?>