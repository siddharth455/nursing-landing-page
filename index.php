<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BSc Nursing Admission 2026 | GNC</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <style>
    .hero {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 2rem;
      background: url('uploads/nursing.jpg') no-repeat center center;
      background-size: cover;
      position: relative;
      gap: 2rem;
      color: white;
    }
  </style>
</head>

<body>
  <header>
    <img src="uploads/logo.webp" alt="GNC Logo">
    <p style="font-size: larger; font-weight:900; color:black">Great Excellence comes with great academics</p>
  </header>

  <section class="hero d-flex justify-content-end">
    <div class="hero-text" style="margin-right: -25rem;">
      <?php require "Form.php"; ?>
    </div>

    <!-- Placeholder for form on desktop -->
    <div class="hero-card" id="form-desktop"></div>
  </section>

  <!-- Placeholder for form on mobile -->
  <div id="form-mobile" style="padding: 1rem; display: none;"></div>

  <!-- Script loaded once -->



  <script>
    function scrollToForm() {
      setTimeout(() => {
        const target = document.getElementById("ee-form-6");
        if (target) {
          const yOffset = -100; // scroll 100px above the form
          const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;
          window.scrollTo({
            top: y,
            behavior: 'smooth'
          });

        }
      }, 300); // Wait 300ms to allow script to render
    }
  </script>

  <section>
    <h2>Guru Nanak College - Best BSc Nursing College in Dehradun, Uttarakhand</h2>
    <p>The Bachelor of Science in Nursing (BSc Nursing) is a four-year undergraduate degree that prepares students for a career in nursing, a vital component of the healthcare sector. This program offers comprehensive education and training in nursing and healthcare practices, focusing on patient care, health promotion, and disease prevention.</p>
    <p>Over the course of the program, students gain in-depth knowledge in areas such as human anatomy, physiology, microbiology, and psychology. The curriculum also includes extensive clinical training, where students acquire hands-on experience in various healthcare settings. This practical component is crucial for developing skills in patient assessment, administering medications, managing patient care, and working collaboratively with other healthcare professionals.</p>
    <h2>Career Prospects:</h2>
    After completing a Bachelor of Science in Nursing (BSc Nursing), graduates can pursue various career paths. They can become Registered Nurses (RNs) in hospitals, clinics, or community centers, providing direct patient care. With additional training, they can specialize in fields like pediatrics or oncology. Experienced nurses may advance to managerial roles, overseeing departments and policies. Opportunities also exist in public health, education, and research, where nurses contribute to broader health initiatives, teach future nurses, or engage in healthcare studies. Additionally, some may opt for travel nursing, offering care in diverse locations, or become legal nurse consultants, bridging healthcare and legal sectors.
  </section>

  <?php require "application-process.php" ?>


  <section class="welcome">
    <div class="welcome-text">
      <h2>Welcome to Guru Nanak College</h2>
      <p>At Guru Nanak College, Dehradun, we are committed to nurturing future healthcare professionals through a transformative learning journey rooted in compassion, clinical excellence, and ethical practice. Our Nursing Department blends rigorous academic training with hands-on clinical exposure, ensuring students are well-equipped to meet the ever-evolving demands of global healthcare.</p>
      <ol>
        <li>Industry-Aligned Curriculum with a Choice-Based Credit System, allowing students to pursue passion-oriented subjects alongside core clinical knowledge.</li>
        <li>Integrated Global Skill Certifications in healthcare communication, digital health, emergency response, and AI in nursing practices.</li>
        <li>State-of-the-Art Simulation Labs, AI-enabled learning tools, and digital platforms enhance classroom teaching and practical experience.</li>
        <li>Learning Beyond the Classroom through live projects, clinical internships in reputed hospitals, and community outreach programs.</li>
        <li>Globally-Inspired Delivery by national and international healthcare educators via hybrid (online + offline) modes.</li>
        <li>Student-Centric Governance with campus activities, health camps, and community events led by student committees.</li>
        <li>Holistic Development through soft-skills training, ethical leadership modules, yoga, and wellness initiatives.</li>
      </ol>
      <p>Nestled in the serene and vibrant city of Dehradun, the campus offers a peaceful yet energetic environment, ideal for academic and personal growth. Proximity to top healthcare centers, lush green spaces, and weekend retreats in the Himalayas ensures that learning comes with balance and inspiration.</p>
      <p><strong>Join us in shaping the future of healthcare, one dedicated nurse at a time.</strong></p>
    </div>
    <div class="welcome-image">
      <img src="uploads/gnc.webp" alt="Campus">
    </div>
  </section>

  <section class="footer-gallery">
    <div class="gallery-grid">
      <img src="https://via.placeholder.com/150x100" alt="img1">
      <img src="https://via.placeholder.com/150x100" alt="img2">
      <img src="https://via.placeholder.com/150x100" alt="img3">
      <img src="https://via.placeholder.com/150x100" alt="img4">
      <img src="https://via.placeholder.com/150x100" alt="img5">
      <img src="https://via.placeholder.com/150x100" alt="img6">
      <img src="https://via.placeholder.com/150x100" alt="img7">
      <img src="https://via.placeholder.com/150x100" alt="img8">
    </div>

    <div class="gallery-slider">
      <div class="slider-track">
        <img src="https://via.placeholder.com/150x100" alt="img1">
        <img src="https://via.placeholder.com/150x100" alt="img2">
        <img src="https://via.placeholder.com/150x100" alt="img3">
        <img src="https://via.placeholder.com/150x100" alt="img4">
        <img src="https://via.placeholder.com/150x100" alt="img5">
        <img src="https://via.placeholder.com/150x100" alt="img6">
        <img src="https://via.placeholder.com/150x100" alt="img7">
        <img src="https://via.placeholder.com/150x100" alt="img8">
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>
<footer>
  <p>All Rights Reserved @ Guru Nanak College</p>
</footer>