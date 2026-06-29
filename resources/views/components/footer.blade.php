<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                @include('components.brand')
                <p>AI tools, SEO insights, and digital strategies that actually work.</p>
            </div>
            <div class="footer-links">
                <div>
                    <p class="footer-col-title">Content</p>
                    <div class="footer-col">
                        <a href="/blog">Blog</a>
                        <a href="/about">About</a>
                        <a href="/contact">Contact</a>
                        <a href="/search">Search</a>
                    </div>
                </div>
                <div>
                    <p class="footer-col-title">Legal</p>
                    <div class="footer-col">
                        <a href="/privacy-policy">Privacy Policy</a>
                        <a href="/cookie-policy">Cookie Policy</a>
                        <a href="/terms-of-service">Terms of Service</a>
                        <a href="/disclaimer">Disclaimer</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} DigitalStack. All rights reserved.</p>
            <p>
                <a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="noopener noreferrer">How Google uses data</a>
            </p>
        </div>
    </div>
</footer>
