// Bài 1 interface
interface Resizable {
    public function resize($percent);
}

class Rectangle implements Resizable {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percent) {
        $this->width *= $percent / 100;
        $this->height *= $percent / 100;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}


$rectangle = new Rectangle(10, 5);
echo "Kích thước ban đầu: width = " . $rectangle->getWidth() . ", height = " . $rectangle->getHeight() . "<br>";

$rectangle->resize(50);
echo "Kích thước sau khi điều chỉnh: width = " . $rectangle->getWidth() . ", height = " . $rectangle->getHeight();

// Bài 2 interface
interface Logger {
    public function logInfo($message);
    public function logWarning($message);
    public function logError($message);
}

class FileLogger implements Logger {
    public function logInfo($message) {
        $this->writeToFile("[INFO] " . $message);
    }

    public function logWarning($message) {
        $this->writeToFile("[WARNING] " . $message);
    }

    public function logError($message) {
        $this->writeToFile("[ERROR] " . $message);
    }

    private function writeToFile($message) {
        $file = fopen("log.txt", "a");
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

<?php 
class DatabaseLogger implements Logger {
    public function logInfo($message) {
        $this->saveToDatabase("INFO", $message);
    }

    public function logWarning($message) {
        $this->saveToDatabase("WARNING", $message);
    }

    public function logError($message) {
        $this->saveToDatabase("ERROR", $message);
    }

    private function saveToDatabase($level, $message) {
        // Logic lưu log vào cơ sở dữ liệu
        // ...
    }
}

$fileLogger = new FileLogger();
$fileLogger->logInfo("Thông tin log");
$fileLogger->logWarning("Cảnh báo log");
$fileLogger->logError("Lỗi log");


$databaseLogger = new DatabaseLogger();
$databaseLogger->logInfo("Thông tin log");
$databaseLogger->logWarning("Cảnh báo log");
$databaseLogger->logError("Lỗi log");