<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSource Authentication</title>
</head>

<body>
    <iframe name="step-up-iframe" width="500" height="600" frameBorder="1"></iframe>
    <div>
        <form id="step-up-form" target="step-up-iframe" method="post" action="{{ $data['cardinalStepUpURL'] }}">
            <input type="hidden" name="JWT" value="{{ $data['jwt'] }}" />
            <input type="hidden" name="MD" value="{{ $data['md'] }}" />
        </form>
    </div>
</body>
<script>
    window.onload = function() {
        var stepUpForm = document.querySelector('#step-up-form');
        if (stepUpForm) stepUpForm.submit();
    }
</script>

</html>
