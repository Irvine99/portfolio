<div class="flex">
    <div class="flex w-full items-center flex-col">
        <div class="text-[#10B52E] text-[20px] font-bold">Interessé ?</div>
        <div class="text-[60px] leading-14 text-white font-bold">Parlons de <br> votre projet</div>
    </div>
</div>
<!-- formulaire -->
<!-- Formulaire HTML -->
<div class=" flex flex-col mx-[50px]  gap-3 mt-[50px] mw-auto">
    <div class="flex flex-col">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-col">
                <div class="text-white">Prénom *</div>
                <input type="text" id="first_name" class="bg-[#313344] rounded-full w-full h-[48px] px-2 text-white placeholder-white mt-[1px] mb-[5px]" placeholder="">
            </div>
            <div class="flex-col">
                <div class="text-white">Nom *</div>
                <input type="text" id="last_name" class="bg-[#313344] rounded-full w-full h-[48px] px-2 mt-[1px] mb-[5px] text-white placeholder-white" placeholder="">
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="flex gap-4 md:flex-row flex-col">
            <div class="flex-col ">
                <div class="text-white">Email *</div>
                <input type="email" id="email" class="bg-[#313344] rounded-full w-full h-[48px] px-2 mt-[1px] mb-[5px] text-white placeholder-white" placeholder="">
            </div>
            <div class="flex-col">
                <div class="text-white">Téléphone *</div>
                <input type="tel" id="phone" class="bg-[#313344] rounded-full w-full h-[48px] px-2 mt-[1px] mb-[5px] text-white placeholder-white" placeholder="">
            </div>
        </div>
    </div>
    <div>
        <div class="text-white font-bold">Votre message</div>
        <div class="flex w-full">
            <textarea id="message" class="bg-[#313344] rounded-[20px] pl-4 h-[152px] w-full md:w-[512px] md:h-[152px] text-white" placeholder=""></textarea>
        </div>
    </div>
    <div class="flex justify-center mt-[50px] w-full">
        <button onclick="sendEmail()" class="bg-[#10B52E] rounded-full w-[110px] h-[52px] font-bold">Envoyer</button>
    </div>
</div>

<!-- Script JavaScript EmailJS -->
<script type="text/javascript">
    (function() {
        emailjs.init("service_fp5ckxe"); // Remplace "YOUR_USER_ID" par ton ID utilisateur EmailJS
    })();

    function sendEmail() {
        const firstName = document.getElementById('first_name').value;
        const lastName = document.getElementById('last_name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const message = document.getElementById('message').value;

        const templateParams = {
            from_name: firstName + " " + lastName,
            from_email: email,
            phone: phone,
            message: message
        };

        emailjs.send('service_fp5ckxe', 'template_xsdf4bj', templateParams)
            .then(function(response) {
                console.log('Success!', response.status, response.text);
                alert('Message envoyé avec succès!');
            }, function(error) {
                console.log('Erreur...', error);
                alert('Une erreur est survenue. Veuillez réessayer.');
            });
    }
</script>