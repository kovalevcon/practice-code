<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 06.09.18
 * Time: 11:14
 */

class FileMaster {
    /** @var string|null $extension */
    private $extension;
    /** @var string|null $filename */
    private $filename;
    /** @var string|null $dirpath */
    private $dirpath;

    /**
     * FileMaster constructor.
     *
     * @param string $filepath
     * @return void
     */
    public function __construct(string $filepath)
    {
        $posDot = strpos($filepath, '.');
        $posSlash = strrpos($filepath, '/');
        $this->extension = mb_substr($filepath, $posDot + 1);
        $this->filename = mb_substr(mb_substr($filepath, 0, $posDot), $posSlash + 1);
        $this->dirpath = mb_substr($filepath, 0, $posSlash + 1);
    }

    /**
     * Get extension
     *
     * @return string|null
     */
    public function extension()
    {
        return $this->extension;
    }

    /**
     * Get filename
     *
     * @return string|null
     */
    public function filename()
    {
        return $this->filename;
    }

    /**
     * Get directory path
     *
     * @return string|null
     */
    public function dirpath()
    {
        return $this->dirpath;
    }
}

echo "<pre>new FileMaster('/Users/person1/Pictures/house.png')</pre>";
$fm = new FileMaster('/Users/person1/Pictures/house.png');

echo "<pre>\$fm->extension()\r\n";
echo $fm->extension(); // png
echo "</pre>";

echo "<pre>\$fm->filename()\r\n";
echo $fm->filename(); // house
echo "</pre>";

echo "<pre>\$fm->dirpath()\r\n";
echo $fm->dirpath(); // /Users/person1/Pictures/
echo "</pre>";