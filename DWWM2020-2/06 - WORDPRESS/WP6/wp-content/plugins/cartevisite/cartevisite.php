<?php
/*
Plugin Name: Carte de visite
Description: Affiche une carte de visite
Author: MaximeCgn
Version: 1.0
 */

class CarteVisite_Plugin
{
    public function __contrsuct()
    {
        include_once plugin_dir_path(__FILE__) . '/carteclass.php';
        new carteclass();
        //Création de table à l'installation
        register_activation_hook(__FILE__, array('carteclass', 'install'));
        //Drop table en cas de désinstallation
        register_deactivation_hook(__FILE__, array('carteclass', 'uninstall'));
        //Ajoute un menu
        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
    }

    //Création de menu
    public function add_admin_menu()
    { //on ajoute une page dans le menu administrateur
        add_menu_page('Carte de Visite Settings', 'Carte de visite plugin', 'manage_options', 'cartevisite', array($this, 'menu_html'));
    }

    //contenu du menu
    public function menu_html()
    {
        echo '<h1>' . get_admin_page_title() . '</h1>';
        ?>
        <form method="post" action="options.php">
        <?php settings_fields('cartevisite_settings')?>
            <label for="cartevisite_nom">Nom :</label>
            <input type="color" name="cartevisite_nom" value="<?php echo get_option("cartevisite_nom") ?>"/>
            <label for="cartevisite_email">email :</label>
            <input type="color" name="cartevisite_email" value="<?php echo get_option("cartevisite_email") ?>"/>
            <label for="cartevisite_tel">tel :</label>
            <input type="color" name="cartevisite_tel" value="<?php echo get_option("cartevisite_tel") ?>"/>
            <label for="cartevisite_adresse">adresse :</label>
            <input type="color" name="cartevisite_adresse" value="<?php echo get_option("cartevisite_adresse") ?>"/>
            <?php submit_button();?>
            </form>
            <?php
    }

    
}
new CarteVisite_Plugin();
