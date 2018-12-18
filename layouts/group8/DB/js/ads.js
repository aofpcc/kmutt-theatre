
$(document).ready(function () {
  $("#ads-banner").change(function () {
    console.log("Changed!");
    readURL(this);
  });

  $(".name").click(function () {
    var id = this.id.substr(4);
    // console.log(id);
    $.post("/emp/layouts/DB/group8/jsonData/"+id).done(function (data) {
        // console.log( data);
        
        var result = $.parseJSON(data);
        document.getElementById('PromoID').value = result.PromoID;
        document.getElementById('PromoName').value = result.PromoName;
        document.getElementById('Description').value = result.Description;
        document.getElementById('Discount').value = result.Discount;
        // document.getElementById('pre-img').src = '/layouts/group10'+result.banner;
        $('#pre-img').attr('src', '/groups/group8'+result.PromoPic);
        document.getElementById('PromoCode').value = result.PromoCode;
        document.getElementById('StartDate').value = result.StartDate;
        document.getElementById('EndDate').value = result.EndDate;
      });

  });
  
  $('#Promotable').DataTable( {
    autoFill: true,
    paging: false
  });
});