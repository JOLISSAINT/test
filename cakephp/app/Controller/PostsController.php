<?php
class PostsController extends AppController{
    // A l'arriver sur la page 
    public function index() {
        // Fait rien pour l'instant
    }
  
    // Permet de passer le paramètre de langue entre les pages
    function view($id){
        $this->post->id = $id;
        $d['post'] = $this->post->read();
        $this->set($d);
    }
}

?>