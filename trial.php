<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Work Experience</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #282c34;
    color: white;
    margin: 0;
    padding: 20px;
  }

  .experience-section {
    position: relative;
    padding: 20px 0;
  }

  .experience-section h1 {
    text-decoration: underline;
    text-align: center;
  }

  .timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
  }

  .timeline::after {
    content: '';
    position: absolute;
    width: 2px;
    background-color: #ddd;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -1px;
  }

  .experience {
    padding: 10px 30px;
    position: relative;
    width: 50%;
  }

  .experience.left {
    left: 0;
  }

  .experience.right {
    left: 50%;
  }

  .experience::before {
    content: '\2022';
    position: absolute;
    top: 10px;
    left: 45%;
    font-size: 20px;
    color: #f39c12;
    background-color: #282c34;
    border-radius: 50%;
    height: 20px;
    width: 20px;
    text-align: center;
    line-height: 20px;
  }

  .experience.left::before {
    left: 45%;
  }

  .experience.right::before {
    left: -5%;
  }

  .experience .content {
    padding: 20px;
    background-color: #333;
    position: relative;
    border-radius: 6px;
  }

  .experience.left .content {
    margin-right: 0;
  }

  .experience.right .content {
    margin-left: 0;
  }

  @media (max-width: 768px) {
    .experience, .experience::before {
      width: 100%;
      text-align: center;
      left: 0 !important;
    }

    .experience::before {
      left: 50%;
      margin-left: -10px;
    }

    .experience.left::before, .experience.right::before {
      left: 50%;
      margin-left: -10px;
    }
  }
</style>
</head>
<body>
<div class="experience-section">
  <h1 class="display-5 fw-bold text-center text-white text-decoration-underline">Experience</h1>
  <div class="timeline">
    <div class="experience left">
      <div class="content">
        <h3>Job Title 1</h3>
        <p>Company Name 1</p>
        <p>Duration: Jan 2020 - Dec 2021</p>
        <p>Description of the work experience, responsibilities, and achievements.</p>
      </div>
    </div>
    <div class="experience right">
      <div class="content">
        <h3>Job Title 2</h3>
        <p>Company Name 2</p>
        <p>Duration: Jan 2018 - Dec 2019</p>
        <p>Description of the work experience, responsibilities, and achievements.</p>
      </div>
    </div>
    <div class="experience left">
      <div class="content">
        <h3>Job Title 3</h3>
        <p>Company Name 3</p>
        <p>Duration: Jan 2016 - Dec 2017</p>
        <p>Description of the work experience, responsibilities, and achievements.</p>
      </div>
    </div>
    <!-- Add more experience entries here -->
  </div>
</div>
</body>
</html>
