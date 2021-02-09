<?php
/* Plugin Name: Carte visite
Description: Widget carte de visite
Author: Moi
Version: 1.0
 */
class CarteVisite_Plugin
{
    public function __construct()
    {
        include_once plugin_dir_path(__FILE__) . '/carteClass.php';
        register_activation_hook(__FILE__, array('carteclass', 'install'));
        register_deactivation_hook(__FILE__, array('carteclass', 'uninstall'));
        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
        add_action('admin_init', array($this, 'register_settings'));
        new carteClass();
    }

    public function add_admin_menu()
    {
        //on ajoute une page dans le menu administrateur
        add_menu_page('CarteVisite', 'Carte de visite', 'manage_options', 'carteVisite', array($this, 'menu_html'));
    }

    public function menu_html()
    {
        echo '<h1>' . get_admin_page_title() . '</h1>';
        global $wpdb;
        $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}cartevisite ORDER BY `id` DESC LIMIT 1;");
        $select = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}cartevisite");
        ?>
        <h2>Nouvelle carte de visite</h2>
        <form method="post" action="options.php">
            <div class="colonne">
                <label>Couleur : </label>
                <input type="color" value="<?php
echo get_option("cartevisite_couleur")
        ?>" name="cartevisite_couleur" />
            </div>
            <br><br>
            <div >
            <label>Nom : </label>
            <input type="text" name="cartevisite_nom" />
            </div>
            <br><br>
            <div>
            <label>Prenom : </label>
            <input type="text" name="cartevisite_prenom" />
            </div>
            <br>
            <label>Ordre du nom et prénom ?</label>
            <input type="radio" name="npOrdre" id="npOrdre" value="np"/>
            <label for="npOrdre">Nom/Prénom</label>
            <input type="radio" name="npOrdre" id="pnOrdre" value="pn" />
            <label for="pnOrdre">Prénom/Nom</label>
            <br><br>
            <div>
            <label>Adresse : </label>
            <input type="text" name="cartevisite_adresse" />
            <label>Afficher ?</label>
            <input type="radio" name="displayAdresse" id="ouiAdresse" value="true"/>
            <label for="ouiAdresse">Oui</label>
            <input type="radio" name="displayAdresse" id="nonAdresse" value="false" />
            <label for="nonAdresse">Non</label>
            </div>
            <br><br>
            <div>
            <label>Téléphone : </label>
            <input type="text" name="cartevisite_phone" />
            <label>Afficher ?</label>
            <input type="radio" name="displayTel" id="ouiTel" value="true"/>
            <label for="ouiTel">Oui</label>
            <input type="radio" name="displayTel" id="nonTel" value="false" />
            <label for="nonTel">Non</label>
            </div>
            <br><br>
            <h2>Carte de visite à afficher</h2>         
            <select name="cartes">
            <?php
                for ($i=0;$i<count($select);$i++)
                {
                    echo '<option value='.$select[$i]->id.'>'.$select[$i]->Nom.' '.$select[$i]->Prenom.'</option>';
                }
            ?>
            </select>
            <?php settings_fields('cartevisite_settings')?>
            <?php submit_button();?>
        </form>
        <?php
}

    public function register_settings()
    {
        register_setting('cartevisite_settings', 'cartevisite_couleur');
        register_setting('cartevisite_settings', 'displayAdresse');
        register_setting('cartevisite_settings', 'displayTel');
        register_setting('cartevisite_settings', 'npOrdre');
        global $wpdb;
        $wpdb->insert("{$wpdb->prefix}cartevisite", array("Nom" => $_POST["cartevisite_nom"], "Prenom" => $_POST["cartevisite_prenom"], "Adresse" => $_POST["cartevisite_adresse"], "Tel" => $_POST["cartevisite_phone"]));
    }
}
new CarteVisite_Plugin();
