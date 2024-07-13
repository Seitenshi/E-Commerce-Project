document.addEventListener('DOMContentLoaded', function () {
    const steps = document.querySelectorAll('.progress-bar .step');
    
    steps.forEach((step, index) => {
        step.addEventListener('click', () => {
            steps.forEach(s => s.classList.remove('active'));
            step.classList.add('active');
            // Add any additional functionality you need here, like showing different content based on step
        });
    });
});