<!-- 
	Koneksi API dengan teknik curl
 -->
<?php
function get_CURL($url){
	$curl = curl_init(); /* untuk menjalankan init */
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); /* Data yang dikembalikan bentuknya text */
	$result = curl_exec($curl);
	curl_close($curl);

	return json_decode($result, true);
}

	$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=statistics,snippet&id=UCkXmLjEr95LVtGuIm3l2dPg&key=AIzaSyDAEdDmu_N-PvmnWw7fWsZRUohi8wWlKHI');
	
	$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
	$channelName = $result['items'][0]['snippet']['title'];
	$subscriber = $result['items'][0]['statistics']['subscriberCount'];

	//  Video Terbaru

	$urlLatesVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDAEdDmu_N-PvmnWw7fWsZRUohi8wWlKHI&channelId=UCkXmLjEr95LVtGuIm3l2dPg&maxResults=1&order=date&part=snippet';

	$result = get_CURL($urlLatesVideo);
	$urlLatesVideoId = $result['items'][0]['id']['videoId'];

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/fontawesome/all.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Portfolio</title>	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<a class="navbar-brand" href="#">Selamat Datang</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Portfolio</a>
      </li>
    </ul>
  </div>
</nav>

<!-- jumbotron -->
<div class="jumbotron" id="jumbotron">
  <div class="container">
  	<div class="text-center">
  		<img src="img/dheo.jpg" class="rounded-circle img-thumbnail">
	    <h1 class="display-4">Dheo Apriansyah</h1>
	    <h3 class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</h3>
    </div>
  </div>
</div>

<!-- About -->
<section class="about bg-light" id='about'>
	<div class="container">
		<div class="row mb-4">
			<div class="col text-center">
				<h2>About</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>		
			</div>
			<div class="col-md-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>		
			</div>			
		</div>
	</div>
</section>

<!-- Portfolio -->
<section class="portfolio" id="portfolio">
	<div class="container">
		<div class="row mb-4">
			<div class="col text-center bg-light">
				<h2>Portfolio</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md mb-4">
				<div class="card">
					<img src="img/car1.jpg." class="card-img-top" alt="Gambar Tidak Tersedia">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-md mb-4">
				<div class="card">
					<img src="img/car1.jpg." class="card-img-top" alt="Gambar Tidak Tersedia">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-md mb-4">
				<div class="card">
					<img src="img/car1.jpg." class="card-img-top" alt="Gambar Tidak Tersedia">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-md mb-4">
				<div class="card">
					<img src="img/car1.jpg." class="card-img-top" alt="Gambar Tidak Tersedia">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-md mb-4">
				<div class="card">
					<img src="img/car1.jpg." class="card-img-top" alt="Gambar Tidak Tersedia">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-md mb-4">
				<div class="card">
					<img src="img/car1.jpg." class="card-img-top" alt="Gambar Tidak Tersedia">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>

<!-- Sosial Media -->
<section class="social mt-3" id="social">
	<div class="container">
		<div class="row mb-4">
			<div class="col text-center">
				<h2>Terima Kasih</h2>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-4">
						<img src="<?= $youtubeProfilePic; ?>" width="140" class="rounded-circle img-thumbnail">
					</div>
					<div class="col-md-8">
						<h5><?= $channelName; ?></h5>
						<p><?= $subscriber; ?> Subscribers.</p>
						<div class="g-ytsubscribe" data-channelid="UCkXmLjEr95LVtGuIm3l2dPg" data-layout="default" data-count="default"></div>
					</div>
				</div>
				<div class="row mt-3 mb-3">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $urlLatesVideoId; ?>" allowfullscreen></iframe>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- footer -->
<footer class="bg-dark text-white mt-5">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<p>2019 @dheo_apriansyah</p>
			</div>
		</div>
	</div>
</footer>





<script src="assets/js/jquery-3.5.1.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>
</body>
</html>