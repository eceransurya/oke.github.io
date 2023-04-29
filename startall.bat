@echo off
echo tekan sembarang untuk menjalankan php artisan serve
pause
time out 1 >nul
start "" /B cmd /K "php artisan serve"
time out 1 >nul
start "" /B cmd /K "npm run watch"
time out 1 > nul
echo server start sukses