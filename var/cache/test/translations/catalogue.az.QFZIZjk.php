<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('az', array (
  'validators' => 
  array (
    'This value should be false.' => 'Bu dəyər false olmalıdır.',
    'This value should be true.' => 'Bu dəyər true olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu dəyərin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu dəyər boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçdiyiniz dəyər düzgün bir seçim değil.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ən az {{ limit }} seçim qeyd edilməlidir.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ən çox {{ limit }} seçim qeyd edilməlidir.',
    'One or more of the given values is invalid.' => 'Təqdim edilən dəyərlərdən bir və ya bir neçəsi yanlışdır.',
    'This field was not expected.' => 'Bu sahə gözlənilmirdi.',
    'This field is missing.' => 'Bu sahə əksikdir.',
    'This value is not a valid date.' => 'Bu dəyər düzgün bir tarix deyil.',
    'This value is not a valid datetime.' => 'Bu dəyər düzgün bir tarixsaat deyil.',
    'This value is not a valid email address.' => 'Bu dəyər düzgün bir e-poçt adresi deyil.',
    'The file could not be found.' => 'Fayl tapılmadı.',
    'The file is not readable.' => 'Fayl oxunabilən deyil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür ({{ size }} {{ suffix }}). İcazə verilən maksimum fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faylın mime tipi yanlışdr ({{ type }}). İcazə verilən mime tipləri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu dəyər {{ limit }} və ya altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu dəyər çox uzundur. {{ limit }} və ya daha az simvol olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu dəyər {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu dəyər çox qısadır. {{ limit }} və ya daha çox simvol olmalıdır.',
    'This value should not be blank.' => 'Bu dəyər boş olmamalıdır.',
    'This value should not be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value should be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value is not valid.' => 'Bu dəyər doğru deyil.',
    'This value is not a valid time.' => 'Bu dəyər doğru bir saat deyil.',
    'This value is not a valid URL.' => 'Bu dəyər doğru bir URL değil.',
    'The two values should be equal.' => 'İki dəyər eyni olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür. İcazə verilən ən böyük fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fayl çox böyükdür.',
    'The file could not be uploaded.' => 'Fayl yüklənəbilmir.',
    'This value should be a valid number.' => 'Bu dəyər rəqəm olmalıdır.',
    'This file is not a valid image.' => 'Bu fayl düzgün bir şəkil deyil.',
    'This is not a valid IP address.' => 'Bu dəyər etibarlı bir IP ünvanı deyil.',
    'This value is not a valid language.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid locale.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid country.' => 'Bu dəyər düzgün bir ölkə deyil.',
    'This value is already used.' => 'Bu dəyər hal-hazırda istifadədədir.',
    'The size of the image could not be detected.' => 'Şəklin ölçüsü hesablana bilmir.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Şəklin genişliyi çox böyükdür ({{ width }}px). İcazə verilən ən böyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Şəklin genişliyi çox kiçikdir ({{ width }}px). Ən az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Şəklin yüksəkliyi çox böyükdür ({{ height }}px). İcazə verilən ən böyük yüksəklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Şəklin yüksəkliyi çox kiçikdir ({{ height }}px). Ən az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu dəyər istifadəçinin hazırkı parolu olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu dəyər tam olaraq {{ limit }} simvol olmaldır.',
    'The file was only partially uploaded.' => 'Fayl qismən yükləndi.',
    'No file was uploaded.' => 'Fayl yüklənmədi.',
    'No temporary folder was configured in php.ini.' => 'php.ini-də müvəqqəti qovluq quraşdırılmayıb, və ya quraşdırılmış qovluq mövcud deyil.',
    'Cannot write temporary file to disk.' => 'Müvəqqəti fayl diskə yazıla bilmir.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP əlavəsi faylın yüklənməsinə mane oldu.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu kolleksiyada {{ limit }} və ya daha çox element olmalıdır.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu kolleksiyada {{ limit }} və ya daha az element olmalıdır.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu kolleksiyada tam olaraq {{ limit }} element olmalıdır.',
    'Invalid card number.' => 'Yanlış kart nömrəsi.',
    'Unsupported card type or invalid card number.' => 'Dəstəklənməyən kart tipi və ya yanlış kart nömrəsi.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Bu dəyər etibarlı bir Beynəlxalq Bank Hesab Nömrəsi (IBAN) deyil.',
    'This value is not a valid ISBN-10.' => 'Bu dəyər doğru bir ISBN-10 deyil.',
    'This value is not a valid ISBN-13.' => 'Bu dəyər doğru bir ISBN-13 deyil.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Bu dəyər doğru bir ISBN-10 və ya ISBN-13 deyil.',
    'This value is not a valid ISSN.' => 'Bu dəyər doğru bir ISSN deyil.',
    'This value is not a valid currency.' => 'Bu dəyər doğru bir valyuta deyil.',
    'This value should be equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} ilə bərabər olmalıdır.',
    'This value should be greater than {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən büyük olmalıdır.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} ilə bərabər və ya daha böyük olmaldır.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu dəyər {{ compared_value_type }} {{ compared_value }} ilə eyni olmalıdır.',
    'This value should be less than {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən kiçik olmalıdır.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Bu dəyər {{ compared_value }} dəyərindən kiçik və ya bərabər olmalıdır.',
    'This value should not be equal to {{ compared_value }}.' => 'Bu değer {{ compared_value }} ile eşit olmamalıdır.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Bu dəyər {{ compared_value_type }} {{ compared_value }} ilə eyni olmamalıdır.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Şəkil nisbəti çox büyükdür ({{ ratio }}). İcazə verilən maksimum nisbət: {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Şəkil nisbəti çox balacadır ({{ ratio }}). İcazə verilən minimum nisbət: {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Şəkil kvadratdır ({{ width }}x{{ height }}px). Kvadrat şəkillərə icazə verilmir.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Şəkil albom rejimindədir ({{ width }}x{{ height }}px). Albom rejimli şəkillərə icazə verilmir.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Şəkil portret rejimindədir ({{ width }}x{{ height }}px). Portret rejimli şəkillərə icazə verilmir.',
    'An empty file is not allowed.' => 'Boş fayla icazə verilmir.',
    'The host could not be resolved.' => 'Ünvan tapılmadı.',
    'This value does not match the expected {{ charset }} charset.' => 'Bu dəyər gözlənilən {{ charset }} simvol cədvəli ilə uyğun gəlmir.',
    'This is not a valid Business Identifier Code (BIC).' => 'Bu dəyər etibarlı bir Biznes Təyinat Kodu (BIC) deyil.',
    'Error' => 'Xəta',
    'This is not a valid UUID.' => 'Bu dəyər etibarlı bir UUID deyil.',
    'This value should be a multiple of {{ compared_value }}.' => 'Bu dəyər {{ compare_value }} dəyərinin bölənlərindən biri olmalıdır.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Bu Biznes Təyinedici Kodu (BIC) {{ iban }} IBAN kodu ilə əlaqəli deyil.',
    'This value should be valid JSON.' => 'Bu dəyər doğru bir JSON olmalıdır.',
    'This collection should contain only unique elements.' => 'Bu kolleksiyada sadəcə unikal elementlər olmalıdır.',
    'This value should be positive.' => 'Bu dəyər müsbət olmalıdır.',
    'This value should be either positive or zero.' => 'Bu dəyər müsbət və ya sıfır olmalıdır.',
    'This value should be negative.' => 'Bu dəyər mənfi olmaldır.',
    'This value should be either negative or zero.' => 'Bu dəyər mənfi və ya sıfır olmaldır.',
    'This value is not a valid timezone.' => 'Bu dəyər doğru bir zaman zolağı deyil.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Bu parol data oğurluğunda tapıldığı üçün işlədilməməlidir. Zəhmət olmasa, başqa parol seçin.',
    'This value should be between {{ min }} and {{ max }}.' => 'Bu dəyər {{ min }} və {{ max }} arasında olmaldır.',
    'This value is not a valid hostname.' => 'Bu dəyər doğru bir host adı deyil.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Bu kolleksiyadakı elementlerin sayı {{ compared_value }} tam bölünəni olmalıdır.',
    'This value should satisfy at least one of the following constraints:' => 'Bu dəyər aşağıdakı məcburiyyətlərdən birini qarşılamalıdır:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Bu kolleksiyadakı hər element öz məcburiyyətlərini qarşılamalıdır.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Bu dəyər doğru bir Qiymətli Kağızın Beynəlxalq İdentifikasiya Kodu (ISIN) deyil.',
    'This value should be a valid expression.' => 'Bu dəyər etibarlı ifadə olmalıdır.',
    'This value is not a valid CSS color.' => 'Bu dəyər etibarlı CSS rəngi deyil.',
    'This value is not a valid CIDR notation.' => 'Bu dəyər etibarlı CIDR notasiyası deyil.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Şəbəkə maskasının dəyəri {{ min }} və {{ max }} arasında olmalıdır.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Fayl adı çox uzundur. {{ filename_max_length }} və ya daha az simvol olmalıdır.',
    'The password strength is too low. Please use a stronger password.' => 'Parolun gücü çox zəifdir. Zəhmət olmasa, daha güclü bir parol istifadə edin.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Bu dəyərdə cari məhdudiyyət səviyyəsi tərəfindən icazə verilməyən simvollar var.',
    'Using invisible characters is not allowed.' => 'Görünməz simvolların istifadəsinə icazə verilmir.',
    'Mixing numbers from different scripts is not allowed.' => 'Fərqli skriptlərdən nömrələrin qarışdırılmasına icazə verilmir.',
    'Using hidden overlay characters is not allowed.' => 'Gizli örtülü simvolların istifadəsinə icazə verilmir.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Faylın uzantısı yanlışdır ({{ extension }}). İcazə verilən uzantılar {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Təsbit edilən simvol şifrləməsi yanlışdır. ({{ detected }}). İcazə verilən şifrləmələr bunlardır: {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Bu dəyər etibarlı bir MAC ünvanı deyil.',
    'This URL is missing a top-level domain.' => 'Bu URL yuxarı səviyyəli domeni çatışmır.',
    'This form should not contain extra fields.' => 'Bu formada əlavə sahə olmamalıdır.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yüklənən fayl çox böyükdür. Lütfən daha kiçik fayl yükləyin.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF nişanı yanlışdır. Lütfen formanı yenidən göndərin.',
    'This value is not a valid HTML5 color.' => 'Bu dəyər doğru bir HTML5 rəngi deyil.',
    'Please enter a valid birthdate.' => 'Zəhmət olmasa doğru bir doğum günü daxil edin.',
    'The selected choice is invalid.' => 'Seçilmiş seçim doğru deyil.',
    'The collection is invalid.' => 'Kolleksiya doğru deyil.',
    'Please select a valid color.' => 'Zəhmət olmasa doğru bir rəng seçin.',
    'Please select a valid country.' => 'Zəhmət olmasa doğru bir ölkə seçin.',
    'Please select a valid currency.' => 'Zəhmət olmasa doğru bir valyuta seçin.',
    'Please choose a valid date interval.' => 'Zəhmət olmasa doğru bir tarix aralığı seçin.',
    'Please enter a valid date and time.' => 'Zəhmət olmasa doğru bir tarix ve saat daxil edin.',
    'Please enter a valid date.' => 'Zəhmət olmasa doğru bir tarix daxil edin.',
    'Please select a valid file.' => 'Zəhmət olmasa doğru bir fayl seçin.',
    'The hidden field is invalid.' => 'Gizli sahə doğru deyil.',
    'Please enter an integer.' => 'Zəhmət olmasa bir tam ədəd daxil edin.',
    'Please select a valid language.' => 'Zəhmət olmasa doğru bir dil seçin.',
    'Please select a valid locale.' => 'Zəhmət olmasa doğru bir yer seçin.',
    'Please enter a valid money amount.' => 'Zəhmət olmasa doğru bir pul miqdarı daxil edin.',
    'Please enter a number.' => 'Zəhmət olmasa doğru bir rəqəm daxil edin.',
    'The password is invalid.' => 'Parol doğru deyil.',
    'Please enter a percentage value.' => 'Zəhmət olmasa doğru bir faiz dəyəri daxil edin.',
    'The values do not match.' => 'Dəyərlər örtüşmür.',
    'Please enter a valid time.' => 'Zəhmət olmasa doğru bir saat daxil edin.',
    'Please select a valid timezone.' => 'Zəhmət olmasa doğru bir saat qurşağı seçin.',
    'Please enter a valid URL.' => 'Zəhmət olmasa doğru bir URL daxil edin.',
    'Please enter a valid search term.' => 'Zəhmət olmasa doğru bir axtarış termini daxil edin.',
    'Please provide a valid phone number.' => 'Zəhmət olmasa doğru bir telefon nömrəsi seçin.',
    'The checkbox has an invalid value.' => 'Seçim qutusunda doğru olmayan dəyər var.',
    'Please enter a valid email address.' => 'Zəhmət olmasa doğru bir e-poçt seçin.',
    'Please select a valid option.' => 'Zəhmət olmasa doğru bir variant seçin.',
    'Please select a valid range.' => 'Zəhmət olmasa doğru bir aralıq seçin.',
    'Please enter a valid week.' => 'Zəhmət olmasa doğru bir həftə seçin.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Doğrulama istisnası baş verdi.',
    'Authentication credentials could not be found.' => 'Doğrulama məlumatları tapılmadı.',
    'Authentication request could not be processed due to a system problem.' => 'Sistem xətası səbəbilə doğrulama istəyi emal edilə bilmədi.',
    'Invalid credentials.' => 'Yanlış məlumat.',
    'Cookie has already been used by someone else.' => 'Kuki başqası tərəfindən istifadə edilib.',
    'Not privileged to request the resource.' => 'Resurs istəyi üçün imtiyaz yoxdur.',
    'Invalid CSRF token.' => 'Yanlış CSRF nişanı.',
    'No authentication provider found to support the authentication token.' => 'Doğrulama nişanını dəstəkləyəcək provayder tapılmadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Uyğun seans yoxdur, vaxtı keçib və ya kuki aktiv deyil.',
    'No token could be found.' => 'Nişan tapılmadı.',
    'Username could not be found.' => 'İstifadəçi adı tapılmadı.',
    'Account has expired.' => 'Hesabın istifadə müddəti bitib.',
    'Credentials have expired.' => 'Məlumatların istifadə müddəti bitib.',
    'Account is disabled.' => 'Hesab qeyri-aktiv edilib.',
    'Account is locked.' => 'Hesab kilitlənib.',
    'Too many failed login attempts, please try again later.' => 'Çoxlu uğursuz giriş təşəbbüsü, zəhmət olmasa daha sonra yeniden yoxlayın.',
    'Invalid or expired login link.' => 'Yanlış və ya müddəti keçmiş giriş keçidi.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Həddindən artıq uğursuz giriş cəhdi, lütfən %minutes% dəqiqə ərzində yenidən yoxlayın.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Çox sayda uğursuz giriş cəhdi, zəhmət olmasa %minutes% dəqiqə sonra yenidən cəhd edin.|Çox sayda uğursuz giriş cəhdi, zəhmət olmasa %minutes% dəqiqə sonra yenidən cəhd edin.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette valeur n\'est pas une adresse IP valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini, ou le répertoire configuré n\'existe pas.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Cette valeur n\'est pas un Numéro de Compte Bancaire International (IBAN) valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Cette valeur n\'est pas un Code Identifiant de Business (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Cette valeur n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This value should be a valid expression.' => 'Cette valeur doit être une expression valide.',
    'This value is not a valid CSS color.' => 'Cette valeur n\'est pas une couleur CSS valide.',
    'This value is not a valid CIDR notation.' => 'Cette valeur n\'est pas une notation CIDR valide.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'La valeur du masque de réseau doit être comprise entre {{ min }} et {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Le nom du fichier est trop long. Il doit contenir au maximum {{ filename_max_length }} caractère.|Le nom de fichier est trop long. Il doit contenir au maximum {{ filename_max_length }} caractères.',
    'The password strength is too low. Please use a stronger password.' => 'La force du mot de passe est trop faible. Veuillez utiliser un mot de passe plus fort.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Cette valeur contient des caractères qui ne sont pas autorisés par le niveau de restriction actuel.',
    'Using invisible characters is not allowed.' => 'Utiliser des caractères invisibles n\'est pas autorisé.',
    'Mixing numbers from different scripts is not allowed.' => 'Mélanger des chiffres provenant de différents scripts n\'est pas autorisé.',
    'Using hidden overlay characters is not allowed.' => 'Utiliser des caractères de superposition cachés n\'est pas autorisé.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'L\'extension du fichier est invalide ({{ extension }}). Les extensions autorisées sont {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'L\'encodage de caractères détecté est invalide ({{ detected }}). Les encodages autorisés sont {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Cette valeur n\'est pas une adresse MAC valide.',
    'This URL is missing a top-level domain.' => 'Cette URL doit contenir un domaine de premier niveau.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir de champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Trop de tentatives de connexion échouées, veuillez réessayer dans %minutes% minutes.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;