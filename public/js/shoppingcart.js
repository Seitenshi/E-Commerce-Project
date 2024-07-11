// BLER ETO ANG JS MO!
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.order-checkbox');
    const totalSpan = document.getElementById('total');
    const checkoutForm = document.getElementById('checkout-form');

    function calculateTotal() {
        let total = 0;
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                const price = parseFloat(checkbox.getAttribute('data-price'));
                const quantity = parseInt(checkbox.getAttribute('data-quantity'));
                total += price * quantity;
            }
        });
        totalSpan.textContent = total.toFixed(2);
    }

    function updateHiddenInputs() {
        // Clear previous hidden inputs
        document.querySelectorAll('.order-input').forEach(function(input) {
            input.remove();
        });

        // Add new hidden inputs for checked checkboxes
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'order_ids[]';
                hiddenInput.value = checkbox.value;
                hiddenInput.classList.add('order-input');
                checkoutForm.appendChild(hiddenInput);
            }
        });
    }

    function handleCheckboxChange() {
        calculateTotal();
        updateHiddenInputs();
    }

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', handleCheckboxChange);
    });

    handleCheckboxChange();
});