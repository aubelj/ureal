<?php include("includes/header.php"); ?>

<?php include("includes/menu.php"); ?>

<div class="l-container">
<!-- login-form -->	

<!-- strat-login-form -->	
<div class="">
<!-- start-form -->
	<h1>Proposer nous un magasin</h1>

	<form class="form-horizontal submit-form login-form" action="#" method="post" id="contact_form">
	    <ul>
			<div class="form-group"><p>Remplissez le formulaire du magasin afin de pouvoir le retrouver sur notre site ! Notre équipe vérifiera son authenticité avant de la rendre disponible.</p><br/></div>
	        <div class="form-group">
	        	<label for="name" class="col-sm-2">Nom</label>
				<div class="col-sm-9"><input type="text" class="form-control" id="name" placeholder="Nom du magasin" required/></div>
			</div>
	        <div class="form-group">
	        	<label for="address" class="col-sm-2">Adresse</label>	        
	            <div class="col-sm-9">
	            	<input type="text" id="address" class="form-control" placeholder="Adresse">
	            </div>
	        </div>
	        <div class="form-group">
	        	<label for="address_2" class="col-sm-2">Complément</label>        
	            <div class="col-sm-9">
	            	<input type="text" id="address_2" class="form-control" placeholder="Complément d'adresse">
	            </div>
	        </div>
	        <div class="form-group">
	        	<label for="postal_code" class="col-sm-2">CP</label>	       
	            <div class="col-sm-3">
	            	<input type="text" id="postal_code" class="form-control" placeholder="Code postal">
	            </div>
				<div class="col-sm-1"></div>
	        	<label for="city" class="col-sm-1">Ville</label>
	            <div class="col-sm-4">
	            	<input type="text" id="city" class="form-control" placeholder="Ville">
	            </div>
	        </div>	       
			<div class="form-group">
	        	<label for="country" class="col-sm-2">Pays</label>
				<div class="col-sm-9">
					<select id="country" class="form-control">
						<option value="FRANCE">France</option>
						<option value="GERMANY">Allemagne</option>
						<option value="SPAIN">Espagne</option>
					</select>
				</div>
			</div>
	        <div class="form-group">
	        	<label for="website" class="col-sm-2">Site</label>
	            <div class="col-sm-9">
	            	<input type="text" id="website" class="form-control" placeholder="http://site-web.com">
	            </div>
	        </div>
         </ul>
       	 	<input type="submit" id="Validate" value="Valider"/>
	</form>
<!-- end-form -->
<!-- start-account -->
<!-- end-account -->
<!-- end-login-form -->

	
</div>

</div>

<?php include("includes/footer.php"); ?>
