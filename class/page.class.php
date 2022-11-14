<?php
    class Page{
        private $header = '';
        private $footer = '';
        private $corps = '';

        // Constructeur
        public function __construct($show_interface=true){
            if($show_interface) {
                $this->build_header();
                $this->build_footer();
            }else{
                $this->header = '<body>';
                $this->footer = '</body>';
            }
        }

        public function build_content($html=''){
            $this->corps = $html;
        }

        public function show(){
            echo $this->header;
            echo $this->corps;
            echo $this->footer;
        }

        private function build_header(){
            $this->header = '<body >';
            $this->header.= '    <div>';
            // Menu du site avec tous les liens vers les pages

            // Accueil
           // if(is_user_got_access('home')) {
                $this->header .= '       <a href="index.php">';
                $this->header .= '           Acceuil';
                $this->header .= '       </a>';
         //   }

            // Menu Galerie
          //  if(is_user_got_access('galerie_photo')) {
                $this->header .= '       <a href="index.php?page=galerie_photo">';
                $this->header .= '           Galerie photo';
                $this->header .= '       </a>';
          //  }

            // Menu Prestations
           // if(is_user_got_access('prestation')) {
                $this->header .= '       <a href="index.php?page=prestation">';
                $this->header .= '           Prestation';
                $this->header .= '       </a>';
          //  }

            // Menu administration_produits
           // if(is_user_got_access('administration_produits')) {
                $this->header .= '       <a href="index.php?page=administration_produits">';
                $this->header .= '           Administration Produit';
                $this->header .= '       </a>';
           // }

            // Menu administration_clients
           // if(is_user_got_access('administration_clients')) {
                $this->header .= '       <a href="index.php?page=administration_clients">';
                $this->header .= '           Administration Client';
                $this->header .= '       </a>';
           // }
             // Menu administration_photos
           // if(is_user_got_access('administration_photos')) {
            $this->header .= '       <a href="index.php?page=administration_photos">';
            $this->header .= '           Administration Client';
            $this->header .= '       </a>';
       // }
           // Menu listing_produit
           // if(is_user_got_access('listing_produit')) {
            $this->header .= '       <a href="index.php?page=listing_produits">';
            $this->header .= '           Listing produit';
            $this->header .= '       </a>';
       // }

            $this->header.= '    </div>';
            $this->header.= '    <div>';

        }

        private function build_footer(){
            $this->footer = '    </div>';
            $this->footer.= '    <div id="html_footer"> ';
        //    $this->footer.= '       '.$_SESSION[SESSION_NAME]['nom_user'].'<br/>';
         //   $this->footer.= '       <a href="index.php?page=logout">se deconnecter</a>';
            $this->footer.= '    </div>';
            $this->footer.= '</body>';
        }

    }
?>