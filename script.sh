mkdir docs
php-cgi -f index.php content=2017_02_06.php generator=script generated=docs/2017_02_06.html > docs/2017_02_06.html
php-cgi -f index.php content=2017_02_07.php generator=script generated=docs/2017_02_07.html > docs/2017_02_07.html
php-cgi -f index.php content=2017_02_08.php generator=script generated=docs/2017_02_08.html > docs/2017_02_08.html
php-cgi -f index.php content=2017_02_09.php generator=script generated=docs/2017_02_09.html > docs/2017_02_09.html
php-cgi -f index.php content=2017_02_10.php generator=script generated=docs/2017_02_10.html > docs/2017_02_10.html
php-cgi -f index.php content=2017_02_13.php generator=script generated=docs/2017_02_13.html > docs/2017_02_13.html

mkdir docs/styles
cp blogstyle.css docs/styles
cp img docs/

