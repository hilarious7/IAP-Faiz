<!-- Hero Section -->
<div class="hero-section position-relative py-5" style="background: linear-gradient(120deg, #e3e9f7 60%, #f8fafc 100%); min-height: 420px;">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-3 text-center mb-4 mb-md-0">
        <div class="position-relative d-inline-block hero-avatar">
          <img src="<?= base_url(); ?>assets/img/profile1.jpg" class="rounded-circle img-thumbnail shadow-lg border-4" style="width: 170px; height: 170px; object-fit: cover; border: 6px solid #fff;">
          <span class="position-absolute" style="bottom: 10px; right: 10px;">
            <i class="fas fa-circle text-success" title="Online" style="font-size: 1.2rem;"></i>
          </span>
        </div>
      </div>
      <div class="col-md-7 text-center text-md-left">
        <h1 class="display-4 font-weight-bold mb-2" style="letter-spacing: 2px; color: #2d3a4b; text-shadow: 0 2px 12px rgba(0,0,0,0.07);">
          Muhammad Raja Faiz
        </h1>
        <h3 class="lead mb-3" style="font-size: 1.5rem;">
          <span class="badge badge-light text-primary px-3 py-2 shadow-sm mr-2 animated-badge"><i class="fas fa-user-graduate"></i> College Student</span>
          <span class="badge badge-light text-success px-3 py-2 shadow-sm mr-2 animated-badge"><i class="fas fa-code"></i> Programmer</span>
          <span class="badge badge-light text-danger px-3 py-2 shadow-sm animated-badge"><i class="fas fa-gamepad"></i> Gamer</span>
        </h3>
        <p class="mb-4" style="font-size: 1.15rem; color: #4a5568;">
          Welcome to my personal website! I love <span class="font-weight-bold text-primary">coding</span>, learning new things, and playing games.<br>
          <span class="d-inline-block mt-2">Let's connect and collaborate!</span>
        </p>
        <a href="#portfolio" class="btn btn-primary btn-lg px-4 shadow-sm mr-2 hero-btn"><i class="fas fa-user"></i> About Me</a>
        <a href="#contact" class="btn btn-outline-primary btn-lg px-4 shadow-sm hero-btn"><i class="fas fa-paper-plane"></i> Contact</a>
      </div>
    </div>
  </div>
  <!-- Decorative SVG Shape -->
  <svg class="position-absolute w-100" style="bottom: -1px; left: 0;" height="60" viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="#f8fafc" d="M0,0 C480,60 960,0 1440,60 L1440,60 L0,60 Z"></path>
  </svg>
</div>
<style>
  .hero-section {
    overflow: hidden;
    position: relative;
    z-index: 2;
  }
  .hero-avatar img {
    box-shadow: 0 8px 32px rgba(44,62,80,0.13), 0 2px 8px rgba(44,62,80,0.07);
    transition: transform 0.3s;
  }
  .hero-avatar img:hover {
    transform: scale(1.05) rotate(-2deg);
    box-shadow: 0 16px 48px rgba(44,62,80,0.18), 0 4px 16px rgba(44,62,80,0.10);
  }
  .animated-badge {
    animation: badgePop 1.2s cubic-bezier(.68,-0.55,.27,1.55) both;
    display: inline-block;
  }
  .animated-badge:nth-child(1) { animation-delay: 0.1s; }
  .animated-badge:nth-child(2) { animation-delay: 0.25s; }
  .animated-badge:nth-child(3) { animation-delay: 0.4s; }
  @keyframes badgePop {
    0% { transform: scale(0.7) translateY(20px); opacity: 0; }
    60% { transform: scale(1.1) translateY(-5px); opacity: 1; }
    100% { transform: scale(1) translateY(0); opacity: 1; }
  }
  .hero-btn {
    border-radius: 2em;
    font-weight: 600;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 8px rgba(44,62,80,0.07);
    transition: background 0.2s, color 0.2s, box-shadow 0.2s;
  }
  .hero-btn:hover, .hero-btn:focus {
    box-shadow: 0 4px 16px rgba(44,62,80,0.13);
    transform: translateY(-2px) scale(1.03);
  }
  @media (max-width: 767px) {
    .hero-section {
      padding-top: 2.5rem !important;
      padding-bottom: 2.5rem !important;
    }
    .hero-avatar img {
      width: 120px !important;
      height: 120px !important;
    }
    .display-4 {
      font-size: 2rem;
    }
    .lead {
      font-size: 1.1rem !important;
    }
  }
