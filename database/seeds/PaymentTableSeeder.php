<?php

use App\Payment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Payment::insert([
            [
                'name' => 'Stripe',
                'slug' => 'stripe',
                'image' => 'payments/dummy/stripe.png',
                'extra_code' => '<div class="form-group">
                                    <input id="holder-name" name="holder_name" type="text" placeholder="Holder Name" >
                                </div>
                                <div class="form-group">
                                    <label for="card-element">
                                        Credit or debit card
                                    </label>
                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>',
                'extra_css_top' => '<style type="text/css">
                                        /**
                                         * The CSS shown here will not be introduced in the Quickstart guide, but shows
                                         * how you can use CSS to style your Element\'s container.
                                         */
                                        .StripeElement {
                                            border-color: currentcolor currentcolor #cdcdcd;
                                             border-image: none;
                                             border-style: none none solid;
                                             border-width: medium medium 1px;
                                             display: block;
                                             font-size: 13px;
                                        letter-spacing: 1px;
                                            padding: 10px 10px 10px 5px;
                                        }
                                        .StripeElement--focus {
                                            box-shadow: 0 1px 3px 0 #cfd7df;
                                        }
                                        .StripeElement--invalid {
                                            border-color: #fa755a;
                                        }
                                        .StripeElement--webkit-autofill {
                                            background-color: #fefde5 !important;
                                        }
                                        #card-errors {
                                            color: #fa755a;
                                            font-weight: bold;
                                        }
                                    </style>
                                    <script type="application/javascript" src="https://js.stripe.com/v3"></script>',
                'extra_js_bottom' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Paypal',
                'slug' => 'paypal',
                'image' => 'payments/dummy/paypal.png',
                'extra_code' => '<div class="form-group">
                                    <input type="text" placeholder="Holder Name">
                                </div>
                                <div class="form-group"></div>',
                'extra_css_top' => null,
                'extra_js_bottom' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Cash On Delivery',
                'slug' => 'cash-on-delivery',
                'image' => 'payments/dummy/cash.png',
                'extra_code' => null,
                'extra_css_top' => null,
                'extra_js_bottom' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
