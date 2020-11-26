<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nouveau contact</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

    .inp {
    text-transform: capitalize;
      }

    </style>    
</head>
<body class="form-v10">
<div class="container"><h1>Ajout d'un contact </h1></div>
	<div class="page-content">
    
		<div class="form-v10-content">
			<form class="form-detail" action="{{ url('saveContact')  }}" method="post" id="myform">
            {{ csrf_field() }}
				<div class="form-left">
					<h2>Identité du contact</h2>
					<div class="form-row">
						<select  name="contact_civilite">
						    <option class="option" >Civilité</option>
						    <option class="option" value="Monsieur">Monsieur</option>
						    <option class="option" value="Medame">Medame</option>
		
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="contact_prenom" id="contact_prenom" class="input-text inp" placeholder="Prénom"  required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="contact_nom" id="contact_nom" class="input-text inp" placeholder="Nom"  required>
						</div>
                        
					</div>
					
					<div class="form-row">
						<input type="text" name="contact_tel" class="company"  placeholder="Téléphone" required>
					</div>

                    <div class="form-row">
						<input type="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$" name="contact_email" class="company"  placeholder="Email" required>
					</div>

                    <div class="form-row">
						<input type="text" name="contact_fonction" class="company"  placeholder="Fonction" required>
					</div>

                    <div class="form-row">
						<input type="text" name="contact_service" class="company"  placeholder="Service" required>
					</div>

                    <div class="form-row" >
						<input type="text" name="contact_date_naissance" id="datepicker" class="company"  placeholder="Date de naissance" required>
					</div>

        
				</div>
				<div class="form-right">
					<h2>Informations de la société</h2>
					<div class="form-row">
						<input type="text" name="contact_nom_societe" class="street" id="street" placeholder="Nom de la Société" required>
					</div>
					<div class="form-row">
						<input type="text" name="contact_adresse_societe" class="additional" id="additional" placeholder="Adresse de la société " required>
					</div>
                    <div class="form-row">
						<input type="text" name="contact_code_postale_societe" class="zip" id="additional" placeholder="Code postale de la société " required>
					</div>

                    <div class="form-row">
						<input type="text" name="contact_ville_societe" class="company"  placeholder="Ville de la société" required>
					</div>

                    <div class="form-row">
						<input type="text" name="contact_tel_societe" class="company"  placeholder="Tél de la société" required>
					</div>

                    <div class="form-row">
						<input type="text" name="contact_site_web_societe" class="company"  placeholder="Site web de la société" required>
					</div>

					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Sauvegarder">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

<script>
$(document).ready(function(){
    $('#contact_nom').keyup(function(){
        $(this).val($(this).val().toLowerCase());
    });

    $('#contact_prenom').keyup(function(){
        $(this).val($(this).val().toLowerCase());
    });
});
</script>
<script>
        $( function() {
            $( "#datepicker" ).datepicker({
                dateFormat: "yy-mm-dd"
            });
        } );
</script>