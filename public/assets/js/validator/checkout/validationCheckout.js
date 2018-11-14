$(document).ready(function () {
    $.validator.addMethod("customphone", function(customphone, element) {
        customphone = customphone.replace(/\s+/g, "");
        return customphone.length > 9 && customphone.length <= 10;
    });
    $.validator.addMethod("customzip", function(customzip, element) {
        customzip = customzip.replace(/\s+/g, "");
        return customzip.length > 4 && customzip.length <= 5;
    });
    $('#payment-form').validate({ // initialize the plugin
        ignore: false,
        showErrors: function() {
            $(".agree").css('color', 'red');
            this.defaultShowErrors();
        },
        rules: {
            fname: {
                required: true,
                minlength: 3,
                maxlength: 15
            },
            lname: {
                required: true,
                minlength: 5,
                maxlength: 20
            },
            address: {
                required: true,
                minlength: 5,
                maxlength: 45
            },
            hnumber: {
                digits: true,
                range: [1, 999]
            },
            locality: {
                required: true,
                minlength: 5,
                maxlength: 30
            },
            email: {
                required: true,
                email: true
            },
            city: {
                required: true,
                minlength: 5,
                maxlength: 20
            },
            phone: {
                required: true,
                customphone: true
            },
            country: {
                required: true
            },
            zip_code: {
                required: true,
                customzip: true
            },
            delivery: {
                required: true
            },
            card: {
                required: true
            },
            fname_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
                minlength: 3,
                maxlength: 15
            },
            lname_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
                minlength: 5,
                maxlength: 20
            },
            address_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
                minlength: 5,
                maxlength: 45
            },
            hnumber_sec: {
                digits: {
                    depends: function(element) {
                            return $("#dif_shipping:checked")
                        }
                    },
                range: [1, 999]
            },
            locality_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
                minlength: 5,
                maxlength: 20
            },
            email_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
                email: true
            },
            city_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
                minlength: 5,
                maxlength: 20
            },
            phone_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
                customphone: true
            },
            country_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
            },
            zipcode_sec: {
                required: {
                    depends: function(element) {
                        return $("#dif_shipping:checked")
                    }
                },
                customzip: true
            },
            agree: "required"
        },
        onfocusout: function(e) {
            this.element(e);
        },
        onkeyup: false,
        messages: {
            fname: {
                required: "First Name Required!",
                minlength: "Minimum Length at least 3 letter!",
                maxlength: "Maximum Length 15 letter!"
            },
            lname: {
                required: "Last Name Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 20 letter!"
            },
            address: {
                required: "Home Address <br>Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 45 letter!"
            },
            hnumber: "Min:1 Max:999!",
            locality: {
                required: "Locality Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 20 letter!"
            },
            email: {
                required: "E-mail Required!",
                email: "Format: name@domain.com!"
            },
            city: "City Required!",
            phone: {
                required: "Phone Required!",
                customphone: "Format: 2106787921!"
            },
            city: {
                required: "City Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 20 letter!"
            },
            country: "Country Required!",
            zip_code: {
                required: "Postal Code Required!",
                customzip: "Format: 25100!"
            },
            fname_sec: {
                required: "First Name Required!",
                minlength: "Minimum Length 3 letter!",
                maxlength: "Maximum Length 15 letter!"
            },
            lname_sec: {
                required: "Last Name Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 20 letter!"
            },
            address_sec: {
                required: "Home Address <br>Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 45 letter!"
            },
            hnumber_sec: "Min:1 Max:999!",
            locality_sec: {
                required: "Locality Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 20 letter!"
            },
            email_sec: {
                required: "E-mail Required!",
                email: "Format: name@domain.com!"
            },
            city_sec: {
                required: "City Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 20 letter!"
            },
            phone_sec: {
                required: "Phone Required!",
                customphone: "Format: 2106787921!"
            },
            city_sec: "City Required!",
            country_sec: "Country Required!",
            zipcode_sec: {
                required: "Postal Code Required!",
                customzip: "Format: 25100!"
            },
            delivery: "Please select delivery method!",
            card: "Please select payment method!"
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "delivery") {
                error.insertAfter(".errorDelivery");
            } else if (element.attr("name") == "card") {
                error.insertAfter(".errorCard");
            }else {
                error.insertAfter(element);
            }
        },
        invalidHandler: function(e,validator) {
            for (var i=0;i<validator.errorList.length;i++){
                $(validator.errorList[i].element).parents('.panel-collapse.collapse').collapse('show');
            }
        }
    });
});
