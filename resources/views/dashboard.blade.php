<x-app-layout>
    <div class="container">
        <h1>GoKart Tracks Location</h1>
        <div id="map"></div>

        <div class="tracks-wrapper">
            <h2>Tracks List</h2>

            {{-- layout design --}}
            {{-- https://www.canva.com/design/DAGie55b0M4/ElvoNXlOnjepiv7QfnYxKQ/edit?utm_content=DAGie55b0M4&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton --}}
            <div class="tracks-container">
                <div class="tracks-item">
                    <h2>Formula Karting </h2>
                </div>
                <div class="tracks-item">
                    <h2>Pinnacle Gokart </h2>
                </div>    <div class="tracks-item">
                    <h2>LYL Gokart </h2>
                </div>    <div class="tracks-item">
                    <h2>Evolt Karting</h2>
                </div>
            </div>
        </div>

    <script src="https://api.mapbox.com/mapbox-gl-js/v3.1.2/mapbox-gl.js"></script>
    <script>
        // Set your Mapbox access token
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWtsdWhhNzIiLCJhIjoiY204a2p0M2RzMG5zcTJrcG9lZnhyZHNnZyJ9.HRTeC-7Um8uDWivJBpYMLg';
        
        // Initialize the map
        const map = new mapboxgl.Map({
            container: 'map', // Container ID
            style: 'mapbox://styles/mapbox/streets-v12', // Map style
            center: [101.7380, 2.7593], // Center on Sepang International Kart Circuit
            zoom: 6, // Zoom level to show all of Malaysia
        });

        // Add markers for GoKart tracks
        const tracks = @json($tracks); // Pass track data from the controller
        tracks.forEach(track => {
            new mapboxgl.Marker()
                .setLngLat([track.longitude, track.latitude])
                .setPopup(new mapboxgl.Popup().setHTML(`<h3>${track.name}</h3><p>${track.description}</p>`))
                .addTo(map);
        });
    </script>
</x-app-layout>
