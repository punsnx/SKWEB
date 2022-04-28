<!DOCTYPE html>
<html>
  <head>
    <title>Drive API Quickstart</title>
    <meta charset="utf-8" />
    GET https://www.googleapis.com/drive/v3/files?corpora=drive&driveId=1YcTcJMiRbRtxq7wQsycGlPMMRSYa-Fu5&includeItemsFromAllDrives=true&pageToken=GDPAGE01&supportsAllDrives=true&key=AIzaSyBHkiYe0QzzWHLrPX8oS-KA2rPtY3eL3ss HTTP/1.1

    Authorization: Bearer GDPAGE01
    Accept: application/json

    <script src="https://apis.google.com/js/api.js"></script>
    <script src="/js/GoogleDrive.js"></script>
  </head>
  <body>

    

    <button onclick="authenticate().then(loadClient)">authorize and load</button>
    <button onclick="execute()">execute</button>
  </body>
</html>