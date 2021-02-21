@extends('Layouts/app')


@section('title')
Contacte   


@endsection('title')

@section('content')
  

         <div class="container">
             <h1>  {{ config('app.name') }} </h1>
             <form action="http://localhost/projet/public/welcome" methode ="POST" class="needs-validation" novalidate>
                @csrf
                 <div class="form-row">
                     <div class="col-md-4 mb-3">
                         <label for="prenom">Prénom</label>
                         <input type="text" class="form-control" id="prenom" placeholder="Pierre" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                         </div>

                  <br> ....................................................................................................................... </br>

                     
                 <div class="form-row">  
                 </div>

                     <div class="col-md-4 mb-3">
                         <label for="nom">Nom de famille</label>
                         <input type="text" class="form-control" id="nom" placeholder="Giraud" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>

                  <br> ....................................................................................................................... </br>

                 <div class="form-row">
                 </div>
                
                     <div class="col-md-4 mb-3">
                         <label for="pseudo">Pseudo</label>
                         <input type="text" class="form-control" id="pseudo" placeholder="PierreGird" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>

                  </div>


                 <div class="form-row">
                     <div class="col-md-6 mb-3">
                         <label for="ville">Ville</label>
                         <input type="text" class="form-control" id="ville" placeholder="Ville" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>

                     
                     <br> .................................................................................................................................................. </br>

                 <div class="form-row">
                 </div>
                
                     <div class="col-md-3 mb-3">
                         <label for="pays">Pays</label>
                         <input type="text" class="form-control" id="pays" placeholder="Pays" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>

                     
                     <br> ....................................................................................................................................................................... </br>

                 <div class="form-row">
                 </div>
                
                     <div class="col-md-3 mb-3">
                         <label for="cp">Code postal</label>
                         <input type="number" class="form-control" id="cp" placeholder="Code postal" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>

                     
                 </div>
        <button class="btn btn-primary" type="submit">Envoyer</button>
             </form>
         </div>
         <script>
           /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
            *et d'appliquer les styles de validation aux différents éléments de formulaire*/
           (function() {
             'use strict';
             window.addEventListener('load', function() {
               let forms = document.getElementsByClassName('needs-validation');
               let validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                   if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                   }
                   form.classList.add('was-validated');
                 }, false);
               });
             }, false);
           })();
         </script>

  
@endsection('content')
