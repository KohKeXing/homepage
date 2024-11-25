<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
    echo "<script>alert('You must be logged in to access the report.'); window.location.href='register.php';</script>";
    exit();
}

// Get user birthdate from the session
$birthdate = $_SESSION['user_birthdate'];
$day = date('d', strtotime($birthdate));

// Generate a number (1-10) based on the day of birth
$number = $day % 10;  // This will give a number between 1 and 10
$pdfPath = "pdfs/number" . $number . ".pdf";

// Check if the PDF exists and send it to the user
if (file_exists($pdfPath)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="report.pdf"');
    readfile($pdfPath);
    exit();
} else {
    echo "Sorry, no report available.";
}
?>
