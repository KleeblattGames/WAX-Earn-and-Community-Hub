const secondParagraph = document.getElementById('secondParagraph');
const learnMoreLink = document.getElementById('learnMoreLink');

let isSecondParagraphVisible = false;

learnMoreLink.addEventListener('click', () => {
    isSecondParagraphVisible = !isSecondParagraphVisible;

    if (isSecondParagraphVisible) {
        secondParagraph.style.display = 'block';
        learnMoreLink.textContent = 'Close';
    } else {
        secondParagraph.style.display = 'none';
        learnMoreLink.textContent = 'Learn more';
    }
});