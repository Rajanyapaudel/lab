const textArea = document.getElementById('text-area');
const resultsDiv = document.getElementById('results');

let startTime, endTime;

textArea.addEventListener('input', startTimer);

function startTimer() {
  if (!startTime) {
    startTime = new Date();
  }
}

textArea.addEventListener('input', function() {
  if (textArea.value.length === 0) {
    startTime = null;
    endTime = null;
    resultsDiv.textContent = '';
  }
});

textArea.addEventListener('input', endTimer);

function endTimer() {
  if (textArea.value.length === 500) {
    endTime = new Date();
    const timeTaken = (endTime - startTime) / 1000; // in seconds
    const typingSpeed = (500 / timeTaken) * 60; // in words per minute
    resultsDiv.textContent = `Your typing speed: ${typingSpeed.toFixed(2)} WPM`;
    startTime = null;
  }
}
