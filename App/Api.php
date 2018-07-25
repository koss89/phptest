<?php

namespace App;

class Api
{
  public function SayHello()
  {
    $dom = new \DomDocument('1.0','utf-8');    
    $div = $dom->createElement('div');
    $div->setAttribute('id','head-div');
    $div->setAttribute('style','background-color: coral;');    
    $el = $dom->createElement('h1');    
    $el->appendChild($dom->createTextNode('HELLO WORLD'));
    $div->appendChild($el);    
    $dom->appendChild($div);
    echo $dom->saveXML();
    //echo '<h1>HELLO WORLD</h1>';
  }
  
}