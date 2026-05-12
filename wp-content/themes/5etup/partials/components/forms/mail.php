<form action="/formulier-verzonden`" id="form-cta" class="cta" method="POST">
    <!-- <h3>Gegevens achterlaten</h3> -->
    <input type="text" name="subject" id="subject">
    <label for="name">Naam:
        <input type="text" name="name" id="name" placeholder="Bijv. Suraj Mohunlol">
    </label>

    <label for="email">Email:
        <input type="email" name="email" id="email" placeholder="Bijv. info@5uraj.nl">
    </label>

    <label for="name">Telefoonnummer:
        <input type="tel" name="phone" id="phone" placeholder="Bijv. 06-27826672">
    </label>

    <label for="name">Opmerking (optioneel):
        <textarea name="description" placeholder="Wanneer wil je benaderd worden?"></textarea>
    </label>

    <label for="submit" class="error" id="error">
        <button type="submit" id="submit" name="submit" class="btn primary">Verstuur</button>
    </label>
</form>


<?php 
    if(isset($_POST['submit']) && empty($_POST['subject'])) {
        echo "Submit";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $description = $_POST['description'];

        $to = "info@5uraj.nl";
        $subject = "CTA form";
        $headers = "From: info@5uraj.nl" . "\r\n";

        $message = "Naam: $name</br>";
        $message .= "Email: $email</br>";
        $message .= "Tel: $phone</br>";
        $message .= "Opmerkingen: $description</br>";

        // echo "$message";

        mail($to,$subject,$message,$headers);
        echo "send";
    }
?>