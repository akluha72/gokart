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
                    <div class="detail-wrapper">
                        <div class="track-title">
                            <h2>Formula Karting </h2>
                            <p>Strand Mall, Petaling Jaya, Selangor</p>
                        </div>
                        <div class="track-features">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="item">
                                    <div class="icon"></div>
                                    <p class="text">some text</p>
                                </div>
                            @endfor
                        </div>
                        <div class="track-best-driver">
                            <div class="longest-streak">
                                <p class="number">03</p>
                                <p class="month">Months</p>
                            </div>
                            <div class="best-driver">
                                <div class="icon"></div>
                                <p>Most Successful driver</p>
                                <h3>Akluha72</h3>
                            </div>
                        </div>
                        <div class="track-lap-record">
                            <div class="time-record">
                                <div class="icon"></div>
                                <div class="time-con">
                                    <p class="title">Race Lap Record</p>
                                    <h3 class="time">1:30:909</h3>
                                </div>
                            </div>
                            <div class="driver-name-con">
                                <p>Driver</p>
                                <h3>Akluha72</h3>
                            </div>
                        </div>
                    </div>
                    <div class="track-layout">
                        <img src="{{ asset('images/tracks-layout/edited-pinnacale.png') }}" alt="">
                    </div>
                </div>
                <div class="tracks-item">
                    <h2>Pinnacle Gokart </h2>
                </div>
                <div class="tracks-item">
                    <h2>LYL Gokart </h2>
                </div>
                <div class="tracks-item">
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
