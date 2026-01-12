<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $name = strip_tags(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Prosím vyplňte všechna pole.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Neplatný e-mail.']);
        exit;
    }

    $file = 'contacts.csv';
    $file_exists = file_exists($file);
    
    $handle = fopen($file, 'a');
    if ($handle) {
        // Add headers if file is new
        if (!$file_exists) {
            fputcsv($handle, ['Datum', 'Jméno', 'Email', 'Zpráva']);
        }
        fputcsv($handle, [date('Y-m-d H:i:s'), $name, $email, $message]);
        fclose($handle);
        echo json_encode(['success' => true, 'message' => 'Zpráva byla úspěšně odeslána!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Chyba při ukládání dat na serveru.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Neplatný požadavek.']);
}
?>