<?php
class cartewidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('cartevisite', 'Carte de Visite', array('description' => 'Affiche une carte de visite')); 
    }

    public function widget($args, $instance)
    {// formulaire afficher à l'écran pour l'utilisateur 
        
    // on appel les méthodes standard au cas où un autre plug-in les aurait surchargées 
    echo $args['before_widget']; 
    echo $args['before_title']; 
    echo apply_filters('widget_title', $instance['title']); 
    echo $args['after_title']; 
    // corps du widget

    $nom = get_option('cartevisite_nom', 'John Doe');
    $email= get_option('cartevisite_email', 'example@test.com');
    $tel= get_option('cartevisite_tel', '01 23 45 67 90');
    $adresse=get_option('cartevisite_adresse', 'Your adresse');
    ?>
    <div id="test" style="color:<?php echo $couleur;?>">Carte de visite</div>
    <div id="carteVisite" class="colonne">
        <div id="nom"><?php echo $nom ?></div>
        <div id="email"><?php echo $email ?></div>
        <div id="tel"><?php echo $tel ?></div>
        <div id="adresse"><?php echo $adresse ?></div>
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
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /> 
            </p> 
            <?php 
    }

}