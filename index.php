<?php
    require 'param/param.php';
    require 'inc/framework.php';

    // index.php?page=galerie
    if(!empty($_GET['page']) && isset($page[$_GET['page']])){
        $url_php = $page[$_GET['page']];
    }else{
       $url_php = $page['home'];
    }
    // $url_php = 'mod/galerie/galerie.php

    $url_php_header = str_replace('.php','_header.php', $url_php);
    // $url_php = 'mod/galerie/galerie_header.php';

    // $url_php_header = 'mod/galerie/galerie_header.php
    if(is_file($url_php_header)) {
        include $url_php_header;
    }
?>
<html>
	<head>
    
        <?php
            // Gestion du fichier _head
            $url_php_head = str_replace('.php','_head.php', $url_php);
            // $url_php_head = 'mod/galerie/galerie_head.php';
            if(is_file($url_php_head)) {
                include $url_php_head;
            }else{
                echo '<title>'.$TITLE.'</title>';
            }
        ?>
	</head>
	
	<body>
		<?php

			require $url_php;

		?>
        
        
	</body>
</html>