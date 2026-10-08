const toast = document.getElementById('toast');

function showToast(message) {
  if (!toast) return;
  toast.textContent = message;
  toast.classList.add('show');
  clearTimeout(window.__toastTimer);
  window.__toastTimer = setTimeout(() => toast.classList.remove('show'), 2800);
}

document.querySelectorAll('.password-toggle').forEach((button) => {
  button.addEventListener('click', () => {
    const input = button.parentElement.querySelector('input');
    if (!input) return;
    const showing = input.type === 'text';
    input.type = showing ? 'password' : 'text';
    button.textContent = showing ? 'Show' : 'Hide';
  });
});

document.querySelectorAll('[data-toast]').forEach((element) => {
  element.addEventListener('click', (event) => {
    if (element.tagName === 'A' && element.getAttribute('href') === '#') event.preventDefault();
    showToast(element.dataset.toast);
  });
});

document.querySelectorAll('.demo-form').forEach((form) => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const newPassword = form.querySelector('#new_password');
    const confirmPassword = form.querySelector('#confirm_password');
    if (newPassword && confirmPassword && newPassword.value !== confirmPassword.value) {
      showToast('Passwords do not match.');
      confirmPassword.focus();
      return;
    }

    const submitButton = form.querySelector('button[type="submit"]');
    if (submitButton) {
      submitButton.disabled = true;
      submitButton.dataset.originalText = submitButton.innerHTML;
      submitButton.innerHTML = 'Opening demo…';
    }

    setTimeout(() => {
      window.location.href = form.dataset.redirect || 'dashboard.php';
    }, 550);
  });
});

const menuToggle = document.getElementById('menuToggle');
const sidebar = document.getElementById('sidebar');
if (menuToggle && sidebar) {
  menuToggle.addEventListener('click', () => sidebar.classList.toggle('open'));

  document.addEventListener('click', (event) => {
    const mobile = window.matchMedia('(max-width: 960px)').matches;
    if (mobile && sidebar.classList.contains('open') && !sidebar.contains(event.target) && event.target !== menuToggle) {
      sidebar.classList.remove('open');
    }
  });
}

document.querySelectorAll('.nav-item[href^="#"]').forEach((link) => {
  link.addEventListener('click', () => {
    document.querySelectorAll('.nav-item').forEach((item) => item.classList.remove('active'));
    link.classList.add('active');
    if (sidebar) sidebar.classList.remove('open');
  });
});
