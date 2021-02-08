<?php
//on inclu la definition du widget
include_once plugin_dir_path(__FILE__) . '/cartewidget.php';

class carteclass
{
    public function __construct()
    {
        // on déclare le widget
        add_action('widgets_init', function () {register_widget('Cartewidget');});
        //Chargement du CSS du plugin
        add_action('wp_enqueue_scripts', array($this, 'persoCSS'), 15);
        //Groupe d'options
        add_action('admin_init', array($this, 'register_settings'));
    }

    //Chargement du CSS du plugin
    public function persoCSS()
    {
        wp_enqueue_style('Cartecss', plugins_url('cartevisite/style.css'));
    }

    //Création de table
    public static function install() 
    {//méthode déclenchée à l'activation du plug-in 
        global $wpdb;
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}cartevisite_info (id INT AUTO_INCREMENT PRIMARY KEY, nom VARCHAR(255) NOT NULL, email VARCHAR(100) NOT NULL, tel VARCHAR(20) NOT NULL,adresse VARCHAR(250) NOT NULL);"); 
    }

    //Drop table en cas de désinstallation
    public static function uninstall() 
    {//méthode déclenchée à la suppression du module 
        global $wpdb; 
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}cartevisite_info;"); 
    }

    //Options du plugin
    public function register_settings() { 
        register_setting('cartevisite_settings', 'cartevisite_nom');
        register_setting('cartevisite_settings', 'cartevisite_email'); 
        register_setting('cartevisite_settings', 'cartevisite_tel'); 
        register_setting('cartevisite_settings', 'cartevisite_adresse'); 
    }
}