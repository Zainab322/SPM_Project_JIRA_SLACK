<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Jewelry Store | Luxury Jewelry Collections</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- ===================== NAVIGATION & HEADER ===================== -->
<header>
    <nav>
        <div class="logo">ElegantJewels</div>
        <ul class="nav-links">
            <li><a href="#video-gallery">Collections</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
        <!-- Mobile Menu Button -->
        <div class="mobile-menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>

<section id="hero">
    <div class="hero-container">
        <div class="hero-title-above">
            <h1>Timeless Elegance</h1>
        </div>
        
        <div class="hero-frame"></div>
        
        <div class="hero-center-piece">
            <div class="hero-ring"></div>
        </div>
        
        <div class="hero-left">
            <div class="hero-tagline">
                "Where craftsmanship meets eternity"
            </div>
            <ul class="hero-features">
                <li><i class="fas fa-gem"></i> Conflict-Free Diamonds</li>
                <li><i class="fas fa-award"></i> Certified Quality</li>
                <li><i class="fas fa-heart"></i> Handcrafted with Love</li>
                <li><i class="fas fa-shield-alt"></i> Lifetime Warranty</li>
            </ul>
        </div>
        
        <div class="hero-right">
            <div class="hero-collection">Celestial Collection</div>
            <div class="hero-price">$2,500+</div>
            <div class="hero-buttons">
                <a href="#video-gallery" class="btn">View Collection</a>
                <a href="#contact" class="btn btn-outline">Book Consultation</a>
            </div>
        </div>
    </div>
</section>

<section id="video-gallery">
    <div class="container">
        <h2>Experience Our Masterpieces</h2>
        <p class="section-subtitle">Watch our exclusive jewelry pieces come to life</p>
        
        <div class="video-grid">
            <div class="video-card">
                <div class="video-container">
                    <video autoplay loop muted playsinline>
                        <source src="assets/videos/diamond-ring.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="video-overlay">
                        <div class="video-title">Celestial Diamond Ring</div>
                    </div>
                </div>
                <div class="video-info">
                    <h3>Celestial Diamond Ring</h3>
                    <div class="price">$2,800</div>
                    <p class="description">Featuring a brilliant 2-carat center diamond surrounded by exquisite pavé setting.</p>
                    <a href="#contact" class="btn">Inquire Now</a>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <video autoplay loop muted playsinline>
                        <source src="assets/videos/emerald-necklace.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="video-overlay">
                        <div class="video-title">Emerald Elegance Necklace</div>
                    </div>
                </div>
                <div class="video-info">
                    <h3>Emerald Elegance Necklace</h3>
                    <div class="price">$3,500</div>
                    <p class="description">Luxurious emerald pendant set in 18K white gold with diamond accents.</p>
                    <a href="#contact" class="btn">Inquire Now</a>
                </div>
            </div>
            
            <div class="video-card">
                <div class="video-container">
                    <video autoplay loop muted playsinline>
                        <source src="assets/videos/gold-bracelet.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="video-overlay">
                        <div class="video-title">Heritage Gold Bracelet</div>
                    </div>
                </div>
                <div class="video-info">
                    <h3>Heritage Gold Bracelet</h3>
                    <div class="price">$1,950</div>
                    <p class="description">Handcrafted 18K gold bracelet with intricate filigree design and diamond accents.</p>
                    <a href="#contact" class="btn">Inquire Now</a>
                </div>
            </div>
        </div>
        
        <div class="gallery-cta">
            <a href="#pricing" class="btn">Discover Full Collection</a>
        </div>
    </div>
</section>

<section id="features">
    <div class="features-image-bg"></div>
    
    <div class="container">
        <h2>Our Signature Collections</h2>
        <p class="section-subtitle">Crafted with precision, designed for eternity</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>Premium Quality</h3>
                <p>Each piece is meticulously crafted using the world's finest diamonds, precious gems, and 18K gold to ensure unparalleled quality and brilliance.</p>
                <div class="feature-highlights">
                    <span><i class="fas fa-check"></i> Conflict-Free Diamonds</span>
                    <span><i class="fas fa-check"></i> 18K Solid Gold</span>
                    <span><i class="fas fa-check"></i> Lifetime Warranty</span>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-pen-fancy"></i>
                </div>
                <h3>Exclusive Designs</h3>
                <p>Our award-winning designers create unique, timeless pieces that blend contemporary elegance with classic sophistication.</p>
                <div class="feature-highlights">
                    <span><i class="fas fa-check"></i> Custom Designs</span>
                    <span><i class="fas fa-check"></i> Limited Editions</span>
                    <span><i class="fas fa-check"></i> Heritage Craftsmanship</span>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Personalized Service</h3>
                <p>Experience our white-glove concierge service with dedicated jewelry experts to guide you through every step of your selection.</p>
                <div class="feature-highlights">
                    <span><i class="fas fa-check"></i> Private Consultations</span>
                    <span><i class="fas fa-check"></i> Virtual Try-On</span>
                    <span><i class="fas fa-check"></i> Bespoke Creations</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing">
    <div class="container">
        <h2>Signature Collections</h2>
        <p class="section-subtitle">Find the perfect piece for every occasion</p>
        
        <div class="pricing-grid">
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3>Ethereal</h3>
                    <div class="price-range">$500 - $2,000</div>
                </div>
                <div class="pricing-features">
                    <p><i class="fas fa-check"></i> Delicate everyday pieces</p>
                    <p><i class="fas fa-check"></i> Sterling silver & gold vermeil</p>
                    <p><i class="fas fa-check"></i> Semi-precious stones</p>
                    <p><i class="fas fa-check"></i> 1-year warranty</p>
                </div>
                <a href="#contact" class="btn">Discover Collection</a>
            </div>
            
            <div class="pricing-card featured">
                <div class="popular-badge">Most Popular</div>
                <div class="pricing-header">
                    <h3>Celestial</h3>
                    <div class="price-range">$2,000 - $10,000</div>
                </div>
                <div class="pricing-features">
                    <p><i class="fas fa-check"></i> Statement occasion pieces</p>
                    <p><i class="fas fa-check"></i> 14K-18K solid gold</p>
                    <p><i class="fas fa-check"></i> Genuine diamonds & gems</p>
                    <p><i class="fas fa-check"></i> 5-year warranty</p>
                    <p><i class="fas fa-check"></i> Customization available</p>
                </div>
                <a href="#contact" class="btn">Discover Collection</a>
            </div>
            
            <div class="pricing-card">
                <div class="pricing-header">
                    <h3>Heritage</h3>
                    <div class="price-range">$10,000+</div>
                </div>
                <div class="pricing-features">
                    <p><i class="fas fa-check"></i> Heirloom investment pieces</p>
                    <p><i class="fas fa-check"></i> 18K-24K solid gold & platinum</p>
                    <p><i class="fas fa-check"></i> Exceptional diamonds</p>
                    <p><i class="fas fa-check"></i> Lifetime warranty</p>
                    <p><i class="fas fa-check"></i> Full customization</p>
                    <p><i class="fas fa-check"></i> Insurance appraisal</p>
                </div>
                <a href="#contact" class="btn">Discover Collection</a>
            </div>
        </div>
    </div>
