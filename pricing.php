<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing & Membership - FitZone Gym</title>
    <meta name="description" content="Choose the perfect membership plan at FitZone Gym. Flexible pricing options for all fitness levels and goals.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/fitZone-icon.png">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Hero -->
    <section class="page-hero">
        <div class="hero-background">
            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="FitZone Gym Pricing">
        </div>
        <div class="hero-overlay"></div>
        <div class="page-hero-content">
            <h1 class="page-hero-title">Membership Plans</h1>
            <p class="page-hero-subtitle">Choose the perfect plan for your fitness journey</p>
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Pricing</span>
            </nav>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="section pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Choose Your Plan</h2>
                <p class="section-subtitle">Flexible membership options designed for every fitness level</p>
            </div>

            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Basic</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">29</span>
                            <span class="period">/month</span>
                        </div>
                        <p>Perfect for beginners</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> 24/7 Gym Access</li>
                            <li><i class="fas fa-check"></i> Cardio Equipment</li>
                            <li><i class="fas fa-check"></i> Strength Training</li>
                            <li><i class="fas fa-check"></i> Locker Room Access</li>
                            <li><i class="fas fa-times"></i> Personal Training</li>
                            <li><i class="fas fa-times"></i> Group Classes</li>
                        </ul>
                    </div>
                    <a href="#contact" class="btn btn-primary">Get Started</a>
                </div>

                <div class="pricing-card featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Premium</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">49</span>
                            <span class="period">/month</span>
                        </div>
                        <p>Best value for serious fitness enthusiasts</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> 24/7 Gym Access</li>
                            <li><i class="fas fa-check"></i> Cardio Equipment</li>
                            <li><i class="fas fa-check"></i> Strength Training</li>
                            <li><i class="fas fa-check"></i> Locker Room Access</li>
                            <li><i class="fas fa-check"></i> 2 Personal Training Sessions</li>
                            <li><i class="fas fa-check"></i> Unlimited Group Classes</li>
                        </ul>
                    </div>
                    <a href="#contact" class="btn btn-primary">Get Started</a>
                </div>

                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>VIP</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">79</span>
                            <span class="period">/month</span>
                        </div>
                        <p>Ultimate fitness experience</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> 24/7 Gym Access</li>
                            <li><i class="fas fa-check"></i> Cardio Equipment</li>
                            <li><i class="fas fa-check"></i> Strength Training</li>
                            <li><i class="fas fa-check"></i> Locker Room Access</li>
                            <li><i class="fas fa-check"></i> 4 Personal Training Sessions</li>
                            <li><i class="fas fa-check"></i> Unlimited Group Classes</li>
                            <li><i class="fas fa-check"></i> Nutrition Consultation</li>
                            <li><i class="fas fa-check"></i> Priority Booking</li>
                        </ul>
                    </div>
                    <a href="#contact" class="btn btn-primary">Get Started</a>
                </div>
            </div>

            <div class="pricing-note">
                <p>All memberships include a 7-day free trial. No long-term contracts required. Cancel anytime.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Everything you need to know about our memberships</p>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h3>Can I freeze my membership?</h3>
                    <p>Yes, you can freeze your membership for up to 3 months per year at no additional cost.</p>
                </div>
                <div class="faq-item">
                    <h3>Are there any signup fees?</h3>
                    <p>No signup fees! Your first month's payment covers the initiation fee.</p>
                </div>
                <div class="faq-item">
                    <h3>Can I bring a guest?</h3>
                    <p>Yes, guests are welcome for a small fee. Premium and VIP members get one free guest pass per month.</p>
                </div>
                <div class="faq-item">
                    <h3>What payment methods do you accept?</h3>
                    <p>We accept credit cards, debit cards, and digital payments. Bank transfers available for annual plans.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Life?</h2>
                <p>Join FitZone Gym today and start your fitness journey with our expert guidance.</p>
                <a href="#contact" class="btn btn-primary">Start Free Trial</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/script.js"></script>
</body>
</html>
