<!-- Affiche notamment l'ensemble des widgets -->

<div class="sidebar">
	<ul>
		<li id="search"><?php //include(TEMPLATEPATH . '/searchform.php'); ?></li> <!--Affichera la barre de recherche searchform.php -->
		<li id="calendar"><h2><!-- Calendrier --></h2>   <?php //get_calendar(); ?>   </li> <!--Affichera le calendrier-->
		<li><h2><!-- Categories --></h2>   <ul> <?php //wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?> </ul></li> <!--Affichera les catégories-->
	</ul>
	<?php //wp_list_pages('title_li=<h2>Pages</h2>'); ?> <!--Affichera la liste des pages-->
</div>