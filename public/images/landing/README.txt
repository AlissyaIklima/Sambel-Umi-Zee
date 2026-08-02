# ekstrak ZIP dari Downloads ke temp lalu salin gambar ke project
$zip = "$env:USERPROFILE\Downloads\sambal-umi-zee-landing.zip"
$dest = "C:\laragon\www\sambalumizee\public\images\landing"
New-Item -ItemType Directory -Path $dest -Force | Out-Null
Expand-Archive -LiteralPath $zip -DestinationPath $env:TEMP\sambal_extract -Force
Get-ChildItem -Path $env:TEMP\sambal_extract -Recurse -File -Include *.jpg,*.jpeg,*.png,*.webp,*.svg |
  ForEach-Object { Copy-Item -Path $_.FullName -Destination $dest -Force }
Get-ChildItem -Path $dest -File | Format-Table Name, @{n='KB';e={[math]::Round($_.Length/1KB,1)}}