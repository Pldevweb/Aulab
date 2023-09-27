// Get all quantity input fields and buttons
const quantityInputs = document.querySelectorAll('.quantity-input');
const decrementButtons = document.querySelectorAll('.decrement-quantity');
const incrementButtons = document.querySelectorAll('.increment-quantity');
const totalPriceElement = document.getElementById('total-price');
const totalQuantitySpan = document.getElementById('total-quantity');

// Function to update the total price
function updateTotalPrice() {
    let totalPrice = 0;

    quantityInputs.forEach((input) => {
        const price = parseFloat(input.getAttribute('data-price'));
        const quantity = parseInt(input.value);

        totalPrice += price * quantity;
    });

    totalPriceElement.textContent = `${totalPrice.toFixed(2)} $`;
}

// Function to update the total quantity on the client-side
function updateTotalQuantity(quantityChange) {
    const totalQuantity = parseInt(totalQuantitySpan.textContent) || 0;
    totalQuantitySpan.textContent = totalQuantity + quantityChange;
}

decrementButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const productId = button.getAttribute('data-id');
        const input = document.getElementById(`quantity${productId}`);
        let quantity = parseInt(input.value);

        if (quantity > 1) {
            quantity--;
            input.value = quantity;
            updateTotalPrice();
            updateTotalQuantity(-1); // Decrease total quantity by 1

            updateQuantityInDatabase(productId, quantity);
        }
    });
});

incrementButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const productId = button.getAttribute('data-id');
        const input = document.getElementById(`quantity${productId}`);
        let quantity = parseInt(input.value);

        quantity++;
        input.value = quantity;
        updateTotalPrice();
        updateTotalQuantity(1);

        updateQuantityInDatabase(productId, quantity);
    });
});

// Check if the close button and success alert elements exist
const closeButton = document.querySelector(".close");
const successAlert = document.querySelector("#success-alert");

// Add a click event listener to the close button if it exists
if (closeButton) {
    closeButton.addEventListener("click", function () {
        // Hide the success alert by setting its display to "none"
        if (successAlert) {
            successAlert.style.display = "none";
        }
    });
}

// Get all quantity input fields

function updateQuantityInDatabase(productId, newQuantity) {
    const csrf = document.querySelector('meta[name="csrf-token"]').content;

    // Fetch to update the quantity in the database
    fetch(`/cart/update-quantity/${productId}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf,
        },
        body: JSON.stringify({ quantity: newQuantity }),
    })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                console.error('Failed to update quantity in the database.');
            }
        })
        .catch(error => {
            console.error(error);
        });
}
