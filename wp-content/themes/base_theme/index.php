<!-- Contenu indirect du site c'est le Loop WordPress qui va déterminer ce qui doit être affiché dans l’index. -->
<?php get_header(); ?> <!-- affiche le header.php --> 

<?php include(TEMPLATEPATH . '/navbar.php'); ?>

<!-- loop wordpress -->
<div id="content">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>"> <!-- Attribut un id à chaque article -->
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<!-- 				<p class="postmetadata">   <?php // the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php // the_category(', ') ?> | <?php // comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php // edit_post_link('Editer', ' &#124; ', ''); ?>   </p> -->
<!--				A décommenter si on veut afficher l'auteur,la catégorie, les commentaires etc .. -->
				<div class="post_content">
					<?php the_content(); ?> <!--Affiche le contenu de l'article-->
				</div>
			</div>
		<?php endwhile; ?> 
	<?php endif; ?>
</div>

<!--Pour afficher une page différente mettre cette ligne à la place-->
<?php  //get_template_part('page'); ?>

<?php get_sidebar(); // Va afficher le contenu du fichier sidebar ?> 
<?php get_footer(); ?>


</div> <!-- fermeture de la div page du header -->
</body> <!-- Fermeture des balises ouvertes dans le header.php -->
</html>