<style>
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .gallery-item {
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: #fff;
        transition: transform 0.3s ease;
    }

    .gallery-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    @media (max-width: 500px) {
        .gallery-item img {
            height: 150px;
        }
    }
</style>
<>

    <div class="gallery">
        <div class="gallery-item">
            <img src="/galery/1.jpeg" alt="Galeri 1">
        </div>
        <div class="gallery-item">
            <img src="/galery/2.jpeg" alt="Galeri 2">
        </div>
        <div class="gallery-item">
            <img src="/galery/3.jpeg" alt="Galeri 3">
        </div>
        <div class="gallery-item">
            <img src="/galery/4.jpeg" alt="Galeri 4">
        </div>
        <div class="gallery-item">
            <img src="/galery/5.jpeg" alt="Galeri 5">
        </div>
        <div class="gallery-item">
            <img src="/galery/6.jpeg" alt="Galeri 6">
        </div>
    </div>
</>
