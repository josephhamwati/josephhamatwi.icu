<?php
    include('header.php')
    ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1 style="color: white;">Welcome to the balastone Community</h1>
                <h2 style="color: white;">We are committed to the growth and prosperity of balastone</h2>
            </div>
        </div>


        <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-tree-line"></i></div>
                    <h4 class="title">Preserve Our Environment</h4>
                    <p class="description">Protect balastone's natural beauty</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="ri-hand-heart-line"></i></div>
                    <h4 class="title">Support Local Initiatives</h4>
                    <p class="description">Empower balastone's community projects</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="ri-chat-3-line"></i></div>
                    <h4 class="title">Engage in Dialogue</h4>
                    <p class="description">Discuss ideas for balastone's development</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon"><i class="ri-rocket-line"></i></div>
                    <h4 class="title">Drive Positive Change</h4>
                    <p class="description">Lead balastone towards a brighter future</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Report Section -->


<section class="about-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title">About Balastone Community, Lusaka</h2>
                <p class="lead">Welcome to Balastone, a vibrant community in Lusaka!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h3>Our History</h3>
                <p>Balastone, located in Lusaka, is a rapidly growing residential area known for its proximity to local
                    businesses, schools, and essential services. Over the years, the area has seen significant
                    development, offering a mix of affordable housing and commercial opportunities for its residents.
                    With Lusaka’s expansion, Balastone has become a sought-after community for families and entrepreneurs alike.</p>
            </div>
            <div class="col-lg-6 mb-4">
                <h3>Our Culture</h3>
                <p>Balastone is home to a diverse population, reflective of Lusaka's multicultural nature. Community
                    events, religious gatherings, and social activities play a major role in bringing the people of
                    Balastone together. The residents celebrate various cultural and national holidays, fostering a
                    strong sense of unity and community pride.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h3>Community Life</h3>
                <p>Life in Balastone is dynamic, with local markets, small businesses, and social centers adding to the
                    vibrancy of the community. The area is known for its welcoming atmosphere, with local initiatives
                    focusing on education, healthcare, and commerce to support the well-being of its residents.</p>
                <ul>
                    <li><strong>Education:</strong> Balastone has several schools catering to different educational
                        levels, from primary schools to secondary institutions. There are also vocational training
                        centers that equip young people with essential skills for employment.</li>
                    <li><strong>Healthcare:</strong> The community is served by local clinics and health centers
                        providing essential medical services to ensure that residents have access to healthcare
                        facilities close to home.</li>
                    <li><strong>Commerce:</strong> Balastone has a growing local economy with markets, shops, and
                        businesses that provide goods and services to the community. It’s a great place for entrepreneurs
                        looking to establish local enterprises.</li>
                </ul>
            </div>
            <div class="col-lg-6 mb-4">
                <h3>Development and Infrastructure</h3>
                <p>Balastone is part of Lusaka’s ongoing infrastructure development plan. The area is connected by major
                    roads, with easy access to Lusaka’s city center and other important hubs. Ongoing improvements in
                    public transport and utilities ensure that the community continues to grow and develop, attracting
                    more residents and businesses.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3>Our Vision</h3>
                <p>As a growing part of Lusaka, Balastone strives to maintain its sense of community while welcoming new
                    development and investment. The vision for Balastone is to continue improving the quality of life for
                    its residents, ensuring access to education, healthcare, and business opportunities while preserving
                    the community’s unique character.</p>
                <p><strong>Welcome to Balastone, Lusaka - a place of growth, opportunity, and community spirit!</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- End Hero -->
