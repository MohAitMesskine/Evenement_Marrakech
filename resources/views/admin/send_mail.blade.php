<!DOCTYPE html>
<html>
  <head> 
  <base href="/public">

 @include('admin.css')

 <style>
    /* Style général pour les labels */
    label {
        display: block; /* Afficher les labels en bloc pour une meilleure organisation */
        /* width: 200px; */
        font-weight: bold; /* Texte en gras */
        margin-bottom: 10px; /* Espacement entre les labels et les champs */
        color: #333; /* Couleur du texte */
    }

    /* Style pour les champs de formulaire */
    input[type="text"],
    input[type="number"],
    select,
    textarea {
        width: 100%; /* Largeur maximale */
        /* padding: 10px; Espacement intérieur */
        /* margin-bottom: 20px; Espacement entre les champs */
        border: 1px solid #ccc; /* Bordure légère */
        border-radius: 5px; /* Coins arrondis */
        font-size: 16px; /* Taille de la police */
    }

    /* Style pour le bouton "Add event" */
    input[type="submit"] {
        background-color: #4CAF50; /* Couleur de fond verte */
        color: white; /* Texte blanc */
        padding: 12px 20px; /* Espacement intérieur */
        border: none; /* Pas de bordure */
        border-radius: 5px; /* Coins arrondis */
        cursor: pointer; /* Curseur en forme de main */
        font-size: 16px; /* Taille de la police */
        transition: background-color 0.3s ease; /* Animation au survol */
    }

    /* Effet au survol du bouton */
    input[type="submit"]:hover {
        background-color: #45a049; /* Changement de couleur au survol */
    }

    /* Style pour le conteneur principal */
    .dev_deg {
        
        padding-top: 20px;
        max-width: 600px; /* Largeur maximale du formulaire */
        margin: 0 auto; /* Centrer le formulaire */
    }

    /* Style pour le conteneur centré */
    .dev_center {
        /* text-align: center; */
        padding-top: 20px;
    }

    /* Style pour le champ de fichier */
    input[type="file"] {
        margin-bottom: 20px; /* Espacement en bas */
    }

    /* Style pour les cases à cocher (lieu) */
    input[type="checkbox"] {
        margin-right: 10px; /* Espacement à droite */
    }

    /* Style pour les options de type de chambre */
    select {
        appearance: none; /* Supprime l'apparence par défaut */
        background-color: #f9f9f9; /* Couleur de fond */
    }
</style>
      </head>
  <body>
  @include('admin.header')

  @include('admin.sidebar')


        <div class="page-content">
                <div class="page-header">
                     <div class="container-fluid">

                     <center>
                        <h1 style="font-size:30px;font-weight:bold; color:white"> Send Email to {{$data->name}} </h1>

                        <form action="{{url('mail',$data->id)}}" method="post" >
                    @csrf    
                    <div class="dev_deg">
                            <label style="color: white;text-align:left;" for="" >Greeting</label>
                            <input type="text" name="greeting">
                        </div>

                        <div class="dev_deg">
                            <label style="color: white; text-align:left;" for=""> Mail Body </label>
                           <textarea name="body" id=""></textarea>
                        </div>

                        <div class="dev_deg">
                            <label style="color: white; text-align:left;" for="">Action Text</label>
                            <input type="text" name="action_text">
                        </div>

                        <div class="dev_deg">
                            <label style="color: white;text-align:left;" for="">Action Url</label>
                            <input type="text" name="action_url">
                        </div>

                        <div class="dev_deg">
                            <label style="color: white; text-align:left;" for="">End Line</label>
                            <input type="text" name="endline">
                        </div>
                        

                        

                        <div class="dev_deg">
                            <input class="btn btn-primary" type="submit" value="Send mail" >
                        </div>
                    </form>
        
                     </center>

                     </div>
                </div>
        </div>



@include('admin.footer')

  </body>
</html>