</style>

    <!-- Portfolio -->
    <style>
      .portfolio .card {
        border-radius: 1.5rem !important;
        overflow: hidden;
        transition: transform 0.2s, box-shadow 0.2s;
        box-shadow: 0 6px 24px rgba(0,0,0,0.08), 0 1.5px 6px rgba(0,0,0,0.04);
        border: none;
        background: linear-gradient(135deg, #f8fafc 80%, #e3e9f7 100%);
        position: relative;
      }
      .portfolio .card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 12px 32px rgba(0,0,0,0.13), 0 3px 12px rgba(0,0,0,0.07);
        background: linear-gradient(135deg, #e3e9f7 60%, #f8fafc 100%);
      }
      .portfolio .card-img-top {
        border-radius: 1.5rem 1.5rem 0 0 !important;
        height: 180px;
        object-fit: cover;
        filter: brightness(0.97) saturate(1.1);
        transition: filter 0.2s;
      }
      .portfolio .card:hover .card-img-top {
        filter: brightness(1.05) saturate(1.2);
      }
      .portfolio .card-body {
        padding: 1.5rem 1.2rem 1rem 1.2rem;
        background: transparent;
      }
      .portfolio .card-title {
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 0.7rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }
      .portfolio .card-footer {
        background: transparent;
        border: none;
        padding-bottom: 1.2rem;
        padding-top: 0.5rem;
      }
      .portfolio .badge {
        font-size: 1rem;
        padding: 0.5em 1em;
        border-radius: 2em;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        font-weight: 500;
        letter-spacing: 0.5px;
      }
      .portfolio .list-unstyled li {
        margin-bottom: 0.3rem;
        font-size: 1.08rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }
      .portfolio .card::before {
        content: '';
        position: absolute;
        top: -30px; right: -30px;
        width: 60px; height: 60px;
        background: radial-gradient(circle at 30% 30%, #e3e9f7 60%, transparent 100%);
        z-index: 1;
        opacity: 0.5;
        pointer-events: none;
      }
      @media (max-width: 767px) {
        .portfolio .card-img-top {
          height: 130px;
        }
        .portfolio .card-body {
          padding: 1rem 0.8rem 0.8rem 0.8rem;
        }
      }
    </style>
    <section class="portfolio py-5 bg-light" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2 class="font-weight-bold text-primary mb-3">About Me</h2>
            <p class="lead text-muted">Perjalanan pendidikan dan hobi saya</p>
          </div>
        </div>
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/1t.jpg" alt="Lahir di Padang">
              <div class="card-body">
                <h5 class="card-title text-primary"><i class="fas fa-birthday-cake"></i> Kelahiran</h5>
                <p class="card-text">Terlahir pada 25 September 2003 di kota Padang, awal dari perjalanan penuh inspirasi dan pengalaman berharga.</p>
              </div>
              <div class="card-footer">
                <span class="badge badge-pill badge-info"><i class="fas fa-map-marker-alt"></i> Padang</span>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/2t.jpg" alt="SD dan SMP">
              <div class="card-body">
                <h5 class="card-title text-success"><i class="fas fa-school"></i> SD & SMP</h5>
                <p class="card-text">SD 48 Kuranji Padang & SMP N 30 Padang.</p>
              </div>
              <div class="card-footer">
                <span class="badge badge-pill badge-success"><i class="fas fa-book"></i> Pendidikan Dasar dan Menengah</span>
              </div>
            </div>
          </div> 
          <!-- Card 3 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/3t.jpg" alt="SMA Negeri 5 Padang">
              <div class="card-body">
                <h5 class="card-title text-warning"><i class="fas fa-graduation-cap"></i> SMA Negeri 5 Padang</h5>
                <p class="card-text">Jurusan MIPA, lulus tahun 2022.</p>
              </div>
              <div class="card-footer">
                <span class="badge badge-pill badge-warning text-white"><i class="fas fa-certificate"></i> SMA/MA</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Card 4 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/4t.jpg" alt="Kuliah UIN IB">
              <div class="card-body">
                <h5 class="card-title text-info"><i class="fas fa-university"></i> UIN Imam Bonjol</h5>
                <p class="card-text">Kuliah di Universitas Islam Negeri Imam Bonjol Padang angkatan 2022.</p>
              </div>
              <div class="card-footer">
                <span class="badge badge-pill badge-info"><i class="fas fa-user-graduate"></i> Mahasiswa</span>
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/5t.jpg" alt="Fakultas Saintek">
              <div class="card-body">
                <h5 class="card-title text-danger"><i class="fas fa-laptop-code"></i> Sistem Informasi</h5>
                <p class="card-text">Fakultas Sains dan Teknologi, Program Studi Sistem Informasi.</p>
              </div>
              <div class="card-footer">
                <span class="badge badge-pill badge-danger"><i class="fas fa-code"></i> Saintek</span>
              </div>
            </div>
          </div>
          <!-- Card 6 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/6t.jpg" alt="Hobi">
              <div class="card-body">
                <h5 class="card-title text-dark"><i class="fas fa-gamepad"></i> Hobi & Favorit</h5>
                <ul class="list-unstyled mb-2">
                    <li><i class="fas fa-flag-checkered text-danger"></i> Nonton F1 - Menyaksikan balapan Formula 1 dan memberikan dukungan ke max verstappen du du duu...</li>
                  
                <p class="card-text"><span class="badge badge-dark">Warna Favorit: Hitam</span></p>
              </div>
              <div class="card-footer">
                <span class="badge badge-pill badge-secondary"><i class="fas fa-heart"></i> Hobi</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-gradient-primary-to-secondary py-5" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2 class="font-weight-bold text-primary mb-3">Contact</h2>
            <p class="lead text-muted">Feel free to reach out for collaboration or just say hello!</p>
          </div>
        </div>
        <div class="row justify-content-center align-items-stretch">
          <div class="col-lg-4 mb-4">
            <div class="card shadow border-0 h-100">
              <div class="card-body bg-primary text-white rounded-top text-center">
                <h5 class="card-title mb-3"><i class="fas fa-envelope-open-text fa-lg"></i> Contact Me</h5>
                <p class="card-text">I'm open for new opportunities and collaborations. Let's connect!</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light">
                  <h6 class="mb-1 text-primary"><i class="fas fa-map-marker-alt"></i> Location</h6>
                  <p class="mb-0 small">My Home</p>
                  <p class="mb-0 small">Komp. Mega Mulia Blok C2 No.13</p>
                  <p class="mb-0 small">West Sumatera, Indonesia</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="card shadow border-0 h-100">
              <div class="card-body">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="nama"><i class="fas fa-user"></i> Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email"><i class="fas fa-envelope"></i> Email</label>
                      <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                    <input type="text" class="form-control" id="phone" placeholder="+62 8xxx xxxx">
                  </div>
                  <div class="form-group">
                    <label for="message"><i class="fas fa-comment-dots"></i> Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Type your message here..."></textarea>
                  </div>
                  <div class="form-group text-right">
                    <button type="button" class="btn btn-primary btn-lg px-4 shadow-sm">
                      <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <style>
        #contact .card {
          border-radius: 1rem !important;
          overflow: hidden;
        }
        #contact .card-body.bg-primary {
          border-bottom-left-radius: 0;
          border-bottom-right-radius: 0;
        }
        #contact .form-control:focus {
          border-color: #007bff;
          box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
        #contact .btn-primary {
          background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
          border: none;
        }
        #contact .btn-primary:hover {
          background: linear-gradient(90deg, #0056b3 60%, #007bff 100%);
        }
      </style>
    </section>
