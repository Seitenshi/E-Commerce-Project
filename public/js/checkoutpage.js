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

function loadStepContent(step) {
    const sections = document.querySelectorAll('.main-section');
    sections.forEach(section => {
        section.classList.remove('active');
    });

    document.getElementById(`section${step}`).classList.add('active');
}

function nextStep() {
    if (currentStep < 3) {
        currentStep++;
        updateURL(currentStep);
        updateProgressBar();
        loadStepContent(currentStep);
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        updateURL(currentStep);
        updateProgressBar();
        loadStepContent(currentStep);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    updateProgressBar();
    loadStepContent(currentStep);
});

function selectDeliveryMethod(method) {
    const clickedOption = document.getElementById(method);
    const deliveryMethodSection = document.getElementById('delivery-method-section');
    
    const allOptions = document.querySelectorAll('.option');
    allOptions.forEach(option => option.classList.remove('selected'));

    clickedOption.classList.add('selected');

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

    deliveryMethodSection.innerHTML = `
        <h4>Delivery Method</h4>
        <p><span>${deliveryInfo[method].label}</span> <span>${deliveryInfo[method].price}</span></p>
        <p>${deliveryInfo[method].description}</p>
    `;
}

function selectPaymentMethod(method) {
    document.querySelectorAll('.payments2-container .option').forEach(option => {
        option.classList.remove('selected');
    });

    document.getElementById(method).classList.add('selected');

    if (method === 'credit-card') {
        document.getElementById('credit-card-form').style.display = 'block';
    } else {
        document.getElementById('credit-card-form').style.display = 'none';
    }
}
