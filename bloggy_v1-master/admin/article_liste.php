<?php require_once("header.inc.php");
    include("../classes/Article.php");
 ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<h2 class="page-title col-md-10">Article</h2>
   	                <a href="article_modifier.php" class="btn btn-primary btn-ls col-md-2 ">Ajouter</a>
					<div class="alert col-md-12">
					<?php
					if (isset($_GET['retour']))
					{  
					    ?>
						<div class="alert alert-success">
						  Merci. Votre message intitulé "<?php echo $_GET['titre'] ?>" a bien été enregistrée.
						</div>
						<?php

					} 
					if (isset($_GET['retoursup']))
					{  
					    ?>
						<div class="alert alert-danger">
						  La ligne est supprimée
						</div>
						<?php

					} 
			     if (isset($_GET['retourm']))
					{  
					    ?>
						<div class="alert alert-success">
						  Merci, Votre message : "<?php echo $_GET['titre'] ?>" a été Modifié.
						</div>
						<?php

					} 
					?>
              </div>
					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px">#</th>
								<th>Titre</th>
								<th>Texte</th>
								<th>Date</th>
								<th width="100px"></th>
							</tr>
						</thead>
						<!-- Début de la liste -->
					<?php 
                      $art = new Article();	
                      $liste = $art->liste();
                      foreach($liste as $data )
                      {
                      	?>
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
							<tr>
								<td><?php echo $data->_id; ?></td>
								<td><?php echo $data->_titre; ?></td>
								<td><?php echo $data->_texte; ?></td>
								<td><?php echo $data->_d_ajout; ?></td>
								<td>
									<a href="javascript:confirmDelete('article_supprimer.php?id=<?php echo $data->_id; ?>')" class="btn btn-danger btn-xs">Suprimer</a>
									<a href="article_modifier.php?id=<?php echo $data->_id; ?>" class="btn btn-info  btn-xs">Modifier</a>									
								</td>
							</tr>
							<!-- ** Fin de la boucle ** -->

						</tbody>
						<!-- Fin de la liste -->
                     <?php  } ?>						
					</table>

				</div>

			</div>
		</div>
<script>
            function confirmDelete(delUrl) {
              if (confirm("Voulez vous vraiment supprimer cette cat ? ?")) {
               document.location = delUrl;
             }
           }
</script>
		<?php require_once("footer.inc.php"); ?>
