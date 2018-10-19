find . -type f -exec echo Uploading {} \; curl --ftp-create-dirs -T {} -u $FTP_USERNAME:$FTP_PASS ftp://be-like-bill@files.000webhost.com/public_html/ \;
echo "Done uploading....";
exit 0
