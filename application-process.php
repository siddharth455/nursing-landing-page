<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Application Steps</title>
</head>
<style>
  .right-panel {
    flex: 1;
    max-width: 400px;
    height: 400px;
    background: url('uploads/apply.webp') center/cover no-repeat;
    color: white;
    padding: 2rem;
    border-radius: 10px;
    position: relative;
  }
</style>
<body>
  <div class="application-steps" style="background-color: #f7f7f7;">
<h1 style="text-align: center;">Steps to Follow</h1>
<div class="slider-container">
  <div class="left-panel">
    <h2>How to Apply?</h2>

    <div class="steps-indicator">
      <div class="step mb-2" id="step-0">
        <div class="step-icon">👤</div>
        <strong>Step 1</strong>
        <div>Registration Form</div>
      </div>
      <div class="step" id="step-1">
  <div class="step-icon">✅</div>
  <strong>Step 2</strong>
  <div>Application Form</div>
</div>

<div class="step" id="step-2">
  <div class="step-icon">💳</div>
  <strong>Step 3</strong>
  <div>Pay Application Fee</div>
</div>

<div class="step" id="step-3">
  <div class="step-icon">📝</div>
  <strong>Step 4</strong>
  <div>Entrance Examination</div>
</div>

<div class="step" id="step-4">
  <div class="step-icon">🗣️</div>
  <strong>Step 5</strong>
  <div>Interview Selection</div>
</div>

    </div>

    <div class="slide-content" id="slide-content">
      <h3>Step 1 - Registration Form</h3>
      <p>Start by registering your account with basic contact and personal details.</p>
    </div>
    <h2>Eligibility</h2>
    <ul>
      <li>10+2, with Physics, Chemistry and Biology as imperative subjects.</li>
      <li>Min. 50% marks for general and 45% marks in case of SC/ST category</li>
    </ul>
  </div>

  <div class="right-panel">
    <div class="right-panel-content">
      <h2>Aspire to Inspire:<br>Master Your Field</h2>
      <p>Take the first step toward your bright future. Join our academic community today!</p>
      <div class="btns">
      <button onclick="scrollToForm()">Apply Today</button>
      <a href="uploads/nursing-fee.pdf" target="_blank" rel="noopener">
  <button style="background: #0099ff;">Fee Structure</button>
</a>

      </div>
    </div>
  </div>
</div>
</div>

<script>
  const steps = [
    {
      title: "Step 1 - Registration Form",
      text: "Start by registering your account with basic contact and personal details."
    },
    {
      title: "Step 2 - Application Form",
      text: "Fill out the information and upload documents for the application processing and verification."
    },
    {
      title: "Step 3 - Pay Application Fee",
      text: "Once verified, you will be admitted and given your onboarding instructions."
    },
    {
      title: "step 4 -Entrance Examination",
      text: "After completing the entrance examination, you will be given your onboarding instructions"
    },
    {
      title: "Step 5 - Interview Selection",
      text: "After completing the interview, you will be given your onboarding instructions"
    }
  ];

  let current = 0;
  const slideContent = document.getElementById("slide-content");

  function updateSlide() {
    // Fade out
    slideContent.classList.add("fade-out");

    setTimeout(() => {
      // Update text content
      slideContent.innerHTML = `
        <h3>${steps[current].title}</h3>
        <p>${steps[current].text}</p>
      `;

      // Remove fade-out and fade-in
      slideContent.classList.remove("fade-out");

      // Highlight active step
      for (let i = 0; i < 5; i++) {
        document.getElementById(`step-${i}`).classList.remove("active");
      }
      document.getElementById(`step-${current}`).classList.add("active");

      // Move to next slide
      current = (current + 1) % steps.length;
    }, 500); // Match transition duration
  }

  // Initial load
  updateSlide();
  setInterval(updateSlide, 4000); // Change every 4s
</script>


</body>
</html>
