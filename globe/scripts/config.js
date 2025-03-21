const config = {
	urls: {
		globeTexture: '../assets/textures/earth_dark.jpg',
		pointTexture: '../assets/imgs/disc.png'
	},
	sizes: {
		globe: 200,
		globeDotSize: 2
	},
	scale: {
		points: 0.4,
		markers: 0.025,
		globeScale: 0
	},
	rotation: {
		globe: 0.001
	},
	colors: {
		globeDotColor: 'rgb(219, 191, 139)', //the gold we have dbbf8b
		globeMarkerColor: 'rgb(143, 216, 216)', //37,52,80 253450 blue
		globeMarkerGlow: 'rgb(37, 52, 255)',
		globeLines: 'rgb(255, 255, 255)',
		globeLinesDots: 'rgb(255, 255, 255)'
	},
	display: {
		points: true,
		map: true,
		lines: false,
		markers: false,
		markerLabel: false,
		markerPoint: false
	},
	dots: {
		total: 300
	}
}

const elements = {
	globe: null,
	atmosphere: null,
	globePoints: null,
	lineDots: [],
	markers: [],
	markerLabel: [],
	markerPoint: [],
	lines: []
}

const textures = {
	markerLabels: []
}

const groups = {
	map: null,
	main: null,
	globe: null,
	lines: null,
	points: null,
	markers: null,
	atmosphere: null,
	lineDots: null,
}

const countries = {
	interval: 20000,
	selected: null,
	index: 0
}

const animations = {
  rotateGlobe: true
}