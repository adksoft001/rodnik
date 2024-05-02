// import $ from 'jquery'
//Переменная для включения/отключения индикатора загрузки
var spinner_sev = $('.ymap-container-sev').children('.loader');
var spinner_nauch = $('.ymap-container-nauch').children('.loader');
//Переменная для определения была ли хоть раз загружена Яндекс.Карта (чтобы избежать повторной загрузки при наведении)
var check_if_load_sev = false;
var check_if_load_naych = false;

// Функция загрузки API Яндекс.Карт по требованию (в нашем случае при наведении)
function loadScript(url, className) {
	var script = document.createElement("script");
	
	if (script.readyState) {  // IE
		script.onreadystatechange = function () {
			if (script.readyState == "loaded" ||
				script.readyState == "complete") {
				script.onreadystatechange = null;
			}
		};
	}

	script.src = url;
	document.getElementsByClassName(className)[0].appendChild(script);
}

// Основная функция, которая проверяет когда мы навели на блок с классом "ymap-container"
var ymap = function () {
	// $('.ymap-container-sev').mouseenter(function () {
			if (!check_if_load_sev) { // проверяем первый ли раз загружается Яндекс.Карта, если да, то загружаем
				// Чтобы не было повторной загрузки карты, мы изменяем значение переменной
				check_if_load_sev = true;
				// Показываем индикатор загрузки до тех пор, пока карта не загрузится
				// spinner_sev.addClass('is-active');
				// Загружаем API Яндекс.Карт
				loadScript(
                    // "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa2212c777ed30dc2132528e0d4e467cb0682b3126530dde75ac90975dba34c3b&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true",
					"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A39cf4be968d314a85f5afd70fdfaa5b5ca731b25bf6d2592df80f5b6cc79ec1f&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true",
                    'ymap-container-sev'
                    );
			}
		//}
	// );

	// $('.ymap-container-naych').mouseenter(function () {
			if (!check_if_load_naych) { // проверяем первый ли раз загружается Яндекс.Карта, если да, то загружаем
				// Чтобы не было повторной загрузки карты, мы изменяем значение переменной
				check_if_load_naych = true;
                // Показываем индикатор загрузки до тех пор, пока карта не загрузится
				// spinner_nauch.addClass('is-active');
				// Загружаем API Яндекс.Карт
				loadScript(
					"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A39cf4be968d314a85f5afd70fdfaa5b5ca731b25bf6d2592df80f5b6cc79ec1f&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true",
                    'ymap-container-naych'
                    );
			}
	// 	}
	// );
}

$(function () {
	
	//Запускаем основную функцию
	ymap();
});