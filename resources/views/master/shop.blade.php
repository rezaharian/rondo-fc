    <!-- ==== SWIPER SHOP SECTION ==== -->

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <style>
        .shop-title {
            color: #fff;
            margin-bottom: 1.5rem;
        }

        .shop-slide {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(0, 33, 71, 0.15);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }

        .shop-slide:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 18px rgba(0, 33, 71, 0.2);
        }

        .shop-slide img {
            width: 100%;
            height: 180px;
            object-fit: contain;
            background-color: #f8f9fa;
        }

        .shop-content {
            padding: 1rem;
        }

        .shop-name {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 0.4rem;
            color: #002147;
        }

        .shop-type {
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 0.4rem;
        }

        .shop-rating {
            color: #FFD700;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .shop-price {
            font-size: 1rem;
            font-weight: 700;
            color: #002147;
        }

        .shop-discount {
            font-size: 0.8rem;
            text-decoration: line-through;
            color: #999;
            margin-left: 0.5rem;
        }

        .add-to-cart {
            display: inline-block;
            margin-top: 0.7rem;
            padding: 6px 12px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #fff;
            background-color: #002147;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-to-cart:hover {
            background-color: #003366;
        }

        .swiper-button-prev,
        .swiper-button-next {
            width: 40px;
            height: 40px;
            background-color: rgba(0, 33, 71, 0.8);
            border-radius: 50%;
            color: #fff;
            top: 50%;
            transform: translateY(-50%);
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 16px;
        }
    </style>

    <section class="container py-5">
        <h2 class="h3 fw-bold shop-title">Football Shop</h2>

        <div class="swiper shop-swiper ">
            <div class="swiper-wrapper pt-4">
                <!-- Product 1 -->
                <div class="swiper-slide shop-slide">
                    <img src="https://www.tudnfanshop.com/cdn/shop/files/xlulMEy1_MTN_a998db03-82b3-4f43-beb0-0091b02e8e84.png?v=1726764395"
                        alt="PSG Home Jersey">
                    <div class="shop-content">
                        <div class="shop-name">PSG Home Jersey 2025</div>
                        <div class="shop-type">Home Kit</div>
                        <div class="shop-rating">★ ★ ★ ★ ☆</div>
                        <div class="shop-price">$79.99 <span class="shop-discount">$99.99</span></div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="swiper-slide shop-slide">
                    <img src="https://www.tudnfanshop.com/cdn/shop/files/xlulMEy1_MTN_a998db03-82b3-4f43-beb0-0091b02e8e84.png?v=1726764395"
                        alt="PSG Away Jersey">
                    <div class="shop-content">
                        <div class="shop-name">PSG Away Jersey 2025</div>
                        <div class="shop-type">Away Kit</div>
                        <div class="shop-rating">★ ★ ★ ★ ★</div>
                        <div class="shop-price">$74.99 <span class="shop-discount">$89.99</span></div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="swiper-slide shop-slide">
                    <img src="https://www.fanbase.co.ke/image/cache/catalog/17-18%20football%20season/psg/men/24-25/PSG-Away-Kids-Football-Kit-2425-550x550.jpg"
                        alt="PSG Kids Away Kit">
                    <div class="shop-content">
                        <div class="shop-name">PSG Kids Away Kit 24/25</div>
                        <div class="shop-type">Kids Kit</div>
                        <div class="shop-rating">★ ★ ★ ☆ ☆</div>
                        <div class="shop-price">$59.99 <span class="shop-discount">$69.99</span></div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="swiper-slide shop-slide">
                    <img src="https://images.meesho.com/images/products/298066185/hxlnp_512.jpg" alt="Training Jersey">
                    <div class="shop-content">
                        <div class="shop-name">PSG Training Jersey</div>
                        <div class="shop-type">Training Wear</div>
                        <div class="shop-rating">★ ★ ★ ★ ☆</div>
                        <div class="shop-price">$39.99 <span class="shop-discount">$49.99</span></div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="swiper-slide shop-slide">
                    <img src="https://images.meesho.com/images/products/298066185/hxlnp_512.jpg" alt="Casual Shirt">
                    <div class="shop-content">
                        <div class="shop-name">PSG Casual Shirt</div>
                        <div class="shop-type">Casual Wear</div>
                        <div class="shop-rating">★ ★ ★ ★ ☆</div>
                        <div class="shop-price">$29.99 <span class="shop-discount">$39.99</span></div>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Navigasi -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        const shopSwiper = new Swiper('.shop-swiper', {
            slidesPerView: 4, // default desktop 4
            spaceBetween: 20,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                },
            }
        });
    </script>
