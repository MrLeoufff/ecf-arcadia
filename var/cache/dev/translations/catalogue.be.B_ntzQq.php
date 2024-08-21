<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('be', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значэнне павінна быць Не.',
    'This value should be true.' => 'Значэнне павінна быць Так.',
    'This value should be of type {{ type }}.' => 'Тып значэння павінен быць {{ type }}.',
    'This value should be blank.' => 'Значэнне павінна быць пустым.',
    'The value you selected is not a valid choice.' => 'Абранае вамі значэнне не сапраўднае.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы павінны выбраць хаця б {{ limit }} варыянт.|Вы павінны выбраць хаця б {{ limit }} варыянтаў.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы павінны выбраць не больш за {{ limit }} варыянт.|Вы павінны выбраць не больш за {{ limit }} варыянтаў.',
    'One or more of the given values is invalid.' => 'Адзін або некалькі пазначаных значэнняў з\'яўляецца несапраўдным.',
    'This field was not expected.' => 'Гэта поле не чакаецца.',
    'This field is missing.' => 'Гэта поле адсутнічае.',
    'This value is not a valid date.' => 'Гэта значэнне не з\'яўляецца карэктнай датай.',
    'This value is not a valid datetime.' => 'Гэта значэнне не з\'яўляецца карэктнай датай i часом.',
    'This value is not a valid email address.' => 'Гэта значэнне не з\'яўляецца карэктным адрасам электроннай пошты.',
    'The file could not be found.' => 'Файл не знойдзен.',
    'The file is not readable.' => 'Файл не чытаецца.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі ({{ size }} {{ suffix }}). Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тып файлу некарэкты ({{ type }}). Дазволеныя MIME-тыпы файлу {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значэнне павінна быць {{ limit }} або менш.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвал або менш.|Значэнне занадта доўгае. Яно павінна мець {{ limit }} сімвалаў або менш.',
    'This value should be {{ limit }} or more.' => 'Значэнне павінна быць {{ limit }} або больш.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвал.|Значэнне занадта кароткае. Яно павінна мець прынамсі {{ limit }} сімвалаў.',
    'This value should not be blank.' => 'Значэнне не павінна быць пустым.',
    'This value should not be null.' => 'Значэнне не павінна быць null.',
    'This value should be null.' => 'Значэнне павінна быць null.',
    'This value is not valid.' => 'Значэнне з\'яўляецца не сапраўдным.',
    'This value is not a valid time.' => 'Значэнне не з\'яўляецца сапраўдным часам.',
    'This value is not a valid URL.' => 'Значэнне не з\'яўляецца сапраўдным URL-адрасам.',
    'The two values should be equal.' => 'Абодва значэнні павінны быць аднолькавымі.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадта вялікі. Максімальна дазволены памер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадта вялікі.',
    'The file could not be uploaded.' => 'Немагчыма запампаваць файл.',
    'This value should be a valid number.' => 'Значэнне павінна быць лікам.',
    'This file is not a valid image.' => 'Гэты файл не з\'яўляецца сапраўднай выявай.',
    'This is not a valid IP address.' => 'Гэта значэнне не з\'яўляецца сапраўдным IP-адрасам.',
    'This value is not a valid language.' => 'Значэнне не з\'яўляецца сапраўдным мовай.',
    'This value is not a valid locale.' => 'Значэнне не з\'яўляецца сапраўднай лакаллю.',
    'This value is not a valid country.' => 'Значэнне не з\'яўляецца сапраўднай краінай.',
    'This value is already used.' => 'Гэта значэнне ўжо выкарыстоўваецца.',
    'The size of the image could not be detected.' => 'Немагчыма вызначыць памер выявы.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Гэта выява занадта вялікая ({{ width }}px). Дазваляецца максімальная шырыня {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная шырыня {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Гэты выява занадта вялікая ({{ width }}px). Дазваляецца максімальная вышыня {{ max_width }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Гэта выява занадта маленькая ({{ width }}px). Дазваляецца мінімальная вышыня {{ min_width }}px.',
    'This value should be the user\'s current password.' => 'Значэнне павінна быць цяперашнім паролем карыстальніка.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значэнне павінна мець {{ limit }} сімвал.|Значэнне павінна мець {{ limit }} сімвалаў.',
    'The file was only partially uploaded.' => 'Файл быў запампаваны толькі часткова.',
    'No file was uploaded.' => 'Файл не быў запампаваны.',
    'No temporary folder was configured in php.ini.' => 'У php.ini не была налажана часовая папка, або часовая папка не існуе.',
    'Cannot write temporary file to disk.' => 'Немагчыма запісаць часовы файл на дыск.',
    'A PHP extension caused the upload to fail.' => 'Пашырэнне PHP выклікала памылку загрузкі.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Калекцыя павінна змяшчаць прынамсі {{ limit }} элемент.|Калекцыя павінна змяшчаць прынамсі {{ limit }} элементаў.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Калекцыя павінна змяшчаць {{ limit }} або менш элемент.|Калекцыя павінна змяшчаць {{ limit }} або менш элементаў.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Калекцыя павінна змяшчаць роўна {{ limit }} элемент.|Калекцыя павінна змяшчаць роўна {{ limit }} элементаў.',
    'Invalid card number.' => 'Несапраўдны нумар карты.',
    'Unsupported card type or invalid card number.' => 'Тып карты не падтрымліваецца або несапраўдны нумар карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Гэта значэнне не з\'яўляецца сапраўдным міжнародным нумарам банкаўскага рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISBN-10 або ISBN-13.',
    'This value is not a valid ISSN.' => 'Гэта значэнне не з\'яўляецца сапраўдным ISSN.',
    'This value is not a valid currency.' => 'Гэта значэнне не з\'яўляецца сапраўднай валютай.',
    'This value should be equal to {{ compared_value }}.' => 'Значэнне павінна раўняцца {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значэнне павінна быць больш чым {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значэнне павінна быць больш чым або раўняцца {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значэнне павінна быць менш чым {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значэнне павінна быць менш чым або раўняцца {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значэнне не павінна раўняцца {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значэнне не павінна быць ідэнтычным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта вялікім ({{ ratio }}). Дазваляецца максімальныя суадносіны {{max_ratio}} .',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Суадносіны бакоў выявы з\'яўляецца занадта маленькімі ({{ ratio }}). Дазваляецца мінімальныя суадносіны {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Выява квадратная ({{width}}x{{height}}px). Квадратныя выявы не дазволены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Выява ў альбомнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў альбомнай арыентацыі не дазволены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Выява ў партрэтнай арыентацыі ({{ width }}x{{ height }}px). Выявы ў партрэтнай арыентацыі не дазволены.',
    'An empty file is not allowed.' => 'Пусты файл не дазволены.',
    'The host could not be resolved.' => 'Не магчыма знайсці імя хоста.',
    'This value does not match the expected {{ charset }} charset.' => 'Гэта значэнне не супадае з чаканай {{ charset }} кадыроўкай.',
    'This is not a valid Business Identifier Code (BIC).' => 'Гэта значэнне не з\'яўляецца сапраўдным кодам ідэнтыфікацыі бізнесу (BIC).',
    'Error' => 'Памылка',
    'This is not a valid UUID.' => 'Гэта значэнне не з\'яўляецца сапраўдным UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Значэнне павінна быць кратным {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Банкаўскі ідэнтыфікацыйны код (BIC) не звязан з IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Гэта значэнне павінна быць у фармаце JSON.',
    'This collection should contain only unique elements.' => 'Калекцыя павінна змяшчаць толькі ўнікальныя элементы.',
    'This value should be positive.' => 'Значэнне павінна быць дадатным.',
    'This value should be either positive or zero.' => 'Значэнне павінна быць дадатным ці нуль.',
    'This value should be negative.' => 'Значэнне павінна быць адмоўным.',
    'This value should be either negative or zero.' => 'Значэнне павінна быць адмоўным ці нуль.',
    'This value is not a valid timezone.' => 'Значэнне не з\'яўляецца сапраўдным гадзінным поясам.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Гэты пароль быў выкрадзены ў выніку ўзлому дадзеных, таму яго нельга выкарыстоўваць. Калі ласка, выкарыстоўвайце іншы пароль.',
    'This value should be between {{ min }} and {{ max }}.' => 'Значэнне павінна быць паміж {{min}} і {{max}}.',
    'This value is not a valid hostname.' => 'Значэнне не з\'яўляецца карэктным імем хаста.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Колькасць элементаў у гэтай калекцыі павінна быць кратным {{compared_value}}.',
    'This value should satisfy at least one of the following constraints:' => 'Значэнне павінна задавальняць як мінімум аднаму з наступных абмежаванняў:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Кожны элемент гэтай калекцыі павінен задавальняць свайму ўласнаму набору абмежаванняў.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Значэнне не з\'яўляецца карэктным міжнародным ідэнтыфікацыйным нумарам каштоўных папер (ISIN).',
    'This value should be a valid expression.' => 'Значэнне не з\'яўляецца сапраўдным выразам.',
    'This value is not a valid CSS color.' => 'Значэнне не з\'яўляецца дапушчальным колерам CSS.',
    'This value is not a valid CIDR notation.' => 'Значэнне не з\'яўляецца сапраўднай натацыяй CIDR.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Значэнне сеткавай маскі павінна быць ад {{min}} да {{max}}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Назва файла занадта доўгая. Ён павінен мець {{ filename_max_length }} сімвал або менш.|Назва файла занадта доўгая. Ён павінен мець {{ filename_max_length }} сімвалы або менш.|Назва файла занадта доўгая. Ён павінен мець {{ filename_max_length }} сімвалаў або менш.',
    'The password strength is too low. Please use a stronger password.' => 'Надзейнасць пароля занадта нізкая. Выкарыстоўвайце больш надзейны пароль.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Гэта значэнне змяшчае сімвалы, якія не дазволены цяперашнім узроўнем абмежаванняў.',
    'Using invisible characters is not allowed.' => 'Выкарыстанне нябачных сімвалаў не дазваляецца.',
    'Mixing numbers from different scripts is not allowed.' => 'Змешванне лікаў з розных алфавітаў не дапускаецца.',
    'Using hidden overlay characters is not allowed.' => 'Выкарыстанне схаваных накладзеных сімвалаў не дазваляецца.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Пашырэнне файла няслушнае ({{ extension }}). Дазволеныя пашырэнні: {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Выяўленая кадыроўка знакаў няслушная ({{ detected }}). Дазволеныя кадыроўкі: {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Гэта значэнне не з\'яўляецца сапраўдным MAC-адрасам.',
    'This URL is missing a top-level domain.' => 'Гэтаму URL бракуе дамен верхняга ўзроўню.',
    'This form should not contain extra fields.' => 'Гэта форма не павінна мець дадатковых палей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Запампаваны файл быў занадта вялікім. Калі ласка, паспрабуйце запампаваць файл меншага памеру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-токен не сапраўдны. Калі ласка, паспрабуйце яшчэ раз адправіць форму.',
    'This value is not a valid HTML5 color.' => 'Значэнне не з\'яўляецца карэктным HTML5 колерам.',
    'Please enter a valid birthdate.' => 'Калі ласка, увядзіце карэктную дату нараджэння.',
    'The selected choice is invalid.' => 'Выбраны варыянт некарэктны.',
    'The collection is invalid.' => 'Калекцыя некарэктна.',
    'Please select a valid color.' => 'Калі ласка, выберыце карэктны колер.',
    'Please select a valid country.' => 'Калі ласка, выберыце карэктную краіну.',
    'Please select a valid currency.' => 'Калі ласка, выберыце карэктную валюту.',
    'Please choose a valid date interval.' => 'Калі ласка, выберыце карэктны інтэрвал дат.',
    'Please enter a valid date and time.' => 'Калі ласка, увядзіце карэктныя дату і час.',
    'Please enter a valid date.' => 'Калі ласка, увядзіце карэктную дату.',
    'Please select a valid file.' => 'Калі ласка, выберыце карэктны файл.',
    'The hidden field is invalid.' => 'Значэнне схаванага поля некарэктна.',
    'Please enter an integer.' => 'Калі ласка, увядзіце цэлы лік.',
    'Please select a valid language.' => 'Калі ласка, выберыце карэктную мову.',
    'Please select a valid locale.' => 'Калі ласка, выберыце карэктную лакаль.',
    'Please enter a valid money amount.' => 'Калі ласка, увядзіце карэктную колькасць грошай.',
    'Please enter a number.' => 'Калі ласка, увядзіце нумар.',
    'The password is invalid.' => 'Няправільны пароль.',
    'Please enter a percentage value.' => 'Калі ласка, увядзіце працэнтнае значэнне.',
    'The values do not match.' => 'Значэнні не супадаюць.',
    'Please enter a valid time.' => 'Калі ласка, увядзіце карэктны час.',
    'Please select a valid timezone.' => 'Калі ласка, выберыце карэктны гадзінны пояс.',
    'Please enter a valid URL.' => 'Калі ласка, увядзіце карэктны URL.',
    'Please enter a valid search term.' => 'Калі ласка, увядзіце карэктны пошукавы запыт.',
    'Please provide a valid phone number.' => 'Калі ласка, увядзіце карэктны нумар тэлефона.',
    'The checkbox has an invalid value.' => 'Флажок мае некарэктнае значэнне.',
    'Please enter a valid email address.' => 'Калі ласка, увядзіце карэктны адрас электроннай пошты.',
    'Please select a valid option.' => 'Калі ласка, выберыце карэктны варыянт.',
    'Please select a valid range.' => 'Калі ласка, выберыце карэктны дыяпазон.',
    'Please enter a valid week.' => 'Калі ласка, увядзіце карэктны тыдзень.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Памылка аўтэнтыфікацыі.',
    'Authentication credentials could not be found.' => 'Дадзеныя аўтэнтыфікацыі не знойдзены.',
    'Authentication request could not be processed due to a system problem.' => 'Запыт аўтэнтыфікацыі не можа быць апрацаваны ў сувязі з праблемай у сістэме.',
    'Invalid credentials.' => 'Несапраўдныя дадзеныя аўтэнтыфікацыі.',
    'Cookie has already been used by someone else.' => 'Нехта іншы ўжо выкарыстаў гэтыя кукі (cookie).',
    'Not privileged to request the resource.' => 'Адсутнічаюць правы на запыт гэтага рэсурсу.',
    'Invalid CSRF token.' => 'Несапраўдны CSRF-токен.',
    'No authentication provider found to support the authentication token.' => 'Не знойдзен правайдар аўтэнтыфікацыі, які можа падтрымліваць гэты токен аўтэнтыфікацыі.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія не даступна, яе час скончыўся, або кукі (cookies) выключаны.',
    'No token could be found.' => 'Токен не знойдзен.',
    'Username could not be found.' => 'Імя карыстальніка не знойдзена.',
    'Account has expired.' => 'Скончыўся тэрмін дзеяння акаўнта.',
    'Credentials have expired.' => 'Скончыўся тэрмін дзеяння дадзеных аўтэнтыфікацыі.',
    'Account is disabled.' => 'Акаўнт адключан.',
    'Account is locked.' => 'Акаўнт заблакіраван.',
    'Too many failed login attempts, please try again later.' => 'Зашмат няўдалых спроб уваходу, калі ласка, паспрабуйце пазней.',
    'Invalid or expired login link.' => 'Спасылка для ўваходу несапраўдная або пратэрмінаваная.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Занадта шмат няўдалых спроб уваходу ў сістэму, паспрабуйце спробу праз %minutes% хвіліну.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Занадта шмат няўдалых спробаў уваходу, калі ласка, паспрабуйце зноў праз %minutes% хвіліну.|Занадта шмат няўдалых спробаў уваходу, калі ласка, паспрабуйце зноў праз %minutes% хвіліны.|Занадта шмат няўдалых спробаў уваходу, калі ласка, паспрабуйце зноў праз %minutes% хвілін.',
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
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'Cette valeur est trop courte. Elle doit contenir au moins un mot.|Cette valeur est trop courte. Elle doit contenir au moins {{ min }} mots.',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'Cette valeur est trop longue. Elle doit contenir au maximum un mot.|Cette valeur est trop longue. Elle doit contenir au maximum {{ max }} mots.',
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
