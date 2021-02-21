<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
    </head>

    <body>
<!--
    <ul>

    @foreach($recettes as $recette)
    <il>
    {{$recette}}
    </il>
    @endforeach  
    </ul>

    <ul>-->
<?php echo _POST['name'];?>
 
 <!--   <?php foreach($recettes as $recette) {?>

    <il>
    <?php echo $recette ;?> 
    </il>

    <?php }  ?>

    </ul>
-->
    </body>
</html>
