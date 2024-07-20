@echo off
rem BSCRIPT03.bat: Fundamental Windows utilities 

:menu
cls
echo ==============================
echo Windows Utilities Menu
echo ==============================
echo 1. ipconfig
echo 2. tasklist
echo 3. taskkill
echo 4. chkdsk
echo 5. format
echo 6. defrag
echo 7. find
echo 8. attrib
echo 9. Exit
echo ==============================
choice /c 12345678 /m "Select a utility (1-8):"

if errorlevel 9 goto end
if errorlevel 8 goto attrib
if errorlevel 7 goto find
if errorlevel 6 goto defrag
if errorlevel 5 goto format
if errorlevel 4 goto chkdsk
if errorlevel 3 goto taskkill
if errorlevel 2 goto tasklist
if errorlevel 1 goto ipconfig

:ipconfig
echo.
echo Running ipconfig...
ipconfig
pause
goto menu

:tasklist
echo.
echo Running tasklist...
tasklist
pause
goto menu

:taskkill
set /p pid="Enter the PID of the process to kill: "
taskkill /pid %pid% 
if errorlevel 1 (
    echo Failed to kill the process.
) else (
    echo Process terminated successfully.
)
pause
goto menu

:chkdsk
echo.
echo Enter the drive letter to check (e.g., C:):
set /p drive=
if "%drive%"=="" goto menu
chkdsk %drive%
pause
goto menu

:format
echo.
echo WARNING: Formatting a drive will erase all data on it.
echo Enter the drive letter to format (e.g., E:):
set /p drive=
if "%drive%"=="" goto menu
format %drive% /FS:NTFS
pause
goto menu

:defrag
echo.
echo Enter the drive letter to defrag (e.g., C:):
set /p drive=
if "%drive%"=="" goto menu
defrag %drive%
pause
goto menu

:find
echo.
echo Enter the text to find in files:
set /p text=
if "%text%"=="" goto menu
echo Enter the path to search (e.g., C:\path\to\folder):
set /p path=
if "%path%"=="" goto menu
find "%text%" "%path%\*"
pause
goto menu

:attrib
echo.
echo Enter the file or directory to change attributes (e.g., C:\path\to\file.txt):
set /p file=
if "%file%"=="" goto menu
echo Enter the attributes to set (e.g., +R for read-only, -R to remove read-only):
set /p attributes=
if "%attributes%"=="" goto menu
attrib %attributes% "%file%"
pause
goto menu

:end
echo Process Completed!
goto :eof
