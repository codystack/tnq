<div class="navbar-container ">
      <nav class="navbar navbar-expand-lg navbar-dark" data-sticky="top" style="background: #020122">
        <div class="container">
            <a class="navbar-brand fade-page" href="\">
                <img src="https://i.imgur.com/XSGaWUp.png" alt="TNQ" style="width: 200px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <img class="icon navbar-toggler-open" src="assets/img/icons/interface/menu.svg" alt="menu interface icon" data-inject-svg />
              <img class="icon navbar-toggler-close" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
            </button>
            <div class="collapse navbar-collapse">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item <?php if($page=='about'){echo 'active';}?>">
                    <a href="about" class="nav-link">About</a>
                </li>
                <li class="nav-item <?php if($page=='contestants'){echo 'active';}?>">
                    <a href="contestants" class="nav-link">Contestants</a>
                </li>
                <li class="nav-item <?php if($page=='gallery'){echo 'active';}?>">
                    <a href="gallery" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item <?php if($page=='wall-of-fame'){echo 'active';}?>">
                    <a href="wall-of-fame" class="nav-link">Wall of Fame</a>
                </li>
                <li class="nav-item">
                    <a href="https://blog.nigerianqueen.org" target="_blank" class="nav-link">Blog</a>
                </li>
                <li class="nav-item <?php if($page=='contact'){echo 'active';}?>">
                    <a href="contact" class="nav-link">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="https://live.nigerianqueen.org/"  class="nav-link" target="_blank">
                  <img class="icon bg-light" style="height: 30px;" src="assets/img/icons/theme/devices/lte-1.svg" alt="decoration" data-inject-svg />STREAM LIVE</a>
                </li>
              </ul>
            </div>
            <a href="register" class="btn btn-primary ml-lg-3">Register Now</a>
          </div>
        </div>
      </nav>
    </div>