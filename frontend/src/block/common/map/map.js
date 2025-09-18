document.addEventListener("DOMContentLoaded", () => {
	initMap();

	async function initMap() {
		// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
		await window.ymaps3.ready;

		const {YMap, YMapDefaultSchemeLayer, YMapMarker, YMapDefaultFeaturesLayer} = window.ymaps3;
		// const {YMapDefaultMarker} = await window.ymaps3.import('@yandex/ymaps3-default-ui-theme');

		// Иницилиазируем карту
		const map = new YMap(
			// Передаём ссылку на HTMLElement контейнера
			document.getElementById('map'),

			// Передаём параметры инициализации карты
			{
				location: {
					// Координаты центра карты
					center: [37.584685, 54.200802],

					// Уровень масштабирования
					zoom: 17
				}
			}
		);

		// Добавляем слой для отображения схематической карты
		map.addChild(new YMapDefaultSchemeLayer());
		map.addChild(new YMapDefaultFeaturesLayer());

		const markerElement = document.querySelector('.b-map__marker');

		const marker = new YMapMarker (
			{
				coordinates: [37.584685, 54.200802],
				draggable: false,
				mapFollowingOnDrag: true
			},
			markerElement
		)

		map.addChild(marker);

		document.querySelector('.b-map__marker-point').addEventListener('click', () => {
			const aboutElement = document.querySelector('.b-map__marker-about');

			if (aboutElement.classList.contains('b-map__marker-about--hidden')) {
				aboutElement.classList.remove('b-map__marker-about--hidden');
			}
			else {
				aboutElement.classList.add('b-map__marker-about--hidden');
			}
		});
	}
});