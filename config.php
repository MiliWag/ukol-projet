<?php

$kontakty = [
[
'jmeno' => 'Gru', 
'foto' => 'assets/img/gru.jpg',
'pracovni_pozice' => 'padouch', 
'adresa' => 'Riviera State 32/106'
],
[
'jmeno' => 'Severus Snape', 
'foto' => 'assets/img/Severus.jpg', 
'pracovni_pozice' => 'učitel', 
'adresa' => 'Bradavice 32/106'
],
[
'jmeno' => 'Willy Wonka', 
'foto' => 'assets/img/wonka.jpg', 
'pracovni_pozice' => 'továrník', 
'adresa' => 'Čokoládovna 32/106'
],
];

function nactiKontakty(array $kontakty): string
{
$osoba = '';

  foreach ($kontakty as $kontakt) {
$osoba .= '<div class="col-lg-4">
<div class="contact-box">
  <a class="row" href="#">
    <div class="col-4">
      <div class="text-center">
        <img alt="image" class="rounded-circle m-t-xs img-fluid"
          src='.$kontakt['foto'].' />
        <div class="m-t-xs font-bold">' .$kontakt['pracovni_pozice'].'</div>
      </div>
    </div>
    <div class="col-8">
      <h3><strong>' .$kontakt['jmeno'].'</strong></h3>
      <address>
        <i class="fa fa-map-marker"></i>' .$kontakt['adresa'].
      '</address>
    </div>
  </a>
</div>
</div>';
  }

return $osoba;
}