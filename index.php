
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
        // let encryptedPayload = "<?php echo htmlspecialchars($_POST['c'])?>";
        let encryptedPayload = 'bSir3LRMJASbjBJZUm03qefmaWUBW8uXu9Ql/iWrMqskdzrr39yYonVC0OhB7Aez4WgJCQI7v4H9aYuGeLFM0P7I4vygGAW9ONXUHqkIdTH2tEMt//ePJF9hpBmrMus2N66UIbxTDKjWO5tFN/O442H8/OlqpnKjmFFAiRTCxTwieuTulwEOJE4Bhps+RJ8SZG5fLCOJfvkI+HYODhhTTMvezbxbQCJO1jB8vbYn+st6cg2eK9X7YVYVA5gDPf8aItGedq53hXprCJzmG9b7L9iWj/4aQcC0kSfsezSHYO5farah/Ms7YU0vfzG3ba3Ugf0Ufi5B0HC7M0CXS5aQXAcvgZO+XCRsyzLASdhpRo9tuK4JVmJvSOxurjRY/C9ipleA2rnujfdeFtK1SlwWa5PXDQ3s6KdusDBrt97/CaOuPU5pDjasBkJcziRBUrGwd3G55jLFMJ+lvl+1mnpLG5qGZYCpWhUBogya6BLphfxQ+XoVtJxoqqLVNj/KsuRGgMtA13qA3q5axpYkPzcZBDst7pFFI1zlD0XHqlOpiYmhjWPHhdT6RSDMHH5HrDqB';
        let decrypt = 'https://paynestapis.azurewebsites.net/api/parent/decryptdata';
        let updateTransaction = "Update Transaction API End-Point"
        let newUrl='https://www.blank.org'
        let parser = new DOMParser();
        

        // POST Decryption request using fetch()
        fetch(decrypt, {

            // Adding method type
            method: 'POST',
            mode: 'cors'

            // Adding body or contents to send
            body: {c: encryptedPayload},

            // Adding headers to the request
            headers: {
                'Content-type': 'application/x-www-form-urlencoded',
            },
        })

            // Parsing XML Response from Decryption API
            .then(response =>{ console.log(response)})
              
            
    }
    $(document).ready(function () {
        setTimeout(() => {
            submitTransactionData();
        }, 1000);
    });
</script>
</html>
