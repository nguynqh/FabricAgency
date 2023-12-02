<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar_sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/properties_form.css">
    <title>Properties</title>
</head>
<body>
    <div class="container-scroller">
        <?php include '../base/navbar.php'; ?>
        <div class="page-body-wraper">
            <?php include '../base/sidebar.php'; ?>
            <div class="main-content-wrap">
                <div class="categories_properties">
                    <div class="main-label item">Add a category <!--(Xoa,Xem,Sua)--></div>
                    <div class="form-add-cate" style="padding-left: 20px">              
                        <!-- ID hide when in mode Add-->
                        <div class="product-id item" style="display: none;">
                            <h3>Id:</h3>
                            <input type="text" class="input-id" placeholder="C45902" >
                        </div>
                        <!-- NAME -->
                        <div class="product-name item">
                            <h3>Name:</h3>
                            <input type="text" class="" placeholder="Text your category name">
                        </div>
                        <!-- COLOR -->
                        <div class="product-color item">
                            <h3>Color:</h3>
                            <input type="color" class="input-color" id="colorPicker">
                            <h3 id="colorCode" >Your color code: </h3>
                            <h3 id="selectedColor" style="padding-left: 3px; color: #7c858b" >please choose your color</h3>
                        </div>
                        <!-- CURRENT PRICE -->
                        <div class="product-current-price item">
                            <h3 style="font-weight: 500;">Price:</h3>
                            <input type="text" name="" id="inPutPrice" class="" placeholder="Enter category price" style="width: 165px;">
                            <h3>đ</h3>
                        </div>
                        <!-- SUPPLIER -->
                        <div class="product-supplier item">
                            <h3>Chọn nhà cung cấp:</h3>
                            <select name="" id="selectSupplier" class="select-supplier" >
                                <option value="default" disabled hidden selected >Select a supplier</option>
                                <option value="value1">hieu</option>
                                <option value="value2">duc</option>
                                <option value="value3">haas</option>
                                <option value="value1">hieu</option>
                                <option value="value2">duc</option>
                                <option value="value3">haas</option>
                            </select>
                        </div>
                        <!-- QUANTITY -->
                        <div class="product-quantity item" style="display: block;">
                            <!-- the number of bolt of this category in warehouse -->
                            <h3 id="quantity">Quantity: 0</h3>
                            <div class="add-bolt-container" id="formAddBolt">
                                <!-- <div class="add_bolt">
                                    <span class="id-bolt" id="idBolt">1.</span>
                                    <img src="../image/bolt-removebg-preview.png" alt="" class="botl-icon">
                                    <input type="text" placeholder="length" id="lengthOfBolt" style="width: 52px;">
                                    <span>m</span>
                                </div>  -->
                            </div>
                            <div class="action-button-bolt-form">
                                <button id="addBolt" class="button-action">Add a bolt</button>
                                <button id="delBolt" class="button-action">Del</button>
                            </div>
                        </div>
                        <!-- SUBMIT BUTTON -->
                        <div class="submit-button" style="padding-left: 40%;">
                            <div class="Btn">
                                <span class="btn-icon">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="text">Create</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/properties_form.js"></script>

</body>
</html>