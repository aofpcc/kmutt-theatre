var item = 1;
var typechoice = 4;
var flavorchoice = 3;
var drinkchoice = 5;
var sizechoice =4;
var setchoice =3;
var snackchoice=2;
var total = 0;


function removeitem(id) {
     console.log(id);
     $("#tritem"+id).remove();
     item--;
     total_price();

 }

function additem() {
 var type = $('.typeCheckbox:checked').val();

 if (type == "PC") {
     var flavor = $('.flavorCheckbox:checked').val();
     var size = $('.sizeCheckbox:checked').val();
     var productID = type + flavor + size;
     get_price(productID);
 }
 if (type == "DR") {
    var drink = $('.drinkCheckbox:checked').val();
    var size = $('.sizeCheckbox:checked').val();
    var productID = type + drink + size;
    get_price(productID);
}
if (type == "PRST") {
    var set = $('.setCheckbox:checked').val();
    var productID = type + set;
    get_price(productID);
}
if (type=="SN") {
    var snack = $('.snackCheckbox:checked').val();
    var sizeS = $('.sizeSCheckbox:checked').val();
    var productID = type + snack + '00';
    get_price(productID);
}




}
function sum_price(price,unit,id){
    var sum = price*unit;
    $("#sum"+id).val(sum);
    total_price();

}
function total_price(){
    total = 0;
    $("#totalprice").text("");

    for (var i = 1; i < item; i++) {
        total += Number($("#sum"+i).val());
    }
    $("#totalprice").text("Total = "+total);
}

function get_price(productID) {
 let formData = new FormData();
 formData.append("productID", productID);
 let xhr = new XMLHttpRequest();
 xhr.open("POST", '/emp/fnb/getprice', true); // or https://example.com/upload/image
 xhr.send(formData);
 xhr.onreadystatechange = function() {
     if (xhr.readyState == 4 && xhr.status == 200) {
         var data = JSON.parse(xhr.responseText);
         price = data[0].price;
         productName = data[0].productName;
         productID = data[0].productID;
         const markup = `<tr id="tritem${item}">
             <td>${productName}</td>
             <td>${price}</td>
             <td><input id="unit${item}" type="number" class="form-control w-25" name="item[]" min="0" onchange="sum_price(${price},this.value,${item})"></td>
             <td><input class="form-control w-25" id="sum${item}" value="" disabled></td>
             <td><input class="btn btn-danger" value="Remove" onclick="removeitem(${item})"></td>
             <td><input type="hidden" class="form-control w-25" name="product[]" value="${productID}"></td>
             </tr>
             `;
         $("#items").append(markup);
         // let check = document.getElementById("unit").value;
         // console.log(check);
         item++;
         clearall();
     }
 }

}

// function update_stock(productID) {
//  let formData = new FormData();
//  formData.append("productID", productID);
//  let xhr = new XMLHttpRequest();
//  xhr.open("POST", '/emp/fnb/getprice', true); // or https://example.com/upload/image
//  xhr.send(formData);
//  xhr.onreadystatechange = function() {
//      if (xhr.readyState == 4 && xhr.status == 200) {
//          var data = JSON.parse(xhr.responseText);
//          price = data[0].price;
//          productName = data[0].productName;
//          productID = data[0].productID;
//          const markup = `<tr id="tritem${item}">
//              <td>${productName}</td>
//              <td>${price}</td>
//              <td><input  type="number" class="form-control w-25" name="item[]" min="0" onchange="sum_price(${price},this.value,${item})"></td>
//              <td><input class="form-control w-25" id="sum${item}" value="" disabled></td>
//              <td><input class="btn btn-danger" value="Remove" onclick="removeitem(${item})"></td>
//              <td><input type="hidden" class="form-control w-25" name="product[]" value="${productID}"></td>
//              </tr>
//              `;
//          $("#items").append(markup);
//
//          item++;
//          clearall();
//      }
//  }
// }

function updateOrder(){
    let cusID = $("#CusID").val();
    let empId = $("#empID").val();
    let couponID = $("#coupon").val();
    let payment = $("#payment").val();
    let item = $("input[name='item[]']").map(function(){return $(this).val();}).get();
    let product = $("input[name='product[]']").map(function(){return $(this).val();}).get();
    let formData = new FormData();
    formData.append("cusID", null);
    formData.append("empID", empId);
    formData.append("couponID", couponID);
    formData.append("payment", payment);
    formData.append("item", item);
    formData.append("product", product);
    formData.append("total", total);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '/emp/fnb/do_order', true); // or https://example.com/upload/image
    xhr.send(formData);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let data = JSON.parse(xhr.responseText);
            if (data.result=="success"){
                alert(`update order success`);
                console.log(data);
                total_price();
                clearall();
                clearProductOrder();
            }else{
                alert("update order failed "+data.error);
            }
        }
    }
}

function getPointAndName(){
    var cusID = $("#CusID").val();
    var points = Math.floor(total/100);
    let formData = new FormData();
    formData.append("CusID", cusID);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '/emp/fnb/get_points_and_name', true); // or https://example.com/upload/image
    xhr.send(formData);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            let name = data[0].name;
            let hisPoint = data[0].hisPoint;
            $('#nameModal').text("Name : " +name );
            $('#hisPoint').text("History points : " +hisPoint + " points" );
            $('#PointNowModal').text("This time points : " +points + " points" );
            $('#points').val(points);
            $('#totalModal').text("Total : " +total + " baht" );
            $('#exampleModalCenter').modal('show')
            updateOrder();
        }
    }
}

