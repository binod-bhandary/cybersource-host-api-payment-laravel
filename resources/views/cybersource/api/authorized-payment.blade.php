<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSource Authentication</title>
</head>

<body>
    <div>
        <form id="authorized-form" method="post" action="/webhook/confirm-api-pay-redirect">
            <input type="hidden" name="TransactionId" value="{{ $data['transacationID'] }}" />
        </form>
    </div>
</body>
<script>
    window.onload = function() {
        var stepUpForm = document.querySelector('#authorized-form');
        if (stepUpForm) stepUpForm.submit();
    }
</script>

</html>
