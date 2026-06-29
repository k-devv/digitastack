<div id="cookie-banner" style="position: fixed; bottom: 0; left: 0; right: 0; background: #1a1a2e; color: #fff; padding: 1.25rem 1.5rem; z-index: 9999; display: none; font-family: var(--font); box-shadow: 0 -2px 10px rgba(0,0,0,0.15);">
    <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1rem;">
        <p style="margin: 0; font-size: 0.875rem; line-height: 1.5; flex: 1; min-width: 280px;">
            We use cookies to improve your experience and serve personalized ads through Google AdSense.
            By clicking "Accept All", you consent to the use of cookies.
            <a href="/cookie-policy" style="color: #60a5fa; text-decoration: underline;">Learn more</a>
        </p>
        <div style="display: flex; gap: 0.75rem; flex-shrink: 0;">
            <button onclick="acceptCookies()" style="background: #2563eb; color: #fff; border: none; padding: 0.5rem 1.25rem; border-radius: 6px; cursor: pointer; font-size: 0.875rem; font-weight: 600;">Accept All</button>
            <button onclick="rejectCookies()" style="background: transparent; color: #94a3b8; border: 1px solid #475569; padding: 0.5rem 1.25rem; border-radius: 6px; cursor: pointer; font-size: 0.875rem;">Reject</button>
        </div>
    </div>
</div>

<script>
(function() {
    var consent = localStorage.getItem('cookie_consent');
    if (!consent) {
        document.getElementById('cookie-banner').style.display = 'block';
    }
})();

function acceptCookies() {
    localStorage.setItem('cookie_consent', 'granted');
    document.getElementById('cookie-banner').style.display = 'none';
    if (typeof gtag === 'function') {
        gtag('consent', 'update', {
            'ad_storage': 'granted',
            'ad_user_data': 'granted',
            'ad_personalization': 'granted',
            'analytics_storage': 'granted'
        });
    }
}

function rejectCookies() {
    localStorage.setItem('cookie_consent', 'denied');
    document.getElementById('cookie-banner').style.display = 'none';
}
</script>