function checkemp(){
    var empID = $("#empID").val();
    let formData = new FormData();
    formData.append("empID", empID);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '/emp/fnb/checkemp', true); // or https://example.com/upload/image
    xhr.send(formData);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            status = data[0].status;
             if(status=="Y"){
                 $("#empvalid").show();
                 $("#empinvalid").hide();
                 $("#empID").prop('readonly', true);
                 $("#sellbox").show();

             }else{
                 $("#empvalid").hide();
                 $("#empinvalid").show();
             }
        }
    }
 }

function checkcoupon(){
   var couponcode = $("#couponcode").val();
   let formData = new FormData();
   formData.append("couponcode", couponcode);
   let xhr = new XMLHttpRequest();
   xhr.open("POST", '/emp/fnb/checkcoupon', true); // or https://example.com/upload/image
   xhr.send(formData);
   xhr.onreadystatechange = function() {
       if (xhr.readyState == 4 && xhr.status == 200) {
           var data = JSON.parse(xhr.responseText);
           status = data[0].status;
            if(status=="Y"){
                $("#codevalid").show();
                $("#codeinvalid").hide();
                $("#couponcode").prop('readonly', true);

            }else{
                $("#codevalid").hide();
                $("#codeinvalid").show();
            }
       }
   }

}

function checkcusid(){
    var CusID = $("#CusID").val();
    let formData = new FormData();
    formData.append("CusID", CusID);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '/emp/fnb/checkcusid', true); // or https://example.com/upload/image
    xhr.send(formData);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            status = data[0].status;
             if(status=="Y"){
                $("#CusID").prop('readonly', true);
                 $("#divsetbox").show();
                 $("#membervalid").show();
                 $("#memberinvalid").hide();
             }else{
                 $("#divsetbox").hide();
                 $("#memberinvalid").show();
                 $("#membervalid").hide();
             }

        }
    }

 }
 
function couponcheck(type){
    if(type=="Coupon"){
        $("#couponbox").show();
    }
    else {
        $("#couponbox").hide();
        $("#codevalid").hide();
        $("#codeinvalid").hide();
        $("#couponcode").val("");
        $("#couponcode").prop('readonly', false);
    }

}

function select_type(id) {
 for (var i = 1; i <= typechoice; i++) {
     document.getElementById("Check" + i).checked = false;
 }
 document.getElementById(id).checked = true;
 if (id == "Check1") {
     $("#drinkbox").hide();
     $("#setbox").hide();
     $("#snackbox").hide();
     $("#flavorbox").show();
     $("#sizebox").show();
     clearset();
     clearsize();
     cleardrink();
     clearflavor();

 } else if (id == "Check2") {
     $("#setbox").hide();
     $("#flavorbox").hide();
     $("#sizebox").hide();
     $("#snackbox").hide();
     $("#drinkbox").show();
     $("#sizebox").show();
     clearset();
     clearsize();
     clearflavor();
     cleardrink();


 } else if (id == "Check3") {
     $("#flavorbox").show();
     $("#sizebox").hide();
     $("#drinkbox").show();
     $("#snackbox").hide();
     $("#setbox").show();
     clearsize();
     cleardrink();
     clearflavor();
     clearset();

   } else if (id == "Check4") {
         $("#flavorbox").hide();
         $("#sizebox").hide();
         $("#drinkbox").hide();
         $("#setbox").hide();
         $("#snackbox").show();
         clearsize();
         cleardrink();
         clearflavor();
         clearset();

 } else {
     $("#flavorbox").hide();
     $("#sizebox").hide();
     clearall();
 }
}

function select_flavor(id) {
 for (var i = 1; i <= flavorchoice; i++) {
     document.getElementById("flavor" + i).checked = false;
 }
 document.getElementById(id).checked = true;
}

function select_set(id) {
 for (var i = 1; i <= setchoice; i++) {
     document.getElementById("set" + i).checked = false;
 }
 document.getElementById(id).checked = true;
}

function select_drink(id) {
 for (var i = 1; i <= drinkchoice; i++) {
     document.getElementById("drink" + i).checked = false;
 }
 document.getElementById(id).checked = true;
}

function select_snack(id) {
 for (var i = 1; i <= drinkchoice; i++) {
     document.getElementById("snack" + i).checked = false;
 }
 document.getElementById(id).checked = true;
}

function select_size(id) {
 for (var i = 1; i <= sizechoice; i++) {
     document.getElementById("size" + i).checked = false;
 }
 document.getElementById(id).checked = true;
}

function check() {
 document.getElementById("popcorn").checked = true;
}

function clearsize() {
 for (var i = 1; i <= sizechoice; i++) {
     document.getElementById("size" + i).checked = false;
 }

}

function cleardrink() {
 for (var i = 1; i <= drinkchoice; i++) {
     document.getElementById("drink" + i).checked = false;
 }

}

function clearset() {
 for (var i = 1; i <= setchoice; i++) {
     document.getElementById("set" + i).checked = false;
 }

}

function clearflavor() {
 for (var i = 1; i <= flavorchoice; i++) {
     document.getElementById("flavor" + i).checked = false;
 }

}


function clearall() {
 for (var i = 1; i <= typechoice; i++) {
     document.getElementById("Check" + i).checked = false;
 }
 for (var i = 1; i <= flavorchoice; i++) {
     document.getElementById("flavor" + i).checked = false;
 }
 for (var i = 1; i <= sizechoice; i++) {
     document.getElementById("size" + i).checked = false;
 }
 for (var i = 1; i <= drinkchoice; i++) {
     document.getElementById("drink" + i).checked = false;
 }
 for (var i = 1; i <= setchoice; i++) {
     document.getElementById("set" + i).checked = false;
 }
}

function clearProductOrder(){
    let orderList = document.getElementById("items");
    while (orderList.firstChild)
    {
        orderList.removeChild(orderList.firstChild);
    }
}
