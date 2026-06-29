<footer style="border-top: 1px solid var(--border); background: var(--surface); padding: 2rem 0; margin-top: 4rem;">
    <div class="container" style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 1.5rem;">
        <div style="max-width: 280px;">
            @include('components.brand')
            <p style="color: var(--muted); font-size: 0.875rem; margin-top: 0.75rem;">AI tools, SEO insights, and digital strategies that actually work.</p>
            <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                <a href="#" aria-label="Twitter" style="color: var(--muted); font-size: 0.875rem;">Twitter</a>
                <a href="#" aria-label="LinkedIn" style="color: var(--muted); font-size: 0.875rem;">LinkedIn</a>
                <a href="#" aria-label="YouTube" style="color: var(--muted); font-size: 0.875rem;">YouTube</a>
            </div>
        </div>
        <div style="display: flex; gap: 2.5rem; flex-wrap: wrap;">
            <div>
                <p style="font-weight: 600; margin-bottom: 0.5rem; font-size: 0.875rem;">Content</p>
                <div style="display: flex; flex-direction: column; gap: 0.25rem;">
                    <a href="/blog" style="font-size: 0.875rem;">Blog</a>
                    <a href="/about" style="font-size: 0.875rem;">About</a>
                    <a href="/contact" style="font-size: 0.875rem;">Contact</a>
                </div>
            </div>
            <div>
                <p style="font-weight: 600; margin-bottom: 0.5rem; font-size: 0.875rem;">Legal</p>
                <div style="display: flex; flex-direction: column; gap: 0.25rem;">
                    <a href="/privacy-policy" style="font-size: 0.875rem;">Privacy Policy</a>
                    <a href="/cookie-policy" style="font-size: 0.875rem;">Cookie Policy</a>
                    <a href="/terms-of-service" style="font-size: 0.875rem;">Terms of Service</a>
                    <a href="/disclaimer" style="font-size: 0.875rem;">Disclaimer</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--border); display: flex; flex-wrap: wrap; justify-content: space-between; gap: 0.5rem;">
        <p style="color: var(--muted); font-size: 0.75rem;">&copy; {{ date('Y') }} DigitalStack. All rights reserved.</p>
        <p style="color: var(--muted); font-size: 0.75rem;">
            <a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="noopener noreferrer" style="color: var(--muted);">How Google uses data</a>
        </p>
    </div>
</footer>
