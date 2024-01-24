// Service Worker Register 
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/public/api/js/service-worker.js')
      .then(registration => {
        console.log('Service Worker is registered', registration);
      })
      .catch(err => {
        console.error('Registration failed:', err);
      });
  });
}