<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
class PackageManager {
    function scanEverything($path, array $except = [], array &$result = array()) {
        $scan = scandir($path);
        foreach($scan as $file) {
            if(in_array($file, $except) !== false)
                continue;
            if($file === "." || $file === "..") continue;

            if(is_dir($path.$file)) {
                $this->scanEverything($path.$file."/",$except, $result);
            } else {
                $pathinfo = pathinfo($path.$file);
                if($pathinfo["extension"] == "php"){ 
                    //var_dump($file);
                    $classes = get_declared_classes();
                    include_once substr($path.$file,2);
                    $diff = array_diff(get_declared_classes(), $classes);
                    $result[array_pop($diff)] = substr($path.$file,2);
                }
            }
        }
    }
    
    function load($start_from) {
        $result = array();
        $this->scanEverything($start_from,array("index.php","package.php",".package.php","packagemanager.php"), $result);
        $pkg = fopen("package.php", "w");
        $text = "<?php\nclass Package {\n\tstatic \$classes = array(";
        fwrite($pkg, $text);
        $elso = true;
        foreach($result as $class_name=>$path) {
            
            $text = ($elso?"":",")."\n\t\t'".$class_name."' => '".$path."'";
            $elso = false;
            fwrite($pkg,$text);
        }
        var_dump($result);
        fwrite($pkg, "  );\n}");
        fclose($pkg);
    }

}

if(isset($_POST["auth"]) && $_POST["auth"] === /*bait*/) {
    (new PackageManager)->load("./");
}

?>

<form method="post">
    <input type="password" name="auth"/>
</form>