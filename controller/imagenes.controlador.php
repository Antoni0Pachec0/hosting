<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadDir = '../view/publicacionesPaginas/imgPublicaciones/';  // Directorio donde se guardarán los archivos
    $uploadedFile = $_FILES['file'];
    $fileName = $uploadedFile['name'];
    $filePath = $uploadDir . $fileName;

    if (move_uploaded_file($uploadedFile['tmp_name'], $filePath)) {
        $baseUrl = 'http://casalila.website';  // Cambia esto a la URL base de tu sitio
        $fileUrl = $baseUrl . $filePath;

        echo json_encode(['url' => $fileUrl]);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Error al cargar el archivo']);
    }
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Solicitud no válida']);
}