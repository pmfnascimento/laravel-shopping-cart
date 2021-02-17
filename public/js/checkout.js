var stripe = Stripe(
    "pk_test_51ILrcTEqykZKmRVq5JGC29s7pvzQ2ilXvrS7EyX9c3SlWyKUZ3lNCe8SBKRVo9SjIPBj8s8Br58uyq5nzJ9TZy6z00E1SugWk7"
);

$form.submit(function(event) {
    $("#chage-error").addClass("hidden");
    $form.find("button").prop("disabled", true);

    stripe.card.createToken(
        {
            number: $("#card-number").val(),
            exp_month: $("#card-expiration-year").val(),
            exp_year: $("#card-expiration-year").val(),
            cvc_check: "pass",
            name: $("#name").val()
        },
        stripeResponseHandler
    );
    // Prevent the form from being submitted:
    return false;
});

function stripeResponseHandler(status, response) {
    // Grab the form:

    if (response.error) {
        // Problem!

        // Show the errors on the form:
        $form.find(".charge-errors").removeClass("hidden");
        $form.find(".charge-errors").text(response.error.message);
        $form.find("button").prop("disabled", false); // Re-enable submission
    } else {
        // Token was created!

        // Get the token ID:
        var token = response.id;

        // Insert the token ID into the form so it gets submitted to the server:
        $form.append($('<input type="hidden" name="stripeToken">').val(token));

        // Submit the form:
        $form.get(0).submit();

}
