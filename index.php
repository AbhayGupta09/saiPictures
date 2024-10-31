<?php include 'header.php'; ?>


<section id="gallery" class="container my-1">

    <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/sai-picture1.png" class="d-block w-100" alt="Gallery Image 1 Sai Picture capturing stunning aerial views">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sai-picture2.png" class="d-block w-100" alt="Gallery Image 2 sai-picture">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sai-picture3.png" class="d-block w-100" alt="Gallery Image 3 sai-picture">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sai-picture4.png" class="d-block w-100" alt="Gallery Image 4 sai-picture">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sai-picture5.png" class="d-block w-100" alt="Gallery Image 5 sai-picture">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- About Us -->
<section id="about" class="py-5" style="background-color: #EAD8B1;">
    <div class="container">
        <div class="row align-items-center wow animate__animated animate__fadeInUp">
            <div class="col-lg-6">
                <h2 class="text-center mb-4">About Us</h2>
                <p style="color: #001F3F;">
                    We are a professional team dedicated to capturing life's most precious moments with creativity and passion. Specializing in a range of photography and videography services, we aim to tell stories through the lens, providing a unique and memorable experience for each client. From cinematic wedding videos to candid photo shoots, our goal is to deliver high-quality visual stories that resonate with emotion and artistry.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="assets/images/sai-picture-about-us.png" alt="About Us sai-picture" class="img-fluid rounded" style="max-width: 80%; border: 5px solid #6A9AB0;">
            </div>
        </div>
    </div>
</section>


<!-- Our Portfolio -->
<section id="portfolio" class="py-5 " style="background-color: #001F3F;">
    <div class="container">
        <h2 class="text-center text-white mb-4">Our Portfolio</h2>
        <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row ">
                        <div class="col-md-4 mb-2 wow animate__animated animate__fadeInUpBig">
                            <div class="card text-center">
                                <img src="assets/images/sai-picture-pre-wedding.png" class="card-img-top" alt=" service by Sai Picture capturing Pre-Wedding Photoshoot">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Pre-Wedding Photoshoot</h5>
                                    <p class="card-text text-dark">Capturing the beautiful moments leading up to your big day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2 wow animate__animated animate__fadeInUpBig">
                            <div class="card text-center">
                                <img src="assets/images/sai-picture-wedding.png" class="card-img-top" alt=" service by Sai Picture capturing Wedding Shoot">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Wedding Shoot</h5>
                                    <p class="card-text text-dark">Memories of your special day captured in stunning detail.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2 wow animate__animated animate__fadeInUpBig">
                            <div class="card text-center">
                                <img src="assets/images/sai-picture-haldi.png" class="card-img-top" alt="service by Sai Picture capturing Haldi Shoot">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Haldi Shoot</h5>
                                    <p class="card-text text-dark">Cherishing the rituals that add color to your wedding celebrations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- youtube section -->
<section id="youtube-videos" class="py-5 wow animate__animated animate__backInLeft">
    <div class="container ">
        <h2 class="text-center text-white mb-4">Our Videos</h2>
        <div class="row">
            <div class="col-md-4 mb-4 wow animate__animated animate__backInLeft" >
                <div class="video-wrapper" style="height: 240px;">
                    <iframe 
                        src="https://www.youtube.com/embed/gayPxgYAfyc" 
                        class="w-100" 
                        height="300" 
                        frameborder="0" 
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4 mb-4" >
                <div class="video-wrapper "style="height: 240px;">
                    <iframe 
                        src="https://www.youtube.com/embed/vvWlc0E4FMA" 
                        class="w-100" 
                        height="300" 
                        frameborder="0" 
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4 mb-4 wow animate__animated animate__backInLeft">
                <div class="video-wrapper "style="height: 240px;">
                    <iframe 
                        src="https://www.youtube.com/embed/yOqgWKs-puU" 
                        class="w-100" 
                        height="300" 
                        frameborder="0" 
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Why Choose Us -->
<section id="why-choose-us" class="py-5" style="background-color: #001F3F;">
    <div class="container">

        <div class="row align-items-center wow animate__animated animate__zoomIn">
            <div class="col-lg-6 mb-4 text-center">
                <img src="assets/images/sai-picture-why.png" alt="About Use Sai Picture " class="img-fluid rounded" style="max-width: 60%; border: 5px solid  #EAD8B1;">
            </div>
            <div class="col-md-6 mb-2">
                <h2 class=" mb-4 text-center" style="color: #EAD8B1;  text-shadow: 1px 1px 3px rgba(227, 188, 120, 0.4);">
                    <strong> Why Choose Us </strong>
                </h2>
                <h3 class="text-white text-center">We Make Your Memories Last Forever!</h3>
                <p class="text-white text-center" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">
                    Our professional team ensures that every moment of your special day is captured with creativity and passion.
                    We pride ourselves on our attention to detail, ensuring that you receive not only beautiful images but also an unforgettable experience.
                </p>

            </div>
        </div>
    </div>
