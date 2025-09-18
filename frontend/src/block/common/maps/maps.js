document.addEventListener("DOMContentLoaded", () => {
	const mapsElement = document.getElementById('maps');

	if (mapsElement != null) {
		for (let i = 0; i < mapsElement.children.length; i++) {
			const mapElement = document.getElementById("map_" + i);
			initMap(mapElement);
		}
	}

	async function initMap(mapElement) {
		const markerElement = mapElement.querySelector('.b-map__marker');
		const latitude = mapElement.getAttribute('data-latitude');
		const longitude = mapElement.getAttribute('data-longitude');

		// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
		await window.ymaps3.ready;

		const {YMap, YMapDefaultSchemeLayer, YMapMarker, YMapDefaultFeaturesLayer} = window.ymaps3;

		// Иницилиазируем карту
		const map = new YMap(
			// Передаём ссылку на HTMLElement контейнера
			mapElement,

			// Передаём параметры инициализации карты
			{
				location: {
					// Координаты центра карты
					center: [longitude, latitude],

					// Уровень масштабирования
					zoom: 17
				}
			}
		);

		// Добавляем слой для отображения схематической карты
		map.addChild(new YMapDefaultSchemeLayer());
		map.addChild(new YMapDefaultFeaturesLayer());

		const marker = new YMapMarker (
			{
				coordinates: [longitude, latitude],
				draggable: false,
				mapFollowingOnDrag: true
			},
			markerElement
		)

		map.addChild(marker);

		mapElement.querySelectorAll('.b-map__marker-point').forEach((marker) => {
			marker.addEventListener('click', () => {
				var aboutElement = mapElement.querySelector('.b-map__marker-about');

				if (aboutElement.classList.contains('b-map__marker-about--hidden')) {
					aboutElement.classList.remove('b-map__marker-about--hidden');
				}
				else {
					aboutElement.classList.add('b-map__marker-about--hidden');
	    		}
			});
		});
	}

	document.querySelectorAll('.b-maps__tab').forEach((button) => {
		button.addEventListener('click', () => {
			const activeButton = mapsElement.querySelectorAll('.b-maps__tab--active')[0];
			activeButton.classList.remove('b-maps__tab--active');

			button.classList.add('b-maps__tab--active');

			const activeBlock = mapsElement.querySelectorAll('.b-map:not(.b-map--hidden)')[0];
			activeBlock.classList.add('b-map--hidden');

			const newActiveBlock = document.getElementById(button.getAttribute('data-map-id'));
			newActiveBlock.classList.remove('b-map--hidden');
		});
	});
});