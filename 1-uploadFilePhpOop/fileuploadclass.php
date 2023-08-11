<?php 
class fileUpload
{
/*
*  class by skmcoder
* create in 2020/11/1 9: 57pm
*/
/* This is useful for running the correct message printing   */
private $SuccessMessage = true;
/* File name for lifting */
private $fileName;
/* Allowed size */
private $sizeAllow;
/* The quality of the file is allowed to lift*/
private $typeFileAllow = [];
/* The name of the file we want to raise  */
private $uploadTo;
/*The errors for checking the filee file */
private $e = array();
/* Standard files are allowed to upload */
private const standrTypefile = array('jpeg', 'jpg', 'png', 'gif', 'jfif');
//The beginning of the error message Bottestrap
private $startMessageBootstrab = "<h6  align='right' style='color:red'>";
//The end of the error message Bottestrap
private $endMessageBootstrab = "</h6>";
// The beginning of the health of Potstrap
private $startMessageBootstrabSuccess = "<h6  align='right' style='color:green'>";
//End of healthboards
private $endMessageBootstrabSuccess = "</h6>";
//Standard size files
private const standrSizeFile = 20000000000;
//File type error message
private const messageTypeFile = "The file you rose does not match the required formula";
//File size error message
private const messageSizeFile = "The file is larger than the desired size";
//File link after lift
public $filePathAfterUpload;
//Special message when the lifting process is successful
private $messageSuccess;
/*
* The main call for the files
*/
/**
* Undocumented function
*
* @param [type] $fileName
* @param [type] $uploadTo
* @param [type] $messageSuccess
* @param [array] $typeFileAllow
* @param [type] $sizeAllow
* @return void
*/
public function __construct($fileName, $uploadTo, $messageSuccess = null, $typeFileAllow = null, $sizeAllow = null)
{
$this->messageSuccess = $messageSuccess;
$this->fileName       = $fileName;
$this->sizeAllow      = $sizeAllow;
$this->typeFileAllow  = $typeFileAllow;
$this->uploadTo       = $uploadTo;
$this->setErrors();
$this->checkUpload();
//To cut the file extension (../) from the file link
// return  str_replace('../', '', $this->filePathAfterUpload);
}
/*
* Bring the file quality
*/
private function getFileType()
{
if (isset($_FILES[$this->fileName]['name'])) {
$fileName = $_FILES[$this->fileName]['name'];
}
/*File format*/
if (isset($_FILES[$this->fileName]['name'])) {
$file_extension = pathinfo($fileName, PATHINFO_EXTENSION);
return $file_extension;
}
}
/*
* The function of this function is checking the file if it is required
*
*/
/**
* Undocumented function
*
* @return void
*/
private  function checkAllowType()
{
if (!empty($this->typeFileAllow)) {
$typeCheck = in_array($this->getFileType(), (array) $this->typeFileAllow);
} else if (empty($this->typeFileAllow)) {
$typeCheck = in_array($this->getFileType(), self::standrTypefile);
}
if ($typeCheck == false) {
return false;
} else {
return true;
}
}
/*
* The function of this function is checking the file size
*/
/**
* Undocumented function
*
* @return void
*/
private function checkAllowSize()
{
if (!empty($this->sizeAllow)) {
if ($_FILES[$this->fileName]['size'] > $this->sizeAllow) {
return false;
} else {
return true;
}
} else if (empty($this->sizeAllow)) {
if ($_FILES[$this->fileName]['size'] > self::standrSizeFile) {
return false;
} else {
return true;
}
}
}
/*
* The function of this function is to mode errors resulting from file scan
*/
/**
* Undocumented function
*
* @return void
*/
private function setErrors()
{
/* Check the file type that will raise */
if ($this->checkAllowType() == false) {
$this->e[] = $this->startMessageBootstrab . self::messageTypeFile . $this->endMessageBootstrab;
}
/* Check the file size that will be raised */
if ($this->checkAllowSize() == false) {
$this->e[] = $this->startMessageBootstrab . self::messageSizeFile . $this->endMessageBootstrab;
}
}
/*
* The function of this function is an extension of the file and returned
*/
private function getFilePath()
{
if ($this->checkAllowType() != false && $this->checkAllowSize() != false) {
$rand                      = substr(md5(uniqid(rand(), true)), 3, 10);
$path                      = $this->uploadTo . '/' . $rand . '_' . time() . '.' . $this->getFileType();
$this->filePathAfterUpload = $path;
return $path;
} else {
return false;
}
}
/*
* The function of this function is printing errors resulting from file scan
*/
public function checkUpload()
{
if (isset($_FILES[$this->fileName]['error'])) {
if ($_FILES[$this->fileName]['error'] > 0) {
if ($_FILES[$this->fileName]["name"] == "") {
echo  $this->startMessageBootstrab . "Please choose a file " . $this->endMessageBootstrab;
} else {
echo  $this->startMessageBootstrab . "There are anonymous errorsors:" . $_FILES[$this->fileName]['error'] . $this->endMessageBootstrab;
}
return false;
}
}
if (!empty($this->e)) {
foreach ($this->e as $errors) {
echo  $errors;
}
return false;
}
//Upload the file if there are no errors
if ($this->checkAllowType() != false && $this->checkAllowSize() != false) {
// Start the lifting process
$this->filePathAfterUpload = $this->getFilePath();
$okUpload                  = move_uploaded_file($_FILES[$this->fileName]['tmp_name'], $this->filePathAfterUpload);
if ($okUpload && $this->SuccessMessage == true) {
echo  $this->startMessageBootstrabSuccess . $this->messageSuccess . $this->endMessageBootstrabSuccess;
}
echo  ' <script>
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>';
return true;
}
}
};
?>