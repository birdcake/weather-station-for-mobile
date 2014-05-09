<?php
  $doc = new DOMDocument();
  $doc->load( 'betterreal.xml' );
  
  $xmls = $doc->getElementsByTagName( "xml" );
  foreach( $xmls as $xml )
?>