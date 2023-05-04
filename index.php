<?php
include_once "assets/includes/header.php";
?>
<section>

    <div class="container-fluid p-0" id="header_container">
        <div class="container-fluid" id="header_cont2">
            <!-- online ordering -->
            <div class="container" id="header_cont2_div1">
                <button class="btn btn-dark p-3 sticky-top">
                    Online Ordering <i class="fas fa-location-arrow"></i>
                </button>
            </div>
            <!-- header-logo -->
            <div class="container" id="header_cont2_div2">
                <div id="header_cont2_div2_img">
                    <img src="assets/images/logo.jpg" alt="">
                </div>
                <div id="header_cont2_div2_date">
                    <p>Hours</p>
                    <h3>Mondays to Satudays: OPEN</h3>
                    <h3>Sundays: CLOSED</h3>
                </div>
            </div>
            <!-- navbar -->
            <nav class="navbar" id="cont2_nav">
                <ul id="cont2_nav_unordered">
                    <li class="nav-item"> <a href="#">Home</a></li>
                    <li class="nav-item"><a href="meal">Menu</a></li>
                    <li class="nav-item"><a href="#second_section">About</a></li>
                </ul>
            </nav>

        </div>

        <!-- second container (now open) -->
        <div class="container " id="header_container_open">
            <p>NOW OPEN <br>TO<br> CUSTOMERS</p>
        </div>

        <!-- card menu -->
        <div class="container-fluid" id="header_container_card">
            <div class="container" id="header_container_card1">
                <div class="card " >
                    <hr>
                    <h3>Menu</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, tempore!</p>
                    <div class="p-2 d-flex justify-content-center align-items-center" id="card1_img">
                        <img src="assets/images/card_img/card.png" alt="" width="60">
                    </div>

                    <div class="p-4">
                        <button class="btn btn-dark" >
                            View more
                        </button>
                    </div>
                </div>
                <div class="card ">
                    <hr>
                    <h3>Product</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, tempore!</p>
                    <div class="p-2 d-flex justify-content-center align-items-center" id="card1_img">
                        <img src="assets/images/card_img/card1.png" alt="" width="60">
                    </div>
                    <div class="p-4">
                        <button class="btn btn-dark" >
                            View more
                        </button>
                    </div>
                </div>
                <div class="card ">
                    <hr>
                    <h3>Classic</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, tempore!</p>
                    <div class="p-2 d-flex justify-content-center align-items-center" id="card1_img">
                        <img src="assets/images/card_img/card2.png" alt="" width="60">
                    </div>
                    <div class="pt-4">
                        <button class="btn btn-dark" >
                            View more
                        </button>
                    </div>
                </div>
            </div>
            <!-- <div class="m-3">
                <button class="btn btn-danger">
                    Browse through our course meals
                </button>
            </div> -->
        </div>
    </div>
</section>

<!-- section 2 -->
<section>
    <div class="container-fluid p-0" id="second_section">
        <div class="d-md-flex d-block " id="second_section_cont">
            <div class="" id="second_section_cont_img">
                <img src="assets/images/founder.jpg" alt="">
                <p>Sam and Dean - co-owner of Sixtax</p>
            </div>
            <div id="second_section_right">
                <h2>We make Sixtax food easy</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore ad maxime repudiandae aperiam odit corporis hic modi illum nam earum? Corrupti quae ratione similique necessitatibus exercitationem doloremque accusantium fugiat voluptate eum praesentium labore beatae odio aliquam fugit ea numquam, soluta repudiandae sint ipsa odit natus, doloribus quos aut dicta! At provident autem nulla perferendis, assumenda dolore veniam atque mollitia voluptas? Assumenda, iste asperiores deleniti iure ut dicta nihil dolore quia obcaecati architecto harum! Inventore rerum aut corporis, aspernatur, suscipit mollitia voluptatem eum obcaecati perspiciatis quos distinctio ex quas! Blanditiis numquam veniam vel porro quibusdam voluptatum eius perferendis. Omnis, blanditiis odit!</p>
            </div>
        </div>
    </div>
</section>

<!-- footer section -->
<section>
    <div class="container-fluid p-2" id="footer-cont">
        <div class="container " id="footer-cont1">
            <div id="footer_map">
                <p>26 Lincoln Street <br>
                    Lowell, MA 01852</p>

                <p>TEL : 978.454.6700<br>
                    EMAIL: simplykhmer1@gmail.com</p>
                ​
                <p>Accessibility Statement</p>
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.0493284138524!2d7.3275695743641895!3d9.150017787084215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104dd9f58204702b%3A0x666c4080fc20e6e2!2searly%20code!5e0!3m2!1sen!2sng!4v1682959319169!5m2!1sen!2sng" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="d-flex p-2 d-none" id="modal_contact">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Contact Us
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Contact Us</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h2 class="pb-5">Get in touch</h2>
                                    <form action="">
                                        <div class="m-2 d-md-flex d-block" id="form_footer">
                                            <div class="m-1">
                                                <label for="name">Name</label>
                                                <input type="text" placeholder="name" class="form-control " name="name">
                                            </div>
                                            <div class="m-1">
                                                <label for="email">Email</label>
                                                <input type="email" placeholder="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="message">Message</label><br>
                                            <textarea name="message" id="message" cols="52" rows="8" class="border-0 shadow-0"></textarea>
                                        </div>
                                        <div class="m-1">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- tooltip -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This top tooltip is themed via CSS variables.">
                        Hours
                    </button>

                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram-square"></i>

                </div>
            </div>

            <div id="footer_map1">
                <h2 class="pb-5">Get in touch</h2>
                <form action="">
                    <div class="m-2 d-md-flex d-block" id="form_footer">
                        <div class="m-1">
                            <label for="name">Name</label>
                            <input type="text" placeholder="name" class="form-control " name="name">
                        </div>
                        <div class="m-1">
                            <label for="email">Email</label>
                            <input type="email" placeholder="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="message">Message</label><br>
                        <textarea name="message" id="message" cols="52" rows="8" class="border-0 shadow-0"></textarea>
                    </div>
                    <div class="m-1">
                        <button class="btn btn-dark w-100">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

            <div id="footer_map2">
                <h2>Hours</h2>
                <p>MONDAY - SATURDAY<br> 7AM - 10PM</p>

                <p>SUNDAY<br>12AM - 5PM</p>

                <div id="social_handles">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram-square"></i>
                </div>
            </div>
        </div>

    </div>
</section>

</body>

<script src="assets/js/index.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</html>