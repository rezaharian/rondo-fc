<style>
    :root {
        --primary-core: #002147;
        --secondary: #DA291C;
    }

    /* Headline Card Unik */
    .news-headline {
        border-radius: 16px 16px;
        /* hanya bawah membulat */
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(0, 33, 71, 0.2);
        box-shadow: 0 2px 8px rgba(0, 33, 71, 0.15);
    }

    /* Small Card Unik */
    .news-small {
        border-radius: 12px 12px 0 0;
        /* hanya atas membulat */
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(0, 33, 71, 0.2);
        box-shadow: 0 2px 6px rgba(0, 33, 71, 0.12);
        transition: border-color 0.3s;
    }

    .news-small:hover {
        border-color: var(--secondary);
        /* border jadi merah saat hover */
    }

    /* Overlay tetap seperti sebelumnya */
    .news-headline .overlay,
    .news-small .overlay {
        padding: 0.8rem 1rem;
        background: linear-gradient(to top,
                rgba(0, 33, 71, 0.9) 0%,
                rgba(0, 33, 71, 0.8) 40%,
                rgba(0, 33, 71, 0.5) 70%,
                transparent 100%);
        color: #fff;
    }

    /* Judul & tanggal tetap simple */
    .news-headline .title,
    .news-small .title {
        font-weight: 600;
        font-size: 1rem;
    }

    .news-headline .date,
    .news-small .date {
        font-size: 0.75rem;
        opacity: 0.8;
    }


    /* Small Cards */
    .news-small {
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        transition: transform 0.3s;
    }

    .news-small:hover {
        transform: translateY(-4px);
    }

    .news-small img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .news-headline img {
        width: 100%;
        height: 100%;
        /* Sesuaikan sesuai kebutuhan */
        object-fit: cover;
        display: block;
    }

    .news-small .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 0.6rem;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        color: #fff;
    }

    .news-small .title {
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 0.2rem;
    }

    .news-small .date {
        font-size: 0.75rem;
    }

    .news-small .overlay {
        padding: 0.8rem 1rem;
        background: linear-gradient(to top,
                rgba(0, 33, 71, 0.95) 0%,
                rgba(0, 33, 71, 0.85) 25%,
                rgba(0, 45, 100, 0.7) 50%,
                rgba(0, 70, 130, 0.5) 70%,
                rgba(0, 90, 160, 0.3) 85%,
                rgba(0, 110, 190, 0.15) 95%,
                transparent 100%);
        color: #fff;
    }

    /* Khusus overlay headline card */
    .news-headline .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1rem;
        background: linear-gradient(to top,
                rgba(0, 33, 71, 0.95) 0%,
                rgba(0, 33, 71, 0.85) 30%,
                rgba(0, 45, 100, 0.65) 55%,
                rgba(0, 70, 130, 0.4) 75%,
                rgba(0, 90, 160, 0.2) 90%,
                transparent 100%);
        color: #fff;
    }


    /* Optional: Tambahkan shadow ringan di teks */
    .news-headline .title,
    .news-small .title,
    .news-headline .date,
    .news-small .date {
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.744);
    }
</style>

<section class="container py-5">
    <div class="row g-4">
        <!-- Headline -->
        <div class="col-md-6">
            <div class="news-headline">
                <img src="https://cdn.strivefootballgroup.com/psgacademy/greater_geneva/wp-residency/training.png"
                    alt="Headline">
                <div class="overlay">
                    <div class="title">PSG Begins Pre-season Training</div>
                    <div class="date">9 July 2025</div>
                </div>
            </div>
        </div>

        <!-- Small Cards -->
        <div class="col-md-6">
            <div class="row g-3">
                <div class="col-6">
                    <div class="news-small">
                        <img src="https://picsum.photos/600/300?random=2" alt="Mbappe">
                        <div class="overlay">
                            <div class="title">Mbappé Extends Contract</div>
                            <div class="date">7 July 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="news-small">
                        <img src="https://picsum.photos/600/300?random=3" alt="Stadium">
                        <div class="overlay">
                            <div class="title">Stadium Renovation Planned</div>
                            <div class="date">5 July 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="news-small">
                        <img src="https://picsum.photos/600/300?random=4" alt="Kit Launch">
                        <div class="overlay">
                            <div class="title">New Home Kit Revealed</div>
                            <div class="date">3 July 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="news-small">
                        <img src="https://picsum.photos/600/300?random=5" alt="Academy">
                        <div class="overlay">
                            <div class="title">Youth Academy Shines</div>
                            <div class="date">1 July 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="news-small">
                        <img src="https://picsum.photos/600/300?random=7" alt="Kit Launch">
                        <div class="overlay">
                            <div class="title">New Home Kit Revealed</div>
                            <div class="date">3 July 2025</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="news-small">
                        <img src="https://picsum.photos/600/300?random=9" alt="Academy">
                        <div class="overlay">
                            <div class="title">Youth Academy Shines</div>
                            <div class="date">1 July 2025</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
