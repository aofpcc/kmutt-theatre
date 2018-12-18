function readURL(input) {
  console.log(input.files);
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#pre-img').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

function resetImg() {
  document.getElementById('pre-img').src = '/layouts/group10/img/placeholder-image.jpg';
}

$(document).ready(function () {
  $("#ads-banner").change(function () {
    console.log("Changed!");
    readURL(this);
  });

  $(".name").click(function () {
    var id = this.id.substr(4);
    $.ajax({
        method: "POST",
        url: "/emp/group10/getdata",
        data: {
          id: id
        }
      })
      .done(function (data) {
        // console.log(id, data);
        var result = $.parseJSON(data);
        document.getElementById('id').value = result.id;
        document.getElementById('ads-name').value = result.name;
        document.getElementById('link').value = result.url;
        // document.getElementById('pre-img').src = '/layouts/group10'+result.banner;
        $('#pre-img').attr('src', '/layouts/group10'+result.banner);
        document.getElementById('start-date').value = result.start_date;
        document.getElementById('end-date').value = result.end_date;
        document.getElementById('status').checked = (result.status == 'on');
      });

  });
  
  $('#ads-table').DataTable( {
    autoFill: true,
    paging: false
  });
});