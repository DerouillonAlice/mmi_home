
<header>
	<nav >
    	<ul>
        	<li <?php echo ($pageActive == "accueil") ? 'class="active"' : ''; ?>><a href="index.php"><img src="assets/picto/accueil.png" alt="icone d'une maison" width="20" height="20"> Home</a></li>
            <li <?php echo ($pageActive == "donnees") ? 'class="active"' : '';?>><a href="travaux.php"> <img src="assets/picto/code-informatique.png" alt="icone de code" width="20" height="20"> Travaux</a></li>
            <li <?php echo ($pageActive == "galerie") ? 'class="active"' : '';?>><a href="liens.php"> <img src="assets/picto/lien.png" alt="icone d'un lien" width="20" height="20"> Liens</a></li>
            <li <?php echo ($pageActive == "contact") ? 'class="active"' : '';?>><a href="contact.php"> <img src="assets/picto/contact.png" alt="icone d'un mail" width="20" height="20"> Contact</a></li>
        </ul>
     </nav>
</header>