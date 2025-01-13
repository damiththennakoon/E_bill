<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .about-us-section {
      display: flex;
      flex-direction: row-reverse; /* Reverse order to place image on the left */
      justify-content: space-between;
      align-items: center;
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
      background-color: #e0e0e0;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .about-us-content {
      flex: 1;
      padding-left: 20px; /* Adjust padding to the left instead of right */
    }

    .about-us-content h2 {
      font-size: 24px;
      color: #229ac0;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .about-us-content h3 {
      font-size: 18px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }

    .about-us-content p {
      font-size: 14px;
      color: #666;
      line-height: 1.6;
    }

    .read-more-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 14px;
      color: white;
      background-color: #229ac0;
      text-decoration: none;
      border-radius: 4px;
    }

    .read-more-btn:hover {
      background-color: #1a7a98;
    }

    .social-icons {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }

    .social-icons a {
      font-size: 20px;
      color: #666;
      text-decoration: none;
    }

    .social-icons a:hover {
      color: #229ac0;
    }

    .about-us-image {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .about-us-image img {
      max-width: 100%;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="about-us-section">
    <div class="about-us-image">
      <img src="https://via.placeholder.com/300x300" alt="About Us">
    </div>
    <div class="about-us-content">
      <h2>About Us</h2>
      <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <a href="#" class="read-more-btn">Read More</a>
      <div class="social-icons">
        <a href="#">&#xf09a;</a> <!-- FontAwesome Facebook icon -->
        <a href="#">&#xf099;</a> <!-- FontAwesome Twitter icon -->
        <a href="#">&#xf16d;</a> <!-- FontAwesome Instagram icon -->
      </div>
    </div>
  </div>
</body>
</html>