</section>


<!-- Services -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center text-white mb-4">Our Services</h2>
        <div id="services-slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card text-center" style="background-color:  #001F3F; height: 450px;">
                                <img src="assets/images/sai-picture-wedding.gif" class="card-img-top" alt="service by Sai Picture capturing Wedding Video Shoot" style="object-fit: cover; height: 200px;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title text-warning font-weight-bold">Wedding Video Shoot</h5>
                                    <p class="card-text text-light">We provide comprehensive wedding video shoot services that capture every moment of your special day. Our skilled videographers use the latest techniques to create memorable videos.</p>
                                    <a href="tel:9760906036" class="btn button">Call Now</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 mb-4">
                            <div class="card text-center" style="background-color:  #001F3F; height: 450px;">
                                <img src="assets/images/sai-picture-candid-service.png" class="card-img-top" alt="service by Sai Picture capturing Candid Photoshoot" style="object-fit: cover; height: 200px;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title text-warning font-weight-bold">Candid Photoshoot</h5>
                                    <p class="card-text text-light">Our candid photoshoots focus on capturing the raw and genuine moments of your life. We believe that the best memories are those that unfold naturally, allowing us to document your unique story.</p>
                                    <a href="tel:9760906036" class="btn button">Call Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center" style="background-color:  #001F3F; height: 450px;">
                                <img src="assets/images/sai-picture-pre-wedding-service.png" class="card-img-top" alt="service by Sai Picture capturing Pre-Wedding Photoshoot" style="object-fit: cover; height: 200px;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title text-warning font-weight-bold">Pre-Wedding Photoshoot</h5>
                                    <p class="card-text text-light">Celebrate your love story with our pre-wedding photoshoot services. We create beautiful settings that reflect your personality and love, ensuring stunning photographs that you will cherish forever.</p>
                                    <a href="tel:9760906036" class="btn button">Call Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card text-center" style="background-color: #001F3F; height: 450px;">
                                <img src="assets/images/sai-picture-cinemetography-service.png" class="card-img-top" alt="service by Sai Picture capturing Cinematography" style="object-fit: cover; height: 200px;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title text-warning font-weight-bold">Cinematography</h5>
                                    <p class="card-text text-light ">We capture your moments with cinematic flair, ensuring that each shot tells a story. Our cinematography services provide high-quality videos that reflect the emotions of your special day.</p>
                                    <a href="tel:9760906036" class="btn  button">Call Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center" style="background-color:  #001F3F; height: 450px;">
                                <img src="assets/images/sai-picture-drone.gif" class="card-img-top" alt="service by Sai Picture capturing Drone Shooting" style="object-fit: cover; height: 200px;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title text-warning font-weight-bold">Drone Shooting</h5>
                                    <p class="card-text text-light">Our drone shooting services offer a unique perspective on your events. With stunning aerial views, we capture breathtaking shots that enhance your memories and create a spectacular visual story.</p>
                                    <a href="tel:9760906036" class="btn button">Call Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-center" style="background-color: #001F3F; height: 450px;">
                                <img src="assets/images/sai-picture-led.gif" class="card-img-top" alt="service by Sai Picture capturing Wall LED" style="object-fit: cover; height: 200px;">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title text-warning font-weight-bold">Wall LED</h5>
                                    <p class="card-text text-light">Our high-quality Wall LED services provide vivid displays, perfect for showcasing visuals at events, advertisements, and other gatherings. Let us light up your events with our brilliant LED installations.</p>
                                    <a href="tel:9760906036" class="btn button">Call Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#services-slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#services-slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<!-- Contact Form -->

<section id="contact" class="container-fluid my-5" style="background-color: #001F3F;">
    <h2 class="text-center mb-4 ">Contact Us</h2>
    <div class="row container mx-auto">
        <div class="col-md-6 pb-5 ">
            <form id="contactForm" action="submit_form.php" method="POST">
                <div class="mb-3">
                    <label for="name " class="form-label text-light">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label text-light">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label text-light">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-warning">Send Message</button>
            </form>
        </div>

        <<div class="col-md-5 pb-5 ">
            <!-- Google Map -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d882.2673865865746!2d78.64715686957011!3d27.807630098507854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974e018676c5071%3A0x2a8887a6c2ba48e!2sKasganj%2C%20Uttar%20Pradesh%20207123!5e0!3m2!1sen!2sin!4v1730287922433!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
    </div>
</section>



<?php include 'footer.php'; ?>