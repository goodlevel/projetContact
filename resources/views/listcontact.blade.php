<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

        <title>Liste des contacts</title>

        
        
    </head>
    <body>
    <div class="container">
    <h1>Liste des contacts </h1>
    <hr>
    <div><a href="{{  url('addcontact')  }}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Ajouter un contact</a></div><br>
    <table class="table table-responsive" id="table">
    <thead>
        <tr>
            <th class="text-center">Civilité</th>
            <th class="text-center">Prénom</th>
            <th class="text-center">Nom</th>
            <th class="text-center">Téléphone</th>
            <th class="text-center">E-mail</th>
            <th class="text-center">Société</th>
            <th class="text-center">Ville</th>
            <th class="text-center"></th>
        </tr>
    </thead>
    
    <tbody>
            @foreach($contacts as $contact)
        <tr>
            
            <td>{{$contact->contact_civilite}}</td>
            <td>{{$contact->contact_prenom}}</td>
            <td>{{$contact->contact_nom}}</td>
            <td>{{$contact->contact_tel}}</td>
            <td>{{$contact->contact_email}}</td>
            <td>{{$contact->contact_nom_societe}}</td>
            <td>{{$contact->contact_ville_societe}}</td>
            <td>
             <a class="edit-modal btn btn-info" href="{{ url('detailContact/'.$contact->contact_id) }}"> <span class="glyphicon glyphicon-edit"></span></a>
             <a class="delete-modal btn btn-danger" href="{{ url('deleteContact/'.$contact->contact_id) }}"> <span class="glyphicon glyphicon-trash"></span></a>
             <a class="delete-modal btn btn-default" href="{{ url('detailContact/'.$contact->contact_id) }}"> <span class="glyphicon glyphicon-eye-open"></span></a>
            </td>
        </tr>
            @endforeach
    </tbody>
  </table>
    </div>
        
    </body>
    

</html>


  


<script>
  // Datatable avec traduction en FR
  $(document).ready(function() {
        $('#table').DataTable( {
            "language": {
                "sProcessing": "Traitement en cours ...",
                "sLengthMenu": "Afficher _MENU_ lignes",
                "sZeroRecords": "Aucun résultat trouvé",
                "sEmptyTable": "Aucune donnée disponible",
                "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
                "sInfoEmpty": "Aucune ligne affichée",
                "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
                "sInfoPostFix": "",
                "sSearch": "Chercher:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Chargement...",
                "oPaginate": {
                "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
               },
            "oAria": {
            "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
            }
        }
        });
    });

 </script>
