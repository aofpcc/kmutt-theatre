<head>
    <title>Food and beverage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/ionicons@4.4.6/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand">Brand</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Text</a>
            </li>
        </ul>
    </div>
</nav> -->
<div class="d-flex justify-content-start">
        <form action="/emp/fnb/do_order" method="post">
            <div class="container-fluid" style="margin-top:100px;">
                <div class="form-group">
                    <label for="empID">Employee ID</label>
                    <div class="form-inline" style="margin-top:10px;">
                        <input type="text" class="form-control w-35" name="empID" id="empID" aria-describedby="helpId" placeholder="" required="required">
                        <small style="margin-left:20px;">Check EmpID ?  </small>
                        <div style="margin-left:5px;" class="btn btn-primary" onclick="checkemp()">
                            Check <span class="badge badge-primary"></span>
                        </div>
                        <span id="empvalid" style="margin-left:5px; display:none;">  Emp Valid <i class="icon ion-md-checkmark" style="font-size:20px; color:green; padding-left:10px;"></i></span>
                        <span id="empinvalid" style="margin-left:5px; display:none;">  Emp Invalid <i class="icon ion-md-close" style="font-size:20px; color:red; padding-left:10px;"></i></span>

                    </div>
                </div>

                <div class="form-group">
                    <label for="CusID">Membership</label>
                    <div class="form-inline" style="">
                        <input type="text"  class="form-control w-35" name="CusID" id="CusID" aria-describedby="helpId" placeholder="">
                        <small style="margin-left:20px;">Check CusID ?  </small>
                         <div style="margin-left:5px;" class="btn btn-primary" onclick="checkcusid()">
                                Check <span class="badge badge-primary"></span>
                         </div>
                         <span id="membervalid" style="margin-left:5px; display:none;">  Member Valid <i class="icon ion-md-checkmark" style="font-size:20px; color:green; padding-left:10px;"></i></span>
                       <span id="memberinvalid" style="margin-left:5px; display:none;">  Member Invalid <i class="icon ion-md-close" style="font-size:20px; color:red; padding-left:10px;"></i></span>
                    </div>
                </div>
            </div>
</div>

<div id="sellbox" style="display:none;">
    <div class="container d-flex flex-row " style="margin-top:10px;" >
        <div>
            Type
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input typeCheckbox" name="type" id="Check1" value="PC" onclick="select_type(this.id)" />  POPCORN
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input typeCheckbox" name="type" id="Check2" value="DR" onclick="select_type(this.id)" /> DRINK
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input typeCheckbox" name="type" id="Check4" value="SN" onclick="select_type(this.id)" /> SNACK
                </label>
            </div>
            <div class="form-check" id="divsetbox" style="display:none;">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input typeCheckbox" name="type" id="Check3" value="PRST" onclick="select_type(this.id)" /> SET
                </label>
            </div>
        </div>

        <div id="setbox" style="margin-left:15px; display:none;">
            Set Promotion
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input setCheckbox" name="setpromotion" id="set1" value="01" onclick="select_set(this.id)" />  Couple
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input setCheckbox" name="setpromotion" id="set2" value="02" onclick="select_set(this.id)" /> Combo
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input setCheckbox" name="setpromotion" id="set3" value="03" onclick="select_set(this.id)" /> Family Set
                </label>
            </div>
        </div>
        <div id="flavorbox" style="margin-left:15px; display:none;">
            Flavor
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input flavorCheckbox" name="flavor" id="flavor1" value="CH" onclick="select_flavor(this.id)" />  Cheese
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input flavorCheckbox" name="flavor" id="flavor2" value="ST" onclick="select_flavor(this.id)" /> Salt
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input flavorCheckbox" name="flavor" id="flavor3" value="CA" onclick="select_flavor(this.id)" /> Caramel
                </label>
            </div>
        </div>
        <div id="drinkbox" style="margin-left:15px; display:none;">
            Drink
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input drinkCheckbox" name="drink" id="drink1" value="PS" onclick="select_drink(this.id)" />  Pepsi
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input drinkCheckbox" name="drink" id="drink2" value="SP" onclick="select_drink(this.id)" /> Sprite
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input drinkCheckbox" name="drink" id="drink3" value="FG" onclick="select_drink(this.id)" /> Fanta Green
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input drinkCheckbox" name="drink" id="drink4" value="FN" onclick="select_drink(this.id)" /> Fanta Orange
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input drinkCheckbox" name="drink" id="drink5" value="FR" onclick="select_drink(this.id)" /> Fanta Red
                </label>
            </div>
        </div>

        <div id="snackbox" style="margin-left:15px; display:none;">
            Snack
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input snackCheckbox" name="snack" id="snack1" value="FB" onclick="select_snack(this.id)" />  Fisho Bar-B-Q
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input snackCheckbox" name="snack" id="snack2" value="FO" onclick="select_snack(this.id)" />  Fisho Original
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input snackCheckbox" name="snack" id="snack3" value="LC" onclick="select_snack(this.id)" />  Lay's Cheese and Bacon
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input snackCheckbox" name="snack" id="snack4" value="LO" onclick="select_snack(this.id)" />  Lay's Original
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input snackCheckbox" name="snack" id="snack5" value="LS" onclick="select_snack(this.id)" /> Lay's Spicy
                </label>
            </div>
        </div>


        <div id="sizebox" style="margin-left:25px; display:none; ">
            Size
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input sizeCheckbox" name="size" id="size1" value="0S" onclick="select_size(this.id)" /> S
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input sizeCheckbox" name="size" id="size2" value="0M" onclick="select_size(this.id)" /> M
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input sizeCheckbox" name="size" id="size3" value="0L" onclick="select_size(this.id)" /> L
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input sizeCheckbox" name="size" id="size4" value="XL" onclick="select_size(this.id)" /> XL
                </label>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top:15px;">
        <div onclick="additem()" class="btn btn-primary" >ADD</div>
    </div>
    <div class="container" style=" margin-top:20px;">
        <table class="table table-light">
            <thead class="">
                <tr>
                <th>Productname</th>
                <th>Price_per_unit</th>
                <th>Unit</th>
                <th>Sum</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="items">

            </tbody>
        </table>
        <div id="totalprice">Total = ??</div><br>
            <div class="d-flex flex-column">
                <div class="form-inline" style="margin-top:10px;">
                    <div class="form-group">
                        <label for="my-input" style="margin-right:5px;">Payment</label><i class="icon-ok"></i>
                        <select id="my-input" style="width:100px;" name="payment" class="custom-select" onchange="couponcheck(this.value)">
                            <option value="Cash">Cash</option>
                            <option value="Visa">Visa</option>
                            <option value="Coupon">Coupon</option>
                        </select>
                        <div id="couponbox" style="margin-left:10px; display:none;">
                            <input type="text" class="form-control w-35" name="coupon" id="couponcode" aria-describedby="helpId" placeholder="">
                            <small style="margin-left:5px;">if coupon check valid code ?</small>
                            <div class="btn btn-primary" onclick="checkcoupon()">
                                Check <span class="badge badge-primary"></span>
                            </div>
                            <span id="codevalid" style="margin-left:5px; display:none;">  Code Valid <i class="icon ion-md-checkmark" style="font-size:20px; color:green; padding-left:10px;"></i></span>
                            <span id="codeinvalid" style="display:none;">  Code Invalid <i class="icon ion-md-close" style="font-size:20px; color:red; padding-left:10px;"></i></span>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary"></div>
        </form>
    </div>
</div>

<script src="/layouts/group13/js/script.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