<section class="bg-primary">
 <center> <h1>Advanced Weather Widget</h1></center>

  <style>
    .weather-widget {
      font-family: Arial, sans-serif;
      padding: 20px;
      border-radius: 8px;
      width: 100%;
      max-width: 350px;
      margin: 0 auto;
      background-color: #e0f7fa;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      transition: background-color 0.5s;
    }
    .weather-widget h2 {
      margin: 0;
      font-size: 1.8em;
      color: #333;
    }
    .weather-info {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 20px;
    }
    .weather-info img {
      width: 80px;
      height: 80px;
    }
    .temperature {
      font-size: 3em;
      color: #ff5722;
    }
    .details {
      margin-top: 20px;
    }
    .details div {
      margin-bottom: 8px;
      font-size: 1em;
    }
    .date {
      font-size: 1em;
      color: #666;
    }
    @media screen and (max-width: 768px) {
      .weather-widget {
        width: 90%;
      }
    }
  </style>

  <div class="weather-widget" id="weather-widget">
    <h2 id="city">Weather in Lusaka</h2>
    <p class="date" id="date">--</p>
    <div class="weather-info">
      <div class="main-info">
        <div class="temperature" id="temperature">--°C</div>
        <div class="description" id="description">Loading...</div>
      </div>
      <img id="icon" src="" alt="Weather Icon">
    </div>
    <div class="details">
      <div>Humidity: <span id="humidity">--%</span></div>
      <div>Wind Speed: <span id="wind-speed">-- m/s</span></div>
      <div>Pressure: <span id="pressure">-- hPa</span></div>
    </div>
  </div>

  <script>
    const apiKey = '7cdd55fa86d50c0bd4717bb84c9dcf36';
    const city = 'Lusaka';
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`;
    
    function updateBackgroundColor(temp) {
      const widget = document.getElementById('weather-widget');
      if (temp >= 30) {
        widget.style.backgroundColor = '#ffccbc'; // Hot (orange)
      } else if (temp >= 20) {
        widget.style.backgroundColor = '#ffe082'; // Warm (yellow)
      } else {
        widget.style.backgroundColor = '#b3e5fc'; // Cold (blue)
      }
    }

    function updateWeather(data) {
      const temperature = data.main.temp;
      const description = data.weather[0].description;
      const icon = `http://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png`;
      const humidity = data.main.humidity;
      const windSpeed = data.wind.speed;
      const pressure = data.main.pressure;

      document.getElementById('temperature').innerText = `${temperature}°C`;
      document.getElementById('description').innerText = description.charAt(0).toUpperCase() + description.slice(1);
      document.getElementById('icon').src = icon;
      document.getElementById('humidity').innerText = `${humidity}%`;
      document.getElementById('wind-speed').innerText = `${windSpeed} m/s`;
      document.getElementById('pressure').innerText = `${pressure} hPa`;

      updateBackgroundColor(temperature);

      // Update date
      const date = new Date();
      document.getElementById('date').innerText = date.toDateString();
    }

    fetch(apiUrl)
      .then(response => response.json())
      .then(data => updateWeather(data))
      .catch(error => {
        console.error('Error fetching weather data:', error);
        document.getElementById('description').innerText = 'Unable to load data.';
      });
  </script>
</section>

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Citizen Engagement</h2>
                <p>
                    Engage, empower, and make a difference in the balastone community.
                </p>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        At balastone, we believe in the power of active citizen
                        participation to shape our community's future.
                    </p>
                    <ul>
                        <li>
                            <i class="ri-check-double-line"></i> Collaborate with fellow
                            citizens to address local challenges and opportunities.
                        </li>
                        <li>
                            <i class="ri-check-double-line"></i> Participate in community
                            events, discussions, and initiatives aimed at improving
                            balastone's well-being.
                        </li>
                        <li>
                            <i class="ri-check-double-line"></i> Contribute your skills,
                            ideas, and resources towards building a vibrant and
                            sustainable community.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Get involved today and be part of the positive change in balastone.
                    </p>
                    <a href="#" class="btn-learn-more">Get Involved</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Reports Section ======= -->

 

<section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4254.3416058412995!2d28.226633447846027!3d-15.347279883402514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f592aa9735f1%3A0x958d0115f2391623!2sBalastone%20Park%20Congregation!5e0!3m2!1sen!2szm!4v1727103995356!5m2!1sen!2szm" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
    <!-- End Contact Section -->
</main>
<!-- End #main --><?php
    include('footer.php')
    ?>