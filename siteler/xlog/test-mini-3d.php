<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Model Entegrasyonu</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        canvas {
            display: block;
        }
    </style>
</head>
<body>
    <div id="container"></div>

    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/FBXLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fflate@0.9.4/dist/fflate.min.js"></script>

    <script>
        // İlgili HTML elementini seç
        var container = document.getElementById('container');

        // Yeni bir Three.js sahnesi oluştur
        var scene = new THREE.Scene();

        // Kamera oluştur
        var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 5;

        // Renderer oluştur
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        // Işık oluştur
        var light = new THREE.AmbientLight(0xffffff);
        scene.add(light);

        // 3D modeli yükle
        var loader = new THREE.FBXLoader();
        loader.load('assets/images/test.fbx', function (object) {
            scene.add(object);
        });

        // Render fonksiyonu
        function animate() {
            requestAnimationFrame(animate);
            renderer.render(scene, camera);
        }
        animate();
    </script>
</body>
</html>
