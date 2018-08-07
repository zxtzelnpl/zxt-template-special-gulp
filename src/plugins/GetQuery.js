function PluginGetQuery(key){
  var search = location.search;
  var query = search.slice(1);
  var _info = query.split('&');
  var value= null;
  _info.forEach(function(info){
    var arr = info.split('=');

    if(arr[0]===key){
      value = arr[1]
    }
  })
  return value;
}
