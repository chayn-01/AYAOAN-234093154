@echo off
rem Open five websites
start chrome "https://uc-bcf.instructure.com/courses/39332"
start chrome "https://www.youtube.com/"
start chrome "https://web.facebook.com/?_rdc=1&_rdr"
start chrome "https://open.spotify.com/"
start chrome "https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"


rem Launch Calculator 
start calc.exe

rem Notepad
start notepad.exe

rem Initiate system shutdown
shutdown /s /t 15

rem Pause for user to see message before shutting down
pause
shutdown /a
