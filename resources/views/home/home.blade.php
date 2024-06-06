@extends('tamplate.layout')

@section('content')

    <div class="container">
        <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- About Start -->
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-5">
                            <h3 class="lh-base mb-0">Visi & Misi</h3>
                        </div>
                        <p class="mb-4"><b>Visi : </b>Prabowo dan Gibran mengajak putra putri terbaik bangsa dari semua latar belakang yang memiliki kesamaan tekad untuk bekerja sama.</p>
                        <p class="mb-4"><b>Misi : </b></p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Memperkokoh ideologi Pancasila, demokrasi, dan hak asasi manusia (HAM).</p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Memantapkan sistem pertahanan keamanan negara dan mendorong kemandirian bangsa melalui swasembada pangan, energi, air, ekonomi syariah, ekonomi digital, ekonomi hijau, dan ekonomi biru.</p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Meningkatkan lapangan kerja yang berkualitas, mendorong kewirausahaan, mengembangkan industri kreatif, serta melanjutkan pengembangan infrastruktur.</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <img class="img-fluid rounded" src="img/bupati.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid rounded" src="img/bupati.jpg" alt="">
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="border-end pe-3 me-3 mb-0">Turman</h5>
                            <h2 class="text-primary fw-bold mb-0">Calon Bupati</h2>
                        </div>
                        <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.</p>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="border-end pe-3 me-3 mb-0">Ronald</h5>
                            <h2 class="text-primary fw-bold mb-0">Calon Wakil Bupati</h2>
                        </div>
                        <p class="mb-0">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Expertise Start -->
        <div class="container-xxl py-6 pb-5" id="skill">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-5 mb-5">Profile Paslon Bupati dan Wakil Bupati</h1>
                        <div class="container-xxl py-6 pb-5" id="team">
                            <div class="container">
                                <div class="row g-4">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item position-relative">
                                            <img class="img-fluid rounded" src="img/bupati.jpg" alt="">
                                            <div class="team-text bg-white rounded-end p-4">
                                                <div>
                                                    <h5>Turman</h5>
                                                    <span>Calon Bupati</span>
                                                </div>
                                                <i class="fa fa-arrow-right fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="team-item position-relative">
                                            <img class="img-fluid rounded" src="img/bupati.jpg" alt="">
                                            <div class="team-text bg-white rounded-end p-4">
                                                <div>
                                                    <h5>Ronald</h5>
                                                    <span>Calon Wakil Bupati</span>
                                                </div>
                                                <i class="fa fa-arrow-right fa-2x text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Expertise End -->


        <!-- Service Start -->
        <div class="container-fluid bg-light my-5 py-6" id="service">
            <div class="container">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">My Services</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a class="btn btn-primary py-3 px-5" href="">Hire Me</a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                            <div class="bg-icon flex-shrink-0 mb-3">
                                <i class="fa fa-crop-alt fa-2x text-dark"></i>
                            </div>
                            <div class="ms-sm-4">
                                <h4 class="mb-3">Creative Design</h4>
                                <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                                <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                            <div class="bg-icon flex-shrink-0 mb-3">
                                <i class="fa fa-code-branch fa-2x text-dark"></i>
                            </div>
                            <div class="ms-sm-4">
                                <h4 class="mb-3">Graphic Design</h4>
                                <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                                <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                            <div class="bg-icon flex-shrink-0 mb-3">
                                <i class="fa fa-code fa-2x text-dark"></i>
                            </div>
                            <div class="ms-sm-4">
                                <h4 class="mb-3">Web Design</h4>
                                <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                                <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                            <div class="bg-icon flex-shrink-0 mb-3">
                                <i class="fa fa-laptop-code fa-2x text-dark"></i>
                            </div>
                            <div class="ms-sm-4">
                                <h4 class="mb-3">UI/UX Design</h4>
                                <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                                <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Projects Start -->
        <div class="container-xxl py-6 pt-5" id="project">
            <div class="container">
                <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">My Projects</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                            <li class="mx-3 active" data-filter="*">All Projects</li>
                            <li class="mx-3" data-filter=".first">UI/UX Design</li>
                            <li class="mx-3" data-filter=".second">Graphic Design</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-1.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-2.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-3.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-4.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-5.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/project-6.jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->


        <!-- Team Start -->
        <div class="container-xxl py-6 pb-5" id="team">
            <div class="container">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Team Members</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a class="btn btn-primary py-3 px-5" href="">Contact Us</a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded" src="img/team-1.jpg" alt="">
                            <div class="team-text bg-white rounded-end p-4">
                                <div>
                                    <h5>Full Name</h5>
                                    <span>Designer</span>
                                </div>
                                <i class="fa fa-arrow-right fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded" src="img/team-2.jpg" alt="">
                            <div class="team-text bg-white rounded-end p-4">
                                <div>
                                    <h5>Full Name</h5>
                                    <span>Designer</span>
                                </div>
                                <i class="fa fa-arrow-right fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded" src="img/team-3.jpg" alt="">
                            <div class="team-text bg-white rounded-end p-4">
                                <div>
                                    <h5>Full Name</h5>
                                    <span>Designer</span>
                                </div>
                                <i class="fa fa-arrow-right fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fluid bg-light py-5 my-5" id="testimonial">
            <div class="container-fluid py-5">
                <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonial-left h-100">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.jpg" alt="">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-1.jpg" alt="">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                                <hr class="w-25 mx-auto">
                                <h5>Client Name</h5>
                                <span>Profession</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-2.jpg" alt="">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                                <hr class="w-25 mx-auto">
                                <h5>Client Name</h5>
                                <span>Profession</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-3.jpg" alt="">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                                <hr class="w-25 mx-auto">
                                <h5>Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonial-right h-100">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.jpg" alt="">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl pb-5" id="contact">
            <div class="container py-5">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Let's Work Together</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-2">My office:</p>
                        <h3 class="fw-bold">123 Street, New York, USA</h3>
                        <hr class="w-100">
                        <p class="mb-2">Call me:</p>
                        <h3 class="fw-bold">+012 345 6789</h3>
                        <hr class="w-100">
                        <p class="mb-2">Mail me:</p>
                        <h3 class="fw-bold">info@example.com</h3>
                        <hr class="w-100">
                        <p class="mb-2">Follow me:</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Map Start -->
        <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-xxl pt-5 px-0">
                <div class="bg-dark">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <!-- Map End -->


        <!-- Copyright Start -->
        <div class="container-fluid bg-dark text-white py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom text-secondary" href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom text-secondary" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    </div>

@endsection