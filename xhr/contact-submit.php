<?php
include("../inc/db.php");

header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| 1. Basic Sanitization & Security
|--------------------------------------------------------------------------
*/

$name        = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$company     = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_SPECIAL_CHARS);
$email_raw   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$email       = filter_var($email_raw, FILTER_VALIDATE_EMAIL) ? $email_raw : false;
$phone       = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
$interest    = filter_input(INPUT_POST, 'interest', FILTER_SANITIZE_SPECIAL_CHARS);
$message     = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
$which_page  = filter_input(INPUT_POST, 'which_page', FILTER_SANITIZE_URL);

/*
|--------------------------------------------------------------------------
| Dynamic Fields
|--------------------------------------------------------------------------
*/

$dynamic_data = [];

$exclude = [
    'name',
    'company',
    'email',
    'phone',
    'interest',
    'message',
    'which_page'
];

foreach ($_POST as $key => $value) {
    if (!in_array($key, $exclude)) {
        $dynamic_data[$key] = htmlspecialchars($value);
    }
}

/*
|--------------------------------------------------------------------------
| 2. Validation
|--------------------------------------------------------------------------
*/

if (
    empty($name) ||
    empty($phone) ||
    empty($interest)
) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please fill all required fields correctly.'
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| Spam Protection
|--------------------------------------------------------------------------
*/

$spam_keywords = [
    '<script',
    'javascript:',
    'vbscript:',
    'onload=',
    'onerror='
];

foreach ($_POST as $val) {

    foreach ($spam_keywords as $keyword) {

        if (stripos($val, $keyword) !== false) {

            echo json_encode([
                'status' => 'error',
                'message' => 'Security check failed.'
            ]);

            exit;
        }
    }
}

/*
|--------------------------------------------------------------------------
| 3. Save Inquiry To Text File
|--------------------------------------------------------------------------
*/

$log_dir = "../uploads/inquiries/";

if (!is_dir($log_dir)) {
    mkdir($log_dir, 0777, true);
}

$timestamp = date("Y-m-d_H-i-s");

$file_name = $log_dir . "inquiry_" . $timestamp . "_" . uniqid() . ".txt";

$log_content  = "Timestamp: " . date("Y-m-d H:i:s") . "\n";
$log_content .= "Page: $which_page\n";
$log_content .= "Name: $name\n";
$log_content .= "Company: $company\n";
$log_content .= "Email: $email\n";
$log_content .= "Phone: $phone\n";
$log_content .= "Interest: $interest\n";

foreach ($dynamic_data as $key => $val) {
    $log_content .= ucfirst($key) . ": $val\n";
}

$log_content .= "Message: $message\n";
$log_content .= "--------------------------------------------------\n";

file_put_contents($file_name, $log_content);

/*
|--------------------------------------------------------------------------
| 4. Send Email
|--------------------------------------------------------------------------
|
| IMPORTANT:
| Create this email in Hostinger first:
| info@lytmyt.com
|
*/

$to = "info@lytmyt.com";

$subject = "📌 New Inquiry: from $name ($interest)";

/*
|--------------------------------------------------------------------------
| HTML Email Body
|--------------------------------------------------------------------------
*/

$email_body = "
<html>
<head>
    <title>New Inquiry from LytMyt</title>
</head>

<body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>

<div style='max-width: 600px; margin: 0 auto; border: 1px solid #eee; padding: 20px; border-radius: 10px;'>

    <h2 style='color: #7c3aed;'>New Inquiry Details</h2>

    <p>
        <strong>Page:</strong>
        <a href='$which_page'>$which_page</a>
    </p>

    <hr style='border: 0; border-top: 1px solid #eee;'>

    <p><strong>Name:</strong> $name</p>

    <p><strong>Company:</strong> $company</p>

    <p><strong>Email:</strong> $email</p>

    <p><strong>Phone:</strong> $phone</p>

    <p><strong>Interested In:</strong> <span style='background-color: #7c3aed; color: white; padding: 5px 10px; border-radius: 5px;'>$interest</span></p>
";

/*
|--------------------------------------------------------------------------
| Dynamic Data In Email
|--------------------------------------------------------------------------
*/

foreach ($dynamic_data as $key => $val) {

    $email_body .= "
        <p>
            <strong>" . ucfirst($key) . ":</strong> $val
        </p>
    ";
}

$message_html = nl2br($message);

$email_body .= "

    <p>
        <strong>Message:</strong><br>
        $message_html
    </p>

    <hr style='border: 0; border-top: 1px solid #eee;'>

    <p style='font-size: 12px; color: #999;'>
        This inquiry was sent from LytMyt Contact Form.
    </p>

</div>

</body>
</html>
";

/*
|--------------------------------------------------------------------------
| Email Headers
|--------------------------------------------------------------------------
|
| VERY IMPORTANT:
| From email MUST be your domain email
| Otherwise Hostinger blocks the mail
|
*/

$cc  = "astechnolabs@gmail.com";
$bcc = "lytmyt.com@gmail.com";

$default_from_email = "info@lytmyt.com";
$reply_to = $email ?: $default_from_email;
$from_name = $name ?: 'Website Visitor';

require_once __DIR__ . '/../lib/phpmailer/src/Exception.php';
require_once __DIR__ . '/../lib/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/../lib/phpmailer/src/SMTP.php';

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@lytmyt.com';
    $mail->Password = 'Lytmyt@30';
    $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ];
    $mail->isHTML(true);
    $mail->setFrom($default_from_email, 'LytMyt');
    $mail->addAddress($to);
    $mail->addReplyTo($reply_to, $from_name);
    $mail->addCC($cc);
    $mail->addBCC($bcc);
    $mail->Subject = $subject;
    $mail->Body = $email_body;
    $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $email_body));
    $mail->send();

    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you! Your inquiry has been sent successfully. We will contact you soon.'
    ]);
} catch (\PHPMailer\PHPMailer\Exception $e) {
    $debug_data = [
        'phpmailer_error' => $mail->ErrorInfo,
        'exception' => $e->getMessage(),
        'sendmail_path' => ini_get('sendmail_path'),
        'SMTP' => ini_get('SMTP'),
        'smtp_port' => ini_get('smtp_port'),
        'from_email' => $default_from_email,
        'reply_to' => $reply_to,
        'server' => $_SERVER['SERVER_SOFTWARE'] ?? '',
    ];

    file_put_contents(
        $file_name,
        "\n\nDEBUG:\n" . print_r($debug_data, true),
        FILE_APPEND
    );

    echo json_encode([
        'status' => 'error',
        'debug' => $debug_data,
        'message' => 'Mail failed'
    ]);
    exit;
}
?>