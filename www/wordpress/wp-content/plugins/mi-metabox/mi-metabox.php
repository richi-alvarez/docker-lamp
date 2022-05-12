<?php
/*
Plugin Name: mi-metabox
Plugin URI: programadornovato.com
Description: Este pluging agrega un metabox en el post
Version: 1.0.0
Author: Eugenio Chaparro
Author URI: programadornovato.com
License: GPLv2
*/
// Agregamos la funcionalidad de de metabox atravez de la funcion agregar_boxes
add_action("add_meta_boxes", "agregar_boxes");
if(!function_exists("agregar_boxes")){
    function agregar_boxes(){
        //add_meta_box($id     , $title         , $callback       , $screen);
        add_meta_box("texto1"  , "Agregar texto ejemplo", "agregar_texto1", "post");

    }
}
//Dibuja un input text en el area de los post
if(!function_exists("agregar_texto1")){
    function agregar_texto1(){
        ?>
        <input type="text" name="texto1" id="texto1" value="<?php echo cargar_dato(); ?>"/>
        <?php
    }
}
//Lee los datos (si existen) del metabox desde la BD
if(!function_exists("cargar_dato")){
    function cargar_dato(){
        //Recuperamos todos los datos perzonalizados de este post
        $values=  get_post_custom($post->ID);
        //Recuperamos solo el campo texto1
        $campo =  esc_attr($values["texto1"][0]);
        //Retornamos el valor del campo recuperado
        return $campo;
    }
}
// En el evento save_post guardamos el metabox atravez de la funcion guarda_post
add_action("save_post", "guarda_post");
if(!function_exists("guarda_post")){
    function guarda_post($post_id){

        //Evitamos el autoguardado
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }
        // Revisamos que el usuario tenga permisos de editar el post
        if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {

            if (!current_user_can('edit_page', $post_id)) {
                return;
            }
        } else {

            if (!current_user_can('edit_post', $post_id)) {
                return;
            }
        }
        //Sanitizamos el campo para evitar una injection de codigo
        $dato = sanitize_text_field($_POST["texto1"]);
        //Actualizamos el dato
        update_post_meta($post_id, 'texto1', $dato);
    }
}
//Pone el valor del campo en el fronted
add_filter("the_content", "poner_texto1");
if(!function_exists("poner_texto1")){
    function poner_texto1($contenido){
        //Si es un post singular
        if(is_singular("post")){
            return $contenido."</br> <strong>Campo nuevo=</strong>".cargar_dato();
        }else{
            return $contenido;
        }

    }
}