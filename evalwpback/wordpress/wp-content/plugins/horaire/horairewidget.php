<?php

class horairewidget extends WP_Widget
{
	public function __construct()
    {
        parent::__construct('horaire', 'Horaire', array('description' => 'Un plug-in qui affiche les horaire'));
    }
	public function widget($args, $instance)
	{ // formulaire afficher à l'écran pour l'utilisateur
	
		// on appel les méthodes standard au cas où un autre plug-in les aurait surchargées
		echo $args['before_widget'];
		echo $args['before_title'];
		echo apply_filters('widget_title', $instance['title']);
		echo $args['after_title'];
		// corps du widget
		//Je récupère les informations sur les jours
		$jour = get_option('horaire_jour', '1');
		global $wpdb;
		$row=$wpdb->get_row("SELECT * FROM {$wpdb->prefix}horaire WHERE `id`=$jour;");
		$table=$wpdb->get_results("SELECT * FROM {$wpdb->prefix}horaire;");
		$jourChoisi=$row->id;
		$display = get_option('horaire_display', 'on');
		 // on ne met rien dans action, celle-ci sera definie dans le construct
		echo '
		<fieldset>
		<div class="colonne">';
			for ($i=$jourChoisi-1;$i<count($table);$i++)
			{
				if ($table[$i]->id!="4" || $display=="")
				{
					echo '
					<div class="ligne">
						<div class="jour">'.$table[$i]->jour.'</div>
						<div class="matin">'.$table[$i]->matin.'</div>
						<div class="soir">'.$table[$i]->soir.'</div>
					</div>
					';
				}
			}
		echo '
		</div>
		</fieldset>
		';
		echo $args['after_widget'];
	}	
}