document.querySelector('form').addEventListener('submit', function(form) {
	var requireds = document.getElementsByClassName('required');
	var messages = document.getElementsByClassName('b-forms-form__messages')[0];
	messages.innerHTML = '';

	for (const required of requireds) {
		switch (required.tagName.toLowerCase()) {
			case 'input':
				switch(required.type) {
					case 'text':
						if (required.value.trim().length <= 1) {
							messages.innerHTML += '<span class="b-forms-form__message">Поле "Ваше Имя" не заполнено!</span>';
						}
						break;
					case 'email':
						if (required.value.trim().length <= 1) {
							messages.innerHTML += '<span class="b-forms-form__message">Поле "Ваш E-mail" не заполнено!</span>';
						}
						break;
					case 'checkbox':
						if (!required.checked) {
							messages.innerHTML += '<span class="b-forms-form__message">Согласие с условиями обязательно!</span>';
						}
						break;
				}
				break;
			case 'textarea':
				if (required.value.trim().length <= 1) {
					messages.innerHTML += '<span class="b-forms-form__message">Поле "Сообщение" не заполнено!</span>';
				}
				break;
		}
	}

	if (!(messages.innerHTML.length === 0)) {
		form.preventDefault();
	}
	else {
		messages.innerHTML = '<span class="b-forms-form__message--true">Спасибо, Ваше сообщение принято!</span>';
	}
});