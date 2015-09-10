<!DOCTYPE html>
	<html>
		<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	        	<link rel="stylesheet" href="css/style.css" />
	        	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	        	<style type="text/css">
				    html { height: 100% }
				    body { height: 100%; margin: 0px; padding: 0px }
				    #map_canvas { height: 100% ; width:100%;}
				</style>
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
				<script type="text/javascript">
				 
				//     var previousPosition = null;
				   
				//     function initialize() {
				//       map = new google.maps.Map(document.getElementById("map_canvas"), {
				//             zoom: 19,
				//             center: new google.maps.LatLng(44.93782,4.36905),
				//             mapTypeId: google.maps.MapTypeId.ROADMAP
				//           });   
				//     }
				       
				//     if (navigator.geolocation)
				//       var watchId = navigator.geolocation.watchPosition(successCallback, null, {enableHighAccuracy:true});
				//     else
				//       alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");
				       
				//     function successCallback(position){
				//       map.panTo(new google.maps.LatLng(position.coords.latitude, position.coords.longitude));
				//       var marker = new google.maps.Marker({
				//         position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude), 
				//         map: map
				//       });  
				//       if (previousPosition){
				//         var newLineCoordinates = [
				//            new google.maps.LatLng(previousPosition.coords.latitude, previousPosition.coords.longitude),
				//            new google.maps.LatLng(position.coords.latitude, position.coords.longitude)];
				         
				//         var newLine = new google.maps.Polyline({
				//           path: newLineCoordinates,        
				//           strokeColor: "#FF0000",
				//           strokeOpacity: 1.0,
				//           strokeWeight: 2
				//         });
				//         newLine.setMap(map);
				//       }
				//       previousPosition = position;
				//     };    
				//   </script>
	 	   	<!--[if lt IE 9]>
	        	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	        	<![endif]-->
	        <title>Site de proximité des Boutières</title>
		</head>
		<body onload="initialize()">
			<div id="top"></div>
			<header>
				<?php include("header.php"); ?>
				<!-- <div class="bloc_logo">
					<img src="images/logo.jpg" class="logo_site">
				</div>
				<nav class="bloc_nav">
					<ul class="menu">
						<a href="#"><li>Qui sommes-nous ?</li></a>
						<a href="#"><li>Notre équipe</li></a>
						<a href="#"><li>Nos lieux d'accueil</li></a>
						<a href="form_contact.html"><li>Nous contactez</li></a>
					</ul>
				</nav>
				<div class="bloc_accroche">
					<h1>Votre outil pour l'emploi et la création d'activités</h1>
				</div> -->
			</header>

			<article class="bloc_icones">
				<a href="#bloc_particuliers"><div class="titre_bloc_icone">Particuliers</div><i class="fa fa-user fa-3x"></i>
				</a>
				<a href="#bloc_entreprises"><div class="titre_bloc_icone">Entreprises</div><i class="fa fa-industry fa-3x"></i>
				</a> 
				<a href="#bloc_associations"><div class="titre_bloc_icone">Associations</div><i class="fa fa-hand-paper-o fa-3x"></i>
				</a>
				<a href="#bloc_collectivites"><div class="titre_bloc_icone">Collectivités</div><i class="fa fa-users fa-3x"></i>
				</a>
			</article>

			<div class="bloc_presentation">
				
				<!-- <div id="map_canvas"></div> -->
				 <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2824.2876532463283!2d4.36905!3d44.937819999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5805cd934bd85%3A0x4291ed20b3f32cab!2sSite+de+Proximit%C3%A9+des+Bouti%C3%A8res!5e0!3m2!1sfr!2sfr!4v1441785993253" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				<div class="introduction">
					<p class="texte_presentation">Le Site de proximité est un pôle d’ingénierie locale pour la création et le développement des activités et des emplois. Il s’adresse, aux particuliers, aux entreprises et aux associations de son périmètre d’action et à ceux qui veulent venir s’y installer. Il offre également des services aux collectivités. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed tempus eros. Proin a fermentum sem. Ut nulla quam, mattis a pellentesque eget, finibus nec turpis. Nunc posuere enim quis dolor consequat, in blandit enim mattis. Proin non dolor commodo, tristique justo a, convallis justo. Praesent interdum, nulla at.</p>

				</div>
				
			</div>
			<div class="bloc_gauche" id="bloc_particuliers">
				<h2>Particuliers</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed tempus eros. Proin a fermentum sem. Ut nulla quam, mattis a pellentesque eget, finibus nec turpis. Nunc posuere enim quis dolor consequat, in blandit enim mattis. Proin non dolor commodo, tristique justo a, convallis justo. Praesent interdum, nulla at ullamcorper bibendum, massa mauris placerat lacus, ut lacinia ante massa auctor metus. Aenean vitae turpis eu tortor sollicitudin dignissim. Pellentesque mollis nunc sit amet massa pharetra dictum. Nam venenatis, arcu et tempus semper, velit augue iaculis tortor, fringilla imperdiet augue nisi a metus. Fusce erat augue, consequat eu euismod quis, tempor at velit. Quisque tristique magna ac leo hendrerit vehicula. Suspendisse vestibulum purus a erat venenatis, sagittis iaculis velit efficitur.</p>

				<p>Curabitur ut egestas erat. Nam dictum turpis sed velit pulvinar posuere. Donec sit amet nulla ac risus semper porta. Mauris pellentesque id mi ut pretium. Nunc risus dolor, ullamcorper eget sagittis porttitor, aliquam a enim. Sed elementum risus quis tortor lacinia ultrices. Suspendisse et arcu ac turpis lacinia rhoncus. Aliquam vulputate pharetra velit ac pulvinar. Sed in nulla auctor, placerat enim malesuada, aliquam nibh. Quisque rutrum dolor quis faucibus laoreet. Phasellus nisi enim, eleifend tempor tincidunt at, congue et erat. Morbi facilisis vel sem id ornare. Morbi elit nunc, viverra id dolor non, rutrum laoreet nibh. Vivamus eget lacus quis erat varius maximus.</p>
			</div>
			<div class="bloc_droit" id="bloc_entreprises">
				<h2>entreprises</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed tempus eros. Proin a fermentum sem. Ut nulla quam, mattis a pellentesque eget, finibus nec turpis. Nunc posuere enim quis dolor consequat, in blandit enim mattis. Proin non dolor commodo, tristique justo a, convallis justo. Praesent interdum, nulla at ullamcorper bibendum, massa mauris placerat lacus, ut lacinia ante massa auctor metus. Aenean vitae turpis eu tortor sollicitudin dignissim. Pellentesque mollis nunc sit amet massa pharetra dictum. Nam venenatis, arcu et tempus semper, velit augue iaculis tortor, fringilla imperdiet augue nisi a metus. Fusce erat augue, consequat eu euismod quis, tempor at velit. Quisque tristique magna ac leo hendrerit vehicula. Suspendisse vestibulum purus a erat venenatis, sagittis iaculis velit efficitur.</p>

				<p>Curabitur ut egestas erat. Nam dictum turpis sed velit pulvinar posuere. Donec sit amet nulla ac risus semper porta. Mauris pellentesque id mi ut pretium. Nunc risus dolor, ullamcorper eget sagittis porttitor, aliquam a enim. Sed elementum risus quis tortor lacinia ultrices. Suspendisse et arcu ac turpis lacinia rhoncus. Aliquam vulputate pharetra velit ac pulvinar. Sed in nulla auctor, placerat enim malesuada, aliquam nibh. Quisque rutrum dolor quis faucibus laoreet. Phasellus nisi enim, eleifend tempor tincidunt at, congue et erat. Morbi facilisis vel sem id ornare. Morbi elit nunc, viverra id dolor non, rutrum laoreet nibh. Vivamus eget lacus quis erat varius maximus.</p>

			</div>
			<a href="#top" class ="lien_retour_top">haut de page</a>
			<div class="bloc_gauche" id="bloc_associations">
				<h2>Associations</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed tempus eros. Proin a fermentum sem. Ut nulla quam, mattis a pellentesque eget, finibus nec turpis. Nunc posuere enim quis dolor consequat, in blandit enim mattis. Proin non dolor commodo, tristique justo a, convallis justo. Praesent interdum, nulla at ullamcorper bibendum, massa mauris placerat lacus, ut lacinia ante massa auctor metus. Aenean vitae turpis eu tortor sollicitudin dignissim. Pellentesque mollis nunc sit amet massa pharetra dictum. Nam venenatis, arcu et tempus semper, velit augue iaculis tortor, fringilla imperdiet augue nisi a metus. Fusce erat augue, consequat eu euismod quis, tempor at velit. Quisque tristique magna ac leo hendrerit vehicula. Suspendisse vestibulum purus a erat venenatis, sagittis iaculis velit efficitur.</p>

				<p>Curabitur ut egestas erat. Nam dictum turpis sed velit pulvinar posuere. Donec sit amet nulla ac risus semper porta. Mauris pellentesque id mi ut pretium. Nunc risus dolor, ullamcorper eget sagittis porttitor, aliquam a enim. Sed elementum risus quis tortor lacinia ultrices. Suspendisse et arcu ac turpis lacinia rhoncus. Aliquam vulputate pharetra velit ac pulvinar. Sed in nulla auctor, placerat enim malesuada, aliquam nibh. Quisque rutrum dolor quis faucibus laoreet. Phasellus nisi enim, eleifend tempor tincidunt at, congue et erat. Morbi facilisis vel sem id ornare. Morbi elit nunc, viverra id dolor non, rutrum laoreet nibh. Vivamus eget lacus quis erat varius maximus.</p>

			</div>
			<div class="bloc_img_collectivites">
				<div class="bloc_img_gauche">
					<img src="images/nonieres.jpg" class="nonieres">
				</div>
				<div  class="bloc_droit" id="bloc_collectivites">
					<h2>Collectivités</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed tempus eros. Proin a fermentum sem. Ut nulla quam, mattis a pellentesque eget, finibus nec turpis. Nunc posuere enim quis dolor consequat, in blandit enim mattis. Proin non dolor commodo, tristique justo a, convallis justo. Praesent interdum, nulla at ullamcorper bibendum, massa mauris placerat lacus, ut lacinia ante massa auctor metus. Aenean vitae turpis eu tortor sollicitudin dignissim. Pellentesque mollis nunc sit amet massa pharetra dictum. Nam venenatis, arcu et tempus semper, velit augue iaculis tortor, fringilla imperdiet augue nisi a metus. Fusce erat augue, consequat eu euismod quis, tempor at velit. Quisque tristique magna ac leo hendrerit vehicula. Suspendisse vestibulum purus a erat venenatis, sagittis iaculis velit efficitur.</p>

					<p>Curabitur ut egestas erat. Nam dictum turpis sed velit pulvinar posuere. Donec sit amet nulla ac risus semper porta. Mauris pellentesque id mi ut pretium. Nunc risus dolor, ullamcorper eget sagittis porttitor, aliquam a enim. Sed elementum risus quis tortor lacinia ultrices. Suspendisse et arcu ac turpis lacinia rhoncus. Aliquam vulputate pharetra velit ac pulvinar. Sed in nulla auctor, placerat enim malesuada, aliquam nibh. Quisque rutrum dolor quis faucibus laoreet. Phasellus nisi enim, eleifend tempor tincidunt at, congue et erat. Morbi facilisis vel sem id ornare. Morbi elit nunc, viverra id dolor non, rutrum laoreet nibh. Vivamus eget lacus quis erat varius maximus.</p>

				</div>
			</div>
			<hr>
			<div class="bloc_financeurs">
				<img src="images/logo_ue_2013.png" class="logo_financeurs">
				<img src="images/logo_fse.png" class="logo_financeurs">
				<img src="images/logo_leader.png" class="logo_financeurs">
				<img src="images/logo_rra_2015.png" class="logo_financeurs">
				<img src="images/logo_capca.jpg" class="logo_financeurs">
				<img src="images/logo_cc_lamastre.jpg" class="logo_financeurs">
				<img src="images/logo_valeyrieux.png" class="logo_financeurs">
			</div>
		
			<footer>
				<div class="infos_legales">
					<a href="infos_legales.html" >Infos légales</a>
				</div>
				<div class="plan_site">Plan du site</div>
				<div class="coordonnees">
					<p class="intitule_coordonnees">Coordonnées:</p>
					<br>
					<p>Quartier Le Pont</p>
					<p>07310 St Martin de Valamas</p>
					<p>Tél. : </p>
					<p>Email : <a href="mailto:site.proximite.boutieres@orange.fr">site.proximite.boutieres@orange.fr</a></p>
				</div>
						                  
			</footer>
			</div>
		</body>
	</html>
