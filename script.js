const introText = document.getElementById('intro-text');
const words = ['Introducing Vincent Marsh', 'A skilled Software Engineer'];

let currentWordIndex = 0;

const typeAnimationDelay = 100; // the delay between typing each character
const eraseAnimationDelay = 50; // the delay between erasing each character
const pauseBetweenAnimations = 1500; // the delay between erasing the old text and typing the new text

function animateText(text, delay) {
  return new Promise((resolve) => {
    let index = 0;
    const intervalId = setInterval(() => {
      introText.textContent = text.slice(0, index) + '|';
      index++;
      if (index > text.length) {
        clearInterval(intervalId);
        setTimeout(() => resolve(), delay);
      }
    }, delay);
  });
}

async function animateIntroText() {
  while (true) {
    await animateText(words[currentWordIndex], typeAnimationDelay);
    introText.textContent = introText.textContent.slice(0, -1);
    await animateText(introText.textContent, eraseAnimationDelay);
    currentWordIndex = (currentWordIndex + 1) % words.length;
    await new Promise((resolve) => setTimeout(resolve, pauseBetweenAnimations));
  }
}

animateIntroText();
