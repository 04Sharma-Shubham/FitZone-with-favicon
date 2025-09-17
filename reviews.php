<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Reviews - FitZone Gym</title>
    <meta name="description" content="Read what our members say about FitZone Gym. Real reviews from real people who transformed their lives through fitness.">
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
            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="FitZone Gym Reviews">
        </div>
        <div class="hero-overlay"></div>
        <div class="page-hero-content">
            <h1 class="page-hero-title">Member Reviews</h1>
            <p class="page-hero-subtitle">Real stories from real members</p>
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Reviews</span>
            </nav>
        </div>
    </section>

    <!-- Reviews Stats -->
    <section class="section reviews-stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">4.9</div>
                    <div class="stat-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Average Rating</p>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <p>Happy Members</p>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <p>Satisfaction Rate</p>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <p>Success Stories</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="section reviews">
        <div class="container">
            <div class="reviews-controls">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">All Reviews</button>
                    <button class="filter-btn" data-filter="weight-loss">Weight Loss</button>
                    <button class="filter-btn" data-filter="muscle-gain">Muscle Gain</button>
                    <button class="filter-btn" data-filter="general">General Fitness</button>
                </div>
            </div>

            <div class="reviews-grid">
                <div class="review-card" data-category="weight-loss">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"I lost 30 pounds in 6 months at FitZone! The trainers are incredible and the community is so supportive. I never thought I could achieve this, but here I am!"</p>
                    <div class="review-info">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&q=80" alt="Sarah Johnson">
                        <div>
                            <h4>Sarah Johnson</h4>
                            <span>Member for 8 months</span>
                        </div>
                    </div>
                    <div class="review-tags">
                        <span class="tag">Weight Loss</span>
                        <span class="tag">Transformation</span>
                    </div>
                </div>

                <div class="review-card" data-category="muscle-gain">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"As someone who struggled to build muscle, FitZone's program changed everything. I gained 15 pounds of lean muscle and feel stronger than ever. The nutrition guidance was a game-changer!"</p>
                    <div class="review-info">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Mike Chen">
                        <div>
                            <h4>Mike Chen</h4>
                            <span>Member for 1 year</span>
                        </div>
                    </div>
                    <div class="review-tags">
                        <span class="tag">Muscle Gain</span>
                        <span class="tag">Strength Training</span>
                    </div>
                </div>

                <div class="review-card" data-category="general">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"FitZone isn't just a gym—it's a lifestyle. The group classes are amazing, the equipment is top-notch, and the staff genuinely cares about your progress. Best decision I ever made!"</p>
                    <div class="review-info">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Emily Davis">
                        <div>
                            <h4>Emily Davis</h4>
                            <span>Member for 2 years</span>
                        </div>
                    </div>
                    <div class="review-tags">
                        <span class="tag">Group Classes</span>
                        <span class="tag">Community</span>
                    </div>
                </div>

                <div class="review-card" data-category="weight-loss">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"After having my second child, I struggled to get back in shape. FitZone's postnatal program and supportive trainers helped me lose 25 pounds and regain my confidence. Forever grateful!"</p>
                    <div class="review-info">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Lisa Rodriguez">
                        <div>
                            <h4>Lisa Rodriguez</h4>
                            <span>Member for 10 months</span>
                        </div>
                    </div>
                    <div class="review-tags">
                        <span class="tag">Postnatal</span>
                        <span class="tag">Weight Loss</span>
                    </div>
                </div>

                <div class="review-card" data-category="muscle-gain">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"The personal training sessions are worth every penny. My trainer customized a program that helped me build muscle while improving my overall fitness. I've never felt better!"</p>
                    <div class="review-info">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="David Wilson">
                        <div>
                            <h4>David Wilson</h4>
                            <span>Member for 6 months</span>
                        </div>
                    </div>
                    <div class="review-tags">
                        <span class="tag">Personal Training</span>
                        <span class="tag">Muscle Gain</span>
                    </div>
                </div>

                <div class="review-card" data-category="general">
                    <div class="review-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"Clean facility, friendly staff, and amazing amenities. The sauna and recovery area are perfect after intense workouts. FitZone has everything you need for a complete fitness experience."</p>
                    <div class="review-info">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="James Brown">
                        <div>
                            <h4>James Brown</h4>
                            <span>Member for 1.5 years</span>
                        </div>
                    </div>
                    <div class="review-tags">
                        <span class="tag">Facilities</span>
                        <span class="tag">Recovery</span>
                    </div>
                </div>
            </div>

            <div class="reviews-pagination">
                <button class="btn btn-secondary" id="load-more">Load More Reviews</button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <div class="cta-content">
                <h2>Join Our Fitness Community</h2>
                <p>Be part of the FitZone family and start your transformation journey today.</p>
                <a href="contact.php" class="btn btn-primary">Become a Member</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script>
        // Animate counters
        function animateCounter(element, target, duration = 2000) {
            const start = 0;
            const startTime = performance.now();

            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                // Easing function for smooth animation
                const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                const current = Math.floor(start + (target - start) * easeOutQuart);

                element.textContent = target.toString().includes('+') ? current + '+' :
                                    target.toString().includes('%') ? current + '%' :
                                    target.toString().includes('.') ? current.toFixed(1) : current;

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                }
            }

            requestAnimationFrame(updateCounter);
        }

        // Intersection Observer for counter animation
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const targetText = stat.textContent;
                        const target = parseFloat(targetText.replace(/[^\d.]/g, ''));
                        animateCounter(stat, target);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe the stats section
        const statsSection = document.querySelector('.reviews-stats');
        if (statsSection) {
            observer.observe(statsSection);
        }

        // Review filtering functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const reviewCards = document.querySelectorAll('.review-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                const filterValue = btn.dataset.filter;

                reviewCards.forEach(card => {
                    if (filterValue === 'all' || card.dataset.category === filterValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Load more functionality
        let visibleCount = 6;
        const loadMoreBtn = document.getElementById('load-more');

        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', () => {
                const hiddenCards = Array.from(reviewCards).filter(card => card.style.display === 'none' || !card.style.display);

                for (let i = 0; i < 3 && i < hiddenCards.length; i++) {
                    hiddenCards[i].style.display = 'block';
                }

                if (document.querySelectorAll('.review-card[style*="display: none"]').length === 0) {
                    loadMoreBtn.style.display = 'none';
                }
            });
        }

        // Initially hide reviews beyond the first 6
        const reviews = Array.from(reviewCards);
        reviews.forEach((card, index) => {
            if (index >= visibleCount) {
                card.style.display = 'none';
            }
        });
    </script>
</body>
</html>
