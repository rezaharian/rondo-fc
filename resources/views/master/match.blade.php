<!-- Swiper CSS -->
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<style>
    :root {
        --primary-core: #002147;
        --primary-dark: #00112c;
        --secondary: #DA291C;
    }

    .text-primary-core {
        color: var(--primary-core) !important;
    }

    .text-secondary {
        color: var(--secondary) !important;
    }

    .text-dark {
        color: var(--primary-dark) !important;
    }

    /* Match Card Style - Minimalis */
    .match-card {
        padding: 20px 15px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0);
        min-height: 280px;
        overflow: hidden;
    }

    .match-info,
    .match-date,
    .match-location {
        font-size: 0.95rem;
        /* diperbesar */
        color: var(--primary-dark);
    }

    .team-name {
        font-size: 1.1rem;
        /* diperbesar */
    }

    .match-card img {
        height: 60px;
        /* diperbesar dari 50 */
        object-fit: contain;
    }

    .swiper-pagination-bullet {
        background-color: var(--primary-core);
        opacity: 0.5;
    }

    .swiper-pagination-bullet-active {
        background-color: var(--secondary);
        opacity: 1;
    }

    .table-sm th,
    .table-sm td {
        padding: 0.4rem;
        /* sedikit lebih renggang */
        font-size: 0.9rem;
        /* diperbesar */
    }

    /* Optional: Jika ingin border table lebih halus */
    .table-sm {
        border-collapse: separate;
        border-spacing: 0 2px;
    }

    /* Tombol navigasi Swiper */
    .swiper-button-next,
    .swiper-button-prev {
        background-color: var(--primary-core);
        width: 32px;
        height: 32px;
        border-radius: 50%;
        color: #fff;
        font-size: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0.7;
        transition: opacity 0.3s, transform 0.3s;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        opacity: 1;
        transform: scale(1.1);
    }

    /* Sembunyikan default icon, pakai teks panah lebih simple */
    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 16px;
    }
</style>


<div class="container bg-light py-4">
    <div class="row g-4">
        <!-- MATCHES Swiper -->
        <div class="col-md-6 text-center border-end">
            <h5 class="fw-bold text-primary-core mb-2">MATCHES</h5>

            <div class="swiper match-swiper">
                <div class="swiper-wrapper mb-0">
                    <!-- Match 1 -->
                    <div class="swiper-slide p-0">
                        <div class="match-card">
                            <div class="match-info text-dark mb-2">
                                Ligue 1 • MD 1 <span class="badge bg-secondary">A</span>
                            </div>
                            <div class="match-date text-dark mb-2">1 Jan 2001 • TBC</div>
                            <div class="match-location fst-italic mb-3 text-dark">Gelora Bung Karno</div>

                            <div class="d-flex justify-content-center align-items-center gap-3">
                                <div>
                                    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/8/85/Us_lecce.svg/1200px-Us_lecce.svg.png"
                                        alt="Lecce" height="50">
                                    <div class="team-name fw-semibold mt-2 text-primary-core">LECCE</div>
                                </div>
                                <div class="fw-bold text-secondary">VS</div>
                                <div>
                                    <img src="https://upload.wikimedia.org/wikipedia/id/c/ca/Paris_Saint-Germain_F.CC..svg"
                                        alt="PSG" height="50">
                                    <div class="team-name fw-semibold mt-2 text-secondary">PSG</div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Match 2 -->
                    <div class="swiper-slide p-0">
                        <div class="match-card">
                            <div class="match-info text-dark mb-2">
                                Ligue 1 • MD 2 <span class="badge bg-secondary">H</span>
                            </div>
                            <div class="match-date text-dark mb-2">8 Jan 2001 • 19:00</div>
                            <div class="match-location fst-italic mb-3 text-dark">Parc des Princes</div>

                            <div class="d-flex justify-content-center align-items-center gap-3">
                                <div>
                                    <img src="https://upload.wikimedia.org/wikipedia/id/c/ca/Paris_Saint-Germain_F.CC..svg"
                                        alt="PSG" height="50">
                                    <div class="team-name fw-semibold mt-2 text-secondary">PSG</div>
                                </div>
                                <div class="fw-bold text-secondary">VS</div>
                                <div>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/SSC_Neapel.svg/1200px-SSC_Neapel.svg.png"
                                        alt="Napoli" height="50">
                                    <div class="team-name fw-semibold mt-2 text-primary-core">NAPOLI</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>


                <div class="swiper-pagination mt-0"></div>
            </div>
            <a href="#" class="d-inline-block mt-1 text-secondary text-decoration-none small">
                See all matches >
            </a>
        </div>

        <!-- STANDINGS -->
        <div class="col-md-6 text-center">
            <h5 class="fw-bold text-primary-core mb-2">STANDINGS</h5>
            <div class="small text-dark mb-2">Ligue 1</div>

            <table class="table table-sm align-middle">
                <thead>
                    <tr class="text-dark small">
                        <th class="text-end">#</th>
                        <th></th>
                        <th class="text-start">Team</th>
                        <th>Pts</th>
                        <th>P</th>
                        <th>GD</th>
                    </tr>
                </thead>
                <tbody class="small">
                    <tr>
                        <td class="text-end text-warning">12</td>
                        <td><img src="https://upload.wikimedia.org/wikipedia/id/thumb/8/85/Us_lecce.svg/1200px-Us_lecce.svg.png"
                                alt="Lecce" height="18"></td>
                        <td class="text-start text-primary-core">LECCE</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td class="text-end text-warning fw-bold">13</td>
                        <td><img src="https://upload.wikimedia.org/wikipedia/id/c/ca/Paris_Saint-Germain_F.CC..svg"
                                alt="PSG" height="18"></td>
                        <td class="text-start text-secondary fw-bold">PSG</td>
                        <td class="text-secondary fw-bold">0</td>
                        <td class="text-secondary fw-bold">0</td>
                        <td class="text-secondary fw-bold">0</td>
                    </tr>
                    <tr>
                        <td class="text-end text-warning">14</td>
                        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/SSC_Neapel.svg/1200px-SSC_Neapel.svg.png"
                                alt="Napoli" height="18"></td>
                        <td class="text-start text-primary-core">NAPOLI</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td class="text-end text-warning">15</td>
                        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Logo_Parma_Calcio_1913_%28adozione_2016%29.svg/1200px-Logo_Parma_Calcio_1913_%28adozione_2016%29.svg.png"
                                alt="Parma" height="18"></td>
                        <td class="text-start text-primary-core">PARMA</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>

            <a href="#" class="d-inline-block text-secondary text-decoration-none small">
                See the standings >
            </a>
        </div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.match-swiper', {
        slidesPerView: 1,
        spaceBetween: 15,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
