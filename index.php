
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "controllers/UserController.php";

$conn = new mysqli("localhost", "cruduser", "mypassword", "crud_app");
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$controller = new UserController($conn);

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store($_POST);
        break;
    case 'edit':
        $id = $_GET['id'] ?? null;
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($_POST);
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}
?>

