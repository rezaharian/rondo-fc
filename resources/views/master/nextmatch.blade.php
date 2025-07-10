<style>
    :root {
        --primary-core: #002147;
        --secondary: #DA291C;
    }

    .nextmatch-card {
        background: linear-gradient(135deg, var(--primary-core), var(--secondary));
        color: #fff;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        transition: transform 0.3s, box-shadow 0.3s;
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        min-height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .nextmatch-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
    }

    .team-logos {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-bottom: 10px;
    }

    .team-logos img {
        height: 50px;
    }

    .match-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
    }

    .match-date,
    .match-location {
        font-size: 0.95rem;
        color: #ddd;
        margin-bottom: 0.3rem;
    }

    .nextmatch-card::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 25px;
        background-color: rgba(255, 255, 255, 0.15);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 80%);
        z-index: 1;
    }
</style>

<section class="container py-5">

    <h2 class="h3 fw-bold mb-4 mt-5 text-light"></h2>
    <div class="row g-4">
        <!-- Match 1 -->
        <div class="col-md-3 col-6">
            <div class="nextmatch-card text-center">
                <div class="team-logos">
                    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/8/85/Us_lecce.svg/1200px-Us_lecce.svg.png"
                        alt="Lecce">
                    <span class="fw-bold">VS</span>
                    <img src="https://upload.wikimedia.org/wikipedia/id/c/ca/Paris_Saint-Germain_F.CC..svg"
                        alt="PSG">
                </div>
                <div class="match-title">Lecce <SPAN class="text-danger"> vs </SPAN> PSG</div>
                <div class="match-date">1 Jan 2001 • TBC</div>
                <div class="match-location">Gelora Bung Karno</div>
            </div>
        </div>

        <!-- Match 2 -->
        <div class="col-md-3 col-6">
            <div class="nextmatch-card text-center">
                <div class="team-logos">
                    <img src="https://upload.wikimedia.org/wikipedia/id/c/ca/Paris_Saint-Germain_F.CC..svg"
                        alt="PSG">
                    <span class="fw-bold">VS</span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/SSC_Neapel.svg/1200px-SSC_Neapel.svg.png"
                        alt="Napoli">
                </div>
                <div class="match-title">PSG <SPAN class="text-danger"> vs </SPAN> Napoli</div>
                <div class="match-date">8 Jan 2001 • 19:00</div>
                <div class="match-location">Parc des Princes</div>
            </div>
        </div>

        <!-- Match 3 -->
        <div class="col-md-3 col-6">
            <div class="nextmatch-card text-center">
                <div class="team-logos">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Logo_Parma_Calcio_1913_%28adozione_2016%29.svg/1200px-Logo_Parma_Calcio_1913_%28adozione_2016%29.svg.png"
                        alt="Parma">
                    <span class="fw-bold">VS</span>
                    <img src="https://upload.wikimedia.org/wikipedia/id/c/ca/Paris_Saint-Germain_F.CC..svg"
                        alt="PSG">
                </div>
                <div class="match-title">Parma <SPAN class="text-danger"> vs </SPAN> PSG</div>
                <div class="match-date">15 Jan 2001 • 20:00</div>
                <div class="match-location">Ennio Tardini</div>
            </div>
        </div>

        <!-- Match 4 -->
        <div class="col-md-3 col-6">
            <div class="nextmatch-card text-center">
                <div class="team-logos">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Logo_Parma_Calcio_1913_%28adozione_2016%29.svg/1200px-Logo_Parma_Calcio_1913_%28adozione_2016%29.svg.png"
                        alt="Parma">
                    <span class="fw-bold">VS</span>
                    <img src="https://upload.wikimedia.org/wikipedia/id/c/ca/Paris_Saint-Germain_F.CC..svg"
                        alt="PSG">
                </div>
                <div class="match-title">PARMA <SPAN class="text-danger"> vs </SPAN> PSG</div>
                <div class="match-date">22 Jan 2001 • 21:00</div>
                <div class="match-location">Groupama Stadium</div>
            </div>
        </div>

    </div>

</section>
