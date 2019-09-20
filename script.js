function init(){
  console.log("hello world");
  getpagamenti();
  $(document).on("click",".btn-delete",deletepagamento);
}
function resetbox(){
  $(".accepted-items,.pending-items,.rejected-items").html("");
}
function deletepagamento(){
  var idreturn = $(this).parent().attr("data-id");
  $.ajax({
    url:"deletepagamento.php",
    method:"GET",
    data:{
      id:idreturn,
    },
    success:function(data){
      getpagamenti();
    },
    error:function(){
      alert("error");
    }
  })
}
function getpagamenti(){
  resetbox();
  $.ajax({
    url:"pagamenti.php",
    method:"GET",
    success:function(data){
      printpagamenti(data);
    }
  })
}
function printpagamenti(data){
  var obj ;
  var source=$("#item-template").html();
  var template=Handlebars.compile(source);
  for (var i=0;i<data.length;i++){
    var d=data[i];
      if(d.status ==='accepted'){
        obj=$(".accepted-items");
      }else if(d.status ==='pending'){
        obj=$(".pending-items");
      }else{
        obj=$(".rejected-items");
      }
      var context={
        id:d.id,
        numeropr:d.prenotazione_id,
        price:d.price,
        pagante:d.pagante_id
      };
      var html=template(context);
      obj.append(html);
  }
}
$(document).ready(init);
