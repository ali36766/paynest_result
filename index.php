
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=RobotoDraft:500);

        *
        {
            font-family: 'RobotoDraft', sans-serif;
            font-size: 15px;
        }

        body{
            background: #006E7D;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .material_block
        {
            display: flex;
            justify-content: center;
            align-content: center;
            flex-direction: column;
        }

        .spinner
        {
            -webkit-animation: rotation 1.35s linear infinite;
            animation: rotation 1.35s linear infinite;
        }

        @-webkit-keyframes rotation
        {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
        }

        @keyframes rotation
        {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
        }

        .circle
        {
            stroke-dasharray: 180;
            stroke-dashoffset: 0;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            -webkit-animation: turn 1.35s ease-in-out infinite;
            animation: turn 1.35s ease-in-out infinite;
        }

        @-webkit-keyframes turn
        {
            0% {
                stroke-dashoffset: 180;
            }

            50% {
                stroke-dashoffset: 45;
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg);
            }

            100% {
                stroke-dashoffset: 180;
                -webkit-transform: rotate(450deg);
                transform: rotate(450deg);
            }
        }

        @keyframes turn
        {
            0% {
                stroke-dashoffset: 180;
            }

            50% {
                stroke-dashoffset: 45;
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg);
            }

            100% {
                stroke-dashoffset: 180;
                -webkit-transform: rotate(450deg);
                transform: rotate(450deg);
            }
        }
        svg:nth-child(1){stroke:#fff;}
    </style>
</head>
<div class="material_block">
    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
    <h4 style="color: white">Please Wait</h4>
</div>
<script type="text/javascript">
    async function submitTransactionData() {
        let e = "<?php echo htmlspecialchars($_POST['c'])?>";
        // let e = 'I0ALdPqSZYXXDy/Xtqjui0eSKGZ/n3mEVTd4tkcQmr3IXe+eJHb2TTGDr8nhPfyqek4mHEDuVmKmlrAphrxCYZVIdipGsZq6TPUYngOcOTq4cDs/qIacYXw6ZQ6ui1BRKhSUA2YsMHrUoYvb0znJ+0CPmS6BgheG4iKc0O3Bsn5guZMWYj4S3oCUc9je4jKqu8Ye1CeoVdzUyfiPVs3aVzwj83zmL7R6pxn12TlhSn8f2P/Flhv5nBVSbxhfA1pB4RpmADeVZhr+RgqQZp9E8mOPnIaRQkbwysSM0KPYWKpXywBE+X62+nTl4hnNboIIismm2CxkBF1xRdTQCXIJkJagwAFcxxIFkMdIjzzAGUpseN1PkQdSpmJx1i0NwKo/4S1In0SOR2IgYUVyGdGLFPF70NeWWM+xtqD2kHjJqfCB8H2LcKFyqop2tqFx9uDV6s2vYghuy307CWZthFqiYleaiyx65kkTi3XvX7MWK3xOV1KmsWPSbHnUog7AP6bt';
        let decrypt = 'https://paynestapis.azurewebsites.net/api/parent/decryptdata';
        let data = {'payload': e};
        let d = '<Response><Header><ResponseCode>00</ResponseCode><ResponseMsg>success</ResponseMsg></Header><Body><PaymentInformation><CBDReferenceNo>245367</CBDReferenceNo><CCReferenceNo>6482847315686734104005</CCReferenceNo><AuthCode>831000</AuthCode><OrderID>12786</OrderID><AuthorizationDateTime>3/26/2022 12:52:12 PM</AuthorizationDateTime><CardType>002</CardType><MaskedCardNumber>xxxxxxxxxxxx0007</MaskedCardNumber><TokenizedValue/></PaymentInformation></Body></Response>';
        let updateTransaction = "https://paynestapis.azurewebsites.net/api/parent/updateTransaction"
        let success='https://www.success.org'
        let parser = new DOMParser();
        let proceed = false;
        

        // POST Decryption request using fetch()
        fetch(decrypt, {

            // Adding method type
            method: 'POST',
            mode: 'cors',
            // Adding body or contents to send
            body: JSON.stringify({'payload': e}),
            // Adding headers to the request
            headers: {
                'Content-Type': 'application/json',
            },
        }
        )
        .then(response => response.json())
        .then(data => {
            let xmlDoc = parser.parseFromString(d,"text/xml");
            let responseCode = xmlDoc.getElementsByTagName("ResponseCode")[0].childNodes[0].nodeValue;
            if(responseCode == '00'){
            let orderId = xmlDoc.getElementsByTagName("OrderID")[0].childNodes[0].nodeValue;
            let refNo = xmlDoc.getElementsByTagName("CBDReferenceNo")[0].childNodes[0].nodeValue;
            fetch(updateTransaction,{
                method: 'POST',
                mode: 'cors',
                param: JSON.stringify({'transactionId': orderId}),
                body:JSON.stringify({'stringFromBank': e, 'bankResponse': data.decrypted, 'refNo': refNo })
                headers: {
                'Content-Type': 'application/json',
            },
            })
            .then(response => window.location.assign(success))
            }

        }); 
    }
    $(document).ready(function () {
        setTimeout(() => {
            submitTransactionData();
        }, 1000);
    });
</script>
</html>
