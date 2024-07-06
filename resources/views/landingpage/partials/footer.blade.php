 <!-- Footer -->
 <footer id="footer" class="footer" >
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4" style="justify-content: space-around">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="" class="logo d-flex align-items-center">
                        <span>iTrust Data Teknologi</span>
                    </a>
                    <p>
                        Perkantoran Prominence 38D no. 47
                    <br>
                        Jl Jalur Sutera Boulevard Alam Sutera, Tangerang, Banten 15143
                    </p>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Sosial Media</h4>
                    <ul>						
                        <li><i class="bi bi-twitter"></i> <a href="https://twitter.com/home?lang=en" target="_blank" rel="noopener noreferrer">Twitter</a></li>
                        <li><i class="bi bi-facebook"></i> <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                        <li><i class="bi bi-instagram"></i> <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                        <li><i class="bi bi-whatsapp"></i> <a href="" target="_blank" rel="noopener noreferrer">Whatsapp</a></li>
                        <li><i class="bi bi-telegram"></i> <a href="" target="_blank" rel="noopener noreferrer">Telegram</a></li>		
                    </ul>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Site Map</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/solutions">Solutions</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/news-events">News & Event</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="/contact-us">Contact</a></li>
                        @auth
                        @else
                            <li>
                                <a href="/login" class="bi bi-chevron-right">Sign In</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="credits">
            @ 2024 <strong><span>PT iTrust Data Teknologi</span></strong>. All right reserved
        </div>
    </div>
</footer>
<!-- End Footer -->