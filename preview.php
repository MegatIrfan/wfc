<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted names
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date = $_POST['date'];

    $firstname = ucfirst(strtolower(substr($firstname, 0, 1))) . strtolower(substr($firstname, 1));
$lastname = ucfirst(strtolower(substr($lastname, 0, 1))) . strtolower(substr($lastname, 1));
    
    // Store form input values in session variables
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['date'] = $date;
} else {
    // Redirect to the form page if the request is not a POST request
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Platform Kad Digital | WhiteFilms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Platform Kad Digital | By Megat Irfan">
    <meta name="author" content="Megat Irfan">
    <meta name="keywords" content="platform, kad digital, whitefilms">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="canonical" href="wfcard.com">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.10.0/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

  <style>
    * {
      font-family: 'esthetique', Arial, sans-serif;
    }

    .container {
      position: relative;
      width: 21cm;
      height: 29.7cm;
      margin: 0 auto;
      background-image: url("img/preview.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      /* Additional background styles if needed */
    }

    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      /* Additional styles for the content within the container */
    }

    @font-face {
      font-family: 'Bacalisties';
      src: url('font/Bacalisties.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    @font-face {
      font-family: 'esthetique';
      src: url('font/esthetique.otf') format('truetype');
      font-weight: bold;
      font-style: normal;
    }

    h1 {
      position: absolute;
      top: -350px;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'esthetique', Arial, sans-serif;
      font-size: 14px;
      color: #c69665;
      letter-spacing: 12px;
      text-align: center;
      margin-bottom: 211px;
    }

    p {
      margin-bottom: 10px;
      /* Adjust the value as needed */
    }

    p.one {
      position: absolute;
      top: -330px;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'Bacalisties', Arial, sans-serif;
      font-size: 114px;
      color: #c69665;
      letter-spacing: 0px;
      text-align: center;
      padding: 0 10px;
      margin-bottom: 1111px;
    }

    p.two {
      position: absolute;
      top: -70px;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'esthetique', Arial, sans-serif;
      font-size: 40px;
      color: #c69665;
      letter-spacing: 0px;
      text-align: center;
      padding: 0 10px;
      margin-bottom: 1111px;
    }

    p.three {
      position: absolute;
      top: -80px;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'Bacalisties', Arial, sans-serif;
      font-size: 114px;
      color: #c69665;
      letter-spacing: 0px;
      text-align: center;
      padding: 0 10px;
      margin-bottom: 1111px;
    }

    p.date {
      position: absolute;
      top: 260px;
      left: 50%;
      transform: translateX(-50%);
      font-family: 'esthetique', Arial, sans-serif;
      font-size: 24px;
      color: #c69665;
      text-align: center;
    }

    .save-button {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
    }

    .back-button {
      position: absolute;
      bottom: 20px;
      right: 20px;
    }

    .save-button a,
    .back-button a {
      display: inline-block;
      padding: 10px 20px;
      background-color: green;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .save-button a:hover,
    .back-button a:hover {
      background-color: darkgreen;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="content">
      <?php
      // Retrieve the submitted names
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $date = $_POST['date'];
      // Set the Malay language settings
      setlocale(LC_TIME, 'ms_MY.utf8');

      // Format the date in Malay language
      setlocale(LC_TIME, 'ms_MY.utf8');

      // Format the date with the day of the week and month in Malay language
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
      ); ?>

      <h1>MAJLIS PERKAHWINAN</h1>
      <p class="one"><?php echo $_SESSION['firstname']; ?></p>
            <p class="two">&</p>
            <p class="three"><?php echo $_SESSION['lastname']; ?></p>
            <p class="date"><?php echo $formattedDate; ?></p>
      <!-- Rest of your wedding card design goes here -->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  
  <script>
    var firstname = '<?php echo $firstname; ?>';
  function convertToPdf() {
    Swal.fire({
      title: 'Tukar ke PDF',
      text: 'Ingin menukar pratonton ini kepada PDF?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Tukar',
      cancelButtonText: 'Batal',
    }).then((result) => {
      if (result.isConfirmed) {
        // Set the wedding card content
        const content = document.querySelector('.container');

        // Create the HTML2PDF options
        const options = {
          margin: 0,
          filename: 'WfCard_' + firstname + '.pdf',
          image: { type: 'png', quality: 1 },
          html2canvas: { scale: 1 },
          jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
        };

        // Generate the PDF
        html2pdf().set(options).from(content).save().then(() => {
          
          window.location.href = 'index.php';
        }).catch((error) => {
          console.log(error);
          Swal.fire('Error', 'Failed to generate the PDF', 'error');
        });
      }
    });
  }

  // Call the function when the page finishes loading
  window.addEventListener('load', convertToPdf);
</script>
</body>

</html>
