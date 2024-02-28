
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Inventory</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('home') }}">Inv</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::is('home') ? 'active' : '' }}"><a class="nav-link " href="{{ route('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
      
      <li class="menu-header">Products</li>
      <li class="{{ Request::is('products') ? 'active' : '' }}"><a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-box"></i><span>Product List</span></a></li>
      <li class="{{ Request::is('categories') ? 'active' : '' }}"><a href="{{ route('categories.index') }}"><i class="fas fa-box"></i><span>Product Categories</span></a></li>
    </ul>  
</aside>
