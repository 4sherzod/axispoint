import * as THREE from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.module.js';
import { OrbitControls } from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/examples/jsm/controls/OrbitControls.js';

let scene, camera, renderer, globe;

function init() {
    // Scene setup
    scene = new THREE.Scene();

    // Camera setup
    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 2;

    // Renderer setup
    renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    // Load Globe Texture
    const textureLoader = new THREE.TextureLoader();
    const globeTexture = textureLoader.load('./assets/world.jpg');
    const globeGeometry = new THREE.SphereGeometry(0.5, 50, 50);
    const globeMaterial = new THREE.MeshBasicMaterial({ map: globeTexture });
    globe = new THREE.Mesh(globeGeometry, globeMaterial);
    scene.add(globe);

    // Lighting
    const light = new THREE.PointLight(0xffffff, 1, 0);
    light.position.set(5, 5, 5);
    scene.add(light);

    // Add Orbit Controls for interactivity
    const controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;

    // Animation loop
    function animate() {
        requestAnimationFrame(animate);

        // Rotate the globe
        globe.rotation.y += 0.001;

        // Update controls
        controls.update();

        renderer.render(scene, camera);
    }

    animate();
}

// Resize event listener
window.addEventListener('resize', () => {
    renderer.setSize(window.innerWidth, window.innerHeight);
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
});

// Initialize the scene
init();
