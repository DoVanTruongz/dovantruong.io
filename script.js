<script>
    document.addEventListener("DOMContentLoaded", function() {
        const anhLon = document.querySelector(".big-img");
        const anhCon = document.querySelector(".anh-con");
        const anhNho = document.querySelectorAll(".small-img");

        anhNho.forEach(function(anhNho) {
            anhNho.addEventListener("mouseenter", function() {
                const duongDanAnh = anhNho.src;
                anhLon.src = duongDanAnh;
            });
        });

        anhCon.addEventListener("mouseleave", function() {
            const duongDanAnhLon = document.querySelector(".big-img").src;
            anhLon.src = duongDanAnhLon;
        });
    });
</script>