</section>

<section id="testimonials">
    <div class="container">
        <h2>Client Testimonials</h2>
        <p class="section-subtitle">Hear from our cherished customers</p>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <i class="fas fa-quote-left"></i>
                    <p>"The engagement ring from ElegantJewels exceeded all expectations. The craftsmanship is exceptional and the service was impeccable."</p>
                </div>
                <div class="client-info">
                    <div class="client-name">Sarah Mitchell</div>
                    <div class="client-location">New York</div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <i class="fas fa-quote-left"></i>
                    <p>"I've been collecting jewelry for 20 years, and the Heritage collection is truly remarkable. Each piece tells a story of excellence."</p>
                </div>
                <div class="client-info">
                    <div class="client-name">James Wellington</div>
                    <div class="client-location">London</div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <i class="fas fa-quote-left"></i>
                    <p>"The personalized consultation helped me design the perfect anniversary gift. The attention to detail is what sets them apart."</p>
                </div>
                <div class="client-info">
                    <div class="client-name">Emily Chen</div>
                    <div class="client-location">Dubai</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="contact-background"></div>
    <div class="container">
        <h2>Book a Private Viewing</h2>
        <p class="section-subtitle">Experience luxury jewelry in person</p>
        
        <div class="contact-content">
            <div class="contact-visual">
                <img src="assets/images/contact-showroom.jpg" alt="ElegantJewels Showroom">
                <div class="contact-overlay">
                    <h3>Visit Our Boutique</h3>
                    <p>Immerse yourself in luxury at our exclusive Beverly Hills showroom</p>
                </div>
            </div>
            
            <div class="contact-form-container">
                <form action="contact.php" method="POST" class="contact-form">
                    
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Full Name" required>
                        <i class="fas fa-user"></i>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email Address" required>
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Your Phone Number">
                        <i class="fas fa-phone"></i>
                    </div>

                    <div class="form-group">
                        <select name="interest">
                            <option value="">Select Collection Interest</option>
                            <option value="ethereal">Ethereal Collection</option>
                            <option value="celestial">Celestial Collection</option>
                            <option value="heritage">Heritage Collection</option>
                            <option value="custom">Custom Design</option>
                        </select>
                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <div class="form-group full-width">
                        <textarea name="message" placeholder="Tell us about your jewelry preferences, occasion, and any specific requirements..." required></textarea>
                        <i class="fas fa-comment"></i>
                    </div>

                    <button type="submit" class="btn btn-full">
                        <span class="btn-text">Request Private Consultation</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>

                </form>
            </div>
        </div>

        <div class="contact-details">
            <div class="contact-details-grid">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Visit Our Boutique</h4>
                        <p>123 Luxury Avenue<br>Beverly Hills, CA 90210</p>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Call Us</h4>
                        <p>+1 (555) 123-4567</p>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email Us</h4>
                        <p>consultation@elegantjewels.com</p>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h4>Business Hours</h4>
                        <p>Mon–Sat: 10AM - 7PM<br>Sunday: By appointment only</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <div class="logo">ElegantJewels</div>
                <p>Crafting timeless jewelry pieces since 1995. Each creation tells a story of elegance, quality, and enduring beauty.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#video-gallery">Collections</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Custom Design</a></li>
                    <li><a href="#">Jewelry Repair</a></li>
                    <li><a href="#">Appraisal</a></li>
                    <li><a href="#">Insurance Assistance</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Newsletter</h4>
                <p>Subscribe for exclusive offers and new collection previews.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your email address">
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 ElegantJewels. Crafting Timeless Beauty Since 1995. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Shipping Policy</a>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>