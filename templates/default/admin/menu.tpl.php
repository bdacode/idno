<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/') echo 'class="active"'; ?>><a href="/admin/" >Administration</a></li>
            <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/plugins/') echo 'class="active"'; ?>><a href="/admin/plugins/">Plugins</a></li>
            <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/dependencies/') echo 'class="active"'; ?>><a href="/admin/dependencies/">Dependencies</a></li>
            <?=$this->draw('admin/menu/items')?>
            <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/about/') echo 'class="active"'; ?>><a href="/admin/about/">About</a></li>
        </ul>
    </div>
</div>