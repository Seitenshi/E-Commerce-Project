// progress bars -> pinaka taas
let currentStep = 1;

function getStepFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    return parseInt(urlParams.get('step')) || 1;
}

function updateURL(step) {
    const url = new URL(window.location.href);
    url.searchParams.set('step', step);
    window.history.pushState({}, '', url);
}

function updateProgressBar() {
    currentStep = getStepFromURL();
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
        updateURL(currentStep);
        updateProgressBar();
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        updateURL(currentStep);
        updateProgressBar();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    updateProgressBar();
});


// Enable the "Continue to payment" button only when the checkbox is checked
function nextStep() {
    const acknowledgeCheckbox = document.getElementById('acknowledge');

    if (acknowledgeCheckbox.checked) {
        // Proceed to the next step (e.g., redirect to payment page)
        window.location.href = 'payment-page-url'; // Replace with your actual payment page URL
    } else {
        alert('Please acknowledge your responsibility by checking the box before proceeding to payment.');
    }
}

// buttons clicked -> shipping page to
function selectDeliveryMethod(method) {
    // Get the clicked option element
    const clickedOption = document.getElementById(method);
    const deliveryMethodSection = document.getElementById('delivery-method-section');
    
    // Reset highlight for all options
    const allOptions = document.querySelectorAll('.option');
    allOptions.forEach(option => option.classList.remove('selected'));

    // Highlight the clicked option
    clickedOption.classList.add('selected');

    // Retrieve information dynamically based on the clicked option
    const deliveryInfo = {
        'click-collect': {
            label: 'Pick It Up Parcel',
            price: '<strong>₱0</strong>',
            description: `You can pick-up your parcel at our warehouse store.<br>
                          Pateros Collection Point.<br>
                          Warehouse 18, P. Herrera Street, Pateros Metro Manila.`
        },

        'parcel-delivery': {
            label: 'Parcel Delivery',
            price: '<strong>₱250-₱500</strong>',
            description: `Delivered within 2-17 days. <br>The Price May Vary Depending on your location.`
        }
    };

// dynamic na nag uupdate uwo 1 hr lang kami nagtitigan hehe
    deliveryMethodSection.innerHTML = `
        <h4>Delivery Method</h4>
        <p><span>${deliveryInfo[method].label}</span> <span>${deliveryInfo[method].price}</span></p>
        <p>${deliveryInfo[method].description}</p>
    `;
}

// last Payment methods ffrfrfrfr
function selectPaymentMethod(method) {
    // Deselect all payment methods
    document.querySelectorAll('.payments2-container .option').forEach(option => {
        option.classList.remove('selected');
    });
    // Select the chosen payment method
    document.getElementById(method).classList.add('selected');

    // Show or hide the credit card form based on the selected method
    if (method === 'credit-card') {
        document.getElementById('credit-card-form').style.display = 'block';
    } else {
        document.getElementById('credit-card-form').style.display = 'none';
    }
}


// remove black input in forms






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
