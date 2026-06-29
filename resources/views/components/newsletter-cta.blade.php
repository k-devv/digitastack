<section style="background: var(--accent); color: #fff; text-align: center; padding: 3rem 1.5rem;">
    <div class="container">
        <h2 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Get AI &amp; SEO insights straight to your inbox</h2>
        <p style="font-size: 0.875rem; opacity: 0.9; margin-bottom: 1.5rem;">No spam. No fluff. Just practical strategies that work. Join 500+ readers.</p>
        <form style="display: flex; gap: 0.5rem; max-width: 400px; margin: 0 auto;" action="/subscribe" method="POST">
            @csrf
            <input type="email" name="email" required placeholder="Your email" style="flex: 1; padding: 0.625rem 0.75rem; border: none; border-radius: 6px; font-size: 0.875rem;">
            <button type="submit" style="background: #1a1a2e; color: #fff; border: none; padding: 0.625rem 1.25rem; border-radius: 6px; font-weight: 600; cursor: pointer; font-size: 0.875rem;">Subscribe</button>
        </form>
    </div>
</section>
