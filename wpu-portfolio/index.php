<?php
function get_Curl($url)

{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_Curl("https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC4XkMCUQoObc_UATFUyMeKA&key=AIzaSyAMS6raYCG2PblPBT3unobdRTkaLzQabN0");

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['default']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//latest video
$urlLatestVideo = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyAMS6raYCG2PblPBT3unobdRTkaLzQabN0&channelId=UC4XkMCUQoObc_UATFUyMeKA&maxResults=1&order=date&part=snippet";
$result = get_Curl($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

//instagram API
$clientID = "1483859029458528";
$accessToken = "IGAAVFj9pYZCmBBZAE9SX3dHQ21XdFNJZAlFxcEhlai1UOFN1VHc0QzNqZAF9hSFpOZAFZABdmdpVWVWYmI1T041eXQ1UXNWQ2t5VTFrOGN4dmhVM3NyZA1Bya2RxbERUQU5ZATEtNSUc2STVzM3Y2VFpCSUl0aVVRcWFHZAHA0b1dDcTNKTQZDZD";

$result2 = get_Curl("https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGAAVFj9pYZCmBBZAE9SX3dHQ21XdFNJZAlFxcEhlai1UOFN1VHc0QzNqZAF9hSFpOZAFZABdmdpVWVWYmI1T041eXQ1UXNWQ2t5VTFrOGN4dmhVM3NyZA1Bya2RxbERUQU5ZATEtNSUc2STVzM3Y2VFpCSUl0aVVRcWFHZAHA0b1dDcTNKTQZDZD");

$usernameIG = $result2['username'];
$profilePictureIG = $result2['profile_picture_url'];
$followersIG = $result2['followers_count'];

//media IG
$resultGambar1 = get_Curl("https://graph.instagram.com/v22.0/17929002603048214?fields=media_url&access_token=IGAAVFj9pYZCmBBZAE9SX3dHQ21XdFNJZAlFxcEhlai1UOFN1VHc0QzNqZAF9hSFpOZAFZABdmdpVWVWYmI1T041eXQ1UXNWQ2t5VTFrOGN4dmhVM3NyZA1Bya2RxbERUQU5ZATEtNSUc2STVzM3Y2VFpCSUl0aVVRcWFHZAHA0b1dDcTNKTQZDZD");



$gambar1 = $resultGambar1['media_url'];



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
      body {
        font-family: 'Montserrat', sans-serif;
        background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);
      }
      .navbar {
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      }
      .jumbotron {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: #fff;
        margin-bottom: 0;
        padding-top: 6rem;
        padding-bottom: 4rem;
        border-radius: 0 0 40px 40px;
        box-shadow: 0 4px 24px rgba(106,17,203,0.15);
      }
      .jumbotron img {
        border: 6px solid #fff;
        box-shadow: 0 4px 24px rgba(0,0,0,0.12);
      }
      .about {
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 2px 16px rgba(0,0,0,0.06);
        margin-top: -40px;
        padding: 2rem 0;
      }
      .social {
        border-radius: 24px;
        box-shadow: 0 2px 16px rgba(0,0,0,0.06);
        margin-top: 2rem;
        padding: 2rem 0;
      }
      .social h2 i {
        color: #e1306c;
      }
      .portfolio .card {
        border: none;
        border-radius: 18px;
        box-shadow: 0 2px 16px rgba(0,0,0,0.08);
        transition: transform 0.2s;
      }
      .portfolio .card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 8px 32px rgba(0,0,0,0.12);
      }
      .portfolio .card-img-top {
        border-radius: 18px 18px 0 0;
      }
      .contact .card {
        border-radius: 18px;
        box-shadow: 0 2px 16px rgba(0,0,0,0.08);
      }
      .list-group-item {
        background: #f8fafc;
        border: none;
      }
      .btn-primary {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        border: none;
        border-radius: 24px;
        padding: 0.5rem 2rem;
        font-weight: bold;
        transition: background 0.2s;
      }
      .btn-primary:hover {
        background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
      }
      footer {
        border-radius: 24px 24px 0 0;
        box-shadow: 0 -2px 16px rgba(0,0,0,0.06);
      }
      .social .rounded-circle {
        border: 4px solid #fff;
        box-shadow: 0 2px 12px rgba(0,0,0,0.08);
      }
      .g-ytsubscribe {
        margin-top: 8px;
      }
      @media (max-width: 767px) {
        .jumbotron {
          padding-top: 3rem;
          padding-bottom: 2rem;
        }
        .about, .social {
          padding: 1rem 0;
        }
      }
    </style>

    <title>My Portfolio</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand font-weight-bold" href="#home"><i class="fa-solid fa-code"></i> Sandhika Galih</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about"><i class="fa-solid fa-user"></i> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio"><i class="fa-solid fa-briefcase"></i> Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact"><i class="fa-solid fa-envelope"></i> Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron text-center" id="home">
      <div class="container">
        <img src="img/profile1.png" class="rounded-circle img-thumbnail mb-3" width="180" height="180" alt="Profile">
        <h1 class="display-4 font-weight-bold">Sandhika Galih</h1>
        <h3 class="lead mb-4">Lecturer <span class="mx-2">|</span> Programmer <span class="mx-2">|</span> Youtuber</h3>
        <a href="#portfolio" class="btn btn-primary btn-lg shadow-sm"><i class="fa-solid fa-arrow-down"></i> View Portfolio</a>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2 class="font-weight-bold"><i class="fa-solid fa-user"></i> About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5 mb-3">
            <div class="p-3 bg-light rounded shadow-sm">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p>
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <div class="p-3 bg-light rounded shadow-sm">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Youtube & IG -->
     <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2 class="font-weight-bold"><i class="fa-brands fa-youtube"></i> <i class="fa-brands fa-instagram"></i> Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5 mb-4">
            <div class="card shadow-sm border-0">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-4 text-center mb-2 mb-md-0">
                    <img src="<?= $youtubeProfilePic; ?>" width="120" class="rounded-circle img-thumbnail border border-danger">
                  </div>
                  <div class="col-md-8">
                    <h5 class="font-weight-bold mb-1"><?= $channelName; ?></h5>
                    <p class="mb-1"><i class="fa-brands fa-youtube text-danger"></i> <?= number_format($subscriber); ?> Subscribers</p>
                    <div class="g-ytsubscribe" data-channelid="UC4XkMCUQoObc_UATFUyMeKA" data-layout="default" data-count="default"></div>
                  </div>
                </div>
                <div class="row mt-3 pb-3">
                  <div class="col">
                    <div class="embed-responsive embed-responsive-16by9 rounded shadow-sm">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 mb-4">
            <div class="card shadow-sm border-0">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-md-4 text-center mb-2 mb-md-0">
                    <img src="<?= $profilePictureIG; ?>" width="120" class="rounded-circle img-thumbnail border border-pink">
                  </div>
                  <div class="col-md-8">
                    <h5 class="font-weight-bold mb-1"><?= $usernameIG ?></h5>
                    <p class="mb-1"><i class="fa-brands fa-instagram text-pink"></i> <?= number_format($followersIG); ?> Followers</p>
                  </div>
                </div>
                <div class="row mt-3 pb-3">
                  <div class="col">
                    <div class="embed-responsive embed-responsive-16by9 rounded shadow-sm">
                      <img src="<?= $gambar1; ?>" class="embed-responsive-item" style="object-fit:cover; width:100%; height:100%;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </section>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2 class="font-weight-bold"><i class="fa-solid fa-briefcase"></i> Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/1.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/2.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2 class="font-weight-bold"><i class="fa-solid fa-envelope"></i> Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 mb-4">
            <div class="card bg-primary text-white mb-4 text-center shadow-sm">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><i class="fa-solid fa-phone"></i> Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4 shadow-sm">
              <li class="list-group-item"><h5 class="font-weight-bold"><i class="fa-solid fa-location-dot"></i> Location</h5></li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
              <li class="list-group-item">West Java, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6 mb-4">
            <form>
              <div class="form-group">
                <label for="nama"><i class="fa-solid fa-user"></i> Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="phone"><i class="fa-solid fa-phone"></i> Phone Number</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter your phone number">
              </div>
              <div class="form-group">
                <label for="message"><i class="fa-solid fa-message"></i> Message</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Type your message"></textarea>
              </div>
              <div class="form-group text-right">
                <button type="button" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p>Copyright &copy; 2018.</p>
          </div>
        </div>
      </div>
    </footer>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>