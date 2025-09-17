document.addEventListener("DOMContentLoaded", () => {
	initMap();

	async function initMap() {
		// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
		await window.ymaps3.ready;

		const {YMap, YMapDefaultSchemeLayer} = window.ymaps3;

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

		var myPlacemark = new window.ymaps3.Placemark([37.584685, 54.200802], {
			hintContent: 'Моя метка', // Подсказка при наведении
			balloonContent: 'Содержимое балуна' // Содержимое при клике
		});

		map.geoObjects.add(myPlacemark); // Добавляем метку на карту
	}
});