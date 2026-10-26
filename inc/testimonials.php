<?php
$testimonials = [
    [
        'name' => 'Rahul Sharma',
        'role' => 'Owner, The Daily Brew',
        'quote' => 'Zrott made it so easy to get our restaurant online. Orders and customer engagement have increased significantly.',
        'stars' => 5,
        'img' => $root . '/img/testi-1.webp',
    ],
    [
        'name' => 'Priya Mehta',
        'role' => 'Owner, Royal Beauty Salon',
        'quote' => 'The appointment booking system is a game-changer for our salon. Our clients love the convenience!',
        'stars' => 5,
        'img' => $root . '/img/testi-2.webp',
    ],
    [
        'name' => 'Amit Patel',
        'role' => 'Owner, City Palace Hotel',
        'quote' => 'We got a beautiful website and powerful tools to manage our hotel. Highly recommended!',
        'stars' => 5,
        'img' => $root . '/img/testi-3.webp',
    ],
];
?>
<section id="testimonials" class="section-testimonials" style="border-top: 1px solid #f1f5f9; border-bottom: 1px solid #f1f5f9;">
    <div class="front-container">
        <div class="section-header-center">
            <h2 class="section-title">Loved by Thousands of Business Owners</h2>
            <p class="section-subtitle">
                Real businesses. Real growth. Real stories.
            </p>
        </div>

        <div class="testimonials-grid-3">
            <?php foreach ($testimonials as $t): ?>
                <div class="testimonial-card">
                    <div>
                        <div class="quote-icon-bubble">“</div>
                        <p class="testimonial-quote">“<?php echo htmlspecialchars($t['quote']); ?>”</p>
                    </div>

                    <div>
                        <div class="testimonial-stars">
                            <?php for ($i = 0; $i < $t['stars']; $i++): ?>
                                <i data-lucide="star" style="fill: #f59e0b; color: #f59e0b;"></i>
                            <?php endfor; ?>
                        </div>

                        <div class="testimonial-author-row">
                            <img src="<?php echo $t['img']; ?>" alt="<?php echo htmlspecialchars($t['name']); ?>" class="author-avatar" />
                            <div>
                                <div class="author-name"><?php echo htmlspecialchars($t['name']); ?></div>
                                <div class="author-role"><?php echo htmlspecialchars($t['role']); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
