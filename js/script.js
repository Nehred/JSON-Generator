/*
[
  {
    "id":1,
    "value":"foo"
  },
  {
    "id":2,
    "value":"bar"
  },
  {
    "id":3,
    "value":"baz"
  }
]
*/
var data=null;

function generateJson() {
  document.getElementById('json').value="";
  var json=[];
  document.querySelectorAll('input').forEach(function(item, index, list) {
    var obj = {};
    obj.id = item.id;
    obj.value = item.value;
    json.push(obj);
  });
  document.getElementById('json').value=JSON.stringify(json);
}
function parseJson() {
  var fields=document.getElementById('fields');
  fields.innerHTML="";
  var parseButton=document.getElementById('parseButton');
  var generateButton=document.getElementById('generateButton');
  data = JSON.parse(document.getElementById('json').value);
  for (var index in data) {
    var fieldTemplate = document.getElementById('fieldTemplate').innerHTML;
    var compiledFieldTemplate = _.template(fieldTemplate);
    var html = compiledFieldTemplate(data[index]);
    fields.innerHTML += html;
  }
}
