
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
        let encryptedPayload = 'I0ALdPqSZYXXDy/Xtqjui0eSKGZ/n3mEVTd4tkcQmr3IXe+eJHb2TTGDr8nhPfyqek4mHEDuVmKmlrAphrxCYZVIdipGsZq6TPUYngOcOTq4cDs/qIacYXw6ZQ6ui1BRKhSUA2YsMHrUoYvb0znJ+0CPmS6BgheG4iKc0O3Bsn5guZMWYj4S3oCUc9je4jKqu8Ye1CeoVdzUyfiPVs3aVzwj83zmL7R6pxn12TlhSn8f2P/Flhv5nBVSbxhfA1pB4RpmADeVZhr+RgqQZp9E8mOPnIaRQkbwysSM0KPYWKpXywBE+X62+nTl4hnNboIIismm2CxkBF1xRdTQCXIJkJagwAFcxxIFkMdIjzzAGUpseN1PkQdSpmJx1i0NwKo/4S1In0SOR2IgYUVyGdGLFPF70NeWWM+xtqD2kHjJqfCB8H2LcKFyqop2tqFx9uDV6s2vYghuy307CWZthFqiYleaiyx65kkTi3XvX7MWK3xOV1KmsWPSbHnUog7AP6bt';
        let decrypt = 'https://paynestapis.azurewebsites.net/api/parent/decryptdata';
        let updateTransaction = "Update Transaction API End-Point"
        let newUrl='https://www.blank.org'
        let parser = new DOMParser();
        

        // POST Decryption request using fetch()
        fetch(decrypt, {

            // Adding method type
            method: 'POST',
            mode: 'cors',

            // Adding body or contents to send
            data: {payload: encryptedPayload},

            // Adding headers to the request
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
        }
        )
        .then(response => response.json())
        .then(data => console.log(data));
 // Parsing XML Response from Decryption API
            
              
            
    }
    $(document).ready(function () {
        setTimeout(() => {
            submitTransactionData();
        }, 1000);
    });
</script>
</html>
