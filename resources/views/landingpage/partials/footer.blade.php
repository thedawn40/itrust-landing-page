 <!-- Footer -->
 <footer id="footer" class="footer" >
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4" style="justify-content: space-around">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="" class="logo d-flex align-items-center mb-4">
                        <span>iTrust Data Teknologi</span>
                    </a>
                    <p>{!! nl2br(e($company->address)) !!}
                    </p>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Sosial Media</h4>
                    <ul>						
                        <li><i class="bi bi-twitter"></i> <a href="{{ $company->twitter }}" target="_blank" rel="noopener noreferrer">Twitter</a></li>
                        <li><i class="bi bi-facebook"></i> <a href="{{ $company->facebook }}" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                        <li><i class="bi bi-instagram"></i> <a href="{{ $company->instagram }}" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                        <li><i class="bi bi-whatsapp"></i> <a href="{{ $company->whatsapp }}" target="_blank" rel="noopener noreferrer">Whatsapp</a></li>
                        <li><i class="bi bi-telegram"></i> <a href="{{ $company->telegram }}" target="_blank" rel="noopener noreferrer">Telegram</a></li>		
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
                            {{-- <li>
                                <a href="/login" class="bi bi-chevron-right">Sign In</a>
                            </li> --}}
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