
<div class="sidenav-profile">
    <div class="user-profile"><img src="/public/api/img/logo.jpg" alt=""></div>
    <div class="user-info">
        <h5 class="user-name mb-1 text-white">Okanga</h5>
        <p class="available-balance text-white">Bal. &#8358;<span
                class="counter"><?="0.00"?></span></p>
    </div>
</div>
<!-- Sidenav Nav-->
<ul class="sidenav-nav ps-0">
    <li><a href="/user/dashboard/profile"><i class="ti ti-user"></i>My Profile</a></li>
    <li><a href="/user/dashboard/profile"><i class="ti ti-wallet"></i>Fund Wallet</a></li>
    <li><a href="/user/dashboard/profile"><i class="ti ti-transfer"></i>Withdrawal</a></li>
    <li class="suha-dropdown-menu"><a href="#"><i class="ti ti-building-store"></i>Shop</a>
        <ul>
            <li><a href="/user/dashboard/products">Buy Products</a></li>
            <li><a href="/user/dashboard/purchase/history">History</a></li>
        </ul>
    </li>
    <li><a href="/user/dashboard/profile"><i class="ti ti-heart"></i>My Wishlist</a></li>
    
    <li><a href="pages.html"><i class="ti ti-notebook"></i>Installment</a></li>
    <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="ti ti-bolt"></i>Bills Payment</a>
        <ul>
            <li><a href="wishlist-grid.html">Wishlist Grid</a></li>
            <li><a href="wishlist-list.html">Wishlist List</a></li>
        </ul>
    </li>
    <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="ti ti-phone"></i>VAS</a>
        <ul>
            <li><a href="wishlist-grid.html">Wishlist Grid</a></li>
            <li><a href="wishlist-list.html">Wishlist List</a></li>
        </ul>
    </li>
    
    <!-- <li><a href="settings.html"><i class="ti ti-adjustments-horizontal"></i>Settings</a></li> -->
    <?php
        if(session()->get('user_role')==false){?>
        <li><a href="/login"><i class="ti ti-logout"></i>Login</a></li>
       <?php }else{ ?>
        <li><a href="/user/auth/logout"><i class="ti ti-logout"></i>Sign Out</a></li>
       <?php } ?>
</ul>