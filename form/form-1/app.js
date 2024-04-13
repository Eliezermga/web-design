document.addEventListener('DOMContentLoaded', function() {
  const greetingDiv = document.getElementById('greeting');
  const now = new Date();
  const hour = now.getHours();

  let greetingMessage = '';

  if (hour < 12) {
      greetingMessage = 'Bonjour !';
  } else if (hour < 18) {
      greetingMessage = 'Bon après midi!';
  } else {
      greetingMessage = 'Bonsoir!';
  }

  greetingDiv.textContent = greetingMessage;
});
