document.querySelector('form').addEventListener('submit', function(form) {
	var errorMessages = [];
	var requireds = document.getElementsByClassName('required');

	for (const required of requireds) {
		switch (required.tagName.toLowerCase()) {
			case 'input':
				switch(required.type) {
					case 'text':
						if (required.value.trim().length <= 1) {
							errorMessages.push('Поле "Ваше Имя" не заполнено!');
						}
						break;
					case 'email':
						if (required.value.trim().length <= 1) {
							errorMessages.push('Поле "Ваш E-mail" не заполнено!');
						}
						break;
					case 'checkbox':
						if (!required.checked) {
							errorMessages.push('Согласие с условиями обязательно!');
						}
						break;
				}
				break;
			case 'textarea':
				if (required.value.trim().length <= 1) {
					errorMessages.push('Поле "Сообщение" не заполнено!');
				}
				break;
		}
	}

	if (!(errorMessages.length === 0)) {
		form.preventDefault();

		var alertErrorMessage = '';
		for (const errorMessage of errorMessages) {
			alertErrorMessage += errorMessage + '\n';
		}
		alert(alertErrorMessage);
	}
});