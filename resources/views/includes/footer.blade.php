<?php $socials = config('socials'); ?>


<footer>

    <div class="top-footer">
        <nav>
            <div class="column">
                <div>
                    <h3><a href="#">DC COMICS</a></h3>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                <div>
                    <h3><a href="#">SHOP</a></h3>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>

            </div>
            <div class="column">
                <h3><a href="#">DC</a></h3>
                <ul>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy Policy(New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Talent Workshops</a></li>
                    <li><a href="#">CPSC Certificates</a></li>
                    <li><a href="#">Ratings</a></li>
                    <li><a href="#">Shop Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="column">
                <h3><a href="#">SITIES</a></h3>
                <ul>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="bottom-footer">
        <div class="container">

            <a href="#" class="button">SING-UP NOW!</a>
            <div class="social">
                <h2>FOLLOW US</h2>
                <ul>
                    @foreach ($socials as $social)
                        <li>

                            <a href="#">
                                <figure>
                                    <img src="{{ @Vite::asset("resources/img/{$social['picture']}") }}">
                                </figure>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</footer>
