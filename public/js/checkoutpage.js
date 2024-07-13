

// try
let currentStep = 1;

function updateProgressBar() {
    for (let i = 1; i <= 3; i++) {
        const step = document.getElementById(`step${i}`);
        if (i < currentStep) {
            step.classList.add('completed');
            step.classList.remove('active');
        } else if (i === currentStep) {
            step.classList.add('active');
            step.classList.remove('completed');
        } else {
            step.classList.remove('active', 'completed');
        }
    }
}

function nextStep() {
    if (currentStep < 3) {
        currentStep++;
        updateProgressBar();
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        updateProgressBar();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    updateProgressBar();
});


// prompt
// document.addEventListener('DOMContentLoaded', () => {
//     const continueButton = document.getElementById('continue-button');
//     const backButton = document.getElementById('back-to-cart');

//     continueButton.addEventListener('click', () => {
//         alert('Proceeding to services...');
//     });

//     backButton.addEventListener('click', () => {
//         alert('Going back to cart...');
//     });
// });
