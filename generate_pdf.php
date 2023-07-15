<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// Retrieve the submitted names and date
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];

// Set the Malay language settings
setlocale(LC_TIME, 'ms_MY.utf8');

// Format the date in Malay language
$formattedDate = strftime('%A, %d %B %Y', strtotime($date));
$formattedDate = str_replace(
  array(
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
    'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
  ),
  array(
    'Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu', 'Ahad',
    'Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember'
  ),
  $formattedDate
);

// Create a new Dompdf instance
$dompdf = new Dompdf();

// Load the HTML content
$html = '
  <h1>MAJLIS PERKAHWINAN</h1>
  <p>' . $firstname . '</p>
  <p>&</p>
  <p>' . $lastname . '</p>
  <p>' . $formattedDate . '</p>
';

$dompdf->loadHtml($html);

// (Optional) Set the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to the browser
$dompdf->stream('wedding_card.pdf');
?>