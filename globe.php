<!DOCTYPE html>
<html lang="en">
<head>
    <style> body { margin: 0; } </style>
    <script src="//unpkg.com/globe.gl"></script>
</head>
<body>
    <div id="globeViz"></div>
    <script>
        fetch('./datasets/ne_110m_admin_0_countries.geojson')
            .then(res => {
                if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
                return res.json();
            })
            .then(places => {
                Globe()
                    .globeImageUrl('//unpkg.com/three-globe/example/img/earth-night.jpg')
                    // .backgroundImageUrl('//unpkg.com/three-globe/example/img/night-sky.png')
                    .labelsData(places.features)
                    // .labelLat(d => d.properties.latitude)
                    // .labelLng(d => d.properties.longitude)
                    .labelText(d => d.properties.NAME)
                    // .labelSize(d => Math.sqrt(d.properties.pop_max) * 4e-4)
                    // .labelDotRadius(d => Math.sqrt(d.properties.pop_max) * 4e-4)
                    .labelColor(() => 'rgba(255, 165, 0, 0.75)')
                    .labelResolution(2)
                (document.getElementById('globeViz'));
            })
            .catch(err => console.error('Error loading geojson:', err));
    </script>
</body>
</html>
