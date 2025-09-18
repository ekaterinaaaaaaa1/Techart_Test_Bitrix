// async function initMap(mapElement) {
// 	const latitude = mapElement.getAttribute('data-latitude');
// 	const longitude = mapElement.getAttribute('data-longitude');

// 	// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
// 	await window.ymaps3.ready;

// 	const {YMap, YMapDefaultSchemeLayer, YMapMarker, YMapDefaultFeaturesLayer} = window.ymaps3;
// 	// const {YMapDefaultMarker} = await window.ymaps3.import('@yandex/ymaps3-default-ui-theme');

// 	// Иницилиазируем карту
// 	const map = new YMap(
// 		// Передаём ссылку на HTMLElement контейнера
// 		mapElement,

// 		// Передаём параметры инициализации карты
// 		{
// 			location: {
// 				// Координаты центра карты
// 				center: [longitude, latitude],

// 				// Уровень масштабирования
// 				zoom: 17
// 			}
// 		}
// 	);

// 	// Добавляем слой для отображения схематической карты
// 	map.addChild(new YMapDefaultSchemeLayer());
// 	map.addChild(new YMapDefaultFeaturesLayer());

// 	const marker = new YMapMarker (
// 		{
// 			coordinates: [longitude, latitude],
// 			draggable: false,
// 			mapFollowingOnDrag: true
// 		},
// 		markerElement
// 	)

// 	map.addChild(marker);
// }

// document.addEventListener("DOMContentLoaded", () => {
// 	const mapElement = document.getElementById('1');
// 	const markerElement = document.querySelector('.b-map__marker');
// 	// moscow = [37.630113, 55.679103];

// 	if (mapElement != null && markerElement != null) {
// 		initMap();

// 		async function initMap() {
// 			// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
// 			await window.ymaps3.ready;

// 			const {YMap, YMapDefaultSchemeLayer, YMapMarker, YMapDefaultFeaturesLayer} = window.ymaps3;
// 			// const {YMapDefaultMarker} = await window.ymaps3.import('@yandex/ymaps3-default-ui-theme');

// 			// Иницилиазируем карту
// 			const map = new YMap(
// 				// Передаём ссылку на HTMLElement контейнера
// 				mapElement,

// 				// Передаём параметры инициализации карты
// 				{
// 					location: {
// 						// Координаты центра карты
// 						center: [37.584685, 54.200802],

// 						// Уровень масштабирования
// 						zoom: 17
// 					}
// 				}
// 			);

// 			// Добавляем слой для отображения схематической карты
// 			map.addChild(new YMapDefaultSchemeLayer());
// 			map.addChild(new YMapDefaultFeaturesLayer());

// 			const marker = new YMapMarker (
// 				{
// 					coordinates: [37.584685, 54.200802],
// 					draggable: false,
// 					mapFollowingOnDrag: true
// 				},
// 				markerElement
// 			)

// 			map.addChild(marker);

// 			// document.querySelector('.b-map__marker-point').addEventListener('click', () => {
// 			// 	const aboutElement = document.querySelector('.b-map__marker-about');

// 			// 	if (aboutElement.classList.contains('b-map__marker-about--hidden')) {
// 			// 		aboutElement.classList.remove('b-map__marker-about--hidden');
// 			// 	}
// 			// 	else {
// 			// 		aboutElement.classList.add('b-map__marker-about--hidden');
// 			// 	}
// 			// });
// 		}
// 	}
// });