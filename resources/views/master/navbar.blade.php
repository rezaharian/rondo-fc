<style>
    :root {
        --primary-core: #002147;
        --secondary: #DA291C;
        --transparent-soft: rgba(0, 33, 71, 0.4);
        --transparent-soft-top: rgba(0, 33, 71, 0.85);
    }

    /* Top Navbar */
    .top-navbar {
        background-color: var(--transparent-soft-top);
        font-size: 0.8rem;
        padding: 0.2rem 0;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1050;
        transition: top 0.4s;
        height: 25px;
        display: flex;
        align-items: center;
    }

    .top-navbar a {
        color: #fff;
        text-decoration: none;
        margin-right: 0.8rem;
    }

    .top-navbar a:hover {
        color: var(--secondary);
    }

    /* Main Navbar */
    #navbar::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        background-color: var(--secondary);
        width: 0;
        transition: width 0.4s ease;
    }

    #navbar:hover::after {
        width: 100%;
    }

    #navbar {
        position: fixed;
        top: 25px;
        /* lebih dekat ke top navbar */
        left: 0;
        right: 0;
        z-index: 1040;
        transition: top 0.4s;
    }

    .bg-transparent-soft {
        background-color: var(--transparent-soft);
        transition: background-color 0.4s;
    }

    .bg-primary-solid {
        background-color: var(--primary-core) !important;
        transition: background-color 0.4s;
    }

    .nav-link {
        color: #fff !important;
        font-weight: 500;
        position: relative;
        padding: 0.5rem 1rem;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: var(--secondary);
        transition: width 0.3s;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }
</style>

<!-- TOP NAVBAR -->
<div id="topNavbar" class="top-navbar">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
        </div>
        <div>
            <a href="#" class="fw-bold" style="color: #DA291C;">Login</a>
            <a href="#" class="fw-bold" style="color: #DA291C;">Register</a>
            <a href="#" class="fw-bold" style="color: #DA291C;">Contact</a>
        </div>
    </div>
</div>


<!-- MAIN NAVBAR -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-transparent-soft">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/id/c/ca/Paris_Saint-Germain_F.CC..svg" alt="Logo"
                height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#hero">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#nextmatch">Next Match</a></li>
            <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
            <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="#partner">Partner</a></li>
        </ul>
    </div>
</nav>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        const topNavbar = document.getElementById('topNavbar');

        // Ganti background main navbar saat scroll
        if (window.scrollY > 50) {
            navbar.classList.remove('bg-transparent-soft');
            navbar.classList.add('bg-primary-solid');
        } else {
            navbar.classList.remove('bg-primary-solid');
            navbar.classList.add('bg-transparent-soft');
        }

        // Sembunyikan top navbar pas scroll
        if (window.scrollY > 0) {
            topNavbar.style.top = "-30px"; // geser ke atas
            navbar.style.top = "0"; // navbar utama jadi paling atas
        } else {
            topNavbar.style.top = "0";
            navbar.style.top = "25px"; // kembalikan posisi navbar utama
        }
    });
</script>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
