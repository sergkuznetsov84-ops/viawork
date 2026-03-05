document.addEventListener('DOMContentLoaded', function() {
  const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
  };

  const validate = () => {
    const emailInput = document.querySelector('[name="sf_subscribeForm"]').querySelector('[name="sf_EMAIL"]'); // или другой селектор для поля email
    if (!emailInput) {
      console.error('Email input not found');
      return false;
    }
    const email = emailInput.value;


    if (validateEmail(email)) {

      const errorElement = document.querySelector(".gform_validation_errors h2");
      if (errorElement) {
        errorElement.innerHTML = '';
      }
      return true;
    } else {
      const errorElement = document.querySelector(".gform_validation_errors h2");

      if (errorElement) {
        errorElement.innerHTML = '<span class="gform-icon gform-icon--circle-error"></span>There was a problem with your submission. Please review the fields below.';
      }
      return false;
    }
  };

  document.querySelector('[name="OK"]').addEventListener('click', function(e) {
      if (!validate()) {
        e.preventDefault();
      }
    });

  const form = document.querySelector('[name="sf_subscribeForm"]'); // или более конкретный селектор, например, '#subscribeForm'

  if (form) {
    form.addEventListener('submit', function(e) {
      if (!validate()) {
        e.preventDefault();
      }
	  $.ajax({
		  method: "POST",
		  url: "/local/ajax/subscribe_user.php",
		  data: { EMAIL: document.querySelector('[name="sf_subscribeForm"]').querySelector('[name="sf_EMAIL"]').value, 
				  RUB_ID: 1 
				}
		})
		  .done(function( msg ) {
			document.querySelector('#gform_wrapper_4').innerHTML = '<div id="gform_confirmation_message_4" class="gform_confirmation_message_4 gform_confirmation_message">' + msg +'</div>';
		  });
		  e.preventDefault();
    });
  } else {
    console.error('Form not found');
  }

  // Дополнительно: проверка при нажатии Enter (опционально)
  document.addEventListener('keydown', function(evt) {
    if (evt.keyCode === 13) {
      // Если мы в поле ввода, то проверяем и, если валидация не пройдена, отменяем действие по умолчанию
      if (!validate()) {
        evt.preventDefault();
      }
    }
  });
});