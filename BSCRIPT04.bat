@echo off
rem BSCRIPT04.bat: Sorting text files on Drive C: 

rem Define directories
set "sourceDir=C:\"
set "archiveDir=D:\archive"

rem Create the archive directory if it doesn't exist
if not exist "%archiveDir%" (
    mkdir "%archiveDir%"
)

rem  Move text files 
echo Moving text files older than 30 days from %sourceDir% to %archiveDir%...
for /r "%sourceDir%" %%F in (*.txt) do (
    forfiles /p "%%~dpF" /m "%%~nxF" /d -30 /c "cmd /c move @path "%archiveDir%\"
)
rem  List the archived files sorted by size
echo Sorting archived files by size...
dir "%archiveDir%\*.*" /s /o-s /b > "%archiveDir%\sorted_files.txt"
type "%archiveDir%\sorted_files.txt"

rem  Prompt the user for permission to delete the old, large files
echo Do you want to delete the old, large files?
choice /c yn /m "Delete files? (y/n):"
if errorlevel 2 goto end

rem Delete the files listed in sorted_files.txt
for /f "tokens=* delims=" %%A in (%archiveDir%\sorted_files.txt) do (
    del "%%A"
    echo Deleted file: %%A
)



:end
echo Process completed.

