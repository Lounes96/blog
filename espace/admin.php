<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Readit - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">

    <script src="../fontawesome/js/fontawesome.js"></script>
  </head>
  <body>
    
	  <?php include ('../include/connectbdd.php'); ?>
	  

      <?php  
session_start();
?>



<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="../index.php">Simpl<i>it</i>.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">

			<?php if(!isset($_SESSION["mail"])){ ?>
              
           <?php }else {  ?>
            <li class="nav-item "><a href="../espace/admin.php" class="nav-link">Bonjour </a></li>
           <?php } ?>	

	          <li class="nav-item active"><a href="../index.php" class="nav-link">Accueil</a></li>
	          <li class="nav-item"><a href="../blog.php" class="nav-link">Articles</a></li>
	          <li class="nav-item"><a href="../about.php" class="nav-link">Equipe</a></li>
              <li class="nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
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
            <li class="nav-item active"><a href="deconnexion.php" class="nav-link">
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


	  <?php include '../include/header.php'; ?>


      



              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Prenom</th>
      <th scope="col">E-mail</th>
      <th scope="col">Role</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
          
          $req = $bdd->prepare(" SELECT u.id_user, u.prenom, u.mail, u.id_usertype, t.id_usertype, t.role FROM users u, usertype t WHERE u.id_usertype = t.id_usertype ");
          $req ->execute();

          while( $donnees = $req->fetch() ) {
          ?>       

<tr>

         
             
    <tr>
      <th scope="row">1</th>
      <td><?php echo $donnees['id_user']; ?></td>
      <td><?= $donnees['prenom']; ?></td>
      <td><?= $donnees['mail']; ?></td>
      <td> <?= $donnees['role']; ?></td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modifier">
      <i class="fas fa-edit"></i>
                </button></a></td>
      <td> <a href="delete_user.php?id=<?php echo $donnees['id_user']; ?>"><button type="button" class="btn btn-primary"  >
      <i class="fas fa-trash-alt"></i>
                </button></a></td>
    </tr>


    

          <?php } ?>
  </tbody>
</table>
 
  </center>

  <!-- Modal Modifier -->
<div class="modal fade" id="Modifier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form" action="poo/traitement.php" method="post">
                <center>
					<span class="login100-form-title p-b-48">
						<img src="../images\logo-simplon_23.png" alt="Logo Simplon" height="100px" style="top:3px;">
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
                    <p>Role</p>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


  







   	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">Read<span>it</span>.</a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">latest News</h2>
              <div class="block-21 mb-4 d-flex">
	              <a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
	              <div class="text">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
	                <div class="meta">
	                  <div><a href="#"></span> Oct. 16, 2019</a></div>
	                  <div><a href="#"></span> Admin</a></div>
	                  <div><a href="#"></span> 19</a></div>
	                </div>
	              </div>
	            </div>
	            <div class="block-21 mb-4 d-flex">
	              <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
	              <div class="text">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
	                <div class="meta">
	                  <div><a href="#"></span> Oct. 16, 2019</a></div>
	                  <div><a href="#"></span> Admin</a></div>
	                  <div><a href="#"></span> 19</a></div>
	                </div>
	              </div>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Articles</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>