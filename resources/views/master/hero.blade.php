<!-- Blade -->
<section class="hero text-white text-center">
    <div class="container">
        <h1 class="display-5 fw-bold mb-3">
            "Le rêve d'une équipe, la passion d'un peuple"
        </h1>

        <p class="mt-3">
            Football | Équipe | Victoire | Passion
        </p>
    </div>
</section>

<div class="match-wrapper">
    @include('master.match')
</div>

<!-- Tambahkan style -->
<style>
    @media (min-width: 768px) {
        .hero {
            min-height: 100vh;
        }
    }

    .hero {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('https://wallpapercave.com/wp/wp2049173.jpg') center center / cover no-repeat;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding-top: 100px;
        padding-bottom: 50px;
        position: relative;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
    }

    .hero h1 {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    @media (min-width: 768px) {
        .hero h1 {
            font-size: 3rem;
        }
    }

    .hero p {
        font-size: 1.2rem;
        opacity: 0.85;
    }

    .match-wrapper {
        margin-top: -100px;
        position: relative;
        z-index: 2;
    }
</style>
