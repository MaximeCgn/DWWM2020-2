<?php
//on inclu la definition du widget
include_once plugin_dir_path( __FILE__ ).'/horairewidget.php';

class horaireclass{
	public function __construct(){
		// on déclare le widget
		add_action('widgets_init', function(){register_widget('horairewidget');});
		add_action('wp_enqueue_scripts',array($this,'persoCSS'),15);
		//on ajoute l'action pour l'enregistrement des options dans la page parametre
		add_action('admin_init', array($this, 'register_settings'));
		
	}
	function persoCSS()
	{
		wp_enqueue_style('Horairecss', plugins_url('horaire/design.css'));
	}
	public static function install()
	{//méthode déclenchée à l'activation du module
		global $wpdb;
		$wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}horaire (id INT AUTO_INCREMENT PRIMARY KEY, jour VARCHAR(10) NOT NULL, matin VARCHAR(20) NOT NULL, soir VARCHAR(20) NOT NULL);");
		$wpdb->insert("{$wpdb->prefix}horaire",array("jour"=>"Lundi","matin"=>"8h30-12h30","soir"=>"13h30-17h30"));
		$wpdb->insert("{$wpdb->prefix}horaire",array("jour"=>"Mardi","matin"=>"8h30-12h30","soir"=>""));
		$wpdb->insert("{$wpdb->prefix}horaire",array("jour"=>"Mecredi","matin"=>"8h30-12h30","soir"=>"13h30-17h30"));
		$wpdb->insert("{$wpdb->prefix}horaire",array("jour"=>"Jeudi","matin"=>"Fermeture","soir"=>""));
		$wpdb->insert("{$wpdb->prefix}horaire",array("jour"=>"Vendredi","matin"=>"8h30-12h30","soir"=>"13h30-17h30"));
		$wpdb->insert("{$wpdb->prefix}horaire",array("jour"=>"Samedi","matin"=>"","soir"=>"13h30-17h30"));
		$wpdb->insert("{$wpdb->prefix}horaire",array("jour"=>"Dimanche","matin"=>"8h30-12h30","soir"=>""));
	}
	public static function uninstall()
	{//méthode déclenchée à la suppression du module
		global $wpdb;
		$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}horaire;");
	}
	public function register_settings()
	{
		// on definit les elements de parametrage
		register_setting('horaire_settings', 'horaire_jour');
		register_setting('horaire_settings', 'horaire_display');
	}
}