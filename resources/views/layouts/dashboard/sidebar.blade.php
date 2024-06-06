<div class="sidebar" data-color="orange">
    <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
    <div class="logo">
      <a href="" class="simple-text logo-mini">Ad.</a>
      <a href="" class="simple-text logo-normal">Dashboard</a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li>
          <a href="{{ route('product.index') }}">
            <i class="now-ui-icons design_app"></i>
            <p>Products</p>
          </a>
        </li>
        <li>
          <a href="{{ route('category.index') }}">
            <i class="now-ui-icons design_app"></i>
            <p>Categories</p>
          </a>
        </li>
        <li>
          <a href="{{ route('order.index') }}">
            <i class="now-ui-icons design_app"></i>
            <p>Orders</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  