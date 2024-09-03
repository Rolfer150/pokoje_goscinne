<!-- Mapa -->
<div class=" p-6 flex justify-center md:justify-end">
    <div id="map" class="w-full h-[400px] md:w-[800px] md:h-[600px] bg-gray-200 z-0 rounded-md"></div>
</div>

<!-- Skrypty Leaflet.js i CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    function initMap() {
        const location = [49.459577882572795, 20.295642046109794]; // Współrzędne lokalizacji
        const map = L.map('map').setView(location, 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Niestandardowa czerwona ikona pinezki
        const redIcon = L.icon({
            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-icon-red.png',
            iconSize: [25, 41], // rozmiar ikony
            iconAnchor: [12, 41], // punkt kotwicy (dla wyrównania)
            popupAnchor: [1, -34], // gdzie pojawia się dymek
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
            shadowSize: [41, 41] // rozmiar cienia
        });

        const marker = L.marker(location).addTo(map)
            .bindPopup("Pokoje Gościnne Złydaszyk'");

        // Wyświetlanie dymka przy najechaniu na pinezkę
        marker.on('mouseover', function() {
            marker.openPopup();
        });

        marker.on('mouseout', function() {
            marker.closePopup();
        });

        // Przekierowanie na Google Maps po kliknięciu na pinezkę
        marker.on('click', function() {
            window.location.href = "https://www.google.com/maps/place/Złydaszyk+Stanisław.+Wynajem+pokoi/@49.4594093,20.2958484,19.25z/data=!4m6!3m5!1s0x4715ff52b371aff1:0xc91d1c7923aab7e2!8m2!3d49.4595519!4d20.2955799!16s%2Fg%2F1tf7fddl?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D";
        });
    }

    // Inicjalizacja mapy po załadowaniu strony
    document.addEventListener('DOMContentLoaded', function() {
        initMap();
    });
</script>
