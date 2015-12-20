<a id="lienAnn" href="../controller/lienAnnonce.php?ref=<?php echo $ann->reference; ?>">
<section class="annonces">
		
	<p>
		<?php echo "$ann->reference"; ?>
	</p>	
	
	<img src= "<?php echo "$ann->image"; ?>" width="220px" height="150px" />

		<div class="produit">
			
		<h2> <?php echo "$ann->titre"; ?> </h2>
		<h3>publiée par <?php
		                        echo "$adh->prenom";
	                	?> 
		, le 02/07/2015</h3>
		
		<div class="description">
				<?php   echo "$ann->description";
						echo "$ann->frequence";
						echo "$ann->support";
				        echo "$ann->region";
				?>
		</div>

		<div class="prix"><?php echo "$ann->prix"; ?> €</div>
	</div>
		
</section>
</a>