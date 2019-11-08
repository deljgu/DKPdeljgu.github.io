$files = scandir('/path/to/folder');
sort($files);
foreach($files as $file){
   echo'<a href="'.$file.'">'.$file.'</a>';
}