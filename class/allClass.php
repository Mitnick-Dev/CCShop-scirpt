<?php 

    spl_autoload_register(function($className){
        $prefix='ccshop\\';
        $base_dir=__DIR__."/";
        
        $lenght=strlen($prefix);
        if(strncmp($prefix, $className, $lenght) !==0)
        {
            return;
        }
        echo $lenght;
        $className=strtolower($className);
        $relative_class=substr($className,$lenght);
        $path=$base_dir.str_replace("\\","/",$relative_class).".class.php";
        if(file_exists($path)) {
            require_once $path;
        }
    });

?>