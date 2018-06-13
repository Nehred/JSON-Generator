<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JSON Generator</title>
  </head>
  <body onload="parseJson()">

    <div>
      <h1>template</h1>
      <textarea id="json" cols="30" rows="10"></textarea>
      <div>
        <button id="parseButton" onclick="parseJson()">Parse JSON</button>
        <button id="generateButton" onclick="generateJson()">Generate JSON</button>
      </div>
      <div id="fields"></div>
    </div>

    <script id="fieldTemplate" type="text/x-underscore-template">
      <input id="<%= id %>" type="text" value="<%= value %>"> <button id="minus-<%= id %>" >-</button> <button id="plus-<%= id %>" >+</button><br />
    </script>

    <script type="text/javascript" src="js/libraries/underscore-min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
