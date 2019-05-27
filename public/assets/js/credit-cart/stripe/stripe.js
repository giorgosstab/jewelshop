let stripeClass=null;

$(document).ready(function () {
    // Create a Stripe client.
    var self = this;
    stripeClass=new StripeClass();
});

class StripeClass {
    constructor(props) {
        this.submitted=false;
        this.token = null;
        this.stripe = Stripe('pk_test_AmF3jzei7BUbdYiGC3x2TKKY');

        // Create an instance of Elements.
        this.elements = this.stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        this.style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", "Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        this.card = this.elements.create('card', {
            style: this.style,
            hidePostalCode: true
        });

        // Add an instance of the card Element into the `card-element` <div>.
        this.card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        this.card.addEventListener('change', function (event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        this.form = document.getElementById('payment-form');
        this.onSubmit();
    }

    onSubmit() {
        let self = this;
        this.form.addEventListener('submit', function (event) {
            event.preventDefault();
            if (self.submitted) {
                return;
            }
            self.submitted=true;

            var options = {
                name: document.getElementById('holder-name').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('locality').value,
                address_zip: document.getElementById('zip_code').value
            };

            self.stripe.createToken(self.card, options).then(function (result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                    $('#complete-order').prop('disabled', false);
                } else {
                    // Send the token to your server.
                    self.token = result.token;
                    self.stripeTokenHandler(result.token);
                }
            });
        });
    }

    stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        console.log("gonan show token",token,this.token);
        form.appendChild(hiddenInput);

        // vulid and submit the form
        validateAndSubmit();
    }

    handleFormSubmit() {
        let self = this;
        if (self.token !== null) {
            self.stripeTokenHandler(self.token)
        }
    }
}

