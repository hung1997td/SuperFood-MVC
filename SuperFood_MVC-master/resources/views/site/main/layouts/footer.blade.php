<div class="footer">
    <div class="footerTop">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footerTop__logo animate__animated animate__fadeInLeft wow" data-wow-delay="0.5s">
                        <div class="footerTop__logo-image"><img src="{{BASE_URL.'frontend/assets/images/layout/logo-white.png'}}" alt=""></div>
                        <div class="footerTop__logo-text">At vero eos et accusam et justo duo dolo res et ea rebum.
                            Stet clita
                            kasd guber gren. Aenean sollici tudin lorem quis biben dum auci elit clita.
                        </div>
                        <ul class="footerTop__logo-contact">
                            <li class="contact__item">
                                <div class="contact__item-icon"><i class="far fa-map-marker-alt"></i></div>
                                <a
                                    class="contact__item-text" href="#">Address: 339 Riverside Drive, New York
                                    NY 10027, United
                                    States</a>
                            </li>
                            <li class="contact__item">
                                <div class="contact__item-icon"><i class="far fa-phone"></i></div>
                                <a class="contact__item-text"
                                   href="#">Phone:<span> +1 (212) 379 3968</span></a>
                            </li>
                            <li class="contact__item">
                                <div class="contact__item-icon"><i class="far fa-envelope"></i></div>
                                <a class="contact__item-text"
                                   href="#">Email: balan@construction.com</a>
                            </li>
                        </ul>
                        <div class="footerTop__logo-icon"><a class="icon__link" href="#"><i
                                    class="fab fa-instagram"></i></a><a
                                class="icon__link" href="#"><i class="fab fa-twitter"></i></a><a
                                class="icon__link" href="#"><i
                                    class="fab fa-facebook-f"></i></a><a class="icon__link" href="#"><i
                                    class="fab fa-tumblr"></i></a><a class="icon__link" href="#"><i
                                    class="fab fa-vimeo-v"></i></a><a
                                class="icon__link" href="#"><i class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footerTop__post d-none-block animate__animated animate__fadeInUp wow"
                         data-wow-delay="1s">
                        <div class="footerTop__post-title">Recent Posts</div>
                        <ul class="footerTop__post-list">
                            @php $news = \App\News::orderBy('id', 'desc')->limit(3)->get() @endphp
                            @foreach($news as $post)
                                <li class="list__item">
                                    <div class="list__item-image"><img src="/superFood_MVC/backend/assets/images/{{$post->image}}"
                                                                       alt="">
                                    </div>
                                    <div class="list__item-content">
                                        <a class="content__title"
                                           href="../blog-details.php">{{$post->title}}</a>
                                        <div class="content__date"><?php
                                            $date = new DateTime($post->date);
                                            echo $date->format('F d, Y') ?></div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footerTop__quote animate__animated animate__fadeInRight wow" data-wow-delay="1.5s">
                        <div class="footerTop__quote-title">Get A quote</div>
                        <div class="footerTop__quote-text">If you got any question please do not hesitate to send us
                            a message.
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="footerTop__quote-form">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="footerTop__quote-form">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="footerTop__quote-form footerTop__quote-textarea">
                                        <textarea class="form-control" id="message" type="message"
                                                  placeholder="Message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-transparent" href="#">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerBottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="footerBottom__content animate__animated animate__zoomIn wow" data-wow-delay="1s">
                        Copyright
                        2020 @ superFood_MVC Elated Themes
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer-->


