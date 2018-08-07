function PluginClickCopy(input_id){
  var input = document.getElementById("input_id");
  input.select();
  document.execCommand("copy");
  alert("复制成功");
}
