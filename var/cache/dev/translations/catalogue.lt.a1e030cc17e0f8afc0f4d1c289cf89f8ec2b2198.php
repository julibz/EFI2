<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lt', array (
  'validators' => 
  array (
    'This value should be false.' => 'Reikšmė turi būti neigiama.',
    'This value should be true.' => 'Reikšmė turi būti teigiama.',
    'This value should be of type {{ type }}.' => 'Šios reikšmės tipas turi būti {{ type }}.',
    'This value should be blank.' => 'Ši reikšmė turi būti tuščia.',
    'The value you selected is not a valid choice.' => 'Neteisingas pasirinkimas.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Turite pasirinkti bent {{ limit }} variantą.|Turite pasirinkti bent {{ limit }} variantus.|Turite pasirinkti bent {{ limit }} variantų.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Turite pasirinkti ne daugiau kaip {{ limit }} variantą.|Turite pasirinkti ne daugiau kaip {{ limit }} variantus.|Turite pasirinkti ne daugiau kaip {{ limit }} variantų.',
    'One or more of the given values is invalid.' => 'Viena ar daugiau įvestų reikšmių yra netinkamos.',
    'This field was not expected.' => 'Nebuvo tikimasi Šis laukas.',
    'This field is missing.' => 'Šiame lauke yra dingęs.',
    'This value is not a valid date.' => 'Ši reikšmė nėra data.',
    'This value is not a valid datetime.' => 'Ši reikšmė nera data ir laikas.',
    'This value is not a valid email address.' => 'Ši reikšmė nėra tinkamas el. pašto adresas.',
    'The file could not be found.' => 'Byla nerasta.',
    'The file is not readable.' => 'Negalima nuskaityti bylos.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė ({{ size }} {{ suffix }}). Maksimalus dydis {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Netinkamas bylos tipas (mime type) ({{ type }}). Galimi bylų tipai {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Reikšmė turi būti {{ limit }} arba mažiau.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.|Per didelis simbolių skaičius. Turi susidaryti iš {{ limit }} arba mažiau simbolių.',
    'This value should be {{ limit }} or more.' => 'Reikšmė turi būti {{ limit }} arba daugiau.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.|Per mažas simbolių skaičius. Turi susidaryti iš {{ limit }} arba daugiau simbolių.',
    'This value should not be blank.' => 'Ši reikšmė negali būti tuščia.',
    'This value should not be null.' => 'Ši reikšmė negali būti null.',
    'This value should be null.' => 'Ši reikšmė turi būti null.',
    'This value is not valid.' => 'Netinkama reikšmė.',
    'This value is not a valid time.' => 'Ši reikšmė nėra laikas.',
    'This value is not a valid URL.' => 'Ši reikšmė nėra tinkamas interneto adresas.',
    'The two values should be equal.' => 'Abi reikšmės turi būti identiškos.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Byla yra per didelė. Maksimalus dydis yra {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Byla per didelė.',
    'The file could not be uploaded.' => 'Byla negali būti įkelta.',
    'This value should be a valid number.' => 'Ši reikšmė turi būti skaičius.',
    'This value is not a valid country.' => 'Ši reikšmė nėra tinkama šalis.',
    'This file is not a valid image.' => 'Byla nėra paveikslėlis.',
    'This is not a valid IP address.' => 'Ši reikšmė nėra tinkamas IP adresas.',
    'This value is not a valid language.' => 'Ši reikšmė nėra tinkama kalba.',
    'This value is not a valid locale.' => 'Ši reikšmė nėra tinkama lokalė.',
    'This value is already used.' => 'Ši reikšmė jau yra naudojama.',
    'The size of the image could not be detected.' => 'Nepavyko nustatyti nuotraukos dydžio.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Nuotraukos plotis per didelis ({{ width }}px). Maksimalus leidžiamas plotis yra {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Nuotraukos plotis per mažas ({{ width }}px). Minimalus leidžiamas plotis yra {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Nuotraukos aukštis per didelis ({{ height }}px). Maksimalus leidžiamas aukštis yra {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Nuotraukos aukštis per mažas ({{ height }}px). Minimalus leidžiamas aukštis yra {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ši reikšmė turi sutapti su dabartiniu naudotojo slaptažodžiu.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ši reikšmė turi turėti lygiai {{ limit }} simbolį.|Ši reikšmė turi turėti lygiai {{ limit }} simbolius.|Ši reikšmė turi turėti lygiai {{ limit }} simbolių.',
    'The file was only partially uploaded.' => 'Failas buvo tik dalinai įkeltas.',
    'No file was uploaded.' => 'Nebuvo įkelta jokių failų.',
    'No temporary folder was configured in php.ini.' => 'Nėra sukonfiguruoto jokio laikino katalogo php.ini faile.',
    'Cannot write temporary file to disk.' => 'Nepavyko išsaugoti laikino failo.',
    'A PHP extension caused the upload to fail.' => 'PHP plėtinys sutrukdė failo įkėlimą ir jis nepavyko.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.|Sąraše turi būti {{ limit }} arba daugiau įrašų.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.|Sąraše turi būti {{ limit }} arba mažiau įrašų.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Sąraše turi būti lygiai {{ limit }} įrašas.|Sąraše turi būti lygiai {{ limit }} įrašai.|Sąraše turi būti lygiai {{ limit }} įrašų.',
    'Invalid card number.' => 'Klaidingas kortelės numeris.',
    'Unsupported card type or invalid card number.' => 'Kortelės tipas nepalaikomas arba klaidingas kortelės numeris.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ši reišmė neatitinka tarptautinio banko sąskaitos numerio formato (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ši reikšmė neatitinka ISBN-10 formato.',
    'This value is not a valid ISBN-13.' => 'Ši reikšmė neatitinka ISBN-13 formato.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ši reikšmė neatitinka nei ISBN-10, nei ISBN-13 formato.',
    'This value is not a valid ISSN.' => 'Ši reišmė neatitinka ISSN formato.',
    'This value is not a valid currency.' => 'Netinkamas valiutos formatas.',
    'This value should be equal to {{ compared_value }}.' => 'Ši reikšmė turi būti lygi {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti didesnė už arba lygi {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė turi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ši reikšmė turi būti mažesnė už arba lygi {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ši reikšmė neturi būti lygi {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ši reikšmė neturi būti identiška {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Nuotraukos santykis yra per didelis ({{ ratio }}). Didžiausias leistinas santykis yra {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Nuotraukos santykis yra per mažas ({{ ratio }}). Mažiausias leistinas santykis yra {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Nuotrauka yra kvadratinė ({{ width }}x{{ height }}px). Kvadratinės nuotraukos nėra leistinos.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Nuotrauka orientuota į plotį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į plotį nėra leistinos.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Nuotrauka orientuota į aukštį ({{ width }}x{{ height }}px). Nuotraukos orientuotos į aukštį nėra leistinos.',
    'An empty file is not allowed.' => 'Failas negali būti tuščias.',
    'This form should not contain extra fields.' => 'Forma negali turėti papildomų laukų.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Įkelta byla yra per didelė. bandykite įkelti mažesnę.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF kodas nepriimtinas. Bandykite siųsti formos užklausą dar kartą.',
    'fos_user.username.already_used' => 'Naudotojo vardas jau užimtas.',
    'fos_user.username.blank' => 'Prašome įvesti naudotojo vardą.',
    'fos_user.username.short' => 'Naudotojo vardas per trumpas.',
    'fos_user.username.long' => 'Naudotojo vardas per ilgas.',
    'fos_user.email.already_used' => 'El. paštas jau užimtas.',
    'fos_user.email.blank' => 'Prašome įvesti el. paštą.',
    'fos_user.email.short' => 'El. paštas pert rumpas.',
    'fos_user.email.long' => 'El. paštas per ilgas.',
    'fos_user.email.invalid' => 'El. paštas neteisingas.',
    'fos_user.password.blank' => 'Prašome įvesti slaptažodį.',
    'fos_user.password.short' => 'Slaptažodis per trumpas.',
    'fos_user.password.mismatch' => 'Įvesti skirtingi slaptažodžiai.',
    'fos_user.new_password.blank' => 'Prašome įvesti naują slaptažodį.',
    'fos_user.new_password.short' => 'Naujas slaptažodis per trumpas.',
    'fos_user.current_password.invalid' => 'Neteisingai įvestas slaptažodis.',
    'fos_user.group.blank' => 'Prašome įvesti pavadinimą.',
    'fos_user.group.short' => 'Pavadinimas per trumpas.',
    'fos_user.group.long' => 'Pavadinimas per trumpas.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Įvyko autentifikacijos klaida.',
    'Authentication credentials could not be found.' => 'Nepavyko rasti autentifikacijos duomneų.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijos užklausos nepavyko įvykdyti dėl sistemos klaidų.',
    'Invalid credentials.' => 'Klaidingi duomenys.',
    'Cookie has already been used by someone else.' => 'Slapukas buvo panaudotas kažkam kitam.',
    'Not privileged to request the resource.' => 'Neturite teisių pasiektį resursą.',
    'Invalid CSRF token.' => 'Neteisingas CSRF raktas.',
    'Digest nonce has expired.' => 'Prieigos kodas yra pasibaigęs.',
    'No authentication provider found to support the authentication token.' => 'Nerastas autentifikacijos tiekėjas, kuris palaikytų autentifikacijos raktą.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija yra nepasiekiama, pasibaigė galiojimo laikas arba slapukai yra išjungti.',
    'No token could be found.' => 'Nepavyko rasti rakto.',
    'Username could not be found.' => 'Tokio naudotojo vardo nepavyko rasti.',
    'Account has expired.' => 'Paskyros galiojimo laikas baigėsi.',
    'Credentials have expired.' => 'Autentifikacijos duomenų galiojimo laikas baigėsi.',
    'Account is disabled.' => 'Paskyra yra išjungta.',
    'Account is locked.' => 'Paskyra yra užblokuota.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Atnaujinti grupę',
    'group.show.name' => 'Grupės vardas',
    'group.new.submit' => 'Sukurti grupę',
    'group.flash.updated' => 'Grupė atnaujinta.',
    'group.flash.created' => 'Grupė sukurta.',
    'group.flash.deleted' => 'Grupė ištrinta.',
    'security.login.username' => 'Naudotojo vardas',
    'security.login.password' => 'Slaptažodis',
    'security.login.remember_me' => 'Atsiminti',
    'security.login.submit' => 'Prisijungti',
    'profile.show.username' => 'Naudotojo vardas',
    'profile.show.email' => 'El. paštas',
    'profile.edit.submit' => 'Atnaujinti',
    'profile.flash.updated' => 'Profilis atnaujintas.',
    'change_password.submit' => 'Keisti slaptažodį',
    'change_password.flash.success' => 'Slaptažodis pakeistas.',
    'registration.check_email' => 'El. pašto pranešimas išsiųstas adresu %email%. Jame rasite nuorodą, kurią aplankę, aktyvuosite savo paskyrą.',
    'registration.confirmed' => 'Sveikiname, jūsų paskyra aktyvuota.',
    'registration.back' => 'Grįžti atgal',
    'registration.submit' => 'Registruotis',
    'registration.flash.user_created' => 'Naudotojas sukurtas.',
    'registration.email.subject' => 'Registracijos patvirtinimas',
    'registration.email.message' => 'Sveiki %username%!

Norėdami aktyvuoti savo paskyrą, apsilankykite adresu %confirmationUrl%

Pagarbiai,
Komanda.
',
    'resetting.check_email' => 'El. pašto pranešimas išsiųstas adresu %email%. Jame rasite nuorodą, kurią paspaudę, galėsite pakeisti savo slaptažodį.',
    'resetting.request.username' => 'Naudotojo vardas arba el. paštas',
    'resetting.request.submit' => 'Tęsti',
    'resetting.reset.submit' => 'Pakeisti slaptažodį',
    'resetting.flash.success' => 'Slaptažodis pakeistas.',
    'resetting.email.subject' => 'Slaptažodžio keitimas',
    'resetting.email.message' => 'Sveiki %username%!

Norėdami pakeisti savo slaptažodį, apsilankykite adresu %confirmationUrl%

Pagarbiai,
Komanda.
',
    'layout.logout' => 'Atsijungti',
    'layout.login' => 'Prisijungti',
    'layout.register' => 'Registruotis',
    'layout.logged_in_as' => 'Prisijungęs kaip %username%',
    'form.group_name' => 'Grupės vardas',
    'form.username' => 'Naudotojo vardas',
    'form.email' => 'El. paštas',
    'form.current_password' => 'Dabartinis slaptažodis',
    'form.password' => 'Slaptažodis',
    'form.password_confirmation' => 'Pakartoti slaptažodį',
    'form.new_password' => 'Naujas slaptažodis',
    'form.new_password_confirmation' => 'Naujas slaptažodis (pakartoti)',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso.',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario.',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto.',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo.',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso.',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo.',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta.',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga.',
    'fos_user.email.invalid' => 'La dirección de correo no es válida.',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña.',
    'fos_user.password.short' => 'La contraseña es demasiado corta.',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden.',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña.',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta.',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida.',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre.',
    'fos_user.group.short' => 'El nombre es demasiado corto.',
    'fos_user.group.long' => 'El nombre es demasiado largo.',
    'fos_group.name.already_used' => 'El nombre ya está en uso.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado.',
    'group.flash.created' => 'El grupo ha sido creado.',
    'group.flash.deleted' => 'El grupo ha sido borrado.',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado.',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente.',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'resetting.check_email' => 'Un email ha sido enviado. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.
 Nota: Solo se puede solicitar una nueva contraseña dentro %tokenLifetime% horas.

Si no recibe un correo electrónico, comprueba tu carpeta de correo no deseado o inténtelo de nuevo.
',
    'resetting.request.username' => 'Nombre de usuario o correo electrónico',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
