const container = document.getElementById('container');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    registerBtn.addEventListener('click', () => {
        container.classList.add("active");
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove("active");
    });

    function toggleForm(formType) {
      var loginForm = document.getElementById("loginForm");
      var registrationForm = document.getElementById("registrationForm");

      if (formType === 'login') {
        loginForm.style.display = 'block';
        registrationForm.style.display = 'none';
      } else if (formType === 'registration') {
        loginForm.style.display = 'none';
        registrationForm.style.display = 'block';
      }
    }

    

