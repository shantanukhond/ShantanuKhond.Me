ng build --prd
Copy-Item .\docs\index.html .\docs\resume.html
Copy-Item  .\CNAME .\docs\CNAME
git add . 
git commit -m "Conent modified"
git pull
git push