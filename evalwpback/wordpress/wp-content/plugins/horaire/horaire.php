<?php
/*
Plugin Name: Horaire
Description: Affiche l'horaire du magasin
Author: Maxime
Version: 1.0
*/

class Horaire_Plugin{
	public function __construct(){
		include_once plugin_dir_path(__FILE__).'/horaireclass.php';
		new horaireclass();
		//on crée une gestion d'événement sur activation du plug-in pour créer la table en base de données
		register_activation_hook(__FILE__, array('horaireclass', 'install'));
		register_uninstall_hook(__FILE__, array('horaireclass', 'uninstall'));
		// on ajoute une entrée dans le menu administrateur
		add_action('admin_menu', array($this, 'add_admin_menu'),20);
		
	}
	public function add_admin_menu()
	{	//on ajoute une page dans le menu administrateur
		add_menu_page('Horaire', 'Horaire plugin', 'manage_options', 'horaire', array($this, 'menu_html'));
	}
	public function menu_html()
	{// formulaire de gestion des paramètres pour le module d'administration
	
		echo '<h1>'.get_admin_page_title().'</h1>';
		echo '<form method="post" action="options.php">';
		settings_fields('horaire_settings'); 
		echo '<label>Premier jour de la semaine</label>';
		echo '<select name="horaire_jour"/>';
		echo '<option value="1">Lundi</option>';
		echo '<option value="2">Mardi</option>';
		echo '<option value="3">Mercredi</option>';
		echo '<option value="4">Jeudi</option>';
		echo '<option value="5">Vendredi</option>';
		echo '<option value="6">Samedi</option>';
		echo '<option value="7">Dimanche</option>';
		echo '</select><br><br>';
		echo '<label>Afficher tous les jours</label>';
		echo '<input type="checkbox" name="horaire_display"/>';
		submit_button();
		echo '</form>';
	}
}
new Horaire_Plugin();
