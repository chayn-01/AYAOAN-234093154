@echo off
rem BSCRIPT02.bat: Shape area and type calculator

:menu
cls
echo ==============================
echo Three Shapes
echo ==============================
echo 1. Circle
echo 2. Triangle
echo 3. Quadrilateral
echo ==============================
choice /c 123 /m "Enter a number (1-3):"

if errorlevel 3 goto quadrilateral
if errorlevel 2 goto triangle
if errorlevel 1 goto circle

:circle
set /p radius="Enter the radius:" 
set /a area=314*radius*radius/100
echo The area of the circle is %area%
pause
goto menu

:triangle
set /p a="Enter the length of side a:"
set /p b="Enter the length of side b:" 
set /p c="Enter the length of side c:"

rem Calculate semi-perimeter
set /a p=(a+b+c)/2

rem Calculate area using Heron's formula
set /a area=p*(p-a)*(p-b)*(p-c)
set /a area=%temp%

echo The area of the triangle is %area%

rem Determine the type of triangle
if "%a%"=="%b%" (
    if "%b%"=="%c%" (
        echo The triangle is equilateral.
    )else if "%a%"=="%c%" (
        echo The triangle is isosceles.
    )
) else if "%b%"=="%c%" (
    echo The triangle is isosceles.
) else (
    echo The triangle is scalene.
)
goto menu

:quadrilateral
set /p length="Enter the length:" 
set /p width="Enter the width:" 
set /a area=length*width
echo The area of the quadrilateral is %area%
if "%length%"=="%width%" (
    echo The quadrilateral is a square.
) else (
    echo The quadrilateral is a rectangle.
)
goto menu

:end
echo Calculation completed.

