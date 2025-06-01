<!-- About -->
<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
      <h2 class="display-5 fw-bold text-gradient">About My Project</h2>
      <p class="lead text-muted">Explore my API projects below</p>
    </div>
  </div>

  <!-- Portfolio -->
  <section class="portfolio py-5" id="portfolio">
    <div class="row justify-content-center">
      <?php
      $projects = [
        [
          'img' => '1.png',
          'title' => 'JSON',
          'desc' => 'Latihan API menggunakan file JSON.',
          'tech' => 'PHP, JSON, cURL',
          'link' => '../json1/latihan1.php'
        ],
        [
          'img' => '2.png',
          'title' => 'WPU-HUT',
          'desc' => 'Latihan API menggunakan file JSON berbasis website.',
          'tech' => 'HTML, CSS, JavaScript, JSON',
          'link' => '../wpu-hut/latihan2.html'
        ],
        [
          'img' => '3t.png',
          'title' => 'WPU-MOVIE',
          'desc' => 'Latihan API menggunakan Public API OMDb API berbasis website.',
          'tech' => 'HTML, CSS, JavaScript, OMDb API',
          'link' => '../wpu-movie/index.html'
        ],
        [
          'img' => '4t.png',
          'title' => 'WPU-PORTFOLIO',
          'desc' => 'Latihan API menggunakan Public API Youtube dan Instagram menggunakan cURL berbasis website.',
          'tech' => 'PHP, cURL, YouTube API, Instagram API',
          'link' => '../wpu-portfolio/index.php'
        ],
        [
          'img' => '5.png',
          'title' => 'WPU-REST-SERVER',
          'desc' => 'Membuat Rest Server menggunakan framework CodeIgniter3.',
          'tech' => 'PHP, CodeIgniter 3, REST API',
          'link' => '../wpu-rest-server/'
        ],
        [
          'img' => '6tt.png',
          'title' => 'WPU-REST-CLIENT',
          'desc' => 'Membuat Rest Client menggunakan framework CodeIgniter3',
          'tech' => 'PHP, CodeIgniter 3, REST API',
          'link' => 'home'
        ]
      ];

      foreach ($projects as $project): ?>
        <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
          <div class="card shadow border-0 h-100 hover-card glass-card" style="min-width: 18rem; max-width: 22rem;">
            <div class="position-relative">
              <img class="card-img-top rounded-top fixed-img" src="<?= base_url(); ?>assets/img/thumbs/<?= $project['img']; ?>" alt="<?= $project['title']; ?>">
              <span class="badge bg-gradient position-absolute top-0 end-0 m-2 px-3 py-2 shadow"><?= $project['title']; ?></span>
            </div>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-primary fw-semibold"><?= $project['title']; ?></h5>
              <p class="card-text flex-grow-1 text-muted"><?= $project['desc']; ?></p>
              <!-- Update this link to open modal -->
              <button class="btn btn-gradient mt-2 w-100 shadow-sm" data-bs-toggle="modal" data-bs-target="#projectModal" onclick="showProjectDetails('<?= $project['title']; ?>', '<?= $project['desc']; ?>', '<?= $project['tech']; ?>', '<?= base_url() . $project['link']; ?>')">See Project</button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectModalLabel">Technologies Used</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Technologies used:</strong></p>
          <ul id="techList"></ul> <!-- This will dynamically be filled by JavaScript -->
          <p><strong>Description:</strong></p>
          <p id="projectDesc"></p>
        </div>
        <div class="modal-footer">
          <a href="#" id="projectLink" class="btn btn-gradient">Visit Project</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .text-gradient {
    background: linear-gradient(90deg, #007cf0, #00dfd8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
  }
  .bg-gradient {
    background: linear-gradient(90deg, #007cf0, #00dfd8);
    color: #fff !important;
    border-radius: 1rem;
    font-size: 0.9rem;
    font-weight: 600;
    letter-spacing: 0.5px;
  }
  .btn-gradient {
    background: linear-gradient(90deg, #007cf0, #00dfd8);
    color: #fff;
    border: none;
    transition: background 0.3s, transform 0.3s ease-in-out;
  }
  .btn-gradient:hover, .btn-gradient:focus {
    background: linear-gradient(90deg, #00dfd8, #007cf0);
    color: #fff;
    transform: translateY(-4px) scale(1.1);
  }
  .hover-card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    width: 100%;
    display: flex;
    flex-direction: column;
  }
  .hover-card:hover {
    transform: translateY(-12px) scale(1.05);
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.2);
  }
  .glass-card {
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(6px);
    border-radius: 1.5rem;
    overflow: hidden;
  }
  .card-img-top.fixed-img {
    object-fit: cover;
    height: 200px;
    width: 100%;
    min-height: 200px;
    max-height: 200px;
    border-top-left-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
  }
  .card {
    min-width: 18rem;
    max-width: 22rem;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-direction: column;
    height: 100%;
    border-radius: 1.5rem;
  }
  .modal-body {
    padding: 20px;
  }
</style>

<script>
  function showProjectDetails(title, desc, tech, link) {
    // Set project title, description, and technologies
    document.getElementById('projectModalLabel').textContent = title;
    document.getElementById('projectDesc').textContent = desc;

    // Set technologies list
    const techList = tech.split(',').map(function(techItem) {
      return '<li>' + techItem.trim() + '</li>';
    }).join('');
    document.getElementById('techList').innerHTML = techList;

    // Set the project link
    document.getElementById('projectLink').setAttribute('href', link);
  }
</script>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS & Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
