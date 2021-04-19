<?php
namespace App\Controllers\Web;

class HomeController {
     public function index( $request, $view ) {
     	if ( $request->query( 'cta' ) === '0' ) {
	        // ... return the view WordPress was trying to load:
	        return \App::view( $view );
	    }
	    $skip_url = add_query_arg( 'cta', '0', $request->getUrl() );
        
        return \App::view( 'template-cta.php' )
        ->with( 'skip_url', $skip_url );
     }
 }
