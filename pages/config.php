<?
// Start je zelf ergens anders je sessies/cookies? Maak van de volgende twee regels dan commentaar (# of //)
session_start();
ob_start();

// Error reporting zetten we uit, het is niet echt netjes je bezoekers errors voor te schotelen
//ERROR_REPORTING(0);

// MySQL
$db_user = 'db_user'; // Gebruiker voor MySQL
$db_pass = 'db_pass'; // Wachtwoord voor MySQL
$db_host = 'localhost'; // Host voor MySQL; standaard localhost
$db_db = 'romupdater'; // Database

// Als je al ergens anders een database connectie hebt gemaakt,
// maak dan van de volgende twee regels commentaar (# of // ervoor zetten)
$db = new mysqli($db_host, $db_user, $db_pass, $db_db);

// Instellingen
$loginpage = '?page=list-roms'; // Pagina waar de gebruiker heen wordt gestuurd wanneer deze is ingelogd
$sitenaam = 'Gummy OTA-Service'; // Naam van je site; deze word oa. gebruikt bij het verzenden van mail
$sitemail = 'noreplay@rombot.org'; // Afzender van verzonden mail
$sitebaseurl = 'https://rombot.org/';
$sitesalt = 'supersecretlongsalt - replace on install';
$gcmapikey = 'GCM_API_KEY';
$recaptcha_pubkey = 'public recapcha key';
$recaptcha_privkey = 'private recapcha key';
?>
