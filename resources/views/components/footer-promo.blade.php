<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="footer-brand">
                    <i class="fas fa-toilet"></i>
                    SedotWCResmi
                </div>
                <p class="footer-text">
                    Layanan sedot WC profesional dan terpercaya. Siap melayani Anda 24/7 dengan armada modern dan tim berpengalaman.
                </p>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="mb-3">Kontak</h5>
                @php($rawMobile = $contactUs->mobile ?? '08513277679')
                <p class="footer-text mb-2">
                    <i class="fas fa-phone me-2"></i> {{ $rawMobile }}
                </p>
                <p class="footer-text mb-2">
                    <i class="fab fa-whatsapp me-2"></i> WhatsApp: {{ $rawMobile }}
                </p>
                <p class="footer-text">
                    <i class="fas fa-envelope me-2"></i> {{ $contactUs->mail ?? 'info@sedotwcresmi.com' }}
                </p>
            </div>
            <div class="col-lg-4">
                <h5 class="mb-3">Jam Operasional</h5>
                <p class="footer-text">
                    Senin - Minggu: 24 Jam<br>
                    Siap melayani darurat kapan saja
                </p>
            </div>
        </div>
        <div class="footer-copyright">
            <p class="mb-0">&copy; 2024 SedotWCResmi. All rights reserved.</p>
        </div>
    </div>
</footer>
