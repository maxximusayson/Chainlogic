<?php include(APPPATH . 'Views/layout/header.php'); ?>

<link href="https://fonts.googleapis.com/css2?family=Teachers&display=swap" rel="stylesheet">


<!-- Loader -->
<div id="loader">
  <img src="<?= base_url('images/logo.png') ?>" alt="Logo" class="loader-logo">
  <div class="spinner"></div>
</div>
<style>
  /* Fullscreen Loader Container */
  #loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #588FA6;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 1;
    transition: opacity 0.7s ease;
  }

  /* Logo styling */
  .loader-logo {
    width: 120px;
    height: auto;
    margin-bottom: 20px;
  }

  /* Spinner style */
  .spinner {
    border: 6px solid rgba(255, 255, 255, 0.3);
    border-top: 6px solid white;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }
</style>
<script>
  // Fade out the loader after 5 seconds
  setTimeout(() => {
    const loader = document.getElementById('loader');
    loader.style.opacity = '0';
    setTimeout(() => {
      loader.style.display = 'none';
    }, 700); // match the CSS transition duration
  }, 3000);
</script>

<!-- Home Section -->
<br><br>
<section class="home-section">
  <div class="home-text">
  <h1>Innovating Your Business</h1>
<p>
  Chainlogic provides innovative solutions to streamline your operations and boost productivity. Our team offers cutting-edge technology and expert support to keep your business ahead of the curve.
</p>


  </div>
  <div class="home-image">
    <img src="images/hm1.png" alt="Building Image">
  </div>
</section>


<!-- Who We Are Section -->
<section class="who-we-are">
  <div class="who-image">
    <img src="images/hm2.png" alt="City Image">
  </div>
  <div class="who-text">
    <h2>Who We Are</h2>
    <p>
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
    </p>
  </div>
</section>
<script>
  function handleScrollFade() {
    const section = document.querySelector('.who-we-are');
    const sectionTop = section.getBoundingClientRect().top;
    const triggerPoint = window.innerHeight * 0.8;

    if (sectionTop < triggerPoint) {
      section.classList.add('fade-in');
    }
  }

  window.addEventListener('scroll', handleScrollFade);
  window.addEventListener('load', handleScrollFade); // Run on load in case it's already in view
</script>


<!-- Why Us Section -->
<section class="why-us">
  <img src="images/hm3.png" alt="Left Image" class="why-image left-img">

  <div class="why-text">
    <h3>Why us</h3>
    <p>
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
    </p>
  </div>

  <img src="images/hm4.png" alt="Right Image" class="why-image right-img">
</section>

<script>
  function handleScrollFade() {
    const whoSection = document.querySelector('.who-we-are');
    const whySection = document.querySelector('.why-us');
    const triggerPoint = window.innerHeight * 0.8;

    if (whoSection.getBoundingClientRect().top < triggerPoint) {
      whoSection.classList.add('fade-in');
    }

    if (whySection.getBoundingClientRect().top < triggerPoint) {
      whySection.classList.add('visible');
    }
  }

  window.addEventListener('scroll', handleScrollFade);
  window.addEventListener('load', handleScrollFade); // In case it's already in view
</script>




<!-- Our Projects Section -->
<section class="our-projects">
<h2 class="center-text">Our Projects</h2>

  <div class="project-gallery">
  <div class="project-card" style="background-image: url('images/h1.png');">
      <div class="project-text">LOREM IPSUM<br>DOLOR</div>
    </div>
    <div class="project-card" style="background-image: url('images/h2.png');">
      <div class="project-text">LOREM IPSUM<br>DOLOR</div>
    </div>
    <div class="project-card" style="background-image: url('images/h3.png');">
      <div class="project-text">LOREM IPSUM<br>DOLOR</div>
    </div>
    <div class="project-card" style="background-image: url('images/h4.png');">
      <div class="project-text">LOREM IPSUM<br>DOLOR</div>
    </div>
  </div>
</section>




<br><br><br>

  <!-- Team Section -->
  <section class="team-section">
    <h2 class="team-title">Our Team</h2>

    <div class="team-grid">
      <!-- Member Left -->
      <div class="team-member left1" data-index="1">
        <div class="member-text">
          <h3 class="name">Mathew Mat</h3>
          <p class="role">Developer</p>
          <p class="desc">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut.</p>
          <div class="line"><span class="dot"></span></div>
        </div>
        <img src="images/r1.jpg" alt="Mathew Mat" class="avatar" />
      </div>

      <!-- Member Right -->
      <div class="team-member right" data-index="2">
        <div class="member-text text-right">
          <h3 class="name">Sarah Lee</h3>
          <p class="role">Designer</p>
          <p class="desc">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut.</p>
          <div class="line align-right"><span class="dot"></span></div>
        </div>
        <img src="images/r2.jpg" alt="Sarah Lee" class="avatar" />
      </div>

      <!-- Member Left -->
      <div class="team-member left2" data-index="3">
        <div class="member-text">
          <h3 class="name">John Doe</h3>
          <p class="role">Project Manager</p>
          <p class="desc">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut.</p>
          <div class="line"><span class="dot"></span></div>
        </div>
        <img src="images/r3.jpg" alt="John Doe" class="avatar" />
      </div>

      <!-- Member Right -->
      <div class="team-member right2" data-index="4">
        <div class="member-text text-right">
          <h3 class="name">Anna White</h3>
          <p class="role">Marketing</p>
          <p class="desc">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut.</p>
          <div class="line align-right"><span class="dot"></span></div>
        </div>
        <img src="images/r4.jpg" alt="Anna White" class="avatar" />
      </div>
    </div>
  </section>

  <!-- Scroll animation script -->
  <script>
    function revealTeamMembers() {
      const members = document.querySelectorAll('.team-member');
      const triggerPoint = window.innerHeight * 0.85;

      members.forEach(member => {
        const top = member.getBoundingClientRect().top;
        if (top < triggerPoint) {
          member.classList.add('visible');
        }
      });
    }

    window.addEventListener('scroll', revealTeamMembers);
    window.addEventListener('load', revealTeamMembers);
  </script>





</body>

</html>
