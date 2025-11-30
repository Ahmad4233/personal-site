document.addEventListener("DOMContentLoaded", function() {
    console.log("Mobile menu script loaded");

    const mobileBtn = document.getElementById("mobileBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileCloseBtn = document.getElementById("mobileCloseBtn");

    // Check if elements exist
    if (!mobileBtn || !mobileMenu || !mobileCloseBtn) {
        console.error("Mobile menu elements not found!");
        return;
    }

    console.log("All mobile menu elements found");

    // Mobile menu open
    mobileBtn.addEventListener("click", function() {
        console.log("Mobile button clicked");
        mobileMenu.classList.add("active");
        document.body.style.overflow = "hidden";

        // Add button animation
        this.classList.add("active");
    });

    // Mobile menu close
    mobileCloseBtn.addEventListener("click", function() {
        console.log("Close button clicked");
        mobileMenu.classList.remove("active");
        document.body.style.overflow = "";
        mobileBtn.classList.remove("active");
    });

    // Close when clicking on links
    const mobileLinks = document.querySelectorAll('.mobile-nav-item');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove("active");
            document.body.style.overflow = "";
            mobileBtn.classList.remove("active");
        });
    });

    // Close when clicking outside menu content
    mobileMenu.addEventListener('click', function(e) {
        if (e.target === this) {
            mobileMenu.classList.remove("active");
            document.body.style.overflow = "";
            mobileBtn.classList.remove("active");
        }
    });

    // Close with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
            mobileMenu.classList.remove("active");
            document.body.style.overflow = "";
            mobileBtn.classList.remove("active");
        }
    });
});
