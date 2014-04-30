<?php
/**
 * Created by PhpStorm.
 * User: stefvandenberg
 * Date: 24/02/14
 * Time: 18:33
 */

class Images {

    public $url;
    public $files = null;
    public $upload = '../upload/images/';

    function __construct()
    {
        // Empty construtor
    }

    public function setContent($files) {
        $this->files = $files;
    }

    public function upload() {
        return $this->execute();
    }

    private function execute() {
        $errors=0;

        $image = $this->files['url']['name'];
        $fileToUpload = $this->files['url']['tmp_name'];
        $filename = '';

        if ($image)
        {
            $filename = stripslashes($this->files['url']['name']);
            $extension = $this->getExtension($filename);
            $extension = strtolower($extension);
            if (($extension != "jpg") && ($extension != "jpeg")
                && ($extension != "png") && ($extension != "gif"))
            {
                //echo ' Unknown Image extension ';
                $errors=1;
            }
            else
            {
                $size=filesize($this->files['url']['tmp_name']);
                if ($size > 3 *1024)
                {
                    //echo "You have exceeded the size limit";
                    $errors=1;
                }

                if($extension=="jpg" || $extension=="jpeg" )
                {
                    $src = imagecreatefromjpeg($fileToUpload);
                }
                else if($extension=="png")
                {
                    $src = imagecreatefrompng($fileToUpload);
                }
                else
                {
                    $src = imagecreatefromgif($fileToUpload);
                }

                list($width,$height)=getimagesize($fileToUpload);

                $newwidth=150;
                $newheight=($height/$width)*$newwidth;
                $tmp=imagecreatetruecolor($newwidth,$newheight);

                imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
                    $width,$height);

                $filename = $this->upload . $this->files['url']['name'];
                $thumb = $this->upload . 'small_' . $this->files['url']['name'];

                imagejpeg($src, $filename, 100);
                imagejpeg($tmp,$thumb,100);
            }
        }

        if(!$errors)
        {
            // mysql_query("update SQL statement ");
            return $image;
        } else {
            return $errors;
        }
    }

    private function getExtension($filename) {
        $indexOfDot = strrpos($filename,".");
        if (!$indexOfDot)
        {
            return "";
        }
        $extensionLength = strlen($filename) - $indexOfDot;
        $extension = substr($filename,$indexOfDot+1,$extensionLength);
        return $extension;
    }
}