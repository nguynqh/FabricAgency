<!-- sidebar -->
<div class="side-bar">
    <ul class="sidebar-item-wraper">
        <li class="sidebar-item">
            <a href="#trang chu">
                <div class="sidebar-item-icon">
                    <i class="bi bi-house"></i>
                </div>
                <div class="sidebar-item-text">Dashboard</div>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#employee">
                <div class="sidebar-item-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="sidebar-item-text">Employee</div>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#the loai">
                <div class="sidebar-item-icon">
                <i class="bi bi-building-fill-gear"></i>
                </div>
                <div class="sidebar-item-text">Suppliers</div>
            </a>
        </li>
        <li class="sidebar-item" onclick="clearSession()">
            <a href="../pages/test_search_receipt.php" id="receipt">
                <div class="sidebar-item-icon">
                    <i class="bi bi-receipt-cutoff"></i>
                </div>
                <div class="sidebar-item-text">Receipt</div>
            </a>
        </li>
        
        <li class="sidebar-item">
            <a href="../pages/properties_form.php" id="receipt">
                <div class="sidebar-item-icon">
                    <i class="bi bi-tag"></i>
                </div>
                <div class="sidebar-item-text">Categories</div>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#the loai">
                <div class="sidebar-item-icon">
                    <i class="bi bi-people"></i>
                </div>
                <div class="sidebar-item-text">Customer</div>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="../pages/order.php">
                <div class="sidebar-item-icon">
                    <i class="bi bi-receipt"></i>
                </div>
                <div class="sidebar-item-text">Order</div>
            </a>
        </li>
    </ul>
</div>

<script>
    function clearSession() {
        // Using JavaScript to redirect and clear the session
        window.location.href = '../pages/test_search_receipt.php';
        // Assuming "fulldata" is the name of your session variable, you can change it accordingly
        sessionStorage.removeItem('fulldata');
        // console.log('test');
    }
</script>