<?php
class cartewidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('cartevisite', 'Carte visite', array('description' => 'Un plug-in qui écrit une carte de visite'));
    }
    public function widget($args, $instance)
    {
        // formulaire afficher à l'écran pour l'utilisateur
        // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées
        echo $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title', $instance['title']);
        echo $args['after_title'];
        // corps du widget
        global $wpdb;
        $row = $wpdb->query("SELECT * FROM {$wpdb->prefix}cartevisite WHERE `id`=". $_POST['cartes'].";");
        $couleur = get_option('cartevisite_couleur', 'black');
        $nom = $row->Nom;
        $prenom = $row->Prenom;
        $adresse = $row->Adresse;
        $phone = $row->Tel;

        ?>
        <h2>Carte de visite</h2>
        <div class="carte">
        <div class="carteRecto">
        <?php
        if (get_option('npOrdre') == "np" || get_option('npOrdre') == "") {
            echo '
            <div class="logo"><img src="http://local/DWWM2020-2/DWWM2020-2/06%20-%20WORDPRESS/WP6/wp-content/uploads/2021/02/bitcoin.png"></div>
            <div class="colonne centrer">
            <div class="centrer" style="color:' . $couleur . '">Nom : ' . $nom . '</div>
            <div class="centrer" style="color:' . $couleur . '">Prenom : ' . $prenom . '</div></div></div>';
        } else {
            echo '
            <div class="logo"><img src="http://local/DWWM2020-2/DWWM2020-2/06%20-%20WORDPRESS/WP6/wp-content/uploads/2021/02/bitcoin.png"></div>
            <div class="colonne centrer">
            <div class="centrer" style="color:' . $couleur . '">Prénom : ' . $prenom . '</div>
                    <div class="centrer" style="color:' . $couleur . '">Nom : ' . $nom . '</div></div></div>';
        }
        echo '<div class="colonne carteVerso centrer">';
        
        if (get_option('displayAdresse') == "true" || get_option('displayAdresse') == "") {
            echo '<div class="centrer adresse" style="color:' . $couleur . '">Adresse :' . $adresse . '</div>';
        }
        if (get_option('displayTel') == "true" || get_option('displayTel') == "") {
            echo '<div class="centrer tel" style="color:' . $couleur . '">Téléphone :' . $phone . '</div>';
        }
        echo'
        </div>
        <div class="divFleche"><img class="fleche" src="http://local/DWWM2020-2/DWWM2020-2/06%20-%20WORDPRESS/WP6/wp-content/uploads/2021/02/fleche.png"></div>
        ';
        ?>
            </div>

        <?php
echo $args['after_widget'];
    }

    public function form($instance)
    // formulaire de gestion des paramètres pour le module d'administration
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:');?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php
}
}