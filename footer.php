<!-- footer.php -->
<!-- Footer -->
<footer class="py-4" style="background-color: #001F3F; color: #fff;">
    <div class="container text-center">
        <p>&copy; 2024 Sai Pictures. All rights reserved to <a href="https://techcov.in" style="text-decoration: none;" class="text-warning"><strong>TECHCO V.</strong></a></p>
        <!-- <p>Follow us on:
            <a href="#" class="text-white mx-2">Facebook</a> |
            <a href="#" class="text-white mx-2">Instagram</a> |
            <a href="#" class="text-white mx-2">Twitter</a>
        </p> -->
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
    // Close the offcanvas menu when clicking on a link
    document.querySelectorAll('#offcanvasNavbar .nav-link').forEach(link => {
        link.addEventListener('click', (event) => {
            const targetId = link.getAttribute('href'); // Get the target section ID

            // Prevent default anchor behavior to avoid jumping to the top
            event.preventDefault();

            // Hide the offcanvas
            const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('offcanvasNavbar'));
            if (offcanvas) {
                offcanvas.hide(); // Hide the offcanvas
            }

            // Use smooth scrolling to the target section after a slight delay
            setTimeout(() => {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }, 300); // Adjust this timeout if needed
        });
    });
</script>

<!-- Google Maps JavaScript API -->
<script>
    function initMap() {
        // Specify the location
        const location = { lat: 37.7749, lng: -122.4194 }; // Replace with your desired coordinates

        // Create the map
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: location,
        });

        // Add a marker
        const marker = new google.maps.Marker({
            position: location,
            map: map,
            title: "Our Location", // You can change the title
        });
    }
</script>


</body>
</html>
