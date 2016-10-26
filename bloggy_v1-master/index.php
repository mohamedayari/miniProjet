<?php require_once("header.inc.php") ;
					  include("../classes/Article.php");
					  
?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Statistiques</h2>
                    
					<div class="alert alert-success">
					<?php 
                      include("../classes/Contact.php");
                      $con = new Contact();	
                      $nbc = $con->nbcon();

                      $art = new Article();	
                      $nbart = $art->nbarticle();
                   	?>
						Nombre d'articles : <?php echo $nbart ?>
					</div>

					<div class="alert alert-success">
						Nombre de commentaires : <?php echo $nbc ?>
					</div>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>