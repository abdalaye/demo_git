<?php
	if (isset($_POST['submit'])) {
		echo 'Vous venez de nous envoyer les informations suivantes : <br> Le pseudo : '.$_POST['pseudo']. '<br> L\'email : ' .$_POST['email'];
	}
