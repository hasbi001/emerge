 <?php

 namespace App\Controllers\Web;

 class HomeController {
     public function index( $request, $view ) {
         return \App::view( 'template-cta.php' );
     }
 }
