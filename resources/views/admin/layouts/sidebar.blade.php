<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">
        <section class="sidebar-wrapper">


            <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                <i class="fas fa-home"></i>
                <span>خانه</span>
            </a>



            <section class="sidebar-part-title">بخش تراکنشها</section>
            <a href="{{ route('admin.market.alltransaction.index') }}" class="sidebar-link">
                <i class="fas fa-search-dollar"></i>
                <span>همه تراکنشها</span>
            </a>
            <a href="{{ route('admin.market.successtransaction.index') }}" class="sidebar-link">
                <i class="fas fa-search-dollar"></i>
                <span>تراکنشهای موفق</span>
            </a>
            <a href="{{ route('admin.market.failedtransaction.index') }}" class="sidebar-link">
                <i class="fas fa-search-dollar"></i>
                <span>تراکنشهای ناموفق</span>
            </a>


            <section class="sidebar-part-title">تنظیمات</section>
            <a href="{{ route('admin.market.merchant.index') }}" class="sidebar-link">
                <i class="fas fa-cog"></i>
                <span>تنظیمات مرچنت کد</span>
            </a>
            <a href="{{ route('admin.market.admininfo.index') }}" class="sidebar-link">
                <i class="fas fa-cog"></i>
                <span>تنظیمات ادمین</span>
            </a>

            <a href="{{ route('admin.market.websiteaddress.index') }}" class="sidebar-link">
                <i class="fas fa-cog"></i>
                <span>ادرس وبسایت شما</span>
            </a>

        </section>
    </section>
</aside>
