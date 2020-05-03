<?php  
session_start();
?>



<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Simpl<i>it</i>.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">

			<?php if(!isset($_SESSION["mail"])){ ?>
              
           <?php }else {  ?>
            <li class="nav-item "><a href="espace/admin.php" class="nav-link">Bonjour </a></li>
           <?php } ?>	

	          <li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Articles</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Equipe</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php if(!isset($_SESSION["mail"])){ ?>
              <li class="nav-item"><a class="nav-link">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                Connexion
                </button></a>
              </li>
              <li class="nav-item"><a class="nav-link">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                Inscription
                </button></a>
              </li>
           <?php }else {  ?>
            <li class="nav-item active"><a href="espace\deconnexion.php" class="nav-link">
                <button type="button" class="btn btn-primary" >
                Deconnexion
                </button></a>
           </li>
           <?php } ?>
              
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <!-- Modal connexion -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connectez-vous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" action="poo/traitement.php" method="post">
                    <center>
					<span class="login100-form-title p-b-48">
						<img src="images\logo-simplon_23.png" alt="Logo Simplon" height="100px" style="top:3px;">
					</span>

                    <p>E-mail</p>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

                    <p>Mot de passe</p>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Se connecter
							</button>
						</div>
					</div>
                    </center>
                    <center> <a href="lost.php">Mot de passe oublié</a> </center>
                    
				</form>
			</div>
		</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal inscription -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscrivez-vous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" action="poo/traitement.php" method="post">
                <center>
					<span class="login100-form-title p-b-48">
						<img src="images\logo-simplon_23.png" alt="Logo Simplon" height="100px" style="top:3px;">
                    </span>
                    <p>Prenom</p>
                    <div class="input" >
						<input class="input100" type="text" name="prenom">
						<span class="focus-input100" data-placeholder="Prenom"></span>
					</div>
                    <p>E-mail</p>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="mail">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
                    <p>Mot de passe</p>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="mdp">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Valider
							</button>
						</div>
					</div>
                    </center>
					
				</form>
			</div>
		</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>